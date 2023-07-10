<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SkillKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $page = "Dashboard";
        $dt1 = Skill::all()->count();
        $dt2 = Project::all()->count();
        return view('admin.dashboard', compact('page', 'dt1', 'dt2'));
    }

    public function project()
    {
        $page = "Project Anda";
        $project = Project::all();
        return view('admin.project.index', compact('project', 'page'));
    }

    public function createproject()
    {
        $page = "Tambah Project";
        return view('admin.project.create', compact('page'));
    }

    public function storeproject(Request $request)
    {
        $data = new Project;
        $data->title = $request->title;
        $data->url = $request->url;
        $data->tahun = $request->tahun;
        $data->author = $request->author;
        $data->progres = $request->progres;
        $data->detail = $request->detail;
        $img = $request->file('img');
        $guidebook = $request->file('guidebook');
        if ($request->validate([
            'img' => 'required|mimes:png,jpg,jpeg|max:50000',
            'guidebook' => 'required|file:pdf|max:50000'
        ])) {
            $fileimg = $img->getClientOriginalName();
            $fileguidebook = $guidebook->getClientOriginalName();
            $img->storeAs('public/project/img/', $fileimg);
            $guidebook->storeAs('public/project/guidebook/', $fileguidebook);
            $data->img = $fileimg;
            $data->guidebook = $fileguidebook;
        }
        $data->save();

        Alert::success('Success!', 'Project Berhasil ditambahkan');
        return redirect()->route('project.index');
    }

    public function showproject($id)
    {
        $project = Project::findOrFail($id);
        $page = "Detail Project $project->title";
        return view('admin.project.show', compact('project', 'page'));
    }

    public function editproject($id)
    {
        $project = Project::findOrFail($id);
        $page = "Edit Project $project->title";
        return view('admin.project.edit', compact('project', 'page'));
    }

    public function updateproject(Request $request, $id)
    {
        $data = Project::findOrFail($id);
        $data->title = $request->title;
        $data->url = $request->url;
        $data->tahun = $request->tahun;
        $data->author = $request->author;
        $data->progres = $request->progres;
        $data->detail = $request->detail;
        $img = $request->file('img');
        $guidebook = $request->file('guidebook');
        if ($request->validate([
            'img' => 'required|mimes:png,jpg,jpeg|max:50000',
            'guidebook' => 'required|file:pdf|max:50000'
        ])) {
            // hapus yang lama
            Storage::delete('public/project/img/' . $data->img);
            Storage::delete('public/project/guidebook/' . $data->guidebook);
            //upload yang baru
            $fileimg = $img->getClientOriginalName();
            $fileguidebook = $guidebook->getClientOriginalName();
            $img->storeAs('public/project/img/', $fileimg);
            $guidebook->storeAs('public/project/guidebook/', $fileguidebook);
            // $img->move(public_path() . '/storage/project/img/', $fileimg);
            // $guidebook->move(public_path() . '/storage/project/guidebook/', $fileguidebook);
            $data->gambar = $fileimg;
            $data->guidebook = $fileguidebook;
        }
        $data->save();

        Alert::success('Success!', 'Project Berhasil Diupdate');
        return redirect()->route('project.index');
    }

    public function destroyproject($id)
    {
        $project = Project::findOrFail($id);
        Storage::delete('public/project/img/' . $project->img);
        Storage::delete('public/project/guidebook/' . $project->guidebook);
        $project->delete();

        Alert::success('Success!', 'Project Telah DiHapus');
        return redirect()->route('project.index');
    }

    public function profile()
    {
        $page = "Profile Website Anda";
        $profile = Profile::all();
        return view('admin.profile.index', compact('page', 'profile'));
    }

    public function editprofile($id)
    {
        $profile = Profile::findOrFail($id);
        $page = "Edit Profile Website Anda";
        return view('admin.profile.edit', compact('page', 'profile'));
    }

    public function updateprofile(Request $request, $id)
    {
        $work = str_replace(",", "&middot;", $request->work_as);

        $data = Profile::findOrFail($id);
        $data->nickname = $request->nickname;
        $data->fullname = $request->fullname;
        $data->desc = $request->desc;
        $data->work_as = $work;
        $data->about = $request->about;
        $cv = $request->file('cv');
        if ($request->validate([
            'cv' => 'required|file:pdf|max:50000'
        ])) {
            // hapus yang lama
            Storage::delete('public/profile/cv/' . $data->img);
            //upload yang baru
            $filecv = $cv->getClientOriginalName();
            $cv->storeAs('public/profile/cv/', $filecv);
            $data->cv = $filecv;
        }
        $data->save();
        Alert::success('Success!', 'Profile Berhasil Diupdate');
        return redirect()->route('profile.index');
    }

    public function skill()
    {
        $skillkategori = SkillKategori::all();
        $skil = Skill::paginate('5');
        $page = "Skill Anda";
        return view('admin.skill.index', compact('skillkategori', 'skil', 'page'));
    }

    // public function createskillkategori()
    // {
    //     $page = "Tambah Kategori Skills";
    //     return view('admin.skill.create', compact('page'));
    // }

    public function storeskillkategori(Request $request, $id)
    {
        $data = new SkillKategori;
        $data->skill_kategori = $request->skill_kategori;
        $data->icon_svg_bootstrap = $request->icon_svg_bootstrap;

        $data->save();

        Alert::success('Success!', 'Kategori Skills Berhasil Ditambahkan');
        return redirect()->route('skill.index');
    }

    public function storeskill(Request $request)
    {
        $data = new Skill;
        $data->skill_kategori_id = $request->skill_kategori_id;
        $data->skills = $request->skills;
        $data->save();

        Alert::success('Success!', 'Skills Berhasil Ditambahkan');
        return redirect()->route('skill.index');
    }

    // public function createskill()
    // {
    //     $page = "Tambah Skills";
    //     $skillkategori = SkillKategori::all();
    //     return view('admin.skill.skills.create', compact('page', 'skillkategori'));
    // }

    // public function editskillkategori($id)
    // {
    //     $skillkategori = SkillKategori::findOdFail($id);
    //     return json_encode($skillkategori);
    // }

    public function updateskillkategori(Request $request, $id)
    {
        $data = SkillKategori::findOrFail($id);
        $data->skill_kategori = $request->skill_kategori;
        $data->icon_svg_bootstrap = $request->icon_svg_bootstrap;

        $data->save();

        Alert::success('Success!', 'Kategori Skills Berhasil Diupdate');
        return redirect()->route('skill.index');
    }
    public function editskill($id)
    {
        $skill = Skill::findOrFail($id);
        return json_encode($skill);
    }

    public function updateskill(Request $request, $id)
    {
        $skill = Skill::where('id', $request->id)->get();
        foreach ($skill as $row) {
            $id = $row->id;
            $data = Skill::findOrFail($id);
        }
        $data->skill_kategori_id = $request->skill_kategori_id;
        $data->skills = $request->skills;
        $data->save();

        Alert::success('Success!', 'Skills Berhasil Diupdate');
        return redirect()->route('skill.index');
    }

    public function destroyskillkategori($id)
    {
        $skillkategori = SkillKategori::findOrFail($id);
        $skillkategori->delete();

        Alert::success('Success!', 'Kategori Skills Berhasil Dihapus');
        return redirect()->route('skill.index');
    }

    public function destroyskill($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        Alert::success('Success!', 'Skills Berhasil Dihapus');
        return redirect()->route('skill.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SkillKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function welcome()
    {
        $profile = Profile::all();
        $project = Project::latest()->get();
        $skill_kategori = SkillKategori::has('skill')->get();
        $skill = Skill::all();
        $page = "Welcome";
        return view('welcome', compact('profile', 'skill_kategori', 'skill', 'project', 'page'));
    }
    public function contactme(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $comment = $request->comment;
        $phone = $request->phone;

        $contactbody = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'comment' => $comment
        ];

        Mail::to('tmafwan@ariefafwan.com')->send(new ContactMail($contactbody));
        return redirect()->back()->with('success', 'Thanks for giving me a message, I hope we meet soon');
    }

    public function project()
    {
        $project = Project::latest()->get();
        $data = Project::latest()->paginate(9);
        $profile = Profile::all();
        $page = "My Project";
        return view('project', compact('project', 'page', 'profile', 'data'));
    }

    public function detailproject($id)
    {
        $data = Project::findOrFail($id);
        $profile = Profile::all();
        $project = Project::latest()->get();
        $page = "Detail Project";
        return view('detailproject', compact('data', 'project', 'page', 'profile'));
    }

    public function blog()
    {
        $page = "Blog";
        $profile = Profile::all();
        $project = Project::latest()->get();
        return view('blog.index', compact('page', 'project', 'profile'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\KategoriBlog;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function kategoriblog()
    {
        $page = "Daftar Kategori Blog";
        $kategori = KategoriBlog::all();
        return view('admin.blog.kategori.index', compact('page', 'kategori'));
    }

    public function editkategori($id)
    {
        $kategori = KategoriBlog::findOrFail($id);
        return json_encode($kategori);
    }

    public function storekategori(Request $request)
    {
        if ($request->validate([
            'name' => 'required',
        ])) {

            $slug = Str::slug($request->name);
            //create data
            $dataupload = new KategoriBlog();
            $dataupload->name = $request->name;
            $dataupload->slug = $slug;
            $dataupload->save();
        }
        Alert::success('Informasi Pesan!', 'Kategori Blog Baru Berhasil ditambahkan');
        return redirect()->route('kategori.index');
    }

    public function updatekategori(Request $request)
    {
        if ($request->validate([
            'name' => 'required',
        ])) {
            $kategoriblog = KategoriBlog::where('id', $request->id)->get();
            $slug = Str::slug($request->name);
            foreach ($kategoriblog as $row) {
                $id = $row->id;
                $data = KategoriBlog::findOrFail($id);
            }
            $data->name = $request->name;
            $data->slug = $slug;
            $data->save();
        }

        Alert::success('Success!', 'Kategori Blog Berhasil Diupdate');
        return redirect()->route('kategori.index');
    }

    public function destroykategori($id)
    {
        $kategori = KategoriBlog::findOrFail($id);
        $kategori->delete();

        Alert::success('Informasi Pesan', 'Berhasil Menghaspus Kategori Blog');
        return redirect()->route('kategori.index');
    }
}

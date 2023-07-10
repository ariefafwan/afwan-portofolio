<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    public function index()
    {
        $page = "Daftar Tag";
        $tag = Tag::paginate(10);
        return view('admin.blog.tag.index', compact('page', 'tag'));
    }

    public function storetag(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        //create data
        $dataupload = new Tag();
        $dataupload->name = $request->name;
        $dataupload->save();

        Alert::success('Informasi Pesan', 'Berhasil Menambahkan Tag');
        return redirect()->route('tag.index');
    }

    public function edittagjson($id)
    {
        $tag = Tag::findOrFail($id);
        return json_encode($tag);
    }

    public function updatetag(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        //update data
        $dataupload = Tag::where('id', $request->id)->get();
        $dataupload->name = $request->name;
        $dataupload->save();

        Alert::success('Informasi Pesan', 'Berhasil Mengupdate Tag');
        return redirect()->route('tag.index');
    }

    public function destroytag($id)
    {
        $dataupload = Tag::findOrFail($id);
        $dataupload->delete();

        Alert::success('Informasi Pesan', 'Berhasil Menghapus Tag');
        return redirect()->route('tag.index');
    }
}

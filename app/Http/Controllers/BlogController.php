<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\KategoriBlog;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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

        Alert::success('Informasi Pesan', 'Berhasil Menghapus Kategori Blog');
        return redirect()->route('kategori.index');
    }

    public function createartikel()
    {
        $blog = Blog::latest()->get();
        $kategoriblog = KategoriBlog::all();
        $page = "Kelola Artikel";
        return view('admin.blog.index', compact('blog', 'page', 'kategoriblog'));
    }

    public function storeartikel(Request $request)
    {
        if ($request->validate([
            'title' => 'required',
            'text' => 'required',
            'author' => 'required',
            'kategori_blog_id' => 'required|numeric',
            'img' => 'required|mimes:png,jpg,jpeg|max:100000',
        ])) {
            //slug
            $slug = Str::slug($request->title);

            $data = new Blog();
            $data->title = $request->title;
            $data->kategori_blog_id = $request->kategori_blog_id;
            $data->slug = $slug;
            $data->author = $request->author;
            $data->text = $request->text;
            $file = $request->file('img');
            //storegambar
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/artikel/img/', $filename);
            $data->img = $filename;
            //save
            $data->save();
        }

        Alert::success('Informasi Pesan', 'Berhasil Menambahkan Artikel');
        return redirect()->route('blog.index');
    }

    public function showartikel($id)
    {
        $blog = Blog::findOrFail($id);
        $page = "Detail Artikel";
        return view('admin.blog.show', compact('blog', 'page'));
    }

    public function editartikel($id)
    {
        $blog = Blog::findOrFail($id);
        $kategoriblog = KategoriBlog::all();
        $page = "Edit Artikel";
        return view('admin.blog.edit', compact('blog', 'kategoriblog', 'page'));
    }

    public function updateartikel(Request $request, $id)
    {
        if ($request->validate([
            'title' => 'required',
            'text' => 'required',
            'author' => 'required',
            'kategori_blog_id' => 'required|numeric',
            'img' => 'required|mimes:png,jpg,jpeg|max:10000',
        ])) {
            //slug
            $slug = Str::slug($request->title);

            $data = Blog::findOrFail($id);
            $data->title = $request->title;
            $data->kategori_blog_id = $request->kategori_blog_id;
            $data->slug = $slug;
            $data->author = $request->author;
            $data->text = $request->text;
            $file = $request->file('img');
            // menghapus gambar lama
            if ($request->oldImage) {
                Storage::delete('public/artikel/img/' . $data->img);
            }
            //storegambar
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/artikel/img/', $filename);
            $data->img = $filename;
            //save
            $data->save();
        }

        Alert::success('Informasi Pesan', 'Berhasil Mengupdate Artikel');
        return redirect()->route('blog.index');
    }

    public function destroyartikel($id)
    {
        $data = Blog::findOrFail($id);
        Storage::delete('public/artikel/img/' . $data->img);
        $data->delete();

        Alert::success('Informasi Pesan', 'Berhasil Menghapus Artikel');
        return redirect()->route('blog.index');
    }
}

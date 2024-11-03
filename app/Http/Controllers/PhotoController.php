<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        return view('admin.photo.index',[
            'photos' => Photo::orderBy('id','desc')->get()
        ]);
    }

    public function store(Request $request){
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!', 
        ];

        $this->validate($request, $rules, $messages);

         // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/photo', $fileName);

        Photo::create([
            'judul' => $request->judul,
            'image' => $fileName,
        ]);

        return redirect(route('photo'))->with('success', 'data photo berhasil di simpan');
    }

    public function update(Request $request ,$id){
        $photo = Photo::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'image wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/photo/' . $photo->image)) {
                \File::delete('storage/photo/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/photo', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        $photo->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
        ]);

        return redirect(route('photo'))->with('success', 'data photo berhasil di update');

    }

    public function destroy($id){
        $photos = Photo::find($id);
        if (\File::exists('storage/photo/' . $photos->image)) {
            \File::delete('storage/photo/' . $photos->image);
        }

        $photos->delete();

        return redirect(route('photo'))->with('success', 'data berhasil di hapus');
    }
}

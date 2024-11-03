<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        return view('admin.video.index',[
            'videos' => Video::orderBy('id','desc')->get()
        ]);
    }

    public function store(Request $request){
        $rules = [
            'judul' => 'required',
            'yotube_code' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'yotube_code.required' => 'Code Youtube wajib diisi!', 
        ];

        $this->validate($request, $rules, $messages);


        Video::create([
            'judul' => $request->judul,
            'yotube_code' => $request->yotube_code,
        ]);

        return redirect(route('video'))->with('success', 'data video berhasil di simpan');
    }

    public function update(Request $request ,$id){
        $vidio = Video::find($id);

        $rules = [
            'judul' => 'required',
            'yotube_code' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'yotube_code.required' => 'Code Youtube wajib diisi!', 
        ];

        $this->validate($request, $rules, $messages); 

        $vidio->update([
            'judul' => $request->judul,
            'image' => $request->yotube_code,
        ]);

        return redirect(route('video'))->with('success', 'data video berhasil di update');

    }

    public function destroy($id){
        $videos = Video::find($id);

        $videos->delete();

        return redirect(route('video'))->with('success', 'data berhasil di hapus');
    }
}

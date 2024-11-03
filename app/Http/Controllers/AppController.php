<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('welcome',[
            'artikel' => Blog::orderBy('id','desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id','desc')->limit(4)->get(),
            'videos' => Video::orderBy('id','desc')->limit(3)->get(),
        ]);
        
    }

    public function berita(){
        return view('berita.berita',[
            'artikel' => Blog::orderBy('id','desc')->get()
        ]);
    }

    public function detail($slug){
        $artikel = Blog::where('slug',$slug)->first();
        return view('berita.detail',[
            'artikel' => $artikel
        ]);
    }

    public function foto(){
        return view('foto.foto', [
            'photos' => Photo::orderBy('id', 'desc')->get()
        ]);
    }

    public function video(){
        return view('admin.video.index', [
            'videos' => Photo::orderBy('id', 'desc')->get()
        ]);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        //

        $data = [
            'banner'    => Banner::get(),
            'galeri'    => Galeri::limit(4)->get(),
            'post'     => Post::with('category')->paginate(8),
            'content'  => 'home/home/index'
        ];
        return view('home/layouts/wrapper', $data);
    }

    public function tentang()
    {
        //
        $data = [
            'content'  => 'home/tentang/index'
        ];
        return view('home/layouts/wrapper', $data);
    }

    public function galeri()
    {
        //
        $data = [
            'galeri'    => Galeri::limit(4)->paginate(),
            'content'  => 'home/galeri/index'
        ];
        return view('home/layouts/wrapper', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Menu\Menu;
use Wink\WinkPost;

class PagesController extends Controller
{

    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(6);

        $menu = BuildMenu();


        return view('blog.index', [
            'posts' => $posts,
            'menu' => $menu,
        ]);
    }
    public function post($slug){

        $menu = BuildMenu();

        $post = WinkPost::where('slug',$slug)->with('tags')->firstOrFail();
        return view('blog.single-post', [
            'post' => $post,
            'menu' => $menu,
        ]);
    }
}

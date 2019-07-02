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
}

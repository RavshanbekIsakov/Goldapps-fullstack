<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Successfull_projects;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user_news = News::latest()->get(); // Fetch all news (modify based on your requirements)
        $pr = Successfull_projects::latest()->get();
        return view('user.index', ['news' => $user_news,'projects' => $pr]);
    }

    public  function  read($id){
        $post = News::where('id',$id)->first();
        if (!$post) return redirect()->route('user.index');
        return view('user.news_page',['post' => $post]);
    }
}

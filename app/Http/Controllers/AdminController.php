<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        // $postsCount=Post::count();
        // $categoriesCount=Category::count();
        // $commentsCount=Comment::count();
        // $repliesCount=CommentReply::count();


        return view('admin/index');
    }
}

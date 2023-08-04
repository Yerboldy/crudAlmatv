<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(Post $post){
        return view('view', compact('post'));
    }
}

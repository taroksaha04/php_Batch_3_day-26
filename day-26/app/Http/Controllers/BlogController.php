<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('add-blog');
    }
    public function create1(Request $request)
    {
        //return $request->all();

        $this->blog = new Blog();
        $this->blog->title = $request->title;
        $this->blog->author = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();
//oi page ei dekhabe je data insert success hoiche
        return redirect()->back()->with('message','Blog info save successfully.');
    }
}

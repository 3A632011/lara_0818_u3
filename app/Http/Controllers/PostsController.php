<?php


namespace App\Http\Controllers;


class PostsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }
    public function show()
    {
        //
        return view('post');
    }
    public function about()
    {
        //
        return view('about');
    }
    public function contact()
    {
        //
        return view('contact');
    }

}

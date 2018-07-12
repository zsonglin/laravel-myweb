<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }
}

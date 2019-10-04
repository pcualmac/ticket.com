<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Ticket;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts      = Ticket::count();
        $comments   = Comment::count();
        $tags       = Clients::count();
        $categories = Category::count();

        return view('dashboard', get_defined_vars());
    }
}

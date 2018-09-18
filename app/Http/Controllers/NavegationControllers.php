<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegationControllers extends Controller
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

    public function explorer()
    {
      $title = 'Explore';
      return view('explore')->with('title', $title);
    }

    public function newPost()
    {
      $title = 'New Post';
      return view('newPost')->with('title', $title);
    }

    public function profile()
    {
      $title = $_SESSION['user'];
      return view('profile')->with('title', $title);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    var $posts = [
			0 => array('user1','Texto de post 1', 'Data do post'),
			1 => array('user2','Texto de post 2', 'Data do post'),
                        2 => array('user1','Texto de post 3', 'Data do post'),
                        3 => array('user2','Texto de post 4', 'Data do post'),
                        4 => array('user2','Texto de post 5', 'Data do post'),
                        5 => array('user1','Texto de post 6', 'Data do post'),

		];


    public function index()
	{
		return view('blog/index');
	}

	public function blog()
	{

                $posts = $this->posts;

		return view('blog/posts', compact('posts'));
	}

	public function post($id)
	{

                $posts = $this->posts;

		return view('blog/postsDetail', compact('posts'), ['id'=>$id]);
	}
        
        

}

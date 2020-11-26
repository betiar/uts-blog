<?php
namespace App\Http\Controllers;
use App\Models\Blog;

class HomeController extends Controller{
	function showtemplate(){
		return view('template.base');
	}

	function showBlog(){
		return view('template.blog');
	}
}
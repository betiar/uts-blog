<?php
namespace App\Http\Controllers;
use App\Models\Blog;

class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}

	function showBlog(){
		return view('template.blog');
	}
	function showArtikel(){
		return view('artikel');
	}
	function showDashboard(){
		return view('admin.base');
	}
	function showLogin(){
		return view('admin.login');
	}
}
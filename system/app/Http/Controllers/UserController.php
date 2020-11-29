<?php
namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller{

	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}
	 function create(){
        return view('user.create');
     }
      function user(){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
    }
     function show(User $user){
        $data['user'] = $user;    
        return view('user.show', $data);
    }

}
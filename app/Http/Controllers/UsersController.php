<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\User;

class UsersController extends Controller
{
    public function index(){

    	return view('users.index')->with('users',User::all());
    }

    public function makeAdmin(User $user){
    	
    	$user->update(['role' => 'admin']);

    	session()->flash('success','User made admin succesfully');

    	return redirect(route('users.index'));
    }

    public function edit(){

    	return view('users.edit')->with('user',auth()->user());
    }

    public function update(UpdateProfileRequest $request){

    	$user = auth()->user();

    	$user->update([
          'name'=>$request->name,
          'about'=>$request->about


    	]);

    	session()->flash('success','User updated');

    	return redirect()->back();
    }
}

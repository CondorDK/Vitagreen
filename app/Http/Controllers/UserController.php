<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
//use App\Http\Requests; 
use Illuminate\Http\Response; 

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{   
    public function profile(){
        return view('auth.profile', array('user' => Auth::user()));
    }
    
    public function update_avatar(Request $request){

        //Se Encarga de manejar la carga de los avatares para los usuarios
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

        return view('auth.profile', array('user' => Auth::user()));

        }
    }


    public function getAccount()
    {
        return view('auth.account', ['user' => Auth::user()]); 
    }
    public function postSaveAccount(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|max:120'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->update();
        return redirect()->route('profile');
    }

}

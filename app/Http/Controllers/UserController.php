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
        return view('pages.profile', array('user' => Auth::user()));
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

        return view('pages.profile', array('user' => Auth::user()));

        }
    }

    public function getAccount()
    {
        return view('pages.account', ['user' => Auth::user()]); 
    }

    public function postSaveAccount(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|max:120'
        ]);

        $user = Auth::user();
        $user->name = $request['name'];
        $user->update();

        $file = $request->file('image');  
        $filename = $request['name'] . '-' . $user->id . '.jpg'; 

        if ($file) {
            Storage::disk('local')->put($filename, File::get($file)); 
        }
        return redirect()->route('profile');
    }

    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }

}

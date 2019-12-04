<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

  public function edit(){
    if (Auth::user()){
        $user = User::find(Auth::user()->id);

        if ($user){
            return view('user.edit')->withUser($user);
        }else{
          return redirect()->back();

        }
    }else{
        return redirect()->back();
    }

  }

  public function update(Request $request){
    $user =User::find(Auth::user()->id);

    if ($user){
        if (Auth::user()->email === $request['email']){
          $validate = $request-> validate([
                'name' => 'required|min:4',
                'email' => 'required|email'

          ]);
        }else{

          $validate = $request-> validate([
                'name' => 'required|min:4',
                'email' => 'required|email|unique:users'

          ]);
        }



      $user->name =  $request['name'];
      $user->email = $request['email'];

      $user->save();
      return redirect('home')->with('success', 'Your Profile is successfully updated');
    }else{
      return redirect()->back();
    }
  }


}

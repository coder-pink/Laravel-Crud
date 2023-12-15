<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    //


    public function index(){
        $url = url('/register');
        $user = new Registration();
        $title = "User Registration";
        $button = "Submit";
        $data = compact('url', 'title','user', 'button');
        return view('form')->with($data);
        // return view('form', compact('url', 'title'));
    }

    public function register(Request $request){


         // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email||max:255',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ]);

        // echo "<pre>";
        // print_r($request->all());

        //insert Query

        $registration = new Registration;
        $registration->name = $request['name'];
        $registration->email = $request['email'];
        $registration->password = md5($request['password']);
        $registration->save();

        return redirect('/register/view');

    }

    public function view(){
        $register = Registration::all();
        // echo "<pre/>";
        // print_r($register->toArray());
        $data = compact('register');
        return view('register-view')->with($data);
    }


    public function delete($id){
        // echo $id;
        // die;

        // Registration::find($id)->delete();
        $user = Registration::find($id);
        if(!is_null($user)){
            $user->delete();
        }
        // return redirect()->back();
        return redirect('/register/view');
    }


    public function edit($id)
    {
        $user = Registration::find($id);
        if (is_null($user)) {
            // User not found, redirect or handle error
            return redirect('/register/view');
        } else {
            $url = url('/register/update') . "/" . $id;
            $title = "User Update";
            $button = "Update";
            return view('form', compact('url', 'title', 'button'), ['user' => $user]);
        }
    }


    public function update($id, Request $request){
        $user = Registration::find($id);
        // echo "<pre>";
        // print_r($user);
        // die;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = md5($request['password']);
        $user->save();
        return redirect('/register/view');
    }


}

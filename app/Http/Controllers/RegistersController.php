<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Candidate;

class RegistersController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'notification' => 'required'
        ]);

        $candidate = new Candidate();
        $candidate->name = $request->input('name');
        $candidate->email = $request->input('email');
        $candidate->password = Hash::make($request->input('password'));
        $candidate->confirmPassword = $request->input('password_confirmation');
        $candidate->dob = $request->input('dob');
        $candidate->gender = $request->input('gender');
        $candidate->country = $request->input('country');
        $candidate->address = $request->input('address');
        $candidate->mobile = $request->input('mobile');
        $candidate->notification = $request->input('notification');
        $candidate->save();
        return redirect('/')->with('response', 'Registration Successfull');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6'
        ]);

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        $credentials = $request->except(['_token']);
        $candidate = Candidate::where('email',$request->email)->first();

        $result = DB::table('candidates')
            ->where('email', $request->input('email'))
            ->get();
            
        $check = Hash::check($request->input('password'), $result[0]->password);
        //print_r($result[0]->name);
        
        if ($check) {
            return redirect()->route('dashboard');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }        
    }

}

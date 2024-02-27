<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use session;

class AdminController extends Controller
{
    
    public function index(Request $request)
    {
        
        return view('login');
    }

    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        $result = Admin::Where(['email' => $email])->first();
        
        if($result){
            if($request->post('password') ==  $result->password)
                {
                    
                        session()->put('ADMIN_ID',$result -> id);
                        return view('dashboard');
                }
           
        }
        else{
            
            session()->flash('error','please enter a valid credentials');
            return redirect('admin');
        }
        

    }

    public function logout(Request $request)
    {
        session()->forget('ADMIN_ID');

        session()->flash('error','Logout successful');

        return redirect('admin');
    }

    

}

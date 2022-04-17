<?php

  namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\User;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Auth;
   
   class UserController extends Controller {
      public function index() {
        return view('transaksi.login');
      }

      public function register(){
        return view('transaksi.register');
       }

      public function handleLogin(Request $req) {
            $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

          dd(Auth::attempt($credentials));
      }

      public function handleRegister(Request $req) {
        $validate = $req->validate([
               'kodeuser'=>'required',
              'name'=>'required', 
              'email'=>'required:dns', 
              'status'=>'required',
              'password'=>'required' 
        ]);

          try {
            DB::table('users')->insert($validate);
            return redirect('/')->with('success','success create user');
          } catch(Exception $error) {
             return redirect('/register')->with('error' , 'cannot create user');
          }
      }
   }

?>
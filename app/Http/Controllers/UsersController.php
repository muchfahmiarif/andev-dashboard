<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function users(Request $req){
        $search = $req->q;

        $users = DB::table('users')->select("*");

        if(!empty($search)){
            $users = $users->where("username", "LIKE", "%".$search."%")
                        ->orWhere("name", "LIKE", "%".$search."%");
        }

        if($req->format == "json"){
            $users = $users->get();

            return response()->json($users);
        } else {
            $users = $users->paginate(50);

            return View::make("front-view.authentications.pages-account-setting-users")->with(compact("users"));
        }
    }

    public function user_save(Request $req){
        $user_id = $req->user_id;

        $req->validate([
            'fullname'      => 'required|min:3',
            'username'      => 'required|min:3|unique:users,username,'.$req->user_id,
            'password'      => 'required|min:6',
            'role'          => 'required',
            'email'          => 'required',
            
        ],
        [
            'fullname.required'     => 'Fullname belum diisi!',
            'fullname.min'          => 'Fullname minimal 3 karakter!',
            'username.required'     => 'Username belum diisi!',
            'username.min'          => 'Username minimal 3 karakter!',
            'username.unique'       => 'Username telah digunakan!',
            'password.required'     => 'Password belum diisi!',
            'password.min'          => 'Password minimal 6 karakter!',
            'role.required'         => 'Role belum dipilih!',
            'email.required'  => 'Email belum dipilih!',
        ]);

        $data = [
            "name"      => $req->fullname,
            "username"  => $req->username,
            "password"  => Hash::make($req->password),
            "role"      => $req->role,
            "email"      => $req->email,
        ];

        if(empty($user_id)){
            $add = DB::table('users')->insertGetId($data);

            if($add){
                $req->session()->flash('success', "User baru berhasil ditambahkan.");
            } else {
                $req->session()->flash('error', "User baru gagal ditambahkan!");
            }
        } else {
            $edit = DB::table('users')->where("id", $user_id)->update($data);

            if($edit){
                $req->session()->flash('success', "User berhasil diubah.");
            } else {
                $req->session()->flash('error', "User gagal diubah!");
            }
        }
        
        return redirect()->back();
    }

    public function user_delete(Request $req)
{
    $delete = $req->id;
    $del = DB::table('users')->where("id", $delete)->delete();

    if ($del) {
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    } else {
        return redirect()->back()->with('error', 'Gagal menghapus data!');
    }
}



    public function myaccount()
    {
      return view('front-view.authentications.pages-account-settings-account');
    }

    public function myaccount_update(Request $req){
        
        $req->validate([
            'fullname'      => 'required|min:3',
            
        ],
        [
            'fullname.required'     => 'Fullname belum diisi!',
            'fullname.min'          => 'Fullname minimal 3 karakter!',
        ]);

        $data = [
            "name"      => $req->fullname,
        ];

        if($req->fullname != Auth::user()->name){
            $update = DB::table('users')->where("id", Auth::user()->id)->update($data);

            if($update){
                $req->session()->flash("success", "Profile berhasil diperbarui.");
            } else {
                $req->session()->flash("error", "Profile gagal diperbarui!");
            }
        } else {
            $req->session()->flash("error", "Tidak ada perubahan!");
        }

        return redirect()->back();
    }

    public function myaccount_update_password(Request $req){
        
        $req->validate([
            'current_password'  => 'required',
            'new_password'      => 'required|confirmed|min:6'
            
        ],
        [
            'current_password.required' => 'Current Password belum diisi!',
            'new_password.required'     => 'New Password belum diisi!',
            'new_password.min'          => 'New Password minimal 6 karakter!',
            'new_password.confirmed'    => 'Confirm Password harus sama dengan New Password!',
        ]);

        if(!Hash::check($req->new_password, Auth::user()->password)){
            $data = [
                "password"      => Hash::make($req->new_password),
            ];

            $update = DB::table('users')->where("id", Auth::user()->id)->update($data);

            if($update){
                $req->session()->flash("success", "Password berhasil diganti.");
            } else {
                $req->session()->flash("error", "Password gagal diganti!");
            }
        } else {
            $req->session()->flash("error", "New Password tidak boleh sama dengan Current Password!");
        }

        return redirect()->back();
    }
    
    
    // public function codeLogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'scancode' => 'required',
    //     ]);

    //     $code = $request->input('scancode');

    //     // Periksa apakah kode cocok dengan kode di database.
    //     $user = User::where('scancode', $code)->first();

    //     if ($user) {
    //         // Kode valid, autentikasi pengguna.
    //         Auth::login($user);

    //         return redirect('/home'); // Ganti dengan halaman yang sesuai.
    //     } else {
    //         return redirect('/login')->with('error', 'Kode tidak valid');
    //     }
    // }
    
   
}
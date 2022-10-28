<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function home()
    {
        return view('admin.dashboard');
    }

    public function list_user()
    {
        $users  = User::orderBy('created_at','desc')->paginate(10);
        $count_users  = User::count();
        return view('admin.users.index',compact('users','count_users'));
    }

    public function create_user()
    {
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
    }

    public function store_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,except,id',
            'password' => 'required|min:8',
            'confirmation_password'=> 'required|min:8|same:password',
            'role' => 'required'
          ]);

          if ($validator->fails()) {

              return back()->withErrors($validator->errors());

          }

          User::create([
              'name'=> $request->name,
              'email'=> $request->email,
              'password'=> bcrypt($request->password),
              'role_id'=> $request->role,
          ]);

          return redirect()->route('user.index')->with('success','Utlisateur créé avec succès');
    }

    public function destroy($id)
    {
        $user = User::where('token',$id)->first();

        if(!$user)
        {
            return back()->with('info','Type user introuvable');
        }
        $user->delete();
        return back()->with('success','Suppression effectee avec succes');
    }

    public function change_password()
    {
        return view('admin.users.password');
    }

    public function changed_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|min:8',
            'confirmation_password'=> 'required|min:8|same:password'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        if (Auth::attempt(['email' => $request->user()->email, 'password' => $request->current_password])) {
            $request->user()->update(['password'=> bcrypt($request->password)]);

            return redirect()->route('dashboard')->with('success','Mot de passe changé avec succès');
        }

        return back()->with('info',"Opération échouée");
    }
}

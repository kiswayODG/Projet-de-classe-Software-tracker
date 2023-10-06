<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController  extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::All();
        return view('utilisateur.index', compact('users'));
    }

    public function destroy(Request $req, $id ) {

        $user = User::find($id);
        if($req->action=="block") {
        $user->fl_bloq = true;
        $user->save();
        return redirect()->back()->with('success', 'Utilisateur bloqué avec succès!');
    }
    if($req->action=="allow") {
        $user->fl_bloq = null;
        $user->save();
        return redirect()->back()->with('success', 'Utilisateur autorisé avec succès!');
    }
       

    }

    public function userDetail() {
        $user = Auth::user();
      return view('utilisateur.userDetail', compact('user'));
    }

}

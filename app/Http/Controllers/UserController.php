<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Response;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */

    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('users.index')->with(compact('users'));
    }

    function loginView()
    {
        return view("login");
    }

    function homepageView()
    {
        return view("Homepage");
    }

    // return redirect()->intended('Hompage');


    function doLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();
        // echo('user_id ============');
        // echo($user->id);

        if (auth()->attempt($credentials)) {
            // session()->regenerate();
            session(['users_id' => $user->id]);
            session(['user' => $user]);
            // $request->session()->put('users_id',$user->id);
            // echo('session_user_id===========');
            // echo($value = session('users_id'));
            // echo($request->session()->get('users_id'));

            return response()->json(
                [
                    "status" => true,
                    "msg" => "You have successfully login",
                    "redirect_location" => url("homepageView")
                ]
            );
        }else{
            session()->flash('message', 'Invalid credentials');
            return response()->json(
                [
                    "status" => false,
                    "msg" => 'Invalid credentials',
                    "redirect_location" => url("loginView")
                ]
            );
            // return redirect()->back();
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     */
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',   // required and email format validation
            'password' => 'required' // required and number field validation
        ]);

        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(), 422);
            // validation failed return back to form

        } else {
            $User = new User;
            $User->name = $request->name;
            $User->email = $request->email;
            $User->password = bcrypt($request->password);
            $User->save();
            return response()->json(
                [
                    "status" => true,
                    "msg" => "You have successfully registered, Login to access your dashboard",
                    "redirect_location" => url("loginView")
                ]
            );
        }
    }

    function dashboard()
    {
        return view("dashboard");
    }

    // logout method to clear the sesson of logged in user
    function doLogout()
    {
        Session()->flush();
        // Auth::logout();
        return redirect("loginView")->with('success', 'Logout successfully');;
    }

    function statistics(){
        $users_id = session("users_id");
    // $urls = \AshAllenDesign\ShortURL\Models\ShortURL::latest()->get();
        $urls = \AshAllenDesign\ShortURL\Models\ShortURL::select('*')
            ->where('users_id','=',$users_id)
            ->get();
        session(['urls' => $urls]);

        return view("statistics", compact('urls'));
    }


}

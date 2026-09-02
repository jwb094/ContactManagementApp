<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreNewUserRequest;
use App\Actions\CreateUserAction;
class UserController extends Controller
{
    protected  User $User;

    public function __construct(User $userModel)
    {
        $this->User = $userModel;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function login(Request $request)
    {   

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('user.dashboard'))->with('success', "You have successfully logged in");
        }

        return  redirect('/user/signin')->with('status', true)->with('message', "Registration unsuccessfully");;
    }
    /**
     * Logout
     * 
     */
    public function logOut()
    {
        Session::flush();
        Auth::logout();

        return  redirect(route('home'));
    }
    public function signin()
    {
        return view('user.login');
    }
    public function register()
    {
        // return view('user.register');
         return view('register');
    }

    /**
     * Store a new user applicant record
     */
    public function store(StoreNewUserRequest $request)
    {

        $newUserData = (new CreateUserAction())->execute($request->validated());
        

        if (!$newUserData->id) {
            return  redirect(route('user.register'))
                ->with('status', false)->with('message', "Registration failed, try again please");;
        }
        return  redirect(route('user.login-page'))->with('status', true)
                ->with('message', "Registration successfully");;
    }
}

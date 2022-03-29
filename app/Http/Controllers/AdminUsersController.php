<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin');
    }
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->hasFile('img_path')) {
            $file = $request->img_path;
            $extension = $file->getClientOriginalExtension();
            $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
           // $file->move("assets/front/img/Logo/", $filename);
            $file->move(public_path() . '/images/user/', $filename);
        } else {

            $filename = "";

        }


        $users = new User();
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));
        $users->mobile_number = $request->input('mobile_number');
        $users->additional_number = $request->input('additional_number');
        $users->img_path = $filename;
        $users->is_admin =1;
        $users->save();
        return redirect()->back()->with('alert-success', 'تم اضافة المؤلف بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::findOrFail($id);

        return view('admin.users.edit')->with('users', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     //   dd("point :  - 2 ");
        //
        // $user = User::findOrFail($id);
        // //Checking if user is admin and reversing it
        // $user->is_admin == 0 ? $user->is_admin = 1 : $user->is_admin = 0;
        // $user->save();
        // return back();


        if ($request->hasFile('img_path')) {
            $file = $request->img_path;
            $extension = $file->getClientOriginalExtension();
            $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
           // $file->move("assets/front/img/Logo/", $filename);
            $file->move(public_path() . '/files/', $filename);
        } else {

            $filename = "";

        }
        $user = User::findOrFail($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->mobile_number = $request->input('mobile_number');
        $user->additional_number = $request->input('additional_number');
        $user->img_path = $filename;
        $user->is_admin =1;
        return redirect()->back()->with('alert-success', 'تم تعديل المؤلف بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
      //  $user->articles()->delete();
        $user->delete();
        return back();
    }
}

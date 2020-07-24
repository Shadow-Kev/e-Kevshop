<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Session;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
      $type = 1;
        if($request->type == 'admin'){$type=1;}
        if($request->type == 'client'){$type=2;}
         // $user = User::all();
         // if ($type) {
         //  $role = Role::where('name',"LIKE","%".$type."%")->first();
         //  $role_id=  $role->id;
          $user = User::where('role',$type)->get();
         //}
        
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        User::create($request->all());

        Session::flash('message', 'User added!');
        Session::flash('status', 'success');

        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $user = User::findOrFail($id);
        $user->update($request->all());

        Session::flash('message', 'User updated!');
        Session::flash('status', 'success');

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {

        if (User::where('id','=',$id)->first()){
            $user = User::where('id','=',$id)->first();
            $user->delete();
            return redirect('user');
       }
       return redirect('user');

    }

}

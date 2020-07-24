<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Session;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $role = Role::orderBy('id', 'desc')->paginate(6);
        return view('role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {


        $rules = [
         ];

         $messages = [
         ];

         $validator = Validator::make($request->all(), $rules,$messages);

         if ($validator->fails()) {
               redirect('role.create')->with('errors',$validator->errors());
         }
           $data = $request->all();
            if (Role::create($data)) {
              return redirect('role')->with('success', 'Role ajouté avec succès!');;
            }

        return redirect('role.create')->with('error','erreur enregistrement Role !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function show($slug)
    {
         if (Role::where('slug','=',$slug)->first()){
             $role = Role::where('slug','=',$slug)->first();
             return view('role.show', compact('role'));
        }
        return redirect('notfound')->with('error','L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function edit($slug)
    {
         if (Role::where('slug','=',$slug)->first()){
                     $role = Role::where('slug','=',$slug)->first();
                   return view('role.edit', compact('role'));
                }
                return redirect('notfound')->with('error','L\'item que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function update($slug, Request $request)
    {
          if (Role::where('slug','=',$slug)->first()){
           $role = Role::where('slug','=',$slug)->first();

                $rules = [
                          ];

                $messages = [
                            ];

                  $validator = Validator::make($data, $rules,$messages);
                  if ($validator->fails()) {
                      redirect('role.create')->with('errors',$validator->errors());
                     }
                   $data = [];

                   if ($role->update($data)) {
                          return redirect('role')->with('success', 'Role mise à jours avec succès!');;
                   }
                  return redirect('role.edit')->with('error','erreur mise à jours Role !');
             }
         return redirect('notfound')->with('error','Le role que vous cherchez n\'existe pas ou a été supprimé !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     *
     * @return Response
     */
    public function destroy($id)
    {
       if (Role::where('id','=',$id)->first()){
             $role = Role::where('id','=',$id)->first();
             $role->delete();
             return redirect('role');
        }
        return redirect('role');
    }

}

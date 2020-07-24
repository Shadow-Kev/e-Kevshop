<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TypeArticle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class TypeArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $typearticle = TypeArticle::all();

        return view('backEnd.typearticle.index', compact('typearticle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.typearticle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        TypeArticle::create($request->all());

        Session::flash('message', 'TypeArticle added!');
        Session::flash('status', 'success');

        return redirect('typearticle');
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
        $typearticle = TypeArticle::findOrFail($id);

        return view('backEnd.typearticle.show', compact('typearticle'));
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
        $typearticle = TypeArticle::findOrFail($id);

        return view('backEnd.typearticle.edit', compact('typearticle'));
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
        
        $typearticle = TypeArticle::findOrFail($id);
        $typearticle->update($request->all());

        Session::flash('message', 'TypeArticle updated!');
        Session::flash('status', 'success');

        return redirect('typearticle');
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
        $typearticle = TypeArticle::findOrFail($id);

        $typearticle->delete();

        Session::flash('message', 'TypeArticle deleted!');
        Session::flash('status', 'success');

        return redirect('typearticle');
    }

}

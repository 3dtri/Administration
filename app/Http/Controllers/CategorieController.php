<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perpage=5;
        $search=$request->search;
        if(empty($search)){
            $categories=Categorie::latest()->paginate($perpage);
        }else{
            $categories=Categorie::where('name','like','%'.$search.'%')
            ->paginate($perpage);
        }
       
        return view('pages.categorie.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $categorie= new Categorie();
        $requestdata=$request->all();
        
        $categorie->create($requestdata);
        return redirect('categorie')->with('flash_message','Ajout avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        $categorie=Categorie::findOrFail($categorie->id);
        return view('pages.categorie.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        
        $requestdata=$request->all();
        $categorie->update($requestdata);
        return redirect('categorie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        Categorie::destroy($categorie->id);
        return redirect('categorie');
    }
}

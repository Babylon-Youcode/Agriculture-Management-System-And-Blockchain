<?php

namespace App\Http\Controllers;

use App\Models\Prodect;
use Illuminate\Http\Request;

class ProdectController extends Controller
{
   public function addProduct(Request $request ){
        
    //Validate requests
    // $request->validate([
       

    //       'nom'=>'required',
    //       'description'=>'required',
    //      'adresse'=>'required',
    //      'price'=>'required',
    //      'category'=>'required', 
        
    // ]);

     //Insert data into database
     $prodect = new Prodect;
     $prodect->nom = $request->nom;
     $prodect->description = $request->description;
     $prodect->adresse = $request->adresse;
     $prodect->price = $request->price;
      $prodect->category_id = $request->category_id;
    //  if($request->image){
    //     $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
    //     $request->image->move(public_path('img/'), $imageName);
    //     $prodect->image = $imageName;
    // }
   
     $save = $prodect->save();

     if($save){
        return redirect('/');
     }else{
         return back()->with('fail','Something went wrong, try again later');
     }
}  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodect  $prodect
     * @return \Illuminate\Http\Response
     */
    public function show(Prodect $prodect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodect  $prodect
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodect $prodect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodect  $prodect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodect $prodect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodect  $prodect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodect $prodect)
    {
        //
    }
}

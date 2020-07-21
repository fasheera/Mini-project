<?php

namespace App\Http\Controllers;

use App\user1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    
        
        
        
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
        user1s::create($request->all());

        return([]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user1  $user1
     * @return \Illuminate\Http\Response
     */
    public function show(user1 $user1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user1  $user1
     * @return \Illuminate\Http\Response
     */
    public function edit(user1 $user1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user1  $user1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user1 $user1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user1  $user1
     * @return \Illuminate\Http\Response
     */
    public function destroy(user1 $user1)
    {
        //
    }
}

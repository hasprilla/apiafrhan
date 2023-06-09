<?php

namespace App\Http\Controllers;


use App\Http\Resources\AdminMenuResource;
use App\Models\AdminMenu;
use Illuminate\Http\Request;


class AdminMenuController extends Controller 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return AdminMenuResource::collection(AdminMenu::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

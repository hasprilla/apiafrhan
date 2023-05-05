<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdatetegoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        Category::create($request->all());
        return response()->json(
            [
                'res' => true,
                'msg' => 'Categoria guardada',
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json([
            'resp' => true,
            'user' => $category,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetegoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Paciente actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}

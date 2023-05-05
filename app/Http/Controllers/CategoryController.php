<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdatetegoryRequest;
use App\Http\Resources\CategoryResurce;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryResurce::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        return (new CategoryResurce(Category::create($request->all())))->additional([
            ['message' => 'Categoria Resgistrada Correctamente']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return new CategoryResurce($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetegoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return (new CategoryResurce($category))->additional([
            ['message' => 'Categoria Actualizada Correctamente']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return (new CategoryResurce($category))->additional([
            ['message' => 'Categoria Eliminada Correctamente']
        ]);
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
       $request->validate([
           'icon' => ['required','not_in:empty'],
           'name' => ['required', 'max:200', 'unique:categories,name'],
           'status' => ['required'],
       ]);

       $category = new Category();
       $category->icon = $request->icon;
       $category->name = $request->name;
       $category->slug = Str::slug($request->name);
       $category->status = $request->status;
       $category->save();

       return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',[
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'icon' => ['required','not_in:empty'],
            'name' => ['required', 'max:200', 'unique:categories,name,'.$category->id],
            'status' => ['required'],
        ]);

        $category->icon = $request->icon;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = $request->status;
        $category->save();

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }

    public function changeStatus(Request $request, Category $category)
    {

        $category->status = $request->status == 'true' ? 1 : 0;
        $category->save();

        return redirect()->route('admin.category.index');
    }
}

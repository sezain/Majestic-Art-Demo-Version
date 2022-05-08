<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {
public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['records'] = Category::all();
        return view('admin.categories', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data['records'] = Category::all();
        return view('admin.create-category', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
         if ($request->slug != '') {
            $slug = str_replace(" ", "", strtolower(trim($request->slug)));
        } else {
            $slug = str_replace(" ", "", strtolower(trim($request->name)));
        }
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,' . $slug,
        ]);

        $name = '';
        if ($request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $name = time() . $name;
            $request->file('file')->move('img/category', $name);
        }
        
        $background = '';
        if ($request->file('background')) {
            $background = $request->file('background')->getClientOriginalName();
            $background = time() . $background;
            $request->file('background')->move('img/category', $background);
        }
       
        Category::create([
            'name' => $request->name,
            'slug' => $slug,
            'image' => $name,
            'background' => $background,
            'description' => $request->description,
            'parent_id' => $request->categoryid,
        ]);

        return redirect()->route('categories.index')
                        ->with('msg', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category) {
        $data['records'] = Category::all();
        
        $data['category'] = $category;
//        echo '<pre>';
//        print_r($data['category']); exit;
        return view('admin.edit-category',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category) {
        if ($request->slug != '') {
            $slug = str_replace(" ", "", strtolower(trim($request->slug)));
        } else {
            $slug = str_replace(" ", "", strtolower(trim($request->name)));
        }
        $request->validate([
            'name' => 'required'
        ]);

        $name = '';
        if ($request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $name = time() . $name;
            $request->file('file')->move('img/category', $name);
        }else{
            $name = $request->oldfile;
        }
        $background = '';
        if ($request->file('background')) {
            $background = $request->file('background')->getClientOriginalName();
            $background = time() . $background;
            $request->file('background')->move('img/category', $background);
        }else{
            $background = $request->oldbackground;
        }
       
        $data = [
            'name' => $request->name,
            'slug' => $slug,
            'image' => $name,
            'description' => $request->description,
            'background' => $background,
            'parent_id' => $request->categoryid,
        ];
        
        $category->update($data);

        return redirect()->route('categories.index')
                        ->with('msg', 'Category Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category) {
        $category->delete();
  
        return redirect()->route('categories.index')
                        ->with('msg','Category deleted successfully');
    }
}
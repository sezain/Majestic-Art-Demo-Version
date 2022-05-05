<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\CommonModel;
use Auth;

class SeoMaterialController extends Controller {

    public function __construct() {
        $this->middleware('auth');
        $this->common = new CommonModel();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data['records'] = $this->common->selectall('seo_materials', '*');
        return view('admin/seo', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin/new-seo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $current = Carbon::now();
        // if ($request->slug != '') {
        //     $slug = str_replace(" ", "", strtolower(trim($request->slug)));
        // } else {
        //     $slug = str_replace(" ", "", strtolower(trim($request->name)));
        // }
        $this->validate($request, [
            'title' => 'required',
            // 'slug' => 'unique:blog,slug,' . $slug,
        ]);
    //    $name = '';
    //      if ($request->file('file')) {
    //         $name = $request->file('file')->getClientOriginalName();
    //         //$name = time() . $name;
    //         $request->file('file')->move('public/event', $name);
    //     }
        $data = array(
            'title' => $request->input('title'), 
            'description' => $request->input('description'),
            'keyword'=> $request->input('keyword'),
            'page_name' => $request->input('page_name'),            
            'updated_at' => $current);
        $this->common->insert('seo_materials', $data);
        return redirect('admin/seo')->with('msg', 'Seo Material Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
       
        $data['records'] = $this->common->select('seo_materials', '*', array('id' => $id));
//        print_r($data['records']); exit;
        return view('admin/edit-seo', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $current = Carbon::now();
        $this->validate($request, [
            'name' => 'required',
            // 'slug' => 'required',
        ]);
        $data = array(
            'title' => $request->input('name'), 
            'keyword' => $request->input('keyword'),
            'page_name' => $request->input('page_name'),
            'description' => $request->input('description'),
            
            'updated_at' => $current);
        $this->common->updaterecord('seo_materials', $data, array('id' => $request->input('id')));
        return redirect('admin/seo')->with('msg', 'Seo Material Updated Successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->common->deleterecord('seo_materials', array('id' => $id));
        return redirect('admin/seo')->with('msg', 'Seo Material Deleted Successfully');                                                                                                                                                       
    }
}
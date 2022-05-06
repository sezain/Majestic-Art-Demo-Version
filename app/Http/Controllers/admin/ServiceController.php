<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\CommonModel;
use Auth;

class ServiceController extends Controller {

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
        $data['records'] = $this->common->selectall('services', '*');
        return view('admin/service', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin/new-service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $current = Carbon::now();
        if ($request->slug != '') {
            $slug = str_replace(" ", "", strtolower(trim($request->slug)));
        } else {
            $slug = str_replace(" ", "", strtolower(trim($request->title)));
        }
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'unique:blog,slug,' . $slug,
        ]);
    //    $name = '';
    //      if ($request->file('file')) {
    //         $name = $request->file('file')->getClientOriginalName();
    //         //$name = time() . $name;
    //         $request->file('file')->move('public/event', $name);
    //     }
//echo $name; exit;
        $data = array(
            'title' => $request->input('title'), 
            'slug'=> $slug,'excerpt' => $request->input('slug'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'keywords' => $request->input('keywords'),
            'sub_title'=> $$request->input('sub_title'),
            'updated_at' => $current);
        $this->common->insert('services', $data);
        return redirect('admin/service')->with('msg', 'Services Created Successfully');
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
       
        $data['records'] = $this->common->select('blog', '*', array('id' => $id));
//        print_r($data['records']); exit;
        return view('admin/edit-blog', $data);
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
        if ($request->slug != '') {
            $slug = str_replace(" ", "", strtolower(trim($request->slug)));
        } else {
            $slug = str_replace(" ", "", strtolower(trim($request->name)));
        }
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
       $name = '';
         if ($request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            //$name = time() . $name;
            $request->file('file')->move('public/event', $name);
        }else{
            $name = $request->input('oldfile');
        }
//echo $name; exit;
        $data = array(
            'title' => $request->input('name'), 
            'slug'=>$slug,'excerpt' => $request->input('excerpt'),
            'description_content' => $request->input('description_content'),
            'keywords_content' => $request->input('keywords_content'),
            'body' => $request->input('content'),
            'image'=>$name,
            'updated_at' => $current);
        $this->common->updaterecord('blog', $data, array('id' => $request->input('id')));
        return redirect('admin/blogs')->with('msg', 'Blog Updated Successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->common->deleterecord('blog', array('id' => $id));
        return redirect('admin/blogs')->with('msg', 'Blog Deleted Successfully');
    }

}

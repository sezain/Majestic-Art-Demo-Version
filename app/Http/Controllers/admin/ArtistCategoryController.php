<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\CommonModel;
use Auth;

class ArtistCategoryController extends Controller {

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
        $data['records'] = $this->common->selectall('artist_categories', '*');
        return view('admin/artist_categories', $data);
    }

    public function create() {
        $data['categories'] = $this->common->selectall('categories', '*');
        $data['artists'] = $this->common->selectall('artists', '*');
        return view('admin/new-artist-categories', $data);
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
        //     $slug = $this->clean($request->slug);
        // } else {
        //     $slug = $this->clean($request->name);
        // }
        // $this->validate($request, [
        //     'name' => 'required',
        //     'location' => 'required',
        //     'discover' => 'required',
        //     'person' => 'required',
        //     'slug' => 'unique:arts,slug,' . $slug,
        // ]);
        // $name = '';
        // if ($request->file('file')) {
        //     $name = $request->file('file')->getClientOriginalName();
        //     $request->file('file')->move('public/arts', $name);
        // }
        // $gallery = array();
        // $files = $request->file('gallery');

        // if ($request->hasFile('gallery')) {
        //     foreach ($files as $file) {
        //         $name = $file->getClientOriginalName();
        //         $name = time() . '-' . $name;
        //         $file->move('public/arts', $name);
        //         $gallery[] = $name;
        //     }
        // }

        $data = array(
            'title' => $request->input('name'), 'category_id' => $request->input('categoryid'), 'slug' => $slug, 'excerpt' => $request->input('excerpt'), 'video' => $request->input('video'),
            'person' => $request->input('person'), 'discover' => $request->input('discover'), 'location' => $request->input('location'),
            'body' => $request->input('content'), 'image' => $name, 'gallery' => json_encode($gallery), 'updated_at' => $current);

        $this->common->insert('arts', $data);

        return redirect('admin/arts')->with('msg', 'Art Created Successfully');
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
        $data['categories'] = $this->common->selectall('categories', '*');
        $data['records'] = $this->common->select('arts', '*', array('id' => $id));
        return view('admin/edit-art', $data);
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
            $slug = $this->clean($request->slug);
        } else {
            $slug = $this->clean($request->name);
        }
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
        $name = '';
        if ($request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $request->file('file')->move('public/arts', $name);
        } else {
            $name = $request->input('oldfile');
        }
        $gallery = array();
        $files = $request->file('gallery');

        if ($request->hasFile('gallery')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $name = time() . '-' . $name;
                $file->move('public/arts', $name);
                $gallery[] = $name;
            }
            $gallery = json_encode($gallery);
        } else {
            $gallery = $request->input('oldgallery');
        }

        $data = array(
            'title' => $request->input('name'), 'category_id' => $request->input('categoryid'), 'slug' => $slug, 'excerpt' => $request->input('excerpt'), 'video' => $request->input('video'),
            'person' => $request->input('person'), 'discover' => $request->input('discover'), 'location' => $request->input('location'),
            'body' => $request->input('content'), 'image' => $name, 'gallery' => $gallery, 'updated_at' => $current);

        $this->common->updaterecord('arts', $data, array('id' => $request->input('id')));
        return redirect('admin/arts')->with('msg', 'Art Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->common->deleterecord('arts', array('id' => $id));
        return redirect('admin/arts')->with('msg', 'Art Deleted Successfully');
    }

}

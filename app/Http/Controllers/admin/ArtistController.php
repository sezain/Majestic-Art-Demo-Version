<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\CommonModel;
use Auth;

class ArtistController extends Controller {

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
        $data['records'] = $this->common->selectall('artists', '*');
        return view('admin/artists', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data['categories'] = $this->common->selectall('categories', '*');
        return view('admin/new-artist', $data);
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
        // $this->validate($request, [
        //     'name' => 'required',
            // 'slug' => 'unique:blog,slug,' . $slug,
        // ]);
    //    $name = '';
    //      if ($request->file('file')) {
    //         $name = $request->file('file')->getClientOriginalName();
    //         //$name = time() . $name;
    //         $request->file('file')->move('public/event', $name);
    //     }
//echo $name; exit;
        $data = array(
            'name' => $request->input('name'), 
            'lifespan'=> $request->input('lifespan'),
            'biography' => $request->input('biography'),
            'description' => $request->input('description'),
            'updated_at' => $current);
        $this->common->insert('artists', $data);
        return redirect('admin/artist')->with('msg', 'Artist Created Successfully');
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
       
        $data['records'] = $this->common->select('artists', '*', array('id' => $id));
//        print_r($data['records']); exit;
        return view('admin/edit-artist', $data);
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
            'name' => $request->input('name'), 
            'lifespan' => $request->input('lifespan'),
            'biography' => $request->input('biography'),
            'description' => $request->input('description'),
            // 'slang' => $request->input('slang'),
            'updated_at' => $current);
        $this->common->updaterecord('artists', $data, array('id' => $request->input('id')));
        return redirect('admin/artist')->with('msg', 'Artist Updated Successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->common->deleterecord('artists', array('id' => $id));
        return redirect('admin/artist')->with('msg', 'Artist Deleted Successfully');
    }

}

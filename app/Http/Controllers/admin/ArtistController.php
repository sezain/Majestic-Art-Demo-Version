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
        $data = array(
            'name' => $request->input('name'), 
            'lifespan'=> $request->input('lifespan'),
            'biography' => $request->input('biography'),
            'description' => $request->input('description'),
            'updated_at' => $current);
        $id = $this->common->insert('artists', $data);
        
        $categories = $request->input('categories');
            foreach ($categories as $cat) {
                $data2 = array(
                    'category_id' => $cat, 
                    'artist_id'=> $id,
                );
                $this->common->insert('artist_categories', $data2);
            }

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
        $data['artist_categories'] = $this->common->select('artist_categories', '*', array('artist_id' => $id));
        $data['categories'] = $this->common->selectall('categories', '*');
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
            // 'slang' => $request->input('categories'),
            'updated_at' => $current);
            $id = $request->input('id');

            $this->common->deleterecord('artist_categories', array('artist_id' => $id ));
            $categories = $request->input('categories');
            foreach ($categories as $cat) {
                $data2 = array(
                    'category_id' => $cat, 
                    'artist_id'=> $id,
                );
                $this->common->insert('artist_categories', $data2);
            }
        $this->common->updaterecord('artists', $data, array('id' => $id));
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

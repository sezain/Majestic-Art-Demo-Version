<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\CommonModel;
use Auth;

class EventController extends Controller {

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
        $data['records'] = $this->common->selectall('events', '*');
        return view('admin/events', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin/new-event');
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
            $slug = str_replace(" ", "-", strtolower(trim($request->slug)));
        } else {
            $slug = str_replace(" ", "-", strtolower(trim($request->name)));
        }
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'unique:events,slug,' . $slug,
        ]);
       $name = '';
         if ($request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            //$name = time() . $name;
            $request->file('file')->move('img/event', $name);
        }
//echo $name; exit;
        $data = array('title' => $request->input('name'), 'slug'=>$slug,'excerpt' => $request->input('excerpt')
            ,'body' => $request->input('content'),'image'=>$name,'updated_at' => $current);
        $this->common->insert('events', $data);
        return redirect('admin/events')->with('msg', 'Event Created Successfully');
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
       
        $data['records'] = $this->common->select('events', '*', array('id' => $id));
//        print_r($data['records']); exit;
        return view('admin/edit-event', $data);
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
            $slug = str_replace(" ", "-", strtolower(trim($request->slug)));
        } else {
            $slug = str_replace(" ", "-", strtolower(trim($request->name)));
        }
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
       $name = '';
         if ($request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            //$name = time() . $name;
            $request->file('file')->move('img/event', $name);
        }else{
            $name = $request->input('oldfile');
        }
//echo $name; exit;
        $data = array('title' => $request->input('name'), 'slug'=>$slug,'excerpt' => $request->input('excerpt')
            ,'body' => $request->input('content'),'image'=>$name,'updated_at' => $current);
        $this->common->updaterecord('events', $data, array('id' => $request->input('id')));
        return redirect('admin/events')->with('msg', 'Event Updated Successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->common->deleterecord('events', array('id' => $id));
        return redirect('admin/events')->with('msg', 'Event Deleted Successfully');
    }

}

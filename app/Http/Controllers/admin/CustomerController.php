<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\CommonModel;
use Auth;
use Hash;

class CustomerController extends Controller {

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
        $data['records'] = $this->common->selectall('users', '*');
        return view('admin/customers', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin/new-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $current = Carbon::now();
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required',
        ]);
       

        $data = array('name' => $request->input('name'), 'email' => $request->input('email')
            ,'password' => Hash::make($request->input('password')),'updated_at' => $current);
        $this->common->insert('users', $data);
        return redirect('admin/customers')->with('msg', 'User Created Successfully');
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
    public function edit($id = null) {
        if ($id != '') {
            $id = $id;
        } else {
            $id = Auth::user()->id;
        }
        $data['id'] = $id;
        $data['records'] = $this->common->select('users', '*', array('id' => $id));
        return view('admin/edit-customer', $data);
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
        
        $data = array('name' => $request->input('name'), 'email' => $request->input('email')
            ,'updated_at' => $current);

        if ($request->input('password') != '') {
            $data['password'] = Hash::make($request->input('password'));
        }

        $this->common->updaterecord('users', $data, array('id' => $request->input('id')));
        return redirect('admin/customers')->with('msg', 'User Updated Successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->common->deleterecord('users', array('id' => $id));
        return redirect('admin/customers')->with('msg', 'User Deleted Successfully');
    }

}

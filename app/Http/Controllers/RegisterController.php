<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CommonModel;
use Auth;
use Hash;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function __construct() {
        $this->common = new CommonModel();
    }
    
    public function create(Request $request) {
        $current = Carbon::now();
        $this->validate($request, [
            'phone' => 'required|numeric|unique:users,phone,'.$request->input('phone'),
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required',
            'nameplate' => 'required',
            'vtype' => 'required',
            'nic' => 'required',
        ]);
        $name = '';
        if ($request->file('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $name = time().$name;
            $request->file('file')->move('public/users', $name);
        }
        $authletter = '';
        if ($request->file('authletter')) {
            $name = $request->file('authletter')->getClientOriginalName();
            $authletter = time().$name;
            $request->file('file')->move('public/users', $authletter);
        } 
        
        $data = array('name' => $request->input('name'), 'email' => $request->input('email'), 'phone' => $request->input('phone'),'active'=>0
            , 'profile' => $name, 'password' => Hash::make($request->input('password')), 'role' => 0, 'updated_at' => $current);
        $last_id = $this->common->insert('users', $data);
        
        $driverdata = array('drive_id'=>$last_id, 'nic' => $request->input('nic'), 'liecence' => $request->input('liecence'),
            'nameplate' => $request->input('nameplate'),'vmodel' => $request->input('vmodel'),'vtype' => $request->input('vtype'),
            'authletter' => $authletter,'dtype' => $request->input('dtype'),'active'=> 1);
        $this->common->insert('drivers', $driverdata);
        return redirect('login')->with('msg', 'User Created Successfully. You will get Confirmation Email Soon.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommonModel;

class ExhibitionsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->common = new CommonModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug = null) {
        if ($slug == null) {
           $data['records'] = $this->common->selectall('exhibitions', '*');
            return view('exhibitions', $data);
        } else {
           $data['records'] = $this->common->select('exhibitions', '*', array('slug' => $slug));
            return view('exhibitions-detail',$data);
        }
    }

}

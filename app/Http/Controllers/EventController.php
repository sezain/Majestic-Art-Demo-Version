<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommonModel;

class EventController extends Controller {

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
            $data['records'] = $this->common->selectall('events', '*');
           return view('events', $data);
        } else {
            $data['records'] = $this->common->select('events', '*', array('slug' => $slug));
            return view('events-detail',$data);
        }
    }

}

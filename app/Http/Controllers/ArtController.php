<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommonModel;

class ArtController extends Controller {

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
    public function medievalart($slug = null) {
        if ($slug == null) {
            $data['records'] = $this->common->select('categories', '*', array('parent_id' => 4));
            return view('medieval-art', $data);
        } else {
            $data['category'] = $this->common->selectfirst('categories', array('id','name','background','description'), array('slug' => $slug));
            $data['records'] = $this->common->select('arts', array('title','image','slug'), array('category_id' => $data['category']->id));
            return view('arts', $data);
        }
    }

    public function islamicindart($slug = null) {
        if ($slug == null) {
            $data['records'] = $this->common->select('categories', '*', array('parent_id' => 3));
            return view('islamic-ind-art', $data);
        } else {
            $data['category'] = $this->common->selectfirst('categories', array('id','name','background','description'), array('slug' => $slug));
            $data['records'] = $this->common->select('arts', array('title','image','slug'), array('category_id' => $data['category']->id));
            return view('arts', $data);
        }
    }

    public function westernart($slug = null) {
        if ($slug == null) {
            $data['records'] = $this->common->select('categories', '*', array('parent_id' => 20));
            return view('western-art', $data);
        } else {
            $data['category'] = $this->common->selectfirst('categories', array('id','name','background','description'), array('slug' => $slug));
            $data['records'] = $this->common->select('arts', array('title','image','slug'), array('category_id' => $data['category']->id));
            return view('arts', $data);
        }
    }
    
    public function category($slug = null) {
            $data['category'] = $this->common->selectfirst('categories', array('id','name','background','description'), array('slug' => $slug));
            $data['records'] = $this->common->select('arts', array('title','image','slug'), array('category_id' => $data['category']->id));
            return view('arts', $data);
    }

    public function art($slug = null) {
        $data['records'] = $this->common->postwithcat('arts', 'categories', array('arts.slug' => $slug));
        return view('art-posts-detail', $data);
    }

}

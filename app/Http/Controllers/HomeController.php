<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommonModel;
use App\Models\PagesSeo;
use Mail;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    use SEOToolsTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
//        $this->middleware('auth');
        $this->common = new CommonModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $seo = PagesSeo::where('page_name', 'home')->first();

        if ($seo) {
            $this->seo()->setTitle($seo->title);
            $this->seo()->setDescription($seo->description);
            SEOMeta::setKeywords(explode(', ', $seo->keyword));
        }

        // For medival and indian Category
        $data['medpost'] = array('1','2','3');
        $data['medivalposts'] = $this->common->selecthomepageposts('arts','categories', 'id',$data['medpost']);
        
        $data['indpost'] = array('4','5','6');
        $data['inisposts'] = $this->common->selecthomepageposts('arts','categories', 'id',$data['indpost']);
        
        // For renaissance and postmodern Category
        $data['renaissance'] = array('1','2','3');
        $data['renaissanceposts'] = $this->common->selecthomepageposts('arts','categories', 'id',$data['renaissance']);
        
        $data['postmodern'] = array('4','5','6');
        $data['postmodernposts'] = $this->common->selecthomepageposts('arts','categories', 'id',$data['postmodern']);
        
        // For modern and islamic Category
        $data['modern'] = array('1','2','3');
        $data['modernposts'] = $this->common->selecthomepageposts('arts','categories', 'id',$data['modern']);
        
        $data['islamic'] = array('4','5','6');
        $data['islamicposts'] = $this->common->selecthomepageposts('arts','categories', 'id',$data['islamic']);
        
        // For 7th and islamic Category
        $data['seventh'] = array('1','2','3');
        $data['seventhposts'] = $this->common->selecthomepageposts('arts','categories', 'id',$data['seventh']);
        
        $data['eigth'] = array('4','5','6');
        $data['eigthposts'] = $this->common->selecthomepageposts('arts','categories', 'id',$data['eigth']);
        
        $data['posts'] = $this->common->selectlimit('blog', '*', '3');
        return view('home', $data);
    }

}
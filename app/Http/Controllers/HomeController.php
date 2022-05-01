<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommonModel;
use Mail;
class HomeController extends Controller
{
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
        
        $data['posts'] = $this->common->selectlimit('blog', '*', '6');
        return view('home',$data);
    }
    
    public function contact(Request $request){
        $data['name'] = $request->name;
        $data['name'] = $request->email;
        $data['name'] = $request->message;
        Mail::send('contactus-notification', $data, function($message)use($email1) {
            $message->from('info@majesticarts.com');
            $message->subject('Contact Us');
            $message->to('info@majesticarts.com');
        });
        
    }
    public function blog($slug = null) {
        if ($slug == null) {
           $data['records'] = $this->common->selectall('blog', '*');
            return view('blogs', $data);
        } else {
           $data['records'] = $this->common->select('blog', '*', array('slug' => $slug));
            return view('blog-detail',$data);
        }
    }
}

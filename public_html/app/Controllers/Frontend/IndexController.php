<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\AppServices;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\WebsiteControl;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Industry;
use App\Models\events;
use App\Models\News;

class IndexController extends Controller
{
    public function index()
    { 
        $client = Client::get();    
        $industry = Industry::get();    
        $news = News::get(); 
        $footer  = WebsiteControl::where('key','LIKE',"%footer%")->get();   
        $app_portfolio = AppServices::where('type','portfolio')->get();
        $app_events = events::get();
        return view('frontend.index',compact('app_events','app_portfolio','client','industry','news','footer'));
    }    
}

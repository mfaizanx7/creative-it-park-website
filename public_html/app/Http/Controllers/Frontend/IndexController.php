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
        $client = Client::take(20)->get();
        $industry = Industry::take(12)->get();
        $news = News::latest()->take(6)->get();
        $footer = $this->getFooterData();
        $app_portfolio = AppServices::where('type', 'portfolio')->get();
        $app_events = events::latest()->take(6)->get();
        $app_testimonial = Testimonial::take(12)->get();
        return view('frontend.index',compact('app_testimonial','app_events','app_portfolio','client','industry','news','footer'));
    }    
}

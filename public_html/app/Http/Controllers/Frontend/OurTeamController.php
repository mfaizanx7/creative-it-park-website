<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Team;
use App\Models\Client;
use App\Models\Industry;
use App\Models\Portfolio;
use App\Models\AppServices;
use Illuminate\Http\Request;
use App\Models\WebsiteControl;
use App\Http\Controllers\Controller;

class OurTeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('roles')->where('status', 1)->get();
        $footer = $this->getFooterData();
        return view('frontend.components.team.our-team', compact('teams', 'footer'));
    }
    public function experties()
    {
        // dd("");
        $teams = Team::with('roles')->where('status', 1)->get();
        $footer = $this->getFooterData();
        return view('frontend.components.experties.experties', compact('teams', 'footer'));
    }
    public function industries()
    {
        // dd("");
        $teams = Team::with('roles')->where('status', 1)->get();
        $footer = $this->getFooterData();
        $app_portfolio = AppServices::where('type', 'portfolio')->get();
        $card_content = Industry::whereNotNull('icon')
            ->where('icon', '!=', '')
            ->get();
        return view('frontend.components.industries_page.industries_layout', compact('app_portfolio', 'teams','card_content', 'footer'));
    }
    public function services()
    {
        // dd("");
        $teams = Team::with('roles')->where('status', 1)->get();
        $footer = $this->getFooterData();
        $app_portfolio = AppServices::where('type', 'portfolio')->get();
        return view('frontend.components.services.services_layout', compact('app_portfolio','teams', 'footer'));
    }
    public function abouIindex()
    {
        // dd('hjbvhj');
        $industry = Industry::get();
        $about = WebsiteControl::where('key', 'LIKE', "%about%")->get();
        $footer = $this->getFooterData();
        $client = Client::get();
        return view('frontend.components.about.about-us', compact('industry', 'client', 'about', 'footer'));
    }

    public function portfolioindex()
    {
        $portfolio_web = Portfolio::where('type', 'website')->get();
        $portfolio_app = Portfolio::where('type', 'app')->get();
        $footer = $this->getFooterData();
        $portfolio = Portfolio::get();
        $types = Portfolio::pluck('type')->unique(); // Get unique types
        // return view('frontend.components.portfolio.portfolio', compact('portfolio_web', 'portfolio_app', 'footer'));
        // return view('frontend.components.portfolio.portfolio', compact('portfolio', 'footer'));
        return view('frontend.components.portfolio.portfolio', compact('portfolio', 'footer', 'types'));
    }

    public function products ()
    {
        $footer = $this->getFooterData();
       return view('frontend.components.products.products', compact('footer'));

    }
    
    public function csuite()
    {
        $name = "CreativeSuite";
        // $url = "https://creativesuite.co/";
        $footer = $this->getFooterData();
        return view('frontend.components.product-details.realstate', compact('footer','name'));
    }
    public function coworkit()
    {
        $name = "Coworkit";
        // $url = "https://coworkit.co/";
        $footer = $this->getFooterData();
        return view('frontend.components.product-details.product', compact('footer','name'));
    }

   
}

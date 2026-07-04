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
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        return view('frontend.components.team.our-team', compact('teams', 'footer'));
    }

    public function experties()
    {
        $teams = Team::with('roles')->where('status', 1)->get();
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        return view('frontend.components.experties.experties', compact('teams', 'footer'));
    }

    public function industries()
    {
        $teams = Team::with('roles')->where('status', 1)->get();
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        $app_portfolio = AppServices::where('type', 'portfolio')->get();
        $card_content = Industry::whereNotNull('icon')->where('icon', '!=', '')->get();
        return view('frontend.components.industries_page.industries_layout', compact('app_portfolio', 'teams', 'card_content', 'footer'));
    }

    public function services()
    {
        $teams = Team::with('roles')->where('status', 1)->get();
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        $app_portfolio = AppServices::where('type', 'portfolio')->get();
        return view('frontend.components.services.services_layout', compact('app_portfolio', 'teams', 'footer'));
    }

    public function abouIindex()
    {
        $industry = Industry::get();
        $about = WebsiteControl::where('key', 'LIKE', "%about%")->get();
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        $client = Client::get();
        return view('frontend.components.about.about-us', compact('industry', 'client', 'about', 'footer'));
    }

    public function portfolioindex()
    {
        $portfolio_web = Portfolio::where('type', 'website')->get();
        $portfolio_app = Portfolio::where('type', 'app')->get();
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        return view('frontend.components.portfolio.portfolio', compact('portfolio_web', 'portfolio_app', 'footer'));
    }

    public function products()
    {
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        return view('frontend.components.products.products', compact('footer'));
    }

    public function csuite()
    {
        $name = "CreativeSuite";
        $url = "https://creativesuite.co/";
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        return view('frontend.components.product-details.product-details', compact('name', 'url', 'footer'));
    }
    
    public function coworkit()
    {
        $name = "Coworkit";
        $url = "https://coworkit.co/";
        $footer = WebsiteControl::where('key', 'LIKE', "%footer%")->get();
        return view('frontend.components.product-details.product-details', compact('name', 'url', 'footer'));
    }
}

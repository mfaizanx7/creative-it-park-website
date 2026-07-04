<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\WebsiteControl;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutindex()
    {
        // $about  = WebsiteControl::where('key','LIKE',"%about%")->get();
        // dd($about);
        return view('admin.home.about.index');
    }

    public function homeAboutCreate(){
        // $about  = WebsiteControl::where('key','LIKE',"%about%")->get();
        // dd($about);
        return view('admin.home.home_about.create');
    }

    public function homeAboutStore(Request $request)
    {
        // dd($request->all());
        DB::table('website_controls')->updateOrInsert(['key' => 'home_about_heading'], [
            'value' => $request->home_about_heading
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'home_about_tags'], [
            'value' => $request->home_about_tags
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'home_about_description'], [
            'value' => $request->home_about_description
        ]);
        if (!empty($request['home_about_image'])) {
            $image = $request->home_about_image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->home_about_image->move(public_path('home_about/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'home_about_image'], [
                'value' => 'home_about/' . $imagename
            ]);
        }
    
        if (!empty($request['home_about_icon1'])) {
            $image = $request->home_about_icon1;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->home_about_icon1->move(public_path('home_about/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'home_about_icon1'], [
                'value' => 'home_about/' . $imagename
            ]);
        }
        if (!empty($request['home_about_icon2'])) {
            $image = $request->home_about_icon2;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->home_about_icon2->move(public_path('home_about/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'home_about_icon2'], [
                'value' => 'home_about/' . $imagename
            ]);
        }
        if (!empty($request['home_about_icon3'])) {
            $image = $request->home_about_icon3;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->home_about_icon3->move(public_path('home_about/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'home_about_icon3'], [
                'value' => 'home_about/' . $imagename
            ]);
        }
        if (!empty($request['home_about_icon4'])) {
            $image = $request->home_about_icon4;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->home_about_icon4->move(public_path('home_about/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'home_about_icon4'], [
                'value' => 'home_about/' . $imagename
            ]);
        }
        return redirect()->back();
    }
    public function aboutCreate(){
        $about  = WebsiteControl::where('key','LIKE',"%about%")->get();
        // dd($about);
        return view('admin.home.about.create',compact('about'));
    }

    public function aboutStore(Request $request)
    {
        // dd($request->all());
        if (!empty($request['about_detail'])) {
        DB::table('website_controls')->updateOrInsert(['key' => 'about_detail'], [
            'value' => $request->about_detail
        ]);
        }
        DB::table('website_controls')->updateOrInsert(['key' => 'about_mission_heading'], [
            'value' => $request->about_mission_heading
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'about_mission_sub_heading'], [
            'value' => $request->about_mission_sub_heading
        ]);
        if (!empty($request['about_mission_description'])) {
        DB::table('website_controls')->updateOrInsert(['key' => 'about_mission_description'], [
            'value' => $request->about_mission_description
        ]);
        }
        DB::table('website_controls')->updateOrInsert(['key' => 'about_mission_tag'], [
            'value' => $request->about_mission_tag
        ]);
        if (!empty($request['about_mission_image'])) {
            $image = $request->about_mission_image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->about_mission_image->move(public_path('about/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'about_mission_image'], [
                'value' => 'about/' . $imagename
            ]);
        }
        DB::table('website_controls')->updateOrInsert(['key' => 'about_agency_heading'], [
            'value' => $request->about_agency_heading
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'about_agency_sub_heading'], [
            'value' => $request->about_agency_sub_heading
        ]);
        if (!empty($request['about_agency_description'])) {
        DB::table('website_controls')->updateOrInsert(['key' => 'about_agency_description'], [
            'value' => $request->about_agency_description
        ]);
        }
        DB::table('website_controls')->updateOrInsert(['key' => 'about_agency_tag'], [
            'value' => $request->about_agency_tag
        ]);
        if (!empty($request['about_agency_image'])) {
            $image = $request->about_agency_image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->about_agency_image->move(public_path('about/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'about_agency_image'], [
                'value' => 'about/' . $imagename
            ]);
        }
        return redirect()->back();
    }

    public function footerCreate(){

        $footer = WebsiteControl::where('key','LIKE',"%footer%")->get();
        // dd($footer);
        return view('admin.home.footer.create',compact('footer'));
    }

    public function footerStore(Request $request){
        WebsiteControl::updateOrInsert(['key' => 'footer_address'], [
            'value' => $request->footer_address
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_email'], [
            'value' => $request->footer_email
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_number'], [
            'value' => $request->footer_number
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_social'], [
            'value' => $request->footer_social
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_social1'], [
            'value' => $request->footer_social1
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_social2'], [
            'value' => $request->footer_social2
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_social3'], [
            'value' => $request->footer_social3
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_social4'], [
            'value' => $request->footer_social4
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_link'], [
            'value' => $request->footer_link
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_link1'], [
            'value' => $request->footer_link1
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_link2'], [
            'value' => $request->footer_link2
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_link3'], [
            'value' => $request->footer_link3
        ]);
        DB::table('website_controls')->updateOrInsert(['key' => 'footer_link4'], [
            'value' => $request->footer_link4
        ]);
        if (!empty($request['footer_image'])) {
            $image = $request->footer_image;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->footer_image->move(public_path('footer/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'footer_image'], [
                'value' => 'footer/' . $imagename
            ]);
        }
        if (!empty($request['footer_image_dark'])) {
            $image = $request->footer_image_dark;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->footer_image_dark->move(public_path('footer/'), $imagename);
            DB::table('website_controls')->updateOrInsert(['key' => 'footer_image_dark'], [
                'value' => 'footer/' . $imagename
            ]);
        }
        return redirect()->back();
    }
}

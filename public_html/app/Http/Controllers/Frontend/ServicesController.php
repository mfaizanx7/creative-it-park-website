<?php



namespace App\Http\Controllers\Frontend;



use Exception;

use App\Models\Blog;

use App\Models\Faqs;

use App\Models\News;

use App\Models\Contact;

use App\Models\Website;

use App\Models\Industry;

use App\Models\UiServices;

use App\Models\AppServices;

use Illuminate\Http\Request;

use App\Models\CloudServices;

use App\Models\WebsiteControl;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Models\Career;

use App\Models\Subscribe;

use Str;



class ServicesController extends Controller
{

    public function index()
    {

        $web_services = Website::where('type', 'service-solution')->get();

        $web_performance = Website::where('type', 'service-performance')->get();

        $web_application = Website::where('type', 'service-application')->get();

        $footer = $this->getFooterData();

        return view('frontend.components.services-web.services-web', compact('footer', 'web_services', 'web_performance', 'web_application'));

    }



    public function appIndex()
    {

        $app_solution = AppServices::where('type', 'solution')->get();

        $app_portfolio = AppServices::where('type', 'portfolio')->get();

        $app_end = AppServices::where('type', 'application')->get();

        $app_deleviry = AppServices::where('type', 'delivery')->get();

        $app_tech = AppServices::where('type', 'tech')->get();

        $footer = $this->getFooterData();

        return view('frontend.components.service-mobile-app.service-app', compact('footer', 'app_solution', 'app_portfolio', 'app_end', 'app_deleviry', 'app_tech'));



    }

    public function content_index()
    {

        $app_solution = AppServices::where('type', 'seo_friendly')->get();

        $app_portfolio = AppServices::where('type', 'portfolio')->get();

        $app_end = AppServices::where('type', 'application')->get();

        $app_deleviry = AppServices::where('type', 'delivery')->get();

        $app_tech = AppServices::where('type', 'tech')->get();

        $footer = $this->getFooterData();

        return view('frontend.components.content_writing.content_index', compact('footer', 'app_solution', 'app_portfolio', 'app_end', 'app_deleviry', 'app_tech'));



    }



    public function uiIndex()
    {

        $ui_solution = UiServices::where('type', 'experience')->get();

        $ui_tool = UiServices::where('type', 'tools')->get();

        $ui_enterprises = UiServices::where('type', 'enterprises')->get();

        $ui_design = UiServices::where('type', 'design')->get();

        $footer = $this->getFooterData();

        return view('frontend.components.service-ux.service-ui-ux', compact('footer', 'ui_solution', 'ui_tool', 'ui_enterprises', 'ui_design'));

    }

    public function cloudIndex()
    {

        $cloud_security = CloudServices::where('type', 'security')->get();

        $cloud_advantages = CloudServices::where('type', 'advantages')->get();

        return view('frontend.components.service-cloud.service-cloud', compact('cloud_security', 'cloud_advantages'));

    }



    public function industryShow(Request $request, $slug)
    {

        $industry_slug = Industry::where('slug', $slug)->first();

        $footer = $this->getFooterData();

        return view('frontend.components.industries.industry-edu', compact('industry_slug', 'footer'));

    }

    public function newsIndex()
    {

        $news = News::paginate(3);

        $footer = $this->getFooterData();

        return view('frontend.components.news.news', compact('news', 'footer'));

    }

    public function careerIndex()
    {

        $footer = $this->getFooterData();

        return view('frontend.components.contact_us.contact', compact('footer'));

    }



    public function careerStore(Request $request)
    {

        // dd($request->all());

        try {

            DB::beginTransaction();

            $contact = new Career();

            $contact->first_name = $request->first_name;

            $contact->last_name = $request->last_name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->company = $request->company;

            $contact->role = $request->role;

            $contact->category = $request->category;

            $contact->description = $request->role;

            $contact->budget = $request->budget;

            if (!empty($request['userfile'])) {

                $imageName = time() . '.' . $request['userfile']->extension();

                $request['userfile']->move(public_path('assets/uploads/career/'), $imageName);

                $photo = $imageName;

            } else {

                $photo = '';

            }

            $contact->image = $photo;

            $contact->save();

            DB::commit();

            return redirect()->route('career.index');

        } catch (Exception $e) {

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function contactStore(Request $request)
    {

        // dd($request->all());

        try {

            DB::beginTransaction();

            $contact = new Contact();

            $contact->name = $request->name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->description = $request->description;

            $contact->agree = $request->has('agree') ? 1 : 0;

            if (!empty($request['userfile'])) {

                $imageName = time() . '.' . $request['userfile']->extension();

                $request['userfile']->move(public_path('assets/uploads/contact/'), $imageName);

                $photo = $imageName;

            } else {

                $photo = '';

            }

            $contact->image = $photo;

            $contact->save();

            DB::commit();

            return redirect()->back();

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function blogIndex()
    {

        $blogs = Blog::paginate(6);

        $footer = $this->getFooterData();

        return view('frontend.components.blog.blog', compact('blogs', 'footer'));

    }

    public function blogDetails($slug)
    {
        $blogs = Blog::where('slug', $slug)->firstOrFail();
        $latestblogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $footer = $this->getFooterData();
        return view('frontend.components.blog.blog_details', compact('blogs', 'latestblogs', 'footer'));
    }

    public function faqsIndex()
    {

        $faqs = Faqs::get();

        $footer = $this->getFooterData();

        return view('frontend.components.faq.index', compact('footer', 'faqs'));

    }



    public function subscribeStore(Request $request)
    {

        try {

            DB::beginTransaction();

            $subscribe = new Subscribe();

            $subscribe->email = $request->email;

            $subscribe->save();

            DB::commit();

            return redirect()->back()->with('success', 'Subscription saved successfully!');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }

}


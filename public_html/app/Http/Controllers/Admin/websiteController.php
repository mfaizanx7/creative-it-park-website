<?php



namespace App\Http\Controllers\Admin;



use Exception;

use App\Models\Blog;

use App\Models\Faqs;

use App\Models\News;

use App\Models\events;

use App\Models\Client;

use App\Models\Contact;

use App\Models\Website;

use App\Models\Industry;

use App\Models\Portfolio;

use App\Models\Subscribe;

use App\Models\UiServices;

use App\Models\AppServices;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Mail\SubscriberEmail;

use App\Models\CloudServices;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;



class websiteController extends Controller
{

    public function index()
    {

        $web_ser_solu = Website::paginate(10);

        return view('admin.website.index', compact('web_ser_solu'));

    }



    public function create()
    {

        return view('admin.website.create');

    }



    public function store(Request $request)
    {



        try {

            DB::beginTransaction();

            $web_ser_solu = new Website;

            $web_ser_solu->heading = $request->heading;

            $web_ser_solu->discription = $request->discription;

            $web_ser_solu->type = $request->type;

            if (!empty($request['icon'])) {



                $imageName = time() . '.' . $request['icon']->extension();



                $request['icon']->move(public_path('assets/uploads/web_perf/icon/'), $imageName);



                $photo = $imageName;

            } else {

                $photo = '';

            }

            $web_ser_solu->icon = $photo;

            $web_ser_solu->save();

            DB::commit();

            return redirect()->route('admin.website.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function edit($id)
    {

        $web_ser_solu = Website::find($id);

        return view('admin.website.edit', compact('web_ser_solu'));

    }



    public function update(Request $request, $id)
    {

        try {

            DB::beginTransaction();

            $web_ser_solu = Website::find($id);

            $web_ser_solu->heading = $request->heading;

            $web_ser_solu->discription = $request->discription;

            $web_ser_solu->type = $request->type;

            if (!empty($request['icon'])) {



                $imageName = time() . '.' . $request['icon']->extension();



                $request['icon']->move(public_path('assets/uploads/web_perf/icon/'), $imageName);



                $photo = $imageName;

                $web_ser_solu->icon = $photo;

            }

            $web_ser_solu->save();

            DB::commit();

            return redirect()->route('admin.website.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function destroy($id)
    {

        $web_ser_solu = Website::find($id);

        $web_ser_solu->delete();

        return redirect()->back();

    }



    public function appIndex()
    {

        $app_ser_solu = AppServices::paginate(10);

        return view('admin.website.app.index', compact('app_ser_solu'));

    }



    public function AppCreate()
    {

        return view('admin.website.app.create');

    }



    public function appStore(Request $request)
    {

        // dd($request->all());



        try {

            DB::beginTransaction();

            $app_ser_solu = new AppServices();

            $app_ser_solu->heading = $request->heading;

            $app_ser_solu->description = $request->description;

            $app_ser_solu->sub_head = $request->sub_head;

            $app_ser_solu->type = $request->type;

            if (!empty($request['icon'])) {



                $imageName = time() . '.' . $request['icon']->extension();



                $request['icon']->move(public_path('assets/uploads/app_service/icon/'), $imageName);



                $photo = $imageName;

            } else {

                $photo = '';

            }

            $app_ser_solu->icon = $photo;

            $app_ser_solu->save();

            DB::commit();

            return redirect()->route('admin.app.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function AppEdit($id)
    {

        $app_ser_solu = AppServices::find($id);

        return view('admin.website.app.edit', compact('app_ser_solu'));

    }



    public function appUpdate(Request $request, $id)
    {

        // dd($request->all());



        try {

            DB::beginTransaction();

            $app_ser_solu = AppServices::find($id);

            $app_ser_solu->heading = $request->heading;

            $app_ser_solu->description = $request->description;

            $app_ser_solu->sub_head = $request->sub_head;

            $app_ser_solu->type = $request->type;

            if (!empty($request['icon'])) {



                $imageName = time() . '.' . $request['icon']->extension();



                $request['icon']->move(public_path('assets/uploads/app_service/icon/'), $imageName);



                $photo = $imageName;

                $app_ser_solu->icon = $photo;

            }

            $app_ser_solu->save();

            DB::commit();

            return redirect()->route('admin.app.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function appDestroy($id)
    {

        $app_ser_solu = AppServices::find($id);

        $app_ser_solu->delete();

        return redirect()->back();

    }



    public function uiIndex()
    {

        $ui_services = UiServices::paginate(10);

        return view('admin.website.ui.index', compact('ui_services'));

    }



    public function uiCreate()
    {

        return view('admin.website.ui.create');

    }



    public function uiStore(Request $request)
    {

        // dd($request->all());



        try {

            DB::beginTransaction();

            $ui_services = new UiServices();

            $ui_services->heading = $request->heading;

            $ui_services->description = $request->description;

            $ui_services->sub_head = $request->sub_head;

            $ui_services->type = $request->type;

            if (!empty($request['icon'])) {



                $imageName = time() . '.' . $request['icon']->extension();



                $request['icon']->move(public_path('assets/uploads/ui_service/icon/'), $imageName);



                $photo = $imageName;

            } else {

                $photo = '';

            }

            $ui_services->icon = $photo;

            $ui_services->save();

            DB::commit();

            return redirect()->route('admin.ui.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function uiEdit($id)
    {

        $ui_services = UiServices::find($id);

        return view('admin.website.ui.edit', compact('ui_services'));

    }



    public function uiUpdate(Request $request, $id)
    {

        // dd($request->all());



        try {

            DB::beginTransaction();

            $ui_services = UiServices::find($id);

            $ui_services->heading = $request->heading;

            $ui_services->description = $request->description;

            $ui_services->sub_head = $request->sub_head;

            $ui_services->type = $request->type;

            if (!empty($request['icon'])) {



                $imageName = time() . '.' . $request['icon']->extension();



                $request['icon']->move(public_path('assets/uploads/ui_service/icon/'), $imageName);



                $photo = $imageName;

                $ui_services->icon = $photo;

            }

            $ui_services->save();

            DB::commit();

            return redirect()->route('admin.ui.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function uiDestroy($id)
    {

        $ui_services = UiServices::find($id);

        $ui_services->delete();

        return redirect()->back();

    }

    public function cloudIndex()
    {

        $cloud_services = CloudServices::paginate(10);

        return view('admin.website.cloud.index', compact('cloud_services'));

    }



    public function cloudCreate()
    {

        return view('admin.website.cloud.create');

    }



    public function cloudStore(Request $request)
    {

        // dd($request->all());



        try {

            DB::beginTransaction();

            $cloud_services = new CloudServices();

            $cloud_services->heading = $request->heading;

            $cloud_services->description = $request->description;

            $cloud_services->type = $request->type;

            $cloud_services->save();

            DB::commit();

            return redirect()->route('admin.cloud.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    // public function cloudEdit($id){

    //     $cloud_services = UiServices::find($id);

    //     return view('admin.website.cloud.edit',compact('cloud_services')); 

    // }



    // public function cloudUpdate(Request $request,$id)

    // {

    //     // dd($request->all());



    //     try {

    //         DB::beginTransaction();

    //         $cloud_services =  UiServices::find($id);

    //         $cloud_services->heading = $request->heading;

    //         $cloud_services->description = $request->description;

    //         $cloud_services->type = $request->type;

    //         $cloud_services->save();

    //         DB::commit();

    //         return redirect()->route('admin.cloud.index');

    //     } catch (Exception $e) {

    //         // dd($e);

    //         DB::rollback();

    //         return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

    //     }

    // }



    // public function cloudDestroy($id){

    //     $cloud_services = UiServices::find($id);

    //     $cloud_services->delete();

    //     return redirect()->back();

    // }



    public function portfolioIndex()
    {

        $portfolio = Portfolio::paginate(10);

        return view('admin.portfolio.index', compact('portfolio'));

    }

    public function portfolioCreate()
    {

        // $cloud_services = CloudServices::paginate(10);

        return view('admin.portfolio.create');

    }



    public function portfolioStore(Request $request)
    {



        try {

            DB::beginTransaction();

            $portfolio = new Portfolio();

            $portfolio->heading = $request->heading;

            $portfolio->link = $request->link;

            $portfolio->type = $request->type;

            if (!empty($request['image'])) {



                $imageName = time() . '.' . $request['image']->extension();



                $request['image']->move(public_path('assets/uploads/portfolio/'), $imageName);



                $photo = $imageName;

            } else {

                $photo = '';

            }

            $portfolio->image = $photo;

            $portfolio->save();

            DB::commit();

            return redirect()->route('admin.portfolio.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function portfolioEdit($id)
    {

        $portfolio = Portfolio::find($id);

        // dd($portfolio);

        return view('admin.portfolio.edit', compact('portfolio'));

    }



    public function portfolioUpdate(Request $request, $id)
    {



        try {

            DB::beginTransaction();

            $portfolio = Portfolio::find($id);

            $portfolio->heading = $request->heading;

            $portfolio->link = $request->link;

            $portfolio->type = $request->type;

            if (!empty($request['image'])) {



                $imageName = time() . '.' . $request['image']->extension();



                $request['image']->move(public_path('assets/uploads/portfolio/'), $imageName);



                $photo = $imageName;

                $portfolio->image = $photo;

            }

            $portfolio->save();

            DB::commit();

            return redirect()->route('admin.portfolio.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function portfolioDestroy($id)
    {

        $portfolio = Portfolio::find($id);

        $portfolio->delete();

        return redirect()->back();

    }



    public function clientIndex()
    {

        $client = Client::paginate(10);

        return view('admin.client.index', compact('client'));

    }

    public function clientCreate()
    {

        return view('admin.client.create');

    }



    public function clientStore(Request $request)
    {



        try {

            DB::beginTransaction();

            $client = new Client();

            $client->link = $request->link;

            $client->name = $request->name;

            if (!empty($request['image'])) {



                $imageName = time() . '.' . $request['image']->extension();



                $request['image']->move(public_path('assets/uploads/client/'), $imageName);



                $photo = $imageName;

            } else {

                $photo = '';

            }

            $client->image = $photo;

            $client->save();

            DB::commit();

            return redirect()->route('admin.client.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }

    public function clientEdit($id)
    {

        $client = Client::find($id);

        return view('admin.client.edit', compact('client'));

    }



    public function clientUpdate(Request $request, $id)
    {



        try {

            DB::beginTransaction();

            $client = Client::find($id);

            $client->link = $request->link;

            $client->name = $request->name;

            if (!empty($request['image'])) {



                $imageName = time() . '.' . $request['image']->extension();



                $request['image']->move(public_path('assets/uploads/client/'), $imageName);



                $photo = $imageName;

                $client->image = $photo;

            }

            $client->save();

            DB::commit();

            return redirect()->route('admin.client.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function clientDestroy($id)
    {

        $client = Client::find($id);

        $client->delete();

        return redirect()->back();

    }



    public function industryIndex()
    {

        $industries = Industry::all();

        return view('admin.industry.index', compact('industries'));

    }

    public function industryCreate()
    {

        // $industries = Industry::all();

        return view('admin.industry.create');

    }



    public function industryStore(Request $request)
    {



        try {

            DB::beginTransaction();

            $industry = new Industry();

            $industry->heading = $request->name;

            $industry->detail = $request->detail;

            $industry->slug = Str::slug($request->name);

            if (!empty($request['image'])) {

                $imageName = time() . '.' . $request['image']->extension();

                $request['image']->move(public_path('assets/uploads/industry/'), $imageName);

                $photo = $imageName;

            } else {

                $photo = '';

            }

            $industry->image = $photo;

            $industry->save();

            DB::commit();

            return redirect()->route('admin.industry.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function industryEdit($id)
    {

        $industry = Industry::find($id);

        return view('admin.industry.edit', compact('industry'));

    }



    public function industryUpdate(Request $request, $id)
    {



        try {

            DB::beginTransaction();

            $industry = Industry::find($id);

            $industry->heading = $request->name;

            $industry->detail = $request->detail;

            $industry->slug = Str::slug($request->name);

            if (!empty($request['image'])) {

                $imageName = time() . '.' . $request['image']->extension();

                $request['image']->move(public_path('assets/uploads/industry/'), $imageName);

                $photo = $imageName;

                $industry->image = $photo;

            }

            $industry->save();

            DB::commit();

            return redirect()->route('admin.industry.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function industryDestroy($id)
    {

        $industry = Industry::find($id);

        $industry->delete();

        return redirect()->back();

    }



    public function newsIndex()
    {

        $news = News::get();

        return view('admin.news.index', compact('news'));

    }

    public function newsCreate()
    {

        return view('admin.news.create');

    }



    public function newsStore(Request $request)
    {

        try {

            DB::beginTransaction();

            $news = new News();

            $news->title = $request->title;

            $news->description = $request->description;

            $news->author = $request->author;

            if (!empty($request['image'])) {

                $imageName = time() . '.' . $request['image']->extension();

                $request['image']->move(public_path('assets/uploads/news/'), $imageName);

                $photo = $imageName;

            } else {

                $photo = '';

            }

            $news->image = $photo;

            $news->save();

            DB::commit();

            return redirect()->route('admin.news.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function newsEdit($id)
    {

        $news = News::find($id);

        return view('admin.news.edit', compact('news'));

    }



    public function newsUpdate(Request $request, $id)
    {

        try {

            DB::beginTransaction();

            $news = News::find($id);

            $news->title = $request->title;

            $news->description = $request->description;

            $news->author = $request->author;

            if (!empty($request['image'])) {

                $imageName = time() . '.' . $request['image']->extension();

                $request['image']->move(public_path('assets/uploads/news/'), $imageName);

                $photo = $imageName;

                $news->image = $photo;

            }

            $news->save();

            DB::commit();

            return redirect()->route('admin.news.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function newsDestroy($id)
    {

        $news = News::find($id);

        $news->delete();

        return redirect()->back();

    }

    public function eventsIndex()
    {
        $events = events::get();
        return view('admin.events.index', compact('events'));
    }
    public function eventsCreate()
    {
        return view('admin.events.create');
    }

    public function eventsStore(Request $request)
    {
        try {
            DB::beginTransaction();
            $events = new events();
            $events->description = $request->description;
            if (!empty($request['image'])) {
                $imageName = time() . '.' . $request['image']->extension();
                $request['image']->move(public_path('/frontend/images/images/events/'), $imageName);
                $photo = $imageName;
            } else {
                $photo = '';
            }
            $events->picture = $photo;
            $events->save();
            DB::commit();
            return redirect()->route('admin.events.index');
        } catch (Exception $e) {
            // dd($e);
            DB::rollback();
            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);
        }
    }

    public function eventsEdit($id)
    {
        $events = events::find($id);
        return view('admin.events.edit', compact('events'));
    }

    public function eventsUpdate(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $events = events::find($id);
            $events->description = $request->description;
            if (!empty($request['image'])) {
                $imageName = time() . '.' . $request['image']->extension();
                $request['image']->move(public_path('/frontend/images/images/events/'), $imageName);
                $photo = $imageName;
                $events->picture = $photo;
            }
            $events->save();
            DB::commit();
            return redirect()->route('admin.events.index');
        } catch (Exception $e) {
            // dd($e);
            DB::rollback();
            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);
        }
    }

    public function eventsDestroy($id)
    {
        $events = events::find($id);
        $events->delete();
        return redirect()->back();
    }



    public function contactIndex()
    {

        $contact = Contact::get();

        return view('admin.contact.index', compact('contact'));

    }

    public function subscribeIndex()
    {

        $subscribe = Subscribe::get();

        return view('admin.subscribe.index', compact('subscribe'));

    }



    public function blogsIndex()
    {

        $blogs = Blog::get();

        return view('admin.blogs.index', compact('blogs'));

    }



    public function blogsCreate()
    {

        return view('admin.blogs.create');

    }



    public function blogsStore(Request $request)
    {

        // dd($request->all());

        try {

            DB::beginTransaction();

            $blogs = new Blog();

            $blogs->title = $request->title;

            $blogs->description = $request->description;

            $blogs->author = $request->author;

            if (!empty($request['image'])) {

                $imageName = time() . '.' . $request['image']->extension();

                $request['image']->move(public_path('assets/uploads/blogs/'), $imageName);

                $photo = $imageName;

            } else {

                $photo = '';

            }

            $blogs->image = $photo;

            $blogs->save();

            DB::commit();

            return redirect()->route('admin.blogs.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function blogsEdit($id)
    {

        $blogs = Blog::find($id);

        return view('admin.blogs.edit', compact('blogs'));

    }



    public function blogsUpdate(Request $request, $id)
    {



        try {

            DB::beginTransaction();

            $blogs = Blog::find($id);

            $blogs->title = $request->title;

            $blogs->description = $request->description;

            $blogs->author = $request->author;

            if (!empty($request['image'])) {

                $imageName = time() . '.' . $request['image']->extension();

                $request['image']->move(public_path('assets/uploads/blogs/'), $imageName);

                $photo = $imageName;

                $blogs->image = $photo;

            }

            $blogs->save();

            DB::commit();

            return redirect()->route('admin.blogs.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }

    public function uploadMediackeditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');

            // Generate unique name like fc2
            $imageName = time() . '_' . uniqid() . '.' . $file->extension();

            // Use the same public path system as fc2
            $directory = public_path('assets/uploads/editor_images');

            // Ensure the directory exists
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            // Move the uploaded file to the directory
            $file->move($directory, $imageName);

            // Build URL like fc2
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('assets/uploads/editor_images/' . $imageName);
            $msg = 'Image uploaded successfully';

            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
        return false;
    }




    public function blogsDestroy($id)
    {

        $blogs = Blog::find($id);

        $blogs->delete();

        return redirect()->back();

    }



    public function faqsIndex()
    {

        $faqs = Faqs::get();

        return view('admin.faqs.index', compact('faqs'));

    }

    public function faqsCreate()
    {

        // $faqs = Faq::all();

        return view('admin.faqs.create');

    }



    public function faqsStore(Request $request)
    {

        // dd($request->all());

        try {

            DB::beginTransaction();

            $faqs = new Faqs();

            $faqs->question = $request->title;

            $faqs->answer = $request->description;

            $faqs->save();

            DB::commit();

            return redirect()->route('admin.faqs.index');

        } catch (Exception $e) {

            // dd($e);

            DB::rollback();

            return response()->json(['error' => 'Transaction failed: ' . $e->getMessage()]);

        }

    }



    public function sendEmailToAllSubscribers()
    {

        $subscribers = Subscribe::all();

        $emails = $subscribers->pluck('email')->toArray();

        foreach ($emails as $email) {

            // Sending email

            // SubscriberEmail::to($email);

            $subscriberEmail = new SubscriberEmail('Your Subject', 'Your Email Content');



            Mail::to($email)->send($subscriberEmail);

        }



        return "Emails sent successfully!";

    }



}


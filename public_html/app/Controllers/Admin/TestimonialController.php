<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    
    public function testimonialindex()
    {
        return view('admin.home.testimonialindex');
    }
    public function testimonialstore(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->detail = $request->detail;
        $testimonial->subject = $request->subject;
        
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move(public_path('images/'), $imagename);
        $testimonial->image = 'images/' . $imagename;
        if ($testimonial->save()) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
        
    }
}

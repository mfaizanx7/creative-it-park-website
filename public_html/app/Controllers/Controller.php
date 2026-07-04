<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

  //     $image = $request->image;
            //     $imagename=time().'.'.$image->getClientOriginalExtension();
            //     $request->image->move('public/image',$imagename);       
            //     DB::table('bussiness_settings')->updateOrInsert(['key' => 'image'], [
            //         'value' => $imagename          
            //     ]);

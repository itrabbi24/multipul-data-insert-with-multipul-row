<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        if(count($request->ProductID) > 0)
        {
        foreach($request->ProductID as $item=>$v){
            $data2=array(
                'ProductID'=>$request->ProductID[$item],
                'DeviceName'=>$request->DeviceName[$item],
                'PartsName'=>$request->PartsName[$item],
                'PartsID'=>$request->PartsID[$item]
            );
        Items::insert($data2);

      }
        }
        return redirect()->back()->with('success','data insert successfully');
    }
}

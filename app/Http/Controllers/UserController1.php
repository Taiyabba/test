<?php

namespace App\Http\Controllers;
use App\Lib\XmljsonHelper;
use Illuminate\Support\Facades\TestFacades;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    public function convert(Request $request)
    {   
        TestFacades::testingFacades();
        // $XmljsonHelper=new XmljsonHelper();

        // $student = XmljsonHelper::fromFile(resource_path('xml/abc.xml'))->toJson(); 

    }

}

<?php

namespace Ml\Result;

use Illuminate\Routing\Controller;
use Ml\Result\Lib\Response\Result;

class ResultController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return app('view')->make('views.result');
        $result = new Result();
        $result = $result->toArray();

        return view('vendor.result-viewer.result', compact('result'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSRFController extends Controller
{

    /**
     * 導向html_csrf頁面
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function view_html_csrf(Request $request) {
        return view('html_csrf');
    }

    /**
     * 如果post有過就顯示input的值
     *
     * @param Request $request
     */
    public function html_csrf(Request $request) {
        dump($request->all());
    }
    
}

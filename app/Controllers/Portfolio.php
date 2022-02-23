<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        $data['sidebar'] = view('v_sidebarhome');
        $data['content'] = view('v_home');

        return view('v_base', $data);
    }

    public function more(){
        return view('v_more_portfolio');
    }
}

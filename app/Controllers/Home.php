<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['sidebar'] = view('vsidebarhome');
        $data['content'] = view('vhome');

        return view('vbase', $data);
    }
}

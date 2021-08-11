<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    //makes it require login
    public function __construct()
    {
        $this->middleware('auth');   
    }


    public function create()
    {
        return view('campaigns/create');
    }

    public function store()
    {

        $data = request()->validate([
                'army_name' => 'required',
                'faction' => 'required',
                'sub_faction' => 'required',
                'realm' => 'required',
                'starting_size' => 'required',
                'image' => ['image', 'required'],
            ]);

        auth()->user()->campaigns()->create($data);
        

        dd(request()->all());
    }
}

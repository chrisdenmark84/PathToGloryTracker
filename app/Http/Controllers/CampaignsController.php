<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignsController extends Controller
{
    //
    public function create()
    {
        return view('campaigns/create');
    }

    public function store()
    {

        $data = request()->validate([
                'army_name' => 'required',
                'faction' => 'required',
                'sub_faction' => '',
                'realm' => '',
                'starting_size' => 'required',
                'image' => 'image',
            ]);

        auth()->user()->campaigns()->create($data);
        

        dd(request()->all());
    }
}

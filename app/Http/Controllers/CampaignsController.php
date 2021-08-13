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

            $imagePath = (request('image')->store('uploads', 'public'));

            auth()->user()->campaigns()->create([
                'army_name' => $data['army_name'],
                'faction' => $data['faction'],
                'sub_faction' =>$data['sub_faction'],
                'realm' =>$data['realm'],
                'starting_size' => $data['starting_size'],
                'image' => $imagePath,
            ]);
        

            return redirect('/profile/' . auth()->user()->id);
            
    }

    public function show(\App\Models\Campaign $campaign)
    {
        return view('campaigns.show', compact('campaign'));
    }
}

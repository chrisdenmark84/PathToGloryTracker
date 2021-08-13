@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $campaign->image}}" class="w-100">
            
        </div>

        <div class="col-4">
           <h3>Army Name: {{ $campaign->army_name}}</h3>
           <h4>Faction: {{$campaign->faction}}</h4>
           <h4>Sub Faction: {{$campaign->sub_faction}}</h4>
           <h4>Realm: {{$campaign->realm}}</h4>
           <h4>Starting Size: {{$campaign->starting_size}}</h4>

        </div>
    </div>


</div>

@endsection

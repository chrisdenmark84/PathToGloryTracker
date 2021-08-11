@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-3 pb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h2>{{$user->username}}</h2>
                    <a href="../c/create">Start New Campaign </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert"> {{ session('status') }}</div>
                    @endif

                    {{ __('You are logged in!') }}
                
                    <div>{{$user->profile->titles}}</div>
                    <div>{{$user->profile->description}}</div>
                    <div>{{$user->profile->url}}</div>    

                
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center pt-3 pb-3">
        <div class="col-md-8">
            <h2>Campaigns:</h2>
        @foreach ($user->campaigns as $campaign)
            <div class="card mt-2 mb-2">
                <div>Army Name: {{$campaign->army_name}}</div>
                <div>Faction: {{$campaign->faction}}</div>
                <div>Sub Faction: {{$campaign->sub_faction}}</div>
                <div>Realm: {{$campaign->realm}}</div>
                <div>Starting Size: {{$campaign->starting_size}}</div>
                <div><img src="/storage/{{ $campaign->image }}" class="w-100"></div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection

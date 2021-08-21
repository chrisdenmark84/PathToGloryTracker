@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-3 pb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="d-flex justify-content-between align-items-baseline pt-1 pl-2 pr-2">
                    
                    <h2>{{$user->username}}</h2>

                    @can('update', $user->profile)
                    <a href="../c/create">Start New Campaign</a>
                    @endcan
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert"> {{ session('status') }}</div>
                    @endif

                    {{ __('You are logged in!') }}
                
                    <div>{{$user->profile->titles ?? ''}}</div>
                    <div>{{$user->profile->description ?? ''}}</div>
                    <div>{{$user->profile->url ?? ''}}</div>  
                    <div>Total Campaigns: {{$user->campaigns->count()}}</div>  

                    @can('update', $user->profile)
                    <div><a href="/profile/{{ $user->id}}/edit">Edit Profile</div>
                    @endcan

                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center pt-3 pb-3">
        <div class="col-md-8">
            <h2>Campaigns:</h2>

        @foreach ($user->campaigns as $campaign)

            <div class="card mt-2 mb-2">
                
                @can('update', $user->profile)
                <div><a href="/c/{{$campaign->id}}">Edit Campaign</a></div>
                <div><a href="#">Delete Campaign</a></div>    
                @endcan

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

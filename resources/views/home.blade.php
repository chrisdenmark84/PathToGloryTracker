@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{$user->username}}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                
                <div>{{$user->profile->titles}}</div>
                <div>{{$user->profile->description}}</div>
                <div>{{$user->profile->url}}</div>    

                <div><img src="https://lh6.googleusercontent.com/-GkjInH3jDEY/AAAAAAAAAAI/AAAAAAAAC-k/Ru3tvcIG6aU/photo.jpg"></div>
                <div><img src="https://coursepro.co.uk/wp-content/uploads/Chris-Denmark.jpg"></div>
                <div><img src="https://media-exp1.licdn.com/dms/image/C5603AQG5R6yhyaIb_A/profile-displayphoto-shrink_200_200/0/1524135748770?e=1634169600&v=beta&t=b9GRYZcbo2JvympeCF8Ftn5qQo7Us-vZl_4MX7ok5ksS"></div>                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

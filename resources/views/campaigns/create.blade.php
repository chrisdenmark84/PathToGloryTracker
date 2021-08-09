@extends('layouts.app')

@section('content')

<div class="container">

    <form action="/c" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>Create New Campagin</h2>
                </div>


                <div class="form-group row">
                    <label for="army_name" class="col-md-4 col-form-label">{{ __('Army Name') }}</label>

                    <input id="army_name" 
                    type="text" 
                    class="form-control @error('army_name') is-invalid @enderror" name="army_name" 
                    value="{{ old('army_name') }}" 
                    required autocomplete="army_name" autofocus>

                @error('army_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            


                <div class="form-group row">
                    <label for="faction" class="col-md-4 col-form-label">{{ __('Faction') }}</label>

                    <input id="faction" 
                    type="text" 
                    class="form-control @error('faction') is-invalid @enderror" name="faction" 
                    value="{{ old('faction') }}" 
                    required autocomplete="faction" autofocus>

                @error('faction')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            


                <div class="form-group row">
                    <label for="sub_faction" class="col-md-4 col-form-label">{{ __('Sub Faction') }}</label>

                    <input id="sub_faction" 
                    type="text" 
                    class="form-control @error('sub_faction') is-invalid @enderror" name="sub_faction" 
                    value="{{ old('sub_faction') }}" 
                    required autocomplete="sub_faction" autofocus>

                @error('sub_faction')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            


                <div class="form-group row">
                    <label for="realm" class="col-md-4 col-form-label">{{ __('Realm') }}</label>

                    <input id="realm" 
                    type="text" 
                    class="form-control @error('realm') is-invalid @enderror" name="realm" 
                    value="{{ old('realm') }}" 
                    required autocomplete="realm" autofocus>

                @error('realm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            


                <div class="form-group row">
                    <label for="starting_size" class="col-md-4 col-form-label">{{ __('Starting Size') }}</label>

                    <input id="startomg_size" 
                    type="number" 
                class="form-control @error('starting_size') is-invalid @enderror" name="starting_size" 
                    value="{{ old('starting_size') }}" 
                    required autocomplete="starting_size" autofocus>

                @error('starting_size')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

           <div class="row">
                
                <label for="image" class="col-md-4 col-form-label">{{ __('Amry Picture') }}</label>
                <input type="file" class="form-control-feil" id="image" name="image">

                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div> 

            <div class="row pt-4">
                <button class="btn btn-primary">Create Campagin</button>
            </div>

        </div>
    </form>
</div>



@endsection

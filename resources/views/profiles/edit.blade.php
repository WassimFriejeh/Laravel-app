@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf


        <div class="row">
            <div class="col-8 offset-4">

                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <label for="caption" class="col-md-4 col-form-label text-md-end">
                    {{ __('Post Caption') }}</label>

                <div class="col-md-6">
                    <input id="caption" type="caption"
                        class="form-control 
                        @error('caption') is-invalid 
                        @enderror"
                        name="caption" value="{{ old('caption') }}" required autocomplete="caption">

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label text-md-end">
                        {{ __('Post Image') }}</label>


                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                        {{-- <span class="invalid-feedback" role="alert"> --}}
                            <strong>{{ $message }}</strong>
                        {{-- </span> --}}
                    @enderror
                </div>

                <div class="row pt-4 w-25">
                    <button class="btn btn-primary">Add new post</button>
                </div>

            </div>
        </div>
    </form>    
</div>
@endsection

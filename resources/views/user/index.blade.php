@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="container">
            @if((Auth::user()->photo_id)!=null)
                @php
                $avatar=Auth::user()->photo->path;
                @endphp
                <a href=""><img style="border-radius:50%;width:200px;height:200px;display:block;margin-left:auto;margin-right:auto;" class="img-fluid"  src="{{asset('images/'.$avatar)}}"></a>
            @else 
                <a href=""><img style="border-radius:50%;width:200px;height:200px;display:block;margin-left:auto;margin-right:auto;" class="img-fluid" src="https://api.adorable.io/avatars/285/abott@adorable.png"></a>
            @endif
        </div>
    </div>
@endsection
@extends('layout.StaticPageLayout') 

@section('cds-container') 
    @foreach ($data as $cd)
        <div class="cd">
            <img src="{{$cd->imgpath}}"/>
            <h3>{{$cd->album}}</h3>
            <small>{{$cd->artis}}</small>
            <strong>{{$cd->year}}</strong>
        </div>
    @endforeach

@endsection

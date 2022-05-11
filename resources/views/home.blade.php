@extends('layouts.app')

@section('content')
<div class="container">
    <div class= "row">
        <div class="col-3 p-5">
            <img src="/images/freecode240x240.jpg" style="height: 150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> post</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We are a global community of millions of people learning to code together. We are an Open source, donor supported... </div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/images/hui.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/images/hui.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/images/hui.jpg" class="w-100">
         </div>
    </div>
</div>
@endsection

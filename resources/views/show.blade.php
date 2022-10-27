@extends('layouts.app')

@section('container')
    <h1 class="mx-auto text-center m-3 font-black text-5xl">{{$maintitle}}</h1>
    <img src="/image/{{$writers['images']}}" class="m-3 ml-6 d-block rounded-3" width="600px" height="400px" alt="">
    <h2 class="m-3 ml-6 font-black text-3xl">Name: {{$writers['name']}}</h2>
    <h3 class="m-3 ml-6 font-black text-2xl">Contact: {{$writers['contact']}}</h3>

@endsection

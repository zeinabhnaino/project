@extends('layouts.app')

@section('content')
<div id="app">
    <div class="container">
        <div class="row">
            <h2>Add Group!</h2>
        </div>
        <div class="row">
            <group-component :data="{{$info}}" ></group-component> 
           
        </div>
    </div>
</div>

@endsection
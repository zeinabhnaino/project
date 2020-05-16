@extends('layouts.app')

@section('content')
<div id="app">
    <div class="container">
        <div class="row">
            <h2>Salut Admin</h2>
        </div>
        <div class="row">
            <admin-component :data="{{$info}}" ></admin-component> 
        </div>
    </div>
</div>

@endsection
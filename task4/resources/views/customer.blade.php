@extends('layouts.app')

@section('content')
<div id="app">
    <div class="container">
        <div class="row">
            <h2>Salut Customers</h2>
        </div>
        <div class="row">
            <customer-component :data="{{$info}}"></customer-component> 
        </div>
    </div>
</div>

@endsection
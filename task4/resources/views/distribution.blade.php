@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <distribution-component :users="{{$data['users']}}" :groups="{{$data['groups']}}"></distribution-component>
    </div>
</div>
@endsection
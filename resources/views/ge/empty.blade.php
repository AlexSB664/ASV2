@extends('layouts.base')
@section('title','Gift Exchange | Empty')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Gift Exhange Name: {{$ge->name}}</div>
            <friend-component></friend-component>
        </div>
    </div>
</div>
<br>
@endsection
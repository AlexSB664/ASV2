@extends('layouts.base')
@section('title','Index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Gift Exhange Name: {{$ge->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>

                    @include('ge._table',['ge'=>$ge,'unlock'=>true])
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
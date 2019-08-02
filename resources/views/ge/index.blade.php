@extends('layouts.base')
@section('title','Index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>List of gift exchanges</h1>
                    @isset($GiftExchange)
                    <ul style="list-style-type:disc;">
                    @forelse ($GiftExchange as $swap)
                        <br><li><a href="{{ route('ge.show',[$swap]) }}">{{$swap['name']}} </a></li>
                    @empty    
                    <br>You don't have any gift exchange :c
                    @endforelse
                    </ul>
                    @else
                    <br>Nothing for show
                    @endisset
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

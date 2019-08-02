@extends('layouts.base')
@section('title','Index')
@section('head')
<script src="{{ asset('js/addFriends.js') }}"></script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create</div>

                <div class="card-body">
                    <div class="flex items-center content-center mt-20">
                        <div class="md:w-1/3 mx-auto">
                            <div class="card">
                            
                                <h1 class="font-normal text-xl text-center py-3">Create a new Gift Exchange</h1>
                                <form method="POST" action="{{route('friend.store')}}">
                                    @include('friend._form', [
                                        'project' => new App\Models\Friend,
                                        'button_text' => 'Create',
                                        'cancel_url' => route('ge.index')                    
                                    ])
                                </form>                
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.base')
@section('title','Gift Exchange | View')
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

                    @include('ge._table',['ge'=>$ge,'unlock'=>false])
                    
                    @isset($matchError)
                    <h3 style="color:red;">{{$matchError}}</h1>
                    @endisset
                    @if(!$ge->friends->isEmpty())
                    <form method="POST" action="{{ route('ge.unlock',[$ge]) }}">
                        @csrf
                        <p><h3>Unlock list</h3></p>
                        <p><label>Password:</label>
                            <input type="password" name="pass" required/></p>
                        <button type="submit">Unlock</button>
                    </form>
                    @else

                    <div class="form-row">
                        <div class="col">
                            <label class="label" for="title">Friend 1:</label>
                            <input class="input" id="person1" type="text" name="person1" 
                            placeholder="Name of the person" required>
                        </div>
                        <div class="col">
                            <label class="label" for="description">Telephone:</label>
                            <input class="input" id="telephone1" type="text" name="telephone1" 
                            placeholder="Telephone of the person" required>
                        </div>
                        <div class="col">
                            <br>
                            <button type="button" class="btn btn-success">Add</button>
                        </div>
                    </div>

                    @endif
                    <button type="button" class="btn btn-primary">Let's play</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
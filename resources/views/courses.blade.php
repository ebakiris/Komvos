@extends('layouts.app')

@section('content')
<form method="GET" action="{{ route('success') }}">
    <div class="card bg-primary" id = "card1">
        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 1ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  1)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>

        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 3ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  3)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>

        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 5ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  5)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>

        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 7ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  7)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>

        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 9ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  9)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>
    </div>
    <div class="card bg-primary" id = "card2">
        
        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 2ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  2)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>

        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 4ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  4)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>

        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 6ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  6)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>

        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 8ο') }}
        </div>

        <div class="card-body" id = "tablecourse">
            @foreach ($data as $item)
                @if ($item->semester ==  8)
                    <input type="checkbox" name="{{$item->name}}">
                    <label for="{{$item->name}}"> {{$item->name}}</label><br>
                @endif 
                
            @endforeach
        </div>

        <div class="card-header text-md-left ">
            {{ __('Eξάμηνο 10ο') }}
        </div>

        <div class="card-body">
            {{__('Διπλωματική')}}
        </div>
    </div>
    <br>
    <input type="submit" value="Εγγραφή" id="subscribe">

</form>

@endsection

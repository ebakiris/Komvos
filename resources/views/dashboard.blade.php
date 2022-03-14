@extends('layouts.app')
@inject('provider', 'App\Http\Controllers\DashboardController')
@section('content')

<div class="card bg-primary" id = "card1">
    <div class="card-header text-md-left ">
        {{ __('Προσωπικά Στοιχεία') }}
    </div>

    <img src="{{ asset('images/profile_picture.png') }}" width="175" height="175" class="center">
    <div class="card-body">
        <h6>
            {{ __('Όνομα :')}} {{ $provider::getUserName() }}
        </h6>
        <h6>
            {{ __('Πανεπιστήμιο :')}} {{ $provider::getUserUni() }}
        </h6>
        <h6>
            {{ __('Τμήμα :')}} {{ $provider::getUserDep() }}
        </h6>
        <h6>
            {{ __('Email :')}} {{ $provider::getUserEmail() }}
        </h6>
        <h6>
            {{ __('Σημειώσεις που ανέβηκαν :')}} {{ $provider::getUserNotes() }}
        </h6>
    </div>
</div>
<div class="card bg-primary" id = "card2">
    <div class="card-header text-md-left ">
        {{ __('Μαθήματα που παρακολουθώ :') }}
    </div>

    <div class="card-body">
        @foreach ($data as $item)
            @if ($item->id ==  $provider :: getId())
                <li> {{$item->course}} </li>
            @endif 
            
        @endforeach
        
    </div>
</div>
@endsection

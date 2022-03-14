@extends('layouts.app')
@inject('provider', 'App\Http\Controllers\HomeController')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1> Διάλεξε το πανεπιστήμιο που επιθυμείς :</h1>
        <div class="col-md-8">
            @foreach ($data as $item)
                <li> 
                    <div class="dropdown">
                        <button class="btn btn-secondary" href="{{ route('password.request') }}" id = "uni">{{$item->name}}</button>
                            <div class="dropdown-content">
                                @foreach ($arrayname as $item2)
                                    @if($item2->id == $item->id)
                                        <a type="submit" href="{{route('courses')}}">{{ $item2->department }}</a>                                                      
                                    @endif
                                @endforeach
                            </div>
                    </div>
                </li>
            @endforeach
            
        </div>
    </div>
</div>

@endsection

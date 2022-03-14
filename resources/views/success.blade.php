@extends('layouts.app')
@inject('provider', 'App\Http\Controllers\SuccessfullSubscribeController')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>
                H εγγραφή σας στα μαθήματα έγινε επιτυχώς!
                {{ $provider::getParameters() }}
            </h1>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Chauffeurs Page</div>
    <div class="card-body">
            <div class="card-body">
            <h3 class="card-title">Name : {{ $chauffeur->name }}</h3>
            <h4 class="card-text">Address : {{ $chauffeur->address }}</h4>
            <h5 class="card-text">Mobile : {{ $chauffeur->mobile }}</h5>
    </div>
        </hr>
    </div>
</div>
@stop

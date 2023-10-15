@extends('layouts.app')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">Edit Chauffeur</div>
    <div class="card-body">

        <form action="{{ url('chauffeur/' .$chauffeurs->id) }}" method="post">
            {!! csrf_field() !!}
            
                <input type="hidden" name="id" id="id" value="{{$chauffeurs->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$chauffeurs->name}}" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" value="{{$chauffeurs->address}}" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" value="{{$chauffeurs->mobile}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop

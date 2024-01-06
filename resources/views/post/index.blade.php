@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
    <br />
    <h3 align="center">Organ Details</h3>
    <br />
    @if($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{$message}}</p>
    </div>
    @endif
    <div align="center">
    <a href="{{route('post.create')}}" class="btn btn-primary">Add</a>
    <br />
    <br />
    </div>

@foreach($posts as $row)
    <section class="container my-2  bg-dark bg-gradient w-50 text-light p-2" >
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">{{$row['first_name']}} {{$row['last_name']}}</h4>
        <h6 class="card-text">Email: {{$row['email']}}</h6>
        <h6 class="card-text">Contact No: {{$row['contact_no']}}</h6>
        <h6 class="card-text">Address 1: {{$row['address1']}}</h6>
        <h6 class="card-text">Address 2: {{$row['address2']}}</h6>
        <h6 class="card-text">Donor ID: {{$row['donor_id']}}</h6>
        <h6 class="card-text">Organ ID: {{$row['organ_id']}}</h6>
        <h6 class="card-text">City: {{$row['city']}}</h6>
        <h6 class="card-text">Area: {{$row['area']}}</h6>
        <h6 class="card-text">Zip Code: {{$row['zip']}}</h6>
        <h6 class="card-text">Organ Type: {{$row['organ_type']}}</h6>
        <h6 class="card-text">Blood Type: {{$row['blood_type']}}</h6>
        <h6 class="card-text">Date of Birth: {{$row['dob']}}</h6>
        <br />
        <a href="{{action('PostController@edit', $row['id'])}}" class="btn btn-warning">Edit</a>
    
        <form method="post" class="delete_form" action="{{action('PostController@destroy', $row['id'])}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE" />
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
    </div>
</section>
@endforeach
</div>
</div>
<script>
$(document).ready(function(){
    $('.delete_form').on('submit', function(){
    if(confirm("Are you sure you want to delete it?"))
    {
        return true;
    }
    else
    {
        return false;
    }
    });
});
</script>
@endsection

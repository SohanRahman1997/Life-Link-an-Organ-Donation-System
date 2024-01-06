@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
    <br />
    <h3 align="center">Profile Details</h3>
    <br />
    @if($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{$message}}</p>
    </div>
    @endif

    @if(count($profiles) === 0)
    <div align="center">
        <a href="{{route('profile.create')}}" class="btn btn-primary">Add</a>
        <br />
        <br />
    </div>
    @endif

@foreach($profiles as $row)
<section class="container-fluid bg-primary bg-gradient text-light p-2">
    <div class="card profile-card">
        <div class="card-body">
            <div class="profile-image">
                <img src="{{ asset('storage/' . $row['image']) }}" alt="Profile Image" class="img-rounded" width="300" height="350">
            </div>
            
            <div class="profile-details">
                <h2 class="card-title">Name: {{$row['first_name']}} {{$row['last_name']}}</h2>
                <h4 class="card-text">Email: {{$row['email']}}</h4>
                <h4 class="card-text">Contact No: {{$row['contact_no']}}</h4>
                <h4 class="card-text">Address 1: {{$row['address1']}}</h4>
                <h4 class="card-text">Address 2: {{$row['address2']}}</h4>
                <h4 class="card-text">City: {{$row['city']}}</h4>
                <h4 class="card-text">Area: {{$row['area']}}</h4>
                <h4 class="card-text">Zip Code: {{$row['zip']}}</h4>
                <h4 class="card-text">Date of Birth: {{$row['dob']}}</h4>
            </div>

            <div class="profile-actions">
                <a href="{{action('ProfileController@edit', $row['id'])}}" class="btn btn-warning">Edit</a>
        
                <form method="post" class="delete_form" action="{{action('ProfileController@destroy', $row['id'])}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endforeach

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

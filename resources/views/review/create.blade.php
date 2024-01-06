@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
    <br />
    <h3 aling="center">Add Data</h3>
    <br />
    @if(count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
    </div>
    @endif

    <form method="post" action="{{url('review')}}">
    {{csrf_field()}}
    <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" />
    </div>
    <div class="form-group">
    <input type="text" name="rating" class="form-control" placeholder="Enter Your Rating(?/10)" />
    </div>
    <div class="form-group">
    <input type="text" name="details" class="form-control" placeholder="Enter Your Opinion" />
    </div>
    <div class="form-group">
    <input type="submit" class="btn btn-primary" />
    </div>
    </form>
    </div>
</div>
@endsection
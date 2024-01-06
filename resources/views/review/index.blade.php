@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
    <br />
    <h3 align="center">Review</h3>
    <br />
    @if($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{$message}}</p>
    </div>
    @endif
    <div align="right">
    <a href="{{route('review.create')}}" class="btn btn-primary">Add</a>
    <br />
    <br />
    </div>
    <table class="table table-bordered table-striped">
    <tr>
    <th>Name</th>
    <th>Rating</th>
    <th>Oponion</th>
    </tr>
    @foreach($reviews as $row)
    <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['rating']}}</td>
    <td>{{$row['details']}}</td>
    </tr>
    @endforeach
    </table>
    </div>
</div>


@endsection

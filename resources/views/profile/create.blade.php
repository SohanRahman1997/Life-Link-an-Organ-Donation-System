@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12">
  <header class="text-center">
    <h1 class="display-6">Add Profile Details</h1>
</header>
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

<section class="container my-2  bg-dark bg-gradient w-50 text-light p-2" >
    
    <form class="row g-3" method="post" action="{{url('profile')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Upload Image</label>
        <input type="file" name="image" class="form-control" id="validationCustom01" value="" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" name="first_name" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" name="last_name" class="form-control" id="validationCustom02" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="text" name="email" class="form-control" id="inputEmail4" required>
        </div>
        <div class="col-md-6">
          <label for="inputContactno4" class="form-label">Contact no</label>
          <input type="text" name="contact_no" class="form-control" id="inputContactmo4" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address 1</label>
          <input type="text" name="address1" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" name="city" class="form-control" id="inputCity" value="Dhaka">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Area</label>
          <select id="inputState" name="area" class="form-select" >
            <option selected>Choose Area</option>
            <option>Azimpur</option>
            <option>Dhanmondi</option>
            <option>Mirpur</option>
            <option>Banani</option>
            <option>Gulshan</option>
            <option>Motijheel</option>
            <option>Kalabagan</option>
            <option>Banani</option>
            <option>Uttara</option>
            <option>Khilkhet</option>
            <option>Mohammadpur</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" name="zip" class="form-control" id="inputZip" required>
        </div>
        <div class="col-md-6">
            <label for="inputDOB" class="form-label">Date Of Birth</label>
            <input type="date" name="dob" class="form-control" id="inputDOB" required>
        </div>
        <div class="col-6">
          <input type="submit" class="btn btn-primary" />
        </div>
      </form>
</section>

    </div>
</div>


@endsection
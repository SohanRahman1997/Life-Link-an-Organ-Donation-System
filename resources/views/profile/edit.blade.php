@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
    <br />
    <h3 align="center">Edit Profile</h3>
    <br />

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <section class="container my-2 bg-dark bg-gradient w-50 text-light p-2">
      <form class="row g-3" method="post" action="{{ route('profile.update', $profile->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Upload Image</label>
              <input type="file" name="image" class="form-control" id="validationCustom01">
              <div class="valid-feedback">
                  Looks good!
              </div>
          </div>
          <div class="col-md-6">
              <label for="validationCustom01" class="form-label">First Name</label>
              <input type="text" name="first_name" class="form-control" id="validationCustom01" value="{{ $profile->first_name }}" required>
              <div class="valid-feedback">
                  Looks good!
              </div>
          </div>
          <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Last Name</label>
              <input type="text" name="last_name" class="form-control" id="validationCustom02" value="{{ $profile->last_name }}" required>
              <div class="valid-feedback">
                  Looks good!
              </div>
          </div>
          <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="text" name="email" class="form-control" id="inputEmail4" value="{{ $profile->email }}" required>
          </div>
          <div class="col-md-6">
              <label for="inputContactno4" class="form-label">Contact No</label>
              <input type="text" name="contact_no" class="form-control" id="inputContactno4" value="{{ $profile->contact_no }}" required>
          </div>
          <div class="col-12">
              <label for="inputAddress" class="form-label">Address 1</label>
              <input type="text" name="address1" class="form-control" id="inputAddress" value="{{ $profile->address1 }}" required>
          </div>
          <div class="col-12">
              <label for="inputAddress2" class="form-label">Address 2</label>
              <input type="text" name="address2" class="form-control" id="inputAddress2" value="{{ $profile->address2 }}" required>
          </div>
          <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" name="city" class="form-control" id="inputCity" value="{{ $profile->city }}">
          </div>
          <div class="col-md-4">
              <label for="inputState" class="form-label">Area</label>
              <select id="inputState" name="area" class="form-select">
                  <option selected>Choose Area</option>
                  <option {{ $profile->area == 'Azimpur' ? 'selected' : '' }}>Azimpur</option>
                  <option {{ $profile->area == 'Dhanmondi' ? 'selected' : '' }}>Dhanmondi</option>
                  <option {{ $profile->area == 'Mirpur' ? 'selected' : '' }}>Mirpur</option>
                  <option {{ $profile->area == 'Banani' ? 'selected' : '' }}>Banani</option>
                  <option {{ $profile->area == 'Gulshan' ? 'selected' : '' }}>Gulshan</option>
                  <option {{ $profile->area == 'Motijheel' ? 'selected' : '' }}>Motijheel</option>
                  <option {{ $profile->area == 'Kalabagan' ? 'selected' : '' }}>Kalabagan</option>
                  <option {{ $profile->area == 'Uttara' ? 'selected' : '' }}>Uttara</option>
                  <option {{ $profile->area == 'Khilkhet' ? 'selected' : '' }}>Khilkhet</option>
                  <option {{ $profile->area == 'Mohammadpur' ? 'selected' : '' }}>Mohammadpur</option>
              </select>
          </div>
          <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" name="zip" class="form-control" id="inputZip" value="{{ $profile->zip }}" required>
          </div>
          <div class="col-md-6">
              <label for="inputDOB" class="form-label">Date of Birth</label>
              <input type="date" name="dob" class="form-control" id="inputDOB" value="{{ $profile->dob }}" required>
          </div>
          <div class="col-6">
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
      </form>
  </section>
</div>
</div>


@endsection  
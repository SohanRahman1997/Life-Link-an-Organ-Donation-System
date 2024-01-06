@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
      <header class="text-center">
      <h1 class="display-6">Edit Organ Details</h1>
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
    
    <section class="container my-2  bg-dark bg-gradient w-50 text-light p-2" >
      <form class="row g-3" method="post" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">First Name</label>
          <input type="text" name="first_name" class="form-control" id="validationCustom01" value="{{ $post->first_name }}" required>
          <div class="valid-feedback">
              Looks good!
          </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control" id="validationCustom02" value="{{ $post->last_name }}" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="inputEmail4" value="{{ $post->email }}" required>
    </div>
    <div class="col-md-6">
        <label for="inputContactno4" class="form-label">Contact No</label>
        <input type="text" name="contact_no" class="form-control" id="inputContactno4" value="{{ $post->contact_no }}" required>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Address 1</label>
        <input type="text" name="address1" class="form-control" id="inputAddress" value="{{ $post->address1 }}" required>
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" name="address2" class="form-control" id="inputAddress2" value="{{ $post->address2 }}" required>
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Donor ID</label>
      <input type="text" name="donor_id" class="form-control" id="inputDonorID" value="{{ $post->donor_id }}" required>
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Organ ID</label>
      <input type="text" name="organ_id" class="form-control" id="inputOrganID" value="{{ $post->organ_id }}" required>
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" name="city" class="form-control" id="inputCity" value="{{ $post->city }}" required>
    </div>
    <div class="col-md-6">
        <label for="inputState" class="form-label">Area</label>
        <select id="inputState" name="area" class="form-select">
            <option selected>Choose Area</option>
            <option {{ $post->area == 'Azimpur' ? 'selected' : '' }}>Azimpur</option>
            <option {{ $post->area == 'Dhanmondi' ? 'selected' : '' }}>Dhanmondi</option>
            <option {{ $post->area == 'Mirpur' ? 'selected' : '' }}>Mirpur</option>
            <option {{ $post->area == 'Banani' ? 'selected' : '' }}>Banani</option>
            <option {{ $post->area == 'Gulshan' ? 'selected' : '' }}>Gulshan</option>
            <option {{ $post->area == 'Motijheel' ? 'selected' : '' }}>Motijheel</option>
            <option {{ $post->area == 'Kalabagan' ? 'selected' : '' }}>Kalabagan</option>
            <option {{ $post->area == 'Uttara' ? 'selected' : '' }}>Uttara</option>
            <option {{ $post->area == 'Khilkhet' ? 'selected' : '' }}>Khilkhet</option>
            <option {{ $post->area == 'Mohammadpur' ? 'selected' : '' }}>Mohammadpur</option>
        </select>
      </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" name="zip" class="form-control" id="inputZip" value="{{ $post->zip }}" required>
      </div>
    <div class="col-md-6">
        <label for="inputOrganType" class="form-label">Organ Type</label>
        <select id="inputOrganType" name="organ_type" class="form-select">
            <option selected>Choose Organ Type</option>
            <option {{ $post->organ_type == 'Kidney' ? 'selected' : '' }}>Kidney</option>
            <option {{ $post->organ_type == 'Liver' ? 'selected' : '' }}>Liver</option>
            <option {{ $post->organ_type == 'Heart' ? 'selected' : '' }}>Heart</option>
            <option {{ $post->organ_type == 'Lungs' ? 'selected' : '' }}>Lungs</option>
            <option {{ $post->organ_type == 'Stomach' ? 'selected' : '' }}>Stomach</option>
            <option {{ $post->organ_type == 'Spleen' ? 'selected' : '' }}>Spleen</option>
            <option {{ $post->organ_type == 'Thyroid Gland' ? 'selected' : '' }}>Thyroid Gland</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputBloodType" class="form-label">Blood Type</label>
        <select id="inputBloodType" name="blood_type" class="form-select">
            <option selected>Choose Blood Type</option>
            <option {{ $post->blood_type == 'A+' ? 'selected' : '' }}>A+</option>
            <option {{ $post->blood_type == 'A-' ? 'selected' : '' }}>A-</option>
            <option {{ $post->blood_type == 'B+' ? 'selected' : '' }}>B+</option>
            <option {{ $post->blood_type == 'B-' ? 'selected' : '' }}>B-</option>
            <option {{ $post->blood_type == 'AB+' ? 'selected' : '' }}>AB+</option>
            <option {{ $post->blood_type == 'AB-' ? 'selected' : '' }}>AB-</option>
            <option {{ $post->blood_type == 'O+' ? 'selected' : '' }}>O+</option>
            <option {{ $post->blood_type == 'O-' ? 'selected' : '' }}>O-</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="inputDOB" class="form-label">Date of Birth</label>
        <input type="date" name="dob" class="form-control" id="inputDOB" value="{{ $post->dob }}" required>
    </div>
    <div class="col-6">
      <button type="submit" class="btn btn-primary">Update</button>
  </div>
    </form>
</section>
    </div>
</div>
</div>



@endsection

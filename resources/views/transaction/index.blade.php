@extends('layouts.master')

@section('content')

<!-- Start Sidebar + Content -->
@include('partials.styles3')


<div class="container" id="trans">

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

  <form method="post" action="{{url('transaction')}}" enctype="multipart/form-data">

        {{csrf_field()}}
        <div class="row">

            <div class="col">

                <h3 class="title">Billing Address</h3>

                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" name="name" placeholder="your name" required>
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" name="address" placeholder="room - street - locality" required>
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" name="city" placeholder="Dhaka" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Organ Id :</span>
                        <input type="text" name="organ_id" placeholder="O1" required>
                    </div>
                    <div class="inputBox">
                        <span>Donor Id :</span>
                        <input type="text" name="donor_id" placeholder="D1" required>
                    </div>
                    <div class="inputBox">
                        <span>Recipient Id:</span>
                        <input type="text" name="recipient_id" placeholder="R1" required>
                    </div>
                </div>
            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="{{ asset('images/fig4.png')}}" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="card_name" placeholder="card holder name" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="text" name="card_no" placeholder="xxxx-xxxx-xxxx-xxxx" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="month" placeholder="january" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="text" name="year" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="xxxx" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>

@endsection
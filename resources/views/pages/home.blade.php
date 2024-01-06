<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @include('partials.styles')
    <style>
img{
    width: 100%;
    height: 100vh;
    position: relative;
    }
    h1{
    text-align: center;
    color: #00ffc4;
    position: absolute;
    top: 10%;
    left: 50%;
    transform: translate(-50%);
    font-size: 40px;
    }
    h2{
    text-align: justify;
    color: #00ffc4;
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%);
    font-size: 40px;
    }
    h3{
    text-align: justify;
    color: #00ffc4;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%);
    font-size: 40px;
    }

</style>

</head>
<body>
    <div class="wrapper color">

    @include('partials.nav')
    <div class="img">

        <img class="image" src="{{ asset('images/fig3.jpg')}}" style="width: 100%;vertical-align: middle;">
        <h1 >Welcome To</h1>
        <h2 >Life-link</h2>
        <h3 >An Organ Donation System</h3>
    </div>

    @include('partials.footer')

    </div>

    @include('partials.scripts')
</body>
</html>

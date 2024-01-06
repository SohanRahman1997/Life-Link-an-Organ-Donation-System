<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Life-Link</title>
    @include('partials.styles')
</head>

<body>

    <div class="wrapper">


        @include('partials.nav')

        @yield('content')

        @include('partials.footer')
    </div>
    </div>

    @include('partials.scripts')
</body>

</html>
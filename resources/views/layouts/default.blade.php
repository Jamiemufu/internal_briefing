<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- csrf token --}}
    <meta name="csrf-token" content="{{csrf_token()}}">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ITG - Internal Briefs</title>
</head>

<body>

    <div class="flex-container">
        {{-- header --}}
        @include('shared.header')

        {{-- main section --}}
        <main id="main">
            @yield('content')
        </main>

        {{-- footer --}}
        @include('shared.footer')
    </div>
    

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

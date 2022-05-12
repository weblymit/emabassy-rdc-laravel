<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <div class="flex min-h-screen flex-col">
        @include("partials._navbar")
        <div class="flex-grow ">
            @include('partials._heroHome')
            <div class="py-28">
                @yield("content")
            </div>
        </div>

        @include("partials._footer")
    </div>

</body>

</html>

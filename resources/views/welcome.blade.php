<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VideoGaemBlog</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f3f4f6;
            color: #1a202c;
            line-height: 1.5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .logo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo svg {
            width: 60%;
            height: 60%;
            fill: #ff2d20;
        }

        .title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .links {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .link {
            padding: 10px 20px;
            background-color: #fff;
            border-radius: 8px;
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .link:hover {
            background-color: #e5e7eb;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="logo">
        <x-application-logo class="fill-current text-gray-500" />
    </div>
    <div class="title">Welcome Ski Fanatic!</div>
    <div class="links">
        @if (Route::has('login'))
            @auth
            @else
                <a href="{{ route('login') }}" class="link">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="link">Register</a>
                @endif
            @endauth
        @endif
    </div>
</div>
</body>

</html>

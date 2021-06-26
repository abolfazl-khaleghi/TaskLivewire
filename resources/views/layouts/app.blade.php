<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سایت با لایووایر</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @livewireStyles
    <style>
        .main_div {
            width: 70%;
            background-image: url("/img/bgdiv.jpg");
            list-style-type: none;
            margin: 50px auto;
            height: 700px;
            color: #eee;
            border: 1px solid #ccc;
            background-size: cover;
        }
        .body{
            background-image: url("/img/bg.jpg");
        }
        .main_div ul li {
            list-style-type: none;
        }.list-task{
            width: 90%;
            background: #dc3545b5;
            margin: 20px auto;
            padding: 20px;
            color: #fff;
            border-radius: 50px;
        }

        }

    </style>
</head>

<body class="text-center body" dir="rtl">

    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    @livewireScripts
</body>

</html>

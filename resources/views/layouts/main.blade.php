<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Financial Record</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .content {
            margin-left: 180px;
            padding-top: 60px;
            padding-bottom: 50px;

        }
        .sidebar {
            width: 180px;
            /* background-color: #343a40; */
            height: 100vh;
            position: fixed;
            top: 40px;
            left: 0;
            padding-top: 20px;
        }

        .nav-link{
            color: white;
        }

        .footer{
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .hr{
            border: none;
            color: white;
        }

        .logout:hover{
            color: red
        }


    </style>

</head>

<body>


    @include('layouts.header')


    @include('layouts.sidebar')

    <!-- CONTENT -->
    <main>
        <div class="content container">
                @yield('content')
            </div>
    </main>

    @include('layouts.footer')

    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>

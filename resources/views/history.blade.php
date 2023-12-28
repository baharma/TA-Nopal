<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
            <a class="navbar-brand bold text-white" href="/">Dasboard</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand bold text-white " style="font-size: 15px" href="/history">History</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-capitalize text-center">History Log Activity</h1>
        <table class="table table-dark table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">Temperature</th>
                    <th scope="col">Humidity</th>
                    <th scope="col">Light</th>
                    <th scope="col">Vent Status</th>
                    <th scope="col">Mist Status</th>
                </tr>
            </thead>
            <tbody style="background-color:#ffff">

                @foreach ($data as $item)
                <tr>
                    <td>{{$item->temperature}}</td>
                    <td>{{$item->humidity}}</td>
                    <td>{{$item->light}}</td>
                    <td>{{$item->vent_status}}</td>
                    <td>{{$item->mist_status}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <style>

    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
 <script src="{{asset('js/interaktif.js')}}"></script>
 <script src="{{asset('js/app.js')}}"></script>
</body>

</html>

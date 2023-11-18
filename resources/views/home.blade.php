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
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin: auto" width="100" height="100"
                        fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z" />
                        <path fill-rule="evenodd"
                            d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z" />
                    </svg>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" id="humidity">90%</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3" style="">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin: auto" width="100" height="100"
                        fill="currentColor" class="bi bi-thermometer-half" viewBox="0 0 16 16">
                        <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z" />
                        <path
                            d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z" />
                    </svg>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" id="temperature">70c</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3" style="">
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin: auto" width="100" height="100"
                        fill="currentColor" class="bi bi-cloud-sun-fill" viewBox="0 0 16 16">
                        <path d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z" />
                        <path
                            d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z" />
                    </svg>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" id="light">100 Lx</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between container mt-5">
        <div class="card" style="width: 500px;">
            <div class="card-header">
                Kendali
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Misk Maker</li>
                <li class="list-group-item">Lampu</li>
                <li class="list-group-item">Pintu wallet</li>
            </ul>
        </div>
        <div class="card" style="width: 500px;">
            <div class="card-header text-center">
                Setatus
            </div>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item" id="mist_status">ON</li>
                <li class="list-group-item" id="lightoff">Off</li>
                <li class="list-group-item" id="vent_status">Tutup</li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <div class="card mb-3">
            <div class="d-flex">
                <div class="">
                    <div class="card-body">
                        <h5 class="card-title">Misk Divace</h5>
                        <div class="form-check form-switch">
                            <input class="form-check-input" width="100" height="50" type="checkbox" id="divace_misk" >
                            <label class="form-check-label" for="flexSwitchCheckChecked">Off</label>
                        </div>
                    </div>
                </div>
                {{-- <div class="">
                    <div class="card-body">
                        <h5 class="card-title">Vent Divace</h5>
                        <div class="form-check form-switch">
                            <input class="form-check-input" width="100" height="50" type="checkbox" id="divace_vent" >
                            <label class="form-check-label" for="flexSwitchCheckChecked">Off</label>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
 <script src="{{asset('js/interaktif.js')}}"></script>
 <script src="{{asset('js/app.js')}}"></script>
</body>

</html>

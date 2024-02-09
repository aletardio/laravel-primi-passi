<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
    <title>Laravel Homepage</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    h3,
    li {
        color: #EF4544;
    }

    main {
        height: 1000px;
        background-color: #181923;
    }
</style>

<body>
    <header class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h3> Laravel Project </h3>
                </div>
                <div class="col-6">
                    <ul class="list-unstyled d-flex align-items-center my-2 justify-content-center">
                        <li class="nav-item">
                            <a href="{{ route('homepage') }}" class="nav-link px-3 fw-bold">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about_us') }}" class="nav-link px-3 fw-bold">About us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('work_with_us') }}" class="nav-link px-3 fw-bold">Work with us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-white py-5"> {{ $info_1 }}</h1>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

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

    h3 {
        color: #EF4544;
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
                    <ul>
                        <li>

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
                    <h2 class="text-center"> {{ $welcome }}</h2>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
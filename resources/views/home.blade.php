<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Laravel Primi Passi</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="content pt-3">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav d-flex justify-content-evenly" style="display: flex; width: 100%;">
                                <li class="nav-item active">
                                    <h2><a class="nav-link" href="{{ route('page1') }}">Page
                                            1</a></h2>
                                </li>
                                <li class="nav-item">
                                    <h2><a class="nav-link" href="{{ route('page2') }}">Page 2</a></h2>
                                </li>
                                <li class="nav-item">
                                    <h2><a class="nav-link" href="{{ route('page3') }}">Page 3</a></h2>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
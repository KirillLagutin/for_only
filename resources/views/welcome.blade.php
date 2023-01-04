<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Cars</title>
    </head>

    <body>

        <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link">Director</a></li>
            <li class="nav-item"><a href="/hr" class="nav-link">HR</a></li>
            <li class="nav-item"><a href="/developer" class="nav-link">Developer</a></li>
        </ul>
        </header>

        <div class="px-4 py-5 my-5 text-center">

            <h1>List cars</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Model</th>
                        <th>Driver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        @foreach($category->cars as $car)
                        <tr>
                            <th>{{ $car->id }}</th>  
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->driver }}</td>
                        </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>
</html>

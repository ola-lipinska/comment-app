<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title')</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage') }}">Homepage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Comments
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('comment.list') }}">Show all</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.form') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('content.cities_in_poland') }}">Cities in Poland</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('content.cities_in_europe') }}">Cities in Europe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('content.comparison') }}">Comparison</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('content.currency') }}">Currency</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('content.wonders_of_the_world') }}">Wonders of the world</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicios Por Tanteo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('assets/ColorVar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/Container.css') }}">
</head>
<header>
    <nav class="header__main">
        <img src="{{ asset('images/WhiteCircle.png') }}" alt="">
        <p>ChemSolver</p>
    </nav>
</header>

<body>
    <div class="container-fluid p-0 d-flex h-100">

        <div class="sidebar">
            <a href="{{ route('home') }}" class="sidebar__homebtn">
                Inicio
            </a>
            <ul class="mynav nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-1">
                    <a href="{{ route('periodictable') }}" class="sidebarbtn">
                        Tabla Periódica
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <div class="dropdown">
                        <button class="btn side-bar dropdown" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ejercicios<i class="fa-solid fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Por Balanceo</a></li>
                            <li><a class="dropdown-item" href="{{ route('ejercicios') }}">Por Tanteo</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-1">
                    <a href="#" class="sidebarbtn">
                        Example
                    </a>
                </li>
                <li class="nav-item mb-1">
                    <a href="#" class="sidebarbtn">
                        Example
                    </a>
                </li>
            </ul>
            <hr>
        </div>

        <div class="maincontainer">
            <div class="maincontent ps-3 pe-3">

                <div class="row">
                    <div class="col">
                        @if ($sodio <= 0)
                            <img class=" img-fluid w-75" src="{{ asset('images/Sodio.png') }}" alt="">
                        @elseif ($sodio > 4)
                            @for ($i = 0; $i < 4; $i++)
                                <img class=" img-fluid w-75" src="{{ asset('images/Sodio.png') }}" alt="">
                            @endfor
                        @else
                            @for ($i = 0; $i < $sodio; $i++)
                                <img class=" img-fluid w-75" src="{{ asset('images/Sodio.png') }}" alt="">
                            @endfor
                        @endif

                    </div>

                    <div class="col">

                        @if ($yZinc <= 0)
                            <img class="img-fluid" src="{{ asset('images/Yoduro de zinc.png') }}" alt="">
                        @elseif ($yZinc > 4)
                            @for ($i = 0; $i < 4; $i++)
                                <img class="img-fluid" src="{{ asset('images/Yoduro de zinc.png') }}" alt="">
                            @endfor
                        @else
                            @for ($i = 0; $i < $yZinc; $i++)
                                <img class="img-fluid" src="{{ asset('images/Yoduro de zinc.png') }}" alt="">
                            @endfor
                        @endif


                    </div>

                    <div class="col d-flex justify-content-center align-items-center">
                        <h2 class="">-----></h2>
                    </div>

                    <div class="col">

                        @if ($iSodio <= 0)
                            <img class=" img-fluid" src="{{ asset('images/Ioduro de sodio.png') }}" alt="">
                        @elseif ($iSodio > 4)
                            @for ($i = 0; $i < 4; $i++)
                                <img class=" img-fluid" src="{{ asset('images/Ioduro de sodio.png') }}" alt="">
                            @endfor
                        @else
                            @for ($i = 0; $i < $iSodio; $i++)
                                <img class=" img-fluid" src="{{ asset('images/Ioduro de sodio.png') }}" alt="">
                            @endfor
                        @endif

                    </div>

                    <div class="col">
                        @if ($zinc <= 0)
                            <img class=" img-fluid w-75" src="{{ asset('images/Zinc.png') }}" alt="">
                        @elseif ($zinc > 4)
                            @for ($i = 0; $i < 4; $i++)
                                <img class=" img-fluid w-75" src="{{ asset('images/Zinc.png') }}"
                                    alt="">
                            @endfor
                        @else
                            @for ($i = 0; $i < $zinc; $i++)
                                <img class=" img-fluid w-75" src="{{ asset('images/Zinc.png') }}"
                                    alt="">
                            @endfor
                        @endif

                    </div>

                </div>


                <form action="{{ route('exercise-require-1') }}" method="POST" class="row mt-5 pb-4">
                    @csrf

                    <div class="col">
                        <input class=" form-control fs-4 text-center" type="number" name="Sodio" id="">
                    </div>

                    <div class="col text-center p-0">
                        <h2>Na +</h2>
                    </div>

                    <div class="col">
                        <input class=" form-control fs-4 text-center" type="number" name="Yodurodezinc"
                            id="">
                    </div>

                    <div class="col text-center">
                        <h2>ZnI<small class=" fs-5">2</small></h2>
                    </div>

                    <div class="col text-center">
                        <h2>--></h2>
                    </div>

                    <div class="col">
                        <input class=" form-control fs-4 text-center" type="number" name="Iodurodesodio"
                            id="">
                    </div>

                    <div class="col text-center p-0">
                        <h2>NaI +</h2>
                    </div>

                    <div class="col">
                        <input class=" form-control fs-4 text-center" type="number" name="Zinc" id="">

                    </div>

                    <div class="col text-center">
                        <h2>Zn</h2>
                    </div>

                    <div class="col-12 pt-4">
                        <button class=" btn btn-primary" type="submit">agregar</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>

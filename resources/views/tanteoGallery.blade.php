<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ejercicios Por Tanteo </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" 
        />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                      <button class="btn side-bar dropdown" id="sbEjercicios" type="button" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                        Ejercicios<i class="fa-solid fa-caret-down"></i>
                      </button>
                      <ul class="dropdown-menu">
                        {{--<li><a class="dropdown-item" href="#">Por Balanceo</a></li>--}}
                        <li class="nav-item dropend">
                            <a href="#" id="sbPorTanteo" class="dropdown-item dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Por tanteo<i class="fa-solid fa-caret-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('ejercicios')}}">Explicación</a></li>
                                <li><a class="dropdown-item" href="{{route('galeriatanteo')}}">Galería de Ejercicios</a></li>
                            </ul>
                        </li>
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
            <div class="maincontent">

                <div class="maincontent__title">
                    <h2>Lista de Ejercicios</h2>
                </div>

                <div class="galeriaCont">
                    @php
                        $cont = 1;
                    @endphp
                    @for ($i = 1; $i < 5; $i++)
                        <div class="galeriaRow">
                        @for ($j = 1; $j < 4; $j++)
                            <div class="galeriaForm">
                                <form action="{{route('index')}}" method="get">
                                    @csrf
                                    <div class="topimg"></div>
                                    <div class="galeriaElementTitle">
                                        <p>Ejercicio {{$cont}}</p>
                                    </div>
                                    <div class="galeriaElementCont">
                                        <input class="d-none" type="text" name="vista" id="" value="Exercise-{{$cont}}">
                                        <button type="submit" class="btn btn-outline-light">Resolver</button>
                                    </div>
                                </form>
                            </div>
                            @php
                                $cont++;
                            @endphp
                        @endfor
                        </div>
                    @endfor
                </div>
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

    <script>
        var sbEjercicios = document.getElementById('sbEjercicios');
        var sbPorTanteo = document.getElementById('sbPorTanteo');
    
        document.addEventListener('click', function(event) {
            if ((!sbEjercicios.contains(event.target) && !event.target.classList.contains('dropdown-item'))) {
                sbEjercicios.classList.remove('side-bar-active');
                sbPorTanteo.classList.remove('side-bar-active');
            }
            if (event.target.classList.contains('side-bar')) {
                if (sbPorTanteo.classList.contains('side-bar-active')) {
                    sbPorTanteo.classList.remove('side-bar-active');
                }
            }
        });

        sbEjercicios.addEventListener('click', function() {
            this.classList.toggle('side-bar-active');
        });
        
        sbPorTanteo.addEventListener('click', function() {
            this.classList.toggle('side-bar-active');
        })
    </script>
</body>

</html>

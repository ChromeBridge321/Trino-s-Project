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
            </ul>
            <hr>
        </div>

        <div class="maincontainer">
            <div class="maincontent">
                <div class=" row">

                    <div class="col-12 pt-2 text-center">
                        <h2>Balanceo por tanteo</h2>
                    </div>

                    <div class="col-12 pt-3">
                        <p>
                            El balanceo de ecuaciones químicas por tanteo se refiere a ir adivinando paso a paso los
                            coeficientes delante de las fórmulas en una ecuación química, hasta que existan la misma
                            cantidad de elementos del lado izquierdo y del lado derecho de la flecha.

                            Por ejemplo, en la ecuación del amoníaco NH3 más oxígeno O2 se produce nitrógeno N2 y agua
                            H2O:
                        </p>
                    </div>


                    <div class=" col-12 pt-3">
                        <img src="{{ asset('images/balanceo-1.jpg') }}" alt="" class=" img-fluid">
                    </div>


                    <div class="col-12 pt-3">
                        <p>
                            Como podemos ver, la cantidad de átomos en los reactantes no es igual a los átomos del lado
                            de los productos.

                            Como hay 2 nitrógenos del lado de los productos, vamos a colocar el coeficiente 2 delante
                            del amoniaco en los reactantes; como hay 2 oxígenos del lado de los reactantes colocaremos
                            un 2 delante del agua:
                        </p>
                    </div>


                    <div class=" col-12 pt-3">
                        <img src="{{ asset('images/balanceo-2.jpg') }}" alt="" class=" img-fluid">
                    </div>


                    <div class="col-12 pt-3">
                        <p>
                            Aunque ahora el nitrógeno y el oxígeno están balanceados, seguimos teniendo una diferencia
                            entre los hidrógenos de ambos lados.

                            Probemos ahora colocando 4 amoniacos y 3 O2 del lado izquierdo, y 2 N2 y 6 agua:
                        </p>
                    </div>


                    <div class=" col-12 pt-3">
                        <img src="{{ asset('images/balanceo-3.jpg') }}" alt="" class=" img-fluid">
                    </div>


                    <div class="col-12 pt-3">
                        <p>
                            Ahora los elementos del lado izquierdo de la flecha son los mismos que aparecen en el lado
                            derecho. tenemos una ecuación balanceada.
                        </p>
                    </div>


                    <div class="col-12 d-flex justify-content-end pb-5">
                      <a class=" btn btn-outline-primary ps-5 pe-5" href="{{route('galeriatanteo')}}">
                        Ejercicios
                      </a>
                    </div>


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

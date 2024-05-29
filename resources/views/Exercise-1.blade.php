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

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

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
                        <button class="btn side-bar dropdown" id="sbEjercicios" type="button"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            Ejercicios<i class="fa-solid fa-caret-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            {{-- <li><a class="dropdown-item" href="#">Por Balanceo</a></li> --}}
                            <li class="nav-item dropend">
                                <a href="#" id="sbPorTanteo" class="dropdown-item dropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Por tanteo<i class="fa-solid fa-caret-right"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('ejercicios') }}">Explicación</a></li>
                                    <li><a class="dropdown-item" href="{{ route('galeriatanteo') }}">Galería de
                                            Ejercicios</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
            <hr>
        </div>

        <div class="maincontainer">
            <div class=" container  border border-2 border-top-0">
                <div class=" row col-12 text-center pt-3 pb-3">
                    <h2>Balancea la siguiente ecuacion</h2>
                </div>

                <div class=" row ps-5 pe-5 ">
                    @if (($Rmolecula_1 == 2) & ($Rmolecula_2 == 1) & ($Rmolecula_3 == 2) & ($Rmolecula_4 == 1))
                        {{-- aqui se comparan las variables devueltas
            por la funcion answer para mostrar una alerta y dar a conocer que la respuesta enviada es correcta --}}
                        <div class="alert alert-success col-12">
                            <h5>Respuesta correcta, sigue asi.</h5>
                        </div>
                    @elseif(($Rmolecula_1 == 1) & ($Rmolecula_2 == 1) & ($Rmolecula_3 == 1) & ($Rmolecula_4 == 1))
                        {{-- aqui se coloca para evitar una falsa alerta
            ya que cada vez que se carga la vista por primera vez estas variables su valor es igual a 1 --}}
                        <div class=" col-12">

                        </div>
                    @else
                        {{-- aqui se muestra la alerta de respuesta incorrecta --}}
                        <div class="alert alert-danger col-12">
                            <h5>Upss! Parece que algo esta mal, intentalo de nuevo.</h5>
                        </div>
                    @endif
                </div>

                <div class="row">
                    {{-- esta seccion es utilizada al momento de llamar la funcion "generate" el valor de la variable molecula-1 es igual al valor
            colocado por el usuario al momento de presionar el boton "agregar moleculas" en esta primera parte se compara si el valor ingresado es
            menor a 0 0 igual el valor de la varible se retorna con valor 1 para evitar que se ingresen valores negativos o nulos y solo se imprime
            una vez la imagen --}}
                    <div class="col d-flex justify-content-center align-items-center flex-column">
                        @if ($molecula_1 <= 0)
                            @php
                                $molecula_1 = 1;
                            @endphp
                            <img class=" img-fluid w-75" src="{{ asset('images/Sodio.png') }}" alt="">
                        @elseif ($molecula_1 > 4)
                            {{-- al igual que la parte anterior aqui si el valor de la variable sobre pasa a la establecida se retorna el valor
                maximo establecido por el programador en este caso 4 --}}
                            @php
                                $molecula_1 = 4;
                            @endphp
                            @for ($i = 0; $i < 4; $i++)
                                {{-- si el valor es sobrepasado se imprimira el maximo permitido en este caso 4 --}}
                                <img class=" img-fluid w-75" src="{{ asset('images/Sodio.png') }}" alt="">
                            @endfor
                        @else
                            @for ($i = 0; $i < $molecula_1; $i++)
                                {{-- aqui se genera el numero de imagenes si todo esta correcto y dentro del rango establecido --}}
                                <img class=" img-fluid w-75" src="{{ asset('images/Sodio.png') }}" alt="">
                            @endfor
                        @endif

                    </div>

                    <div class="col d-flex justify-content-center align-items-center flex-column">

                        @if ($molecula_2 <= 0)
                            @php
                                $molecula_2 = 1;
                            @endphp
                            <img class="img-fluid" src="{{ asset('images/Yoduro de zinc.png') }}" alt="">
                        @elseif ($molecula_2 > 4)
                            @php
                                $molecula_2 = 4;
                            @endphp
                            @for ($i = 0; $i < 4; $i++)
                                <img class="img-fluid" src="{{ asset('images/Yoduro de zinc.png') }}" alt="">
                            @endfor
                        @else
                            @for ($i = 0; $i < $molecula_2; $i++)
                                <img class="img-fluid" src="{{ asset('images/Yoduro de zinc.png') }}" alt="">
                            @endfor
                        @endif


                    </div>

                    <div class="col d-flex justify-content-center align-items-center">
                        <h2 class="">-----></h2>
                    </div>

                    <div class="col d-flex justify-content-center align-items-center flex-column">

                        @if ($molecula_3 <= 0)
                            @php
                                $molecula_3 = 1;
                            @endphp
                            <img class=" img-fluid" src="{{ asset('images/Ioduro de sodio.png') }}" alt="">
                        @elseif ($molecula_3 > 4)
                            @php
                                $molecula_3 = 4;
                            @endphp
                            @for ($i = 0; $i < 4; $i++)
                                <img class=" img-fluid" src="{{ asset('images/Ioduro de sodio.png') }}"
                                    alt="">
                            @endfor
                        @else
                            @for ($i = 0; $i < $molecula_3; $i++)
                                <img class=" img-fluid" src="{{ asset('images/Ioduro de sodio.png') }}"
                                    alt="">
                            @endfor
                        @endif

                    </div>

                    <div class="col d-flex justify-content-center align-items-center flex-column">
                        @if ($molecula_4 <= 0)
                            @php
                                $molecula_4 = 1;
                            @endphp
                            <img class=" img-fluid w-75" src="{{ asset('images/Zinc.png') }}" alt="">
                        @elseif ($molecula_4 > 4)
                            @php
                                $molecula_4 = 4;
                            @endphp
                            @for ($i = 0; $i < 4; $i++)
                                <img class=" img-fluid w-75" src="{{ asset('images/Zinc.png') }}" alt="">
                            @endfor
                        @else
                            @for ($i = 0; $i < $molecula_4; $i++)
                                <img class=" img-fluid w-75" src="{{ asset('images/Zinc.png') }}" alt="">
                            @endfor
                        @endif

                    </div>

                </div>


                <form action="{{ route('exercise-require-1') }}" method="POST" class="row mt-5 pb-4">
                    @csrf
                    {{-- esta seccion es para determinar el numero de imagenes de cada molecula se van a generar --}}
                    <input class=" d-none" type="text" name="vista" id=""
                        value="Exercise-1">{{-- este valor es utilizado para
            mandar la cadena "Exercise-x esto es para poder redirigir a la vista correcta y solo hacer uso de pocoas funciones por parte
            de los controladores" --}}
                    <div class="col">
                        <input class=" form-control fs-4 text-center" type="number" name="molecula_1"
                            id="" value="{{ $molecula_1 }}"> {{-- valor de la molecula 1 --}}
                    </div>

                    <div class=" d-flex justify-content-center align-items-center col p-0">
                        <h2 class=" fs-3">Na +</h2> {{-- molecula 1 --}}
                    </div>

                    <div class="col">
                        <input class=" form-control fs-4 text-center" type="number" name="molecula_2"
                            id="" value="{{ $molecula_2 }}"> {{-- valor de la molecula 2 --}}
                    </div>

                    <div class="d-flex justify-content-center align-items-center col text-center">
                        <h2 class=" fs-3">ZnI<small class=" fs-5">2</small></h2> {{-- molecula 2 --}}
                    </div>

                    <div class="d-flex justify-content-center align-items-center col text-center">
                        <h2>--></h2>
                    </div>

                    <div class=" col">
                        <input class=" form-control fs-4 text-center" type="number" name="molecula_3"
                            id="" value="{{ $molecula_3 }}"> {{-- valor de la molecula 3 --}}
                    </div>

                    <div class="d-flex justify-content-center align-items-center col text-center p-0">
                        <h2 class=" fs-3">NaI +</h2>{{-- molecula 3 --}}
                    </div>

                    <div class="col">
                        <input class=" form-control fs-4 text-center" type="number" name="molecula_4"
                            id="" value="{{ $molecula_4 }}"> {{-- valor de la molecula 4 --}}

                    </div>

                    <div class="d-flex justify-content-center align-items-center col text-center">
                        <h2 class=" fs-3">Zn</h2>{{-- molecula 4 --}}
                    </div>

                    <div class="col-9 pt-5 d-flex align-items-center justify-content-end">
                    </div>

                    <div class="col-3 pt-5 d-flex align-items-center justify-content-end pe-3">
                        <button class=" w-100 btn btn-primary" type="submit">Agregar Moleculas</button>
                        {{-- Boton para agregar las moleculas.
                con este boton se envian el valor de las imagenes a generar con la funcion "generate" --}}
                    </div>
                </form>


                <div class=" row d-flex justify-content-end pb-4">
                    <div class="col-7 d-flex justify-content-end">
                        <form action="{{ route('index') }}" method="GET">
                            @csrf
                            <button class=" btn btn-danger">Limpiar</button>{{-- Este boton llama a la funcion index para limpiar los valores
                    de cada input --}}
                            <input class=" d-none" type="text" name="vista" id=""
                                value="Exercise-1">{{-- este valor es utilizado para
                    mandar la cadena "Exercise-x esto es para poder redirigir a la vista correcta y solo hacer uso de pocoas funciones por parte
                    de los controladores" --}}
                        </form>
                    </div>

                    <div class=" col-2 d-flex justify-content-center">
                        <form action="{{ route('exercise-require-1') }}" method="post">
                            @csrf
                            {{-- esta seccion se usa para poder ver las respuestas prederterminadas haciendo uso de la funcion "require"
                se mandan los valores predeterminados a la funcion y se devuelven a la vista para que se muestre la respuesta --}}

                            <button class=" btn btn-outline-warning" type="submit">Ver respuesta</button>
                            <input class=" d-none" type="number" name="molecula_1"
                                value="2">{{-- valor de la molecula 1 --}}
                            <input class=" d-none" type="text" name="vista" id=""
                                value="Exercise-1">{{-- este valor es utilizado para
                    mandar la cadena "Exercise-x esto es para poder redirigir a la vista correcta y solo hacer uso de pocoas funciones por parte
                    de los controladores" --}}
                            <input class=" d-none" type="number" name="molecula_2"
                                value="1">{{-- vallor de la molecula 2 --}}
                            <input class=" d-none" type="number" name="molecula_3"
                                value="2">{{-- vallor de la molecula 3 --}}
                            <input class=" d-none" type="number" name="molecula_4"
                                value="1">{{-- vallor de la molecula 4 --}}

                        </form>
                    </div>

                    <div class=" col-3 d-flex align-items-center justify-content-end pe-3">
                        <form action="{{ route('respuesta') }}" method="post" class=" w-100">
                            @csrf
                            {{-- aqui se envian lan respuestas a la funciom "answer" y se verifican que esten correctas si es asi se manda una alerta --}}
                            <button class=" w-100 btn btn-outline-success" type="submit">Enviar
                                respuesta</button>

                            <input class=" d-none" type="number" name="Rmolecula_1"
                                value="{{ $molecula_1 }}">{{-- valor de la molecula 1 --}}
                            <input class=" d-none" type="number" name="Rmolecula_2"
                                value="{{ $molecula_2 }}">{{-- valor de la molecula 2 --}}
                            <input class=" d-none" type="number" name="Rmolecula_3"
                                value="{{ $molecula_3 }}">{{-- valor de la molecula 3 --}}
                            <input class=" d-none" type="number" name="Rmolecula_4"
                                value="{{ $molecula_4 }}">{{-- valor de la molecula 4 --}}
                            <input class=" d-none" type="text" name="vista" id=""
                                value="Exercise-1">{{-- este valor es utilizado para
                    mandar la cadena "Exercise-x esto es para poder redirigir a la vista correcta y solo hacer uso de pocoas funciones por parte
                    de los controladores" --}}
                        </form>
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

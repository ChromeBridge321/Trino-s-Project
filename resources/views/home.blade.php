<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio </title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{asset('assets/ColorVar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Buttons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Container.css')}}">
</head>
<header>
    <nav class="header__main">
        <img src="{{asset('images/WhiteCircle.png')}}" alt="">
        <p>ChemSolver</p>
    </nav>
</header>
<body>
  <div class="container-fluid p-0 d-flex h-100">
    
    <div class="sidebar">
      <a href="{{route('home')}}" class="sidebar__homebtn">
        Inicio
      </a>
      <ul class="mynav nav nav-pills flex-column mb-auto">
          <li class="nav-item mb-1">
            <a href="{{route('periodictable')}}" class="sidebarbtn">
              Tabla Periódica
            </a>
          </li>
          <li class="nav-item mb-1">
            <a href="#" class="sidebarbtn">
              Ejercicios
            </a>
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
        <p class="maincontent__title">Acerca de</p>

        <p class="maincontent__subtitle">Lorem ipsum dolor sit amet</p>
        
        <p class="maincontent__paragraph">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue augue vitae efficitur consectetur. Duis sollicitudin faucibus euismod. Suspendisse egestas purus 
          magna, id mattis eros ornare nec. Ut luctus ante vel metus tempus pellentesque. Mauris leo velit, tempus vitae semper ut, porttitor vel orci. Etiam rhoncus porttitor tellus 
          ut dapibus. Cras elit tortor, lacinia sit amet ex sit amet, pretium maximus libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Ut tortor nulla, iaculis et risus eu, pretium aliquam tortor. Phasellus interdum nisl pulvinar lacus ullamcorper euismod. Ut nec lorem finibus, venenatis justo id, suscipit 
          enim. Phasellus a erat consectetur, tristique ex nec, accumsan purus. Nulla posuere augue rutrum, ultrices nibh at, euismod justo. Donec vitae odio nibh.

        </p>
        <p class="maincontent__paragraph">
          Vivamus feugiat dapibus metus sed imperdiet. Donec turpis lorem, sodales eu sem eget, viverra congue ex. Aenean vel orci at lectus tristique aliquam. Proin consectetur 
          vehicula volutpat. Nam eu volutpat est. Morbi vehicula risus nisi, sed malesuada libero viverra vitae. Mauris dictum, nisi in ullamcorper semper, ligula nunc suscipit 
          tellus, vel efficitur ligula sapien eget elit. Nullam posuere consequat arcu non faucibus. Phasellus sagittis, ipsum non viverra scelerisque, neque orci tristique quam, 
          sit amet placerat purus erat quis diam. Maecenas finibus enim et egestas tempor. Donec vitae malesuada tellus.
        </p>

        <p class="maincontent__subtitle">Lorem ipsum dolor sit amet</p>
        
        <p class="maincontent__paragraph">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue augue vitae efficitur consectetur. Duis sollicitudin faucibus euismod. Suspendisse egestas purus 
          magna, id mattis eros ornare nec. Ut luctus ante vel metus tempus pellentesque. Mauris leo velit, tempus vitae semper ut, porttitor vel orci. Etiam rhoncus porttitor tellus 
          ut dapibus. Cras elit tortor, lacinia sit amet ex sit amet, pretium maximus libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
          Ut tortor nulla, iaculis et risus eu, pretium aliquam tortor. Phasellus interdum nisl pulvinar lacus ullamcorper euismod. Ut nec lorem finibus, venenatis justo id, suscipit 
          enim. Phasellus a erat consectetur, tristique ex nec, accumsan purus. Nulla posuere augue rutrum, ultrices nibh at, euismod justo. Donec vitae odio nibh.
        </p>
      </div>
    </div>

  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"
  ></script>

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
  ></script>
</body>
</html>
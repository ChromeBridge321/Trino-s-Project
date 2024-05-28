<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabla Periódica </title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
  <div class="container-fluid p-0 d-flex">
    
    <div class="sidebar">
      <a href="{{route('home')}}" class="sidebar__homebtn">
        Inicio
      </a>
      <ul class="mynav nav nav-pills flex-column mb-auto">
          <li class="nav-item mb-1">
            <a href="{{route('periodictable')}}" class="sidebarbtn__selected">
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

        <div class="maincontent__title">
          <h2>Tabla Periódica</h2>
        </div>

        <div class="infopanel_container">
          <div class="secondcapa">
            <div id="info-panel">
              <div class="top">
                <div class="A-Side">
                  <p id="elementName"></p>
                </div>
                <div class="B-Side">
                  <p id="elementAtNum"></p>
                </div>
              </div>
              <div class="middle">
                <div class="A-Side">
                  <p id="elementSymbol"></p>
                </div>
                <div class="B-Side">
                  <p id="elementOxNum"></p>
                </div>
              </div>
            </div>
            
            <div class="info_element">
              <p>Elemento</p>
            </div>
          </div>
        </div>

        <div class="tablaperiodica">
          <div class="fila">
              <button class="elemento gp1" data-symbol="H" data-name="Hidrógeno" data-atomic-number="1" data-oxidate-number="+1 -1">H</button>
              
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>

              <button class="elemento gp2" data-symbol="He" data-name="Helio" data-atomic-number="2" data-oxidate-number="">He</button>
          </div>
          <div class="fila">
            <button class="elemento gp3" data-symbol="Li" data-name="Litio" data-atomic-number="3" data-oxidate-number="+1 -1">Li</button>
            <button class="elemento gp4" data-symbol="Be" data-name="Berilio" data-atomic-number="4" data-oxidate-number="+2">Be</button>
            
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            
            <button class="elemento gp5" data-symbol="B" data-name="Boro" data-atomic-number="5" data-oxidate-number="+3 +2 +1">B</button>
            <button class="elemento gp1" data-symbol="C" data-name="Carbono" data-atomic-number="6" data-oxidate-number="+4 +3 +2 +1 -1 -2 -3">C</button>
            <button class="elemento gp1" data-symbol="N" data-name="Nitrógeno" data-atomic-number="7" data-oxidate-number="+5 +4 +3 +2 +1 -1 -2 -3">N</button>
            <button class="elemento gp1" data-symbol="O" data-name="Oxígeno" data-atomic-number="8" data-oxidate-number="+2 +1 -1 -2">O</button>
            <button class="elemento gp6" data-symbol="F" data-name="Flúor" data-atomic-number="9" data-oxidate-number="-1">F</button>
            <button class="elemento gp2" data-symbol="Ne" data-name="Neón" data-atomic-number="10" data-oxidate-number="">Ne</button>
          </div>
          <div class="fila">
            <button class="elemento gp3" data-symbol="Na" data-name="Sodio" data-atomic-number="11" data-oxidate-number="+1 -1">Na</button>
            <button class="elemento gp4" data-symbol="Mg" data-name="Magnesio" data-atomic-number="12" data-oxidate-number="+2 +1">Mg</button>

            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>
            <div class="elemento wh"></div>

            <button class="elemento gp7" data-symbol="Al" data-name="Alumno" data-atomic-number="13" data-oxidate-number="+3 +1">Al</button>
            <button class="elemento gp5" data-symbol="Si" data-name="Silicio" data-atomic-number="14" data-oxidate-number="+4 +3 +2 +1 -1 -2 -3 -4">Si</button>
            <button class="elemento gp1" data-symbol="P" data-name="Fósforo" data-atomic-number="15" data-oxidate-number="+5 +4 +3 +2 +1 -1 -2 -3">P</button>
            <button class="elemento gp1" data-symbol="S" data-name="Azufre" data-atomic-number="16" data-oxidate-number="+6 +5 +4 +3 +2 +1 -1 -2">S</button>
            <button class="elemento gp6" data-symbol="Cl" data-name="Cloro" data-atomic-number="17" data-oxidate-number="+7 +6 +5 +4 +3 +2 +1 -1">Cl</button>
            <button class="elemento gp2" data-symbol="Ar" data-name="Argón" data-atomic-number="18" data-oxidate-number="">Ar</button>
          </div>
          <div class="fila">
            <button class="elemento gp3" data-symbol="K" data-name="Potasio" data-atomic-number="19" data-oxidate-number="+1">K</button>
            <button class="elemento gp4" data-symbol="Ca" data-name="Calcio" data-atomic-number="20" data-oxidate-number="+2">Ca</button>

            <button class="elemento gp8" data-symbol="Sc" data-name="Escandio" data-atomic-number="21" data-oxidate-number="+3 +2 +1">Sc</button>
            <button class="elemento gp8" data-symbol="Ti" data-name="Titanio" data-atomic-number="22" data-oxidate-number="+4 +3 +2 +1 -1">Ti</button>
            <button class="elemento gp8" data-symbol="V" data-name="Vanadio" data-atomic-number="23" data-oxidate-number="+5 +4 +3 +2 +1 -1">V</button>
            <button class="elemento gp8" data-symbol="Cr" data-name="Cromo" data-atomic-number="24" data-oxidate-number="+6 +5 +4 +3 +2 +1 -1 -2">Cr</button>
            <button class="elemento gp8" data-symbol="Mn" data-name="Magnesio" data-atomic-number="25" data-oxidate-number="+7 +6 +5 +4 +3 +2 ... -3">Mn</button>
            <button class="elemento gp8" data-symbol="Fe" data-name="Hierro" data-atomic-number="26" data-oxidate-number="+6 +5 +4 +3 +2 +1 -1 -2">Fe</button>
            <button class="elemento gp8" data-symbol="Co" data-name="Cobalto" data-atomic-number="27" data-oxidate-number="+5 +4 +3 +2 +1 -1 -2">Co</button>
            <button class="elemento gp8" data-symbol="Ni" data-name="Níquel" data-atomic-number="28" data-oxidate-number="+4 +3 +2 +1 -1">Ni</button>
            <button class="elemento gp8" data-symbol="Cu" data-name="Cobre" data-atomic-number="29" data-oxidate-number="+4 +3 +2 +1 -1">Cu</button>
            <button class="elemento gp8" data-symbol="Zn" data-name="Zinc" data-atomic-number="30" data-oxidate-number="+2">Zn</button>

            <button class="elemento gp7" data-symbol="Ga" data-name="Galio" data-atomic-number="31" data-oxidate-number="+3 +2 +1">Ga</button>
            <button class="elemento gp5" data-symbol="Ge" data-name="Germanio" data-atomic-number="32" data-oxidate-number="+4 +3 +2 +1 -4">Ge</button>
            <button class="elemento gp5" data-symbol="As" data-name="Arsénico" data-atomic-number="33" data-oxidate-number="+5 +3 +2 -3">As</button>
            <button class="elemento gp1" data-symbol="Se" data-name="Selenio" data-atomic-number="34" data-oxidate-number="+6 +4 +2 +1 -2">Se</button>
            <button class="elemento gp6" data-symbol="Br" data-name="Bromo" data-atomic-number="35" data-oxidate-number="+7 +5 +4 +3 +1 -1">Br</button>
            <button class="elemento gp2" data-symbol="Kr" data-name="Kriptón" data-atomic-number="36" data-oxidate-number="+2">Kr</button>
          </div>
          <div class="fila">
            <button class="elemento gp3" data-symbol="Rb" data-name="Rubidio" data-atomic-number="37" data-oxidate-number="+1">Rb</button>
            <button class="elemento gp4" data-symbol="Sr" data-name="Estroncio" data-atomic-number="38" data-oxidate-number="+2">Sr</button>

            <button class="elemento gp8" data-symbol="Y" data-name="Itrio" data-atomic-number="39" data-oxidate-number="+3 +2 +1">Y</button>
            <button class="elemento gp8" data-symbol="Zr" data-name="Zirconio" data-atomic-number="40" data-oxidate-number="+4 +3 +2 +1">Zr</button>
            <button class="elemento gp8" data-symbol="Nb" data-name="Niobio" data-atomic-number="41" data-oxidate-number="+5 +4 +3 +2 -1">Nb</button>
            <button class="elemento gp8" data-symbol="Mo" data-name="Molibdeno" data-atomic-number="42" data-oxidate-number="+6 +5 +4 +3 +2 +1 -1 -2">Mo</button>
            <button class="elemento gp8" data-symbol="Tc" data-name="Tecnecio" data-atomic-number="43" data-oxidate-number="+7 +6 +5 +4 +3 +2 +1 -1 -3">Tc</button>
            <button class="elemento gp8" data-symbol="Ru" data-name="Rutenio" data-atomic-number="44" data-oxidate-number="+8 +7 +6 +5 +4 +3 +2 +1 -2">Ru</button>
            <button class="elemento gp8" data-symbol="Rh" data-name="Rodio" data-atomic-number="45" data-oxidate-number="+6 +5 +4 +3 +2 +1 -1">Rh</button>
            <button class="elemento gp8" data-symbol="Pd" data-name="Paladio" data-atomic-number="46" data-oxidate-number="+4 +2">Pd</button>
            <button class="elemento gp8" data-symbol="Ag" data-name="Plata" data-atomic-number="47" data-oxidate-number="+3 +2 +1">Ag</button>
            <button class="elemento gp8" data-symbol="Cd" data-name="Cadmio" data-atomic-number="48" data-oxidate-number="+2">Cd</button>

            <button class="elemento gp7" data-symbol="In" data-name="Indio" data-atomic-number="49" data-oxidate-number="+3 +2 +1">In</button>
            <button class="elemento gp7" data-symbol="Sn" data-name="Estaño" data-atomic-number="50" data-oxidate-number="+4 +2 -4">Sn</button>
            <button class="elemento gp5" data-symbol="Sb" data-name="Antimonio" data-atomic-number="51" data-oxidate-number="+5 +3 -3">Sb</button>
            <button class="elemento gp5" data-symbol="Te" data-name="Telurio" data-atomic-number="52" data-oxidate-number="+6 +5 +4 +2 -2">Te</button>
            <button class="elemento gp6" data-symbol="I" data-name="Yodo" data-atomic-number="53" data-oxidate-number="+7 +5 +3 +1 -1">I</button>
            <button class="elemento gp2" data-symbol="Xe" data-name="Xenón" data-atomic-number="54" data-oxidate-number="+8 +6 +4 +2">Xe</button>
          </div>
          <div class="fila">
            <button class="elemento gp3" data-symbol="Cs" data-name="Cesio" data-atomic-number="55" data-oxidate-number="+1">Cs</button>
            <button class="elemento gp4" data-symbol="Ba" data-name="Bario" data-atomic-number="56" data-oxidate-number="+2">Ba</button>

            <button class="elemento gp8" data-symbol="Lu" data-name="Lutecio" data-atomic-number="71" data-oxidate-number="+3">Lu</button>
            <button class="elemento gp8" data-symbol="Hf" data-name="Hafnio" data-atomic-number="72" data-oxidate-number="+4 +3 +2">Hf</button>
            <button class="elemento gp8" data-symbol="Ta" data-name="Tantalio" data-atomic-number="73" data-oxidate-number="+5 +4 +3 +2 -1">Ta</button>
            <button class="elemento gp8" data-symbol="W" data-name="Wolframio" data-atomic-number="74" data-oxidate-number="+6 +5 +4 +3 +2 +1 -1 -2">W</button>
            <button class="elemento gp8" data-symbol="Re" data-name="Renio" data-atomic-number="75" data-oxidate-number="+7 +6 +5 +4 +3 +2 +1 -1 -3">Re</button>
            <button class="elemento gp8" data-symbol="Os" data-name="Osmio" data-atomic-number="76" data-oxidate-number="+8 +7 +6 +5 +4 +3 +2 +1 -2">Os</button>
            <button class="elemento gp8" data-symbol="Ir" data-name="Iridio" data-atomic-number="77" data-oxidate-number="+6 +5 +4 +3 +2 +1 -1 -3">Ir</button>
            <button class="elemento gp8" data-symbol="Pt" data-name="Platino" data-atomic-number="78" data-oxidate-number="+6 +5 +4 +2">Pt</button>
            <button class="elemento gp8" data-symbol="Au" data-name="Oro" data-atomic-number="79" data-oxidate-number="+5 +3 +2 +1 -1">Au</button>
            <button class="elemento gp8" data-symbol="Hg" data-name="Mercurio" data-atomic-number="80" data-oxidate-number="+4 +2 +1">Hg</button>

            <button class="elemento gp7" data-symbol="Tl" data-name="Talio" data-atomic-number="81" data-oxidate-number="+3 +1">Tl</button>
            <button class="elemento gp7" data-symbol="Pb" data-name="Plomo" data-atomic-number="82" data-oxidate-number="+4 +2 -4">Pb</button>
            <button class="elemento gp7" data-symbol="Bi" data-name="Bismuto" data-atomic-number="83" data-oxidate-number="+5 +3 -3">Bi</button>
            <button class="elemento gp5" data-symbol="Po" data-name="Polonio" data-atomic-number="84" data-oxidate-number="+6 +4 +2 -2">Po</button>
            <button class="elemento gp6" data-symbol="At" data-name="Astato" data-atomic-number="85" data-oxidate-number="+1 -1">At</button>
            <button class="elemento gp2" data-symbol="Rn" data-name="Radón" data-atomic-number="86" data-oxidate-number="">Rn</button>
          </div>
          <div class="fila">
            <button class="elemento gp3" data-symbol="Fr" data-name="Francio" data-atomic-number="87" data-oxidate-number="+1">Fr</button>
            <button class="elemento gp4" data-symbol="Ra" data-name="Radio" data-atomic-number="88" data-oxidate-number="+2">Ra</button>

            <button class="elemento gp8" data-symbol="Lr" data-name="Laurencio" data-atomic-number="103" data-oxidate-number="+3">Lr</button>
            <button class="elemento gp8" data-symbol="Rf" data-name="Rutherfordio" data-atomic-number="104" data-oxidate-number="+4">Rf</button>
            <button class="elemento gp8" data-symbol="Db" data-name="Dubnio" data-atomic-number="105" data-oxidate-number="+5">Db</button>
            <button class="elemento gp8" data-symbol="Sg" data-name="Seaborgio" data-atomic-number="106" data-oxidate-number="+6">Sg</button>
            <button class="elemento gp8" data-symbol="Bh" data-name="Bohrio" data-atomic-number="107" data-oxidate-number="+7">Bh</button>
            <button class="elemento gp8" data-symbol="Hs" data-name="Hassio" data-atomic-number="108" data-oxidate-number="+8">Hs</button>
            <button class="elemento gp8" data-symbol="Mt" data-name="Meitnerio" data-atomic-number="109" data-oxidate-number="+3 +1 +3 +5">Mt</button>
            <button class="elemento gp8" data-symbol="Ds" data-name="Darmstatio" data-atomic-number="110" data-oxidate-number="+6">Ds</button>
            <button class="elemento gp8" data-symbol="Rg" data-name="Roentgenio" data-atomic-number="111" data-oxidate-number="-1 +1 +3 +5">Rg</button>
            <button class="elemento gp8" data-symbol="Cn" data-name="Copernicio" data-atomic-number="112" data-oxidate-number="+4 +2">Cn</button>

            <button class="elemento gp9" data-symbol="Nh" data-name="Nihonio" data-atomic-number="113" data-oxidate-number="+1 +3 +5">Nh</button>
            <button class="elemento gp9" data-symbol="Fl" data-name="Flerovio" data-atomic-number="114" data-oxidate-number="+2 +4">Fl</button>
            <button class="elemento gp9" data-symbol="Mc" data-name="Moscovio" data-atomic-number="115" data-oxidate-number="+1 +3">Mc</button>
            <button class="elemento gp9" data-symbol="Lv" data-name="Livermorio" data-atomic-number="116" data-oxidate-number="+2 +4">Lv</button>
            <button class="elemento gp9" data-symbol="Ts" data-name="Teneso" data-atomic-number="117" data-oxidate-number="-1 +1 +3 +5">Ts</button>
            <button class="elemento gp9" data-symbol="Og" data-name="Oganesón" data-atomic-number="118" data-oxidate-number="+2 +4">Og</button>
          </div>
          <br>
          <div class="fila">
            <div class="bloque3">
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <button class="elemento gp10" data-symbol="La" data-name="Lantanio" data-atomic-number="57" data-oxidate-number="+3 +2">La</button>
              <button class="elemento gp10" data-symbol="Ce" data-name="Cerio" data-atomic-number="58" data-oxidate-number="+4 +3 +2">Ce</button>
              <button class="elemento gp10" data-symbol="Pr" data-name="Praseodimio" data-atomic-number="59" data-oxidate-number="+5 +3 +2">Pr</button>
              <button class="elemento gp10" data-symbol="Nd" data-name="Neodimio" data-atomic-number="60" data-oxidate-number="+3 +2">Nd</button>
              <button class="elemento gp10" data-symbol="Pm" data-name="Prometio" data-atomic-number="61" data-oxidate-number="+3">Pm</button>
              <button class="elemento gp10" data-symbol="Sm" data-name="Samario" data-atomic-number="62" data-oxidate-number="+3 +2">Sm</button>
              <button class="elemento gp10" data-symbol="Eu" data-name="Europio" data-atomic-number="63" data-oxidate-number="+3 +2">Eu</button>
              <button class="elemento gp10" data-symbol="Gd" data-name="Gadolino" data-atomic-number="64" data-oxidate-number="+3 +2 +1">Gd</button>
              <button class="elemento gp10" data-symbol="Tb" data-name="Terbio" data-atomic-number="65" data-oxidate-number="+4 +3 +1">Tb</button>
              <button class="elemento gp10" data-symbol="Dy" data-name="Disprosio" data-atomic-number="66" data-oxidate-number="+3 +2">Dy</button>
              <button class="elemento gp10" data-symbol="Ho" data-name="Holmio" data-atomic-number="67" data-oxidate-number="+3">Ho</button>
              <button class="elemento gp10" data-symbol="Er" data-name="Erbio" data-atomic-number="68" data-oxidate-number="+3">Er</button>
              <button class="elemento gp10" data-symbol="Tm" data-name="Tulio" data-atomic-number="69" data-oxidate-number="+3 +2">Tm</button>
              <button class="elemento gp10" data-symbol="Yb" data-name="Iterbio" data-atomic-number="70" data-oxidate-number="+3 +2">Yb</button>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
            </div>
          </div>
          <div class="fila">
            <div class="bloque3">
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
              <button class="elemento gp11" data-symbol="Ac" data-name="Actinio" data-atomic-number="89" data-oxidate-number="+3">Ac</button>
              <button class="elemento gp11" data-symbol="Th" data-name="Torio" data-atomic-number="90" data-oxidate-number="+4 +3 +2">Th</button>
              <button class="elemento gp11" data-symbol="Pa" data-name="Protactinio" data-atomic-number="91" data-oxidate-number="+5 +4 +3">Pa</button>
              <button class="elemento gp11" data-symbol="U" data-name="Uranio" data-atomic-number="92" data-oxidate-number="+6 +5 +4 +3">U</button>
              <button class="elemento gp11" data-symbol="Np" data-name="Neptunio" data-atomic-number="93" data-oxidate-number="+7 +6 +5 +4 +3">Np</button>
              <button class="elemento gp11" data-symbol="Pu" data-name="Plutonio" data-atomic-number="94" data-oxidate-number="+7 +6 +5 +4 +3">Pu</button>
              <button class="elemento gp11" data-symbol="Am" data-name="Americio" data-atomic-number="95" data-oxidate-number="+6 +5 +4 +3 +2">Am</button>
              <button class="elemento gp11" data-symbol="Cm" data-name="Curio" data-atomic-number="96" data-oxidate-number="+4 +3">Cm</button>
              <button class="elemento gp11" data-symbol="Bk" data-name="Berkelio" data-atomic-number="97" data-oxidate-number="+4 +3">Bk</button>
              <button class="elemento gp11" data-symbol="Cf" data-name="Californio" data-atomic-number="98" data-oxidate-number="+4 +3 +1">Cf</button>
              <button class="elemento gp11" data-symbol="Es" data-name="Einstenio" data-atomic-number="99" data-oxidate-number="+3 +2">Es</button>
              <button class="elemento gp11" data-symbol="Fm" data-name="Fermio" data-atomic-number="100" data-oxidate-number="+3 +2">Fm</button>
              <button class="elemento gp11" data-symbol="Md" data-name="Mendelevio" data-atomic-number="101" data-oxidate-number="+3 +2">Md</button>
              <button class="elemento gp11" data-symbol="No" data-name="Nobelio" data-atomic-number="102" data-oxidate-number="+3 +2">No</button>
              <div class="elemento wh"></div>
              <div class="elemento wh"></div>
            </div>
          </div>
        </div>
        <br>
      </div>

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
  <script>
    var cont = 0;
    var colorgp = '';

    document.querySelectorAll('.elemento').forEach(function(element) {
      if (element.className != 'elemento wh') {
        element.addEventListener('click', function() {  
            var panel = document.getElementById('info-panel');

            const symbol = this.getAttribute('data-symbol');
            const name = this.getAttribute('data-name');
            const atomicNumber = this.getAttribute('data-atomic-number');
            const oxidateNumber = this.getAttribute('data-oxidate-number')

            switch (element.className) {
              case 'elemento gp1':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp1');
                colorgp = 'gp1';
                break;
              case 'elemento gp2':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp2');
                colorgp = 'gp2';
                break;
              case 'elemento gp3':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp3');
                colorgp = 'gp3';
                break;
              case 'elemento gp4':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp4');
                colorgp = 'gp4';
                break;
              case 'elemento gp5':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp5');
                colorgp = 'gp5';
                break;
              case 'elemento gp6':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp6');
                colorgp = 'gp6';
                break;
              case 'elemento gp7':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp7');
                colorgp = 'gp7';
                break;
              case 'elemento gp8':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp8');
                colorgp = 'gp8';
                break;
              case 'elemento gp9':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp9');
                colorgp = 'gp9';
                break;
              case 'elemento gp10':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp10');
                colorgp = 'gp10';
                break;
              case 'elemento gp11':
                if (cont>0) {
                  panel.classList.remove(colorgp);
                }
                panel.classList.add('gp11');
                colorgp = 'gp11';
                break;
            }

            document.getElementById('elementName').innerText= name;
            document.getElementById('elementAtNum').innerText= '#'+atomicNumber;
            document.getElementById('elementSymbol').innerText= symbol;
            document.getElementById('elementOxNum').innerText= oxidateNumber;
            cont++;
        });
      }
        
    });
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
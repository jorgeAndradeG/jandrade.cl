
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>@yield('Title','Jorge')</title>


</head>
<body>
  @section('header')
  <section class="header">
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #fbfafa;">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><i class="fab fa-pagelines" style="color: #94BF82"></i> Jorge Andrade </a>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        
          <ul class="navbar-nav">
          <!--
            <li class="nav-item">
              <a class="nav-link" href="/">Posts</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" href="/categorias" id="barra1"> Categorías</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="#">Yo</a>
            </li>
            -->
            <!--
          </ul>-->
        </div>
        <ul class="nav navbar-nav navbar-right">
              <li class="nav-item">
                <a class="nav-link" href="https://www.linkedin.com/in/jorge-andrade-g%C3%B3mez-1154851b4/" target="_blank" ><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.youtube.com/channel/UCIsZLoaOYGI3bx9VH9qtAUQ"  target="_blank"><i class="fab fa-youtube"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/jorgeAndradeG" target="_blank"><i class="fab fa-github"></i></a>
              </li>

              <!--
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
              </li>
              -->
              <!--
              <li class="nav-item">
              <a class="nav-link" href=""><i class="fab fa-instagram"></i></a>
              </li>
             -->
              
            </ul>
      </div>
    </nav>
  </section>
  <hr>
  @show

  @section('main')
  @show

<!-- Development version -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>

</body>
</html>
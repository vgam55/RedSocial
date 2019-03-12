<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex">
    <a class="navbar-brand flex-grow-1" href="#">SocialTX</a>
    <!-- Barra de busqueda -->
    <form class="form-inline my-2 my-lg-0" action="{{ url('/findAmigos') }}" method="GET">
        <input class="form-control mr-sm-2" type="input" id="buscar" name="buscar" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    <!-- Boton para cuando la pantalla se reduzca -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Opciones del menu principal -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alertas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Solcitud de Amistad</a>
            <a class="dropdown-item" href="#">Eventos</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Chats</a>
            </div>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Mensajes <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Amigos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('logout')}}">Salir</a>
        </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li @if($current == "index") class="nav-item active" @else class="nav-item" @endif>
                 <a class="nav-link" href="{{route('index')}}">Home</a>
            </li>

            <li @if($current == "clientes") class="nav-item active" @else class="nav-item" @endif>
                 <a class="nav-link" href="{{route('clientes')}}">Clientes</a>
            </li>

            <li @if($current == "relatorios") class="nav-item active" @else class="nav-item" @endif>
                 <a class="nav-link" href="{{route('relatorios')}}">Relatórios</a>
            </li>       
    </div>
</nav>
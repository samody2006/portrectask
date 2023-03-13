<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Portrec Task</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lga.index') }}">LGA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('wards.index') }}">Ward</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pollingunits.index') }}">Polling Units</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

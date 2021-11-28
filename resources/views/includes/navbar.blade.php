<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="">Cipher Calculator</a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="triangleDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    Triangle
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="triangleDropdown">
                        <li>
                            <a class="dropdown-item" href="{{route('triangle.encryption')}}">Encryption</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('triangle.decryption')}}">Decryption</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="spiralDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    Spiral
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="spiralDropdown">
                        <li>
                            <a class="dropdown-item" href="{{route('spiral.encryption')}}">Encryption</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{route('spiral.decryption')}}">Decryption</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
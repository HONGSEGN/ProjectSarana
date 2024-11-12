<!-- top navbar -->
<div class="top-navbar">
    <p>WELCOME TO OUR SYSTEM</p>
    <div class="icons">
        <a href="{{ route('auths.login') }}"><img src="./images/register.png" alt="" width="18px">Login</a>
        <a href="{{ route('auths.register') }}"><img src="./images/register.png" alt="" width="18px">Register</a>
    </div>
</div>
<!-- top navbar -->

<!-- navbar -->
<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" id="logo"><span id="span1">P</span>hum Khmer
            <span>Lodge</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('calender.index')}}">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('calender.index') }}">Check-in & Check-out</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('calender.index') }}">About</a>
                </li>
            </ul>
            <form class="d-flex" id="search">
                <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!-- navbar -->

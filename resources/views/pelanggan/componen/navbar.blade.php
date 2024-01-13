<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #025464">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Toko Online</a>
        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarTogglerDemo03">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link active {{ Request::path() == '/' ? 'active' : ''; }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active {{ Request::path() == 'shop' ? 'active':''; }}" href="/shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active {{ Request::path() == 'contact' ? 'active':''; }}" href="/contact">Contact Up</a>
                </li>
            </ul>
            <form class="d-flex gap-4 align-items-center">
                <button class="btn btn-success" type="submit">Login | Register</button>
                <a href="/transaksi" class="fs-5 icon-nav">
                    <i class="fa-solid fa-bag-shopping"></i>
                </a>
                <div class="circle">10</div>
            </form>
        </div>
    </div>
</nav>

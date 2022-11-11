<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #d51f27;">
    <div class="container container-fluid">
        <a class="navbar-brand font-weight-bold" href="#">G<span class="text-dark">C</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == "home" ? "active" : ""  ?>" href="?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == "products" ? "active" : ""  ?>" href="?page=products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $_GET['page'] == "contact" ? "active" : ""  ?>" href="?page=contact">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 8px;" href="?page=login">Login</a>
            </form>
        </div>
    </div>
</nav>
<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'pages';
    $action = 'home';
}
?>
<html>


    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <h3 class="fw-bolder">RT-PCR Testing</h3>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item "><a href="?controller=pages&action=home" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="?controller=rtpcrtesting&action=index" class="nav-link">RT-PCR Result</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Labroom</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Laboratory Analyst</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-danger me-2">STAY SAFE</button>
                <button type="button" class="btn btn-danger">STAY HOME</button>
            </div>
        </header>
    </div>






<body>
    <?php require_once("routes.php"); ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        #sidebar {
            background-color: #343a40;
            color: #fff;
            transition: all 0.3s;
            min-height: 100vh;
            margin-top: 56px;
            padding: 0px;
        }

        #sidebar a {
            color: #adb5bd;
            transition: all 0.3s;
        }

        #sidebar a:hover {
            color: #fff;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-toggler {
            border: 1px solid #fff;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #adb5bd;
            transition: all 0.3s;
        }

        .navbar-dark .navbar-nav .nav-link:hover {
            color: #fff;
        }

        .jumbotron {
            background: linear-gradient(to bottom, #007bff 0%, #0056b3 100%);
            color: #fff;
            padding: 3rem;
            margin-bottom: 2rem;
            border-radius: 0;
        }

        .card {
            border: none;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .user-section {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .user-section img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="user-section">
                    <img src="img/admins.png" alt="Admin Avatar">
                    <span class="nav-link">Welcome</span>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home"></i> Homepage
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin.php">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="map.php">
                            <i class="fas fa-map"></i> Map
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="grave_management.php">
                            <i class="fas fa-cogs"></i> Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reports.php">
                            <i class="fas fa-chart-bar"></i> Reports
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
            <!-- Header Jumbotron -->
            <div class="jumbotron text-center">
                <h1 class="display-4">The Vatican Cemetery</h1>
                <p class="lead">Manage and visualize cemetery data with ease.</p>
            </div>

            <div class="container mt-4">
                <!-- Cemetery mapping dashboard content goes here -->
                <h2 class="mb-4">The Vatican Cemetery Dashboard</h2>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-map"></i> Cemetery Map</h5>
                                <p class="card-text">View and edit the cemetery map.</p>
                                <a href="map.php" class="btn btn-light">Go to Map</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-cogs"></i> Graveyard Management</h5>
                                <p class="card-text">Manage graveyards, plots, and graves.</p>
                                <a href="grave_management.php" class="btn btn-light">Manage Graves</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-chart-bar"></i> Reports</h5>
                                <p class="card-text">Generate and view cemetery reports.</p>
                                <a href="reports.php" class="btn btn-light">View Reports</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-Z9tIoAfZeyd8Duhj4thN/LZud7tMTb5ST1Un6DD/3Ehep9+HAZPZZl+qC+7eZJLD"
        crossorigin="anonymous"></script>
</body>
</html>

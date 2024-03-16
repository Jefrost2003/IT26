<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Vatican Cemetery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="styles.css">  
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <img src="img/logo.png" alt="Logo" height="60" class="d-inline-block align-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pay.php">Avail Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notif.php">Notification</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-8 col-lg-6">
                <h2 class="display-4">Find Peaceful Resting Places</h2>
                <p class="lead">Explore our interactive map to locate and remember your loved ones in serene cemeteries.</p>
                <a href="map.php" class="btn btn-light btn-lg">Explore Map</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="explore" class="features text-center py-5">
    <div class="container">
        <h2 class="mb-5">Discover our Features</h2>
        <div class="row">
            <!-- Feature Box: Interactive Maps -->
            <div class="col-lg-4 mb-4 animate__animated animate__fadeIn">
                <div class="card">
                    <img src="img/map.png" alt="Map Icon" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Interactive Maps</h3>
                        <p class="card-text">Discover burial sites with our user-friendly interactive maps.</p>
                    </div>
                </div>
            </div>
            <!-- Feature Box: Enhanced User Experience -->
            <div class="col-lg-4 mb-4 animate__animated animate__fadeIn">
                <div class="card">
                    <img src="img/user.png" alt="User Icon" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Enhanced User Experience</h3>
                        <p class="card-text">Designed to provide an exceptional user experience for all visitors.</p>
                    </div>
                </div>
            </div>
            <!-- Feature Box: Effortless Search -->
            <div class="col-lg-4 mb-4 animate__animated animate__fadeIn">
                <div class="card">
                    <img src="img/search.png" alt="Search Icon" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Effortless Search</h3>
                        <p class="card-text">Efficiently search for resting places using our advanced search features.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call-to-Action Section -->
<section class="cta text-center py-5">
    <div class="container">
        <h2>Start Your Journey Today</h2>
        <p>Explore the beauty of cemeteries and cherish the memories of your loved ones.</p>
        <a href="signup.php" class="btn btn-primary btn-lg">Sign Up Now</a>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer bg-light text-dark text-center py-3">
    <div class="container">
        <p>&copy; 2024 The Vatican Cemetery. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

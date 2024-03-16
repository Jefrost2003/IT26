<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemetery Reports - ADMIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Include any specific styles for the Reports page here */
    </style>
</head>

<body>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <!-- ... (Same as in your provided code) ... -->
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <!-- ... (Same as in your provided code) ... -->
            </nav>

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
                <!-- Header Jumbotron (You can customize this as needed) -->
                <div class="jumbotron text-center">
                    <h1 class="display-4">Cemetery Reports</h1>
                    <p class="lead">Generate and view cemetery reports for better management.</p>
                </div>

                <!-- Main content for Reports page -->
                <div class="container mt-4">
                    <!-- Add your specific content for the Reports page here -->
                    <h2 class="mb-4">Reports Overview</h2>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-chart-pie"></i> Grave Distribution</h5>
                                    <p class="card-text">Visualize the distribution of graves in the cemetery.</p>
                                    <a href="#" class="btn btn-light">View Distribution</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-chart-line"></i> Annual Trends</h5>
                                    <p class="card-text">Explore annual trends and statistics for cemetery activities.</p>
                                    <a href="#" class="btn btn-light">View Trends</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more cards as needed for different reports -->
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

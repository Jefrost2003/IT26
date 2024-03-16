<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemetery Mapping</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="img/logo.png" alt="Logo" height="60" class="d-inline-block align-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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


<!-- Cemetery Container -->
<div class="container mt-5">
    <!-- Dropdown (Combobox) to Select Cemetery Section -->
    <div class="d-flex justify-content-start mb-3">
        <select id="sectionSelect" class="form-select" name="section" required>
            <option value="section">Choose a Section</option>
            <option value="sectionA">Section A</option>
            <option value="sectionB">Section B</option>
            <option value="sectionC">Section C</option>
        </select>
    </div>

    <!-- Container to display dynamically generated grid content -->
    <div id="gridContainer" style="display: grid; grid-template-columns: repeat(8, 1fr); gap: 10px;"></div>
</div>


            <!-- Container for Deceased Person -->
            <div class="container mt-3">
                <h3>Deceased Person</h3>

                <!-- Search Bar with Search Button -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for a person" aria-label="Search for a person" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>

                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- JavaScript to Handle Dropdown Selection -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
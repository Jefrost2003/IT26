<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
    body {
    background-image: url('img/clouds.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-color: #f8f9fa; /* Fallback color in case the image is not available */
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .card {
        width: 400px;
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.8); /* Adjust the alpha (4th value) as needed */
    }
    .card-body {
        padding: 30px;
    }

    .card-img-top {
        max-width: 100%;
        height: auto;
    }

    .form-label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .mt-3 a {
        color: #007bff;
    }

    .mt-3 a:hover {
        text-decoration: underline;
    }
</style>
<body>
    <div class="container">
        <div class="card shadow">
            <div class="card-body text-center">
                <img src="img/logo.png" alt="Logo" class="card-img-top mb-4">

                <!-- Your signup form goes here -->
                <form>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>                
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>

                <!-- "Already a member? Login now!" section -->
                <div class="mt-3">
                    <p>Already a member? <a href="login.php">Login now!</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

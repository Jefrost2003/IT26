<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
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

                <!-- Your Forgot Password form goes here -->
                <form action="forgot_password_process.html" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Enter your Username</label>
                        <input type="username" class="form-control" id="username" name="username" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

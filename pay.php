<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

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

<div class="container mt-5">
    <h2 class="mb-4">Payment Information</h2>

    <form>
        <div class="mb-3" class="d-flex justify-content-start mb-3">
            <label for="amount" class="form-label">Select Contract</label>
            <div>
                <select id="sectionSelect" class="form-select" name="section" required>
                    <option value="sectionA">1 year For ₱5,000</option>
                    <option value="sectionB">5 year's For ₱20,000</option>
                    <option value="sectionC">10 year's For ₱40,000 </option>
                    <option value="custom">Custom Contract</option>
                </select>
            </div>

            <div id="customContractFields" style="display: none;">
    <div class="mb-3">
        <label for="customYear" class="form-label">Custom Contract Year</label>
        <input type="text" class="form-control" id="customYear" placeholder="Enter the custom contract year">
    </div>
    <div class="mb-3">
        <label for="contractAmount" class="form-label">Contract Amount</label>
        <output type="text" class="form-control" id="contractAmount" readonly>
    </div>
</div>


            <div class="mb-3">
                <label class="form-label">Payment Method</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="cardPayment" value="card"
                        checked>
                    <label class="form-check-label" for="cardPayment">
                        Credit/Debit Card
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="cashPayment" value="cash">
                    <label class="form-check-label" for="cashPayment">
                        Cash
                    </label>
                </div>
            </div>

            <div id="cardInfoContainer">
                <!-- Card Information Fields -->
                <div class="form-group">
                    <label for="creditCard">Credit Card Number</label>
                    <input type="text" class="form-control" id="creditCard" placeholder="Enter your credit card number"
                        required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="expiryDate">Expiry Date</label>
                        <input type="text" class="form-control" id="expiryDate" placeholder="MM/YYYY" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="Enter CVV" required>
                    </div>
                </div>
            </div>

            <div id="cashInfoContainer" style="display: none;">
                <!-- Cash Information Fields -->
                <div class="form-group">
                    <label for="cashAmount">Cash Amount</label>
                    <input type="text" class="form-control" id="cashAmount" placeholder="Enter the cash amount" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3"><a class="nav-link" href="transac.php">Submit Payment</a></button>
        </div>
    </form>
</div>

<!-- Bootstrap JS (Optional, if you want to use Bootstrap features that require JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your custom script.js (Add this line) -->
<script src="script.js"></script>

</body>

</html>

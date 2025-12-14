<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenoBooks List</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

           /* Navbar Styling */
        .navbar {
            background-color: #1e2a47;
        }

        .navbar-brand {
            color: #f39c12;
            font-size: 24px;
            font-weight: bold;
            padding-left: 20px;
        }

        .navbar-brand:hover {
            color: #f39c12;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-size: 16px;
            margin-right: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #f39c12;
        }

        .navbar-toggler {
            border-color: #f39c12;
        }

        .cart-icon {
            color: #f39c12;
            font-size: 24px;
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #f39c12;
            color: white;
            font-size: 12px;
            border-radius: 50%;
            padding: 5px;
        }



body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 400px;
            margin-top: 70px;
            margin-bottom: 80px;
        }

        .card {
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .card-header {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            text-align: center;
        }

        .form-control {
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 20px;
            display: none;
        }

        .link {
            text-align: center;
            margin-top: 20px;
        }

        .link a {
            color: #007bff;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .order-card {
                padding: 20px;
            }

            .order-price {
                font-size: 20px;
            }
        }

        /* Footer Section */
        footer {
            background-color: #1e2a47;
            color: white;
            padding: 20px 20px;
            text-align: center;
            margin-top: 120px;
        }

        footer h5 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        footer p,
        footer ul li a {
            font-size: 16px;
            margin-bottom: 10px;
        }

        footer a {
            text-decoration: none;
            color: #f39c12;
        }

        footer a:hover {
            color: #fff;
        }

        footer .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        footer .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        footer .col-lg-4, footer .col-md-6 {
            margin-bottom: 20px;
        }



    </style>
</head>
<body>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="/home">RenoBooks</a>

            <!-- Navbar Toggle for Small Screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


<div class="container">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <p class="text-center" style="font-size: 18px; color: #6c757d;">Sign in to continue shopping</p>
            <form id="loginForm">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="error-message" id="errorMessage">Invalid email or password</div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            <div class="link">
                <p>Don't have an account? <a href="/register">Sign up</a></p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(e) {
            e.preventDefault();
            // Here you would typically validate the input with backend/server.
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            // Simple validation for demonstration (replace with actual validation)
            if (email === "john@example.com" && password === "password123") {
                // Successful login, redirect or show success message.
                alert("Login successful!");
            } else {
                // Show error message if credentials are incorrect
                document.getElementById("errorMessage").style.display = "block";
            }
        });
    </script>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Contact Section -->
                <div class="col-lg-4 col-md-6">
                    <h5>Contact Us</h5>
                    <p>Email: <a href="mailto:contact@renobooks.com">contact@renobooks.com</a></p>
                    <p>Phone: +1 (555) 123-4567</p>
                </div>

                <!-- Quick Links Section -->
                <div class="col-lg-4 col-md-6">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="book-list.html">Book List</a></li>
                        <li><a href="order-history.html">Order History</a></li>
                    </ul>
                </div>

                <!-- Social Media Section -->
                <div class="col-lg-4 col-md-6">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://facebook.com">Facebook</a></li>
                        <li><a href="https://twitter.com">Twitter</a></li>
                        <li><a href="https://instagram.com">Instagram</a></li>
                        <li><a href="https://linkedin.com">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-3">
                <p>&copy; 2025 RenoBooks. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

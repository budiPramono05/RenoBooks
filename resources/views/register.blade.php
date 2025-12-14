<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            padding-top: 80px;
            background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) ,url("/IMG/books.jpg");
        }

        .container {
            max-width: 1000px;
        }

        .card {
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 20px;
            display: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Create Account
            </div>
            <p class="text-center" style="font-size: 18px; color: #6c757d;">Join RenoBooks today</p>
            <form id="registerForm">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" class="form-control" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" class="form-control" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" class="form-control" placeholder="Address" required>
                </div>
                <div class="form-group">
                    <label for="phone">No Telp</label>
                    <input type="text" id="phone" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="error-message" id="errorMessage">Passwords do not match!</div>
                <button type="submit" class="btn btn-primary">Create Account</button>
            </form>
            <div class="link">
                <p>Already have an account? <a href="/login">Sign in</a></p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(e) {
            e.preventDefault();

            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                // Show error message if passwords do not match
                document.getElementById("errorMessage").style.display = "block";
            } else {
                // Process registration (you can replace this with your actual backend logic)
                alert("Registration successful!");
            }
        });
    </script>

</body>
</html>

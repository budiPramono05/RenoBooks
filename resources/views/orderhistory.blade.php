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




        .container {
            max-width: 1100px;

        }

        .header {
            font-size: 36px;
            font-weight: 700;
            color: #333;
            margin-bottom: 40px;
            text-align: center;
        }

        .order-history{
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .order-card {
            align-content: center;
            background-color: #e2e1e1;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            width: 40%;;
        }

        .order-card:hover {
            transform: translateY(-5px);
        }

        .order-id {
            font-size: 22px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
        }

        .status {
            font-weight: bold;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 14px;
            text-transform: capitalize;
            margin-bottom: 20px;
            display: inline-block;
        }

        .status.delivered {
            background-color: #28a745;
            color: white;
        }

        .status.in-transit {
            background-color: #007bff;
            color: white;
        }

        .status.pending {
            background-color: #ffc107;
            color: white;
        }

        .status.completed {
            background-color: #6c757d;
            color: white;
        }

        .order-details {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .order-title{
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .order-price {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .order-date {
            font-size: 14px;
            color: #6c757d;
        }

        .btn-detail {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-top: 20px;
            font-weight: bold;
        }

        .btn-detail:hover {
            background-color: #0056b3;
        }

        .order-history {
            margin-top: 20px;
        }

        .order-card .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .order-history .order-card:last-child {
            margin-bottom: 0;
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
            margin-top: 30px;
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

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/booklist">Book List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orderhistory">Order History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


<div><h1 class="order-title">Order History</h1></div>

   <div class="order-history">
            <!-- Order 1 -->
            <div class="order-card">
                <div class="order-id">ORD-001</div>
                <div class="status delivered">Delivered</div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="order-details">
                            <p><strong>The Midnight Library</strong> × 1</p>
                            <p><strong>Atomic Habits</strong> × 1</p>
                        </div>
                        <div class="order-date">1/15/2024</div>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="order-price">$45.98</div>
                        <a href="/bookdetail" class="btn-detail">Detail</a>
                    </div>
                </div>
            </div>

            <!-- Order 2 -->
            <div class="order-card">
                <div class="order-id">ORD-002</div>
                <div class="status in-transit">In Transit</div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="order-details">
                            <p><strong>The Silent Patient</strong> × 1</p>
                        </div>
                        <div class="order-date">1/20/2024</div>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="order-price">$22.50</div>
                        <a href="/bookdetail" class="btn-detail">Detail</a>
                    </div>
                </div>
            </div>

            <!-- Order 3 -->
            <div class="order-card">
                <div class="order-id">ORD-003</div>
                <div class="status pending">Pending</div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="order-details">
                            <p><strong>Where the Crawdads Sing</strong> × 2</p>
                        </div>
                        <div class="order-date">2/5/2024</div>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="order-price">$39.98</div>
                        <a href="/bookdetail" class="btn-detail">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

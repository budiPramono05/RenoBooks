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

        /* Search Bar Section */
        .search-bar-section {
            background-color: #7e7e7e;
            padding: 40px 20px;
            text-align: center;
        }

        .search-bar-section input {
            width: 80%;
            max-width: 600px;
            padding: 12px;
            font-size: 18px;
            border-radius: 30px;
            border: 1px solid #ccc;
        }

        .search-bar-section input:focus {
            outline: none;
            border-color: #f39c12;
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

        /* Book List Section */
        .book-list-section {
            padding: 60px 20px;
            background-color: #f4f4f4;
        }

        .book-list-section h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            color: #333;
        }

        .book-card {
            background-color: white;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 20px;
            text-align: center;
            width: 100%;
            max-width: 350px;
            padding-bottom: 20px;
        }

        .book-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 50px rgba(0, 0, 0, 0.2);
        }

        .book-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-bottom: 2px solid #f1f1f1;
        }

        .book-card-body {
            padding: 20px;
        }

        .book-card-body h4 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
            font-weight: bold;
        }

        .book-card-body p {
            font-size: 20px;
            margin-bottom: 20px;
            color: #666;
        }

        .book-card-body .btn {
            background-color: #f39c12;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .book-card-body .btn:hover {
            background-color: #e67e22;
        }

        /* Grid Layout */
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 40px;
            justify-items: center;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .book-card-body h4 {
                font-size: 20px;
            }

            .book-card-body p {
                font-size: 18px;
            }

            .book-card-body .btn {
                font-size: 14px;
                padding: 8px 20px;
            }

            .search-bar-section input {
                width: 90%;
            }
        }


        /* Footer Section */
        footer {
            background-color: #1e2a47;
            color: white;
            padding: 30px 20px;
            text-align: center;
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




    <!-- Search Bar Section -->
    <section class="search-bar-section">
        <input type="text" id="search" placeholder="Search for books...">
    </section>

    <!-- Book List Section -->
    <section class="book-list-section">
        <div class="container">
            <h2>Book Lists</h2>
            <p class="text-center">Browse our complete collection of books</p>
            <div class="book-grid">
                <!-- Book 1 -->
                <div class="book-card">
                    <img src="{{asset('IMG/BookCover.jpg')}}" alt="Book Cover 1">
                    <div class="book-card-body">
                        <h4>The Midnight Library</h4>
                        <p>Matt Haig</p>
                        <p>$24.99</p>
                        <a href="/bookdetail" class="btn">Detail</a>
                    </div>
                </div>
                <!-- Book 2 -->
                <div class="book-card">
                    <img src="{{asset('IMG/BookCover.jpg')}}" alt="Book Cover 2">
                    <div class="book-card-body">
                        <h4>Atomic Habits</h4>
                        <p>James Clear</p>
                        <p>$19.99</p>
                        <a href="/bookdetail" class="btn">Detail</a>
                    </div>
                </div>
                <!-- Book 3 -->
                <div class="book-card">
                    <img src="{{asset('IMG/BookCover.jpg')}}" alt="Book Cover 3">
                    <div class="book-card-body">
                        <h4>The Silent Patient</h4>
                        <p>Alex Michaelides</p>
                        <p>$22.50</p>
                        <a href="/bookdetail" class="btn">Detail</a>
                    </div>
                </div>
                <!-- Book 4 -->
                <div class="book-card">
                    <img src="{{asset('IMG/BookCover.jpg')}}" alt="Book Cover 4">
                    <div class="book-card-body">
                        <h4>Educated</h4>
                        <p>Tara Westover</p>
                        <p>$18.99</p>
                        <a href="/bookdetail" class="btn">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RenoBooks</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Hero Section */
        .hero-section {
            background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) ,url("/IMG/books.jpg");
            color: white;
            padding: 100px 20px;
            text-align: center;
            position: relative;
        }

        .hero-section h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 18px;
            margin-bottom: 40px;
        }

        .hero-section .btn {
            background-color: #f39c12;
            color: white;
            font-size: 18px;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
        }

        .hero-section .btn:hover {
            background-color: #e67e22;
        }

        /* New Arrivals Section */
        .newest-books-section {
            background-color: #f4f4f4;
            padding: 80px 20px;
        }

        .newest-books-section h2 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            color: #333;
        }

        /* Large Book Card Styling */
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
            height: 400px;
            object-fit: cover;
            border-bottom: 2px solid #f1f1f1;
        }

        .book-card-body {
            padding: 30px 20px;
        }

        .book-card-body h4 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
            font-weight: bold;
        }

        .book-card-body p {
            font-size: 22px;
            margin-bottom: 20px;
            color: #666;
        }

        .book-card-body .btn {
            background-color: #f39c12;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 18px;
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

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .book-card-body h4 {
                font-size: 20px;
            }

            .book-card-body p {
                font-size: 18px;
            }

            .book-card-body .btn {
                font-size: 16px;
                padding: 10px 20px;
            }

            .hero-section h1 {
                font-size: 36px;
            }

            .hero-section p {
                font-size: 16px;
            }
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
    </style>
</head>
<body>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Brand Logo -->
            <a class="navbar-brand" href="#">RenoBooks</a>

            <!-- Navbar Toggle for Small Screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/booklist">Book List</a>
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
    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Discover Your Next Great Read</h1>
        <p>Explore our curated collection of bestsellers, new releases, and timeless classics.</p>
        <a href="/booklist" class="btn">Browse All Books</a>
    </section>

    <!-- Newest Books Section -->
    <section class="newest-books-section" id="new-arrivals">
        <div class="container">
            <h2>Newest Arrivals</h2>
            <div class="book-grid">
                <!-- Book 1 -->
                <div class="book-card">
                    <img src="{{asset('IMG/BookCover.jpg')}}" alt="Book Cover 1">
                    <div class="book-card-body">
                        <h4>The Midnight Library</h4>
                        <p>$24.99</p>
                        <a href="/bookdetail" class="btn">Detail</a>
                    </div>
                </div>
                <!-- Book 2 -->
                <div class="book-card">
                    <img src="{{asset('IMG/BookCover.jpg')}}" alt="Book Cover 2">
                    <div class="book-card-body">
                        <h4>Atomic Habits</h4>
                        <p>$19.99</p>
                        <a href="/bookdetail" class="btn">Detail</a>
                    </div>
                </div>
                <!-- Book 3 -->
                <div class="book-card">
                    <img src="{{asset('IMG/BookCover.jpg')}}" alt="Book Cover 3">
                    <div class="book-card-body">
                        <h4>The Silent Patient</h4>
                        <p>$22.50</p>
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

    <!-- Bootstrap JS, Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

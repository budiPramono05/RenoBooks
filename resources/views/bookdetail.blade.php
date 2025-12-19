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

/* Book Detail Section */
        .book-detail-section {
            background-color: #f4f4f4;
            padding: 50px 20px;
        }

        .book-detail-section h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #333;
        }

        /* Cart Summary */
        .cart-summary {
            background-color: #f39c12;
            color: white;
            padding: 20px;

            font-size: 18px;
            font-weight: bold;
        }

        .cart-summary .cart-items {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .cart-summary .cart-total {
            font-size: 24px;
            font-weight: bold;
        }



        /* Checkout Button on the side */
        .checkout-btn {
            background-color: #27ae60;  /* Green color for checkout */
            color: white;
            padding: 8px 20px;  /* Smaller padding for a smaller button */
            font-size: 14px;  /* Smaller font size */
            border-radius: 30px;
            text-decoration: none;
            position: fixed;
            bottom: 20px;  /* Position the button at the bottom */
            right: 20px;   /* Position the button on the right side */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);  /* Small shadow for better visibility */
        }

        .checkout-btn:hover {
            background-color: #2ecc71;  /* Lighter green on hover */
        }


        /* Book Info Layout */
        .book-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }

        .book-image {
            width: 45%;
        }

        /* Book Image Styling */
        .book-image img {
            width: 80%;
            max-width: 300px;
            height: auto;
            border-radius: 10px;
        }

        .book-details {
            width: 45%;
        }

        .book-details h3 {
            font-size: 28px;
            color: #333;
        }

        .book-details p {
            font-size: 18px;
            color: #666;
            margin: 10px 0;
        }

        .book-details .price {
            font-size: 24px;
            color: #f39c12;
            margin-bottom: 20px;
        }

        .book-details .btn {
            background-color: #f39c12;
            color: white;
            padding: 30px 30px;
            border-radius: 30px;
            font-size: 18px;
            text-decoration: none;
            text-align: center;
        }

        .book-details .btn:hover {
            background-color: #e67e22;
        }

        .quantity-section {
            margin-top: 30px;
        }

        .quantity-section input {
            width: 60px;
            padding: 8px;
            text-align: center;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .quantity-section .stock {
            font-size: 18px;
            color: #666;
            margin-top: 10px;
        }

        .back-btn {
            background-color: #928d86;
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 18px;
            text-decoration: none;
            margin-top: 30px;
        }

        .back-btn:hover {
            background-color: #e67e22;
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
            <a class="navbar-brand" href="/">RenoBooks</a>

            <!-- Navbar Toggle for Small Screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/books">Book List</a>
                </li>

                @auth
                    <!-- JIKA SUDAH LOGIN -->
                    <li class="nav-item">
                        <a class="nav-link" href="/orderhistory">Order History</a>
                    </li>

                    <li class="nav-item">
                        <span class="nav-link text-warning">
                            Hi, {{ Auth::user()->name }}
                        </span>
                    </li>

                    <li class="nav-item">
                         <form action="/logout" method="POST" class="d-inline">
                          @csrf
                              <button type="submit"
                                  class="nav-link btn btn-link text-white px-3"
                                     style="text-decoration: none;">
                                      Logout
                                </button>
                        </form>
                    </li>

                     @endauth

                     @guest
                    <!-- JIKA BELUM LOGIN -->
                      <li class="nav-item">
                        <a class="nav-link" href="/login">Sign In</a>
                      </li>
                    @endguest

            </ul>
        </div>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


<!-- Cart Summary -->
<section class="cart-summary">
    <div class="container">
        <div class="cart-items">
            <span>Items in Cart: {{ session('cart') ? count(session('cart')) : 0 }}</span>
            <span>
                Total: Rp {{ number_format(session('cart_total', 0), 0, ',', '.') }}
            </span>
        </div>
    </div>

    <a href="{{ route('checkout') }}" class="btn checkout-btn">Checkout</a>
</section>

<!-- Book Detail Section -->
<section class="book-detail-section">
    <div class="container">
        <h2>Book Detail</h2>

        <div class="book-info">
            <!-- Book Image -->
            <div class="book-image">
                <img 
                    src="{{ $book->cover_image }}"
                        alt="{{ $book->title }}"
                        referrerpolicy="no-referrer"
                >
            </div>

            <!-- Book Details -->
            <div class="book-details">
                <h3>{{ $book->title }}</h3>
                <p>by {{ $book->author }}</p>

                <p class="description">
                    {{ $book->desc }}
                </p>

                <p class="price">
                    Rp {{ number_format($book->price, 0, ',', '.') }}
                </p>

                <!-- Quantity and Stock -->
                <form method="POST" action="{{ route('cart.add', $book->id) }}">
                    @csrf

                    <div class="quantity-section">
                        <label for="quantity">Quantity:</label>
                        <input 
                            type="number" 
                            name="qty" 
                            value="1" 
                            min="1" 
                            max="{{ $book->stock }}"
                        >

                        <p class="stock">
                            Stock Available: {{ $book->stock }}
                        </p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn">
                            Add to Cart
                        </button>

                        <a href="{{ route('books.list') }}" class="back-btn">
                            Back to Books
                        </a>
                    </div>
                </form>
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

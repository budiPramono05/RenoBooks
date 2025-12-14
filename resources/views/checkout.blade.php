<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Page</title>
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

        /* Content */
       body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;

        }

        .container {
            max-width: 1000px;
        }

        .checkout-header {
            font-size: 32px;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .book-info, .order-summary {
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        .address-info {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }



        .book-info {
            display: flex;
            flex-wrap: nowrap;
        }

        .book-info img {
            width: 100%;
            max-width: 150px;
            margin-right: 20px;

        }

        .book-info .book-details {
            display: flex;
            flex-direction: column;

        }

        .book-info .book-details p {
            margin: 5px 0;
        }

        .order-summary {
            width: 35%;
        }

        .address-info {
            width: 60%;
        }

        .btn-custom {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .order-summary table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-summary td {
            padding: 10px;
            text-align: right;
        }

        .order-summary td:first-child {
            text-align: left;
        }

        .order-summary td:last-child {
            font-weight: bold;
        }
         .quantity-control {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .quantity-control input {
            width: 60px;
            text-align: center;
        }

        .quantity-control button {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #007bff;
            color: white;
            border: none;
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



   <div class="container">
    <br>
        <h2 class="checkout-header">Checkout</h2>

        <!-- Book Information -->
        <div class="row">
            <div class="col-md-7 book-info">
                <img src="{{asset('IMG/BookCover.jpg')}}" alt="Book Cover">
                <div class="book-details">
                    <p><strong>Judul:</strong> Atomic Habits</p>
                    <p><strong>Penulis:</strong> James Clear</p>
                    <p><strong>Harga per buku:</strong> $19.99</p>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <div class="quantity-control">
                            <input type="number" id="quantity" value="1" min="1" onchange="updateTotalPrice()">
                        </div>
                    </div>
                    <p><strong>Total Harga:</strong> $19.99</p>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-md-4 order-summary">
                <h4>Ringkasan Pesanan</h4>
                <table>
                    <tr>
                        <td><strong>Subtotal (1 buku)</strong></td>
                        <td>$19.99</td>
                    </tr>
                    <tr>
                        <td><strong>Ongkos Kirim</strong></td>
                        <td>$4.99</td>
                    </tr>
                    <tr>
                        <td><strong>Pajak (10%)</strong></td>
                        <td>$2.00</td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td>$26.98</td>
                    </tr>
                </table>
                <button class="btn btn-primary btn-custom">Konfirmasi Pesanan</button>
                <button class="btn btn-secondary btn-custom" onclick="window.history.back();">Kembali</button>
            </div>
        </div>

        <!-- Address Information -->
        <div class="address-info">
            <h4>Alamat Pengiriman</h4>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <input type="text" class="form-control" id="address" value="Jl. Contoh No. 123" readonly>
                </div>
                <div class="form-group">
                    <label for="city">Kota:</label>
                    <input type="text" class="form-control" id="city" value="Jakarta" readonly>
                </div>
                <div class="form-group">
                    <label for="province">Provinsi:</label>
                    <input type="text" class="form-control" id="province" value="DKI Jakarta" readonly>
                </div>
                <div class="form-group">
                    <label for="postal-code">Kode Pos:</label>
                    <input type="text" class="form-control" id="postal-code" value="12345" readonly>
                </div>
            </form>
        </div>


    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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

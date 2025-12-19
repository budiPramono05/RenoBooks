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
            background-image:
                linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url("{{ asset('IMG/books.jpg') }}");
            background-size: cover;
        }

        .container { max-width: 1000px; }

        .card {
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        .card-header {
            font-size: 32px;
            font-weight: 700;
            text-align: center;
        }

        .btn-primary { width: 100%; }

        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">Create Account</div>
        <p class="text-center text-muted">Join RenoBooks today</p>

        {{-- ERROR VALIDATION --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- FORM --}}
        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="form-row">
                <div class="col-md-6">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control"
                        value="{{ old('first_name') }}" required>
                </div>

                <div class="col-md-6">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control"
                        value="{{ old('last_name') }}" required>
                </div>
            </div>

            <label>Email</label>
            <input type="email" name="email" class="form-control"
                value="{{ old('email') }}" required>

            <label>Password</label>
            <input type="password" name="password" class="form-control" required>

            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>

            <label>Alamat</label>
            <input type="text" name="address" class="form-control"
                value="{{ old('address') }}" required>

            <label>No Telp</label>
            <input type="text" name="phone" class="form-control"
                value="{{ old('phone') }}" required>

            <button type="submit" class="btn btn-primary mt-3">
                Create Account
            </button>
        </form>

        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
        </div>
    </div>
</div>

</body>
</html>

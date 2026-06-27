<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", sans-serif;
        }

        .login-card {
            width: 380px;
            padding: 30px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
        }

        .btn-primary {
            border-radius: 10px;
            padding: 10px;
            width: 100%;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .small-text {
            text-align: center;
            margin-top: 15px;
            font-size: 13px;
        }

        .small-text a {
            text-decoration: none;
        }
    </style>

</head>
<body>

<div class="login-card">

    <h3 class="title">Student Login</h3>

    <form>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter email">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Enter password">
        </div>

        <button class="btn btn-primary">Login</button>

    </form>

    <div class="small-text">
        Don't have an account? <a href="#">Register</a>
    </div>

</div>

</body>
</html>
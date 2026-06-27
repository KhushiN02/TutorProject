<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:linear-gradient(135deg,#0d6efd,#6610f2);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Segoe UI,sans-serif;
        }

        .card{
            width:420px;
            border-radius:20px;
            padding:30px;
            border:none;
            box-shadow:0 10px 35px rgba(0,0,0,.2);
        }

        input{
            margin-bottom:15px;
        }
    </style>

</head>

<body>

<div class="card">

<h2 class="text-center mb-4">Create Account</h2>

<form>

<input type="text" class="form-control" placeholder="Full Name">

<input type="email" class="form-control" placeholder="Email">

<input type="password" class="form-control" placeholder="Password">

<input type="password" class="form-control" placeholder="Confirm Password">

<button class="btn btn-primary w-100 mt-3">
Register
</button>

</form>

<p class="text-center mt-3">

Already have an account?

<a href="/login">Login</a>

</p>

</div>

</body>
</html>
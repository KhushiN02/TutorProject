<!DOCTYPE html>
<html>
<head>

<title>Forgot Password</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#0d6efd,#6610f2);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
font-family:Segoe UI;
}

.card{
width:400px;
padding:30px;
border:none;
border-radius:20px;
box-shadow:0 10px 35px rgba(0,0,0,.2);
}

</style>

</head>

<body>

<div class="card">

<h3 class="text-center mb-4">

Forgot Password

</h3>

<form>

<input
type="email"
class="form-control mb-3"
placeholder="Enter your email">

<button class="btn btn-primary w-100">

Send Reset Link

</button>

</form>

<p class="text-center mt-3">

<a href="/login">

Back to Login

</a>

</p>

</div>

</body>

</html>
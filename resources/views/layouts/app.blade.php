<!DOCTYPE html>
<html>
<head>
    <title>Student Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
       body {
    background: #f4f6f9;
    transition: all 0.4s ease;
    font-family: "Segoe UI", sans-serif;
}

/* GLASS SIDEBAR */
.sidebar {
    width: 240px;
    height: 100vh;
    position: fixed;
    left: 0;
    top: 0;

    background: rgba(13, 110, 253, 0.9);
    backdrop-filter: blur(10px);

    padding-top: 20px;
    transition: all 0.4s ease;
    box-shadow: 2px 0 20px rgba(0,0,0,0.1);
}

.sidebar a {
    display: block;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.sidebar a:hover {
    background: rgba(255,255,255,0.15);
    transform: translateX(8px);
    border-left: 4px solid white;
}

/* MAIN AREA */
.main {
    margin-left: 240px;
    padding: 25px;
}

/* MODERN CARDS */
.card {
    border: none;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

/* DARK MODE */
body.dark {
    background: #0b1220;
    color: #e5e7eb;
}

body.dark .card {
    background: #111827;
    color: white;
}

body.dark .sidebar {
    background: rgba(2, 6, 23, 0.95);
}

/* TOGGLE SWITCH */
.switch {
  position: fixed;
  top: 15px;
  right: 15px;
  z-index: 999;
}

.switch input {
  display: none;
}

.slider {
  width: 60px;
  height: 30px;
  background: #ccc;
  display: inline-block;
  border-radius: 50px;
  position: relative;
  cursor: pointer;
  transition: 0.4s;
}

.slider:before {
  content: "";
  position: absolute;
  height: 24px;
  width: 24px;
  left: 3px;
  top: 3px;
  background: white;
  border-radius: 50%;
  transition: 0.4s;
}

input:checked + .slider {
  background: #0d6efd;
}

input:checked + .slider:before {
  transform: translateX(30px);
}
    </style>

</head>
<body>
  <button onclick="toggleDark()"
        class="btn btn-dark btn-sm dark-toggle">
    🌙
</button>
<div class="switch">

    <label>
        <input type="checkbox" id="darkToggle" onchange="toggleDark()">
        <span class="slider"></span>
    </label>

</div>

@include('layouts.sidebar')

<div class="main">

    @yield('content')

</div>

</body>
<script>
function toggleDark() {
    document.body.classList.toggle("dark");

    let toggle = document.getElementById("darkToggle");

    let isDark = document.body.classList.contains("dark");

    localStorage.setItem("darkMode", isDark ? "on" : "off");
}

// Load saved theme
window.onload = function () {

    let toggle = document.getElementById("darkToggle");

    let saved = localStorage.getItem("darkMode");

    // Apply saved mode
    if (saved === "on") {
        document.body.classList.add("dark");
        if (toggle) toggle.checked = true;
    }

    // Auto system mode (first time only)
    if (!saved && window.matchMedia("(prefers-color-scheme: dark)").matches) {
        document.body.classList.add("dark");
        if (toggle) toggle.checked = true;
    }
};
</script>
</html>
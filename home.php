<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #fffde7; }
        .navbar-custom { background-color: #fbc02d !important; }
        .card-home { border-top: 6px solid #fbc02d; border-radius: 12px; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark" href="#">Dashboard</a>
            <a href="logout.php" class="btn btn-dark btn-sm px-3">Logout</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card card-home shadow p-5 bg-white">
                    <h1 class="display-6 mb-3 fw-bold text-dark">Welcome, <span class="text-warning"><?= htmlspecialchars($_SESSION['username']); ?></span>! </h1>
                    <p class="text-muted">You have successfully logged into the system.</p>
                    <hr class="my-4">
                    <p class="small text-secondary">This page is protected by a session and anti-cache security.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
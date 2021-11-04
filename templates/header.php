<!doctype html>
<html>
<head>
    <title>My page, projects, ideas etc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Demos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" aria-current="page" href="<?= base_url('todo') ?>">Todo php</a>
        <a class="nav-link" href="#">Counter</a>
        <a class="nav-link" href="#">Timer</a>
        <a class="nav-link" href="#">Stopwatch</a>
        <a class="nav-link" href="#">Timeblocker</a>
        <a class="nav-link" href="#">Workout log</a>
      </div>
    </div>
  </div>
</nav>
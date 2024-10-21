<div class="containe">
    <h1>Selamat Datang di Web saya</h1>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jumbotron</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat Datang</h1>
        <p class="col-md-8 fs-4">Halo, nama saya <?= $data['nama'] ?></p>
        <button class="btn btn-primary btn-lg" type="button">Learn more</button>
      </div>
    </div>
  </div>

  <!-- Link to Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


</div>
<!-- v_print_tiket.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cetak E-Tiket</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="http://localhost/kolamrenang/assets/css/ticket.css" rel="stylesheet">
  <style>
    /* CSS untuk mengatur tampilan tiket */
    .ticket-card {
      max-width: 540px;
      margin: 0 auto;
    }

    .ticket-body {
      text-align: center;
    }

    .ticket-title {
      font-size: 24px;
    }

    .ticket-subtitle {
      font-size: 18px;
    }

    .barcode {
      font-size: 60px;
    }
  </style>
</head>

<body>
  <section class="container">
    <div class="row">
      <div class="col-lg-12 mt-4">
        <div class="card ticket-card">
          <div class="card-body ticket-body">
            <h5>E-TIKET</h5>
            <h5>Museum Adityawarman</h5>
            <hr>
            <h5 class="card-title ticket-title"><?= $tiket['kode_tiket']; ?></h5>
            <p class="card-text ticket-subtitle"><?= $tiket['nama']; ?> (<?= $tiket['email']; ?>)</p>
            <p class="card-text ticket-subtitle"><?= $tiket['tgl']; ?> (<?= $tiket['jam']; ?>)</p>
            <p class="card-text ticket-subtitle"><?= $tiket['jumlah']; ?> Tiket</p>
            <hr>
            <h5 class="barcode"><?= $tiket['kode_tiket']; ?></h5>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
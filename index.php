<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas 11 kriptsha1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
      <h2> Contoh SHA1 Pada QR Code</h2>
      <form action="" method="post">
        <div class="mb-3 mt-3">
          <label for="email">Email :</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php 
    if (isset($_POST['email'])) {
      include "phpqrcode/qrlib.php";
      $penyimpanan = "temp/";
      if (!file_exists($penyimpanan)) mkdir($penyimpanan);
      $isiqr=sha1(filter_var($_POST['email'],FILTER_SANITIZE_STRING));
      $isi = $isiqr;
      QRcode::png($isi, $penyimpanan. '004_4.png', QR_ECLEVEL_H, 4, 15);
      echo '<img src="'.$penyimpanan.'/004_4.png" class="rounded" alt="Cinque Terre">';

    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keranjang Belanja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    .keranjang {
      margin-top: 20px;
    }

    .item {
      display: flex;
      margin-bottom: 20px;
      border-bottom: 1px solid #ccc;
      padding-bottom: 20px;
    }

    .item img {
      margin-right: 20px;
    }

    .item-info {
      flex-grow: 1;
    }

    .item-info h2 {
      margin: 0;
    }

    .total {
      margin-top: 20px;
      text-align: right;
    }

    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Keranjang Belanja</h1>
    <div class="keranjang">
      <div style="border: 1px solid red; padding: 10px 15px; width: 200px; color: white; background-color: pink; margin-left: 580px;">Diskon : 50%</div>
      <div class="item">
        <img src="img/Product/<?= $_GET['foto'] ?>" alt="Product Image">
        <div class="item-info">
          <h2><?= $_GET["nama"]; ?></h2>
          <p>Harga: Rp. <?= $_GET["harga"]; ?></p>
          <p><?= $_GET["deskripsi"]; ?>
          </p>
        </div>
      </div>
      <form method="post">
        <input type="number" placeholder="masukan jumlah pembelian" name="jumlah">
        <button type="submit" name="input">submit</button>
      </form>
    </div>
  </div>
  <div class="total">
    <?php if (isset($_POST['input'])) {
      $jumlah = $_POST["jumlah"];
      $hasil = $_GET["harga"] * $jumlah;
    ?>
    <center><h2>Total Belanja: Rp. <?= $hasil; ?>000 </h2></center>
    <?php } ?>
    <center><button onclick="alert('produk telah dibeli');">Checkout</button></center>
  </div>
  </div>
  <br>
  <center><a href="index1.php" class="btn btn-danger">kembali</a></center>
</body>

</html>
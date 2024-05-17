<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <form action="form_belanja.php" method="POST">
        <h3>Belanja Online</h3>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Customer</label> 
            <div class="col-3">
                <input id="text" name="customer" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_tv" type="radio" class="custom-control-input" value="TV"> 
                    <label for="radio_tv" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_kulkas" type="radio" class="custom-control-input" value="Kulkas"> 
                    <label for="radio_kulkas" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_mesincuci" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                    <label for="radio_mesincuci" class="custom-control-label">Mesin Cuci</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-3">
                <input id="text1" name="jumlah" placeholder="Jumlah" type="number" required="required" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<?php
if(isset($_POST['proses'])) {
    $customer = $_POST["customer"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];

$harga_tv = 400000;
$harga_Kulkas = 500000;
$harga_MesinCuci = 600000;

$totalHarga = 0;
if($produk == "TV") {
    $totalHarga = $harga_tv * $jumlah;
} elseif($produk == "Kulkas") {
    $totalHarga = $harga_Kulkas * $jumlah;
} elseif($produk == "Mesin Cuci") {
    $totalHarga = $harga_MesinCuci * $jumlah;
}

    echo "<h4>Terima kasih telah berbelanja!</h4>";
    echo "<p>Nama Customer: $customer</p>";
    echo "<p>Produk Pilihan: $produk</p>";
    echo "<p>Jumlah Beli: $jumlah</p>";
    echo "<p>Total Belanja: $totalHarga<p>";

}
?>
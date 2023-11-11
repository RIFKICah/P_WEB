<!DOCTYPE html>
<html lang="Indonesia">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Produk</title>
</head>
<body>
    <h1>Rincian Produk</h1>
    <?php
    // Misalnya, Anda memiliki data item yang ingin ditampilkan
    $Produk = [
        'id' => 1,
        'variasi' => 'Variasi Produk',
        'name' => 'Nama Produk',
        'description' => 'Deskripsi Produk yang panjang...',
        'harga' => 100.00,
    ];

    if ($Produk) {
    ?>
    <h2><?php echo $Produk['name']; ?></h2>
    <h1><?php echo $Produk['Variasi Produk']; ?></h1>
    <p><?php echo $Produk['description']; ?></p>

    <p>Harga: $<?php echo number_format($Produk['harga'], 2); ?></p>
    
    <img src="Produk_image.jpg" alt="<?php echo $Produk['name']; ?>">

    <form action="Toko/cart" method="post">
        <input type="hidden" name="Produk_id" value="<?php echo $Produk['id']; ?>">
        <button type="submit">Tambahkan ke Keranjang</button>
    </form>
    <?php
    } else {
        echo "tidak ditemukan.";
    }
    ?>
</body>
</html>

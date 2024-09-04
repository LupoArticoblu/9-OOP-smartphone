<?php
  include_once './Class/Telefono.php';
  include_once './Class/Spec.php';

  $iphone = new Telefono('Apple', 'iPhone 11', 1000, new Spec('IOS', 'Liquid display', 4, 'Intel Core i7'));

  $iphone->setImg('https://smarterstore.it/media/catalog/product/cache/f2e5a07c6f0c65171e445e7997c32db2/i/p/iphone11-black-select-2019_geo_emea_3_2.jpg');
  $iphone->setDiscount(10);
  //var_dump($iphone);
  //var_dump($iphone->getPrice());

  //del nuovo telefono non conosciamo le specifiche
  $samsung = new Telefono('Samsung', 'Galaxy S20', 800);
  //var_dump($samsung);

  $listaTelefoni = [$iphone, $samsung];

  //var_dump($listaTelefoni);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
  <title>Smartphone</title>
</head>
<body>
<table class="table table-striped table-hover table-bordered table-sm table-responsive text-center">
  <thead>
    <tr>
      <th scope="col">Marca</th>
      <th scope="col">Modello</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Immagine</th>
      <th scope="col">Display</th>
      <th scope="col">Ram</th>
      <th scope="col">Cpu</th>
      <th scope="col">Sistema operativo</th>
      <th scope="col">Prezzo con sconto</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($listaTelefoni as $phone) {
    ?>
    <tr>
      <td><?= $phone->producer ?></td>
      <td><?= $phone->model ?></td>
      <td>&euro; <?= $phone->price ?></td>
      <td><img style="width : 150px" src="<?= $phone->getImg() ?>"/></td>
      <td><?= $phone->spec?->display ?? '-'?></td>
      <td><?= $phone->spec?->ram ?? '-'?></td>
      <td><?= $phone->spec?->cpu ?? '-'?></td>
      <td><?= $phone->spec?->os ?? '-'?></td>
      <td>&euro; <?= $phone->getPrice() ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>
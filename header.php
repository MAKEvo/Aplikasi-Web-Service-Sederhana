<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Asem Lan Arang | Informasi Sejarah Bangunan Di Kota Semarang</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="index.php" class="navbar-brand page-scroll">Asem Lan Arang</a>
        </div>
        <p class="navbar-text">| Informasi Sejarah Bangunan Kota Semarang</p>
        

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="page-scroll">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php
                  $url='http://semarang.heritagejava.com/generatekategori.php';
                  $xml = simplexml_load_file($url);
                  foreach($xml->kategori as $xm){
                      echo '<li><a href="main.php?k='.$xm['id'].'&n='.$xm['namaKategori'].'">'.$xm['namaKategori'].'</a></li>';
                    }
                  ?>
              </ul>
            </li>
            <li><a href="index.php?#portfolio" class="page-scroll">Galeri</a></li>
            <li><a href="about.php" class="page-scroll">About</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- akhir navbar -->
<?php 

	include 'header.php';

	if (isset($_REQUEST['k'], $_REQUEST['n'])) {
		$k = $_REQUEST['k'];
		$n = $_REQUEST['n'];
		
	}
	$url='http://semarang.heritagejava.com/generatexml.php?kategori='.$k;
          $xml = simplexml_load_file($url);
 ?>
<div class="content"></div>
		<div class="row">
          <div class="col-sm-12 text-center">
            <h2 style="color: white;">Kategori <?php echo $n;  ?></h2>
            <hr>
          </div>
        </div>
<?php foreach ($xml->marker as $xm) : ?>
 <div class="container brd" style="background-image: url('img/sativa.png');">
 	<div class="row">
 	<div class="col-md-6 text-center rounded">
 		<?php echo '<img class="img-responsive" src="'.$xm['foto'].'" width="95%">'; ?>
 	</div>
 	<div class="col-md-4">
 		<?php echo '<h2>'.$xm['nama'].'</h2>';
 			  echo $xm['ket'];
 		 ?>
 	</div>
 </div>
 </div>
 <br>
 <?php endforeach; include'footer.php'?>
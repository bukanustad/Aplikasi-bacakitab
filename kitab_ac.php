<?php include 'head.php'; error_reporting(0);
		 if ($_GET['ertd'] === '1') {
				  	$kitabs = "Mabadi Fiqh";
				  	$id_kitab = 'mabadi_fiqh';
				  	$kate = "Anak Anak";
				  }elseif ($_GET['ertd'] === '2') {
				  	$kitabs = "Fathul Qorib";
				  	$id_kitab = 'qorib';
				  	$kate = "Remaja";
				  }elseif ($_GET['ertd'] === '3') {
				  	$kitabs = "Matan Jurmiyah";
				  	$id_kitab = 'jurmiyah';
				  	$kate = "Umum";
				  } ?>
<!--CSS Preloader GIF-->
<style type="text/css">
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #fff;
}
.preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  font: 14px arial;
}
</style>

<!--Javascript Preloader with Delay Option-->
<script>
$(document).ready(function(){
$(".preloader").delay(400).fadeOut();
})
</script>

<br />
<div class="preloader">
<div class="loading text-center">
<img src="assets/24.gif" width="200" />
    <br />
Harap Tunggu<br />
  </div>
</div>
</div>
<div>
	<div class="card">
		<div class="card-header bg-primary text-white">
			 <a href="./" class="btn btn-warning text-white">Kembali</a> <b>Maqro Kitab <?= $kitabs ?></b><span style="float: right;"><input type="text"  class="form-control w-100" placeholder="Cari Maqro" name="" autofocus=""u></span>
		</div>
		<div class="card-body">
			<?php 
			$kiya = mysqli_query($conn, "SELECT * FROM ertd WHERE kitab = '$_GET[ertd]'");
			$i = 1;
			while ($k = mysqli_fetch_array($kiya)) {
			 if ($k['kitab'] === '1') {
				  	$kitabs = "Mabadi Fiqh";
				  	$id_kitab = 'mabadi_fiqh';
				  	$kate = "Anak Anak";
				  }elseif ($k['kitab'] === '2') {
				  	$kitabs = "Fathul Qorib";
				  	$id_kitab = 'qorib';
				  	$kate = "Remaja";
				  }elseif ($k['kitab'] === '3') {
				  	$kitabs = "Matan Jurmiyah";
				  	$id_kitab = 'jurmiyah';
				  	$kate = "Umum";
				  } ?>
			<a href="kitab?source=<?= $id_kitab ?>&source_id=<?= $k['kitab'] ?>&id=<?= $k['maqro'] ?>" class="link" style="text-decoration: none;"><ul class="shadow" style="border-radius: 10px;height: 35px">
				<li style="list-style: none;font-weight: bold;align-items: center;"><?= $i++ .".". $k['bab'] ?></li>
			</ul></a><?php } ?>
			<style type="text/css">\
		</div>
	</div>
</div>
<?php include 'foot.php'; ?>
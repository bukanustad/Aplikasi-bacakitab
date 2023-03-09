<?php   include 'head.php'; error_reporting(0);
$semua = mysqli_query($conn, "select * FROM ertd");
$ht = mysqli_num_rows($semua);
if (isset($_POST['save'])) {
	$peserta = $_POST['peserta'];
	$kitab = $_POST['kitab'];
	$m_berapa = $_POST['m_berapa'];
	$m_sampai = $_POST['m_sampai'];
	$kelas = $_POST['kelas'];
	$kategori = $_POST['kategori'];
	$ql = mysqli_query($conn, "INSERT INTO peserta set nama = '$peserta', maqro_bab = '$kitab', kategori = '$kategori', m1 = '$m_berapa', m2 = '$m_sampai', kelas = '$kelas', status = ''");
	if ($ql) {
		  header('location:./');
	}
}
if (isset($_POST['add'])) {
  $banyak = $_POST['banyak'];
  $kitab = $_POST['kode_kitab'];
    echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=add_ms?s=$banyak&class=$kitab\">");
}

?>
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
$(".preloader").delay(500).fadeOut();
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
<div class="container" style="margin-top: 70px">
  <main>
    <div class="py-5 text-center">
     <a href="./"> <img class="d-block mx-auto mb-4 " src="assets/logonya.png" alt="" style="width: 200px"></a>
      <h2>Lomba Baca Kitab</h2>
      <small class="text-primary">Sekitar <?= $ht ?> Maqro Tersedia</small>
<script type="text/javascript">
    function start_timer(){
      var timer = document.getElementById("time").innerHTML;
      var arr = timer.split(":");
      var hour = arr[0];
      var min = arr[1];
      var sec = arr[2];
      if(sec == 0) {
        if(min == 0) {
          if(hour == 0) {
            alert("Waktu Habis");
            window.location.reload();
            return;
          }
          hour--;
          min = 60;
          if(hour < 10) hour = "0" + hour;
        }
        min--;
        if(min < 10) min = "0" + min;
        sec = 59;
      }
      else sec--;
      if (sec < 10) sec == "0" + sec;
 
      document.getElementById("time").innerHTML = hour + ":" + min + ":" + sec;
      setTimeout(start_timer, 1000);
    }
  </script>
    </div>
    <div class="text-center">
     <form action="" method="get"> <input type="text" placeholder="Cari Sebuah Pembahasan" style="border-radius: 20px" class="form-control" name="cari" autocomplete="off" autofocus></form><br>
   
          </div>
  </main>

       	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn, "SELECT * from ertd where bab like '%".$cari."%'");				
	}else{
		$data = "Hasil";		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){

		 if ($d['kitab'] === '1') {
				  	$kitabs = "Mabadi Fiqh";
				  	$id_kitab = 'mabadi_fiqh';
				  	$kate = "Anak Anak";
				  }elseif ($d['kitab'] === '2') {
				  	$kitabs = "Fathul Qorib";
				  	$id_kitab = 'qorib';
				  	$kate = "Remaja";
				  }elseif ($d['kitab'] === '3') {
				  	$kitabs = "Matan Jurmiyah";
				  	$id_kitab = 'jurmiyah';
				  	$kate = "Umum";
				  }
	?>
		         <ul class="list-group shadow" style="margin-bottom: 6px;width:60%;margin-left: auto;margin-right: auto;">
				  <a href="kitab?source=<?= $id_kitab ?>&source_id=<?= $d[kitab] ?>&id=<?= $d['maqro'] ?>" style="text-decoration: none;"><li class="list-group-item"><b class="text-primary"><?= $d['bab'] ?></b> | Kitab <?= $kitabs ?>
				  <?php 
				  if ($d['kitab'] === "1") {
				  	echo "<span class='badge bg-success' style='float: right;'>Anak</span>";
				  }else if ($d['kitab'] === "2"){
				  	echo "<span class='badge bg-danger' style='float: right;'>Remaja</span>";
				  }else if ($d['kitab'] === "3"){
            echo "<span class='badge bg-warning' style='float: right;'>Umum</span>";
          }
				   ?>
				</li></a>
				</ul>
				<?php } ?><div class="text-center"><!-- <a href="./" class="badge bg-primary" style="text-decoration: none;">refresh</a> --></div><br>	
  <div class="row text-center">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <a href="kitab_ac?ertd=1" style="text-decoration: none;color: black;"> <div class="card border-0 kartu">
            <div class="card-body " style="background-color: #d7d7d7">
              <img src="assets/image/open-book.png" width="100px">
              <h5 class="card-title">Mabadi Fiqih</h5>
              <p class="card-text">baca Kitab kategori Anak</p>
              <!-- <a href="kitab_ac?ertd=1" class="btn btn-primary">Mulai</a> -->
            </div>
          </div></a>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
          <a href="kitab_ac?ertd=3" style="text-decoration: none;color: black">  <div class="card border-0 kartu">
            <div class="card-body" style="background-color: #d7d7d7">
              <img src="assets/image/open-book.png" width="100px">
              <h5 class="card-title">Al Jurmiyah</h5>
              <p class="card-text">baca Kitab kategori Umum</p>
              <!-- <a href="kitab_ac?ertd=3" class="btn btn-primary">Mulai</a> -->
            </div>
          </div></a>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
         <a href="kitab_ac?ertd=2" style="text-decoration: none;color: black"> <div class="card border-0 kartu">
            <div class="card-body" style="background-color: #d7d7d7">
              <img src="assets/image/open-book.png" width="100px">
              <h5 class="card-title">Fathul Qorib</h5>
              <p class="card-text">baca Kitab kategori Remaja</p>
             <!--  <a href="kitab_ac?ertd=2" class="btn btn-primary">Mulai</a> -->
            </div>
          </div></a>
        </div> 
        </div>
        <style type="text/css">
          .kartu:hover{
            color: blue
          }
        </style>
  <footer class="my-5 pt-5 text-primary text-center text-small">
    <p class="mb-1"><i>&copy;   pan.harlah2023 | <a href="https://instagram.com/abdurrozaq.bws" style="text-decoration: none;">@abdurrozaq.bws</a></i></p>
    <small class="text-muted">Tekan FN+F11 / F11 untuk mode Full Screen</small><br>	<br>	
    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Tambah Materi</a> -->

  </footer>
</div>
  <!-- Modal -->
<div class="modal fade" id="exampsleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Peserta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        	<label>Nama Peserta</label>
        	<input type="text" class="form-control" name="peserta">
        	 <label>Kitab</label>
        	<select name="kitab" class="form-control">
        		<option value="mabadi_fiqh">Mabadi Fiqh</option>
        		<option value="qorib">qorib</option>
        		<option value="jurmiyah">jurmiyah</option>
        	</select><br>
        	<label>M1</label>
        	<select name="m_berapa" class="form-control">
 			<?php for ($i = 1; $i <= 35; $i++) { ?>
        		<option value="<?= $i?>"><?= $i?></option>
        	<?php } ?>
        	</select>
        	<label>M2</label>
        	<select name="m_sampai" class="form-control">
 			<?php for ($i = 1; $i <= 35; $i++) { ?>
        		<option value="<?= $i?>"><?= $i?></option>
        	<?php } ?>
        	</select>

        	<label>Kelas</label>
        	<input type="text" class="form-control" name="kelas">
        	<label>Kategori</label>
        	<select name="kategori" class="form-control">
        		<option value="anak">Anak Anak</option>
        		<option value="remaja">Remaja</option>
        	</select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save changes</button>        </form>
      </div>
    </div>
  </div>
</div>
<!-- tambah siswa -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <label>PILIH KITAb</label>
          <select class="form-control" name="kode_kitab">
            <option value="1">Mabadi Fiqh</option>
            <option value="2">Fathul Qorib</option>
            <option value="3">Al Jurmiyah</option>
          </select>
          <label>Masukkan Jumlah Input</label>
         <input type="number" class="form-control" name="banyak">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add" class="btn btn-primary">Simpan</button></form>
      </div>
    </div>
  </div>
</div>
<?php   include 'foot.php'; ?>
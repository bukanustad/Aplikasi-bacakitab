<?php   include 'head.php'; error_reporting(0);
// fathul qorib
$datax = mysqli_query($conn, "SELECT * FROm ertd WHERE kitab = '$_GET[source_id]' AND maqro = '$_GET[id]'");
$d = mysqli_fetch_array($datax);
// mabadi fiqih
$mabadi = mysqli_query($conn, "SELECT * FROM mabadi_fiqh WHERE maqro = '$_GET[id]'");
$fiqh = mysqli_fetch_array($mabadi);
// jurmiyah


 ?><body onload="start_timer();">
<div style="margin-top: 20px;margin-left: 20px;margin-bottom: 30px">
  <a href="./" class="btn bg-warning text-white" style="position: fixed;z-index: 300">Kembali</a> <span id="time" style="font-weight: bold;position: fixed;margin-left: 100px;z-index: 300;float: right;">
        00:00:00
      </span>
  <!--  <script type="text/javascript">
    function start_timer(){
      var timer = document.getElementById("time").innerHTML;
      var arr = timer.split(":");
      var hour = arr[0];
      var min = arr[1];
      var sec = arr[2];
      if(sec == 0) {
        if(min == 0) {
          if(hour == 0) {
          // alert("Waktu Habis");
          window.location.replace("http://localhost/kitab_app/timeout");
            // window.location.reload();
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
  </script>  -->
</div>
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
<div class="row text-center">
        <?php for ($i = $fiqh['dari']; $i <= $fiqh['sampe']; $i++) { ?>
        <div class="text-center">
          <div class="card-header bg-secondary text-white"><?= $d['bab'] ?> <br></div>
          <div class="card">
            <div class="card-body" style="margin-left: auto;margin-right: auto;text-align: center;">
             <!--  <img src="assets/source/<?= $d['maqro_bab'] ?>/<?= $i ?>.jpeg" width="500em"> -->
              <?php 
              if ($_GET['source'] === "mabadi_fiqh") {
                echo "<img src='assets/source/$_GET[source]/$i.jpeg' alt='assets/source/$_GET[source]/$_GET[id]' width='100%'>";
              }elseif ($_GET['source'] === "qorib") {
                echo " <img src='assets/source/$_GET[source]/$_GET[id]' alt='assets/source/$_GET[source]/$_GET[id]' width='100%'>";
              }elseif ($_GET['source'] === "jurmiyah") {
              echo " <img src='assets/source/$_GET[source]/$_GET[id]' width='100%'>";
              }

               ?>
            </div>
          </div>
        </div>
        <?php } ?>

        </div> 








<!--   <?php for ($i = $d['m1']; $i <= $d['m2']; $i++) { ?>
  <img src="assets/source/<?= $d['maqro_bab'] ?>/<?= $i ?>.jpeg" width="50%">
<?php } ?> -->
</body>

<?php   include 'foot.php'; ?>
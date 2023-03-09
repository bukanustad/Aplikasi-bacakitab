<?php include 'head.php'; ?>
<body onload="start_timer();">
	<div class="text-center" style="margin-top: 10%">
		<img src="assets/timeout.svg" width="480px"><br>
		<br><p>Waktu Baca Kitab Anda Telah Habis!</p>Beralih Otomatis setelah<span id="time" class="text-primary">
        00:00:10
      </span>
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
          // alert("Waktu Habis");
          window.location.replace("http://localhost/kitab_app");
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
  </script><br><br><a href="./" class="btn btn-info text-white">KEMBALI</a>
	</div></body>
<?php include 'foot.php'; ?>
<?php include 'head.php'; 
if(isset($_POST['sp'])){
	$j=$_GET['j'];
    $kels =($_GET['class']);
  $namanya = $_POST['namas'];
  $filesa = $_POST['files'];
 $jml= count($namanya);
 for ($i=0; $i < $jml ; $i++) { 
  $query= mysqli_query($conn, "insert into ertd set bab = '$namanya[$i]', maqro = '$filesa[$i]', kitab = '$kels'");
  echo ("<META HTTP-EQUIV=Refresh CONTENT=\"0.1; URL=./\">");
 }
}
?>
<div style="margin-left: 10px;width: 98%">
	<div class="card">
		<div class="card-header bg-primary text-white">
			Tambah Materi
		</div>
		<div class="card-body">
			<?php 
			if(isset($_GET['s'])){
	$j=$_GET['s'];
    for($i=1;$i<=$j;$i++){
	echo "<form action='' method='post'>";
	echo "<label>Nama Bab / Materi</label><br> <input class='form-control col-9' type='text' name='namas[]'><label>file</label><br> <input class='form-control col-9' type='text' name='files[]'><br>"; 
	// echo "<tr><td>Tanggal Lahir</td><td> :</td><td> <input type='text' name=tl[$i]></td></tr></table><p>"; 
	
   }   	echo "<input type='submit' class='btn btn-primary' name='sp' value='Simpan'><br><p></form>";}
			 ?>
		</div>
	</div>
</div>
<?php include 'foot.php'; ?>
<?php
include "config.php";
include "header.php";
?>
<a href="index.php" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Kembali</a>
<?php
if(isset($_POST['bts'])):
  if($_POST['n']!=null && $_POST['o']!=null && $_POST['w']!=null  && $_POST['p']!=null && $_POST['d']!=null && $_POST['s']!=null && $_POST['m']!=null) {

     $stmt = $mysqli->prepare("INSERT INTO tbl_covid (nim,namaOperator,namaDaerah,Positif,Dirawat,Sembuh,Meninggal) VALUES (?,?,?,?,?,?,?)");
	 $stmt->bind_param('sssssss', $ns, $os, $ws, $ps,$ds,$ss,$ms);
	
     $ns = $_POST['n'];
     $os = $_POST['o'];
     $ws = $_POST['w'];
     $ps = $_POST['p'];
     $ds = $_POST['d'];
     $ss = $_POST['s'];
	 $ms = $_POST['m'];

     if($stmt->execute()):
?>
<p></p>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Berhasil!</strong> Silahkan tambah lagi , <a href="index.php" class="btn btn-primary btn-sm">Tutup</a> jika ingin keluar.
</div>
<?php
     else:
?>
<p></p>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Gagal!</strong> Gagal total, Silahkan coba lagi!!!.<?php echo $stmt->error; ?>
</div>
<?php
     endif;
  } else{
?>
<p></p>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Gagal!</strong> Form tidak boleh kosong, tolong diisi.
</div>
<?php
  }
endif;
?>
	    <p><br/></p>
	    <div class="panel panel-default">
	    <div class="panel-body">

		  <div class="form-group">
		    <label for="n">Nim</label>
		    <input type="text" class="form-control" name="n" id="n" placeholder="Masukan Nim">
		  </div>
		  <div class="form-group">
		    <label for="o">Nama Operator</label>
		    <input type="text" class="form-control" name="o" id="o" placeholder="Masukan Nama Operator">
		  </div>
		<form role="form" method="post">
		<div class="form-group">
		    <label for="w">Wilayah</label>
		    <select class="form-control" id="w" name="w">
		      <option>DKI Jakarta</option>
		      <option>Jawa Barat</option>
		      <option>Banten</option>
		      <option>Jawa Tengah</option>
		      <option>Jawa Timur</option>
		    </select>
		  </div>	
		  <div class="form-group">
		    <label for="p">Jumlah Positif</label>
		    <input type="text" class="form-control" name="p" id="p" placeholder="Masukan Jumlah Positif">
		  </div>

		  <div class="form-group">
		    <label for="d">Jumlah Dirawat</label>
		    <input type="text" class="form-control" name="d" id="d" placeholder="Masukan Jumlah Dirawat">
		  </div>
		  <div class="form-group">
		    <label for="s">Jumlah Sembuh</label>
		    <input type="text" class="form-control" name="s" id="s" placeholder="Masukan Jumlah Sembuh">
		  </div>
		  <div class="form-group">
		    <label for="m">Jumlah Meninggal</label>
		    <input type="text" class="form-control" name="m" id="m" placeholder="Masukan Jumlah Meninggal">
		  </div>		  
		  <button type="submit" name="bts" class="btn btn-success btn-md">Simpan</button>
		</form>
<?php
include "footer.php";
?>
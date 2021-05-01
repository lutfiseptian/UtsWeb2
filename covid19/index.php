<?php
include "config.php";
include "header.php";
?>

<p>
<a href="create.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data</a> &nbsp; &nbsp;
 <br/>
</p>
<table id="ghatable" class="display table table-bordered table-striped table-responsive" cellspacing="2" width="50%">
<thead>
     <tr>
          <th>N0.</th>
          <th>Nim</th>
          <th>Nama Operator</th>
          <th>Nama Daerah</th>
          <th>Positif</th>
          <th>Dirawat</th>
          <th>Sembuh</th>
          <th>Meninggal</th>
         
     </tr>
</thead>
<tbody>
<?php
$res = $mysqli->query("SELECT * FROM tbl_covid order by nim");
$no = 1;
while (($row = $res->fetch_assoc()) !== null):
?>
     <tr>
          <td><?= $no ?></td>
          <td><?= $row['nim'] ?></td>
          <td><?= $row['namaOperator'] ?></td>
          <td><?= $row['namaDaerah'] ?></td>
          <td><?= $row['Positif'] ?></td>
          <td><?= $row['Dirawat'] ?></td>
          <td><?= $row['Sembuh'] ?></td>
          <td><?= $row['Meninggal'] ?></td>
     </tr>

<?php
$no++;
endwhile;
?>

</tbody>
</table>

<?php
include "footer.php";
?>

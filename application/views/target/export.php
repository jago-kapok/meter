<?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Target_Export_Data.xls");
?>

<html>
<head>
  <style type="text/css">
    table.gridtable {
	  font-family: serif;
    }
    table.gridtable th {
	  font-size: 15px;
	  padding: 20px;
	  font-family: "Times New Roman";
	  background-color: #80CCFF;
    }
    table.gridtable td {
	  font-size: 15px;
	  padding: 8px;
	  font-family: "Times New Roman";
	  background-color: #FFFFFF;
	  width: auto;
    }
  </style>
</head>

<body>
  <center><h4><u>Export from Data Target</u></h4></center>
  <table border="1" class="gridtable">
    <thead>
      <tr>
        <th class="col-md-2">Reg. Number</th>
        <th class="col-md-2">Customer Name</th>
        <th class="col-md-2">BA Number</th>
        <th class="col-md-2">Additional Note</th>
        <th class="col-md-2">BA Date</th>
        <th class="col-md-2">Technician</th>
        <th class="col-md-2">Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($target as $t) { ?>
        <tr>
          <td><?= $t['noreg_pelanggan']; ?></td>
		  <td><?= $t['nama_pelanggan']; ?></td>
          <td><?= $t['noba_target']; ?></td>
          <td><?= $t['ket_target']; ?></td>
          <?php if($t['tgl_ba'] == '0000-00-00 00:00:00') : ?>
			<td></td>
		  <?php else : ?>
			<td><?= date('d-m-Y H:i:s', strtotime($t['tgl_ba'])); ?></td>
		  <?php endif; ?>
		  <td><?= $t['nama_user']; ?></td>
		  <?php if($t['id_status'] == 1) : ?>
			<td><span class="badge badge-info">Visited</span></td>
		  <?php elseif($t['id_status'] == 7) : ?>
			<td><span class="badge badge-success">Paid</span></td>
		  <?php elseif($t['id_status'] == 8) : ?>
			<td><span class="badge badge-danger">Blocked</span></td>
		  <?php else : ?>
			<td><span class="badge badge-warning">Not Paid</span></td>
		  <?php endif; ?>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
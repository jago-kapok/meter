<div class="container-fluid mt-2">
  <?= $this->session->flashdata('message'); ?>
  <div class="row mb-1">
	<div class="col-md-8"></div>
	<div class="col-md-4 pull-right">
	  <div class="input-group">
		<input id="searching" class="form-control form-control-sm" placeholder="Search Data ...">
		<span class="input-group-append">
		  <a href="<?= base_url('harmet/export') ?>" class="btn btn-success btn-sm"><i class="fa fa-file-download"></i>
			&nbsp;&nbsp;Export Data
		  </a>
		</span>
	  </div>
	</div>
  </div>
  <table id="example" class="table table-striped">
	<thead class="bg-info">
      <tr>
		<th>#</th>
        <th>Reg. Number</th>
        <th>Customer Name</th>
        <th>Address</th>
        <th>Technician</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $a = 1;
        foreach($target as $t) { ?>
        <tr>
          <th scope="row"><?= $a++; ?></th>
          <td><?= $t['noreg_pelanggan']; ?></td>
		  <td><?= $t['nama_pelanggan']; ?></td>
		  <td><?= $t['alamat_pelanggan']; ?></td>
          <td><?= $t['nama_user']; ?></td>
          <td>
            <a href="<?= base_url('harmet/detail/').$t['id_target']; ?>" class="badge badge-primary p-1" title="View Detail">
			  <i class="fas fa-recycle"></i>
		    </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
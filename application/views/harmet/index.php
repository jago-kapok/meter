<div class="container-fluid mt-2">
  <?= $this->session->flashdata('message'); ?>
  <div class="row mb-1">
	<div class="col-md-8">
	  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create_harmet"><i class="fa fa-plus-square"></i>
	    &nbsp;&nbsp;Insert Harmet
	  </button>
	</div>
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
        <th>Description</th>
        <th>BA Number</th>
        <th>BA Date</th>
        <th>Technician</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $a = 1;
        foreach($harmet as $h) { ?>
        <tr>
          <th scope="row"><?= $a++; ?></th>
          <td><?= $h['noreg_pelanggan']; ?></td>
		  <td><?= $h['nama_pelanggan']; ?></td>
		  <td><?= $h['ket_harmet']; ?></td>
		  <td><?= $h['no_ba_harmet']; ?></td>
		  <?php if($h['tanggal_ba_harmet'] === NULL) : ?>
			<td></td>
		  <?php else : ?>
			<td><?= date('d-m-Y', strtotime($h['tanggal_ba_harmet'])); ?></td>
		  <?php endif; ?>
          <td><?= $h['nama_user']; ?></td>
          <td><?= $h['status_harmet']; ?></td>
          <td>
            <a href="<?= base_url('harmet/detail/').$h['id_harmet']; ?>" class="badge badge-primary p-1" title="View Detail">
			  <i class="fas fa-recycle"></i>
		    </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="create_harmet" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Insert Harmet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
	  <form action="<?= base_url('harmet/create'); ?>" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
		<div class="form-group">
		  <label>Reg. Number</label>
		  <select name="id_pelanggan" class="form-control form-control-sm">
			<option value="New" selected>New Customer</option>
			<?php
			  foreach($customer as $c) { ?>
				<option value="<?= $c['id_pelanggan']; ?>"><?= $c['noreg_pelanggan']; ?> | <?= $c['nama_pelanggan']; ?></option>
			<?php } ?>
		  </select>
		</div>
		<div class="form-group">
		  <label>Customer</label>
		  <input name="nama_pelanggan" class="form-control form-control-sm">
		</div>
		<div class="form-group">
		  <label>Address</label>
		  <input name="alamat_pelanggan" class="form-control form-control-sm">
		</div>
		<div class="form-group">
		  <label>Upload Image</label>
		  <input type="file" name="dok_to" class="form-control form-control-sm">
		</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm btn-form" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm btn-form">Save</button>
      </div>
	  </form>
    </div>
  </div>
</div>
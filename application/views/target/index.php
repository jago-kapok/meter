<div class="container-fluid mt-2">
  <?= $this->session->flashdata('message'); ?>
  <div class="row mb-1">
	<div class="col-md-8">
	  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create_target"><i class="fa fa-plus-square"></i>
	    &nbsp;&nbsp;Insert Target
	  </button>
	  <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#import_target"><i class="fa fa-file-import"></i>
	    &nbsp;&nbsp;Import Data
	  </button>
	</div>
	<div class="col-md-4 pull-right">
	  <div class="input-group">
		<input id="searching" class="form-control form-control-sm" placeholder="Search Data ...">
		<span class="input-group-append">
		  <a href="<?= base_url('target/export') ?>" class="btn btn-success btn-sm"><i class="fa fa-file-download"></i>
			&nbsp;&nbsp;Export Data
		  </a>
		</span>
	  </div>
	</div>
  </div>
  <table id="example" class="table table-striped">
	<thead class="bg-info">
      <tr>
		<th class="col-md-1">#</th>
        <th class="col-md-2">Customer</th>
        <th class="col-md-2">BA Number</th>
        <th class="col-md-2">Additional Note</th>
        <th class="col-md-2">Technician</th>
        <th class="col-md-2">BA Date</th>
        <th class="col-md-1">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $a = 1;
        foreach($target as $t) { ?>
        <tr>
          <th scope="row"><?= $a++; ?></th>
          <td><?= $t['noreg_pelanggan']; ?> | <?= $t['nama_pelanggan']; ?></td>
          <td><?= $t['noba_target']; ?></td>
          <td><?= $t['ket_target']; ?></td>
          <td><?= $t['nama_user']; ?></td>
          <?php if($t['tgl_ba'] == '0000-00-00 00:00:00') : ?>
			<td></td>
		  <?php else : ?>
			<td><?= date('d-m-Y H:i:s', strtotime($t['tgl_ba'])); ?></td>
		  <?php endif; ?>
          <td>
			<a href="javascript:void(0)" class="badge badge-warning p-1" title="Send to Technician" data-toggle="modal" data-target="#send_target"
			  data-id_target="<?= $t['id_target']; ?>"
			  data-id_user="<?= $t['id_user']; ?>"
			>
			  <i class="fas fa-user"></i>
		    </a>
            <a href="javascript:void(0)" class="badge badge-info p-1" title="Edit Data" data-toggle="modal" data-target="#update_target"
			  data-id_target="<?= $t['id_target']; ?>"
			  data-id_pelanggan="<?= $t['id_pelanggan']; ?>"
			  data-id_status="<?= $t['id_status']; ?>"
			>
			  <i class="fas fa-edit"></i>
		    </a>
            <a href="<?= base_url('target/delete/').$t['id_target']; ?>" class="badge badge-danger p-1" title="Delete Data" onclick="return confirm('Are you sure to delete this ?')">
			  <i class="fas fa-trash"></i>
		    </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="create_target" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Insert New Target</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
	  <form action="<?= base_url('target/create'); ?>" method="POST">
      <div class="modal-body">
		<div class="form-group">
		  <label>Customer</label>
		  <select name="id_pelanggan" class="form-control form-control-sm">
            <option selected disabled>Choose Customer</option>
            <?php
              foreach($customer as $c) { ?>
				<option value="<?= $c['id_pelanggan']; ?>"><?= $c['noreg_pelanggan']; ?> | <?= $c['nama_pelanggan']; ?></option>
            <?php } ?>
          </select>
		</div>
		<div class="form-group">
		  <label>Status</label>
		  <select name="id_status" class="form-control form-control-sm">
            <option selected disabled>Choose Status</option>
            <?php
              foreach($status as $s) { ?>
				<option value="<?= $s['id_status']; ?>"><?= $s['ket_status']; ?></option>
            <?php } ?>
          </select>
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

<div class="modal fade" id="update_target" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Edit Data Target</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
	  <form action="<?= base_url('target/update'); ?>" method="POST">
      <div class="modal-body">
		<div class="form-group">
		  <label>Customer</label>
		  <input type="text" name="id_target" class="form-control form-control-sm">
		  <select name="id_pelanggan" class="form-control form-control-sm">
            <option selected disabled>Choose Capacity</option>
            <?php
              foreach($customer as $c) { ?>
			    <option value="<?= $c['id_pelanggan']; ?>"><?= $c['noreg_pelanggan']; ?> | <?= $c['nama_pelanggan']; ?></option>
            <?php } ?>
          </select>
		</div>
		<div class="form-group">
		  <label>Status</label>
		  <select name="id_status" class="form-control form-control-sm">
            <option selected disabled>Choose Status</option>
            <?php
              foreach($status as $s) { ?>
				<option value="<?= $s['id_status']; ?>"><?= $s['ket_status']; ?></option>
            <?php } ?>
          </select>
		</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm btn-form" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm btn-form">Update</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<div class="modal fade" id="import_target" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Import Data Target</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
	  <form action="<?= base_url('target/import'); ?>" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
		  <label>Choose Excel File</label>
		  <input type="file" name="excel_file" class="form-control form-control-sm" required>
		</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm btn-form" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm btn-form">Process</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<div class="modal fade" id="send_target" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Send Technician</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
	  <form action="<?= base_url('target/send'); ?>" method="POST">
      <div class="modal-body">
		<div class="form-group">
		  <label>Technician</label>
		  <input type="hidden" name="id_target" class="form-control form-control-sm">
		  <select name="id_user" class="form-control form-control-sm">
            <option selected disabled>Choose Technician</option>
            <?php
              foreach($user as $u) { ?>
			    <option value="<?= $u['id_user']; ?>"><?= $u['nama_user']; ?></option>
            <?php } ?>
          </select>
		</div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm btn-form" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm btn-form">Submit</button>
      </div>
	  </form>
    </div>
  </div>
</div>
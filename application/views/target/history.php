<div class="container-fluid mt-2">
  <?= $this->session->flashdata('message'); ?>
  <div class="row mb-1">
	<div class="col-md-8">
	  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#filter_target"><i class="fa fa-filter"></i>
	    &nbsp;&nbsp;Filter Advanced
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
        <th class="col-md-2">Customer</th>
        <th class="col-md-2">BA Number</th>
        <th class="col-md-2">Additional Note</th>
        <th class="col-md-2">BA Date</th>
        <th class="col-md-2">Status</th>
        <th class="col-md-1">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach($target as $t) { ?>
        <tr>
          <td><?= $t['noreg_pelanggan']; ?> | <?= $t['nama_pelanggan']; ?></td>
          <td><?= $t['noba_target']; ?></td>
          <td><?= $t['ket_target']; ?></td>
          <?php if($t['tgl_ba'] == '0000-00-00 00:00:00') : ?>
			<td></td>
		  <?php else : ?>
			<td><?= date('d-m-Y H:i:s', strtotime($t['tgl_ba'])); ?></td>
		  <?php endif; ?>
		  <?php if($t['id_status'] == 0) : ?>
			<td><span class="badge badge-secondary">Not Visited</span></td>
		  <?php elseif($t['id_status'] == 1) : ?>
			<td><span class="badge badge-info">Visited</span></td>
		  <?php elseif($t['id_status'] == 7) : ?>
			<td><span class="badge badge-success">Paid</span></td>
		  <?php elseif($t['id_status'] == 8) : ?>
			<td><span class="badge badge-danger">Blocked</span></td>
		  <?php else : ?>
			<td><span class="badge badge-warning">Not Paid</span></td>
		  <?php endif; ?>
          <td>
            <a href="detail/<?= $t['id_target']; ?>" class="badge badge-primary p-1" title="View Detail" target="_blank">
			  <i class="fas fa-asterisk"></i>
		    </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="filter_target" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Filter Advanced</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
	  <form action="<?= base_url('target/history'); ?>" method="POST">
      <div class="modal-body">
		<div class="form-group">
		  <label>Technician</label>
		  <select name="id_user" class="form-control form-control-sm">
            <option value="%">All</option>
            <?php
              foreach($user as $u) { ?>
				<option value="<?= $u['id_user']; ?>"><?= $u['nama_user']; ?></option>
            <?php } ?>
          </select>
		</div>
		<div class="form-group">
		  <label>Status</label>
		  <select name="id_status" class="form-control form-control-sm">
            <option value="%">All</option>
			<option value="0">Not Visited</option>
			<option value="1">Visited</option>
			<option value="2">Not Paid</option>
			<option value="7">Paid</option>
			<option value="8">Blocked</option>
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
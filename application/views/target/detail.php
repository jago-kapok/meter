<div class="container-fluid">
  <div class="row mb-2">
	<div class="col-sm-6">
      <span class="btn"><strong>ID Target : <i><?= $target->id_target; ?></i></strong></span>
    </div>
    <div class="col-sm-6">
      <a href="javascript:void(0)" class="btn btn-primary btn-sm float-right ml-2">
	    <i class="fa fa-file-download"></i>&nbsp;&nbsp;Download BA</a>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">
			  <?php if($target->id_status == 1) : ?>
				<span class="badge badge-info">VISITED</span>
			  <?php elseif($target->id_status == 7) : ?>
				<span class="badge badge-success">PAID</span>
			  <?php elseif($target->id_status == 8) : ?>
				<span class="badge badge-danger">BLOCKED</span>
			  <?php else : ?>
				<span class="badge badge-warning">NOT PAID</span>
			  <?php endif; ?>
			</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped" style="font-size:95%">
			  <tbody>
				<tr>
				  <th class="col-md-3">Reg. Number</th>
				  <td>: <?= $target->noreg_pelanggan; ?></td>
				</tr>
				<tr>
				  <th class="col-md-3">Customer Name</th>
				  <td>: <?= $target->nama_pelanggan; ?></td>
				</tr>
				<tr>
				  <th class="col-md-3">Created Date</th>
				  <td>: <?= $target->tgl_create; ?></td>
				</tr>
				<tr>
				  <th class="col-md-3">BA Number</th>
				  <td>: <?= $target->noba_target; ?></td>
				</tr>
				<tr>
				  <th class="col-md-3">BA Created Date</th>
				  <td>: <?= $target->tgl_ba; ?></td>
				</tr>
				<tr>
				  <th class="col-md-3">Information</th>
				  <td>: <?= $target->ket_target; ?></td>
				</tr>
				<tr>
				  <th class="col-md-3">Technician</th>
				  <td>: <?= $target->nama_user; ?></td>
				</tr>
				<tr>
				  <th class="col-md-3">Latitude</th>
				  <td>: <?= $target->lat_target; ?></td>
				</tr>
				<tr>
				  <th class="col-md-3">Longitude</th>
				  <td>: <?= $target->lat_target; ?></td>
				</tr>
			  </tbody>
			</table>
          </div>
        </div>
      </div>
	  
	  <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">
			  View Document
			</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <center><img src="https://dpmptsp.sulselprov.go.id/assets/file/blank.png" width="500"></center>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container-fluid">
  <div class="row mb-2">
	<div class="col-sm-6">
      <span class="btn"><strong>Reg. Number : <i><?= $harmet->noreg_pelanggan; ?></i></strong></span>
    </div>
    <div class="col-sm-6">
      <a href="javascript:void(0)" class="btn btn-success btn-sm float-right ml-2" data-toggle="modal" data-target="#modal-view-document">
	    <i class="fa fa-file-image"></i>&nbsp;&nbsp;View Photos
	  </a>
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
			  <span class="badge badge-warning"><?= $harmet->status_harmet; ?></span>
			</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped" style="font-size:95%">
			  <tbody>
				<tr class="d-flex">
				  <th class="col-md-3">Customer Name</th>
				  <td class="col-md-9">: <?= $harmet->nama_pelanggan; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3">Created Date</th>
				  <td class="col-md-9">: <?= $harmet->tanggal_penggantian_harmet; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3" style="vertical-align:middle">Address</th>
				  <td class="col-md-9">: <?= $harmet->alamat_pelanggan; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3" style="vertical-align:middle">Dscription</th>
				  <td class="col-md-9">: <?= $harmet->ket_harmet; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3">BA Number</th>
				  <td class="col-md-9">: <?= $harmet->no_ba_harmet; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3">BA Created Date</th>
				  <td class="col-md-9">: <?= $harmet->tanggal_ba_harmet; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3">Technician</th>
				  <td class="col-md-9">: <?= $harmet->nama_user; ?></td>
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
			  <i class="fa fa-recycle"></i>&nbsp;&nbsp;Detail Harmet
			</h5>
            <div class="card-tools">
              <a href="javascript:void(0)" class="badge badge-primary" style="font-size:95%" data-toggle="modal" data-target="#update_harmet"
			    data-id_harmet="<?= empty($harmet->id_harmet) ? '0' : $harmet->id_harmet; ?>"
			    data-merk_harmet="<?= empty($harmet->merk_harmet) ? '0' : $harmet->merk_harmet; ?>"
			    data-no_meter_harmet="<?= empty($harmet->no_meter_harmet) ? '0' : $harmet->no_meter_harmet; ?>"
			    data-tahun_harmet="<?= empty($harmet->tahun_harmet) ? '0' : $harmet->tahun_harmet; ?>"
			    data-stan_harmet="<?= empty($harmet->stan_harmet) ? '0' : $harmet->stan_harmet; ?>"
			  >Replace</a>
            </div>
          </div>
          <div class="card-body">
			<table class="table table-striped" style="font-size:95%">
			  <tbody>
				<tr class="d-flex">
				  <th class="col-md-3">Merk Harmet</th>
				  <td class="col-md-9">: <?= empty($harmet->merk_harmet) ? '-' : $harmet->merk_harmet; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3">Meter ID</th>
				  <td class="col-md-9">: <?= empty($harmet->no_meter_harmet) ? '-' : $harmet->no_meter_harmet; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3">Produced on</th>
				  <td class="col-md-9">: <?= empty($harmet->tahun_harmet) ? '-' : $harmet->tahun_harmet; ?></td>
				</tr>
				<tr class="d-flex">
				  <th class="col-md-3">Stand Location</th>
				  <td class="col-md-9">: <?= empty($harmet->stan_harmet) ? '-' : $harmet->stan_harmet; ?></td>
				</tr>
			  </tbody>
			</table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="modal-view-document">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">
	  <div class="modal-body">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:auto">
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <center><img src="https://dpmptsp.sulselprov.go.id/assets/file/blank.png" style="height:65vh"></center>
			</div>
		  </div>

		  <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true" style="color:grey"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true" style="color:grey"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	  </div>
	</div>
  </div>
</div>

<div class="modal fade" id="update_harmet" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Replace Harmet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
	  <form action="<?= base_url('harmet/update'); ?>" method="POST">
      <div class="modal-body">
	    <input type="hidden" name="id_harmet" class="form-control form-control-sm">
		<input type="hidden" name="id_target" class="form-control form-control-sm">
		<div class="form-group">
		  <label>Merk Harmet</label>
		  <input id="merk_harmet" name="merk_harmet" class="form-control form-control-sm">
		</div>
		<div class="form-group">
		  <label>Meter ID</label>
		  <input id="no_meter_harmet" name="no_meter_harmet" class="form-control form-control-sm">
		</div>
		<div class="form-group">
		  <label>Produced on</label>
		  <input id="tahun_harmet" name="tahun_harmet" class="form-control form-control-sm">
		</div>
		<div class="form-group">
		  <label>Stand Location</label>
		  <input id="stan_harmet" name="stan_harmet" class="form-control form-control-sm">
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
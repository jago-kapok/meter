<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-4 offset-md-4">
	  <div class="card card-secondary mt-5">
        <div class="card-header">
          <h3 class="card-title">Meter Monitoring - Login</h3>
        </div>
        <form action="auth/login" method="POST">
          <div class="card-body">
			<?= $this->session->flashdata('message'); ?>
            <div class="form-group">
              <label class="text-secondary">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Enter Username" autofocus>
            </div>
            <div class="form-group">
              <label class="text-secondary">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
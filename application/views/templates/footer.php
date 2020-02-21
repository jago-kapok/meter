		<!-- <footer class="main-footer">
		  <div class="float-right d-none d-sm-block">
			<b>Version</b> 3.0.3-pre
	      </div>
	      <strong>Copyright &copy; - <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
	    </footer> -->
	  </section>
	</div>
  </div>
	
  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/'); ?>dist/js/demo.js"></script>
  <!-- Chart Js -->
  <script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>
  
  <script>
  	// Setting DataTable
    var table = $('#example').DataTable({
	  "lengthChange": false
	});
	
	$('#searching').on('keyup', function(){
	  table.search(this.value).draw();
    });
	
	// Menangkap data user dari modal
	$('#update_user').on('show.bs.modal', function(event){
	  var button = $(event.relatedTarget);
	  var id_user = button.data('id_user');
	  var nama_user = button.data('nama_user');
	  var username = button.data('username');
	  var password = button.data('password');
	  var email_user = button.data('email_user');
	  var telp_user = button.data('telp_user');
	  var id_level = button.data('id_level');
	  
	  var modal = $(this);
	  modal.find('.modal-title').text('Update User : ' + nama_user);
	  modal.find('.modal-body input[name=id_user]').val(id_user);
	  modal.find('.modal-body input[name=nama_user]').val(nama_user);
	  modal.find('.modal-body input[name=username]').val(username);
	  modal.find('.modal-body input[name=password]').val(password);
	  modal.find('.modal-body select[name=id_level]').val(id_level);
	  modal.find('.modal-body input[name=email_user]').val(email_user);
	  modal.find('.modal-body input[name=telp_user]').val(telp_user);
	});
	
	// Menangkap data pelanggan dari modal
	$('#update_customer').on('show.bs.modal', function(event){
	  var button = $(event.relatedTarget);
	  var id_pelanggan = button.data('id_pelanggan');
	  var noreg_pelanggan = button.data('noreg_pelanggan');
	  var nama_pelanggan = button.data('nama_pelanggan');
	  var alamat_pelanggan = button.data('alamat_pelanggan');
	  var daya = button.data('daya');
	  var tarif = button.data('tarif');
	  var lat = button.data('lat');
	  var lang = button.data('lang');
	  
	  var modal = $(this);
	  modal.find('.modal-title').text('Update Customer : ' + noreg_pelanggan + ' / ' + nama_pelanggan);
	  modal.find('.modal-body input[name=id_pelanggan]').val(id_pelanggan);
	  modal.find('.modal-body input[name=noreg_pelanggan]').val(noreg_pelanggan);
	  modal.find('.modal-body input[name=nama_pelanggan]').val(nama_pelanggan);
	  modal.find('.modal-body input[name=alamat_pelanggan]').val(alamat_pelanggan);
	  modal.find('.modal-body select[name=daya]').val(daya);
	  modal.find('.modal-body select[name=tarif]').val(tarif);
	  modal.find('.modal-body input[name=lat]').val(lat);
	  modal.find('.modal-body input[name=lang]').val(lang);
	});
	
	// Menangkap data target dari modal
	$('#update_target').on('show.bs.modal', function(event){
	  var button = $(event.relatedTarget);
	  var id_target = button.data('id_target');
	  var id_pelanggan = button.data('id_pelanggan');
	  var id_status = button.data('id_status');
	  
	  var modal = $(this);
	  modal.find('.modal-title').text('Update Target : ' + id_pelanggan);
	  modal.find('.modal-body input[name=id_target]').val(id_target);
	  modal.find('.modal-body select[name=id_pelanggan]').val(id_pelanggan);
	  modal.find('.modal-body select[name=id_status]').val(id_status);
	});
	
	// Menangkap data target dari modal
	$('#send_target').on('show.bs.modal', function(event){
	  var button = $(event.relatedTarget);
	  var id_target = button.data('id_target');
	  var id_user = button.data('id_user');
	  
	  var modal = $(this);
	  modal.find('.modal-body input[name=id_target]').val(id_target);
	  modal.find('.modal-body select[name=id_user]').val(id_user);
	});
  </script>
  
  <script>
  $(function(){

    'use strict'

    // Get context with jQuery - using jQuery's .get() method.
    var targetChartCanvas = $('#targetChart').get(0).getContext('2d')

    var targetChartData = {
      labels  : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [
        {
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          data                : [<?= $jan; ?>, <?= $feb; ?>, <?= $mar; ?>, <?= $apr; ?>, <?= $may; ?>, <?= $jun; ?>, <?= $jul; ?>, <?= $aug; ?>, <?= $sep; ?>, <?= $oct; ?>, <?= $nov; ?>, <?= $dec; ?>]
        },
      ]
    }

    var targetChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var targetChart = new Chart(targetChartCanvas, { 
        type: 'line', 
        data: targetChartData, 
        options: targetChartOptions
      }
    )
  })
  </script>
  
  <script>
	mapboxgl.accessToken = "pk.eyJ1Ijoia29sb25lbCIsImEiOiJjanNjMWc2enEwMGs5M3lwbmF2NXEwazV4In0.70IXd_Hc-X_o1jQt19J3lA";
	var map = new mapboxgl.Map({
		container: "map",
		<!-- style: 'mapbox://styles/mapbox/streets-v11', -->
		style: 'mapbox://styles/mapbox/outdoors-v11',
		center: [<?= $target->lang_target; ?>, <?= $target->lat_target; ?>],
		zoom: 15
	});
	new mapboxgl.Marker().setLngLat([<?= $target->lang_target; ?>, <?= $target->lat_target; ?>]).addTo(map);
	map.addControl(new mapboxgl.NavigationControl());
  </script>
</body>
</html>
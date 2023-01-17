    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="<?php echo base_url(); ?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-slimscroll/jquery.slimscroll.js ">
    </script>
    <!-- waves js -->
    <script src="<?php echo base_url(); ?>assets/pages/waves/js/waves.min.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr/modernizr.js "></script>
    <!-- Morris Chart js -->
    <script src="<?php echo base_url(); ?>assets/js/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/morris.js/morris.js"></script>
    <!-- Custom js -->
    <script src="<?php echo base_url(); ?>assets/js/morris-custom-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pcoded.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vertical-layout.min.js "></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

    <script>
    	var base_url = '<?php echo base_url(); ?>';

    </script>
    <script>
    	$('.custom-file-input').on('change', function () {
    		let fileName = $(this).val().split('\\').pop();
    		$(this).next('.custom-file-label').addClass("selected").html(fileName);
    	})
    	$(document).ready(function () {

    		$('#nama_poli').change(function () {
    			var id = $(this).val();
    			$.ajax({
    				url: "<?php echo site_url('Pasien/getDokter'); ?>",
    				method: "POST",
    				data: {
    					id: id
    				},
    				async: true,
    				dataType: 'json',
    				success: function (data) {

    					var html = '';
    					var i;
    					for (i = 0; i < data.length; i++) {
    						html += '<option value=' + data[i].id + '>' + data[i].nama_dokter +
    							'</option>';
    					}
    					$('#nama_dokter').html(html);

    				}
    			});
    			return false;
    		});

    	});

    	<
    	/body> < /
    	html >

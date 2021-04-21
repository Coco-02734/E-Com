<footer class="footer">

    <span class="float-right">

        Copyright by<b>RaskiStore</b></a>
    </span>
</footer>

<script src="<?= base_url('assets/admin') ?>/js/modernizr.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/jquery.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/moment.min.js"></script>

<script src="<?= base_url('assets/admin') ?>/js/popper.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/bootstrap.min.js"></script>

<script src="<?= base_url('assets/admin') ?>/js/detect.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/fastclick.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/jquery.blockUI.js"></script>
<script src="<?= base_url('assets/admin') ?>/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="<?= base_url('assets/admin') ?>/js/admin.js"></script>

</div>
<!-- END main -->

<!-- BEGIN Java Script for this page -->
<script src="<?= base_url('assets/admin') ?>/plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/datatables/datatables.min.js"></script>

<!-- Counter-Up-->
<script src="<?= base_url('assets/admin') ?>/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?= base_url('assets/admin') ?>/plugins/counterup/jquery.counterup.min.js"></script>

<!-- dataTabled data -->
<script src="<?= base_url('assets/admin') ?>/data/data_datatables.js"></script>

<!-- Charts data -->
<script src="<?= base_url('assets/admin') ?>/data/data_charts_dashboard.js"></script>
<script>
    $(document).on('ready', function() {
        // data-tables
        $('#dataTable').DataTable({
            data: dataSet,
            columns: [{
                title: "Name"
            }, {
                title: "Position"
            }, {
                title: "Office"
            }, {
                title: "Extn."
            }, {
                title: "Date"
            }, {
                title: "Salary"
            }]
        });

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
</script>
<!-- END Java Script for this page -->

</body>

</html>
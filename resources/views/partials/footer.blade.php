    
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://chapter247.com">Chapter 247</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ url('backend') }}/plugins/common/common.min.js"></script>
    <script src="{{ url('backend') }}/js/custom.min.js"></script>
    <script src="{{ url('backend') }}/js/settings.js"></script>
    <script src="{{ url('backend') }}/js/gleek.js"></script>
    <script src="{{ url('backend') }}/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="{{ url('backend') }}/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="{{ url('backend') }}/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="{{ url('backend') }}/plugins/d3v3/index.js"></script>
    <script src="{{ url('backend') }}/plugins/topojson/topojson.min.js"></script>
    <script src="{{ url('backend') }}/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="{{ url('backend') }}/plugins/raphael/raphael.min.js"></script>
    <script src="{{ url('backend') }}/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="{{ url('backend') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ url('backend') }}/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="{{ url('backend') }}/plugins/chartist/js/chartist.min.js"></script>
    <script src="{{ url('backend') }}/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script src="{{ url('backend') }}/js/bootstrap-notify.js"></script>
    <script src="{{ url('backend') }}/plugins/sweetalert/js/sweetalert.min.js"></script>
    
    <script src="{{ url('backend') }}/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('backend') }}/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('backend') }}/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    
    <script src="{{ url('backend') }}/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    
    {{-- <script src="{{ url('backend') }}/js/listing_datatable.js"></script> --}}
    
    <script src="{{ url('backend') }}/js/dashboard/dashboard-1.js"></script>

</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
   

    @if (session()->has('error'))
        $.notify({
            message: "{{ session('error') }}"
            },{
            type: 'danger',
            timer: 1000,
            placement: {
                from: 'top',
                align: 'right'
            }
        }); 
    @endif
    @if (session()->has('success'))
        $.notify({
            message: "{{ session('success') }}"
            },{
            type: 'success',
            timer: 1000,
            placement: {
                from: 'top',
                align: 'right'
            }
        }); 
    @endif
});
</script>
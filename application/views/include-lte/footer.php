<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<script src="<?= base_url('assets/lte/js/app.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/js/theme/default.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/d3/d3.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/nvd3/build/nv.d3.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/jvectormap-next/jquery-jvectormap.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/jvectormap-next/jquery-jvectormap-world-mill.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/apexcharts/dist/apexcharts.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/moment/moment.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<script src="<?= base_url('assets/lte/js/demo/dashboard-v3.js'); ?>"></script>
<!-- <script src="<?= base_url('assets/lte/plugins/jquery.maskedinput/src/jquery.maskedinput.js'); ?>"></script> -->
<!-- inputs-ext -->
<script src="<?= base_url('assets/lte/plugins/jquery-migrate/dist/jquery-migrate.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/x-editable-bs4/dist/bootstrap4-editable/js/bootstrap-editable.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/x-editable-bs4/dist/inputs-ext/address/address.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/lib/typeahead.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/typeaheadjs.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/x-editable-bs4/dist/inputs-ext/wysihtml5/wysihtml5.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/select2/dist/js/select2.full.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/jquery-mockjax/dist/jquery.mockjax.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/moment/moment.js'); ?>"></script>
<script src="<?= base_url('assets/lte/js/demo/form-editable.demo.js'); ?>"></script>
<!-- dropzone -->
<script src="<?= base_url('assets/lte/plugins/dropzone/dist/min/dropzone.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/plugins/highlight.js/highlight.min.js'); ?>"></script>
<script src="<?= base_url('assets/lte/js/demo/render.highlight.js'); ?>"></script>
<script type="text/javascript">
    // Time
    function doDate() {
        var str = "";

        var days = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        var months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

        var now = new Date();

        str += "Today is: " + days[now.getDay()] + ", " + now.getDate() + " " + months[now.getMonth()] + " " + now.getFullYear() + " " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
        document.getElementById("todaysDate").innerHTML = str;
    }

    setInterval(doDate, 1000);
    // Activity
    function showHideRA(ele) {
        var srcElement = document.getElementById(ele);
        if (srcElement != null) {
            if (srcElement.style.display == "block") {
                srcElement.style.display = 'none';
            } else {
                srcElement.style.display = 'block';
            }
            return false;
        }
    }

    // TABLE DEFAULT LENGHT
    $(document).ready(function() {
        $('#TableDefault_L').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5'
            ],
            "order": [],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });
    $(document).ready(function() {
        $('#TableDefault_L2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5'
            ],
            "order": [],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });
    // TABLE DEFAULT
    $(document).ready(function() {
        $('#TableDefault').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5'
            ],
            "order": [],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            iDisplayLength: -1
        });
    });

    // COPY,PDF
    // TABLE DEFAULT LENGHT
    // 10
    $(document).ready(function() {
        $('#C_TableDefault_L').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'csvHtml5'
            ],
            "order": [],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });
    // 3
    $(document).ready(function() {
        $('#C_TableDefault_L_3').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'csvHtml5'
            ],
            "order": [],
            lengthMenu: [
                [3, 5, 10, 15, 20, 25, 50, -1],
                [3, 5, 10, 15, 20, 25, 50, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });
    // 5
    $(document).ready(function() {
        $('#C_TableDefault_L_5').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'csvHtml5'
            ],
            "order": [],
            lengthMenu: [
                [5, 10, 15, 20, 25, 50, -1],
                [5, 10, 15, 20, 25, 50, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });
    // TABLE DEFAULT
    $(document).ready(function() {
        $('#C_TableDefault').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'csvHtml5'
            ],
            "order": [],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            iDisplayLength: -1
        });
    });
    // TABLE DEFAULT
    $(document).ready(function() {
        $('#C_TableDefault_LIST').DataTable({
            lengthMenu: [
                [10, 25, 50, 75, 100, 150, 200, 250, 300, 350, 400, 450, 500, -1],
                [10, 25, 50, 75, 100, 150, 200, 250, 300, 350, 400, 450, 500, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });

    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

</body>

</html>
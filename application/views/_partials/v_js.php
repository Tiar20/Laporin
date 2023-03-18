<!-- Backend Bundle JavaScript -->
<script src="<?= base_url() ?>assets/backend/js/backend-bundle.min.js"></script>

<!-- Table Treeview JavaScript -->
<script src="<?= base_url() ?>assets/backend/js/table-treeview.js"></script>

<!-- Chart Custom JavaScript -->
<script src="<?= base_url() ?>assets/backend/js/customizer.js"></script>

<!-- Chart Custom JavaScript -->
<script async src="<?= base_url() ?>assets/backend/js/chart-custom.js"></script>
<!-- Chart Custom JavaScript -->
<script async src="<?= base_url() ?>assets/backend/js/slider.js"></script>

<!-- app JavaScript -->
<script src="<?= base_url() ?>assets/backend/js/app.js"></script>

<script src="<?= base_url() ?>assets/backend/vendor/moment.min.js"></script>

<!-- dropify -->
<script src="<?= base_url() ?>assets/backend/js/dropify.js"></script>
<script src="<?= base_url() ?>assets/backend/js/dropify.min.js"></script>

<script>
    // selected file show
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>

<!-- Data Table -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<!-- Dropify Srcipt -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.dropify').dropify({
            messages: {
                default: 'Drag and drop a file here or click <br> <br> <p>Max file size 2MB</p>',
                replace: 'Drag and drop or click to replace',
                remove: 'Remove',
                error: 'error'
            }
        });
    });
</script>

<!-- Password hide & show -->
<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#password').attr('type', 'text');
            } else {
                $('#password').attr('type', 'password');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#current_password').attr('type', 'text');
            } else {
                $('#current_password').attr('type', 'password');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#new_password').attr('type', 'text');
            } else {
                $('#new_password').attr('type', 'password');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#confirm_password').attr('type', 'text');
            } else {
                $('#confirm_password').attr('type', 'password');
            }
        });
    });
</script>

</body>

</html>
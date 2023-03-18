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

<script>
  $(".toggle-password").click(function() {

    $(this).toggleClass("la-eye la-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
</script>

</body>

</html>
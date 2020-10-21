</body>
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pagingType": "full_numbers"
        });
    });
</script>

</html>
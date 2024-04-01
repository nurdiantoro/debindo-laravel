<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script>
    new DataTable('#example');
    new DataTable('#table_event', {
        order: [
            [3, 'des']
        ]
    });
</script>
<script src="{{ asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('sb-admin-2/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('sb-admin-2/js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ asset('assets/script.js') }}"></script>

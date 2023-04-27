<!-- Toast-->
<div class="bs-toast toast toast-placement-ex m-2 fade show bg-{{ session('success') ? 'success' : 'danger' }} bottom-0 end-0" id="toastModal" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Notifications</div>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        <p>{{ session('success') ? session('success') : session('error') }}</p>
    </div>
</div>

<script>
    let toast = document.querySelector('#toastModal');
    setTimeout(() => {
        toast.style.display = 'none';
    }, 2000);
</script>
<!-- Toast-->

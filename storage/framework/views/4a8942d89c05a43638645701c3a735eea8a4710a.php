<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?php echo e(asset('assets/img/theme/desa.jpg')); ?>); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
    <div class="row">
        <div class="col-lg-7 col-md-12">
        <h1 class="display-2 text-white">Halo, <?php echo e(Auth::user()->username); ?></h1>
        <p class="text-white mt-0 mb-5">Halaman ini merupakan tampilan superadmin. Superadmin dikelola oleh tim Sistem Surat Menyurat</p>
        <a href="#!" class="btn btn-neutral">Edit profile</a>
        </div>
    </div>
    </div>
</div>
<?php /**PATH C:\x\htdocs\SirajaProject\resources\views/superadmin/layouts/header.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistem Surat Menyurat</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo e(asset('assets/img/brand/logo.png')); ?>" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/argon.css?v=1.2.0')); ?>" type="text/css">
  <!-- Load CSS file for Select2 -->
  
  <link type="text/css" href="<?php echo e(asset('assets/dist/css/select2.min.css')); ?>" rel="stylesheet">
  <script src="<?php echo e(asset('assets/dist/js/select2.min.js')); ?>" defer></script>

  <style>
    .select2-container .select2-selection {
        line-height: 1.6 !important;
        height: 100% !important;
        border-radius: 3px !important;
        border-block-color: greyscale !important;
    }
  </style>

</head>

<body>
  <!-- Sidenav -->
  <?php echo $__env->make('admin.layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php echo $__env->make('admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                    
                  </ol>
                </nav>
              </div>
              <div class="col-lg-6 col-5 text-right">
                <a href="#" class="btn btn-sm btn-neutral">New</a>
                <a href="#" class="btn btn-sm btn-neutral">Filters</a>
              </div>
            </div>
            <!-- Card stats -->
          </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit surat Masuk</h3>
                        </div>
                    </div>
                </div>
                <form action="<?php echo e(route('update-surat-masuk', $suratmasuk->surat_masuk_id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                      <h6 class="heading-small text-muted mb-4">Atribut Surat</h6>
                      <div class="pl-lg-4">
                          <div class="row">
                              <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Master Surat<i class="text-danger text-sm text-bold">*</i></label>
                                    <select name="master_surat" class="form-control" id="master_surat" style="height: 100%" required>
                                      <option value="<?php echo e($suratmasuk->master_surat_id); ?>"><?php echo e($suratmasuk->nomorsurat->kode_nomor_surat); ?></option>
                                      <?php $__currentLoopData = $nomorsurat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($data->master_surat_id); ?>" data-id="<?php echo e($data->kode_nomor_surat); ?>"><?php echo e($data->kode_nomor_surat); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                              </div>
                              <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Nomor Surat<i class="text-danger text-sm text-bold">*</i></label>
                                    <input type="text" name="nomor_surat_masuk" class="form-control" id="nomor_surat_masuk" placeholder="Nomor Surat" value="<?php echo e($suratmasuk->nomor_surat); ?>" required>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Parindikan<i class="text-danger text-sm text-bold">*</i></label>
                                    <input type="text" name="parindikan" class="form-control" id="parindikan" placeholder="Parindikan" value="<?php echo e($suratmasuk->perihal); ?>" required>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Mawit Saking<i class="text-danger text-sm text-bold">*</i></label>
                                    <input type="text" name="mawit_saking" class="form-control" id="mawit_saking" placeholder="Mawit Saking" value="<?php echo e($suratmasuk->asal_surat); ?>" required>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Tanggal Surat<i class="text-danger text-sm text-bold">*</i></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input name="tanggal_surat" class="form-control datepicker1" placeholder="Tanggal Surat" type="text" value="<?php echo e($suratmasuk->tanggal_surat); ?>" required>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <hr class="my-4" />
                      <h6 class="heading-small text-muted mb-4">Daging Surat</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-lg-12">
                            <label class="form-control-label" for="input-country">Tanggal Kegiatan</label>
                            <div class="input-daterange datepicker2 row align-items-center">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" name="tanggal_kegiatan_mulai" placeholder="Tanggal Kegiatan Mulai" type="text" value="<?php echo e($suratmasuk->tanggal_kegiatan_mulai); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" name="tanggal_kegiatan_berakhir" placeholder="Tanggal Kegiatan Selesai" type="text" value="<?php echo e($suratmasuk->tanggal_kegiatan_berakhir); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <label class="form-control-label" for="input-email">Waktu Kegiatan</label>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="time" name="waktu_kegiatan_mulai" class="form-control" id="waktu_kegiatan" placeholder="Waktu Kegiatan Mulai" value="<?php echo e($suratmasuk->waktu_kegiatan_mulai); ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="time" name="waktu_kegiatan_berakhir" class="form-control" id="waktu_kegiatan" placeholder="Waktu Kegiatan Selesai" value="<?php echo e($suratmasuk->waktu_kegiatan_berakhir); ?>">
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Surat<i class="text-danger text-sm text-bold">* File dalam format pdf (maksimal 25 MB)</i></label>
                                <input type="file" name="file_surat" class="form-control" placeholder="Lepihan Surat" value="" accept="application/pdf" required>
                            </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?php echo e(route('dashboard-surat-masuk')); ?>" type="button" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <!-- Footer -->
      <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Sweet-Alert -->
      <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
  
  


  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Datepicker Indonesia -->
  

  <!-- Select2 -->
  <script>
    $(document).ready(function() {
        $('.sekretaris_panitia').select2();
    });
    $(document).ready(function() {
        $('.ketua_panitia').select2();
    });
  </script>

  <!-- Generate Nomor Surat -->
  <script>
      $(function() {
        $.fn.datepicker.defaults.format = "dd-M-yyyy";
        $('.datepicker2').datepicker({
            format: 'dd-M-yyyy',
        });

        $('.datepicker1').datepicker({
            format: 'dd-M-yyyy',
        });


      });

        

  </script>


  <!-- Argon Scripts -->
  <script src="<?php echo e(asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
  <!-- Core -->
  <script src="<?php echo e(asset('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/js/plugins/nouislider.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('asset/js/plugins/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('asset/js/plugins/datetimepicker.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('asset/js/plugins/bootstrap-datepicker.min.js')); ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo e(asset('assets/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo e(asset('assets/js/argon.js?v=1.2.0')); ?>"></script>
</body>

</html>
<?php /**PATH D:\Teknologi Informasi\Tugas Akhir\PROJECT\SirajaProject\SirajaProject\resources\views/admin/suratmasuk/edit-surat-masuk.blade.php ENDPATH**/ ?>
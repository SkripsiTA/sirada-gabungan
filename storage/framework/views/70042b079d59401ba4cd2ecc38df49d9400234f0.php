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
                            <h3 class="mb-0">Edit surat Keluar</h3>
                        </div>
                    </div>
                </div>
                <form action="<?php echo e(route('update-surat-keluar-panitia', $suratkeluarpanitia->surat_keluar_id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                      <h6 class="heading-small text-muted mb-4">Atribut Surat</h6>
                      <div class="pl-lg-4">
                          <div class="row">
                              <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Nomor Surat<i class="text-danger text-sm text-bold">*</i></label>
                                    <input type="text" name="nomor_surat_keluar" class="form-control" placeholder="otomatis" value="<?php echo e($suratkeluarpanitia->nomor_surat); ?>">
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Lepihan<i class="text-danger text-sm text-bold">*</i></label>
                                    <input type="number" name="lepihan" class="form-control" id="lepihan" placeholder="Lepihan" value="<?php echo e($suratkeluarpanitia->lepihan); ?>">
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Parindikan<i class="text-danger text-sm text-bold">*</i></label>
                                    <input type="text" name="parindikan" class="form-control" id="parindikan" placeholder="Parindikan" value="<?php echo e($suratkeluarpanitia->parindikan); ?>">
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Tetujon<i class="text-danger text-sm text-bold">*</i></label>
                                    <input type="text" name="tetujon" class="form-control" id="tetujon" placeholder="Tetujon" value="<?php echo e($suratkeluarpanitia->pihak_penerima); ?>">
                                </div>
                              </div>
                          </div>
                      </div>

                      <hr class="my-4" />
                      <h6 class="heading-small text-muted mb-4">Daging Surat</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Pemahbah Surat</label>
                                <textarea rows="4" name="pemahbah_surat" class="form-control" placeholder="Pemahbah Surat"><?php echo e($suratkeluarpanitia->pamahbah_surat); ?></textarea>
                            </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-group">
                                  <label class="form-control-label" for="input-username">Daging Surat</label>
                                  <textarea rows="4" name="daging_surat" class="form-control" placeholder="Daging Surat"><?php echo e($suratkeluarpanitia->daging_surat); ?></textarea>
                              </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Pamuput Surat</label>
                                <textarea rows="4" name="pamuput_surat" class="form-control" placeholder="Pamuput Surat"><?php echo e($suratkeluarpanitia->pamuput_surat); ?></textarea>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <label class="form-control-label" for="input-country">Tanggal Kegiatan</label>
                            <div class="input-daterange datepicker row align-items-center">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" name="tanggal_kegiatan_mulai" placeholder="Tanggal Kegiatan Mulai" type="text" value="<?php echo e($suratkeluarpanitia->tanggal_kegiatan_mulai); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" name="tanggal_kegiatan_berakhir" placeholder="Tanggal Kegiatan Selesai" type="text" value="<?php echo e($suratkeluarpanitia->tanggal_kegiatan_berakhir); ?>">
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
                                        <input type="time" name="waktu_kegiatan_mulai" class="form-control" id="waktu_kegiatan" placeholder="Waktu Kegiatan Mulai" value="<?php echo e($suratkeluarpanitia->waktu_kegiatan_mulai); ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="time" name="waktu_kegiatan_berakhir" class="form-control" id="waktu_kegiatan" placeholder="Waktu Kegiatan Selesai" value="<?php echo e($suratkeluarpanitia->waktu_kegiatan_selesai); ?>">
                                    </div>
                                </div>
                              </div>
                            </div>
                          <div class="col-lg-8">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Busana/Pakaian</label>
                                <input type="text" name="busana" class="form-control" id="busana" placeholder="Busana/Pakaian" value="<?php echo e($suratkeluarpanitia->busana); ?>">
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Tempat Kegiatan</label>
                                <input type="text" name="tempat_kegiatan" class="form-control" id="tempat_kegiatan" placeholder="Tempat Kegiatan" value="<?php echo e($suratkeluarpanitia->tempat_kegiatan); ?>">
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Panitia Acara<i class="text-danger text-sm text-bold">*</i></label>
                                <input type="text" name="tim_kegiatan" class="password form-control" id="tim_kegiatan" placeholder="Panitia Acara" value="<?php echo e($suratkeluarpanitia->tim_kegiatan); ?>">
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                            <label class="form-control-label" for="input-country">Lepihan Surat<i class="text-danger text-sm text-bold">* File dalam format pdf (maksimal 25 MB)</i></label>
                            <input type="file" name="lepihan_surat" class="form-control" placeholder="Lepihan Surat" value="<?php echo e($suratkeluarpanitia->lampiran); ?>" accept="application/pdf">
                            </div>
                        </div>
                        </div>
                      </div>
                      <hr class="my-4" />
                      <h6 class="heading-small text-muted mb-4">Lingga Tangan miwah Pesengan</h6>
                      <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Sekretaris Panitia<i class="text-danger text-sm text-bold">*</i></label>
                                    <select name="sekretaris_panitia" class="sekretaris_panitia form-control" id="sekretaris_panitia" style="height: 100%">
                                      <?php if($suratkeluarpanitia->validasipanitia[1]->krama_mipil_id != null): ?>
                                      <option value="<?php echo e($suratkeluarpanitia->validasipanitia[1]->krama_mipil_id); ?>"><?php echo e($suratkeluarpanitia->validasipanitia[1]->kramamipil->cacahkramamipil->penduduk->nama); ?></option>
                                      <?php endif; ?>
                                      <?php $__currentLoopData = $kramamipil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($data->krama_mipil_id); ?>" data-id="<?php echo e($data->cacahkramamipil->penduduk->nik); ?>"><?php echo e($data->cacahkramamipil->penduduk->nik); ?> - <?php echo e($data->cacahkramamipil->penduduk->nama); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Ketua Panitia<i class="text-danger text-sm text-bold">*</i></label>
                                    <select name="ketua_panitia" class="ketua_panitia form-control" id="ketua_panitia" style="height: 100%">
                                      <option value="<?php echo e($suratkeluarpanitia->validasipanitia[0]->krama_mipil_id); ?>"><?php echo e($suratkeluarpanitia->validasipanitia[0]->kramamipil->cacahkramamipil->penduduk->nama); ?></option>
                                      <?php $__currentLoopData = $kramamipil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($data->krama_mipil_id); ?>" data-id="<?php echo e($data->cacahkramamipil->penduduk->nik); ?>"><?php echo e($data->cacahkramamipil->penduduk->nik); ?> - <?php echo e($data->cacahkramamipil->penduduk->nama); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Bendesa Adat<i class="text-danger text-sm text-bold">*</i></label>
                                    <select name="bendesa_adat" class="bendesa_adat form-control" id="bendesa_adat" style="height: 100%">
                                        
                                        
                                        <?php $__currentLoopData = $prajurudesa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($data->jabatan == 'bendesa'): ?>
                                            <option value="<?php echo e($data->prajuru_desa_adat_id); ?>"><?php echo e($data->kramamipil->cacahkramamipil->penduduk->nik); ?> - <?php echo e($data->kramamipil->cacahkramamipil->penduduk->nama); ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                      </div>
                      <h6 class="heading-small text-muted mb-4">Tumusan Surat</h6>
                      <div class="pl-lg-4">
                          <div class="row">
                              <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Tumusan</label>
                                    <input type="text" name="tumusan" class="form-control" id="tumusan" placeholder="Tumusan" value="<?php echo e($suratkeluarpanitia->tumusan); ?>">
                                </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?php echo e(route('home-surat-keluar-panitia')); ?>" type="button" class="btn btn-secondary">Batal</a>
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
        $('.datepicker').datepicker({
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
<?php /**PATH D:\Teknologi Informasi\Tugas Akhir\PROJECT\SirajaProject\SirajaProject\resources\views/admin/suratkeluar/suratPanitia/edit-surat-panitia.blade.php ENDPATH**/ ?>
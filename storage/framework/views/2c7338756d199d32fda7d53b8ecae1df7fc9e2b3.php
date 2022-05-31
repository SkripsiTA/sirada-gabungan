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
                    <!-- Search form -->
                    <div class="col-lg-12">
                        <div class="float-left">
                            <!-- Search form -->
                            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                                </div>
                            </div>
                            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </form>
                        </div>
                        <div class="float-right">
                            <a href="<?php echo e(route('cetak-daftar-surat-masuk')); ?>" type="button" class="btn btn-md btn-danger" target="_blank"><i class="fa fa-print"></i>
                            PDF</a>
                            <a href="<?php echo e(route('create-surat-masuk')); ?>" type="button" class="btn btn-md btn-primary"><i class="fa fa-plus"></i>
                            Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card shadow">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <!-- Card header -->
                                            <div class="card-header border-0">
                                            <h3 class="mb-0">Data Surat Masuk</h3>
                                            </div>
                                            <!-- Light table -->
                                            <div class="table-responsive">
                                            <table class="table align-items-left table-flush">
                                                <thead class="thead-light">
                                                    <tr class="text-left">
                                                        <th class="col-sm-1">No</th>
                                                        <th class="col-3">Kode Surat</th>
                                                        <th class="col-3">Parindikan</th>
                                                        <th class="col-2">Tanggal Surat</th>
                                                        <th class="col-1">Mawit Saking</th>
                                                        <th class="col-1">Tanggal Masuk</th>
                                                        <th class="col-1">Prajuru Desa Adat</th>
                                                        <th class="col-1">File</th>
                                                        <th class="col-3 text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">
                                                <?php
                                                    $i = 1;
                                                ?>
                                                <?php $__currentLoopData = $suratmasuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td> <?php echo e($i++); ?> </td>
                                                        <td> <?php echo e($data->nomor_surat); ?> </td>
                                                        <td> <?php echo e($data->perihal); ?> </td>
                                                        <?php if($data->tanggal_surat != null): ?>
                                                            <td> <?php echo e(showDateTime($data->tanggal_surat, 'd F Y')); ?></td>
                                                        <?php else: ?>
                                                            <td></td>
                                                        <?php endif; ?>
                                                        <td> <?php echo e($data->asal_surat); ?> </td>
                                                        <td><?php echo e(showDateTime($data->tanggal_diterima, 'd F Y')); ?></td>
                                                        <td> <?php echo e($data->prajurudesaadat->kramamipil->cacahkramamipil->penduduk->nama); ?> </td>
                                                        <td>
                                                            <a href="<?php echo e(route('file-surat-masuk', $data->surat_masuk_id)); ?>" class="view btn btn-sm btn-flat btn-default">Detail<i class="fa fa-file"></i></a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="<?php echo e(route('detail-surat-masuk', $data->surat_masuk_id)); ?>" class="view btn btn-sm btn-flat btn-info"><i class="fa fa-eye"></i></a>
                                                            <a href="<?php echo e(route('edit-surat-masuk', $data->surat_masuk_id)); ?>" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                                                            <button type="submit" class="btn btn-sm btn-flat btn-danger delete" data-id="<?php echo e($data->surat_masuk_id); ?>"><i class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer py-4">
                                                <?php echo e($suratmasuk->links('vendor.pagination.bootstrap-4')); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- Footer -->
      <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Sweet-Alert -->
      <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Modal Add -->
      

    

    </div>
  </div>


  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    $('.delete').click(function(e) {
        e.preventDefault();
        var suratmasukid = $(this).attr('data-id');

        swal({
            title: "Apakah yakin menghapus data ?",
            text: "Data surat masuk akan terhapus!",
            icon: "warning",
            buttons: ["Batal", "Hapus"],
            successMode: true,
        })
        .then((isConfirm) => {
            if (isConfirm) {
                window.location ="/surat/masuk/delete/"+suratmasukid+""
                swal("Berhasil! Data surat masuk telah terhapus!", {
                    icon: "success",
                });
            } else {
                swal("Gagal! Data surat masuk batal terhapus!", {
                    icon: "error",
                });
            }
        });
    });

  </script>



  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo e(asset('assets/vendor/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/js-cookie/js.cookie.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo e(asset('assets/vendor/chart.js/dist/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/chart.js/dist/Chart.extension.js')); ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo e(asset('assets/js/argon.js?v=1.2.0')); ?>"></script>
</body>

</html>
<?php /**PATH C:\x\htdocs\SirajaProject\resources\views/admin/suratmasuk/surat-masuk.blade.php ENDPATH**/ ?>
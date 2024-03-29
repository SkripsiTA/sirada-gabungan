<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Sistem Surat Menyurat</title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard" />
    <!--  Social tags      -->
    <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg" />
    <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('assets/img/brand/logo.png')); ?>" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/argon.min.css?v=1.2.0')); ?>" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Sidenav -->
    <?php echo $__env->make('superadmin.layouts.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main content -->
    <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php echo $__env->make('superadmin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Header -->
    <!-- Header -->
    <?php echo $__env->make('superadmin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">

        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-active-40 mr-2"></i>Menunggu Verifikasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-check-bold mr-2"></i>Terverifikasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-fat-remove mr-2"></i>Ditolak</a>
                            </li>
                        </ul>
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
                                                <div class="col-lg-12">
                                                    <div class="float-left">
                                                        <h3 >Data Desa</h3>
                                                    </div>

                                                    <div class="float-right">
                                                        <!-- Search form -->
                                                        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                                                        <div class="form-group mb-0">
                                                            <div class="input-group input-group-alternative input-group-merge">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                                                            </div>
                                                            <input class="search form-control" name="search" id="search" placeholder="Search" type="text">
                                                            </div>
                                                        </div>
                                                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Light table -->
                                            <div class="table-responsive">
                                            <table class="table align-items-center table-flush">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" class="sort" data-sort="name">No</th>
                                                    <th scope="col" class="sort" data-sort="name">Kode Desa</th>
                                                    <th scope="col" class="sort" data-sort="name">Nama Desa</th>
                                                    <th scope="col" class="sort" data-sort="budget">Kecamatan</th>
                                                    <th scope="col" class="sort" data-sort="budget">Kabupaten</th>
                                                    <th scope="col" class="sort" data-sort="status">Status</th>
                                                    <th scope="col">Nomor Register</th>
                                                    <th scope="col">Status Register</th>
                                                    <th scope="col" class="sort" data-sort="completion">Email</th>
                                                    
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody class="list">
                                                <?php
                                                    $i = 1;
                                                ?>
                                                <?php $__currentLoopData = $desaadatpending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <tr>
                                                    <td> <?php echo e($i++); ?> </td>
                                                    <td><?php echo e($data->desa_adat_id); ?></td>
                                                    <th scope="row"><?php echo e($data->desadat_nama); ?></th>
                                                    <td><?php echo e($data->kecamatan->name); ?></td>
                                                    <td><?php echo e($data->kecamatan->kabupaten->name); ?></td>
                                                    <td>
                                                        <?php if($data->desadat_status_aktif == "1"): ?>
                                                        <span class="right badge badge-info">Aktif</span>
                                                        <?php else: ?>
                                                        <span class="right badge badge-secondary">Tidak Aktif</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($data->desadat_nomor_register); ?></td>
                                                    <td>
                                                        <span class="right badge badge-warning"><?php echo e($data->desadat_status_register); ?></span>
                                                    </td>
                                                    <td><?php echo e($data->desadat_email); ?></td>
                                                    <td class="text-right">
                                                        <a href="<?php echo e(route('konfirm-pendaftaran-desa', $data->desa_adat_id)); ?>" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-check"></i></a>
                                                    </td>

                                                </tr>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer py-4">
                                                <?php echo e($desaadatpending->links('vendor.pagination.bootstrap-4')); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <!-- Card header -->
                                            <div class="card-header border-0">
                                            <h3 class="mb-0">Data Desa</h3>
                                            </div>
                                            <!-- Light table -->
                                            <div class="table-responsive">
                                                <table class="table align-items-center table-flush">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col" class="sort" data-sort="name">No</th>
                                                        <th scope="col" class="sort" data-sort="name">Kode Desa</th>
                                                        <th scope="col" class="sort" data-sort="name">Nama Desa</th>
                                                        <th scope="col" class="sort" data-sort="budget">Kecamatan</th>
                                                        <th scope="col" class="sort" data-sort="budget">Kabupaten</th>
                                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                                        <th scope="col">Nomor Register</th>
                                                        <th scope="col">Status Register</th>
                                                        <th scope="col" class="sort" data-sort="completion">Email</th>
                                                        
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="list">
                                                    <?php
                                                        $i = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $desaadatverif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td> <?php echo e($i++); ?> </td>
                                                        <td><?php echo e($data->desa_adat_id); ?></td>
                                                        <th scope="row"><?php echo e($data->desadat_nama); ?></th>
                                                            <td><?php echo e($data->kecamatan->name); ?></td>
                                                            <td><?php echo e($data->kecamatan->kabupaten->name); ?></td>
                                                            <td>
                                                                <?php if($data->desadat_status_aktif == "1"): ?>
                                                                <span class="right badge badge-info">Aktif</span>
                                                                <?php else: ?>
                                                                <span class="right badge badge-secondary">Tidak Aktif</span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><?php echo e($data->desadat_nomor_register); ?></td>
                                                            <td>
                                                                <span class="right badge badge-success"><?php echo e($data->desadat_status_register); ?></span>
                                                            </td>
                                                            <td><?php echo e($data->desadat_email); ?></td>
                                                            <td class="text-right">
                                                                
                                                                <a href="<?php echo e(route('detail-desa', $data->desa_adat_id)); ?>" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-eye"></i></a>
                                                            </td>

                                                        </tr>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer py-4">
                                                <?php echo e($desaadatverif->links('vendor.pagination.bootstrap-4')); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="card">
                                            <!-- Card header -->
                                            <div class="card-header border-0">
                                            <h3 class="mb-0">Data Desa</h3>
                                            </div>
                                            <!-- Light table -->
                                            <div class="table-responsive">
                                                <table class="table align-items-center table-flush">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col" class="sort" data-sort="name">No</th>
                                                        <th scope="col" class="sort" data-sort="name">Kode Desa</th>
                                                        <th scope="col" class="sort" data-sort="name">Nama Desa</th>
                                                        <th scope="col" class="sort" data-sort="budget">Kecamatan</th>
                                                        <th scope="col" class="sort" data-sort="budget">Kabupaten</th>
                                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                                        <th scope="col">Nomor Register</th>
                                                        <th scope="col">Status Register</th>
                                                        <th scope="col" class="sort" data-sort="completion">Alasan Ditolak</th>
                                                        
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="list">
                                                    <?php
                                                        $i = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $desaadattolak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <tr>
                                                        <td> <?php echo e($i++); ?> </td>
                                                        <td><?php echo e($data->desa_adat_id); ?></td>
                                                        <th scope="row"><?php echo e($data->desadat_nama); ?></th>
                                                            <td><?php echo e($data->kecamatan->name); ?></td>
                                                            <td><?php echo e($data->kecamatan->kabupaten->name); ?></td>
                                                            <td>
                                                                <?php if($data->desadat_status_aktif == "1"): ?>
                                                                <span class="right badge badge-info">Aktif</span>
                                                                <?php else: ?>
                                                                <span class="right badge badge-secondary">Tidak Aktif</span>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><?php echo e($data->desadat_nomor_register); ?></td>
                                                            <td>
                                                                <span class="right badge badge-danger"><?php echo e($data->desadat_status_register); ?></span>
                                                            </td>
                                                            <td><?php echo e($data->desadat_keterangan); ?></td>
                                                            <td class="text-right">
                                                                <a href="<?php echo e(route('detail-desa-tolak', $data->desa_adat_id)); ?>" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer py-4">
                                                <?php echo e($desaadattolak->links('vendor.pagination.bootstrap-4')); ?>

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
        <?php echo $__env->make('superadmin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Modal -->
        <div class="modal fade" id="konfirmDesa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Desa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body text-left">
                            <div class="form-section">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-address">Nomor Registrasi Desa</label>
                                    <input name="nomor_register_desa" class="form-control" placeholder="(otomatis)" value="" type="text" disabled>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Data Wilayah</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-username">Provinsi<i class="text-danger text-sm text-bold">*</i></label>
                                        <select name="provinsi" class="form-control" id="provinsi" required>
                                            <option value="">-- Pilih Provinsi --</option>
                                            <option value=""></option>
                                            
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-email">Kabupaten<i class="text-danger text-sm text-bold">*</i></label>
                                        <select name="kabupaten" class="form-control" id="kabupaten" required>
                                        </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Kecamatan<i class="text-danger text-sm text-bold">*</i></label>
                                        <select name="kecamatan" class="form-control" id="kecamatan" required>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Desa<i class="text-danger text-sm text-bold">*</i></label>
                                        <select name="desa" class="form-control" id="desa" required>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-kodewilayah">Kode Wilayah<i class="text-danger text-sm text-bold">*</i></label>
                                        <input type="text" name="kode_wilayah" class="form-control" placeholder="Kode Wilayah" value="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-kodepos">Kode Pos<i class="text-danger text-sm text-bold">*</i></label>
                                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" value="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-kodepos">Status Desa<i class="text-danger text-sm text-bold">*</i></label>
                                        <select name="status_desa" class="form-control" id="status_desa" required>
                                            <option value="">-- Pilih Status Desa --</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                        <label class="form-control-label" for="input-address">Alamat<i class="text-danger text-sm text-bold">*</i></label>
                                        <input name="alamat_desa" class="form-control" placeholder="Alamat Kantor Desa" value="" type="text" required>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Informasi Kontak</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-city">Telepon<i class="text-danger text-sm text-bold">*</i></label>
                                            <input type="text" name="telepon_desa" class="form-control" placeholder="Telepon" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-country">Whatsapp<i class="text-danger text-sm text-bold">*</i></label>
                                            <input type="text" name="kontak_wa" class="form-control" placeholder="Whatsapp" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-country">Faximile<i class="text-danger text-sm text-bold">*</i></label>
                                            <input type="text" name="fax_desa" class="form-control" placeholder="Faximile" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-address">Email Desa<i class="text-danger text-sm text-bold">*</i></label>
                                            <input name="email_desa" class="form-control" placeholder="Email Desa" value="" type="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-address">Web Desa<i class="text-danger text-sm text-bold">*</i></label>
                                            <input name="web_desa" class="form-control" placeholder="Web Desa" value="" type="url" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <h6 class="heading-small text-muted mb-4">Detail Desa</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-city">Luas Desa<span> m<sup>2</sup></span><i class="text-danger text-sm text-bold">*</i></label>
                                                <input type="number" name="luas_desa" class="form-control" placeholder="Luas Desa" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-country">Struktur Organisasi Desa<i class="text-danger text-sm text-bold">* File dalam format .jpg,jpeg,pdf (maksimal 3 MB)</i></label>
                                            <input type="file" name="file_struktur_pem" class="form-control" placeholder="Struktur Pembentukan Desa" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-country">Logo Desa<i class="text-danger text-sm text-bold">* File dalam format .jpg,jpeg,png (maksimal 1 MB)</i></label>
                                            <input type="file" name="logo_desa" class="form-control" placeholder="Logo Desa" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-address">Sejarah Desa</label>
                                            <textarea rows="4" name="sejarah_desa" class="form-control" placeholder="Sejarah Desa"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <h6 class="heading-small text-muted mb-4">Data Pemimpin</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label class="form-control-label" for="input-country">Sebutan Pemimpin<i class="text-danger text-sm text-bold">*</i></label>
                                            <input type="text" name="sebutan_pemimpin" class="form-control" placeholder="Sebutan Pemimpin" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">NIK dan Nama Lengkap<i class="text-danger text-sm text-bold">*</i></label>
                                                <select name="kramamipil_id" class="kramamipil_id form-control" id="kramamipil_id" style="height: 100%" required>
                                                  <option value="">-- Pilih Krama --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-control-label" for="input-country">Periode Menjabat<i class="text-danger text-sm text-bold">*</i></label>
                                            <div class="input-daterange datepicker row align-items-center">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                            </div>
                                                            <input class="form-control" name="masa_mulai" placeholder="Periode Mulai" type="text" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                            </div>
                                                            <input class="form-control" name="masa_berakhir" placeholder="Periode Berakhir" type="text" value="">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Nonaktifkan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>

    <script>
        $(document).ready(function() {
            fetch_data();

            function fetch_data(query = '') {
                $.ajax({
                    url:'<?php echo e(route('search-data-desa')); ?>',
                    method:'GET',
                    data: {query:query},
                    dataType: 'json',
                    success: function(data) {
                        $('tbody').html(data.table_data);
                    }
                })
            }

            $('.search').on('keyup', function() {
                var query = $(this).val();
                fetch_data(query);
                console.log(query)
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
    <!-- Argon JS -->
    <script src="<?php echo e(asset('assets/js/argon.min.js?v=1.2.0')); ?>"></script>
    <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
    </script>
    <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>
</body>

</html>
<?php /**PATH C:\x\htdocs\SirajaProject\resources\views/superadmin/dashboard/home-superadmin.blade.php ENDPATH**/ ?>
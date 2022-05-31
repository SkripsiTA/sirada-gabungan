<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistem Surat Menyurat</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/img/brand/logo.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
  <link type="text/css" href="{{ asset('assets/dist/css/select2.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/dist/js/select2.min.js') }}" defer></script>
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
  @include('admin.layouts.sidenav')

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('admin.layouts.navbar')

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                {{--  <h6 class="h2 text-white d-inline-block mb-0">Default</h6>  --}}
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                    {{--  <li class="breadcrumb-item active" aria-current="page">Default</li>  --}}
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
                            <a href="#" type="button" class="btn btn-md btn-primary" id="addData" data-target="#formKegiatanPanitia"><i class="fa fa-plus"></i>
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
                                            <h3 class="mb-0">Data Panitia Desa Adat {{ Auth::user()->desaadat->desadat_nama }}</h3>
                                            </div>
                                            <!-- Light table -->
                                            <div class="table-responsive">
                                            <table class="table align-items-left table-flush">
                                                <thead class="thead-light">
                                                    <tr class="text-left">
                                                        <th class="col-sm-1">No</th>
                                                        <th class="col-3">Nama</th>
                                                        <th class="col-2">Jabatan</th>
                                                        <th class="col-1">Status</th>
                                                        <th class="col-1">Periode Mulai</th>
                                                        <th class="col-1">Periode Selesai</th>
                                                        <th class="col-3 text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($panitiadesa as $data)
                                                    <tr>
                                                        <td> {{ $i++ }} </td>
                                                        <td> {{ $data->kramamipil->cacahkramamipil->penduduk->nama }} </td>
                                                        <td> {{ $data->jabatan }} </td>
                                                        <td> {{ $data->status_panitia_desa_adat }} </td>
                                                        <td>{{ showDateTime($data->tanggal_mulai_menjabat, 'd F Y') }}</td>
                                                        <td>{{ showDateTime($data->tanggal_akhir_menjabat, 'd F Y') }}</td>
                                                        <td class="text-center">
                                                            @if($data->status_panitia_desa_adat == 'aktif')
                                                                <a href="{{ route('edit-prajuru-desa-adat', $data->status_panitia_desa_adat) }}" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                                                                <button type="submit" class="btn btn-sm btn-flat btn-danger nonaktif" data-id="{{ $data->status_panitia_desa_adat }}"><i class="fa fa-toggle-off"></i></button>
                                                            @else
                                                                <button type="submit" class="btn btn-sm btn-flat btn-success aktif" data-id="{{ $data->status_panitia_desa_adat }}"><i class="fa fa-toggle-on"></i></button>
                                                            @endif

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            </div>
                                            <!-- Card footer -->
                                            <div class="card-footer py-4">
                                                {{ $panitiadesa->links('vendor.pagination.bootstrap-4') }}
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
      @include('admin.layouts.footer')

      <!-- Sweet-Alert -->
      @include('sweetalert::alert')

      <!-- Modal Add -->
      <div class="modal fade" id="formKegiatanPanitia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ajaxKegiatanPanitia"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('get-kegiatan-panitia') }}" id="myForm" name="myForm" class="form-horizontal" method="POST">
                {{--  {{ csrf_field() }}  --}}
                <div class="modal-body">
                    {{-- Error Alert --}}
                    {{--  @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Inputan yang anda berikan salah!<br><br>
                        </div>
                    @endif  --}}
                    <input type="hidden" id="kegiatan_surat_id" name="kegiatan_surat">
                    <div class="pl-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Panitia Kegiatan</label>
                                    <select name="panitiakegiatan" class="panitia_kegiatan form-control" id="panitiakegiatan" style="height: 100%; display:block;" required>
                                        <option value="">-- Pilih Panitia Kegiatan --</option>
                                        @foreach ($kegiatanpanitia as $data)
                                            <option value="{{ $data->kegiatan_panitia_id }}" data-id="{{ $data->kegiatan_panitia_id }}" data-nama="{{ $data->panitia }}">{{ $data->panitia }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input checkbox" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-muted">Input Manual</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="panitia_kegiatan" class="form-control" id="inputpanitia" placeholder="Panitia Kegiatan" style="display: none; margin-top: 10px;" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btnnext" value="add">Selanjutnya</button>
                </div>
            </form>
            </div>
        </div>
      </div>


    </div>
  </div>


  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    $('.nonaktif').click(function(e) {
        e.preventDefault();
        var prajurudesaid = $(this).attr('data-id');

            swal({
                title: "Apakah yakin menonaktifkan ?",
                text: "Data prajuru tidak dapat diubah lagi!",
                icon: "warning",
                buttons: ["Batal", "Nonaktifkan"],
                dangerMode: true,
            })
            .then((isConfirm) => {
                if (isConfirm) {
                    window.location ="/prajuru/desaadat/nonaktif/"+prajurudesaid+""
                    swal("Berhasil! Data prajuru desa telah dinonaktifkan!", {
                        icon: "success",
                    });
                } else {
                    swal("Batal! Data prajuru desa aktif!", {
                        icon: "error",
                    });
                }
            });
    });

    $('.aktif').click(function(e) {
        e.preventDefault();
        var prajurudesaid = $(this).attr('data-id');

            swal({
                title: "Apakah yakin mengaktifkan ?",
                text: "Data prajuru diaktifkan kembali!",
                icon: "warning",
                buttons: ["Batal", "Aktifkan"],
                successMode: true,
            })
            .then((isConfirm) => {
                if (isConfirm) {
                    window.location ="/prajuru/desaadat/aktif/"+prajurudesaid+""
                    swal("Berhasil! Data prajuru desa telah diaktifkan!", {
                        icon: "success",
                    });
                } else {
                    swal("Batal! Data prajuru desa nonaktif!", {
                        icon: "error",
                    });
                }
            });
    });

  </script>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#panitia_kegiatan').select2();
    });

    $(document).ready(function ($) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#addData').click(function () {
            $('#myForm').trigger("reset");
            $('#ajaxKegiatanPanitia').html("Pilih Kegiatan Kepanitiaan");
            window.$('#formKegiatanPanitia').modal('show');
        });

        $('#next').click(function () {
            var kegiatanid = $('#panitiakegiatan').find(':selected').data('id');
            var panitia = $('#panitiakegiatan').find(':selected').data('nama');
            var input = $('#inputpanitia').val();
            console.log(input);

            if(input.length != ''){
                alert(input);
            } else if(panitia.length != '') {
                //ajax
                $.ajax({
                    type: "POST",
                    url: "{{ route('create-panitia-desa-adat') }}",
                    data: { kegiatanid: kegiatanid },
                    dataType: 'json',
                    success: function (res) {
                        $('#tim_kegiatan_id').val(res.kegiatanid);
                        $('#tim_kegiatan').val(res.panitia);
                    }

                });
                {{--  alert(panitia);  --}}
            } else {
                swal("Data tidak ditemukan!");
            }

        });

        $('#btn_save').click(function (event) {
            var master_surat_id = $("#master_surat_id").val();
            var kode_nomor_surat = $("#kode_nomor_surat").val();
            var keterangan = $("#keterangan").val();

            $("#btn_save").html('Mohon ditunggu...');
            $("#btn_save").attr("disabled", true);

            //ajax
            $.ajax({
                type: "POST",
                url: "{{ route('add-update-nomor-surat') }}",
                data: {
                    master_surat_id: master_surat_id,
                    kode_nomor_surat: kode_nomor_surat,
                    keterangan: keterangan,
                },
                dataType: 'json',
                success: function (res) {
                    window.location.reload();
                    $("#btn_save").html('Submit');
                    $("#btn_save").attr("disabled", false);
                    swal("Sukses!", "Data berhasil ditambahkan!", "success");
                },
                error: function (request, status, error) {
                    swal(request.responseText);
                }
            });
        });
    });
  </script>

  <script>
    $(document).ready(function(){
        $('.checkbox').click(function(){
        if ($('.checkbox').is(":checked")) {
            document.getElementById("inputpanitia").style.display = "block";
            $("#panitiakegiatan").attr("disabled", true);
            $('#panitiakegiatan').val('');
        } else {
            document.getElementById("inputpanitia").style.display = "none";
            $("#panitiakegiatan").removeAttr("disabled");
            $('#inputpanitia').val('');
        }
        });


    });
  </script>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>

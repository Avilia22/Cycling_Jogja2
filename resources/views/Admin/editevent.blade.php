<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 </title>

  <!-- Custom fonts for this template -->
  <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('include.sidebar')
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        @include('include.topbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Tambah Event</h6>
            </div>
            <div class="card-body">
                    
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tbody>
                            @foreach($events as $e)
                            <form action="/admin/update" method="post">
                         {{ csrf_field() }}
                                     <input type="hidden" name="id" value="{{ $e->id }}"> <br/>
                            <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar Event</label>
                                    <div class="col-sm-5">
                                      <input type="text" required="required" name="gambar_event" value="{{ $e->gambar_event }}" class="form-control">
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Nama Event</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="nama_event" value="{{ $e->nama_event }}" class="form-control">
                                            </div>
                                          </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Rincian Event</label>
                                      <div class="col-sm-5">
                                        <textarea class="form-control" required="required" name="rincian_event">{{ $e->rincian_event }}</textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Waktu Pelaksanaan</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="waktu_pelaksanaan" value="{{ $e->waktu_pelaksanaan}}" class="form-control">
                                            </div>
                                          </div>
                                     <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Rute</label>
                                      <div class="col-sm-5">
                                            <textarea class="form-control" required="required" name="rute">{{ $e->rute }}</textarea>
                                      </div>
                                    </div>  
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Harga Tiket</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="harga_tiket" value="{{ $e->harga_tiket}}" class="form-control">

                                            </div>
                                          </div>   
                                   <input type="submit" value="Simpan Data" class="btn btn-primary" >
                                  </form>
                                  @endforeach
                      </tbody>
                  </thead>
                </table>
                
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('include.footerAd')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
          <a class="btn btn-primary"href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/admin/vendor/jquery/jquery.min.js"></script>
  <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/admin/js/demo/datatables-demo.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resta</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/dist/img/df.jpg')}}" alt="DonquixoteFamily" height="70" width="70">

        </div>

        <!-- Navbar -->
        @include('layouts.include.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.include.sidebar')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                                  <div class="card-body p-0">
                                      <table class="table table-sm">
                                          <thead>
                                              <tr>
                                                  <th style="width: 10px">No</th>
                                                  <th>Nis</th>
                                                  <th>Nama</th>
                                                  <th style="width: 40px">Jenis Kelamin</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>1.</td>
                                                  <td>12345</td>
                                                  <td>Resta</td>
                                                  <td>L</td>
                                              </tr>
                                              <tr>
                                                  <td>2.</td>
                                                  <td>12346</td>
                                                  <td>Kiki</td>
                                                  <td>L</span></td>
                                              </tr>
                                            <tr>
                                                  <td>3.</td>
                                                  <td>12145</td>
                                                  <td>Nadia</td>
                                                  <td>P</span></td>
                                              </tr><tr>
                                                  <td>4.</td>
                                                  <td>12334</td>
                                                  <td>Gobang</td>
                                                  <td>L</span></td>
                                              </tr>

                                              <tr>
                                                  <td>4.</td>
                                                  <td>12115</td>
                                                  <td>Aviaa</td>
                                                  <td>P</span></td>
                                              </tr>

                                          </tbody>
                                      </table>
                                  </div>
                                <br>
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">Form</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control" placeholder="Masukan Nama">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- textarea -->
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- checkbox -->
                                                    <div class="form-group">
                                                    <label>Kelas</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">X</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">XI</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label">XII</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- radio -->
                                                    <div class="form-group">
                                                    <label>Jurusan</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="radio1">
                                                            <label class="form-check-label">Tbsm</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="radio1" checked>
                                                            <label class="form-check-label">RPL</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio">
                                                            <label class="form-check-label">TKR</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="row">
                                                <div class="col-sm-10">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label>Agama</label>
                                                        <select class="form-control">
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Hindhu</option>
                                                            <option>konguchu</option>
                                                            <option>Gak punya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- Select multiple-->
                                                    <div class="form-group">
                                                        <label>Hobi</label>
                                                        <select multiple class="form-control">
                                                            <option>Membaca</option>
                                                            <option>Menulis</option>
                                                            <option>Menonton</option>
                                                            <option>Main Game</option>
                                                            <option>Ngoding</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                </div>
                                            </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-info">Next</button>
                                                </div></form>
                                    </div>
                                    <!-- /.card-body -->
                                </div>

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Restaiii</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/assets/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('/assets/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{ asset('/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/assets/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/assets/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('/assets/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>


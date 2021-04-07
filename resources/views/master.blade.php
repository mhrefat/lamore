
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="67urn2m3QjwgtbQWvsWFcMkGPZFWU1RlhewZNqjo">
  <title>L'AMORE IMPEX -  | POS Dashboard</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/theme/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/daterangepicker/daterangepicker.css">
  <!-- Datetime picker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://italy.kinetixbd.com/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.5.55/css/materialdesignicons.min.css">

  <!-- jQuery -->
  <script src="https://italy.kinetixbd.com/plugins/jquery/jquery.min.js"></script>
  <script src="https://italy.kinetixbd.com/js/jquery-ui.min.js"></script>
  <!-- Livewire Styles -->
<style>
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid] {
        display: none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard/pos" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://italy.kinetixbd.com/admin/settings" class="nav-link">Settings</a>
      </li>
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          L'AMORE IMPEX <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://italy.kinetixbd.com/logout"
                  onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                          Logout
              </a>

              <form id="logout-form" action="https://italy.kinetixbd.com/logout" method="POST" style="display: none;">
                  <input type="hidden" name="_token" value="67urn2m3QjwgtbQWvsWFcMkGPZFWU1RlhewZNqjo">              </form>
          </div>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary mb-5 elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://italy.kinetixbd.com/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">L'AMORE IMPEX</span>
    </a>



   <!-- sidebar  was here--> 
   @include('partial.sidebar')
  </aside>

  
      

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">POS Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">POS Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
            
  <!-- Main content -->
  
  <!-- /.content -->
</div>

<script>
  
  $(function () {
    var ctx = $('#wkSaleChart').get(0).getContext('2d');
    var labels = ["2021-Feb-28","2021-Mar-01","2021-Mar-02","2021-Mar-03","2021-Mar-04","2021-Mar-05","2021-Mar-06"];
    var data = [0,0,0,0,0,0,0];

    var chart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
            label: 'Label',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: '#2c361f',
            data: data
          }]
      },
        
      options: {
          legend: {
              display: false
          },
          tooltips: {
              callbacks: {
                  label: function(tooltipItem) {
                        return tooltipItem.yLabel;
                  }
              }
          }
      }
    });

    //Monthly Sales
    var ctx = $('#moSaleChart').get(0).getContext('2d');

    var labels = ["Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec","Jan","Feb","Mar"];
    var data = [0,0,0,0,0,0,0,0,0,0,0,0];

    var chart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: labels,
          datasets: [{
            label: 'Label',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: '#2c361f',
            data: data
          }]
      },
        
      options: {
          legend: {
              display: false
          },
          tooltips: {
              callbacks: {
                label: function(tooltipItem) {
                  return tooltipItem.yLabel;
                }
              }
          }
      }
    });

  });

</script>

<script>
  $(document).ready(function(){
    load_data ();
    function load_data(from_date = '', to_date = ''){
        $("#reports").DataTable({
            "responsive": true,
            "autoWidth": false,
            "precessing": true,
            "serverSide": true,
            "columnDefs": [
                { "orderable": false, "targets": 0 }
            ],
            dom: 'frtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            "pageLength": 50,
            "footerCallback": function ( row, data, start, end, display ) {
                var api = this.api(), data;
                // Remove the formatting to get integer data for summation
                var intVal = function ( i ) {
                    return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '')*1 :
                        typeof i === 'number' ?
                            i : 0;
                };
    
                // Total over all pages
                amount = api
                    .column( 6 )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );

                total = api
                    .column( 7 )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );

                profit = api
                    .column( 8 )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );
                // Payment Total
                payTotal = api
                    .column( 9 )
                    .data()
                    .reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    }, 0 );

                due = total - payTotal;
    
                // Update footer
                $( api.column( 6 ).footer() ).html(
                    amount
                );
                $( api.column( 7 ).footer() ).html(
                    total
                );
                $( api.column( 8 ).footer() ).html(
                        profit
                );
                $( api.column( 9 ).footer() ).html(
                    payTotal
                );
                $( api.column( 10 ).footer() ).html(
                    due
                );
            },
            ajax: {
            url: 'https://italy.kinetixbd.com/dashboard/get_sales_report_date',
            data:{from_date:from_date, to_date:to_date},
            },
            columns: [
                {data:'date',},
                {data:'invoice_no',},
                {data:'cname',},
                {data:'vat',},
                {data:'scharge',},
                {data:'discount',},
                {data:'amount',},
                {data:'gtotal',},
                {data:'profit',},
                {data:'payment',},
                {data:'due',},
                // {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
      }
  });
</script>

      
    

<footer class="main-footer">
    <strong>Copyright &copy; 2020-<script>document.write(new Date().getFullYear())</script> <a href="https://lamoreimpex.com">L'AMORE IMPEX</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jquery-validation -->
<script src="https://italy.kinetixbd.com/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="https://italy.kinetixbd.com/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://italy.kinetixbd.com/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://italy.kinetixbd.com/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Popper JS -->
<script src="https://italy.kinetixbd.com/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="https://italy.kinetixbd.com/plugins/select2/js/select2.full.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://italy.kinetixbd.com/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTables -->
<script src="https://italy.kinetixbd.com/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://italy.kinetixbd.com/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://italy.kinetixbd.com/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://italy.kinetixbd.com/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->
<script src="https://italy.kinetixbd.com/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="https://italy.kinetixbd.com/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="https://italy.kinetixbd.com/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="https://italy.kinetixbd.com/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="https://italy.kinetixbd.com/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="https://italy.kinetixbd.com/plugins/moment/moment.min.js"></script>
<script src="https://italy.kinetixbd.com/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datetimepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="https://italy.kinetixbd.com/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="https://italy.kinetixbd.com/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="https://italy.kinetixbd.com/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="https://italy.kinetixbd.com/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://italy.kinetixbd.com/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://italy.kinetixbd.com/dist/js/pages/dashboard.js"></script>
<!-- Datatable Helpers -->
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<!-- Livewire Scripts -->

<script src="/livewire/livewire.js?id=d9e06c155e467adb5de2" data-turbo-eval="false" data-turbolinks-eval="false"></script>
<script data-turbo-eval="false" data-turbolinks-eval="false">
    if (window.livewire) {
        console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
    }

    window.livewire = new Livewire();
    window.livewire.devTools(true);
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = '67urn2m3QjwgtbQWvsWFcMkGPZFWU1RlhewZNqjo';

    /* Make sure Livewire loads first. */
    if (window.Alpine) {
        /* Defer showing the warning so it doesn't get buried under downstream errors. */
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function() {
                console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\n\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
            })
        });
    }

    /* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    document.addEventListener("DOMContentLoaded", function () {
        window.livewire.start();
    });
</script>
</body>
</html>



@include('admin.layouts.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.layouts.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 
  @include('admin.layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <div class="container m-5">
    <div class="row">
    {{-- @foreach($profs as $prof)  --}}
        <div class="col-3">
            <div class="card ">
                <div class="card-header text-center bg-primary text-light">
                    Professional Data
                </div>
                <div class="card-body">
                    {{-- <h5 class="card-photo">Prof photo</h5>
                    <p class="card-text"><b>Name:</b> </p> --}}
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
</div>      </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')


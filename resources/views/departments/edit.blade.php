
<!-- Page Heading -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Add Employee</title>
  <!-- Custom fonts for this template -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

  <!-- Custom styles for this template -->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset('js/jquery.easing.min.js')}}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.css')}}"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
          <i class="fa fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">EMP Manage</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('departments.index')}}" data-toggle="collapse" data-target="#department" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-list"></i>
          <span>Department</span>
        </a>
        <div id="department" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('departments.index')}}">All Departments</a>
            <a class="collapse-item" href="{{route('departments.create')}}">Add Department</a>
          </div>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('employe.index')}}" data-toggle="collapse" data-target="#employee" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-users"></i>
          <span>Employees</span>
        </a>
        <div id="employee" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('employe.index')}}">All Employees</a>
            <a class="collapse-item" href="{{route('employe.create')}}">Add Employee</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#report" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-chart-bar"></i>
          <span>Reports</span>
        </a>
        <div id="report" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Attendance</a>
            <a class="collapse-item" href="">Payments</a>
            <a class="collapse-item" href="">Employee Wise Payments</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a href="" class="nav-link">Logout</a>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a href="#" class="nav-link">Today Date: 19-01-2022</a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid pt-4">
              <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Department <a href="{{route('departments.index')}}" title="List Data" class="float-right"><i class="fa fa-arrow-left"></i></a></h6>
    </div>
    <div class="card-body">
                <div class="table-responsive">
            <form method="post" action="{{route('departments.update',$user->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <tr>
                        <th>Title <span class="text-danger">*</span></th>
                        <td><input type="text" name="title" class="form-control" value="{{$user->title}}" /></td>
                    </tr>
                    <tr>
                        <th>Details <span class="text-danger">*</span></th>
                        <td><input type="text" name="details" class="form-control" value="{{$user->details}}" /></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit"  class="btn btn-success"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                        <a class="btn btn-success" href="{{route('departments.index')}}">Back</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2022</span>
          </div>
        </div>
      </footer>
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
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="qCJy76o7iUdK6etxVkEpoBYfQS0dp1IZrO1zZEpn">
  
  <title>TheScienceBreaker - Admin</title>

  <!-- Custom styles for this template-->
  <link href="{{ asset('_projects/tsb/css/tables.admin.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('_projects/tsb/css/admin.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('_projects/tsb/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('_projects/tsb/css/app.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('_projects/tsb/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"></head>

<body class="fixed-nav sticky-footer bg-default" id="page-top">

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="/admin/dashboard"><strong>TheScienceBreaker</strong></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

    <ul class="bg-default navbar-nav navbar-sidenav" id="exampleAccordion">

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
    <a class="nav-link" href="/admin/dashboard">
      <i class="fa fa-tachometer mr-1" aria-hidden="true"></i>
      <span class="nav-link-text">Dashboard</span>
    </a>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
    <a class="nav-link" href="/admin/graphs">
      <i class="fa fa-bar-chart" aria-hidden="true"></i>
      <span class="nav-link-text">Graphs</span>
    </a>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Breaks">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#breaks" data-parent="#exampleAccordion">
      <i class="fa fa-book mr-1" aria-hidden="true"></i>
      <span class="nav-link-text">Breaks</span>
    </a>
    <ul class="sidenav-second-level collapse" id="breaks">
      <li>
        <a href="/admin/breaks/add">Add new Break</a>
      </li>
      <li>
        <a href="/admin/breaks/edit">Edit a Break</a>
      </li>
      <li>
        <a href="/admin/breaks/delete">Delete a Break</a>
      </li>
    </ul>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Breakers">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#breakers" data-parent="#exampleAccordion">
      <i class="fa fa-users mr-1" aria-hidden="true"></i>
      <span class="nav-link-text">Breakers</span>
    </a>
    <ul class="sidenav-second-level collapse" id="breakers">
      <li>
        <a href="/admin/breakers/add">Add new Breaker</a>
      </li>
      <li>
        <a href="/admin/breakers/edit">Edit a Breaker</a>
      </li>
      <li>
        <a href="/admin/breakers/delete">Remove a Breaker</a>
      </li>
    </ul>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Team">
    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#team" data-parent="#exampleAccordion">
      <i class="fa fa-briefcase mr-1" aria-hidden="true"></i>
      <span class="nav-link-text">Team</span>
    </a>
    <ul class="sidenav-second-level collapse" id="team">
      <li>
        <a href="/admin/managers/add">Add new member</a>
      </li>
      <li>
        <a href="/admin/managers/edit">Edit a member</a>
      </li>
      <li>
        <a href="/admin/managers/delete">Remove a member</a>
      </li>
    </ul>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Editor's Picks">
    <a class="nav-link" href="/admin/available-articles">
      <i class="fa fa-coffee mr-1" aria-hidden="true"></i>
      <span class="nav-link-text">Available Articles</span>
    </a>
  </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Editor's Picks">
    <a class="nav-link" href="/admin/editor-picks">
      <i class="fa fa-star mr-1" aria-hidden="true"></i>
      <span class="nav-link-text">Editor's picks</span>
    </a>
  </li>

  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subscriptions">
    <a class="nav-link" href="/admin/subscriptions">
      <i class="fa fa-database mr-1" aria-hidden="true"></i>
      <span class="nav-link-text">Subscriptions</span>
    </a>
  </li>

</ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="http://thesciencebreaker.app/logout"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              <i class="fa fa-fw fa-sign-out"></i>Logout
          </a>

          <form id="logout-form" action="http://thesciencebreaker.app/logout" method="POST" style="display: none;">
              <input type="hidden" name="_token" value="qCJy76o7iUdK6etxVkEpoBYfQS0dp1IZrO1zZEpn">
          </form>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
      
    <div class="container-fluid mb-4">
      
      <ol class="breadcrumb">
	<li class="breadcrumb-item text-orange"><strong>Graphs</strong></li>
	<li class="breadcrumb-item active hidden-xs-down">Useful data from the database</li>
</ol>
      
       <div class="row">
        <div class="col-lg-5 col-md-8 col-sm-10 col-xs-12 mx-auto">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-pie-chart"></i> Breaks by Category
              </div>
              <div class="card-body pl-5 pr-5">
                <canvas id="myPieChart" width="100%" height="100">
                                      <div data-category="Earth &amp; Space" data-count="9" data-color="#c9e1ef"></div>
                                      <div data-category="Evolution &amp; Behaviour" data-count="21" data-color="#f2f2f2"></div>
                                      <div data-category="Health &amp; Physiology" data-count="15" data-color="#3f4a5a"></div>
                                      <div data-category="Maths, Physics &amp; Chemistry" data-count="2" data-color="#252e3c"></div>
                                      <div data-category="Microbiology" data-count="6" data-color="#ffd55c"></div>
                                      <div data-category="Neurobiology" data-count="4" data-color="#50c4d0"></div>
                                      <div data-category="Plant Biology" data-count="7" data-color="#f36e41"></div>
                                  </canvas>
              </div>
            </div>        
        </div>
        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 mx-auto">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-bar-chart"></i> Breaks added by Month
              </div>
              <div class="card-body">
                <canvas id="myBarChart" width="100" height="50" data-color="#06b2b8">
                                      <div data-month="June" data-count="2"></div>
                                      <div data-month="July" data-count="3"></div>
                                      <div data-month="August" data-count="3"></div>
                                      <div data-month="September" data-count="6"></div>
                                      <div data-month="October" data-count="1"></div>
                                  </canvas>
              </div>
            </div>        
        </div>
      </div>

    </div>
    
        
    <footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © TheScienceBreaker 2017</small>
    </div>
  </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('_projects/tsb/js/admin/jquery.min.js') }}"></script>
    <script src="{{ asset('_projects/tsb/js/admin/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('_projects/tsb/js/admin/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('_projects/tsb/js/admin/Chart.min.js') }}"></script>
    <script src="{{ asset('_projects/tsb/js/admin/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('_projects/tsb/js/admin/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('_projects/tsb/js/admin/sb-admin.min.js') }}"></script>
    <script src="{{ asset('_projects/tsb/js/app.js') }}"></script>    
        <!-- Custom scripts for this page-->
    <script src="{{ asset('_projects/tsb/js/admin/sb-admin-datatables.min.js') }}"></script>
    <script src="{{ asset('_projects/tsb/js/admin/sb-admin-charts.js') }}"></script>
  
  </div>

</body>

</html>
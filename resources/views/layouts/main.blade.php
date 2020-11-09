<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Asset Management System</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('/bower/bootstrap/dist/css/bootstrap.min.css') }}">
	<!-- select2 -->
	<link rel="stylesheet" href="{{ asset('/bower/select2/dist/css/select2.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('/css/ionicons.min.css') }}">
	<!-- jQuery jvectormap -->
	<link rel="stylesheet" href="{{ asset('/css/jquery-jvectormap.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
 	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ asset('/css/skins/_all-skins.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/balloon-css/0.5.0/balloon.min.css">
	<!-- Fonts -->
	<!-- <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Roboto:400,300' type='text/css'> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- 3rd parties -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
	<!-- <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/> -->
	<link rel="stylesheet" href="{{ asset('/bower/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/daterangepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower/fullcalendar/dist/fullcalendar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower/ng-tags-input/ng-tags-input.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower/AngularJS-Toaster/toaster.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower/angular-xeditable/dist/css/xeditable.css') }}">
	<!-- Tags Input -->
	<!-- <link href="{{ asset('/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/bootstrap-tagsinput-typeahead.css') }}" rel="stylesheet"> -->
	<!-- Inline Style -->
	<style type="text/css">
		.has-error .select2-selection {
		    border-color:#a94442;
		    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
		    box-shadow:inset 0 1px 1px rgba(0,0,0,.075)
		}
	</style>

	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('/js/env.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/angular/angular.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/moment/moment.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/fullcalendar/dist/fullcalendar.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/fullcalendar/dist/locale/th.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/ng-tags-input/ng-tags-input.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/angular-animate/angular-animate.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/AngularJS-Toaster/toaster.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/angular-xeditable/dist/js/xeditable.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/angular-modal-service/dst/angular-modal-service.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/underscore/underscore-min.js') }}"></script>
	<!-- Tags Input -->
	<!-- <script type="text/javascript" src="{{ asset('/js/bootstrap-tagsinput.min.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('/js/bootstrap-tagsinput-angular.min.js') }}"></script> -->
	<!-- jQuery-UI -->
	<script type="text/javascript" src="{{ asset('/bower/jquery-ui/jquery-ui.min.js') }}"></script>
	<!-- Other -->
	<script type="text/javascript" src="{{ asset('/bower/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/select2/dist/js/select2.full.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/daterangepicker/lib/daterangepicker/daterangepicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap-datepicker-custom.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower/bootstrap-datepicker/dist/locales/bootstrap-datepicker.th.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/jquery.knob.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/fastclick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/thaibath.js') }}"></script>
	<!-- Highcharts -->
	<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript" src="http://code.highcharts.com/highcharts-more.js"></script>	
	<!-- AdminLTE App -->
	<script type="text/javascript" src="{{ asset('/js/adminlte.min.js') }}"></script>
	<!-- AngularJS Components -->
	<script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/mainCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/homeCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/assetCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/assetGroupCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/assetClassCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/assetCateCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/assetTypeCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/assetUnitCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/supplierCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/depreciationCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/deprecTypeCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/parcelCtrl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/controllers/reportCtrl.js') }}"></script>
	<!--<script type="text/javascript" src="{{ asset('/js/directives/highcharts.js') }}"></script>-->
	<script type="text/javascript" src="{{ asset('/js/services/report.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/services/stringFormat.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/services/pagination.js') }}"></script>

	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!--<script type="text/javascript" src="{{ asset('/js/services/dashboard.js') }}"></script>-->
	<!-- AdminLTE for demo purposes -->
	<!--<script type="text/javascript" src="{{ asset('/js/services/demo.js') }}"></script>-->
</head>
<!-- To set sidebar mini style on init use .sidebar-collapse to body tag -->
<body class="skin-blue hold-transition sidebar-mini" ng-app="app" ng-controller="mainCtrl"> 
	<div class="wrapper">
		<!-- header -->		
		@include('layouts.header')		

		<!-- sidebar -->
		@include('layouts.sidebar')

		<!-- Content Wrapper. Contains page content -->
  		<div class="content-wrapper">

            @yield('content')

            <toaster-container></toaster-container>
				
		</div><!-- /.content-wrapper -->

	  	<!-- Footer -->
		@include('layouts.footer')

		<!-- Control Sidebar -->
		@include('layouts.control-sidebar')

	</div><!-- ./wrapper -->
</body>
</html>

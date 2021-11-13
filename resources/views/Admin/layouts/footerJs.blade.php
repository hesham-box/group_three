<!-- jQuery  -->
<script src="{{ URL::asset('admin/en/assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/detect.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/fastclick.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/waves.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{ URL::asset('admin/en/assets/js/jquery.scrollTo.min.js')}}"></script>


<!--Morris Chart-->
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>

<!-- dashboard js -->
{{-- <script src="admin/en/assets/pages/dashboard.int.js"></script> --}}
<script src="{{ URL::asset('admin/en/assets/pages/dashboard.int.js')}}"></script>


<!-- App js -->
<script src="{{ URL::asset('admin/en/assets/js/app.js')}}"></script>

@yield('js')

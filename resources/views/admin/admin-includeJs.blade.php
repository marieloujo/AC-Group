

<!--   Core JS Files   -->
<script src="{{asset('create-tim/js/core/jquery.min.js')}}"></script>
<script src="{{asset('create-tim/js/core/popper.min.js')}}"></script>
<script src="{{asset('create-tim/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('create-tim/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

<!-- Plugin for the momentJs  -->
<script src="{{asset('create-tim/js/plugins/moment.min.js')}}"></script>


<!--  Plugin for Sweet Alert -->
<script src="{{asset('create-tim/js/plugins/sweetalert2.js')}}"></script>


<!-- Forms Validations Plugin -->
<script src="{{asset('create-tim/js/plugins/jquery.validate.min.js')}}"></script>


<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('create-tim/js/plugins/jquery.bootstrap-wizard.js')}}"></script>


<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{asset('create-tim/js/plugins/bootstrap-selectpicker.js')}}"></script>


<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset('create-tim/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>


<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{asset('create-tim/js/plugins/jquery.dataTables.min.js')}}"></script>


<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset('create-tim/js/plugins/bootstrap-tagsinput.js')}}"></script>


<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('create-tim/js/plugins/jasny-bootstrap.min.js')}}"></script>


<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{asset('create-tim/js/plugins/fullcalendar.min.js')}}"></script>


<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('create-tim/js/plugins/jquery-jvectormap.js')}}"></script>


<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('create-tim/js/plugins/nouislider.min.js')}}"></script>


<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>


<!-- Library for adding dinamically elements -->
<script src="{{asset('create-tim/js/plugins/arrive.min.js')}}"></script>


<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Chartist JS -->
<script src="{{asset('create-tim/js/plugins/chartist.min.js')}}"></script>


<!--  Notifications Plugin    -->
<script src="{{asset('create-tim/js/plugins/bootstrap-notify.js')}}"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('create-tim/js/material-dashboard.min.js?v=2.1.2')}}" type="text/javascript"></script>

<script src="{{asset('create-tim/demo/demo.js')}}"></script>




<!-- Sharrre libray -->
<script src="{{asset('create-tim/demo/jquery.sharrre.js')}}"></script>

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


<script>
  $(document).ready(function() {
    $('#datatables').DataTable({
      "language": {"url": "{{asset('/commons/French.json')}}"},
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true
    });

    var table = $('#datatable').DataTable();

    // Edit record
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');
      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record
    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');
      table.row($tr).remove().draw();
      e.preventDefault();
    });

    //Like record
    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });
  });
</script>

<script>
  function setFormValidation(id) {
    $(id).validate({
      highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
        $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
      },
      success: function(element) {
        $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
        $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
      },
      errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
      },
    });
  }

  $(document).ready(function() {
    setFormValidation('#expertise-add');
    setFormValidation('#TypeValidation');
    setFormValidation('#LoginValidation');
    setFormValidation('#RangeValidation');
  });
</script>



<script>
  $(document).ready(function() {
    // initialise Datetimepicker and Sliders
    md.initFormExtendedDatetimepickers();
    if ($('.slider').length != 0) {
      md.initSliders();
    }
  });
</script>
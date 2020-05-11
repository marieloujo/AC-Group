

<script type="text/javascript" src="{{asset('mdb/js/jquery.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('js/scrolla.jquery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>


    <!-- Forms Validations Plugin -->
    <script src="{{asset('create-tim/js/plugins/jquery.validate.min.js')}}"></script>


@yield('other-js')




<script type="text/javascript">
    $(document).ready(function(){

        $(function () {
            var selectedClass = "";
            $(".filter").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function () {
                $("." + selectedClass).fadeIn().addClass('animation');
                $("#gallery").fadeTo(300, 1);
                }, 300);
            });
        });

        $('.animate').scrolla({
            mobile: true
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
      //setFormValidation('#form-lancer-projet');
      setFormValidation('#form-autre');
    });
</script>




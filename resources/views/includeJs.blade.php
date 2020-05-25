

<script type="text/javascript" src="{{asset('mdb/js/jquery.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('js/scrolla.jquery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdb/js/multi-range.js')}}"></script>


    <!-- Forms Validations Plugin -->
    <script src="{{asset('create-tim/js/plugins/jquery.validate.min.js')}}"></script>


@yield('other-js')




<script type="text/javascript">
    $(document).ready(function(){

        var $btn = $('#btnTop');
        var $home = $('#topSection');
        var startpoint = $home.scrollTop() + $home.height();
        
        $(window).on('scroll', function() {
            if($(window).scrollTop() > startpoint) {
                $btn.show();
            } else {
                $btn.hide();
            }
        });

        // scroll body to 0px on click
		$btn.click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 200);
			return false;
		});

        $('.animate-web-only').scrolla({
            mobile: false
        });

        $('.animate').scrolla({
            mobile: false
        });

        $('#budjet').mdbRange({
            width: '100%',
            value: {
                min: $('#min').val(),
                max: $('#max').val(),
            },
            single: {
                active: true,
                multi: {
                    active: true,
                    rangeLength: 1
                },
            }
        });

        $('#delai').mdbRange({
            value: {
                min: 1,
                max: 12,
            },
            single: {
                active: true
            }
        });

        $("#min").change(function() {
            $(".range").attr("min", $('#min').val());
        });


        $("#max").change(function() {
            $(".range").attr("max", $('#max').val());
        });

        $("#mois").change(function() {
            $(".delai").attr("max", $('#mois').val());
        });

        $("#undefined").change(function() {
            if(this.checked) {
                $('.range').addClass('disabled')
                $('#min').prop('disabled', true)
                $('#max').prop('disabled', true)
            } else {
                $('.range').removeClass('disabled')
                $('#min').prop('disabled', false)
                $('#max').prop('disabled', false)
            }
        });

        $("#undefined-date").change(function() {
            if(this.checked) {
                $('.delai').addClass('disabled')
                $('#mois').prop('disabled', true)
            } else {
                $('.delai').removeClass('disabled')
                $('#mois').prop('disabled', false)
            }
        });


    });

</script>






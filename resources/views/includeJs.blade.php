

<script type="text/javascript" src="{{asset('mdb/js/jquery.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('scroll-effect/js/scrolla.jquery.min.js')}}"></script>

<script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>




<script type="text/javascript">
    $(document).ready(function(){

        var presentation=$('#presentation');

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

        /*var $item = $('.item-link'),
            $active = $('.active-nav');


        $active.css({
            backgroundColor: '#005826'
        });
        $active.children().addClass('white-text');
        $active.children().css({
            textTransform: 'upperCase'
        });

        item.hover(function () {
            $(this).children().addClass('white-text');
            $(this).css({
                backgroundColor: '#005826'
            });
        },function () {
            $(this).children().removeClass('white-text');
            $(this).css({
                backgroundColor: 'transparent'
            });
        });*/
    });

    
</script>


<script>

	$('.animate').scrolla({
		mobile: true
	});

</script>




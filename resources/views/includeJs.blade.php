

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

        $('.animate').scrolla({
            mobile: true
        });
        

    });

</script>






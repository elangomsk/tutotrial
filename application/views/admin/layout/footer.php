<!--jQuery -->
<script src="<?php echo base_url('assets/lib/jquery/jquery.js')?>"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
<!--Bootstrap -->
<script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.js')?>"></script>


<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $('.list-inline li > a').click(function() {
                var activeForm = $(this).attr('href') + ' > form';
                //console.log(activeForm);
                $(activeForm).addClass('animated fadeIn');
                //set timer to 1 seconds, after that, unload the animate animation
                setTimeout(function() {
                    $(activeForm).removeClass('animated fadeIn');
                }, 1000);
            });
        });
    })(jQuery);
</script>
</body>
</html>
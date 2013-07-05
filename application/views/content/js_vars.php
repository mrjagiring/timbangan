<script src="<?php echo base_url();?>public/jquery/jquery-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>public/jquery/jquery.livequery.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>public/jquery/ui/jquery.ui.core.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>public/jquery/ui/jquery.ui.widget.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>public/jquery/ui/jquery.ui.datepicker.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    
    $( "#datepicker" ).datepicker({
                changeMonth: true,
                changeYear: true
    });  
});
</script>
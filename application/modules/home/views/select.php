<div class="content">
    <h3>
        <?php echo 'Truck Out Report';?>
    </h3>
    <?php echo form_open('home/truckout') ;?>
    <p><?php echo form_error() ;?></p>
    <p>
        <label><?php echo 'select date' ;?></label>
        <input type="text" class="line" name="date" placeholder="pick date" id="datepicker">
    </p>
    <div class="button-pos"><button class="button orange"><?php echo 'search' ;?></button></div>
    <?php echo form_close() ;?>    
</div>
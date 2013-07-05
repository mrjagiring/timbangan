<div class="content">
    <h3>
        <?php echo 'Truck Out Report';?>
    </h3>
    <p><?php echo 'Date : '.$date ;?></p>
    <table class="bordered">
        <thead>
            <tr>
                <th><?php echo '#' ;?></th>
                <th><?php echo 'Time' ;?></th>
                <th><?php echo 'Vehicle Number' ;?></th>
                <th><?php echo 'Remark' ;?></th>
                <th><?php echo 'Driver Name' ;?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sort AS $row) :?>
            <tr>
                <td><?php echo '' ;?></td>
                <td><?php echo $row->DateTime2 ;?></td>
                <td><?php echo $row->VehNo ;?></td>
                <td><?php echo $row->Remark ;?></td>
                <td><?php echo $row->DriverName ;?></td>
            </tr>
            <?php endforeach ;?>
        </tbody>
    </table>
    <p><?php echo 'total : '.$count.' truck' ;?></p>
    <div class="spacer"></div>
    <?php echo anchor('home/truckout','<< back') ;?>
    <div class="clear"></div>
</div>    
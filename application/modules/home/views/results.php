<div class="content">
    <h3><?php echo 'report info: '.$date ;?></h3>
    <table class="bordered">
        <thead>
            <tr>
                <th><?php echo '#' ;?></th>
                <th><?php echo 'Time' ;?></th>
                <th><?php echo 'Vehicle Number' ;?></th>
                <th><?php echo 'Remark' ;?></th>
                <th><?php echo 'Weight Before(kg)' ;?></th>
                <th><?php echo 'Weight After(kg)' ;?></th>
                <th><?php echo 'Deviation' ;?></th>
                <th><?php echo 'Desc' ;?></th>
                <th><?php echo 'Checked By' ;?></th>
            </tr>
        </thead
        <tbody>
            <?php foreach($sort AS $row) :?>
            <tr>
                <td><?php echo '';?></td>
                <td><?php echo $row->DateTime1 ;?></td>
                <td><?php echo $row->VehNo ;?></td>
                <td><?php echo $row->Remark ;?></td>
                <td><?php echo $row->Weigh1 ;?></td>
                <td><?php echo $row->Weigh2 ;?></td>
                <td><?php echo ($row->Weigh2 - $row->Weigh1) ;?></td>
                <td></td>
                <td></td>
            </tr>
            <?php endforeach ;?>
        </tbody>
    </table>
    <div class="spacer"></div>
    <?php echo anchor('home','<< back') ;?>
</div>
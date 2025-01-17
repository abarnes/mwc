<?php if ($go=='1') { ?>

<script>
	$(function() {
		$( ".datepicker" ).datepicker();
                $('#gr').visualize({type: 'area', width: '730px',height:'300px'});
                $('.subm').corner();
	});
</script>

<div class="dateform">
    <table>
        <tr>
            <td>
    <?php echo $form->create('Record', array('action' => 'dashboard'));
    echo $form->input('start_date', array( 'label' => 'Start Date: ','class'=>'datepicker')); ?>
            </td>
            <td>
    <?php echo $form->input('end_date', array('label'=>'End Date: ','class'=>'datepicker')); ?>
            </td>
            <td>
    <?php echo $form->end(array('label'=>'Submit','class'=>'subm')); ?>
            </td>
        </tr>
    </table>
</div>

<br/>

<div class="in">
    <p class="big">Brides: <?php echo $brides; ?></p>
    
    <table class="inv" style="width:100%;">
        <tr>
            <td style="width:60%;">
                <?php foreach ($ind as $i) {
                    echo $i['Category']['name'].': '.$i['leads'].' / '.round($i['perc'],2).'%<br/>';
                } ?>
            </td>
            <td>
                <p class="big">Revenue: $<?php echo $rev; ?></p>
            </td>
        </tr>
    </table>
    
    <p class="big">Leads: <?php echo $leads; ?></p>
</div>

<div class="graph">
    
    <table id="gr" style="display:none;">
	<caption>Leads per Day - <?php echo $nam; ?></caption>
	<thead>
		<tr>
			<td></td>
                        <?php foreach ($dat as $d) {
                            echo '<th scope="col">'.$d['date'].'</th>';
                        } ?>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Leads</th>
                        <?php foreach ($dat as $d) {
                            echo '<td>'.$d['leads'].'</td>';
                        } ?>
		</tr>		
	</tbody>
</table>
</div>

<?php } else { ?>
<h3>No leads generated yet.  Dashboard will be visible once leads are generated.</h3>
<br/><br/><br/><br/>
<br/>
<br/>
<?php } ?>
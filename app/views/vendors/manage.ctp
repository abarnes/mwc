<?php echo $this->Paginator->options(array('url' => $this->passedArgs)); ?>
<script type="text/javascript">
$(document).ready(function() {
  $('.co').corner();
});
</script>
<br/> 

<a href="/vendors/sel" style="text-decoration:none;"><div style="background-color:rgb(162,202,102);border:2px solid rgb(126,157,75);" class="approved co">
    <p style="color:white;">+ Add Vendor</p>
</div></a>
<br/>

<table class="grid">
    <tr>
	<th>
            <?php echo $this->Paginator->sort('Active/Paused', 'Vendor.active'); ?>
        </th>
	<th>
            <?php echo $this->Paginator->sort('ID', 'Vendor.id'); ?>
        </th>
	<th>
            <?php echo $this->Paginator->sort('Name', 'Vendor.name'); ?>
        </th>
	<th>
            <?php echo $this->Paginator->sort('Email', 'Vendor.email'); ?>
        </th>
	<th>
            <?php echo $this->Paginator->sort('Phone', 'Vendor.phone'); ?>
        </th>
	<th>
            <?php echo $this->Paginator->sort('Zip', 'Vendor.zip'); ?>
        </th>
	<th>
            <?php echo $this->Paginator->sort('Industry', 'Category.name'); ?>
        </th>
        <th>
            <?php echo $this->Paginator->sort('Join Date', 'Vendor.created'); ?>
        </th>
        <!--<th>
            Action
	</th>-->
    </tr>
    <?php
    $c = 1;
    foreach ($vendors as $u) {
	
	if ($c%2>0) {
	    $class = 'row1';
	} else {
	    $class = 'row2';
	}
	$c++;
    ?>
    <tr class="<?php echo $class; ?>">
	<td>
	    <?php switch($u['Vendor']['active']) {
		case '0':
		    echo 'Paused';
		    break;
		case '1':
		    echo 'Active';
		    break;
	    } ?>
	</td>
        <td>
            <a href="/vendors/view/<?php echo $u['Vendor']['id']; ?>"><?php printf("%06s", $u['Vendor']['id']); ?></a>
        </td>
	<td>
	    <?php echo $u['Vendor']['name']; ?>
	</td>
	<td>
            <?php echo '<a href="mailto:'.$u['Vendor']['email'].'">'.$u['Vendor']['email'].'</a>'; ?>
        </td>
	<td>
	    <?php echo $u['Vendor']['phone']; ?>
	</td>
	<td>
	    <?php echo $u['Vendor']['zip']; ?>
	</td>
	<td>
	    <?php echo $u['Category']['name']; ?>
	</td>
        <td>
            <?php echo date('m-j-Y',strtotime($u['Vendor']['created'])); ?>
        </td>
        <!--<td>
	    <?php /*echo $html->link('Approve',array('action'=>'approve/'.$u['Client']['id'])); ?>
	    <?php echo $html->link('View',array('action'=>'view/'.$u['Client']['id'])); ?>
            <?php echo $html->link('Edit',array('action'=>'edit/'.$u['Client']['id'])); ?>
            <?php echo $html->link(
				'Delete', 
				array('controller'=>'clients','action'=>'delete/'.$u['Client']['id']), 
				null, 
				'Are You Sure You Want To Delete This Person?'
			);*/ ?>
        </td>-->
    </tr>
    <?php } ?>
</table>
<br/>

<div class="nav" style="text-align:center;width:100%;">
    <!-- Shows the page numbers -->
    <?php echo $this->Paginator->prev('<< Previous', null, null, array('class' => 'disabled')); ?>
    <?php echo $this->Paginator->numbers(); ?>
    <?php echo $this->Paginator->next('Next >>', null, null, array('class' => 'disabled')); ?>
    <br/>
    <!-- prints X of Y, where X is current page and Y is number of pages -->
    <?php echo $this->Paginator->counter(); ?>
</div>
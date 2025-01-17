<?php echo $this->Paginator->options(array('url' => $this->passedArgs)); ?>
<script type="text/javascript">
$(document).ready(function() {
  $('.co').corner();
});
</script>

<br/>
<a href="/categories/add" style="text-decoration:none;"><div style="background-color:rgb(162,202,102);border:2px solid rgb(126,157,75);" class="approved co">
    <p style="color:white;">+ Add Industry</p>
</div></a>
<br/>

<table class="grid">
    <tr>
	<th>
            <?php echo $this->Paginator->sort('Industry Name', 'Category.name'); ?>
        </th>
	<th>
            <?php echo $this->Paginator->sort('Enabled', 'Category.enable'); ?>
        </th>
	<th>
            <?php echo $this->Paginator->sort('Price Ranges?', 'Category.use_ranges'); ?>
        </th>
	<th>
            Price Ranges
        </th>
	
        <th class="hid" style="width:280px;">
            
        </th>
    </tr>
    <?php
    $c = 1;
    foreach ($cats as $u) {
	
	if ($c%2>0) {
	    $class = 'row1';
	} else {
	    $class = 'row2';
	}
	$c++;
    ?>
    <tr class="<?php echo $class; ?>">
	<td>
	    <?php echo $u['Category']['name']; ?>
	</td>
	<td>
	    <?php switch($u['Category']['enable']) {
		case '0':
		    echo '[No]';
		    break;
		case '1':
		    echo '[Yes]';
		    break;
	    } ?>
	</td>
	<td>
	    <?php switch($u['Category']['use_ranges']) {
		case '0':
		    echo '[No]';
		    break;
		case '1':
		    echo '[Yes]';
		    break;
	    } ?>
	</td>
	<td>
            <?php foreach ($u['Range'] as $r) {
		echo $r['name'].'<br/>';
	    } ?>
        </td>
	
        <td class="hid">
	    <a href="/categories/edit/<?php echo $u['Category']['id']; ?>" style="text-decoration:none;"><div class="but co">
	        <p style="color:white;">Edit</p>
	    </div></a>
	    <a href="/categories/delete/<?php echo $u['Category']['id']; ?>" style="text-decoration:none;" onclick="return confirm('Are you sure you want to delete this?  All vendors in this industry will be deleted as well.')"><div class="but co">
	        <p style="color:white;">Remove</p>
	    </div></a>
	    <?php if ($u['Category']['use_ranges']=='1') { ?>
	    <a href="/ranges/index/<?php echo $u['Category']['id']; ?>" style="text-decoration:none;"><div class="but co" style="width:100px;">
	        <p style="color:white;">Manage Ranges</p>
	    </div></a>
	    <?php } ?>
	    
            <?php //echo $html->link('Edit',array('action'=>'edit/'.$u['Category']['id'])); ?>
            <?php /*echo $html->link(
				'Delete', 
				array('controller'=>'clients','action'=>'delete/'.$u['Category']['id']), 
				null, 
				'Are You Sure You Want To Delete This Category?'
			);*/ ?>
        </td>
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
<div class="element-wrapper">
    <div class="element-header">
        <span class="h6">Query Details</span> 
        <span class="float-right badge badge-<?=$query->status=='success'?'success':'warning'?>" >
            <?=ucwords($query->status=='success'?'Respond':'Processing')?>
        </span>  
    </div>
    <div class="element-box">    
            <?php 
				//print_r($query);
			?>
        <div class="">
        	<table class="table">
                <tr>
                    <th>Problem Type</th>
                    <td colspan="3">
                        <?=ucwords($query->type)?> Related Issue.
                        <?php if($query->other_doc) { ?>
                        <a href="uploads/<?=$query->other_doc?>" target="_blank" class="float-right">
                        <i class="fa fa-file"></i> Document
                        </a>
                        <?php } ?>
                    </td>
                </tr>
        		<tr>
        			<th>Name</th>
        			<td><?=$query->name?></td>
        			<th>Email</th>
        			<td><?=$query->email?></td>
        		</tr>
        		<tr>
                    <th>Phone</th>
                    <td><?=$query->phone?></td>
                    <th>Gender</th>
                    <td><?=$query->gender?></td>
                </tr>
                <tr>
                    <th>ID Type</th>
                    <td><?=ucwords($query->id_type)?></td>
                    <th>ID Number</th>
                    <td>
                        <?=$query->id_number?>
                        <?php if($query->id_doc) { ?>
                        <a href="uploads/<?=$query->id_doc?>" target="_blank" class="float-right">
                        <i class="fa fa-file"></i> Click Here
                        </a>
                        <?php } ?>
                    </td>
                </tr>
        		<tr>
        			<th>Subject</th>
        			<td colspan="3"><?=$query->subject?></td>
        		</tr>
        		<tr>
        			<th>Message</th>
        			<td colspan="3"><?=$query->message?></td>
        		</tr>

        		<?php if(!empty($query->response_by)){ ?>
        		<tr>
        			<th>Response Message</th>
        			<td colspan="3"><?=$query->response?></td>
        		</tr>
        		<?php } ?>
        	</table>
        </div>
    </div>
</div>
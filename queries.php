<div class="element-wrapper">
    <div class="element-header">
        <span class="h6">Queries</span>   
    </div>
    <div class="element-box">    
        <div class="">
            <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach ($queries as $query) { ?>
                    <tr id="ro<?=$query->id?>">
                        <td><?=$i++?></td>
                        <td><?=ucwords($query->type)?></td>
                        <td><a href="user/query/<?=$query->id?>"><?=$query->name?></a></td>
                        <td><?=$query->email?></td>
                        <td><?=$query->subject?></td>
                        <td>                            
                            <span class="badge badge-<?=$query->status=='success'?'success':'warning'?>" >
                                <?=ucwords($query->status=='success'?'Respond':'Processing')?>
                            </span> 
                        </td>                                                
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    
</script>
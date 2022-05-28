<div class="element-wrapper">
    <h3 class="element-header">Users</h3>
    <div class="element-box">    
        <div class="bg-white table-responsive">
            <table id="dataTable1" width="100%" class="table table-lightfont small">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Passcode</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach ($users as $user) { ?>
                    <tr id="ro<?php echo $user->id; ?>">
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $user->name; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->remark; ?></td>
                        <td>
                            <a onclick="change_status('<?php echo $user->id; ?>', this)">
                                <span class="badge badge-<?=$user->status=='active'?'success':'warning'?>" >
                                    <?php echo ucwords($user->status); ?>
                                </span>
                            </a>
                        </td>                        
                        <td>
                            <a href="">
                                <i class="fa fa-list"></i>
                            </a>
                        </td>                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    var active = '<span class="badge badge-success">Active</span>';
    var deactive = '<span class="badge badge-warning">Deactive</span>';
    function change_status(id, obj) {
        $.ajax({
            url: 'admin/employee_status/' + id,
            type: 'POST',
            success: function (response) {
              if(response == 'active'){
                $(obj).html(active);
              }else{
                $(obj).html(deactive);            
              }
            }
        });
    }
</script>
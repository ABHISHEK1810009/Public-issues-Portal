<div class="element-wrapper">
    <div class="element-header">
        <div class="row align-items-center">
            <div class="col-9">
                <h3 class="mb-0">Employees</h3>
            </div>
            <div class="col-3 text-right">
                <a href="<?php echo base_url(); ?>admin/add_employee" class="btn btn-sm btn-primary">ADD</a>
            </div>
        </div>
    </div>
    <div class="element-box">    
        <div class="bg-white table-responsive">
            <table id="dataTable1" width="100%" class="table table-lightfont small">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Parent User</th>
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
                        <td><?php echo ucwords($user->type)?> <?=$user->department?' - '.ucwords($user->department):''; ?></td>
                        <td><?php echo $user->leader_name; ?></td>
                        <td>
                            <a onclick="change_status('<?php echo $user->id; ?>', this)">
                                <span class="badge badge-<?=$user->status=='active'?'success':'warning'?>" >
                                    <?php echo ucwords($user->status); ?>
                                </span>
                            </a>
                        </td>                        
                        <td>
                            <!-- <a href="admin/edit_employee/<?=$user->id?>" class="btn btn-primary"><i class="fa fa-edit"></i>
                            </a> -->
                            <a onclick="delete_employee('<?php echo $user->id; ?>')" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash text-white"></i>
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

    function delete_employee(id){
       $.confirm({
            title: 'Confirm!',
            content: 'Sure you want to delete this?',
            buttons: {
              delete: {
                btnClass: 'btn-danger',
                action: function () {
                  $.ajax({
                      url: 'admin/delete_employee',
                      type: 'POST',
                      data: ({'id':id,'deleteEmployee':'deleteEmployee'}),
                      success: function (response) {
                          // window.location.reload();
                          $("#ro"+id).load(location.href + " #ro"+id+">*", "");
                      }
                  })
                }
              },
              cancel: function () {
              }
            }
        }); 
    }
</script>
<div class="element-wrapper">
    <div class="element-header">
        <h3 class="mb-0">Query Respond</h3>
    </div>
    <div class="element-box">    
        <div class="bg-white table-responsive">
            <table id="dataTable1" width="100%" class="table table-lightfont small">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Response At</th>
                        <th>Response By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; foreach ($queries as $query) { ?>
                    <tr id="ro<?php echo $query->id; ?>">
                        <td><?php echo $i++; ?></td>
                        <td><?php echo ucwords($query->type); ?></td>
                        <td><?php echo $query->name; ?></td>
                        <td><?php echo $query->email; ?></td>
                        <td><?php echo $query->subject; ?></td>
                        <td>                            
                            <span class="badge badge-<?=$query->status=='pending'?'warning':($query->status=='assigned'?'info':($query->status=='success'?'success':'primary'))?>" >
                                <?php echo ucwords($query->status); ?>
                            </span> 
                        </td>                        
                        <td><?php echo date('d-m-Y h:i A', strtotime($query->response_at)); ?></td>
                        <td><?php echo $query->response_by_name; ?></td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/query/<?php echo $query->id; ?>" class="btn btn-sm btn-primary">
                                <i class="fa fa-tasks"></i>
                            </a>
                            <!-- <a onclick="delete_query('<?=$query->id?>')" class="btn btn-danger">
                                <i class="fa fa-trash text-white"></i>
                            </a> -->
                        </td>                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    function delete_query(id){
       $.confirm({
            title: 'Confirm!',
            content: 'Sure you want to delete this?',
            buttons: {
              delete: {
                btnClass: 'btn-danger',
                action: function () {
                  $.ajax({
                      url: 'admin/delete_query',
                      type: 'POST',
                      data: ({'id':id,'deleteQuery':'deleteQuery'}),
                      success: function (response) {
                          window.location.reload();
                          // $("#ro"+id).load(location.href + " #ro"+id+">*", "");
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

<div class="element-wrapper">
    <div class="element-header">
        <div class="row align-items-center">
            <div class="col-9">
                <h3 class="mb-0">Add Employees</h3>
            </div>
            <div class="col-3 text-right">
                <a href="<?php echo base_url(); ?>admin/employees" class="btn btn-primary btn-sm">List</a>
            </div>
        </div>
    </div>
    <div class="element-box">
        <form id="formValidate" novalidate="true" method="post">
            <div class="card">
                <div class="card-body">                
                    <div class="row">
                        <div class="col-sm form-group">
                            <label for="">Type</label>
                            <select class="form-control" required="required" name="type"  data-error="Select an employee type" onchange="selectType(this.value)">
                                <option value="">-Select Type-</option>
                                <option value="manager">Manager</option>
                                <option value="employee">Employee</option>
                            </select>
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                        <div class="col-sm form-group d-none" id="departSec">
                            <label for="">Department</label>
                            <select id="departFLD" class="form-control" name="depart" disabled="true"  data-error="Select an Department">
                                <option value="">-Select Department-</option>
                                <?php foreach ($this->config->item('relates') as $rel => $relate) { ?>
                                    <option value="<?=$rel?>"><?=$relate?> Related Problems</option>
                                <?php } ?>
                            </select>
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div> 
                        <div class="col-sm form-group d-none" id="superSec">
                            <label for="">Super Member</label>
                            <select id="superFLD" class="form-control" name="parent" disabled="true"  data-error="Select an User">
                                <option value="">-Select Super Member-</option>
                                <?php foreach ($parents as $parent) { ?>
                                <option value="<?=$parent->id?>"><?=$parent->name?></option>
                                <?php } ?>
                            </select>
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>          
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" required="required" data-error="Enter Employee Name" value="<?=post_value('name')?>">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                        <div class="col form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required="required" data-error="Enter Employee Valid Email" value="<?=post_value('email')?>">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>          
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required="required" data-error="Enter Valid Password minimum 6 charactor" minlength="6">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                        <div class="col form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" required="required" data-error="Enter Valid Password minimum 6 charactor" minlength="6">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>          
                    </div>            
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit" name="addEmployee"> Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script type="text/javascript">
window.onload = (event) => {
    // CKEDITOR.replace('description');
};

function selectType(type){
    if (type == 'employee') {
        $('#superSec').removeClass('d-none');
        $('#superFLD').prop({'required':true,'disabled':false});  
        $('#departSec').addClass('d-none');
        $('#departFLD').prop({'required':false,'disabled':true});  
    }else if(type == 'manager'){
        $('#departSec').removeClass('d-none');
        $('#departFLD').prop({'required':true,'disabled':false});
        $('#superSec').addClass('d-none');
        $('#superFLD').prop({'required':false,'disabled':true});
    }else{
        $('#superSec').addClass('d-none');
        $('#superFLD').prop({'required':false,'disabled':true});  
        $('#departSec').addClass('d-none');
        $('#departFLD').prop({'required':false,'disabled':true});   
        // $('#myModal').modal('show');
    }
}
</script>
<form>
    <div class="form-group">
      <label for=""> Email address</label>
      <input class="form-control" placeholder="Enter email" type="email">
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for=""> Password</label>
          <input class="form-control" placeholder="Password" type="password">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Confirm Password</label>
          <input class="form-control" placeholder="Password" type="password">
        </div>
      </div>
    </div>
</form>
<div class="modal-footer">
  <button class="btn btn-secondary" data-dismiss="modal" type="button"> Close</button>
  <button class="btn btn-primary" type="button"> Save changes</button>
</div>



              
<div class="element-wrapper">
    <h6 class="element-header">Add Templates</h6>
    <div class="element-box">
        <form id="formValidate" novalidate="true">
            <div class="form-group">
                <label for=""> Email address</label>
                <input class="form-control" data-error="Your email address is invalid" placeholder="Enter email" required="required" type="email">
                <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for=""> Password</label>
                        <input class="form-control" data-minlength="6" placeholder="Password" required="required" type="password">
                        <div class="help-block form-text text-muted form-control-feedback">Minimum of 6 characters</div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input class="form-control" data-match-error="Passwords don't match" placeholder="Confirm Password" required="required" type="password">
                        <div class="help-block form-text with-errors form-control-feedback"></div>
                    </div>
                </div>
            </div>
                                
            <fieldset class="form-group">
                <legend><span>Section Example</span></legend>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> First Name</label>
                            <input class="form-control" data-error="Please input your First Name" placeholder="First Name" required="required" type="text">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input class="form-control" data-error="Please input your Last Name" placeholder="Last Name" required="required" type="text">
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Date of Birth</label>
                            <input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Twitter Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input class="form-control" placeholder="Twitter Username" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Date Range Picker</label>
                    <input class="multi-daterange form-control" type="text" value="03/31/2017 - 04/06/2017">
                </div>
                <div class="form-group">
                    <label> Example textarea</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </fieldset>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox">I agree to terms and conditions
                </label>
                </div>
                <div class="form-buttons-w">
                    <button class="btn btn-primary disabled" type="submit"> Submit</button>
                </div>
            </form>
        </div>
</div>
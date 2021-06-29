<?php include('includes/header.php') ?>

<div class="container">
    <div class="row">
       <div class="col-sm-12">

            <div class="card" >
                <div class="card-header text-center" background-color="dark-green" >
                    <label class="my-label">Signup/Login</label>
                </div>
                <div class="card-body form-background">
                    <form id="" action="" method="">
                        <div class="row">
                            <div class="col-sm-5 col-12 form-group">
                                <label for="firstName" class="col-form-label my-label">First Name</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="firstName" class="form-control clockpicker" value="" id="firstName" `+dynamicAction+` required>
                            </div>

                            <div class="col-sm-2 col-12 form-group">
                                <label for="middleName" class="col-form-label my-label">Middle Name</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="middleName" class="form-control clockpicker" value="" id="middleName" `+dynamicAction+` required>
                            </div>

                            <div class="col-sm-5 col-12 form-group">
                                <label for="lastName" class="col-form-label my-label">Last Name</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="lastName" class="form-control clockpicker" value="" id="lastName" `+dynamicAction+` required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-12 form-group">
                                <label for="mobile no" class="col-form-label my-label">Gender</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <select name="" id="" class="form-control" style="background: #fff;">
                                    <option value="" disabled selected>Choose Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Feamle">Female</option>
                                </select>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-5 col-12 form-group">
                                <label for="mobile no" class="col-form-label my-label">Mobile No</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="mobile no" class="form-control clockpicker" value="" id="mobileNumber" `+dynamicAction+` required>
                            </div>

                            <div class="col-sm-7 col-12 form-group">
                                <label for="email" class="col-form-label my-label">Email</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="email"name="email" class="form-control clockpicker" value="" id="email" `+dynamicAction+` required>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-4 col-12 form-group">
                                <label for="streetAddress" class="col-form-label my-label">Street</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="streetAddress" class="form-control clockpicker" value="" id="streetAddress" `+dynamicAction+` required>
                            </div>
                            <div class="col-sm-2 col-12 form-group">
                                <label for="cityAddress" class="col-form-label my-label">City</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="cityAddress" class="form-control clockpicker" value="" id="cityAddress" `+dynamicAction+` required>
                            </div>
                            <div class="col-sm-2 col-12 form-group">
                                <label for="stateAddress" class="col-form-label my-label">State</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="stateAddress" class="form-control clockpicker" value="" id="stateAddress" `+dynamicAction+` required>
                            </div>
                            <div class="col-sm-2 col-12 form-group">
                                <label for="zipCode" class="col-form-label my-label">Zip Code</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="zipCode" class="form-control clockpicker" value="" id="stateAddress" `+dynamicAction+` required>
                            </div>
                            <div class="col-sm-2 col-12 form-group">
                                <label for="country" class="col-form-label my-label">Country</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="text"name="country" class="form-control clockpicker" value="" id="country" `+dynamicAction+` required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12 form-group">
                                <label for="password" class="col-form-label my-label">Password</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="password"name="mobile no" class="form-control clockpicker" value="" id="password" `+dynamicAction+` required>
                            </div>
                            <div class="col-sm-6 col-12 form-group">
                                <label for="password" class="col-form-label my-label">Re-Enter password</label>
                                <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                <input type="password"name="mobile no" class="form-control clockpicker" value="" id="password" `+dynamicAction+` required>
                            </div>
                        </div>
                
                        <div class="row">
                            <div class="col-sm-4"> &nbsp;</div>
                            <div class="col-sm-4"> &nbsp;</div>
                            <div class="col-sm-4">
                                 <button class="btn btn-primary pull-right">Signup <i class="fa fa-user-plus"></i></button>
                            </div>
                        </div>
                        


                    </form>  
                </div>
            </div>

       </div>  
    </div>
</div>

<?php include('includes/footer.php') ?>



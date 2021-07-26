<?php include('includes/header.php') ?>

<div class="container">
    <div class="row">
       <div class="col-sm-12">


            <div id="accordion">
                <div class="card">
                    <div class="card-header text-center">
                        <a class="card-link" data-toggle="collapse" href="#signUpCollapse">
                            Sign-Up
                        </a>
                    </div>

                    <div id="signUpCollapse" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <form id="registrationForm" method="POST">
                                <div class="row">
                                    <div class="col-sm-5 col-12 form-group">
                                        <label for="firstName" class="col-form-label my-label">First Name</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="text" name="firstName" class="form-control clockpicker" value="" id="firstName" required>
                                    </div>

                                    <div class="col-sm-2 col-12 form-group">
                                        <label for="middleName" class="col-form-label my-label">Middle Name</label>
                                        <input type="text" name="middleName" class="form-control clockpicker" value="" id="middleName" >
                                    </div>

                                    <div class="col-sm-5 col-12 form-group">
                                        <label for="lastName" class="col-form-label my-label">Last Name</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="text" name="lastName" class="form-control clockpicker" value="" id="lastName" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-12 form-group">
                                        <label for="gender" class="col-form-label my-label">Gender</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <select name="gender" id="gender" class="form-control" style="background: #fff;">
                                            <option value="" disabled selected>Choose Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Feamle">Female</option>
                                        </select>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-sm-5 col-12 form-group">
                                        <label for="mobileNumber" class="col-form-label my-label">Mobile No</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="text" name="mobileNumber" class="form-control clockpicker" value="" id="mobileNumber" required>
                                    </div>

                                    <div class="col-sm-7 col-12 form-group">
                                        <label for="email" class="col-form-label my-label">Email</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="email" name="email" class="form-control clockpicker" value="" id="email" required>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="streetAddress" class="col-form-label my-label">Street</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="text" name="streetAddress" class="form-control clockpicker" value="" id="streetAddress" required>
                                    </div>
                                    <div class="col-sm-2 col-12 form-group">
                                        <label for="cityAddress" class="col-form-label my-label">City</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="text" name="cityAddress" class="form-control clockpicker" value="" id="cityAddress" required>
                                    </div>
                                    <div class="col-sm-2 col-12 form-group">
                                        <label for="stateAddress" class="col-form-label my-label">State</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="text" name="stateAddress" class="form-control clockpicker" value="" id="stateAddress" required>
                                    </div>
                                    <div class="col-sm-2 col-12 form-group">
                                        <label for="zipCode" class="col-form-label my-label">Zip Code</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="text" name="zipCode" class="form-control clockpicker" value="" id="zipCode" required>
                                    </div>
                                    <div class="col-sm-2 col-12 form-group">
                                        <label for="country" class="col-form-label my-label">Country</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="text" name="country" class="form-control clockpicker" value="" id="country" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6 col-12 form-group">
                                        <label for="password" class="col-form-label my-label">Password</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="password" name="password" class="form-control clockpicker" value="" id="password" required>
                                    </div>
                                    <div class="col-sm-6 col-12 form-group">
                                        <label for="reEnterPassword" class="col-form-label my-label">Re-Enter password</label>
                                        <sup class="fa fa-certificate required-icon text-danger"> </sup>
                                        <input type="password" name="reEnterPassword" class="form-control clockpicker" value="" id="reEnterPassword" required>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-sm-4"> &nbsp;</div>
                                    <div class="col-sm-4"> &nbsp;</div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-primary pull-right"  id="submitBtn">Signup <i class="fa fa-user-plus"></i></button>
                                    </div>
                                </div>
                            </form>                         
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center">
                        <a class="collapsed card-link" data-toggle="collapse" href="#signIn">
                            Sing-In
                        </a>
                    </div>
                    <div id="signIn" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <div class="wrapper fadeInDown">
                                <div id="formContent">
                                    <!-- Tabs Titles -->

                                    <!-- Icon -->
                                    <div class="fadeIn first">
                                        <img class="signup-logo" src="<?php echo $this->config->base_url() ?>assets/images/logo.png" id="icon" alt="User Icon" />
                                    </div>
                                    
                                    <!-- Login Form -->
                                    <form id="loginForm">
                                        <input type="text" id="loginEmail" class="fadeIn second" name="loginEmail" placeholder="Email">
                                        <input type="password" id="loginPassword" class="fadeIn third" name="loginPassword" placeholder="Password">
                                        <input type="submit" class="fadeIn fourth" value="Log In">
                                    </form>

                                    <!-- Remind Passowrd -->
                                    <div id="formFooter">
                                        <a class="underlineHover" href="#"  data-toggle="modal" data-target="#myModal">Forgot Password?</a>
                                    </div>

                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            
            </div>

            
       </div>  
    </div>
</div>


<div class="conatiner-fluid">
    <div class="row">
        <div class="col-sm-12">        
            <!-- Modal -->
            <div class="modal  fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Header</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="container" id="modal-content">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <input type="email" id="recoveryEmail" placeholder="Enter email to recover pasword" name="foretPasswordEmail" class="form-control" required/>                                       
                                    </div>
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary" onClick="recoverPasswordOtp()">send OTP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
  

<?php include('includes/footer.php') ?>


<script>
var recoverPasswordOtp = function(){
    var options = {
     theme:"sk-rect",
     message:'Sending OTP...',
     textColor:"white"
    };

    openLoader(options);

    if( $('#recoveryEmail').val() == ''){
        toastr.error("Please provide an email! ");
        closeLoader();
        return;
    }

    $.ajax({ 
        url: "http://localhost:8080/api/v1/resetPassword/"+$('#recoveryEmail').val(),
        type: 'POST',              
        crossDomain : true,
        dataType : 'json',
        contentType: 'application/json',
        success: function (response) {
            closeLoader();
            if(response && response.status == 'OK'){
                toastr.success(response.msg);
                var innerHtml = `
                    <div class="row">
                        <div class="col-sm-10">
                            <input type="text" id="recoveryOTP" placeholder="Enter OTP sent to `+$('#recoveryEmail').val()+`" name="emailOTP" class="form-control" required/> 
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" onClick="verifyOtp('`+$('#recoveryEmail').val()+`')">Verify OTP</button>
                        </div>
                    </div>`;
                $('#modal-content').html(innerHtml);
            }else if( response && response.status=='INTERNAL_SERVER_ERROR'){
                toastr.error(response.msg);
            }else if(  response && response.status=='NOT_FOUND' ){
                toastr.error(response.msg);
            }            
        },
        error : function(data,textStatus,errorMessage){
            alert( textStatus + " " + errorMessage);
        }
    });   

      
}

var updateUserPassword = function(email){
    var options = {
     theme:"sk-rect",
     message:'Updating password...',
     textColor:"white"
    };

    openLoader(options);

    if( $('#newPassward').val() == ''){
        toastr.error("Invalid Password! ");
        closeLoader();
        return;
    }

    
    if( $('#repeateNewPassword').val() == ''){
        toastr.error("Invalid repeate password! ");
        closeLoader();
        return;
    }


    if( $('#repeateNewPassword').val() != $('#newPassward').val()){
        toastr.error("Password and Repeate password should be same! ");
        closeLoader();
        return;
    }

    dataToPost = {
        "userEmail" : email,
        "password" : $('#newPassward').val(),
        "repeatPassword" : $('#repeateNewPassword').val()
    };


    $.ajax({ 
        url: "http://localhost:8080/api/v1/updatePassword",
        data: JSON.stringify(dataToPost),
        type: 'POST',              
        crossDomain : true,
        dataType : 'json',
        contentType: 'application/json',
        success: function (response) {
            closeLoader();
            if(response && response.status == 'OK'){
                toastr.success(response.msg);
                
            }            
        },
        error : function(data,textStatus,errorMessage){
            alert( textStatus + " " + errorMessage);
        }
    });   

}

var verifyOtp = function(userEmail){debugger
    var otpProvided = $('#recoveryOTP').val();
    otpProvided = Number(otpProvided); 
    if( isNaN(otpProvided ) ){
        toastr.error("Invalid OTP entered");
        return;
    }
    $.ajax({ 
        url: "http://localhost:8080/api/v1/verifyOtp?otp="+otpProvided+"&otpType=PASSWORD_RESET",
        type: 'POST',              
        crossDomain : true,
        dataType : 'json',
        contentType: 'application/json',
        success: function (response) {
            if(response && response.status ){
                if( response.status  == 'OK' ){
                    toastr.success(response.msg);
                    var innerHtml = `
                    <div class="row">
                    <input type="hidden" value="`+userEmail+`" name="providedMail" id="providedMail" />
                        <div class="col-sm-10">
                            <input type="password" id="newPassward" placeholder="Enter new password " name="newPassword" class="form-control" required/> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <input type="password" id="repeateNewPassword" placeholder="Repeate new password " name="repeateNewPassword" class="form-control" required/> 
                        </div>

                        <div class="col-sm-2">
                            <button class="btn btn-primary" onClick="updateUserPassword('`+userEmail+`')">Reset</button>
                        </div>
                    </div>
                    `;
                    $('#modal-content').html(innerHtml);
                    //window.location.href="http://localhost/parlor";
                }
                else if( response.status  == 'NOT_ACCEPTABLE' ){
                    toastr.error(response.msg);
                }
            }
        },
        error : function(data,textStatus,errorMessage){
            alert( textStatus + " " + errorMessage);
        }
    }); 
}

var submitRegistrationForm = function(){debugger
    var dataToPost =  {
        "fullName" : $('#firstName').val() + ' ' + $('#middleName').val() + ' ' + $('#lastName').val(),
        "gender" :  $('#gender').val(),
        "mobile" : $('#mobileNumber').val(),
        "email":  $('#email').val(),
        "password" : $('#password').val(),
        "addresses": [{
            "street" : $('#streetAddress').val(),
            "city" : $('#cityAddress').val(),
            "state" : $('#stateAddress').val(),
            "zipCode" :$('#zipCode').val() ,
            "country": $('#country').val(),
            "landMark":""
        }]
    };       


    $.ajax({ 
            url: "http://localhost:8080/api/v1/registerAccount",
            type: 'POST',              
            data: JSON.stringify(dataToPost),
            crossDomain : true,
            dataType : 'json',
            contentType: 'application/json',
            success: function (response) {debugger
                if(response ){
                    if( response.responseCode  == 200 )
                        toastr.success(response.msg);
                    else if( response.responseCode  == 409 )
                        toastr.error(response.msg);
                }
            },
            error : function(data,textStatus,errorMessage){
                alert( textStatus + " " + errorMessage);
            }
    });   

    
}


var loadValidationScript = function(){
    $("#registrationForm").validate({
        errorClass: 'text-danger',
        highlight: function(element) {
            $(element)
            .closest('.form-control')
            .addClass('is-invalid')
            .removeClass('is-valid');
        },

        unhighlight: function(element) {
            $(element)
            .closest('.form-control')
            .removeClass('is-invalid')
            .addClass('is-valid');
        },



        rules: {  
            firstName: {
                required: true,
            },
            
            lastName: {
                required: true,
            },
            gender:{
                required: true,
            },
            mobileNumber:{
                required: true,
                min: 6000000000,
                max: 9999999999
            },
            email:{
                required: true,
            },
            streetAddress:{
                required: true,
            },
            cityAddress:{
                required: true,
            },
            stateAddress:{
                required: true,
            },
            zipCode:{
                required: true,
            },
            country:{
                required: true,
            },
            password:{
                required: true,
                equalTo: "#reEnterPassword",
                minlength: 8
            },
            reEnterPassword:{
                required: true,
                equalTo : "#password",
                minlength: 8
            }
                    

        },

        messages: {
            firstName: {
                required: 'Please enter first name'
            },
            
            lastName: {
                required: 'Please enter last name'
            },
            gender: {
                required: 'Please choose gender'
            },
            mobileNumber:{
                required: 'please enter mobile No .',
                min: 'Invalid indian mobile number',
                max: 'Invalid indian mobile number'
            },
            email: {
                required: 'Please enter email'
            },
            streetAddress: {
                required: 'Please enter street Adress.'
            },
            cityAddress: {
                required: 'Please enter city'
            },
            stateAddress: {
                required: 'Please enter state'
            },
            zipCode: {
                required: 'Please enter zip'
            },
            country: {
                required: 'Please enter country'
            },
            password: {
                required: 'Please enter password',
                equalTo: "Password should match with repeate password",
                minlength: "Password should be 8 digit long"
            },
            reEnterPassword: {
                required: 'Please enter repeate password ',
                equalTo: "Repeate password should match with password",
                minlength: "Repeate password should be 8 digit long"
            }
        },


    }); 


}


var setUserContext = function(userEmail){
    $.ajax({ 
            url: "setUserContext?userEmail="+userEmail,
            type: 'GET',              
            crossDomain : true,
            dataType : 'json',
            contentType: 'application/json',
            success: function (response) {
                if(response ){
                    window.location.href="http://localhost/parlor";

                }
            },
            error : function(data,textStatus,errorMessage){
                alert( textStatus + " " + errorMessage);
            }
        });
}

    var login = function(){      

        $.ajax({ 
                url: "http://localhost:8080/api/v1/login",
                type: 'POST',              
                crossDomain : true,
                data: JSON.stringify({"email" : $('#loginEmail').val(), "password" :  $('#loginPassword').val()}),
                dataType : 'json',
                contentType: 'application/json',
                success: function (response) {debugger
                    if(response ){
                        if( response.responseCode  == "OK" ){
                            setUserContext($('#loginEmail').val());
                            toastr.success("Login Successful !");
                        }
                        else if( response.responseCode  == "NOT_FOUND" ){
                            toastr.error("Invalid credentials !");
                        }
                    }
               },
               error : function(data,textStatus,errorMessage){
                   alert( textStatus + " " + errorMessage);
               }
        });   

        
    }

    $(function(){
        loadValidationScript();
        $('#registrationForm').on('submit', function(e){
            e.preventDefault();
            // validation code here
            if( $('#registrationForm').valid() ) {
                submitRegistrationForm();
            }
        });



        $('#loginForm').on('submit', function(e){
            e.preventDefault();
            // validation code here
            if( $('#loginForm').valid() ) {
                login();
            }
        });
    })

</script>



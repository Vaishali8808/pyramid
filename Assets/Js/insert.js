$(document).ready(function(){
$('#add').validate(
    {
        rules:
        {
            fname:"required",
            lname:"required",
             email:"required",
             contactno:"required",
             comment:"required",
                },
        messages:
        {
            fname:"Please Enter your First Name",
             lname:"Please Enter your Last Name",
             email:"Please Enter your E-Mail",
             contactno:"Please Enter your Mobile  Number",
             comment:"Type your Message",
            
        },
        submitHandler: function() {
        
            let insert = $('#add').attr('action');
            let form = $('#add').serialize();
            $.post(insert, form, function(response){
                console.log(response);
                if(response == true) {
                    //login successfull
                    window.location = window.location.origin + "/pyramid/index.php/Admin/contact";
                    swal('Successfull')
                } else {
                swal("Not Sent!")
                    // alert('Login failed');
                } 
              }); 
              }
        } 
);
});
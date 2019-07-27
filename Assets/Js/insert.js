$(document).ready(function(){
$('#add').validate(
    {
        errorElement: 'span', //default input error message container
        errorClass: 'help-block help-block-error text-danger', 
        rules:
        
        {
            fname:"required",
            lname:"required",
             email:"required",
             contactno:"required",
             comment:"required",
             email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
              },
              contactno: {
                required: true,
                minlength: 10,
                maxlength: 10,
              }
    
                },

            messages:
        {
            fname:" Enter your First Name",
             lname:"Enter your Last Name",
             email:"Enter your E-Mail",
             contactno:" Enter your Mobile  Number",
             comment:"Type your Message", 
        },
        submitHandler: function() {
            let insert = $('#add').attr('action');
            let form = $('#add').serialize();
            $.post(insert, form, function(response){
                console.log(response);
                if(response == true) {
                    //login successfull
                  // window.location = window.location.origin + "/pyramid/index.php/Admin/contact";
                    swal('Successfull');
                      $('form').each(function(){
                         this.reset();
                    });
                } else {
                swal("Not Sent!");
                    // alert('Login failed');
                } 
              }); 
              }
        } 
);
}); 
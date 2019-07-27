<div class="container m-top ">
      <div class="row justify-content-between">
        <div class="col-md-4">
            <h1 class="my-5 text-danger">
              Contact Us
            </h1>
            <?php  
            $insert_data=array('id'=>'add');
            echo form_open('Admin/insert',$insert_data); ?>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <strong>
         <label>First Name<span class="wpforms-required-label text-danger">*</span></label>
                  </strong>
  
  <?php echo form_input(['name'=>'fname','class'=>'rounded form-control',
  'value'=>set_value('fname'), 'placeholder'=>'First Name']);?>

                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <strong><label>Last Name<span class="wpforms-required-label text-danger">*</span></label>
                  </strong>
     <?php echo form_input(['name'=>'lname','class'=>'rounded form-control', 
     'value'=>set_value('fname'),'placeholder'=>'Last Name']);?>
                </div>
              </div>
            </div>
  
            <div class="form-group ">
              <strong><label>E-Mail<span class="wpforms-required-label text-danger">*</span></label>
              </strong><br>
              <?php echo form_input(['class'=>'rounded form-control','name'=>'email',
              'value'=>set_value('email') ,'placeholder'=>'Your E-Mail']);?> 
            
            </div>
              <div class="form-group">
              <strong><label>Contact Number<span class="wpforms-required-label text-danger">*</span>
                </label>
              </strong><br>
              <?php echo form_input(['class'=>'rounded  form-control','name'=>'contactno',
               'value'=>set_value('contactno'),'placeholder'=>'Your Mobile No.']);?>
                </div>
            <div class="form-group ">
              <strong><label>Comments<span class="wpforms-required-label text-danger">*</span>
                </label>
              </strong>
      <?php echo form_textarea(['rows'=>'2','class'=>'form-control rounded','aria-label'=>'textarea',
       'placeholder'=>'Type Your Comments','value'=>set_value('comment'),'name'=>'comment']);?>
            </div>
  <div class="form-group">
  <button class="btn bg-A_primary rounded w-25 form-control text-white">Submit</button>
            </div>
          <?php echo form_close(); ?>
        </div>
        <div class="col-md-4">
          <h1 class="my-5 h1 text-danger text-center">Address</h1>
          <div class="my-5 text-center">
            <address>
                Vikas Vihar <br />
                Ambala, Haryana, India.<br />
                <i class="fa fa-phone"></i> +91-9354363673</a><br />
                <i class="fa fa-phone"></i> +91-9729283688<br />
                <i class="fa fa-envelope"></i> info@pyramidinfotech.com
            </address>
            <br>
            <button class="btn bg-info text-white rounded" type="submit">
              <i class="fas fa-phone 1x"></i> Call</button>
            <button class="btn btn-success rounded " type="submit">
              <i class="fab fa-whatsapp fa-1x"></i> Whatsapp</button>
            <button class="btn btn-primary roundeds" type="submit">
              <i class="far fa-envelope"></i> E-Mail</button>
          </div>
        </div>
      </div>
</div>

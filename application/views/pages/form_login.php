<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Sistem Penggajian</title>  
      <link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">

 </head>  
 <body>
    <div class="text-center" style="margin-top: 50px;">
      <img src="<?php echo base_url("assets/img/admin.png") ?>" class="img-circle" >
      <h2>ADMIN</h2>
    </div> 
      <div class="container">  
           <div class="row"> 
           	<div class="col-md-3">
           	</div>
              <div class="col-md-6   text-center"> 
               <form method="post" action="<?php echo base_url(); ?>Login/login_validation">  
                    <div class="form-group">  
                         <label>Username</label>  
                         <input type="text" name="username" class="form-control" />  
                         <span class="text-danger"><?php echo form_error('username'); ?></span>                 
                    </div>  
                    <div class="form-group">  
                         <label>Password</label>  
                         <input type="password" name="password" class="form-control" />  
                         <span class="text-danger"><?php echo form_error('password'); ?></span>  
                    </div>  
                    <div class="form-group">  
                         <input type="submit" name="insert" value="Login" class="btn btn-info" />
                         <br>  
                         <?php  
                              echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                         ?>  
                    </div>  
               </form> 
              </div> 
              <div class="col-md-3">
           	  </div>
            </div>
      </div> 
 </body>  
 </html>  
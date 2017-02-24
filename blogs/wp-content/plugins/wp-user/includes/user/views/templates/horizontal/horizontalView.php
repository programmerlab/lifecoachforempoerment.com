<div class="tab-content">
    <div role="tabpanel" class="tab-pane <?php echo $login_class ?>" id="loginController<?php echo $form_id?>" class="login-box-body">
                <div>              
        <div class="box box-info">   
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $json['SIGN_IN']?>
              </h3>
               <a href="#forgotController<?php echo $form_id?>" aria-controls="forgotController<?php echo $form_id?>" role="tab" class="pull-right" data-toggle="tab"><?php echo $json['FORGOT_PASSWORD']?></a>              
       </div>
       <div class="login-box-body" >
        <div style="display: none;" id="wpuser_errordiv<?php echo $form_id ?>" class="alert alert-dismissible fade in" role="alert"> <label id="upuser_error<?php echo $form_id ?>"></label></div>
        <form method="post" id="wpuser_login_form<?php echo $form_id ?>">
            <div class="row form-group has-feedback">
                <label class="col-xs-2" for="wp_user_email_name<?php echo $form_id?>"><?php echo $json['USERNAME_OR_EMAIL']?></label>
                <div class="col-xs-10">
                <input type="text" id="wp_user_email_name<?php echo $form_id?>" placeholder="<?php echo $json['USERNAME_OR_EMAIL']?>" required class="form-control" name="wp_user_email_name" > 
                  <?php if(!get_option('wp_user_appearance_icon')){?>                            
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php } ?>
                </div>
            </div>
            <div class="row form-group has-feedback">
            <label class="col-xs-2" for="wp_user_password<?php echo $form_id?>"><?php echo $json['PASSWORD']?></label>
            <div class="col-xs-10">
                <input type="password" id="wp_user_password<?php echo $form_id?>" required class="form-control" placeholder="<?php echo $json['PASSWORD']?>" name="wp_user_password" >
                 <?php if(!get_option('wp_user_appearance_icon')){?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php } ?>
                </div>
            </div>
            <?php do_action( 'wp_user_hook_login_form')?>
            </div>
    <div class="box-footer">           
                
                    <input type="button" id="wpuser_login<?php echo $form_id?>" class="btn btn-primary" name="wpuser_login"  value="<?php echo $json['SIGN_IN']?>"> 
                  <?php if(!get_option('wp_user_disable_signup')){?>
        <a href="#registerController<?php echo $form_id?>" aria-controls="registerController<?php echo $form_id?>" role="tab" data-toggle="tab" class="btn btn-default pull-right"><?php echo $json['SIGN_UP']?></a>
        <?php } ?>
                </div>
                <!-- /.col -->
            </div>
        </form>
       
      
    </div>
    </div>

  <div role="tabpanel" class="tab-pane <?php echo $forgot_class?>" id="forgotController<?php echo $form_id?>">
    <div class="login-box-body">
     <div class="box box-info">   
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $json['FORGOT_PASSWORD']?>
              </h3>
               
    <a aria-controls="loginController<?php echo $form_id?>" class="pull-right" role="tab" data-toggle="tab" href="#loginController<?php echo $form_id?>"><?php echo $json['SIGN_IN']?></a>         
       </div>
       <div class="login-box-body" >
       <form method="post" id="wpuser_forgot_form<?php echo $form_id ?>">
    
    <div style="display: none;" id="wpuser_errordiv_forgot<?php echo $form_id ?>" class="alert alert-dismissible fade in" role="alert"> <label id="upuser_error_forgot<?php echo $form_id ?>"></label></div>
        <div class="row form-group has-feedback">
         <label class="col-xs-2" for="wp_user_email_name_forgot<?php echo $form_id?>"><?php echo $json['EMAIL']?></label>
         <div class="col-xs-10">
            <input type="text" id="wp_user_email_name_forgot<?php echo $form_id?>" required placeholder="<?php echo $json['EMAIL']?>" class="form-control" name="wp_user_email"  >   
             <?php if(!get_option('wp_user_appearance_icon')){?>                           
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <?php } ?>
            </div>
        </div>
        <?php do_action( 'wp_user_hook_forgot_form')?>    
        </form>    
       </div>
      <div class="box-footer">    
            
                <input type="button" id="wpuser_forgot<?php echo $form_id?>" class="btn btn-primary" name="forgot_password"  value="<?php echo $json['FORGOT'] ?>" >   
      </div>
    </div>
   </div>
 </div>
 <?php if(!get_option('wp_user_disable_signup')){?>
<div role="tabpanel" class="tab-pane <?php echo $register_class ?>" id="registerController<?php echo $form_id?>">    
<div class="box box-info" >   
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $json['SIGN_UP'] ?></h3>              
            </div>
<form method="post" id="google_form<?php echo $form_id ?>">
    <div class="login-box-body" >
       <div style="display: none;" id="wpuser_errordiv_register<?php echo $form_id ?>" class="alert alert-dismissible" role="alert"> <label id="wpuser_error_register<?php echo $form_id ?>"></label></div>
           
                    <div class="row form-group has-feedback">
                 <label class="col-xs-2" for="wp_user_email_name_register<?php echo $form_id?>"><?php echo $json['USERNAME']?></label>
                 <div class="col-xs-10">
                   <input type="text" id="wp_user_email_name_register<?php echo $form_id?>" class="form-control"  name="wp_user_email_name_register" placeholder="<?php echo $json['USERNAME'] ?>" required >   
                    <?php if(!get_option('wp_user_appearance_icon')){?>                           
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  <?php } ?>
                  </div>
                </div>
                <div class="row form-group has-feedback">
                 <label class="col-xs-2" for="wp_user_email_register<?php echo $form_id?>"><?php echo $json['EMAIL']?></label>
                 <div class="col-xs-10">
                  <input type="text" id="wp_user_email_register<?php echo $form_id?>" placeholder="<?php echo $json['EMAIL'] ?>" required class="form-control"  name="wp_user_email" >  
                   <?php if(!get_option('wp_user_appearance_icon')){?>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  <?php } ?>
                  </div>
                </div>
                <div class="row form-group has-feedback">
                 <label class="col-xs-2" for="wp_user_password_register<?php echo $form_id?>"><?php echo $json['PASSWORD']?></label>
                 <div class="col-xs-10">
                  <input type="password" id="wp_user_password_register<?php echo $form_id?>" placeholder="<?php echo $json['PASSWORD'] ?>" required class="form-control"  name="wp_user_password" > 
                   <?php if(!get_option('wp_user_appearance_icon')){?> 
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  <?php } ?>
                  </div>
                </div>
                <div class="row form-group has-feedback">
                     <label class="col-xs-2" for="wp_user_re_password_register<?php echo $form_id?>"><?php echo $json['RETYPE_PASSWORD']?></label>
                     <div class="col-xs-10">
                      <input type="password" id="wp_user_re_password_register<?php echo $form_id?>" placeholder="<?php echo $json['RETYPE_PASSWORD'] ?>" required class="form-control"  name="wp_user_re_password">  
                      <?php if(!get_option('wp_user_appearance_icon')){?>
                      <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                      <?php }?>
                      </div>
                </div>
      <?php do_action( 'wp_user_hook_register_form')?>
      <?php if(get_option('wp_user_tern_and_condition')){?>
      <div class="row">
        <div class="col-xs-12">            
                  
               <input id="wp_user_term_condition" type="checkbox"  name="wp_user_term_condition">
               <?php echo $json['I_AGREE_TO_THE_TERMS'] ?>..
               <div style="max-height:100px;overflow-y: scroll;border:1px solid"><?php echo get_option('wp_user_show_term_data') ?></div>                
       
        </div>
          </div> 

          <?php } 
          if(get_option('wp_user_security_reCaptcha_enable') && !empty(get_option('wp_user_security_reCaptcha_secretkey'))){ ?>   

          <div class="row">
        <div class="col-xs-12">            
            <div id="recaptcha<?php echo $form_id?>" class="g-recaptcha" data-sitekey="<?php echo get_option('wp_user_security_reCaptcha_secretkey')?>" > 
            </div>         
            <input type="hidden" title="Please verify this" class="required" name="keycode" id="keycode">    
        </div>
          </div>  
          <?php } ?> 
       
          

       
     
    </div>
      <div class="box-footer">
       <input type="button" class="btn btn-primary" id="wpuser_register<?php echo $form_id?>" name="wpuser_register"  value="<?php echo $json['SIGN_UP'] ?>"> 
        <a aria-controls="loginController<?php echo $form_id?>" role="tab" data-toggle="tab" href="#loginController<?php echo $form_id?>" class="btn btn-default pull-right"><?php echo $json['SIGN_IN'] ?></a>
      </div>
</form>
       </div>
    
 </div> 
 <?php } ?>
</div>
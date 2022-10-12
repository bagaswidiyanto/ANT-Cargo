 <div id="all">
        <header>
        <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                        <div class="login">
                           <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                        </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <?php foreach($sosmed as $s){?>
                               <a href="<?php echo $s->link;?>" class="external <?php echo strtolower($s->name);?>" data-animate-hover="pulse"><i class="fa <?php echo $s->icon;?>"></i></a>
                                
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** NAVBAR ***
    _________________________________________________________ -->
            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
                <div class="navbar2 navbar-default yamm" role="navigation" id="navbar">
                	
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home" href="<?=base_url();?>">
                                <img src="<?=base_url();?>assets/img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="<?=base_url();?>assets/img/logo.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">
                      	<?=$menu;?>
                        </div>
                        <!--/.nav-collapse -->

                      <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Form login</h4>
                    </div>
                    <div class="modal-body">
                        <form id="login">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

 <script>

$(document).ready(function() {

  base_url = '<?=base_url();?>';

    $("form#login").submit(function() {

    $(".btn").attr("disabled", true);

  var data = {
    username: $("#username").val(),
    password: $("#password").val(),
    method: 'crosssite'
  };

    
  $.ajax({

      type: "POST",

      url: base_url+"mobile/inc/login.php",

      data: data,

      success: function(data){

          if (data) { 
            //redirect jika berhasil login
            setInterval(function(){ window.location='http://mobile.mgs-express.co.id/inc/login.php?t='+data; }, 1000);
          } else {
             alert('Username atau Password Salah');
          }
          $(".btn").attr("disabled", false);
          

      },

      error: function(){

           alert('Username atau Password Salah.');
            

      }

  });

   return false;

    });

});

</script>

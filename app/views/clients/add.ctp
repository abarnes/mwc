<div class="container">
              <div class="span-24">
                  <a name="top"></a>
             <!-----------top bar---->
                      <div style="float:left;">
                          <img src="/img/logo.png" style="height:90px;position:relative;right:50px;"/>
                      </div>
                      
                      <div style="float:right;margin-right:30px;margin-top:36px;">
                          <a href="http://www.facebook.com/pages/My-Wedding-Connector/255185641182379" target="_blank"><img src="/img/fb.png" style='float:left;width:50px;margin-right:8px;'/></a>
                          <a href="http://twitter.com/mywedconnector" target="_blank"><img src="/img/twitter.png" style='float:left;width:50px;margin-right:8px;'/></a>
                          <img src="/img/phonenumber.png" style="width:230px;float:left;"/>
                      </div>
                  
                  <div class="top2" style="height:30px;">      
                  </div>
                  
              </div>
          </div>
      </div>        
      <!----end top bar---->
      
      
<div style="width:100%;background-color:#E0EFF7;">
    <div class="container">
    
        <div class="span-8" style="height:480px;">
            <img src="/img/getconnected.png" style="width:350px;margin-left:10px;"/>
            <table style="margin-left:45px;margin-bottom:0px;">
                <tr>
                    <td class="np">
                        <img src="/img/flourish.png" style="margin-bottom:51px;"/>
                    </td>
                    <td>
                        <p><span class="bullets">Let us Connect You With<br/> Top DFW Wedding<br/> Professionals for FREE</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="np">
                        <img src="/img/flourish.png" style="margin-bottom:26px;"/>
                    </td>
                    <td>
                        <p><span class="bullets">They Compete for Your<br/> Big Day</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="np">
                        <img src="/img/flourish.png" style="margin-bottom:26px;"/>
                    </td>
                    <td>
                        <p><span class="bullets">Enjoy a Picture Perfect<br/> Wedding</span></p>
                    </td>
                </tr>
            </table>
            <img src="/img/texas.png" style="position:relative;z-index:1;margin-top:-64px;margin-left:20px;"/>
            <!--<div style="height:200px;overflow:hidden;position:relative;bottom:70px;left:30px;">
                <img src="/img/texas.png"/>
            </div>-->
        </div>
        
        <div class="span-8" style="height:480px;">
            <img src="/img/couple.png" style="width:370px;margin-top:-10px;position:relative;right:70px;z-index:12"/>
        </div>
        
        <div class="span-8 last" style="height:480px;">
            <img src="/img/form-back.png" style="position:relative;left:-33px;z-index:5;width:332px;margin-top:30px;"/>
            <div class="frm">
                <?php if (!empty($errors)) {
                  echo '<p>Please correct the following errors: </p>';          
                } ?>
                <?php echo $form->create('Client', array('action' => 'add')); ?>
                <?php if (array_key_exists('first_name',$errors)) {
                            echo $form->input('first_name', array( 'placeholder' => 'FIRST NAME','label'=>'','error'=>false,'style'=>'border:2px solid red;'));
                } else {
                            echo $form->input('first_name', array( 'placeholder' => 'FIRST NAME','label'=>'','error'=>false));
                } ?>
                
                <?php if (array_key_exists('last_name',$errors)) {
                            echo $form->input('last_name', array( 'placeholder' => 'LAST NAME','label'=>'','error'=>false,'style'=>'border:2px solid red;'));
                } else {
                            echo $form->input('last_name', array( 'placeholder' => 'LAST NAME','label'=>'','error'=>false));
                } ?>
                
                <?php if (array_key_exists('phone',$errors)) {
                            echo $form->input('phone', array( 'placeholder' => 'PHONE','label'=>'','error'=>false,'style'=>'border:2px solid red;'));
                } else {
                            echo $form->input('phone', array( 'placeholder' => 'PHONE','label'=>'','error'=>false));
                } ?>
                
                <?php if (array_key_exists('email',$errors)) {
                            echo $form->input('email', array( 'placeholder' => 'EMAIL','label'=>'','error'=>false,'style'=>'border:2px solid red;'));
                } else {
                             echo $form->input('email', array( 'placeholder' => 'EMAIL','label'=>'','error'=>false));
                } ?>
                
                <?php if (array_key_exists('zip',$errors)) {
                            echo $form->input('zip', array( 'placeholder' => 'ZIP CODE','label'=>'','error'=>false,'style'=>'border:2px solid red;'));
                } else {
                            echo $form->input('zip', array( 'placeholder' => 'ZIP CODE','label'=>'','error'=>false));
                } ?>
                
                <?php if (array_key_exists('wedding_date',$errors)) {
                            echo $form->input('wedding_date', array( 'placeholder' => 'WEDDING DATE (mm/dd/yy)','type'=>'text','label'=>'','error'=>false,'style'=>'border:2px solid red;'));
                } else {
                            echo $form->input('wedding_date', array( 'placeholder' => 'WEDDING DATE (mm/dd/yy)','type'=>'text','label'=>'','error'=>false));
                } ?>
                <br/>
                <?php if (!empty($errors)) { ?>
                <div style="width:240px;text-align:center;position: relative;bottom: 22px;">
                    <input src="/img/submit.png" type="image">
                </div>
                <?php } else { ?>
                <div style="width:240px;text-align:center;">
                    <input src="/img/submit.png" type="image">
                </div>
                <?php } ?>
                <?php //echo $form->end('Submit'); ?>
            </div>
        </div>
    </div>
</div>
    
    <!------second section begins------>
<div class="top" style="height:30px;width:100%;">      
</div>

<div style="background-color:#E0EFF7;width:100%;">
    <div class="midback">
        <div class="container">
            
            <div class="span-24">
                <div class="span-17">
                    <img src="/img/bride.png" style="float:left;width:210px;margin-right:10px;"/>
                    <div class="tex">
                        <img src="/img/whyuse.png" style="margin-left:30px;width:380px;"/>
                        <p>My wedding connector is a revolutionary new way to plan your wedding that hundreds of brides in your city have already taken advantage of.<br/><br/>
            
                        By analyzing your wedding needs  we are able to connect you with the top wedding professionals in DFW that can help you create your picture perfect wedding. <br/><br/>
            
                        Get the dream wedding you've always wanted by utilizing our trusted relationships with the top wedding professionals in DFW. Try it Today!
                        </p>
                    </div>
                    <br/><br/>
                    
                    <img src="/img/midbox.png" style="width:600px;margin-left:46px;"/>
                    <div style="margin-top:-330px;">
                        <table class="midtb">
                            <tr>
                                <td colspan=3 class="np">
                                    <h2>CONNECT WITH THE BEST</h2>
                                </td>
                            </tr>
                            <tr>
                                <td class="np">
                                    <p>
                                    Photographers<br/>
                                    Videographers<br/>
                                    Florists<br/>
                                    Cake Designers
                                    </p>
                                </td>
                                <td class="np">
                                    <img src="/img/bridalparty.png"/>
                                </td>
                                <td class="np">
                                    <p>
                                    Hair Stylists<br/>
                                    Music<br/>
                                    Limo Services<br/>
                                    And MORE!
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <p class="midp">My Wedding Connector is a non-binding, risk-free process and simply a resource to help connect you with the top wedding professionals in your area.
                        Although we highly recommend them, there is no obligation to ultimately hire the wedding professionals that contact you.</p>
                    </div>
                </div>
                
                <div class="span-7 last" style="position:relative;z-index:5;">
                    <img src="/img/midsection-rightback.png" style="width:258px;height:649px;"/>
                    <img src="/img/howitworks.png" style="position:relative;bottom:655px;width:220px;margin-left:18px;"/>
                    <table class="rightform">
                        <tr>
                            <td class="np">
                                <p>
                                    <span class="stp">STEP 1</span>
                                    Fill out our simple <br/>survey</p>   
                                <img src="/img/rpic1.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="np">
                                <p>
                                    <span class="stp">STEP 2</span>
                                    We'll recommend you<br/> to select wedding professionals
                                </p>
                                <img src="/img/rpic2.png"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="np">
                                <p>
                                    <span class="stp">STEP 3</span>
                                    Wedding professionals <br/>compete for your big day
                                </p>
                                <img src="/img/rpic3.png"/>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
</div>
        
    <!--------bottom section---->
<div style="background-image:url('/img/whatpeople-back.png');background-repeat:repeat-x;">
    <div class="container" style="position:relative;">
        <div class="span-24" style="margin:0px;line-height:1em;position:absolute;top:0px;">
            <img src="/img/whatpeople.png"/>
        </div>
        <div class="span-24" style="background-color:#E0EFF7;margin-top:82px;">
            
            <br/><br/>
            
            <img src="/img/bottombase.png" class="bottombox"/>
            <table class="btable">
                <tr>
                    <td>
                        <img src="/img/bottompic1.png" style="float:left;">
                    </td>
                    <td class="tx">
                            <p>"My Wedding Connector made it easier to plan my wedding because I had photographers and cake designers calling ME! It really helped take some of the headache out of putting all of the pieces of a wedding together!"</p>
                            <h4>-CASSIE C.</h4>
                    </td>
                    <td>
                        <img src="/img/bottompic2.png" style="float:left;">
                    </td>
                    <td class="tx">
                            <p>"My fiance told me that I was in charge of finding the photographer and videographer for our wedding. I had no idea where to start, but My Wedding Connector made it so easy."</p>
                            <h4>-KYLE M.</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="/img/bottompic3.png" style="float:left;">
                    </td>
                    <td class="tx">
                            <p>"I was extremely impressed with the quality of wedding professionals that My Wedding Connector associates with. They went above and beyond what I ever expected and made my wedding day truly unforgettable."</p>
                            <h4>-KELSEY M.</h4>
                    </td>
                    <td>
                        <img src="/img/bottompic4.png" style="float:left;">
                    </td>
                    <td class="tx">
                            <p>"My fiance and I both work full time and didn't have much time to plan the perfect wedding we both wanted.  My Wedding Connector made it easy to create the day of our dreams without having to deal with all the stress."</p>
                            <h4>-CAROLINE R.</h4>
                    </td>
                </tr>
            </table>
            
            <br/><br/>
            
            <img src="/img/bottombride.png" style="margin-left:50px;float:left;">
                
            <div class="btext">
                <h1>Join hundreds of brides<br/> who have discovered<br/> the secret to a perfect<br/> wedding!</h1>
            </div>
            <a href="#top"><img src="/img/getstarted.png" style="float:right;margin-top:-80px;"/></a>    
               
        </div>
    </div>
</div>
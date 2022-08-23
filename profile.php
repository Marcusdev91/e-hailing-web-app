 <?php

    include_once('header.php');
?>



<!---Personal_info----form-->
 <div style="margin:auto;padding-top:10vh; max-width: 491px; color:#464645; " class=" mt-sm-6 mt-lg-2 ">
       <h1 class="text-center"><?php
                if(isset($_SESSION["user_first_name"])){
                    echo'<p class="p-2">Hello <b class="light">&nbsp;' . $_SESSION["user_first_name"] .'</b> kindly fill in this form if you have\'nt done so to be a driver</p>';
                }
           
           ?>
     </h1>
<form  style="max-width: 439px; background-color:white;" class="m-auto mt-lg-4 rounded p-4" action="attachments.php" method="post" enctype="multipart/form-data"> 
                <h4 class="pt-lg-4 pt-sm-4" style="text-align: center;">Personal information and vehicle details</h4>
                        
    <div class="form-group mb-4">
        <label  for="inlineFormInputGroup">Phone</label>
      <div class="input-group mb-2">
        <select  class="input-group-prepend form-control col-3 col-lg-4">
          <option class="input-group-text ">+27</option>
             
            
        </select>
        <input type="tel" name="phone" class="text-muted form-control" id="inlineFormInputGroup" placeholder="546 456 879" >
      </div>
      
  </div>
    
          <div class="form-group mb-4">
        <label  for="inlineFormInputGroup">email</label>
      <div class="input-group mb-2">
        
        <input type="email" name="email" class="text-muted form-control" id="inlineFormInputGroup" placeholder="Desired email"  required>
      </div>
      
  </div>
      <div class="form-group mb-4">
    <label for="exampleFormControlSelect1">Language</label>
    <select name="language" class="form-control" id="exampleFormControlSelect1">
      <option>English,South African</option>
       <option>English,American</option>
    </select>
       
      
  </div>
    
  
                  <div class="form-group mb-4">
    <label for="exampleFormControlSelect1">Vehicle manufacturer</label>
   <input  class="form-control "type="text" placeholder="e.g Audi" name="vmanufacturer">
      
  </div>
                           
         <div class="form-group mb-4">
    <label for="exampleFormControlSelect1">Vehicle model</label>
   <input  class="form-control "type="text" placeholder="e.g A3" name="vmodel">
      
  </div>
            <div class="form-group mb-4">
    <label for="exampleFormControlSelect1">Vehicle year</label>
   <input  class="form-control "type="text" placeholder="e.g 2016" name="vyear">
      
  </div>
      
          <div class="form-group mb-4">
    <label for="exampleFormControlSelect1">License plate</label>
              <div class="input-group mb-2">
              <input type="name" class="form-control" id="exampleFormControlInput1" name="licenseplate" placeholder="765AA">
              </div>
                           
                           
    <div class="form-group mb-4">
    <label for="exampleFormControlSelect1">Vehicle colour</label>
     <input type="name" class="form-control" id="exampleFormControlInput1" name="vcolour" placeholder="e.g blue">
    
      
  </div>
                
    </div>
                <br>
  
            <p class="m-auto  text-muted">&copy;MAI-CAB 2020</p>
           
        
           
         
        
           
           <!--Legal-and-pricing-->
            <div style="margin:auto;padding-top:10vh; max-width: 491px; color:#464645; " class=" mt-sm-12 mt-lg-4 ">
                <h4 class="pt-lg-4 pt-sm-4" style="text-align: center;">Legal and pricing details</h4>
                 
                <div class="form-group ">
    <label for="exampleFormControlInput1">National ID</label>
    <input type="name" class="form-control " name="nid"   id="exampleFormControlInput1" placeholder="98390909839" required>
  </div>
  <div class="form-group mb-4">
        <label  for="inlineFormInputGroup">Driver license</label>
      <div class="input-group mb-2">
 <input type="name" class="form-control " name="dlicense" id="exampleFormControlInput1" placeholder="Ad34678" required>
      </div>
      
  </div>
    

                <br>
  
            <p class="m-auto  text-muted">&copy;MAI-CAB 2020</p>
           
        
        
           </div>
        
           
                      <!--Documents-->
            <div style="margin:auto;padding-top:10vh; max-width: 491px; color:#464645; " class=" mt-sm-12 mt-lg-4 ">
                
                            
                               
                                     </div>
                      <div class="form-group mb-4">
                           
                          <div class="border mb-3 p-4">
                              <h3>Vehicle Owner's ID</h3>
                              
                              <input class="" type="file" ; required>
                              
                          </div>
                       

                      </div>
                                            
                    <div class="form-group mb-4">
                           
                          <div class="border mb-3 p-4">
                              <h3>Driver's License(PrDP)</h3>
                              <p>Should be Prof. driving permit that hasnt expired.</p>
                              <input type="file" class="form-control" name="DlicenseAtt"  required>
                              
                          </div>
                       

                      </div>
                                        
                       <div class="form-group mb-4">
                           
                          <div class="border mb-3 p-4">
                              <h3 >Motor Vehicle License
                                    Disc with Operator Card
                              </h3>
                              <p>Ensure that both discs are shown, One disc is "License Disc and Roadworthy certificate" 
                                and another one "Operator Card".
                              </p>
                              <input type="file" class="form-control" name="mvlicense"   required>
                              
                          </div>
                       

                      </div>
                        
                        <div class="form-group mb-4">
                           
                          <div class="border mb-3 p-4">
                              <h3 >Driver Photo
                              </h3>
                              <p>Must be clear and high quality.
                              </p>
                              <input type="file" class="form-control" name="dphoto"  required>
                              
                          </div>
                       

                      </div>
                                        
                             <div class="form-group mb-4">
                           
                          <div class="border mb-3 p-4">
                              <h3 >Certificate of Registration for your car
                              </h3>
                        
                              <input type="file" class="form-control" name="carReg"  required>
                              
                          </div>
                       

                      </div>
                                        
                        
                        <div class="form-group mb-4">
                           
                          <div class="border mb-3 p-4">
                              <h3 >Signed EME affidavit
                              </h3>
                              <p>
                               Signed affidavit stating you are a Black South African, Bolt will have sent you an email regarding an 
                                  EME form which you can print and have the nearest commissioner of Oaths sign.
                              </p>
                        
                              <input type="file" class="form-control" name="affi"  required>
                              
                          </div>
                       

                      </div>

                        <button class="btn rounded btn btn-outline-dark btn-block " name="submit"  type="submit" >Continue <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M8.22 2.97a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06l2.97-2.97H3.75a.75.75 0 010-1.5h7.44L8.22 4.03a.75.75 0 010-1.06z"></path></svg>    <span class="oi oi-arrow-right"></span></button>
                                    <br>

                                <p class="m-auto  text-muted">&copy;MAI-CAB 2020</p>


                            
</form>    
                
            </div>

  <?php
        include_once 'footer.php';
    ?>
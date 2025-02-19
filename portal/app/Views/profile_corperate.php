      
<?php 
    $this->gfa_model = model('App\Models\GfaModel');
    $this->admin_model = model('App\Models\AdminModel');
?>
      <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Account</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("gfa/corporate_dashboard"); ?>"><?php echo lang('translation.Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php echo lang('translation.Corporate Profile') ?> </a>
                    </li>
                    <li class="breadcrumb-item active"> <?php echo lang('translation.Account') ?>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">-->
          <!--  <div class="mb-1 breadcrumb-right">-->
          <!--    <div class="dropdown">-->
          <!--      <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>-->
          <!--      <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <div class="content-body"><div class="row">
  <div class="col-12">
     <ul class="nav nav-pills mb-2">
      <!-- account -->
     <li class="nav-item">
        <a class="nav-link  active" href="<?php echo base_url("gfa/profile"); ?>">
          <i data-feather="user" class="font-medium-3 me-50"></i>
          <span class="fw-bold"><?php echo lang('translation.User Profile') ?></span>
        </a>
      </li>
       
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link" href="<?php echo base_url(); ?>gfa/startupprofile">-->
      <!--    <i data-feather="lock" class="font-medium-3 me-50"></i>-->
      <!--    <span class="fw-bold">Corperate Profile</span>-->
      <!--  </a>-->
      <!--</li>-->
      <!-- billing and plans 
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i data-feather="bookmark" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Billings &amp; Plans</span>
        </a>
      </li>-->
      <!-- notification 
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i data-feather="bell" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Notifications</span>
        </a>
      </li>-->
    
    </ul>

    <!-- profile -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title"><?php echo lang('translation.Profile Details') ?></h4><br>
       
      </div>
      
     
      <?php  
      
      $getPhoto =  $this->gfa_model->getPhotoUploaded($email);  
      if(empty($getPhoto)){
          $showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }
      
      
      
      ?>
      <div class="card-body py-2 my-25">
         <div class='showProfileError'>
           <!--Required field updates are marked with an asterisk (*) and coloured red. <br>-->
    
     
     
     
     </div><br>
        <!-- header section -->
         <label class="form-label" for="accountFirstName"><?php echo lang('translation.Upload your Logo') ?></label><br>
         <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Upload your Logo</label>-->
          
              <br>
        <div class="d-flex">
            
          <a href="#" class="me-25">
              
            <img
              src="<?php echo base_url().$showPhoto; ?>"
              id="frame"
              class="uploadedAvatar rounded me-50"
              alt="profile image"
              height="100"
              width="100"
            />
          </a>
          <!-- upload and reset button -->
          <form class="fileInfox" method="post" action="#" enctype="multipart/form-data">
          <div class="d-flex align-items-end mt-75 ms-1">
            <div>
              <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 uploadBtn"><?php echo lang('translation.Upload') ?></label>
              <input type="file" name="file[]" id="account-upload" hidden accept="image/*"  onchange="preview()" />
              <input type="hidden" name='upload_type' value='photo' />
              <button type="submit" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75 savePhotox"><?php echo lang('translation.Save Upload') ?></button>
              <p class="mb-0"><?php echo lang('translation.Allowed file types: png, jpg, jpeg') ?>.</p>
              <span class="savePhoto"></span>
            </div>
          </div>
          </form>
          <!--/ upload and reset button -->
        </div>
        <!--/ header section -->
        
        <script>
            function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
    
      
}
$(function(){
    
$(".fileInfox").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/profile_photo"); ?>",
	 error:function() {$(".savePhoto").html('Error')},
	 beforeSend:function() {$(".savePhoto").html('Saving Photo...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".savePhoto").html(data);
		
	
		//}
      }
    });
    return false;

 });
});    
        </script>
<!--        <form>-->
<!--  <input type="file" onchange="preview()">-->
<!--  <img id="frame" src="" width="100px" height="100px"/>-->
<!--</form>-->
        <?php 
                  
                  
                  
                 if(empty($account_type)){
                     $nameArray = explode(" ", $this->gfa_model->getOldStartUpDetails($email)[0]['name']); 
                     $firsname = $nameArray[0];
                     $lastname = $nameArray[1];
                     $phone = $this->gfa_model->getOldStartUpDetails($email)[0]['phone'];
                     $country = $this->gfa_model->getOldStartUpDetails($email)[0]['country'];
                     $industry = $this->gfa_model->getOldStartUpDetails($email)[0]['industry'];
                 }else{
                     if($account_type=='corperate' || $account_type=='accelerator'){
                  $nameArray = explode(" ", $this->gfa_model->getCorperateDetails($email)[0]['Key_contact_name']);
                  $firsname = $nameArray[0];
                    $lastname = $nameArray[1];
                     $phone = $this->gfa_model->getCorperateDetails($email)[0]['Phone'];
                     $country = $this->gfa_model->getCorperateDetails($email)[0]['Hq_country'];
                     $industry = $this->gfa_model->getCorperateDetails($email)[0]['Corporate_industry'];
                     }
                      if($account_type=='investor'){
                        $nameArray = explode(" ", $this->gfa_model->getInvestorDetails($email)[0]['Key_contact_name']);
                        $firsname = $nameArray[0];
                        $lastname = $nameArray[1];
                        
                     }
                  }
                ?>  
        <!-- form -->
        <form class="validate-form mt-2 pt-50 startUpForm" method="post" action="" enctype="multipart/form-data">
            <div class="row">
              
                 
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFirstName"><?php echo lang('translation.First Name') ?></label>
               <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* First Name</label>-->
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="firstName"
                placeholder="John"
                value="<?php echo (!empty($firsname))?$firsname : ""; ?>"
                data-msg="Please enter first name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountLastName"><?php echo lang('translation.Last Name') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Last Name</label>-->
              <input
                type="text"
                class="form-control"
                id="accountLastName"
                name="lastName"
                placeholder="Bamako"
                value="<?php echo (!empty($lastname))?$lastname : ""; ?>"
                data-msg="Please enter last name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"><?php echo lang('translation.Gender') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* How did you hear about us?</label>-->
              
              <select name="gender" class=" form-control form-select">
              <option value="<?php echo (!empty($this->gfa_model->getCorperateDetails($email)[0]['Gender']))?$this->gfa_model->getCorperateDetails($email)[0]['Gender'] : "";  ?>"><?php echo (!empty($this->gfa_model->getCorperateDetails($email)[0]['Gender']))?$this->gfa_model->getCorperateDetails($email)[0]['Gender'] : "";  ?></option>
                  <option value="Male"><?php echo lang('translation.Male') ?></option>
                       <option value="Female"><?php echo lang('translation.Female') ?></option>
                       
               </select>  
                 </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountEmail"><?php echo lang('translation.Email') ?></label>
               <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Email</label>-->
              
              <input
                type="email"
                class="form-control"
                id="accountEmail"
                name="email"
                disabled
                
                value="<?php echo $email ; ?>"
              />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPhoneNumber"><?php echo lang('translation.Phone Number') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Phone Number</label>-->
              <input
                type="text"
                class="form-control account-number-mask"
                id="accountPhoneNumber"
                name="phoneNumber"
                value="<?php echo (!empty($phone))?$phone : "" ; ?>"
              />
            </div>
              <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="country"><?php echo lang('translation.Your Country') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Country</label>-->
<select id="country" name="country" class="select2 form-select">
                <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Hq_country'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Hq_country'];  ?></option>
    <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option> 
              </select>
            </div>
            <div class="col-12 col-sm-6 mb-1" style="display: none;">
              <label class="form-label" for="accountState">A PRECISER </label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* State</label>-->
              <input type="text" class="form-control" id="accountState" name="Other_Country"  value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Hq_country'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountState"><?php echo lang('translation.State') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* State</label>-->
              <input type="text" class="form-control" id="accountState" name="City"  value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['City'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"><?php echo lang('translation.Address') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Address</label>-->
              <input type="text" class="form-control" id="accountAddress" name="Business_address"  value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Business_address'];  ?>" />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountZipCode"><?php echo lang('translation.Website') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Zip Code</label>-->
              <input
                type="text"
                class="form-control account-zip-code"
                id="accountZipCode"
                name="Website"
                
               
                value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Website'];  ?>"
              />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"><?php echo lang('translation.Facebook Profile') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Facebook Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="Facebook" value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Facebook'];  ?>" />
            </div>
            
          <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"><?php echo lang('translation.LinkedIn Profile') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Linkedin Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="LinkedIn"  value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['LinkedIn'];  ?>" />
            </div>
          
            
              <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"><?php echo lang('translation.How did you hear about us?') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* How did you hear about us?</label>-->
              
              <select  name="Hear_Us" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Hear_Us'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Hear_Us'];  ?></option>
                  <option value="Tv/Radio"><?php echo lang('translation.Tv/Radio') ?></option>
                       <option value="CIPME Website"><?php echo lang('translation.CIPME Website') ?></option>
                       <option value="Google Search"><?php echo lang('translation.Google Search') ?></option>
                       <option value="Online Ads"><?php echo lang('translation.Online Ads') ?></option>
                       <option value="Linkedin">Linkedin</option>
                       <option value="Others">Autres – précisez</option>
               </select>  
                 </div>
                 <div class="col-12 col-sm-6 mb-1 otherSelected" style="display:none;">
              <label class="form-label" for="accountAddress">Autres – précisez</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Linkedin Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="Hear_Us_Others"  value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Hear_Us'];  ?>" />
            </div>
                 <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"><?php echo lang('translation.Company Name') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Linkedin Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="Corporate_Name" placeholder="Company Name" value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Corporate_Name'];  ?>" />
            </div>
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="normalMultiSelect"><?php echo lang('translation.Industry') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Industry</label>-->
              
               <select class="select2 form-select" name="industry[]" id="select2-multiple" multiple>
              
                <?php  $IndustryArray = explode(",",$this->gfa_model->getCorperateDetails($email)[0]['Corporate_industry']); ?>
                 <?php if(!empty($IndustryArray[0])){  ?>
                 <option value="<?php echo $IndustryArray[0];  ?>" selected><?php echo lang("translation.{$IndustryArray[0]}")  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($IndustryArray[1])){  ?>
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($IndustryArray[2])){  ?>
                 <option value="<?php echo $IndustryArray[2];  ?>" selected><?php echo lang("translation.{$IndustryArray[2]}")  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
			  <?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
                  <option><?php echo lang("translation.{$rowArrayIndustry['industry']}") ?></option>
                  <?php }  ?>
              </select>
            </div>
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountReadiness"><?php echo lang('translation.What Type of Startups are your Interest?') ?></label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Partner_startup_stage" class="form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Partner_startup_stage'];  ?>"><?php echo lang("translation.{$this->gfa_model->getCorperateDetails($email)[0]['Partner_startup_stage']}");  ?></option>
                       
   
    
    <option value="Launch"><?php echo lang('translation.Launch') ?></option>
    <option value="Early Stage"><?php echo lang('translation.Early Stage') ?></option>
    <option value="Late Stage"><?php echo lang('translation.Late Stage') ?></option>
    <option value="All Stages "><?php echo lang('translation.All Stages') ?></option>
    <option value="Specific Stage"><?php echo lang('translation.Specific Stage') ?></option>
    
               </select>  
                 </div>
             <div class="col-12 col-sm-6 mb-1" style="display: none;">
              <label class="form-label" for="accountReadiness"><?php echo lang('translation.How would you like to engage with CIPME & the startups in our community?') ?></label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Engage_Startup" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Engage_Startup'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Engage_Startup'];  ?></option>
                       
   As a sponsor of an Accelerator Program,As an Investor in Startups,Solutions on Efficiency and cost saving
    <option value="As a sponsor of an Accelerator Program"><?php echo lang('translation.As a sponsor of an Accelerator Program') ?></option>
    <option value="As an Investor in Startups"><?php echo lang('translation.As an Investor in Startups') ?></option>
    <option value="Solutions on Efficiency and cost saving"><?php echo lang('translation.Solutions on Efficiency and cost saving') ?></option>
    <option value="Customised Partnership"><?php echo lang('translation.Customised Partnership') ?></option>
    <option value="Others"><?php echo lang('translation.Others') ?></option>
    
               </select>  
                 </div>
                <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"><?php echo lang('translation.Would you like to co-organize events with CIPME?') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* How did you hear about us?</label>-->
              
              <select id="country" name="Gfa_Event" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Gfa_Event'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Gfa_Event'];  ?></option>
                  <option value="Yes"><?php echo lang('translation.Yes') ?></option>
                       <option value="No"><?php echo lang('translation.No') ?></option>
                       <option value="Maybe"><?php echo lang('translation.Maybe') ?></option>
                       
               </select>  
                 </div>  
                 <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"><?php echo lang('translation.Would you like to be featured on any of our media platforms?') ?></label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* How did you hear about us?</label>-->
              
              <select id="country" name="GFa_Media" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['GFa_Media'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['GFa_Media'];  ?></option>
                  <option value="Yes"><?php echo lang('translation.Yes') ?></option>
                       <option value="No"><?php echo lang('translation.No') ?></option>
                       <option value="Maybe"><?php echo lang('translation.Maybe') ?></option>
                       
               </select>  
                 </div>
            <div class="col-12 col-sm-6 mb-1" style="display: none;">
              <label class="form-label" for="accountReadiness"><?php echo lang('Corporate Solutions') ?></label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Solution_Corperate" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Solution_Corperate'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Solution_Corperate'];  ?></option>
                       
    <option value="Financial Services FMCG/CPG"><?php echo lang('translation.Financial Services FMCG/CPG') ?></option>
    <option value="Renewable Energy Software"><?php echo lang('translation.Renewable Energy Software') ?></option>
    <option value="Mastercard/VISA"><?php echo lang('translation.Mastercard/VISA') ?></option>
    <option value="Manufacturing"><?php echo lang('translation.Manufacturing') ?></option>
    <option value="Payment Platform"><?php echo lang('translation.Payment Platform') ?></option>
    <option value="ICT Technology Products & Solutions"><?php echo lang('translation.ICT Technology Products & Solutions') ?></option>
    <option value="Engineering/ESG"><?php echo lang('translation.Engineering/ESG') ?></option>
               </select>  
                 </div>
           
                 
           
               <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountModel"><?php echo lang('translation.Whats your business model') ?></label>
              <!-- <label class="form-label" for="accountInvolvement" style="color:#ff0000;">* Whats your business model</label>-->
              
              <select id="Model" name="Startup_Model" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Startup_Model'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Startup_Model'];  ?></option>
                        
                        
    <option value="B2B">B2B</option>
    <option value="B2B2C">B2B2C</option>
    <option value="B2C">B2C</option>
    <option value="B2C/B2B">B2C/B2B</option>
    <option value="D2C">D2C</option>
    <option value="D2C/B2B">D2C/B2B</option>
    <option value="D2C/B2C">D2C/B2C</option>
               </select>  
                 </div>  
                
                 
                 
                  <div class="col-12 col-sm-6 mb-1" style="display: none;">
              <label class="form-label" for="accountReadiness"><?php echo lang('translation.Core Interest of Corporate your Startup can Solve') ?></label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Core_Interest_Corporate" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Core_Interest_Corporate'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Core_Interest_Corporate'];  ?></option>
                       
   
 <option value="Increasing revenue"><?php echo lang('translation.Increasing revenue') ?></option>
 <option value="Reducing company costs"><?php echo lang('translation.Reducing company costs') ?></option>
 <option value="Enhance operational excellence, capabilities or performance management"><?php echo lang('translation.Enhance operational excellence, capabilities or performance management') ?></option>
 <option value="Ensure resources & processes becoming liabilities rather capabilities, when facing challenges such as new markets or disruptive challenges"><?php echo lang('translation.Ensure resources & processes becoming liabilities rather capabilities, when facing challenges such as new markets or disruptive challenges') ?></option>
 <option value="Accessing new markets/customers"><?php echo lang('translation.Accessing new markets/customers') ?></option>
    <option value="Increasing sales in existing markets"><?php echo lang('translation.Increasing sales in existing markets') ?></option>
 <option value="Improving your access to technology and other resources"><?php echo lang('translation.Improving your access to technology and other resources') ?></option>
 <option value="Improving your product offering for your customers"><?php echo lang('translation.Improving your product offering for your customers') ?></option>
    <option value="Diversifying your product offerings"><?php echo lang('translation.Diversifying your product offerings') ?></option>
    <option value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements"><?php echo lang("translation.Digital Transformation digital transformation for a company's business process, culture and customer experiences to meet changing business and market requirements") ?></option>
 <option value="Aggregation of data and gaining new insights"><?php echo lang('translation.Aggregation of data and gaining new insights') ?></option>
    <option value="Solutions to enable a smart workforce across multiple internal functions"><?php echo lang('translation.Solutions to enable a smart workforce across multiple internal functions') ?></option>
               </select>  
                 </div>
                  <div class="col-12 col-sm-6 mb-1" style="display: none;">
              <label class="form-label" for="accountReadiness"><?php echo lang("translation.Corporate Solution Proximity to Company's Core") ?></label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Corporate_Solution_Prox" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Corporate_Solution_Prox'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Corporate_Solution_Prox'];  ?></option>
                       
    <option value="Adjacent"><?php echo lang("translation.Adjacent") ?></option>
    <option value="Close"><?php echo lang("translation.Close") ?></option>
    <option value="Radical"><?php echo lang("translation.Radical") ?></option>
    
               </select>  
                 </div>
                  <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountReadiness"><?php echo lang("translation.Solution Ownership/Relationship Style") ?></label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Solution_Ownership" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Solution_Ownership'];  ?>"><?php echo $this->gfa_model->getCorperateDetails($email)[0]['Solution_Ownership'];  ?></option>
                   
    <option value="Built In-house"><?php echo lang("translation.Built In-house") ?></option>
    <option value="Investment Opportunity"><?php echo lang("translation.Investment Opportunity") ?></option>
    <option value="Partnership/Joint Venture"><?php echo lang("translation.Partnership/Joint Venture") ?></option>
    <option value="Acquisition"><?php echo lang("translation.Acquisition") ?></option>
    
               </select>  
                 </div>
                
           
           
            <!--<div class="col-12 col-sm-6 mb-1">-->
            <!--  <label for="language" class="form-label">Language</label>-->
            <!--  <select id="language" class="select2 form-select">-->
            <!--    <option value="">Select Language</option>-->
            <!--    <option value="en">English</option>-->
            <!--    <option value="fr">French</option>-->
            <!--    <option value="de">German</option>-->
            <!--    <option value="pt">Portuguese</option>-->
            <!--  </select>-->
            <!--</div>-->
            <!--<div class="col-12 col-sm-6 mb-1">-->
            <!--  <label for="timeZones" class="form-label">Timezone</label>-->
            <!--  <select id="timeZones" class="select2 form-select">-->
            <!--    <option value="">Select Time Zone</option>-->
            <!--    <option value="-12">(GMT-12:00) International Date Line West</option>-->
            <!--    <option value="-11">(GMT-11:00) Midway Island, Samoa</option>-->
            <!--    <option value="-10">(GMT-10:00) Hawaii</option>-->
            <!--    <option value="-9">(GMT-09:00) Alaska</option>-->
            <!--    <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>-->
            <!--    <option value="-8">(GMT-08:00) Tijuana, Baja California</option>-->
            <!--    <option value="-7">(GMT-07:00) Arizona</option>-->
            <!--    <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>-->
            <!--    <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>-->
            <!--    <option value="-6">(GMT-06:00) Central America</option>-->
            <!--    <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>-->
            <!--    <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>-->
            <!--    <option value="-6">(GMT-06:00) Saskatchewan</option>-->
            <!--    <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>-->
            <!--    <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>-->
            <!--    <option value="-5">(GMT-05:00) Indiana (East)</option>-->
            <!--    <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>-->
            <!--    <option value="-4">(GMT-04:00) Caracas, La Paz</option>-->
            <!--    <option value="-4">(GMT-04:00) Manaus</option>-->
            <!--    <option value="-4">(GMT-04:00) Santiago</option>-->
            <!--    <option value="-3.5">(GMT-03:30) Newfoundland</option>-->
            <!--  </select>-->
            <!--</div>-->
            <!--<div class="col-12 col-sm-6 mb-1">-->
            <!--  <label for="currency" class="form-label">Currency</label>-->
            <!--  <select id="currency" class="select2 form-select">-->
            <!--    <option value="">Select Currency</option>-->
            <!--    <option value="usd">USD</option>-->
            <!--    <option value="euro">Euro</option>-->
            <!--    <option value="pound">Pound</option>-->
            <!--    <option value="bitcoin">Bitcoin</option>-->
            <!--  </select>-->
            <!--</div>-->
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn"><?php echo lang("translation.Save Company Profile") ?></button>
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayAction"></span>
              
              
              
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>
    
    <script>
      $(function(){

         // Listen for changes in the select element
    $('select[name="Hear_Us"]').on('change', function() {
        // Check if the selected value is "Others"
        if ($(this).val() === 'Others') {
            // Show the input field for "Others"
            $('.otherSelected').show();
        } else {
            // Hide the input field for "Others"
            $('.otherSelected').hide();
        }
    });

    // Optionally, check the initial value to handle pre-selected "Others"
    if ($('select[name="Hear_Us"]').val() === 'Others') {
        $('.otherSelected').show();
    } else {
        $('.otherSelected').hide();
    }
          
          $('inputX').keyup(function(){
              
           var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/checkProfileErrorDemo"); ?>",
     error:function() {$(".showProfileError").html('Error');},
	 beforeSend:function() {$(".showProfileError").html('');},
      success: function(data) {
       //
		  
	   $(".showProfileError").html(data);  
	   
	  
	
       }
      
    });  
          });
          
          $('selectX').change(function(){
              
           var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/checkProfileErrorDemo"); ?>",
     error:function() {$(".showProfileError").html('Error');},
	 beforeSend:function() {$(".showProfileError").html('');},
      success: function(data) {
       //
		  
	   $(".showProfileError").html(data);  
	   
	  
	
       }
      
    });  
          });
          
          var last_valid_selection = null;

          $('.userRequest_activity').change(function(event) {

            if ($(this).val().length > 3) {

              $(this).val(last_valid_selection);
              	$(".selectError").html('You can not select more 3 options');
            } else {
              last_valid_selection = $(this).val();
              $(".selectError").html('');
            }
          });
          
          	$(".saveBtn").click(function(e) {
    //---------------^---------------
    e.preventDefault();
    
	
	 var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/corperateProfileproDemo"); ?>",
     error:function() {$(".displayAction").html('Error saving data');},
	 beforeSend:function() {$(".saveBtn").html('Enregistrement du profil...');},
      success: function(data) {
       //
		  $(".displayAction").html("Enregistré avec succès !");  
	   $(".saveBtn").html('Enregistré');  
	   
	  
	
       }
      
    });
	 
  
  });
          
      });  
    </script>

  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->



   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

  
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/dashboard'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Profile </a>
                    </li>
                    <li class="breadcrumb-item active"> Account
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
        <a class="nav-link  active" href="<?php echo base_url('gfa/profile'); ?>">
          <i data-feather="user" class="font-medium-3 me-50"></i>
          <span class="fw-bold">User Profile</span>
        </a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('gfa/startupprofile'); ?>">
          <i data-feather="lock" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Startup Profile</span>
        </a>
      </li>
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
        <h4 class="card-title">Profile Details</h4><br>
       
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
           Required field updates are marked with an asterisk (*) and coloured red. <br>
    <?php if($this->gfa_model->getPhotoUploaded($email)[0]['Photo_name']==""){ ?>
     <!--<div style="color:#ff0000;">* Upload your Logo</div>-->
     <?php } ?>
     <?php if($this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']==""){ ?>
     <div style="color:#ff0000;">* First Name</div>
     <div style="color:#ff0000;">* Last Name</div> 
     <?php }  ?>
     <?php if($this->gfa_model->getStartUpDetails($email)[0]['Phones']==""){ ?>
     <div style="color:#ff0000;">* Phone Number</div>
      <?php }  ?>
     <?php if($this->gfa_model->getStartUpDetails($email)[0]['Country']==""){ ?>
     <div style="color:#ff0000;">* Your Country</div>
      <?php }  ?>
     <?php if($this->gfa_model->getStartUpDetails($email)[0]['State']==""){ ?>
     <div style="color:#ff0000;">* State</div>
      <?php }  ?>
     <?php if($this->gfa_model->getStartUpDetails($email)[0]['Address']==""){ ?>
     <div style="color:#ff0000;">* Address</div>
      <?php }  ?>
     <?php if($this->gfa_model->getStartUpDetails($email)[0]['ZipCode']==""){ ?>
     <div style="color:#ff0000;">* Zip Code</div>
      <?php }  ?>
    
     <?php if($this->gfa_model->getStartUpDetails($email)[0]['Personal_Linkedin']==""){ ?>
     <div style="color:#ff0000;">* Personal LinkedIn Profile</div>
      <?php }  ?>
   
     <?php if($this->gfa_model->getStartUpDetails($email)[0]['Hear_Us']==""){ ?>
     <div style="color:#ff0000;">* How did you hear about us?</div>
      <?php }  ?>
      <?php if($this->gfa_model->getStartUpDetails($email)[0]['Gender']==""){ ?>
     <div style="color:#ff0000;">* Gender?</div>
      <?php }  ?>
      <?php if($this->gfa_model->getStartUpDetails($email)[0]['About_Me']==""){ ?>
     <div style="color:#ff0000;">* About yourself</div>
      <?php }  ?>
     
     
     
     
     </div><br>
        <!-- header section -->
         <label class="form-label" for="accountFirstName">Upload your Logo</label><br>
         <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Upload your Logo</label>-->
          
              <br>
        <div class="d-flex">
   <?php        $getPhoto = $this->gfa_model->getPhotoUploaded($email);
            if(empty($getPhoto)){
          $showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }

      ?>
          <a href="#" class="me-25">
              
            <img
              src="<?php echo base_url($showPhoto); ?>"
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
              <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 uploadBtn">Upload</label>
              <input type="file" name="file[]" id="account-upload" hidden accept="image/*"  onchange="preview()" />
              <input type="hidden" name='upload_type' value='photo' />
              <button type="submit" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75 savePhotox">Save Upload</button>
              <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
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
     url: "<?php echo base_url('gfa/profile_photo'); ?>",
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
                     if($account_type=='startup'){
                  $nameArray = explode(" ", $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']);
                  $firsname = $nameArray[0];
                    $lastname = (!empty($nameArray[1]))? $nameArray[1] : '';
                     $phone = $this->gfa_model->getStartUpDetails($email)[0]['Phones'];
                     $country = $this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'];
                     $industry = $this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'];
                     }
                      if($account_type=='investor'){
                        $nameArray = explode(" ", $this->gfa_model->getInvestorDetails($email)[0]['Contact_Name']);
                        $firsname = $nameArray[0];
                        $lastname = $nameArray[1];
                        
                     }
                  }
                ?>  
        <!-- form -->
        <form class="validate-form mt-2 pt-50 startUpForm" method="post" action="" enctype="multipart/form-data">
            <div class="row">
              
                 
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFirstName">First Name</label>
               <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* First Name</label>-->
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="firstName"
                placeholder="John"
                value="<?php echo $firsname ?>"
                data-msg="Please enter first name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountLastName">Last Name</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Last Name</label>-->
              <input
                type="text"
                class="form-control"
                id="accountLastName"
                name="lastName"
                placeholder="Bamako"
                value="<?php echo $lastname ?>"
                data-msg="Please enter last name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Gender</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* How did you hear about us?</label>-->
              
              <select name="gender" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Gender'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Gender'];  ?></option>
                  <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       
               </select>  
                 </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountEmail">Email</label>
               <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Email</label>-->
              
              <input
                type="email"
                class="form-control"
                id="accountEmail"
                name="email"
                disabled
                placeholder="Email"
                value="<?php echo $email ; ?>"
              />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPhoneNumber">Phone Number</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Phone Number</label>-->
              <input
                type="text"
                class="form-control account-number-mask"
                id="accountPhoneNumber"
                name="phoneNumber"
                placeholder="Phone Number"
                value="<?php echo $phone ; ?>"
              />
            </div>
              <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="country">Your Country</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Country</label>-->
              <select id="country" name="country" class="select2 form-select">
                <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Country'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Country'];  ?></option>
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
<option value="Cote D'Ivoire">Cote d'Ivoire</option>
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
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountState">State</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* State</label>-->
              <input type="text" class="form-control" id="accountState" name="state" placeholder="State" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['State'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Address</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Address</label>-->
              <input type="text" class="form-control" id="accountAddress" name="personal_address" placeholder="Your Address" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Personal_Address'];  ?>" />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountZipCode">Zip Code</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Zip Code</label>-->
              <input
                type="text"
                class="form-control account-zip-code"
                id="accountZipCode"
                name="zipCode"
                placeholder="Zip Code"
                maxlength="6"
                value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['ZipCode'];  ?>"
              />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Facebook Profile</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Facebook Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="facebook" placeholder="Facebook Profile ID" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Facebook'];  ?>" />
            </div>
            
          <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Personal LinkedIn Profile</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Linkedin Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="personal_linkedIn" placeholder="LinkedIn Profile ID" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Personal_Linkedin'];  ?>" />
            </div>
          
            
              <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">How did you hear about us?</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* How did you hear about us?</label>-->
              
              <select id="country" name="Hear_Us" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Hear_Us'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Hear_Us'];  ?></option>
                  <option value="Tv/Radio">Tv/Radio</option>
                       <option value="GFA Website">GFA Website</option>
                       <option value="Tv/Radio">Google Search</option>
                       <option value="GFA Website">Online Ads</option>
                       <option value="Linkedin">Linkedin</option>
               </select>  
                 </div>
           
                
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Tell us a little about yourself? </label>
               
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="About yourself"
                  style="height: 100px"
				  name="about_me"
                ><?php echo $this->gfa_model->getStartUpDetails($email)[0]['About_Me'];  ?></textarea>
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
              <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn">Save Personal Profile</button>
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayAction"></span>
              
              <a class="btn btn-primary mt-1 me-1"  href="<?php echo base_url('gfa/startupprofile'); ?>">
          <i data-feather="lock" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Next: Startup Profile</span>
        </a>
              
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>
    
    <script>
      $(function(){
          
          $('input').keyup(function(){
              
           var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url('gfa/checkProfileErrorDemo'); ?>",
     error:function() {$(".showProfileError").html('Error');},
	 beforeSend:function() {$(".showProfileError").html('');},
      success: function(data) {
       //
		  
	   $(".showProfileError").html(data);  
	   
	  
	
       }
      
    });  
          });
          
          $('select').change(function(){
              
           var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url('gfa/checkProfileErrorDemo'); ?>",
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
     url: "<?php echo base_url('gfa/startupProfileproDemo'); ?>",
     error:function() {$(".displayAction").html('Error saving data');},
	 beforeSend:function() {$(".saveBtn").html('Saving Profile...');},
      success: function(data) {
       //
		  $(".displayAction").html("Successfully Saved!");  
	   $(".saveBtn").html('Saved');  
	   
	  
	
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

  
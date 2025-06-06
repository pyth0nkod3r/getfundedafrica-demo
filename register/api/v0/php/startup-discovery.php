<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $discovery_type = isset($_POST['discovery_type']) ? $_POST['discovery_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($discovery_type == 'gfa1a2'){
?>

<div class="col-md-12 col-12 gfa1ai2">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
            <?php echo $translations['startup']['form-1']['head']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1ai2-subscribe" name="gfa1ai2" onsubmit="gfa_subscribe('gfa1ai2'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-1']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1ai2-fname"
                                    placeholder="<?php echo $translations['startup']['form-1']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1ai2-lname"
                                    placeholder="<?php echo $translations['startup']['form-1']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1ai2-organisation-type" class="gfa1ai2-organisation-type" value="startup" />
                    <input type="hidden" name="gfa1ai2-interest" class="gfa1ai2-interest" value="Get Update" />
                    <input type="hidden" name="gfa1ai2-current-stage" class="gfa1ai2-current-stage"  value="Discovery"/>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-1']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1ai2-checkEmail"
                                    name="gfa1ai2-email" placeholder="<?php echo $translations['startup']['form-1']['email']; ?>" onkeydown="checkEmail('gfa1ai2', '2')" required />
                            </div>
                        </div>
                        <span class="gfa1ai2-showData"></span>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1ai2-subscribeBtn">
                        <?php echo $translations['startup']['form-1']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1b2'){
?>

<div class="col-md-12 col-12 gfa1bi2">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-1']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1bi2-funding" name="gfa2bi" onsubmit="gfa_funding('gfa1bi2'); return false;" action="#" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1bi2-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1bi2-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1bi2-organisation-type" class="gfa1bi2-organisation-type" value="startup"/>
                    <input type="hidden" name="gfa1bi2-interest" class="gfa1bi2-interest" value="Fund Raising" />
                    <input type="hidden" name="gfa1bi2-current-stage" class="gfa1ai2-current-stage" value="Discovery" />
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1bi2-checkEmail"
                                    name="gfa1bi2-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail_noId('gfa1bi2')" required />
                            </div>
                        </div>
                        <span class="gfa1bi2-showData"></span>
                    </div>

                    <!-- <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="password-icon">Password</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input type="password" id="password-icon" class="form-control" name="gfa1bi2-pass"
                                    placeholder="Password" required />

                                <input type="password" id="password-icon" class="form-control" name="gfa1bi2-password"
                                    placeholder="Confirm Password" required />
                            </div>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1bi2-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1bi2-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1bi2-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1bi2-model" class="form-select" id="basicSelect" required>
                                    <option value="B2B">B2B</option>
                                    <option value="B2B2C">B2B2C</option>
                                    <option value="B2C">B2C</option>
                                    <option value="B2C/B2B">B2C/B2B</option>
                                    <option value="D2C">D2C</option>
                                    <option value="D2C/B2B">D2C/B2B</option>
                                    <option value="D2C/B2C">D2C/B2C</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1bi2-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                    <option value="Digital Banks">Banques numériques</option>
<option value="Energy">Énergie</option>
<option value="Engineering/ESG">Ingénierie/ESG</option>
<option value="Financial Services">Services financiers</option>
<option value="FMCG/CPG">Biens de consommation courante/PGC</option>
<option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
<option value="Manufacturing">Fabrication</option>
<option value="Payment Platform">Plateforme de paiement</option>
<option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
<option value="Telecommunication">Télécommunication</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1bi2-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['core-solution']['blank']; ?></option>
                                   <option value="Increasing revenue">Augmentation des revenus</option>
<option value="Reducing company costs">Réduction des coûts de lentreprise</option>
<option value="Enhance operational excellence, capabilities or performance management">Amélioration de lexcellence opérationnelle, des capacités ou de la gestion des performances</option>
<option value="Accessing new markets/customers">Accès à de nouveaux marchés/clients</option>
<option value="Increasing sales in existing markets">Augmentation des ventes dans les marchés existants</option>
<option value="Improving your access to technology and other resources">Amélioration de votre accès à la technologie et à dautres ressources</option>
<option value="Improving your product offering for your customers">Amélioration de votre offre de produits pour vos clients</option>
<option value="Diversifying your product offerings">Diversification de vos offres de produits</option>
<option value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements">Transformation numérique pour les processus commerciaux, la culture et les expériences client dune entreprise afin de répondre aux exigences commerciales et du marché en évolution</option>
<option value="Aggregation of data and gaining new insights">Agrégation de données et acquisition de nouveaux insights</option>
<option value="Solutions to enable a smart workforce across multiple internal functions">Solutions pour permettre une main-dœuvre intelligente à travers plusieurs fonctions internes</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1bi2-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                    <option value="Built In-house">Développé en interne</option>
<option value="Investment Opportunity">Possibilité dinvestissement</option>
<option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
<option value="Acquisition">Acquisition</option>                     
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1bi2-country" class="form-select" id="basicSelect" required>
                                    <option>Select country</option>
                                    <option value="Afghanistan">
                                        Afghanistan
                                    </option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">
                                        American Samoa
                                    </option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">
                                        Antarctica
                                    </option>
                                    <option value="Antigua and Barbuda">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="Argentina">
                                        Argentina
                                    </option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">
                                        Australia
                                    </option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">
                                        Azerbaijan
                                    </option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">
                                        Bangladesh
                                    </option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">
                                        Bosnia and Herzegowina
                                    </option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">
                                        Bouvet Island
                                    </option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">
                                        Brunei Darussalam
                                    </option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">
                                        Burkina Faso
                                    </option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">
                                        Cape Verde
                                    </option>
                                    <option value="Cayman Islands">
                                        Cayman Islands
                                    </option>
                                    <option value="Central African Republic">
                                        Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">
                                        Christmas Island
                                    </option>
                                    <option value="Cocos Islands">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">
                                        Congo, the Democratic Republic of the
                                    </option>
                                    <option value="Cook Islands">
                                        Cook Islands
                                    </option>
                                    <option value="Costa Rica">
                                        Costa Rica
                                    </option>
                                    <option value="Cote D'Ivoire" selected>
                                        Cote d'Ivoire
                                    </option>
                                    <option value="Croatia">
                                        Croatia (Hrvatska)
                                    </option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">
                                        Czech Republic
                                    </option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">
                                        Dominican Republic
                                    </option>
                                    <option value="East Timor">
                                        East Timor
                                    </option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">
                                        El Salvador
                                    </option>
                                    <option value="Equatorial Guinea">
                                        Equatorial Guinea
                                    </option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="Faroe Islands">
                                        Faroe Islands
                                    </option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">
                                        France, Metropolitan
                                    </option>
                                    <option value="French Guiana">
                                        French Guiana
                                    </option>
                                    <option value="French Polynesia">
                                        French Polynesia
                                    </option>
                                    <option value="French Southern Territories">
                                        French Southern Territories
                                    </option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">
                                        Gibraltar
                                    </option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">
                                        Greenland
                                    </option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">
                                        Guadeloupe
                                    </option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">
                                        Guatemala
                                    </option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">
                                        Guinea-Bissau
                                    </option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">
                                        Heard and Mc Donald Islands
                                    </option>
                                    <option value="Holy See">
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">
                                        Hong Kong
                                    </option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">
                                        Indonesia
                                    </option>
                                    <option value="Iran">
                                        Iran (Islamic Republic of)
                                    </option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">
                                        Kazakhstan
                                    </option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="Korea">
                                        Korea, Republic of
                                    </option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">
                                        Kyrgyzstan
                                    </option>
                                    <option value="Lao">
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="Liechtenstein">
                                        Liechtenstein
                                    </option>
                                    <option value="Lithuania">
                                        Lithuania
                                    </option>
                                    <option value="Luxembourg">
                                        Luxembourg
                                    </option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">
                                        Macedonia, The Former Yugoslav Republic
                                        of
                                    </option>
                                    <option value="Madagascar">
                                        Madagascar
                                    </option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">
                                        Marshall Islands
                                    </option>
                                    <option value="Martinique">
                                        Martinique
                                    </option>
                                    <option value="Mauritania">
                                        Mauritania
                                    </option>
                                    <option value="Mauritius">
                                        Mauritius
                                    </option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova">
                                        Moldova, Republic of
                                    </option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">
                                        Montserrat
                                    </option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">
                                        Mozambique
                                    </option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">
                                        Netherlands
                                    </option>
                                    <option value="Netherlands Antilles">
                                        Netherlands Antilles
                                    </option>
                                    <option value="New Caledonia">
                                        New Caledonia
                                    </option>
                                    <option value="New Zealand">
                                        New Zealand
                                    </option>
                                    <option value="Nicaragua">
                                        Nicaragua
                                    </option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">
                                        Nigeria
                                    </option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">
                                        Norfolk Island
                                    </option>
                                    <option value="Northern Mariana Islands">
                                        Northern Mariana Islands
                                    </option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">
                                        Papua New Guinea
                                    </option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">
                                        Philippines
                                    </option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">
                                        Puerto Rico
                                    </option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">
                                        Russian Federation
                                    </option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="Saint LUCIA">
                                        Saint LUCIA
                                    </option>
                                    <option value="Saint Vincent">
                                        Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">
                                        San Marino
                                    </option>
                                    <option value="Sao Tome and Principe">
                                        Sao Tome and Principe
                                    </option>
                                    <option value="Saudi Arabia">
                                        Saudi Arabia
                                    </option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">
                                        Seychelles
                                    </option>
                                    <option value="Sierra">
                                        Sierra Leone
                                    </option>
                                    <option value="Singapore">
                                        Singapore
                                    </option>
                                    <option value="Slovakia">
                                        Slovakia (Slovak Republic)
                                    </option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">
                                        Solomon Islands
                                    </option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">
                                        South Africa
                                    </option>
                                    <option value="South Georgia">
                                        South Georgia and the South Sandwich
                                        Islands
                                    </option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">
                                        Sri Lanka
                                    </option>
                                    <option value="St. Helena">
                                        St. Helena
                                    </option>
                                    <option value="St. Pierre and Miguelon">
                                        St. Pierre and Miquelon
                                    </option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">
                                        Svalbard and Jan Mayen Islands
                                    </option>
                                    <option value="Swaziland">
                                        Swaziland
                                    </option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">
                                        Switzerland
                                    </option>
                                    <option value="Syria">
                                        Syrian Arab Republic
                                    </option>
                                    <option value="Taiwan">
                                        Taiwan, Province of China
                                    </option>
                                    <option value="Tajikistan">
                                        Tajikistan
                                    </option>
                                    <option value="Tanzania">
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">
                                        Turkmenistan
                                    </option>
                                    <option value="Turks and Caicos">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">
                                        United Arab Emirates
                                    </option>
                                    <option value="United Kingdom">
                                        United Kingdom
                                    </option>
                                    <option value="United States">
                                        United States
                                    </option>
                                    <option value="United States Minor Outlying Islands">
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">
                                        Uzbekistan
                                    </option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">
                                        Venezuela
                                    </option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">
                                        Virgin Islands (British)
                                    </option>
                                    <option value="Virgin Islands (U.S)">
                                        Virgin Islands (U.S.)
                                    </option>
                                    <option value="Wallis and Futana Islands">
                                        Wallis and Futuna Islands
                                    </option>
                                    <option value="Western Sahara">
                                        Western Sahara
                                    </option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1bi2-city"
                                    placeholder="<?php echo $translations['startup']['form-2']['city']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro du registre de commerce (*)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1bi2-trade" pattern=".{10,30}" minlength="10" maxlength="30"
    title="Le numéro de registre de commerce doit comprendre un minimum de 10 caractères et un maximum de 30 caractères" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie du registre de commerce(*) </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1bi2-file[]" required multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro de Compte Contribuable(*)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1bi2-tax" required pattern=".{10,30}" minlength="10" maxlength="30"
    title="e numéro fiscal doit comprendre un minimum de 10 caractères et un maximum de 30 caractères." />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie de la Déclaration Fiscale D'Existence(*) </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1bi2-file[]" required multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro CNPS</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1bi2-cnps" pattern="\d{12}" title="Le numéro CNPS doit être composé de 12 chiffres." />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie de la Déclaration CNPS </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1bi2-file[]"  multiple />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
    

                            <div class="mb-1">
                                <!-- Checkbox for privacy policy -->
                                <div class="input-group input-group-merge">
                                    <input 
                                        class="form-check" 
                                        type="checkbox" 
                                        id="accept_privacy" 
                                        name="accept_privacy" 
                                        required 
                                    />
                                    <label class="form-label" for="accept_privacy">
                                         Je suis d'accord avec la  <a href="https://nora.cipme.ci/privacy-policy.html" target="_blank">Politique de confidentialité</a>.
                                    </label>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success gfa1bi2-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1c2'){
?>

<div class="col-md-12 col-12 gfa1ci2">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-2']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1ci2-venture" name="gfa2ci" onsubmit="gfa_venture_pro('gfa1ci2'); return false;" action="#" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1ci2-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1ci2-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1ci2-checkEmail"
                                    name="gfa1ci2-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail_noId('gfa1ci2')" required />
                            </div>
                        </div>
                        <span class="gfa1ci2-showData"></span>
                    </div>

                    <div class="col-12">
                        <!-- <div class="mb-1">
                            <label class="form-label" for="password-icon">Password</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input type="password" id="password-icon" class="form-control" name="gfa1ci2-pass"
                                    placeholder="Password" required />

                                <input type="password" id="password-icon" class="form-control" name="gfa1ci2-password"
                                    placeholder="Confirm Password" required />
                            </div>
                        </div> -->

                        <input type="hidden" name="gfa1ci2-organisation-type" class="gfa1ci2-organisation-type" value="startup" />
                        <input type="hidden" name="gfa1ci2-interest" class="gfa1ci2-interest" value="Business Growth" />
                        <input type="hidden" name="gfa1ci2-current-stage" class="gfa1ai2-current-stage" value="Discovery" />
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ei-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci2-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1ci2-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ci2-model" class="form-select" id="basicSelect" required>
                                    <option value="B2B">B2B</option>
                                    <option value="B2B2C">B2B2C</option>
                                    <option value="B2C">B2C</option>
                                    <option value="B2C/B2B">B2C/B2B</option>
                                    <option value="D2C">D2C</option>
                                    <option value="D2C/B2B">D2C/B2B</option>
                                    <option value="D2C/B2C">D2C/B2C</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ci2-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                                                       <option value="Digital Banks">Banques numériques</option>
<option value="Energy">Énergie</option>
<option value="Engineering/ESG">Ingénierie/ESG</option>
<option value="Financial Services">Services financiers</option>
<option value="FMCG/CPG">Biens de consommation courante/PGC</option>
<option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
<option value="Manufacturing">Fabrication</option>
<option value="Payment Platform">Plateforme de paiement</option>
<option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
<option value="Telecommunication">Télécommunication</option>
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ci2-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['core-solution']['blank']; ?></option>
                                    <option value="Increasing revenue">Augmentation des revenus</option>
<option value="Reducing company costs">Réduction des coûts de lentreprise</option>
<option value="Enhance operational excellence, capabilities or performance management">Amélioration de lexcellence opérationnelle, des capacités ou de la gestion des performances</option>
<option value="Accessing new markets/customers">Accès à de nouveaux marchés/clients</option>
<option value="Increasing sales in existing markets">Augmentation des ventes dans les marchés existants</option>
<option value="Improving your access to technology and other resources">Amélioration de votre accès à la technologie et à dautres ressources</option>
<option value="Improving your product offering for your customers">Amélioration de votre offre de produits pour vos clients</option>
<option value="Diversifying your product offerings">Diversification de vos offres de produits</option>
<option value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements">Transformation numérique pour les processus commerciaux, la culture et les expériences client dune entreprise afin de répondre aux exigences commerciales et du marché en évolution</option>
<option value="Aggregation of data and gaining new insights">Agrégation de données et acquisition de nouveaux insights</option>
<option value="Solutions to enable a smart workforce across multiple internal functions">Solutions pour permettre une main-dœuvre intelligente à travers plusieurs fonctions internes</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ci2-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                   <option value="Built In-house">Développé en interne</option>
<option value="Investment Opportunity">Possibilité dinvestissement</option>
<option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
<option value="Acquisition">Acquisition</option>                              
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ci2-country" class="form-select" id="basicSelect" required>
                                    <option>Select country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">
                                        Bonaire, Sint Eustatius and Saba
                                    </option>
                                    <option value="BA">
                                        Bosnia and Herzegovina
                                    </option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="BN">
                                        Brunei Darussalam
                                    </option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">
                                        Central African Republic
                                    </option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">
                                        Christmas Island
                                    </option>
                                    <option value="CC">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">
                                        Congo, Democratic Republic of the Congo
                                    </option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="Cote D'Ivoire" selected>Cote DIvoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">
                                        Dominican Republic
                                    </option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">
                                        Equatorial Guinea
                                    </option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">
                                        French Polynesia
                                    </option>
                                    <option value="TF">
                                        French Southern Territories
                                    </option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">
                                        Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="VA">
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">
                                        Iran, Islamic Republic of
                                    </option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="KR">
                                        Korea, Republic of
                                    </option>
                                    <option value="XK">Kosovo</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">
                                        Macedonia, the Former Yugoslav Republic
                                        of
                                    </option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">
                                        Marshall Islands
                                    </option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="MD">
                                        Moldova, Republic of
                                    </option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">
                                        Netherlands Antilles
                                    </option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">
                                        Northern Mariana Islands
                                    </option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">
                                        Palestinian Territory, Occupied
                                    </option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">
                                        Papua New Guinea
                                    </option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">
                                        Russian Federation
                                    </option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">
                                        Saint Barthelemy
                                    </option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">
                                        Saint Pierre and Miquelon
                                    </option>
                                    <option value="VC">
                                        Saint Vincent and the Grenadines
                                    </option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">
                                        Sao Tome and Principe
                                    </option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="CS">
                                        Serbia and Montenegro
                                    </option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">
                                        Solomon Islands
                                    </option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">
                                        South Georgia and the South Sandwich
                                        Islands
                                    </option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">
                                        Svalbard and Jan Mayen
                                    </option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">
                                        Syrian Arab Republic
                                    </option>
                                    <option value="TW">
                                        Taiwan, Province of China
                                    </option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">
                                        United Arab Emirates
                                    </option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">
                                        Virgin Islands, British
                                    </option>
                                    <option value="VI">
                                        Virgin Islands, U.s.
                                    </option>
                                    <option value="WF">
                                        Wallis and Futuna
                                    </option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci2-city"
                                    placeholder="<?php echo $translations['startup']['form-2']['city']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro du registre de commerce (*)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci2-trade" required pattern=".{10,30}" minlength="10" maxlength="30"
    title="Le numéro de registre de commerce doit comprendre un minimum de 10 caractères et un maximum de 30 caractères" />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie du registre de commerce(*) </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ci2-file[]" required multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro de Compte Contribuable(*)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci2-tax" required pattern=".{10,30}" minlength="10" maxlength="30"
    title="e numéro fiscal doit comprendre un minimum de 10 caractères et un maximum de 30 caractères." />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie de la Déclaration Fiscale D'Existence(*) </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ci2-file[]" required multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro CNPS</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci2-cnps" pattern="\d{12}" title="Le numéro CNPS doit être composé de 12 chiffres." />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie de la Déclaration CNPS </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ci2-file[]"  multiple />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
    

                            <div class="mb-1">
                                <!-- Checkbox for privacy policy -->
                                <div class="input-group input-group-merge">
                                    <input 
                                        class="form-check" 
                                        type="checkbox" 
                                        id="accept_privacy" 
                                        name="accept_privacy" 
                                        required 
                                    />
                                    <label class="form-label" for="accept_privacy">
                                         Je suis d'accord avec la  <a href="https://nora.cipme.ci/privacy-policy.html" target="_blank">Politique de confidentialité</a>.
                                    </label>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success gfa1ci2-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1d2'){
?>

<div class="col-md-12 col-12 gfa1di2">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-3']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1di2-report" name="gfa2di" onsubmit="gfa_report('gfa1di2'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1di2-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1di2-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1di2-organisation-type" class="gfa1di2-organisation-type" value="startup" />
                    <input type="hidden" name="gfa1di2-interest" class="gfa1di2-interest" value="Insight Report" />
                    <input type="hidden" name="gfa1di2-current-stage" class="gfa1di2-current-stage" value="Discovery" />
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1di2-checkEmail"
                                    name="gfa1di2-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail_noId('gfa1di2')" required />
                            </div>
                        </div>
                        <span class="gfa1di2-showData"></span>
                    </div>

                    <!--        <div class="col-12">-->
                    <!--          <div class="mb-1">-->
                    <!--            <label class="form-label" for="password-icon">Password</label>-->
                    <!--            <div class="input-group input-group-merge">-->
                    <!--              <span class="input-group-text"><i data-feather="lock"></i></span>-->
                    <!--              <input-->
                    <!--                type="password"-->
                    <!--                id="password-icon"-->
                    <!--                class="form-control"-->
                    <!--                name="gfa1di2-pass"-->
                    <!--                placeholder="Password"-->
                    <!--              />-->

                    <!--              <input-->
                    <!--                type="password"-->
                    <!--                id="password-icon"-->
                    <!--                class="form-control"-->
                    <!--                name="gfa1di2-password"-->
                    <!--                placeholder="Confirm Password"-->
                    <!--              />-->
                    <!--            </div>-->
                    <!--          </div>-->

                    <!--<input type="hidden" name="gfa1di2-organisation-type" class="gfa1di2-organisation-type" />-->
                    <!--        	<input type="hidden" name="gfa1di2-interest" class="gfa1di2-interest" />-->
                    <!--        	<input type="hidden" name="gfa1di2-current-stage" class="gfa1ai2-current-stage" />-->

                    <!--        </div>-->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ei-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1di2-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1di2-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1di2-model" class="form-select" id="basicSelect" >
                                    <option value="B2B">B2B</option>
                                    <option value="B2B2C">B2B2C</option>
                                    <option value="B2C">B2C</option>
                                    <option value="B2C/B2B">B2C/B2B</option>
                                    <option value="D2C">D2C</option>
                                    <option value="D2C/B2B">D2C/B2B</option>
                                    <option value="D2C/B2C">D2C/B2C</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1di2-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                    <option value="Digital Banks">Banques numériques</option>
<option value="Energy">Énergie</option>
<option value="Engineering/ESG">Ingénierie/ESG</option>
<option value="Financial Services">Services financiers</option>
<option value="FMCG/CPG">Biens de consommation courante/PGC</option>
<option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
<option value="Manufacturing">Fabrication</option>
<option value="Payment Platform">Plateforme de paiement</option>
<option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
<option value="Telecommunication">Télécommunication</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1di2-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                                                        <option value="Increasing revenue">Augmentation des revenus</option>
<option value="Reducing company costs">Réduction des coûts de lentreprise</option>
<option value="Enhance operational excellence, capabilities or performance management">Amélioration de lexcellence opérationnelle, des capacités ou de la gestion des performances</option>
<option value="Accessing new markets/customers">Accès à de nouveaux marchés/clients</option>
<option value="Increasing sales in existing markets">Augmentation des ventes dans les marchés existants</option>
<option value="Improving your access to technology and other resources">Amélioration de votre accès à la technologie et à dautres ressources</option>
<option value="Improving your product offering for your customers">Amélioration de votre offre de produits pour vos clients</option>
<option value="Diversifying your product offerings">Diversification de vos offres de produits</option>
<option value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements">Transformation numérique pour les processus commerciaux, la culture et les expériences client dune entreprise afin de répondre aux exigences commerciales et du marché en évolution</option>
<option value="Aggregation of data and gaining new insights">Agrégation de données et acquisition de nouveaux insights</option>
<option value="Solutions to enable a smart workforce across multiple internal functions">Solutions pour permettre une main-dœuvre intelligente à travers plusieurs fonctions internes</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1di2-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                    <option value="Built In-house">Développé en interne</option>
<option value="Investment Opportunity">Possibilité dinvestissement</option>
<option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
<option value="Acquisition">Acquisition</option>                          
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1di2-country" class="form-select" id="basicSelect" required>
                                    <option>Select country</option>
                                    <option value="Afghanistan">
                                        Afghanistan
                                    </option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">
                                        American Samoa
                                    </option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">
                                        Antarctica
                                    </option>
                                    <option value="Antigua and Barbuda">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="Argentina">
                                        Argentina
                                    </option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">
                                        Australia
                                    </option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">
                                        Azerbaijan
                                    </option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">
                                        Bangladesh
                                    </option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">
                                        Bosnia and Herzegowina
                                    </option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">
                                        Bouvet Island
                                    </option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">
                                        Brunei Darussalam
                                    </option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">
                                        Burkina Faso
                                    </option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">
                                        Cape Verde
                                    </option>
                                    <option value="Cayman Islands">
                                        Cayman Islands
                                    </option>
                                    <option value="Central African Republic">
                                        Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">
                                        Christmas Island
                                    </option>
                                    <option value="Cocos Islands">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">
                                        Congo, the Democratic Republic of the
                                    </option>
                                    <option value="Cook Islands">
                                        Cook Islands
                                    </option>
                                    <option value="Costa Rica">
                                        Costa Rica
                                    </option>
                                    <option value="Cote D'Ivoire" selected>
                                        Cote d'Ivoire
                                    </option>
                                    <option value="Croatia">
                                        Croatia (Hrvatska)
                                    </option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">
                                        Czech Republic
                                    </option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">
                                        Dominican Republic
                                    </option>
                                    <option value="East Timor">
                                        East Timor
                                    </option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">
                                        El Salvador
                                    </option>
                                    <option value="Equatorial Guinea">
                                        Equatorial Guinea
                                    </option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="Faroe Islands">
                                        Faroe Islands
                                    </option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">
                                        France, Metropolitan
                                    </option>
                                    <option value="French Guiana">
                                        French Guiana
                                    </option>
                                    <option value="French Polynesia">
                                        French Polynesia
                                    </option>
                                    <option value="French Southern Territories">
                                        French Southern Territories
                                    </option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">
                                        Gibraltar
                                    </option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">
                                        Greenland
                                    </option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">
                                        Guadeloupe
                                    </option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">
                                        Guatemala
                                    </option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">
                                        Guinea-Bissau
                                    </option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">
                                        Heard and Mc Donald Islands
                                    </option>
                                    <option value="Holy See">
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">
                                        Hong Kong
                                    </option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">
                                        Indonesia
                                    </option>
                                    <option value="Iran">
                                        Iran (Islamic Republic of)
                                    </option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">
                                        Kazakhstan
                                    </option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="Korea">
                                        Korea, Republic of
                                    </option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">
                                        Kyrgyzstan
                                    </option>
                                    <option value="Lao">
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="Liechtenstein">
                                        Liechtenstein
                                    </option>
                                    <option value="Lithuania">
                                        Lithuania
                                    </option>
                                    <option value="Luxembourg">
                                        Luxembourg
                                    </option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">
                                        Macedonia, The Former Yugoslav Republic
                                        of
                                    </option>
                                    <option value="Madagascar">
                                        Madagascar
                                    </option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">
                                        Marshall Islands
                                    </option>
                                    <option value="Martinique">
                                        Martinique
                                    </option>
                                    <option value="Mauritania">
                                        Mauritania
                                    </option>
                                    <option value="Mauritius">
                                        Mauritius
                                    </option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova">
                                        Moldova, Republic of
                                    </option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">
                                        Montserrat
                                    </option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">
                                        Mozambique
                                    </option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">
                                        Netherlands
                                    </option>
                                    <option value="Netherlands Antilles">
                                        Netherlands Antilles
                                    </option>
                                    <option value="New Caledonia">
                                        New Caledonia
                                    </option>
                                    <option value="New Zealand">
                                        New Zealand
                                    </option>
                                    <option value="Nicaragua">
                                        Nicaragua
                                    </option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">
                                        Nigeria
                                    </option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">
                                        Norfolk Island
                                    </option>
                                    <option value="Northern Mariana Islands">
                                        Northern Mariana Islands
                                    </option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">
                                        Papua New Guinea
                                    </option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">
                                        Philippines
                                    </option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">
                                        Puerto Rico
                                    </option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">
                                        Russian Federation
                                    </option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="Saint LUCIA">
                                        Saint LUCIA
                                    </option>
                                    <option value="Saint Vincent">
                                        Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">
                                        San Marino
                                    </option>
                                    <option value="Sao Tome and Principe">
                                        Sao Tome and Principe
                                    </option>
                                    <option value="Saudi Arabia">
                                        Saudi Arabia
                                    </option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">
                                        Seychelles
                                    </option>
                                    <option value="Sierra">
                                        Sierra Leone
                                    </option>
                                    <option value="Singapore">
                                        Singapore
                                    </option>
                                    <option value="Slovakia">
                                        Slovakia (Slovak Republic)
                                    </option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">
                                        Solomon Islands
                                    </option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">
                                        South Africa
                                    </option>
                                    <option value="South Georgia">
                                        South Georgia and the South Sandwich
                                        Islands
                                    </option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">
                                        Sri Lanka
                                    </option>
                                    <option value="St. Helena">
                                        St. Helena
                                    </option>
                                    <option value="St. Pierre and Miguelon">
                                        St. Pierre and Miquelon
                                    </option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">
                                        Svalbard and Jan Mayen Islands
                                    </option>
                                    <option value="Swaziland">
                                        Swaziland
                                    </option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">
                                        Switzerland
                                    </option>
                                    <option value="Syria">
                                        Syrian Arab Republic
                                    </option>
                                    <option value="Taiwan">
                                        Taiwan, Province of China
                                    </option>
                                    <option value="Tajikistan">
                                        Tajikistan
                                    </option>
                                    <option value="Tanzania">
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">
                                        Turkmenistan
                                    </option>
                                    <option value="Turks and Caicos">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">
                                        United Arab Emirates
                                    </option>
                                    <option value="United Kingdom">
                                        United Kingdom
                                    </option>
                                    <option value="United States">
                                        United States
                                    </option>
                                    <option value="United States Minor Outlying Islands">
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">
                                        Uzbekistan
                                    </option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">
                                        Venezuela
                                    </option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">
                                        Virgin Islands (British)
                                    </option>
                                    <option value="Virgin Islands (U.S)">
                                        Virgin Islands (U.S.)
                                    </option>
                                    <option value="Wallis and Futana Islands">
                                        Wallis and Futuna Islands
                                    </option>
                                    <option value="Western Sahara">
                                        Western Sahara
                                    </option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1di2-city"
                                    placeholder="<?php echo $translations['startup']['form-2']['city']; ?>" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1di2-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1e2'){
?>

<div class="col-md-12 col-12 gfa1ei2">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-4']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1ei2-learning" name="gfa2ei" onsubmit="gfa_learning('gfa1ei2'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1ei2-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1ei2-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1ei2-checkEmail"
                                    name="gfa1ei2-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail_noId('gfa1ei2')" required />
                            </div>
                        </div>
                        <span class="gfa1ei2-showData"></span>
                    </div>
                    <input type="hidden" name="gfa1ei2-organisation-type" class="gfa1ei2-organisation-type" value="startup" />
                    <input type="hidden" name="gfa1ei2-interest" class="gfa1ei2-interest" value="Learning" />
                    <input type="hidden" name="gfa1ei2-current-stage" class="gfa1ai2-current-stage" value="Discovery" />
                    <!-- <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="password-icon">Password</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="lock"></i></span>
                                <input type="password" id="password-icon" class="form-control" name="gfa1ei2-pass"
                                    placeholder="Password" required />

                                <input type="password" id="password-icon" class="form-control" name="gfa1ei2-password"
                                    placeholder="Confirm Password" required />
                            </div>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ei2-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ei2-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1ei2-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ei2-model" class="form-select" id="basicSelect" required>
                                    <option value="B2B">B2B</option>
                                    <option value="B2B2C">B2B2C</option>
                                    <option value="B2C">B2C</option>
                                    <option value="B2C/B2B">B2C/B2B</option>
                                    <option value="D2C">D2C</option>
                                    <option value="D2C/B2B">D2C/B2B</option>
                                    <option value="D2C/B2C">D2C/B2C</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ei2-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                    <option value="Digital Banks">Banques numériques</option>
<option value="Energy">Énergie</option>
<option value="Engineering/ESG">Ingénierie/ESG</option>
<option value="Financial Services">Services financiers</option>
<option value="FMCG/CPG">Biens de consommation courante/PGC</option>
<option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
<option value="Manufacturing">Fabrication</option>
<option value="Payment Platform">Plateforme de paiement</option>
<option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
<option value="Telecommunication">Télécommunication</option>
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Core solutions to corporate</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ei2-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                     <option value="Increasing revenue">Augmentation des revenus</option>
<option value="Reducing company costs">Réduction des coûts de lentreprise</option>
<option value="Enhance operational excellence, capabilities or performance management">Amélioration de lexcellence opérationnelle, des capacités ou de la gestion des performances</option>
<option value="Accessing new markets/customers">Accès à de nouveaux marchés/clients</option>
<option value="Increasing sales in existing markets">Augmentation des ventes dans les marchés existants</option>
<option value="Improving your access to technology and other resources">Amélioration de votre accès à la technologie et à dautres ressources</option>
<option value="Improving your product offering for your customers">Amélioration de votre offre de produits pour vos clients</option>
<option value="Diversifying your product offerings">Diversification de vos offres de produits</option>
<option value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements">Transformation numérique pour les processus commerciaux, la culture et les expériences client dune entreprise afin de répondre aux exigences commerciales et du marché en évolution</option>
<option value="Aggregation of data and gaining new insights">Agrégation de données et acquisition de nouveaux insights</option>
<option value="Solutions to enable a smart workforce across multiple internal functions">Solutions pour permettre une main-dœuvre intelligente à travers plusieurs fonctions internes</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ei2-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                    <option value="Built In-house">Développé en interne</option>
<option value="Investment Opportunity">Possibilité dinvestissement</option>
<option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
<option value="Acquisition">Acquisition</option>                       
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ei2-country" class="form-select" id="basicSelect" required>
                                    <option>Select country</option>
                                    <option value="Afghanistan">
                                        Afghanistan
                                    </option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">
                                        American Samoa
                                    </option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">
                                        Antarctica
                                    </option>
                                    <option value="Antigua and Barbuda">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="Argentina">
                                        Argentina
                                    </option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">
                                        Australia
                                    </option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">
                                        Azerbaijan
                                    </option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">
                                        Bangladesh
                                    </option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">
                                        Bosnia and Herzegowina
                                    </option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">
                                        Bouvet Island
                                    </option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">
                                        Brunei Darussalam
                                    </option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">
                                        Burkina Faso
                                    </option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">
                                        Cape Verde
                                    </option>
                                    <option value="Cayman Islands">
                                        Cayman Islands
                                    </option>
                                    <option value="Central African Republic">
                                        Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">
                                        Christmas Island
                                    </option>
                                    <option value="Cocos Islands">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">
                                        Congo, the Democratic Republic of the
                                    </option>
                                    <option value="Cook Islands">
                                        Cook Islands
                                    </option>
                                    <option value="Costa Rica">
                                        Costa Rica
                                    </option>
                                    <option value="Cote D'Ivoire" selected>
                                        Cote d'Ivoire
                                    </option>
                                    <option value="Croatia">
                                        Croatia (Hrvatska)
                                    </option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">
                                        Czech Republic
                                    </option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">
                                        Dominican Republic
                                    </option>
                                    <option value="East Timor">
                                        East Timor
                                    </option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">
                                        El Salvador
                                    </option>
                                    <option value="Equatorial Guinea">
                                        Equatorial Guinea
                                    </option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="Faroe Islands">
                                        Faroe Islands
                                    </option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">
                                        France, Metropolitan
                                    </option>
                                    <option value="French Guiana">
                                        French Guiana
                                    </option>
                                    <option value="French Polynesia">
                                        French Polynesia
                                    </option>
                                    <option value="French Southern Territories">
                                        French Southern Territories
                                    </option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">
                                        Gibraltar
                                    </option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">
                                        Greenland
                                    </option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">
                                        Guadeloupe
                                    </option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">
                                        Guatemala
                                    </option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">
                                        Guinea-Bissau
                                    </option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">
                                        Heard and Mc Donald Islands
                                    </option>
                                    <option value="Holy See">
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">
                                        Hong Kong
                                    </option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">
                                        Indonesia
                                    </option>
                                    <option value="Iran">
                                        Iran (Islamic Republic of)
                                    </option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">
                                        Kazakhstan
                                    </option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="Korea">
                                        Korea, Republic of
                                    </option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">
                                        Kyrgyzstan
                                    </option>
                                    <option value="Lao">
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="Liechtenstein">
                                        Liechtenstein
                                    </option>
                                    <option value="Lithuania">
                                        Lithuania
                                    </option>
                                    <option value="Luxembourg">
                                        Luxembourg
                                    </option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">
                                        Macedonia, The Former Yugoslav Republic
                                        of
                                    </option>
                                    <option value="Madagascar">
                                        Madagascar
                                    </option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">
                                        Marshall Islands
                                    </option>
                                    <option value="Martinique">
                                        Martinique
                                    </option>
                                    <option value="Mauritania">
                                        Mauritania
                                    </option>
                                    <option value="Mauritius">
                                        Mauritius
                                    </option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova">
                                        Moldova, Republic of
                                    </option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">
                                        Montserrat
                                    </option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">
                                        Mozambique
                                    </option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">
                                        Netherlands
                                    </option>
                                    <option value="Netherlands Antilles">
                                        Netherlands Antilles
                                    </option>
                                    <option value="New Caledonia">
                                        New Caledonia
                                    </option>
                                    <option value="New Zealand">
                                        New Zealand
                                    </option>
                                    <option value="Nicaragua">
                                        Nicaragua
                                    </option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">
                                        Nigeria
                                    </option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">
                                        Norfolk Island
                                    </option>
                                    <option value="Northern Mariana Islands">
                                        Northern Mariana Islands
                                    </option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">
                                        Papua New Guinea
                                    </option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">
                                        Philippines
                                    </option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">
                                        Puerto Rico
                                    </option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">
                                        Russian Federation
                                    </option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="Saint LUCIA">
                                        Saint LUCIA
                                    </option>
                                    <option value="Saint Vincent">
                                        Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">
                                        San Marino
                                    </option>
                                    <option value="Sao Tome and Principe">
                                        Sao Tome and Principe
                                    </option>
                                    <option value="Saudi Arabia">
                                        Saudi Arabia
                                    </option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">
                                        Seychelles
                                    </option>
                                    <option value="Sierra">
                                        Sierra Leone
                                    </option>
                                    <option value="Singapore">
                                        Singapore
                                    </option>
                                    <option value="Slovakia">
                                        Slovakia (Slovak Republic)
                                    </option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">
                                        Solomon Islands
                                    </option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">
                                        South Africa
                                    </option>
                                    <option value="South Georgia">
                                        South Georgia and the South Sandwich
                                        Islands
                                    </option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">
                                        Sri Lanka
                                    </option>
                                    <option value="St. Helena">
                                        St. Helena
                                    </option>
                                    <option value="St. Pierre and Miguelon">
                                        St. Pierre and Miquelon
                                    </option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">
                                        Svalbard and Jan Mayen Islands
                                    </option>
                                    <option value="Swaziland">
                                        Swaziland
                                    </option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">
                                        Switzerland
                                    </option>
                                    <option value="Syria">
                                        Syrian Arab Republic
                                    </option>
                                    <option value="Taiwan">
                                        Taiwan, Province of China
                                    </option>
                                    <option value="Tajikistan">
                                        Tajikistan
                                    </option>
                                    <option value="Tanzania">
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">
                                        Turkmenistan
                                    </option>
                                    <option value="Turks and Caicos">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">
                                        United Arab Emirates
                                    </option>
                                    <option value="United Kingdom">
                                        United Kingdom
                                    </option>
                                    <option value="United States">
                                        United States
                                    </option>
                                    <option value="United States Minor Outlying Islands">
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">
                                        Uzbekistan
                                    </option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">
                                        Venezuela
                                    </option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">
                                        Virgin Islands (British)
                                    </option>
                                    <option value="Virgin Islands (U.S)">
                                        Virgin Islands (U.S.)
                                    </option>
                                    <option value="Wallis and Futana Islands">
                                        Wallis and Futuna Islands
                                    </option>
                                    <option value="Western Sahara">
                                        Western Sahara
                                    </option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ei2-city"
                                    placeholder="<?php echo $translations['startup']['form-2']['city']; ?>" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1ei2-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1f2'){
?>

<div class="col-md-12 col-12 gfa1fi2">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-5']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1fi2-streaming" name="gfa2fi" onsubmit="gfa_streaming('gfa1fi2'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1fi2-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1fi2-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1fi2-checkEmail"
                                    name="gfa1fi2-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail_noId('gfa1fi2')" required />
                            </div>
                        </div>
                        <span class="gfa1fi2-showData"></span>
                    </div>
                    <input type="hidden" name="gfa1fi2-organisation-type" class="gfa1fi2-organisation-type" value="startup" />
                    <input type="hidden" name="gfa1fi2-interest" class="gfa1fi2-interest" value="GFMax" />
                    <input type="hidden" name="gfa1fi2-current-stage" class="gfa1ai2-current-stage" value="Discovery" />
                    <!--<div class="col-12">-->
                    <!--  <div class="mb-1">-->
                    <!--    <label class="form-label" for="password-icon">Password</label>-->
                    <!--    <div class="input-group input-group-merge">-->
                    <!--      <span class="input-group-text"><i data-feather="lock"></i></span>-->
                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="gfa1fi2-pass"-->
                    <!--        placeholder="Password"-->
                    <!--      />-->

                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="gfa1fi2-password"-->
                    <!--        placeholder="Confirm Password"-->
                    <!--      />-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--</div>-->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1fi2-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1fi2-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1fi2-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1fi2-model" class="form-select" id="basicSelect" required>
                                    <option value="B2B">B2B</option>
                                    <option value="B2B2C">B2B2C</option>
                                    <option value="B2C">B2C</option>
                                    <option value="B2C/B2B">B2C/B2B</option>
                                    <option value="D2C">D2C</option>
                                    <option value="D2C/B2B">D2C/B2B</option>
                                    <option value="D2C/B2C">D2C/B2C</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1fi2-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                    <option value="Digital Banks">Banques numériques</option>
<option value="Energy">Énergie</option>
<option value="Engineering/ESG">Ingénierie/ESG</option>
<option value="Financial Services">Services financiers</option>
<option value="FMCG/CPG">Biens de consommation courante/PGC</option>
<option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
<option value="Manufacturing">Fabrication</option>
<option value="Payment Platform">Plateforme de paiement</option>
<option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
<option value="Telecommunication">Télécommunication</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1fi2-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                    <option value="Increasing revenue">Augmentation des revenus</option>
<option value="Reducing company costs">Réduction des coûts de lentreprise</option>
<option value="Enhance operational excellence, capabilities or performance management">Amélioration de lexcellence opérationnelle, des capacités ou de la gestion des performances</option>
<option value="Accessing new markets/customers">Accès à de nouveaux marchés/clients</option>
<option value="Increasing sales in existing markets">Augmentation des ventes dans les marchés existants</option>
<option value="Improving your access to technology and other resources">Amélioration de votre accès à la technologie et à dautres ressources</option>
<option value="Improving your product offering for your customers">Amélioration de votre offre de produits pour vos clients</option>
<option value="Diversifying your product offerings">Diversification de vos offres de produits</option>
<option value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements">Transformation numérique pour les processus commerciaux, la culture et les expériences client dune entreprise afin de répondre aux exigences commerciales et du marché en évolution</option>
<option value="Aggregation of data and gaining new insights">Agrégation de données et acquisition de nouveaux insights</option>
<option value="Solutions to enable a smart workforce across multiple internal functions">Solutions pour permettre une main-dœuvre intelligente à travers plusieurs fonctions internes</option>

                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1fi2-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                     <option value="Built In-house">Développé en interne</option>
<option value="Investment Opportunity">Possibilité dinvestissement</option>
<option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
<option value="Acquisition">Acquisition</option>                         
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1fi2-country" class="form-select" id="basicSelect" required>
                                    <option>Select country</option>
                                    <option value="Afghanistan">
                                        Afghanistan
                                    </option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">
                                        American Samoa
                                    </option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">
                                        Antarctica
                                    </option>
                                    <option value="Antigua and Barbuda">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="Argentina">
                                        Argentina
                                    </option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">
                                        Australia
                                    </option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">
                                        Azerbaijan
                                    </option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">
                                        Bangladesh
                                    </option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">
                                        Bosnia and Herzegowina
                                    </option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">
                                        Bouvet Island
                                    </option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">
                                        Brunei Darussalam
                                    </option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">
                                        Burkina Faso
                                    </option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">
                                        Cape Verde
                                    </option>
                                    <option value="Cayman Islands">
                                        Cayman Islands
                                    </option>
                                    <option value="Central African Republic">
                                        Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">
                                        Christmas Island
                                    </option>
                                    <option value="Cocos Islands">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">
                                        Congo, the Democratic Republic of the
                                    </option>
                                    <option value="Cook Islands">
                                        Cook Islands
                                    </option>
                                    <option value="Costa Rica">
                                        Costa Rica
                                    </option>
                                    <option value="Cote D'Ivoire" selected>
                                        Cote d'Ivoire
                                    </option>
                                    <option value="Croatia">
                                        Croatia (Hrvatska)
                                    </option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">
                                        Czech Republic
                                    </option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">
                                        Dominican Republic
                                    </option>
                                    <option value="East Timor">
                                        East Timor
                                    </option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">
                                        El Salvador
                                    </option>
                                    <option value="Equatorial Guinea">
                                        Equatorial Guinea
                                    </option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="Faroe Islands">
                                        Faroe Islands
                                    </option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">
                                        France, Metropolitan
                                    </option>
                                    <option value="French Guiana">
                                        French Guiana
                                    </option>
                                    <option value="French Polynesia">
                                        French Polynesia
                                    </option>
                                    <option value="French Southern Territories">
                                        French Southern Territories
                                    </option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">
                                        Gibraltar
                                    </option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">
                                        Greenland
                                    </option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">
                                        Guadeloupe
                                    </option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">
                                        Guatemala
                                    </option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">
                                        Guinea-Bissau
                                    </option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">
                                        Heard and Mc Donald Islands
                                    </option>
                                    <option value="Holy See">
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">
                                        Hong Kong
                                    </option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">
                                        Indonesia
                                    </option>
                                    <option value="Iran">
                                        Iran (Islamic Republic of)
                                    </option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">
                                        Kazakhstan
                                    </option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="Korea">
                                        Korea, Republic of
                                    </option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">
                                        Kyrgyzstan
                                    </option>
                                    <option value="Lao">
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="Liechtenstein">
                                        Liechtenstein
                                    </option>
                                    <option value="Lithuania">
                                        Lithuania
                                    </option>
                                    <option value="Luxembourg">
                                        Luxembourg
                                    </option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">
                                        Macedonia, The Former Yugoslav Republic
                                        of
                                    </option>
                                    <option value="Madagascar">
                                        Madagascar
                                    </option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">
                                        Marshall Islands
                                    </option>
                                    <option value="Martinique">
                                        Martinique
                                    </option>
                                    <option value="Mauritania">
                                        Mauritania
                                    </option>
                                    <option value="Mauritius">
                                        Mauritius
                                    </option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova">
                                        Moldova, Republic of
                                    </option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">
                                        Montserrat
                                    </option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">
                                        Mozambique
                                    </option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">
                                        Netherlands
                                    </option>
                                    <option value="Netherlands Antilles">
                                        Netherlands Antilles
                                    </option>
                                    <option value="New Caledonia">
                                        New Caledonia
                                    </option>
                                    <option value="New Zealand">
                                        New Zealand
                                    </option>
                                    <option value="Nicaragua">
                                        Nicaragua
                                    </option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">
                                        Nigeria
                                    </option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">
                                        Norfolk Island
                                    </option>
                                    <option value="Northern Mariana Islands">
                                        Northern Mariana Islands
                                    </option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">
                                        Papua New Guinea
                                    </option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">
                                        Philippines
                                    </option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">
                                        Puerto Rico
                                    </option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">
                                        Russian Federation
                                    </option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="Saint LUCIA">
                                        Saint LUCIA
                                    </option>
                                    <option value="Saint Vincent">
                                        Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">
                                        San Marino
                                    </option>
                                    <option value="Sao Tome and Principe">
                                        Sao Tome and Principe
                                    </option>
                                    <option value="Saudi Arabia">
                                        Saudi Arabia
                                    </option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">
                                        Seychelles
                                    </option>
                                    <option value="Sierra">
                                        Sierra Leone
                                    </option>
                                    <option value="Singapore">
                                        Singapore
                                    </option>
                                    <option value="Slovakia">
                                        Slovakia (Slovak Republic)
                                    </option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">
                                        Solomon Islands
                                    </option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">
                                        South Africa
                                    </option>
                                    <option value="South Georgia">
                                        South Georgia and the South Sandwich
                                        Islands
                                    </option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">
                                        Sri Lanka
                                    </option>
                                    <option value="St. Helena">
                                        St. Helena
                                    </option>
                                    <option value="St. Pierre and Miguelon">
                                        St. Pierre and Miquelon
                                    </option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">
                                        Svalbard and Jan Mayen Islands
                                    </option>
                                    <option value="Swaziland">
                                        Swaziland
                                    </option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">
                                        Switzerland
                                    </option>
                                    <option value="Syria">
                                        Syrian Arab Republic
                                    </option>
                                    <option value="Taiwan">
                                        Taiwan, Province of China
                                    </option>
                                    <option value="Tajikistan">
                                        Tajikistan
                                    </option>
                                    <option value="Tanzania">
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">
                                        Turkmenistan
                                    </option>
                                    <option value="Turks and Caicos">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">
                                        United Arab Emirates
                                    </option>
                                    <option value="United Kingdom">
                                        United Kingdom
                                    </option>
                                    <option value="United States">
                                        United States
                                    </option>
                                    <option value="United States Minor Outlying Islands">
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">
                                        Uzbekistan
                                    </option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">
                                        Venezuela
                                    </option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">
                                        Virgin Islands (British)
                                    </option>
                                    <option value="Virgin Islands (U.S)">
                                        Virgin Islands (U.S.)
                                    </option>
                                    <option value="Wallis and Futana Islands">
                                        Wallis and Futuna Islands
                                    </option>
                                    <option value="Western Sahara">
                                        Western Sahara
                                    </option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1fi2-city"
                                    placeholder="<?php echo $translations['startup']['form-2']['city']; ?>" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1fi2-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    }
?>
<!-- <script src="api/v0/js/core.js"></script> -->
<?php require_once("../resources/config.php") ?>
<!DOCTYPE html>
<html>
	
<!-- LINKS -->
<?php include(TEMPLATE_FRONT . DS . "links.php"); ?>

<body>
	<!-- CONTACT  NAV -->
	<?php include(TEMPLATE_FRONT . DS . "contact_nav.php"); ?>

	<!-- TOP NAV -->
	<?php include(TEMPLATE_FRONT . DS . "top_nav.php"); ?>
	<!-- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel" >
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/corousel/corousel-01.jpg">
				<div class="carousel-caption">
					<h1 class="display-2">GET SPELLS</h1>
					<h3>100% working Love Spells, Marriage Spells, Financial Spells </h3>
					<button type="button" class="btn btn-outline-light btn-lg" id="btn-ourSpells">OUR SPELLS</button>
					<button type="button" class="btn btn-primary btn-lg" id="btn-contactUs">CONTACT US</button>
				</div>		 		
			</div>
			
			<div class="carousel-item">
				<img src="img/corousel/corousel-02.jpg">	
				<div class="carousel-caption">
					<h1 class="display-2">LOVE SPELLS</h1>
					<h3>We cast love spells that can fix all your love problems</h3>
					<button type="button" class="btn btn-outline-light btn-lg" id="btn-ourSpells2">OUR SPELLS</button>
					<button type="button" class="btn btn-primary btn-lg" id="btn-contactUs2">CONTACT US</button>
				</div>				
			</div>

			<div class="carousel-item">
				<img src="img/corousel/corousel-03.jpg">	
				<div class="carousel-caption">
					<h1 class="display-2">WHITE MAGIC</h1>
					<h3>Spells of possibilities </h3>
					<button type="button" class="btn btn-outline-light btn-lg" id="btn-ourSpells3">OUR SPELLS</button>
					<button type="button" class="btn btn-primary btn-lg" id="btn-contactUs3">CONTACT US</button>
				</div>				
			</div>
			
						
		</div>
		<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
	</div>
	


	<!-- WHATSAPP API -->

<?php include(TEMPLATE_FRONT . DS . "whatsapp_api.php"); ?>
	
	<!-- Welcome Section -->

	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4"><span class="heading-text"> WHO</span> WE ARE</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">
					 
					We are specialized in powerful spells and witchcraft. When it comes to spells casting such as, love spells, marriage spells, money spells, witch craft problems, Luck Spells, and so much more, we are the perfect solution. If you are looking for positive change in any situation, love, existing relationships, finding your true soul-mate, career, and any other personal problems or blockages in your life you are in the right place.</p>
					<p class="lead">

					We provide protection against negative powers, help unhappy couples to gain their happiness again, assist people in finding their dream job or in improving their business, and perform healing magic. We also help clients in the form of personal consultations or card readings, meditation seminars and energy transfers. </p>
			</div>
		</div>		
		
	</div>
	<!-- Three Column Section -->


	<!-- Two Column Section -->

	<div class="container-fluid padding">
		<div class="row padding" >
			<div class="col-md-12 col-lg-6">
				<h2 class="heading-2">OUR SPELLS</h2>
				<p>Do you have that special someone whom you love so dearly but they don't love you as much? Have you been in a relationship for far too long that you wonder if you will ever get married to the man in your life? Would you like to settle down with that woman of your dream? Do you have obstacles that are preventing your from getting the love you have always dreamt of? Do you keep getting financial difficulties and you seem not to know what is going on? Are you looking for a financial breakthrough? Do you feel you have been bewitched and you want to be set free? You have been closed to achieving so many things but they don't actually materialize, it seems you are not lucky enough. We have solutions for all those – We cast the best spells that are 100% guaranteed to work. Our love potions and charms are very effective. We have made spells for literally any problem.</p>
				<br>
				<a href="spells.php" class="btn btn-primary">Learn More</a>
			</div>
			<div class="col-lg-6">
				<img src="img/Page Uploads/spells_professor_mike.jpeg" alt="" class="im-fluid abt-spells">
			</div>
		</div>
		
	</div>

	

		<div class="fixed-bg">
		</div>
	<hr class="my-4">

	

	<!-- SERVICES -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4"><span class="heading-text">OUR</span> SERVICES</h1>
			</div>
			<hr>
			
		</div>
	</div>
	
	<!-- Cards -->
	<div class="container-fluid padding">
		<div class="row padding m-5">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" id="servieces-img" src="img/Page Uploads/love-spells-herbalist-natural-healer.jpg">
					<div class="card-body">
						<h4 class="card-title">LOVE SPELLS</h4>
						<p> We all know people who are so much afraid of pain that they shut themselves up like clams in a shell and, 		giving out nothing, receive nothing and therefore shrink until life is a mere living death.
							The pecfect love spell to help you get back your lost love, get the love of your life, fix issues in your relationship.
						 </p>
		
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/Page Uploads/problems-love-herbalist-natural-healer.jpg">
					<div class="card-body">
						<h4 class="card-title">MARRIAGE SPELLS</h4>
						<p>Whether you’re married, planning your wedding vows, writing a marriage toast, or just daydreaming about someone special, We have the best spells for you. Our spells can fix issues in your marriage, bring back your cheating husband, maintaining love and harmony in the home. We can solve issues relating to childlessness and more.</p>
		
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/Page Uploads/voodoo.jpeg">
					<div class="card-body">
						<h4 class="card-title">TRADITIONAL HEALING</h4>
						<p>We have the power to influence the physical world via supernatural means. Whatever it is that you need, we have the right magic to make you achieve. You can have total control over everything. Seeking to influence another without his or her consent or against his or her will. This is the perfect place to be.</p>
		
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/Page Uploads/money-spells-herbalist-natural-healer.jpg">
					<div class="card-body">
						<h4 class="card-title">MONEY SPELLS</h4>
						<p>We all know how hard it is to make money. There are so many challenges and obstacles, realistically many of us could use a bit of help in our finances! It is perfectly natural and healthy to want to end your debt, get more money for your family, and seek out career success and happiness. Prof. Mike has a money spell for every need – fix your finances now. </p>
		
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/Page Uploads/luck-spells.jpeg">
					<div class="card-body">
						<h4 class="card-title">SPIRITUAL PROTECTIONS</h4>
						<p>If you feel your life is in danger and there are some forces that are trying to bring you down. You keeping running from place to place seeking for protections. The forces against you may be speritual while you are busy looking for physical protection. We have the answers to your problems. We can provide the spiritual protection against all forms of evil.</p>
		
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" src="img/Page Uploads/herbalist_natural_healer_products.jpeg">
					<div class="card-body">
						<h4 class="card-title">BLACK MAGIC</h4>
						<p>We do black magic which is very poweful and can be used to achieve anything in this world. You feel lonely and you need a new partner? You have been hoping to get something but keep getting set backs? You feel you are too ugly to be loved by a beautiful girl? We use black magic to solve all those problems your are facing. </p>
		
					</div>
				</div>
			</div>
					<a href="spells.php" class="btn btn-danger fun"><b>CLICK HERE TO VIEW ALL SPELLS</b> </a>
		</div>
	</div>
	<hr class="my-4">



<div class="col-12">
	<h1 class="display-4 text-center"><span class="heading-text"> CONTACT</span> US</h1>
	
</div>

<div class="container"> 
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="send_form_email.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Leave a Message</h3>
                                    <p class="m-0">We will help you</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
									</div>
									<div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="mark@example.com" required>
                                    </div>
								</div>

								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-globe text-info"></i></div>
                                        </div>
                                        <select id="country" name="country" class="mdb-select validate md-form" searchable="Search here.." > 
											<option value="" disabled selected class="input-group-text">Choose your country</option>
											<option value="Afganistan">Afghanistan</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
											<option value="Bonaire">Bonaire</option>
											<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
											<option value="Brunei">Brunei</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Canary Islands">Canary Islands</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Channel Islands">Channel Islands</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos Island">Cocos Island</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote DIvoire">Cote DIvoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Curaco">Curacao</option>
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
											<option value="Falkland Islands">Falkland Islands</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="French Southern Ter">French Southern Ter</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Great Britain">Great Britain</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guinea">Guinea</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Hawaii">Hawaii</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="Indonesia">Indonesia</option>
											<option value="India">India</option>
											<option value="Iran">Iran</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea North">Korea North</option>
											<option value="Korea Sout">Korea South</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Laos">Laos</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macau">Macau</option>
											<option value="Macedonia">Macedonia</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Malawi">Malawi</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Midway Islands">Midway Islands</option>
											<option value="Moldova">Moldova</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Nambia">Nambia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherland Antilles">Netherland Antilles</option>
											<option value="Netherlands">Netherlands (Holland, Europe)</option>
											<option value="Nevis">Nevis</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau Island">Palau Island</option>
											<option value="Palestine">Palestine</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Phillipines">Philippines</option>
											<option value="Pitcairn Island">Pitcairn Island</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Republic of Montenegro">Republic of Montenegro</option>
											<option value="Republic of Serbia">Republic of Serbia</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russia">Russia</option>
											<option value="Rwanda">Rwanda</option>
											<option value="St Barthelemy">St Barthelemy</option>
											<option value="St Eustatius">St Eustatius</option>
											<option value="St Helena">St Helena</option>
											<option value="St Kitts-Nevis">St Kitts-Nevis</option>
											<option value="St Lucia">St Lucia</option>
											<option value="St Maarten">St Maarten</option>
											<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
											<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
											<option value="Saipan">Saipan</option>
											<option value="Samoa">Samoa</option>
											<option value="Samoa American">Samoa American</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome & Principe">Sao Tome & Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syria">Syria</option>
											<option value="Tahiti">Tahiti</option>
											<option value="Taiwan">Taiwan</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania">Tanzania</option>
											<option value="Thailand">Thailand</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad & Tobago">Trinidad & Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks & Caicos Is">Turks & Caicos Is</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Erimates">United Arab Emirates</option>
											<option value="United States of America">United States of America</option>
											<option value="Uraguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Vatican City State">Vatican City State</option>
											<option value="Venezuela">Venezuela</option>
											<option value="Vietnam">Vietnam</option>
											<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
											<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
											<option value="Wake Island">Wake Island</option>
											<option value="Wallis & Futana Is">Wallis & Futana Is</option>
											<option value="Yemen">Yemen</option>
											<option value="Zaire">Zaire</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										 </select>
                                    </div>
								</div>
								
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control pt-3" name="message" placeholder="Write a Message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="SEND" class="btn btn-success btn-block rounded-0 py-2" href="send_form_email.php" >
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>
	<!-- Footer -->

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "js_links.php"); ?>

</body>
</html>
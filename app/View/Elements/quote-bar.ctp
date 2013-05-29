
<style>
/*quote bar page css*/
.wrapper .quote-bar {
    background: url("/projects/parcelpro/img/user/form-bg.jpg") repeat scroll 0 0 transparent;
    border: 0 none;
    height: 120px;
    margin: 0;
    padding: 15px 20px;
    width: 960px;
	border-radius:12px;
}
.wrapper .quote-bar .parcel-details .field input {
    border: 1px solid #CCCCCC;
    padding: 3px;
}

.quote-bar .field-destination {
    color: #000000;
    font-size: 1.25em;
    height: 35px;
    text-align: center;
}

.quote-bar .parcel-details {
    float: left;
    height: 100px;
    margin: 0 0 0 120px;
    width: 400px;
}

.quote-bar .parcel-details .field {
    color: #444444;
}
.quote-bar .field-weight {
    float: left;
    font-size: 0.75em;
    width: 120px;
}
.quote-bar .field-destination select {
    font-size: 0.8em;
}
.quote-bar .field-length {
    float: left;
    font-size: 0.75em;
    width: 70px;
}
.quote-bar .field-width {
    float: left;
    font-size: 0.75em;
    width: 70px;
}
.quote-bar .field-height {
    float: left;
    font-size: 0.75em;
    width: 70px;
}
.quote-bar .field-units {
    float: left;
    font-size: 0.75em;
    width: 70px;
}
.quote-bar .field-weight input {
    margin: 5px 5px 0 0;
    padding: 2px 3px;
    text-align: right;
    width: 60px;
}
.quote-bar .field-length input {
    margin: 5px 0 0;
    padding: 2px 3px;
    text-align: right;
    width: 45px;
}
.quote-bar .field-width input {
    margin: 5px 0 0;
    padding: 2px 3px;
    text-align: right;
    width: 45px;
}
.quote-bar .field-height input {
    margin: 5px 0 0;
    padding: 2px 3px;
    text-align: right;
    width: 45px;
}


.quote-bar .field-units select {
    font-size: 1em;
    margin: 6px 0 0;
    padding: 3px;
    width: 59px;
}
/* end of quote bar css*/
</style>
<div class="quote-bar">
	<form action="/projects/parcelpro/quotations/quotation_compare_price" method="post" id="yPF" onsubmit="return validateYPF();">	
	
	<div class="field field-destination">
		<label for="countrylist">Send a parcel from the UK to:</label> <select id="countrylist" name="data[Quotation][country_id]"><option value="">Choose destination...</option>
		<option value="Australia">Australia</option>
		<option value="Canada">Canada</option>
		<option value="China">China</option>
		<option value="France">France</option>
		<option value="Germany">Germany</option>
		<option value="Ireland">Ireland</option>
		<option value="Japan">Japan</option>
		<option value="Holland (The Netherlands)">Holland (The Netherlands)</option>
		<option value="New Zealand">New Zealand</option>
		<option value="Spain">Spain</option>
		<option value="UK: England">UK: England</option>
		<option value="UK: Scotland">UK: Scotland</option>
		<option value="UK: Northern Ireland">UK: Northern Ireland</option>
		<option value="Ireland">Ireland</option>
		<option value="UK: Wales">UK: Wales</option>
		<option value="USA">USA</option>
		<option value="">--- All countries: ---</option>

	<option value="Albania">Albania</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Argentina">Argentina</option><option value="Ascension Island">Ascension Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azores">Azores</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Balearic Islands">Balearic Islands</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Bermuda">Bermuda</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Bulgaria">Bulgaria</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Canary Islands">Canary Islands</option><option value="Cayman Islands">Cayman Islands</option><option value="Chile">Chile</option><option value="China">China</option><option value="Corsica">Corsica</option><option value="Croatia">Croatia</option><option value="Cyprus (South)">Cyprus (South)</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Egypt">Egypt</option><option value="Estonia">Estonia</option><option value="Falkland Islands">Falkland Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Germany - Cologne">Germany - Cologne</option><option value="Germany - Frankfurt">Germany - Frankfurt</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Guernsey (Channel Isles)">Guernsey (Channel Isles)</option><option value="Holland (The Netherlands)">Holland (The Netherlands)</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey (Channel Isles)">Jersey (Channel Isles)</option><option value="Jordan">Jordan</option><option value="Kenya">Kenya</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Latvia">Latvia</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macedonia">Macedonia</option><option value="Madeira">Madeira</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Malta">Malta</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Netherlands, The (Holland)">Netherlands, The (Holland)</option><option value="Nevis">Nevis</option><option value="New Zealand">New Zealand</option><option value="New Zealand Island Territories">New Zealand Island Territories</option><option value="Nigeria">Nigeria</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Russia: 101000 - 678991">Russia: 101000 - 678991</option><option value="Russia: 680000 - 682990">Russia: 680000 - 682990</option><option value="Russia: 683000 - 686940">Russia: 683000 - 686940</option><option value="Russia: 690000 - 692930">Russia: 690000 - 692930</option><option value="Russia: 693000 - 694620">Russia: 693000 - 694620</option><option value="Russia: 694630 - 694916">Russia: 694630 - 694916</option><option value="San Marino">San Marino</option><option value="Sardinia">Sardinia</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Sicily">Sicily</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="St Barthelemy">St Barthelemy</option><option value="St Helena">St Helena</option><option value="St Kitts and Nevis">St Kitts and Nevis</option><option value="St Lucia">St Lucia</option><option value="St Martin (Guadeloupe)">St Martin (Guadeloupe)</option><option value="St Pierre and Miquelon">St Pierre and Miquelon</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Taiwan">Taiwan</option><option value="Thailand">Thailand</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="UAE - Abu Dhabi">UAE - Abu Dhabi</option><option value="UAE - Ajman">UAE - Ajman</option><option value="UAE - Dubai">UAE - Dubai</option><option value="UAE - Fujairah">UAE - Fujairah</option><option value="UAE - Ras Al Khaimah">UAE - Ras Al Khaimah</option><option value="UAE - Sharjah">UAE - Sharjah</option><option value="UAE - Umm Al Quwain">UAE - Umm Al Quwain</option><option value="UK: England">UK: England</option><option value="UK: Isle of Man">UK: Isle of Man</option><option value="UK: Northern Ireland">UK: Northern Ireland</option><option value="UK: Scotland">UK: Scotland</option><option value="UK: Wales">UK: Wales</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="USA">USA</option><option value="Vatican City State">Vatican City State</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (GB)">Virgin Islands (GB)</option><option value="Virgin Islands (US)">Virgin Islands (US)</option>	</select>
	</div>

	<div class="parcel-details">

		<div class="field field-weight">
			<div><label for="weight">Weight</label></div>
			<div><input type="text" value="" size="10" name="data[Quotation][weight]"> <span class="units">kg</span></div>
		</div>
	
		<div class="field field-length">
			<div><label for="length">Length</label></div>
			<div><input type="text" value="" size="10" name="data[Quotation][length]"> </div>
		</div>
	
		<div class="field field-width">
			<div><label for="width">Width</label></div>
			<div><input type="text" value="" size="10" name="data[Quotation][width]"> </div>
		</div>
	
		<div class="field field-height">
			<div><label for="height">Height</label></div>
			<div><input type="text" value="" size="10" name="data[Quotation][height]"> </div>
		</div>
	
		<div class="field field-units">
			<div class="hidden"><label for="units">Units</label></div>
			<div><select name="units"><option value="cm" selected="selected">cm</option><option value="inches">in.</option></select></div>
		</div>
		
	</div> <!-- end of parcel-details -->

	<div class="quote-bar-submit">
		<div><input type="image" alt="Quote and Book " src="/projects/parcelpro/img/quote-book-bar-red.png" value="submit"></div>
	</div>
	
	</form>
	<br class="clear">

</div>
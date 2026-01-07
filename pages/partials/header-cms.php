<?php
/**
 |
 | Home page
 |
 */

require_once __ROOT__ . '/types/cards/cards.php';
require_once __ROOT__ . '/types/faqs/faqs.php';
require_once __ROOT__ . '/types/videos/videos.php';

use \BFS\Types\FAQs;
use \BFS\Types\Videos;
use \BFS\Types\Cards;

$carouselSlides = Cards::getByRegion( REGION );
$sellGoldFAQs = FAQs::getByRegionAndSection( REGION, 'sell-gold' );
$sellGoldVideos = Videos::getByRegionAndSection( REGION, 'sell-gold' );
$releaseGoldFAQs = FAQs::getByRegionAndSection( REGION, 'release-gold' );
$releaseGoldVideos = Videos::getByRegionAndSection( REGION, 'release-gold' );


// $postTitle = '';
require_once __ROOT__ . '/pages/components/home.php';

require_once __ROOT__ . '/pages/partials/header.php';

?>
<section class="header-section space-100-top-bottom fill-blue-5" id="header-section" data-section-title="Header Section" data-section-slug="header-section">
	<div class="container" bis_skin_checked="1">
		<div class="row" bis_skin_checked="1">
			<div class="columns small-6 inline-middle" bis_skin_checked="1">
				<a class="logo inline" href="/">
					<img class="block" src="/media/whitegold-logo-light.svg" alt="whitegold" title="white-gold-logo">
				</a>
			</div>
			<div class="columns small-6 inline-middle text-right" bis_skin_checked="1">
				<label class="select-region inline js_region_selector_container">
					<select class="select-region-option input-field js_region_selector">
													<option value="ka" selected="">Karnataka</option>
													<option value="kl">Kerala</option>
													<option value="ap">Andhra Pradesh</option>
													<option value="ts">Telangana</option>
											</select>
					<span class="select-region-label p medium js_region_label">Karnataka</span>
				</label>
								<nav class="visuallyhidden js_region_nav">
					<ul>
													<li><a href="/ka" data-region="ka">Karnataka</a></li>
													<li><a href="/kl" data-region="kl">Kerala</a></li>
													<li><a href="/ap" data-region="ap">Andhra Pradesh</a></li>
													<li><a href="/ts" data-region="ts">Telangana</a></li>
											</ul>
				</nav>
			</div>
		</div>
	</div>
</section>

<section class="sticky-menu-section">
	<div class="container" bis_skin_checked="1">
		<div class="row" bis_skin_checked="1">
			
<!-- Main Menu -->
<div class="main-menu columns small-12 medium-6 medium-offset-3 large-12 large-offset-0 fill-dark radius-50 js_whatsapp_form_section js_main_menu" bis_skin_checked="1">
	<div class="row" bis_skin_checked="1">
		<!-- Menu Switcher Checkbox -->
		<input id="toggle-menu-open-sticky" type="checkbox" aria-label="toogle-menu" name="toggle-menu-open" class="toggle-menu-open visuallyhidden js_primary_toggle_menu">
		<!-- Whatsapp Switcher Checkbox -->
		<input id="toggle-whatsapp-open-sticky" type="checkbox" name="toggle-whatsapp-open" class="toggle-whatsapp-open visuallyhidden js_wa_toggle_menu">
		<!-- Menu Content -->
		<div class="menu-content columns small-12 large-9" bis_skin_checked="1">
			<div class="row space-25" bis_skin_checked="1">
				<div class="columns small-6 large-4 space-25" bis_skin_checked="1">
					<a class="menu-button menu-button-large block fill-blue-4" href="/ka/branches">
						<span class="menu-button-bg" style="background-image: url('/media/background/find-branch.png'); filter: brightness(0.9);" alt="menu-bar"></span>
						<span class="menu-button-icon">
							<img class="block" src="/media/icon/location-white.svg" alt="whatsapp-icon">
						</span>
						<span class="menu-button-label">Find Nearest <br class="hide-large hide-xlarge">Branch</span>
					</a>
				</div>
				<div class="columns small-6 large-4 space-25" bis_skin_checked="1">
					<a class="menu-button menu-button-large block fill-yellow-2 text-light" href="/ka/live-gold">
						<span class="menu-button-bg fill-dark" style="background-image: url('/media/background/sell-gold.png'); filter: brightness(0.5);" alt="sell-gold"></span>
						<span class="menu-button-icon">
							<img class="block" alt="rupee" src="/media/icon/rupee-white.svg">
						</span>
						<span class="menu-button-label">Live Gold <br class="hide-large hide-xlarge">Rate</span>
					</a>
				</div>
				<div class="columns small-6 large-2 space-25" bis_skin_checked="1">
					<a class="menu-button block fill-blue-5" href="/ka#sell-gold-section">Sell Gold</a>
				</div>
				<div class="columns small-6 large-2 space-25" bis_skin_checked="1">
					<a class="menu-button block fill-light" href="/ka#release-gold-section">Release Gold</a>
				</div>
			</div>
		</div>
		<!-- Menu Controls -->
		<div class="menu-head columns small-12 large-3" bis_skin_checked="1">
			<div class="row space-25" bis_skin_checked="1">
				<div class="toggle-whatsapp columns small-2 large-3 space-25" bis_skin_checked="1">
					<label class="menu-button block fill-neutral-5" style="--bg-image: url( '/media/icon/vertical-dots.white.svg' ); background-color: #32AF74;" for="toggle-whatsapp-open-sticky" alt="whatsapp">
						<span class="l1"></span>
						<span class="l2"></span>
						<img class="block" src="/media/icon/whatsapp-outline.svg" alt="whatsapp-icon">
					</label>
				</div>
				<div class="phone-number columns small-6 small-offset-1 large-9 large-offset-0 space-25" bis_skin_checked="1">
					<a class="menu-button block fill-neutral-5 text-center" href="tel:+91 95907 04444">+91 95907 04444</a>
				</div>
				<div class="toggle-menu columns small-2 small-offset-1 large-3 large-offset-0 space-25 hide-large hide-xlarge" bis_skin_checked="1">
					<label class="menu-button block fill-neutral-5" style="--bg-image: url( '/media/icon/vertical-dots.white.svg' )" for="toggle-menu-open-sticky" alt="whitegold gold near me">
						<span class="l1"></span>
						<span class="l2"></span>
						<span class="l3"></span>
					</label>
				</div>
			</div>
		</div>
		<!-- Whatsapp Form -->
		<div class="whatsapp-form fill-dark columns small-12 large-4" bis_skin_checked="1">
			<div class="" bis_skin_checked="1">
				<form class="form-card form-dark row space-25 js_whatsapp_form" onsubmit="event.preventDefault()" data-number="+91 95907 04444">
					<div class="columns small-12 space-25" bis_skin_checked="1">
						<label class="form-label block">
							<textarea class="form-input-field block js_form_input_message" placeholder="Your Message"></textarea>
							<span class="form-label-title medium fill-dark cursor-pointer">Your Message</span>
						</label>
					</div>
					<div class="columns small-10 space-25" bis_skin_checked="1">
						<label class="phone-verify form-label block">
							<input type="text" class="form-input-field phone-number block js_form_input_phone_number" _id="js_home_visit_form_input_phone_sticky">
							<select class="form-input-field country-code js_phone_country_code">
								
<option value="af +93">
	Afghanistan (+93)
</option>
<option value="al +355">
	Albania (+355)
</option>
<option value="dz +213">
	Algeria (+213)
</option>
<option value="as +1684">
	American Samoa (+1684)
</option>
<option value="ad +376">
	Andorra (+376)
</option>
<option value="ao +244">
	Angola (+244)
</option>
<option value="ai +1264">
	Anguilla (+1264)
</option>
<option value="ag +1268">
	Antigua and Barbuda (+1268)
</option>
<option value="ar +54">
	Argentina (+54)
</option>
<option value="am +374">
	Armenia (+374)
</option>
<option value="aw +297">
	Aruba (+297)
</option>
<option value="au +61">
	Australia (+61)
</option>
<option value="at +43">
	Austria (+43)
</option>
<option value="az +994">
	Azerbaijan (+994)
</option>
<option value="bs +1242">
	Bahamas (+1242)
</option>
<option value="bh +973">
	Bahrain (+973)
</option>
<option value="bd +880">
	Bangladesh (+880)
</option>
<option value="bb +1246">
	Barbados (+1246)
</option>
<option value="by +375">
	Belarus (+375)
</option>
<option value="be +32">
	Belgium (+32)
</option>
<option value="bz +501">
	Belize (+501)
</option>
<option value="bj +229">
	Benin (+229)
</option>
<option value="bm +1441">
	Bermuda (+1441)
</option>
<option value="bt +975">
	Bhutan (+975)
</option>
<option value="bo +591">
	Bolivia (+591)
</option>
<option value="ba +387">
	Bosnia and Herzegovina (+387)
</option>
<option value="bw +267">
	Botswana (+267)
</option>
<option value="br +55">
	Brazil (+55)
</option>
<option value="io +246">
	British Indian Ocean Territory (+246)
</option>
<option value="vg +1284">
	British Virgin Islands (+1284)
</option>
<option value="bn +673">
	Brunei (+673)
</option>
<option value="bg +359">
	Bulgaria (+359)
</option>
<option value="bf +226">
	Burkina Faso (+226)
</option>
<option value="mm +95">
	Burma-Myanmar (+95)
</option>
<option value="bi +257">
	Burundi (+257)
</option>
<option value="kh +855">
	Cambodia (+855)
</option>
<option value="cm +237">
	Cameroon (+237)
</option>
<option value="ca +1">
	Canada (+1)
</option>
<option value="cv +238">
	Cape Verde (+238)
</option>
<option value="ky +1345">
	Cayman Islands (+1345)
</option>
<option value="cf +236">
	Central African Republic (+236)
</option>
<option value="td +235">
	Chad (+235)
</option>
<option value="cl +56">
	Chile (+56)
</option>
<option value="cn +86">
	China (+86)
</option>
<option value="cx +6189">
	Christmas Island (+6189)
</option>
<option value="co +57">
	Colombia (+57)
</option>
<option value="km +269">
	Comoros (+269)
</option>
<option value="cg +242">
	Congo (+242)
</option>
<option value="cd +243">
	Congo, The Democratic Republic (+243)
</option>
<option value="ck +682">
	Cook Islands (+682)
</option>
<option value="cr +506">
	Costa Rica (+506)
</option>
<option value="hr +385">
	Croatia (+385)
</option>
<option value="cu +53">
	Cuba (+53)
</option>
<option value="cy +357">
	Cyprus (+357)
</option>
<option value="cz +420">
	Czech Republic (+420)
</option>
<option value="dk +45">
	Denmark (+45)
</option>
<option value="dj +253">
	Djibouti (+253)
</option>
<option value="dm +1767">
	Dominica (+1767)
</option>
<option value="do +1849">
	Dominican Republic (+1849)
</option>
<option value="do +1829">
	Dominican Republic (+1829)
</option>
<option value="do +1809">
	Dominican Republic (+1809)
</option>
<option value="tl +670">
	East Timor (+670)
</option>
<option value="ec +593">
	Ecuador (+593)
</option>
<option value="eg +20">
	Egypt (+20)
</option>
<option value="sv +503">
	El Salvador (+503)
</option>
<option value="gq +240">
	Equatorial Guinea (+240)
</option>
<option value="er +291">
	Eritrea (+291)
</option>
<option value="ee +372">
	Estonia (+372)
</option>
<option value="et +251">
	Ethiopia (+251)
</option>
<option value="fo +298">
	Faroe Islands (+298)
</option>
<option value="fj +679">
	Fiji (+679)
</option>
<option value="fi +358">
	Finland (+358)
</option>
<option value="fr +33">
	France (+33)
</option>
<option value="gf +594">
	French Guiana (+594)
</option>
<option value="pf +689">
	French Polynesia (+689)
</option>
<option value="ga +241">
	Gabon (+241)
</option>
<option value="gm +220">
	Gambia (+220)
</option>
<option value="ge +995">
	Georgia (+995)
</option>
<option value="de +49">
	Germany (+49)
</option>
<option value="gh +233">
	Ghana (+233)
</option>
<option value="gi +350">
	Gibraltar (+350)
</option>
<option value="gr +30">
	Greece (+30)
</option>
<option value="gl +299">
	Greenland (+299)
</option>
<option value="gd +1473">
	Grenada (+1473)
</option>
<option value="gp +590">
	Guadeloupe (+590)
</option>
<option value="gu +1671">
	Guam (+1671)
</option>
<option value="gt +502">
	Guatemala (+502)
</option>
<option value="gn +224">
	Guinea (+224)
</option>
<option value="gw +245">
	Guinea-Bissau (+245)
</option>
<option value="gy +592">
	Guyana (+592)
</option>
<option value="ht +509">
	Haiti (+509)
</option>
<option value="hn +504">
	Honduras (+504)
</option>
<option value="hk +852">
	Hong Kong (+852)
</option>
<option value="hu +36">
	Hungary (+36)
</option>
<option value="is +354">
	Iceland (+354)
</option>
<option value="in +91" selected="">
	India (+91)
</option>
<option value="id +62">
	Indonesia (+62)
</option>
<option value="ir +98">
	Iran (+98)
</option>
<option value="iq +964">
	Iraq (+964)
</option>
<option value="ie +353">
	Ireland (+353)
</option>
<option value="il +972">
	Israel (+972)
</option>
<option value="it +39">
	Italy (+39)
</option>
<option value="ci +225">
	Ivory Coast (+225)
</option>
<option value="jm +1876">
	Jamaica (+1876)
</option>
<option value="jp +81">
	Japan (+81)
</option>
<option value="jo +962">
	Jordan (+962)
</option>
<option value="kz +7">
	Kazakhstan (+7)
</option>
<option value="ke +254">
	Kenya (+254)
</option>
<option value="ki +686">
	Kiribati (+686)
</option>
<option value="kw +965">
	Kuwait (+965)
</option>
<option value="kg +996">
	Kyrgyzstan (+996)
</option>
<option value="la +856">
	Laos (+856)
</option>
<option value="lv +371">
	Latvia (+371)
</option>
<option value="lb +961">
	Lebanon (+961)
</option>
<option value="ls +266">
	Lesotho (+266)
</option>
<option value="lr +231">
	Liberia (+231)
</option>
<option value="ly +218">
	Libya (+218)
</option>
<option value="li +423">
	Liechtenstein (+423)
</option>
<option value="lt +370">
	Lithuania (+370)
</option>
<option value="lu +352">
	Luxembourg (+352)
</option>
<option value="mo +853">
	Macau (+853)
</option>
<option value="mk +389">
	Macedonia (+389)
</option>
<option value="mg +261">
	Madagascar (+261)
</option>
<option value="mw +265">
	Malawi (+265)
</option>
<option value="my +60">
	Malaysia (+60)
</option>
<option value="mv +960">
	Maldives (+960)
</option>
<option value="ml +223">
	Mali (+223)
</option>
<option value="mt +356">
	Malta (+356)
</option>
<option value="mh +692">
	Marshall Islands (+692)
</option>
<option value="mq +596">
	Martinique (+596)
</option>
<option value="mr +222">
	Mauritania (+222)
</option>
<option value="mu +230">
	Mauritius (+230)
</option>
<option value="yt +262">
	Mayotte (+262)
</option>
<option value="mx +52">
	Mexico (+52)
</option>
<option value="md +373">
	Moldova (+373)
</option>
<option value="mc +377">
	Monaco (+377)
</option>
<option value="mn +976">
	Mongolia (+976)
</option>
<option value="me +382">
	Montenegro (+382)
</option>
<option value="ms +1664">
	Montserrat (+1664)
</option>
<option value="ma +212">
	Morocco (+212)
</option>
<option value="mz +258">
	Mozambique (+258)
</option>
<option value="na +264">
	Namibia (+264)
</option>
<option value="nr +674">
	Nauru (+674)
</option>
<option value="np +977">
	Nepal (+977)
</option>
<option value="nl +31">
	Netherlands (+31)
</option>
<option value="cw +599">
	Curaçao (+599)
</option>
<option value="nc +687">
	New Caledonia (+687)
</option>
<option value="nz +64">
	New Zealand (+64)
</option>
<option value="ni +505">
	Nicaragua (+505)
</option>
<option value="ne +227">
	Niger (+227)
</option>
<option value="ng +234">
	Nigeria (+234)
</option>
<option value="nu +683">
	Niue (+683)
</option>
<option value="nf +672">
	Norfolk Island (+672)
</option>
<option value="mp +1670">
	Northern Mariana Islands (+1670)
</option>
<option value="kp +850">
	North Korea (+850)
</option>
<option value="no +47">
	Norway (+47)
</option>
<option value="om +968">
	Oman (+968)
</option>
<option value="pk +92">
	Pakistan (+92)
</option>
<option value="pw +680">
	Palau (+680)
</option>
<option value="ps +970">
	Palestine (+970)
</option>
<option value="pa +507">
	Panama (+507)
</option>
<option value="pg +675">
	Papua New Guinea (+675)
</option>
<option value="py +595">
	Paraguay (+595)
</option>
<option value="pe +51">
	Peru (+51)
</option>
<option value="ph +63">
	Philippines (+63)
</option>
<option value="pn +870">
	Pitcairn Islands (+870)
</option>
<option value="pl +48">
	Poland (+48)
</option>
<option value="pt +351">
	Portugal (+351)
</option>
<option value="pr +1787">
	Puerto Rico (+1787)
</option>
<option value="qa +974">
	Qatar (+974)
</option>
<option value="re +262">
	Réunion (+262)
</option>
<option value="ro +40">
	Romania (+40)
</option>
<option value="ru +7">
	Russia (+7)
</option>
<option value="rw +250">
	Rwanda (+250)
</option>
<option value="sh +290">
	Saint Helena (+290)
</option>
<option value="kn +1869">
	Saint Kitts and Nevis (+1869)
</option>
<option value="lc +1758">
	Saint Lucia (+1758)
</option>
<option value="mf +1599">
	Saint Martin (+1599)
</option>
<option value="pm +508">
	Saint Pierre and Miquelon (+508)
</option>
<option value="vc +1784">
	Saint Vincent and the Grenadines (+1784)
</option>
<option value="ws +685">
	Samoa (+685)
</option>
<option value="sm +378">
	San Marino (+378)
</option>
<option value="st +239">
	São Tomé and Príncipe (+239)
</option>
<option value="sa +966">
	Saudi Arabia (+966)
</option>
<option value="sn +221">
	Senegal (+221)
</option>
<option value="rs +381">
	Serbia (+381)
</option>
<option value="sc +248">
	Seychelles (+248)
</option>
<option value="fk +500">
	Falkland Islands (+500)
</option>
<option value="sl +232">
	Sierra Leone (+232)
</option>
<option value="sg +65">
	Singapore (+65)
</option>
<option value="sk +421">
	Slovakia (+421)
</option>
<option value="si +386">
	Slovenia (+386)
</option>
<option value="sb +677">
	Solomon Islands (+677)
</option>
<option value="so +252">
	Somalia (+252)
</option>
<option value="za +27">
	South Africa (+27)
</option>
<option value="kr +82">
	South Korea (+82)
</option>
<option value="ss +211">
	South Sudan (+211)
</option>
<option value="es +34">
	Spain (+34)
</option>
<option value="lk +94">
	Sri Lanka (+94)
</option>
<option value="sd +249">
	Sudan (+249)
</option>
<option value="sr +597">
	Suriname (+597)
</option>
<option value="sz +268">
	Swaziland (+268)
</option>
<option value="se +46">
	Sweden (+46)
</option>
<option value="ch +41">
	Switzerland (+41)
</option>
<option value="sy +963">
	Syria (+963)
</option>
<option value="tw +886">
	Taiwan (+886)
</option>
<option value="tj +992">
	Tajikistan (+992)
</option>
<option value="tz +255">
	Tanzania (+255)
</option>
<option value="th +66">
	Thailand (+66)
</option>
<option value="tg +228">
	Togo (+228)
</option>
<option value="tk +690">
	Tokelau (+690)
</option>
<option value="to +676">
	Tonga (+676)
</option>
<option value="tt +1868">
	Trinidad and Tobago (+1868)
</option>
<option value="tn +216">
	Tunisia (+216)
</option>
<option value="tr +90">
	Turkey (+90)
</option>
<option value="tm +993">
	Turkmenistan (+993)
</option>
<option value="tc +1649">
	Turks and Caicos Islands (+1649)
</option>
<option value="tv +688">
	Tuvalu (+688)
</option>
<option value="ug +256">
	Uganda (+256)
</option>
<option value="gb +44">
	United Kingdom (+44)
</option>
<option value="ua +380">
	Ukraine (+380)
</option>
<option value="ae +971">
	United Arab Emirates (+971)
</option>
<option value="uy +598">
	Uruguay (+598)
</option>
<option value="us +1">
	United States (+1)
</option>
<option value="uz +998">
	Uzbekistan (+998)
</option>
<option value="vu +678">
	Vanuatu (+678)
</option>
<option value="ve +58">
	Venezuela (+58)
</option>
<option value="vn +84">
	Vietnam (+84)
</option>
<option value="vi +1340">
	Virgin Islands (+1340)
</option>
<option value="wf +681">
	Wallis and Futuna (+681)
</option>
<option value="ye +967">
	Yemen (+967)
</option>
<option value="zm +260">
	Zambia (+260)
</option>
<option value="zw +263">
	Zimbabwe (+263)
</option>
							</select>
							<span class="country-code-divider material-icons" data-icon="unfold_more"></span>
							<input type="text" disabled="" class="form-input-field country-code-label js_phone_country_code_label" value="+91" _id="js_home_visit_form_input_phone_country_code_sticky">
							<span class="form-label-title medium fill-dark cursor-pointer">Mobile Number</span>
						</label>
					</div>
					<div class="columns small-2 space-25" bis_skin_checked="1">
						<button class="send-to-whatsapp block fill-neutral-5" type="submit"><img class="block" src="/media/icon/whatsapp-outline.svg" alt="whitegold"></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END: Main Menu -->

		</div>
	</div>
</section>



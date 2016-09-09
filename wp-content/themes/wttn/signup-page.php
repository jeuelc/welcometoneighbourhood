<?php 
/*
Template Name: Signup Page
*/
get_header(); ?>
<div id="main">
    <div id="sign-up" class="full-height">
        <div class="sign-up-content">
            <div class="colored-logo-holder">
                <img src="<?php bloginfo('template_directory');?>/images/wttn-logo-color-01.png">
            </div>
            <div class="sign-up-head-label-holder">
                <h2 class="sign-up-label">sign up</h2>
                <h3 class="sign-up-sub-label">[ Get Started in Minutes ]</h3>
            </div>
            <div class="sign-up-form-container" id="form-1">
                <div class="input-holder">
                    <label for="full_name">Your Name</label>
                    <input type="text" name="full_name" id="fullname" placeholder="Enter your full name">
                </div>
                <div class="input-holder">
                    <label for="email_address">Email Address</label>
                    <input type="text" name="email_address" id="email_address" placeholder="Enter your email address">
                </div>
                <div class="input-holder">
                    <label for="business_name">Business Name</label>
                    <input type="text" name="business_name" id="business_name" placeholder="Let us know your business name">
                </div>
                <div class="input-holder">
                    <div class="suburb-input-fields-folder">
                        <label class="black">Add Suburb(s)</label>
                        <div class="state-input-holder">
                            <label for="state">State</label>
                            <select name="state" id="state">
                                <option value="">Select state</option>
                                <option value="Australian Capital Territory">Australian Capital Territory</option>
                                <option value="New South Wales">New South Wales</option>
                                <option value="Northern Territory">Northern Territory</option>
                                <option value="Queensland">Queensland</option>
                                <option value="South Australia">South Australia</option>
                                <option value="Tasmania">Tasmania</option>
                                <option value="Victoria">Victoria</option>
                                <option value="Western Australia">Western Australia</option>
                            </select>
                        </div>
                        <div class="suburb-input-holder">
                            <label for="suburb">Suburb</label>
                            <select name="suburb" id="suburb">
                                <option value="">Select suburb</option>
                                <option value="suburb">Suburb 1</option>
                                <option value="suburb">Suburb 2</option>
                                <option value="suburb">Suburb 3</option>
                                <option value="suburb">Suburb 4</option>
                            </select>
                        </div>
                        <div class="add-suburb-input-holder">
                            <label>&nbsp;</label>
                            <button class="enabled" id="add-suburb-btn">add</button>
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div>
            </div>
            <div class="sign-up-form-container" id="form-2">
                <div class="input-holder">
                    <label class="black">we accept</label>
                    <img src="<?php bloginfo('template_directory');?>/images/cc-01.png">
                </div>
                <div class="input-holder">
                    <label for="cardholder_name">Cardholder Name</label>
                    <input type="text" name="cardholder_name" id="cardholder_name" placeholder="Enter card holder name">
                </div>
                <div class="input-holder">
                    <label for="card_number">Card Number (without spaces or dashes)</label>
                    <input type="text" name="card_number" id="card_number" placeholder="Enter card number">
                </div>
                <div class="input-holder">
                    <div class="suburb-input-fields-folder">
                        <div class="month-input-holder">
                            <label for="month" style="text-align:center">Month</label>
                            <select name="month" id="month">
                                <option value="">Select month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="year-input-holder">
                            <label for="year">Year</label>
                            <select name="year" id="year">
                                <option value="">Select year</option>
                                <option value="2016">2017</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                        </div>
                        <div class="cvv-input-holder">
                            <label for="cvv" style="text-align:center">Cvv</label>
                            <input type="text" id="cvv" name="cvv" placeholder="Enter cvv">
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div>
            </div>
            <div class="sign-up-form-container" id="form-3">
                <div class="input-holder">
                    <label for="address_line_1">Address Line 1</label>
                    <input type="text" name="address_line_1" id="address_line_1" placeholder="Enter your address">
                </div>
                <div class="input-holder">
                    <label for="address_line_2">Address Line 2</label>
                    <input type="text" name="address_line_2" id="address_line_2">
                </div>
                <div class="input-holder">
                    <div class="suburb-input-fields-folder">
                        <div class="address-state-input-holder">
                            <label for="address_state">State</label>
                            <select name="address_state" id="address_state">
                                <option value="">Select state</option>
                                <option value="Australian Capital Territory">Australian Capital Territory</option>
                                <option value="New South Wales">New South Wales</option>
                                <option value="Northern Territory">Northern Territory</option>
                                <option value="Queensland">Queensland</option>
                                <option value="South Australia">South Australia</option>
                                <option value="Tasmania">Tasmania</option>
                                <option value="Victoria">Victoria</option>
                                <option value="Western Australia">Western Australia</option>
                            </select>
                        </div>
                        <div class="address-city-input-holder">
                            <label for="address_city" style="text-align:left;">City</label>
                            <select name="address_city" id="address_city" style="width:100%;">
                                <option value="">Select city</option>
                                <option value="city 1">city 1</option>
                                <option value="city 2">city 2</option>
                                <option value="city 3">city 3</option>
                                <option value="city 4">city 4</option>
                                <option value="city 5">city 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div>
            </div>
            <div class="sign-up-form-container" id="success-signup">
                <div class="input-holder">
                    <label class="black">your wttn account was successfully created</label>
                    <label class="black">and a confirmation email was sent to your email address.</label>
                </div>
                <div class="input-holder success-image-holder">
                    <img src="<?php bloginfo('template_directory');?>/images/icon-08-signup-complete-01.png">
                </div>
                <div class="input-holder">
                    <label class="black">Please click on the link in that email in order to</label>
                    <label class="black">verify your email address.</label>
                </div>
            </div>
        </div>
        <div class="submit-sign-up-holder">
            <div class="submit-sign-up-wrapper">
                <button class="submit-signup-button">continue</button>
                <div class="re-send-verification">
                    no email received<img src="<?php bloginfo('template_directory');?>/images/question-mark-gray-01.png"><br>
                    <a href="#">re-send</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<div class="col-md-12">
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>1. Were you ever arrested?</strong> (If yes, please indicate City and Police Detachment below. If no, please write N/A)</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="arrested" value="Y" id="yes_arrested" checked="" <?php if (isset($formData->arrested) && $formData->arrested == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_arrested"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="arrested" value="N" id="no_arrested" <?php if (isset($formData->arrested) && $formData->arrested == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_arrested"> No</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="mb-md-2 col-lg-12">
            <textarea rows="2" cols="3" class="form-control" name="Arrested_textarea" placeholder="" value="<?php if (isset($formData) && !empty($formData->Arrested_textarea)){echo $formData->Arrested_textarea;} ?>"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>2. Have you ever been arrested outside of Canada?</strong> (If yes, please explain infull detail below. If no, please write N/A)</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="arrested_outside_canada" value="Y" checked="" <?php if (isset($formData->arrested_outside_canada) && $formData->arrested_outside_canada == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_arrested_outside_canada"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="arrested_outside_canada" value="N" id="no_arrested_outside_canada" <?php if (isset($formData->arrested_outside_canada) && $formData->arrested_outside_canada == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_arrested_outside_canada"> No</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="mb-md-2 col-lg-12">
            <textarea rows="2" cols="3" class="form-control" name="ArrestedOutsideCA" placeholder="" value="<?php if (isset($formData) && !empty($formData->ArrestedOutsideCA)){echo $formData->ArrestedOutsideCA;} ?>"></textarea>
        </div>
    </div>
    <div class="row text-center">
        <div class="form-group mb-md-2 col-lg-12">
            <h5><strong>Criminal Conviction History</strong></h5>
        </div>
    </div>
    <div class="row text-center">
        <div class="form-group mb-md-2 col-lg-12">
            <h5>Conviction #1</h5>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>a) The Court(s) in which you were convicted Court House</label>
            <input type="text" class="form-control" name="convicted_court_house_1" placeholder="Enter" value="<?php if (isset($formData) && !empty($formData->convicted_court_house_1)){echo $formData->convicted_court_house_1;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>City:</label>
            <input type="text" class="form-control" name="court_conviction_city_1" placeholder="City" value="<?php if (isset($formData) && !empty($formData->court_conviction_city_1)){echo $formData->court_conviction_city_1;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Province:</label>
            <input type="text" class="form-control" name="court_conviction_province_1" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->court_conviction_province_1)){echo $formData->court_conviction_province_1;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>b) The Police Detachment(s) that charged and arrested you</label>
            <input type="text" class="form-control" name="convicted_police_department_1" placeholder="Enter" value="<?php if (isset($formData) && !empty($formData->convicted_police_department_1)){echo $formData->convicted_police_department_1;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>City:</label>
            <input type="text" class="form-control" name="police_conviction_city_1" placeholder="City" value="<?php if (isset($formData) && !empty($formData->police_conviction_city_1)){echo $formData->police_conviction_city_1;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Province:</label>
            <input type="text" class="form-control" name="police_conviction_province_1" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->police_conviction_province_1)){echo $formData->police_conviction_province_1;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-12">
            <label>c) The Charge</label>
            <input type="text" class="form-control" name="conviction_charge_1" placeholder="Charge" value="<?php if (isset($formData) && !empty($formData->conviction_charge_1)){echo $formData->conviction_charge_1;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>d) The Date(s) of sentence (MM/DD/YYYY) - approximate time if you don’t recall exactly</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="sentenced_date_1" placeholder="Select Date" value="<?php if (isset($formData) && !empty($formData->sentenced_date_1)){echo $formData->sentenced_date_1;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-6">
            <label>e) The actual sentence(s) you received:</label>
            <input type="text" class="form-control" name="actual_sentence_1" placeholder="Enter" value="<?php if (isset($formData) && !empty($formData->actual_sentence_1)){echo $formData->actual_sentence_1;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-12">
            <label>f) If any convictions after 1992 were in Toronto, identify which Court(s) you attended (6 different Courts have operated in Toronto since 1992)</label>
            <input type="text" class="form-control" name="court_after_1992_1" placeholder="Enter" value="<?php if (isset($formData) && !empty($formData->court_after_1992_1)){echo $formData->court_after_1992_1;} ?>">
        </div>
    </div>


    <div class="row text-center">
        <div class="form-group mb-md-2 col-lg-12">
            <h5>Conviction #2</h5>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>a) The Court(s) in which you were convicted Court House</label>
            <input type="text" class="form-control" name="convicted_court_house_2" placeholder="Enter" value="<?php if (isset($formData) && !empty($formData->convicted_court_house_2)){echo $formData->convicted_court_house_2;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>City:</label>
            <input type="text" class="form-control" name="court_conviction_city_2" placeholder="City" value="<?php if (isset($formData) && !empty($formData->court_conviction_city_2)){echo $formData->court_conviction_city_2;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Province:</label>
            <input type="text" class="form-control" name="court_conviction_province_2" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->court_conviction_province_2)){echo $formData->court_conviction_province_2;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>b) The Police Detachment(s) that charged and arrested you</label>
            <input type="text" class="form-control" name="convicted_police_department_2" placeholder="Enter" value="<?php if (isset($formData) && !empty($formData->convicted_police_department_2)){echo $formData->convicted_police_department_2;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>City:</label>
            <input type="text" class="form-control" name="police_conviction_city_2" placeholder="City" value="<?php if (isset($formData) && !empty($formData->police_conviction_city_2)){echo $formData->police_conviction_city_2;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Province:</label>
            <input type="text" class="form-control" name="police_conviction_province_2" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->police_conviction_province_2)){echo $formData->police_conviction_province_2;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-12">
            <label>c) The Charge</label>
            <input type="text" class="form-control" name="conviction_charge_2" placeholder="Charge" value="<?php if (isset($formData) && !empty($formData->conviction_charge_2)){echo $formData->conviction_charge_2;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>d) The Date(s) of sentence (MM/DD/YYYY) - approximate time if you don’t recall exactly</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="sentenced_date_2" placeholder="Select Date" value="<?php if (isset($formData) && !empty($formData->sentenced_date_2)){echo $formData->sentenced_date_2;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-6">
            <label>e) The actual sentence(s) you received:</label>
            <input type="text" class="form-control" name="actual_sentence_2" placeholder="Enter" value="<?php if (isset($formData) && !empty($formData->actual_sentence_2)){echo $formData->actual_sentence_2;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-12">
            <label>f) If any convictions after 1992 were in Toronto, identify which Court(s) you attended (6 different Courts have operated in Toronto since 1992)</label>
            <input type="text" class="form-control" name="court_after_1992_2" placeholder="Enter" value="<?php if (isset($formData) && !empty($formData->court_after_1992_2)){echo $formData->court_after_1992_2;} ?>">
        </div>
    </div>


    <div class="row">
        <div class="form-group mt-10 mb-3 mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>1. Do you believe that you may be inadmissible to the United States?</strong></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="inadmissible" value="Y" id="yes_inadmissible" checked="" <?php if (isset($formData->inadmissible) && $formData->inadmissible == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_inadmissible"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="inadmissible" value="N" id="no_inadmissible" <?php if (isset($formData->inadmissible) && $formData->inadmissible == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_inadmissible"> No</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="mb-md-2 col-lg-12">
            <label><strong>Explain the reason(s) why you believe that you may not be admissible to the U.S. </strong>(for example, Criminal Conviction(s), Health-related grounds, etc.):</label>
            <textarea rows="2" cols="3" class="form-control" name="immigration_textarea1" placeholder="" value="<?php if (isset($formData) && !empty($formData->immigration_textarea1)){echo $formData->immigration_textarea1;} ?>"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="mt-10 col-lg-12">
            <label><strong>2. If you were told that you are inadmissible to the U.S., provide the reason you were given:</strong></label>
        </div>
    </div>
    <div class="row form-group">
        <div class="mb-md-2 col-lg-12">
            <textarea rows="2" cols="3" name="immigration_textarea2" class="form-control" placeholder="" value="<?php if (isset($formData) && !empty($formData->immigration_textarea2)){echo $formData->immigration_textarea2;} ?>"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group mt-10 mb-3 mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>3. Have you ever been refused entry into the United States?</strong></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="refused" value="Y" id="yes_refused" checked="" <?php if (isset($formData->refused) && $formData->refused == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_refused"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="refused" value="N" id="no_refused" <?php if (isset($formData->refused) && $formData->refused == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_refused"> No</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="mb-md-2 col-lg-12">
            <label>(If yes, please explain in full detail below. If no, please write N/A)</label>
            <textarea rows="2" cols="3" class="form-control" name="immigration_textarea3" placeholder="" value="<?php if (isset($formData) && !empty($formData->immigration_textarea3)){echo $formData->immigration_textarea3;} ?>"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group mt-10 mb-3 mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>4. Have you ever been deported from the United States?</strong></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="deported" value="Y" id="yes_deported" checked="" <?php if (isset($formData->deported) && $formData->deported == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_deported"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="deported" value="N" id="no_deported" <?php if (isset($formData->deported) && $formData->deported == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_deported"> No</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="mb-md-2 col-lg-12">
            <label>(If yes, please explain in full detail below. If no, please write N/A)</label>
            <textarea rows="2" cols="3" class="form-control" name="immigration_textarea4" placeholder="" value="<?php if (isset($formData) && !empty($formData->immigration_textarea4)){echo $formData->immigration_textarea4;} ?>"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="form-group mt-10 mb-3 mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>5. Have you previously filed an application for advance permission to enter the U.S. as a non-immigrant?</strong></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="filled_application_before" value="Y" id="yes_filled_application_before" checked="" <?php if (isset($formData->filled_application_before) && $formData->filled_application_before == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_filled_application_before"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="filled_application_before" value="N" id="no_filled_application_before" <?php if (isset($formData->filled_application_before) && $formData->filled_application_before == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_filled_application_before"> No</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-12">
            <label><strong>a) Date Application Filed (MM/DD/YYYY):</strong></label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="filled_application_date" placeholder="Select Date" value="<?php if (isset($formData) && !empty($formData->filled_application_date)){echo $formData->filled_application_date;} ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label><strong>b) Location where you filed your application</strong>(for example, U.S. Citizenship and Immigration Services <strong>(USCIS) Office or Port-Of-Entry) (USCIS) Office or Port-Of-Entry</strong></label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>City or Town:</label>
            <input type="text" class="form-control" name="filed_application_city" id="filed_application_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->filed_application_city)){echo $formData->filed_application_city;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label>Province or State:</label>
            <input type="text" class="form-control" name="filed_application_province" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->filed_application_province)){echo $formData->filed_application_province;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="filed_application_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result2)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->filed_application_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label><strong>c) Receipt Number (if available)</strong></label>
            <input type="text" class="form-control" name="filed_application_receipt_no" id="" placeholder="Receipt Number" value="<?php if (isset($formData) && !empty($formData->filed_application_receipt_no)){echo $formData->filed_application_receipt_no;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group mt-10 mb-3 mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>6. Have you EVER been in the United States for a period of 6 months or more?</strong></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="sixmos" value="Y" id="yes_filled_application_before" checked="" <?php if (isset($formData->sixmos) && $formData->sixmos == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_filled_application_before"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="sixmos" value="N" id="no_filled_application_before" <?php if (isset($formData->sixmos) && $formData->sixmos == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_filled_application_before"> No</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label>If yes, what was the date you entered into the U.S.? (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="entered_date" placeholder="Select Date" value="<?php if (isset($formData) && !empty($formData->entered_date)){echo $formData->entered_date;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="entered_date_from" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->entered_date_from)){echo $formData->entered_date_from;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <label>To (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="exit_date_to" placeholder="Date To" value="<?php if (isset($formData) && !empty($formData->exit_date_to)){echo $formData->exit_date_to;} ?>">
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-12">
            <label>What was your immigration status at the time of entry into the U.S.?</label>
            <input type="text" class="form-control" name="immigration_status" placeholder="Immigration Status" value="<?php if (isset($formData) && !empty($formData->immigration_status)){echo $formData->immigration_status;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group mt-10 mb-3 mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>7. Have you EVER filed an application or petition for Immigration Benefits with the U.S. Government or has one ever been filed on your behalf?</strong></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="filed_application_for_immigration_benifit" value="Y" checked="" <?php if (isset($formData->filed_application_for_immigration_benifit) && $formData->filed_application_for_immigration_benifit == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_filed_application_for_immigration_benifit"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="filed_application_for_immigration_benifit" value="N" <?php if (isset($formData->filed_application_for_immigration_benifit) && $formData->filed_application_for_immigration_benifit == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_filed_application_for_immigration_benifit"> No</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-4">
            <label><strong> Type of application or petition filed:</strong></label>
            <input type="text" class="form-control" name="application_type_filed_1" id="application_type_filed" placeholder="application type" value="<?php if (isset($formData) && !empty($formData->application_type_filed_1)){echo $formData->application_type_filed_1;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Location where you filed the application or petition: </strong></label>
            <input type="text" class="form-control" name="filed_application_location_1" placeholder="for example, USCIS office or Port-of-Entry" value="<?php if (isset($formData) && !empty($formData->filed_application_location_1)){echo $formData->filed_application_location_1;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Describe the outcome of the application or petition: </strong></label>
            <input type="text" class="form-control" name="filed_application_outcome_1" placeholder="for example, approved, denied, or is pending" value="<?php if (isset($formData) && !empty($formData->filed_application_outcome_1)){echo $formData->filed_application_outcome_1;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="application_type_filed_2" id="application_type_filed" placeholder="application type" value="<?php if (isset($formData) && !empty($formData->application_type_filed_2)){echo $formData->application_type_filed_2;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="filed_application_location_2" placeholder="for example, USCIS office or Port-of-Entry" value="<?php if (isset($formData) && !empty($formData->filed_application_location_2)){echo $formData->filed_application_location_2;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="filed_application_outcome_2" placeholder="for example, approved, denied, or is pending" value="<?php if (isset($formData) && !empty($formData->filed_application_outcome_2)){echo $formData->filed_application_outcome_2;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="application_type_filed_3" id="application_type_filed" placeholder="application type" value="<?php if (isset($formData) && !empty($formData->application_type_filed_3)){echo $formData->application_type_filed_3;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="filed_application_location_3" placeholder="for example, USCIS office or Port-of-Entry" value="<?php if (isset($formData) && !empty($formData->filed_application_location_3)){echo $formData->filed_application_location_3;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="filed_application_outcome_3" placeholder="for example, approved, denied, or is pending" value="<?php if (isset($formData) && !empty($formData->filed_application_outcome_3)){echo $formData->filed_application_outcome_3;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="application_type_filed_4" id="application_type_filed" placeholder="application type" value="<?php if (isset($formData) && !empty($formData->application_type_filed_4)){echo $formData->application_type_filed_4;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="filed_application_location_4" placeholder="for example, USCIS office or Port-of-Entry" value="<?php if (isset($formData) && !empty($formData->filed_application_location_4)){echo $formData->filed_application_location_4;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="filed_application_outcome_4" placeholder="for example, approved, denied, or is pending" value="<?php if (isset($formData) && !empty($formData->filed_application_outcome_4)){echo $formData->filed_application_outcome_4;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="application_type_filed_5" id="application_type_filed" placeholder="application type" value="<?php if (isset($formData) && !empty($formData->application_type_filed_5)){echo $formData->application_type_filed_5;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="filed_application_location_5" placeholder="for example, USCIS office or Port-of-Entry" value="<?php if (isset($formData) && !empty($formData->filed_application_location_5)){echo $formData->filed_application_location_5;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="filed_application_outcome_5" placeholder="for example, approved, denied, or is pending" value="<?php if (isset($formData) && !empty($formData->filed_application_outcome_5)){echo $formData->filed_application_outcome_5;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="mb-md-2 col-lg-12">
            <label class="mr-2p"><strong>8. Have you EVER been denied or refused an immigration benefit by the U.S. Government or had a benefit revoked or terminated (including but not limited to Visas)?</strong></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="immigration_refused" value="Y" id="yes_immigration_refused" checked="" <?php if (isset($formData->immigration_refused) && $formData->immigration_refused == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_immigration_refused"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="immigration_refused" value="N" <?php if (isset($formData->immigration_refused) && $formData->immigration_refused == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_immigration_refused"> No</label>
            </div>
            <textarea rows="2" cols="3" class="form-control" name="immigration_textarea8" placeholder="" value="<?php if (isset($formData) && !empty($formData->immigration_textarea8)){echo $formData->immigration_textarea8;} ?>"></textarea>
        </div>
    </div>
    <div class="row mb-10 text-center">
        <div class="col-lg-12">
            <label>* This section for TORONTO court convictions. Please skip if your hearing was <u>not</u> in Toronto.</label>
        </div>
    </div>
    <div class="row form-group text-center">
        <div class="col-lg-12">
            <h5><strong>COURT LOCATIONS </strong>(please identify which Toronto Court locations you were convicted at from the list below)</h5>
        </div>
    </div>
    <div class="row mb-10">
        <div class="col-lg-4">
            <strong>Toronto Court Locations</strong>
        </div>
        <div class="col-lg-2">
            <strong>Select all applicable boxes</strong>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-4">
            <label class="mr-2p">311 Jarvis St. Toronto, ON M5B 2C4</label>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="jarvis_st_court" value="Y" id="yes_jarvis_st_court" checked="">
                <label class="custom-control-label" for="yes_jarvis_st_court"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="jarvis_st_court" value="N" id="no_jarvis_st_court">
                <label class="custom-control-label" for="no_jarvis_st_court"> No</label>
            </div>
        </div>
        <div class="col-lg-4">
            <label class="mr-2p">361 University Avenue, Toronto, ON M5G 1T3</label>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="university_avenue_court" value="Y" id="yes_university_avenue_court" checked="">
                <label class="custom-control-label" for="yes_university_avenue_court"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="university_avenue_court" value="N" id="no_university_avenue_court">
                <label class="custom-control-label" for="no_university_avenue_court"> No</label>
            </div>
        </div>
        <div class="col-lg-4">
            <label class="mr-2p">1911 Eglinton Avenue East, Toronto, ON M1L 4P4</label>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="aglinton_avenue_court" value="Y" id="yes_aglinton_avenue_court" checked="">
                <label class="custom-control-label" for="yes_aglinton_avenue_court"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="aglinton_avenue_court" value="N" id="no_aglinton_avenue_court">
                <label class="custom-control-label" for="no_aglinton_avenue_court"> No</label>
            </div>
        </div>
        <div class="col-lg-4">
            <label class="mr-2p">444 Yonge St. (College Park) – 2nd Floor, Toronto, ON M5B 2H4</label>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="yonge_st_court" value="Y" id="yes_yonge_st_court" checked="">
                <label class="custom-control-label" for="yes_yonge_st_court"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="yonge_st_court" value="N" id="no_yonge_st_court">
                <label class="custom-control-label" for="no_yonge_st_court"> No</label>
            </div>
        </div>
        <div class="col-lg-4">
            <label class="mr-2p">1000 Finch Avenue West, Toronto, ON M3J 2V5</label>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="1000_finch_avenue_court" value="Y" checked="">
                <label class="custom-control-label" for="yes_1000_finch_avenue_court"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="1000_finch_avenue_court" value="N" id="no_1000_finch_avenue_court">
                <label class="custom-control-label" for="no_1000_finch_avenue_court"> No</label>
            </div>
        </div>
        <div class="col-lg-4">
            <label class="mr-2p">2201 Finch Avenue West, Toronto, ON M9M 2Y9</label>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="2201_finch_avenue_court" value="Y" checked="">
                <label class="custom-control-label" for="yes_2201_finch_avenue_court"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="2201_finch_avenue_court" value="N" id="no_2201_finch_avenue_court">
                <label class="custom-control-label" for="no_2201_finch_avenue_court"> No</label>
            </div>
        </div>
        <div class="col-lg-4">
            <label class="mr-2p">60 Queen St. West (Old City Hall), Toronto, ON M5H 2M4</label>
        </div>
        <div class="col-lg-2">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="queen_st_west_court" value="Y" id="yes_queen_st_west_court">
                <label class="custom-control-label" for="yes_queen_st_west_court"> Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="queen_st_west_court" value="N" id="no_queen_st_west_court" checked="">
                <label class="custom-control-label" for="no_queen_st_west_court"> No</label>
            </div>
        </div>
    </div>
</div>
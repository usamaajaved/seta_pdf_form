<?php
$query1 = "SELECT * from countries";
$result1 = mysqli_query($con_str,$query1);
// edited
$query2 = "SELECT * from countries";
$result2 = mysqli_query($con_str,$query2);

$query3 = "SELECT * from countries";
$result3 = mysqli_query($con_str,$query3);

$query4 = "SELECT * from countries";
$result4 = mysqli_query($con_str,$query4);

$query5 = "SELECT * from countries";
$result5 = mysqli_query($con_str,$query5);

$query = "SELECT * from countries";
$result = mysqli_query($con_str,$query);
?>
<div class="col-md-12">
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-6 text-center">
            <label class="mb-17 mr-2p">Are you currently employed:</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="employed" value="Y" id="yes_employee" checked="" <?php if (isset($formData->employed) && $formData->employed == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_employee"> Yes</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="employed" value="N" id="no_employee" <?php if (isset($formData->employed) && $formData->employed == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_employee"> No</label>
            </div>
        </div>
        <div class="form-group mb-3 mb-md-2 col-lg-6">
            <div class="custom-control custom-control-right custom-checkbox custom-control-inline">
                <input type="checkbox" name="Employment" class="custom-control-input" id="custom_checkbox_inline_right_unchecked" <?php if (isset($formData->Employment) && $formData->Employment == 'on') {echo 'checked';}?>>
                <label class="custom-control-label position-static" for="custom_checkbox_inline_right_unchecked">If you have never worked, please indicate here</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-12">
            <label>1. Full Name of Employer:</label>
            <input type="text" class="form-control" name="emp_name" placeholder="Employer Name" value="<?php if (isset($formData) && !empty($formData->emp_name)){echo $formData->emp_name;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Address of Employer Street Number and Name:</label>
            <input type="text" class="form-control" name="emp_address" id="emp_address" placeholder="Employer Address" value="<?php if (isset($formData) && !empty($formData->emp_address)){echo $formData->emp_address;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Unit:</label>
            <input type="text" class="form-control" name="emp_unit" id="emp_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->emp_unit)){echo $formData->emp_unit;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="emp_city" id="emp_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->emp_city)){echo $formData->emp_city;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="emp_province" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->emp_province)){echo $formData->emp_province;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="emp_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result1)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->emp_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>Occupation:</label>
            <input type="text" class="form-control" name="emp_occupation" placeholder="Occupation" value="<?php if (isset($formData) && !empty($formData->emp_occupation)){echo $formData->emp_occupation;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_from_date" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->emp_from_date)){echo $formData->emp_from_date;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <label>To Present:</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_to_date" placeholder="Date To" value="<?php if (isset($formData) && !empty($formData->emp_to_date)){echo $formData->emp_to_date;} ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-12">
            <label>2. Full Name of Employer:</label>
            <input type="text" class="form-control" name="emp_name2" placeholder="Employer Name" value="<?php if (isset($formData) && !empty($formData->emp_name2)){echo $formData->emp_name2;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Address of Employer Street Number and Name:</label>
            <input type="text" class="form-control" name="emp_address2" id="emp_address" placeholder="Employer Address" value="<?php if (isset($formData) && !empty($formData->emp_address2)){echo $formData->emp_address2;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Unit:</label>
            <input type="text" class="form-control" name="emp_unit2" id="emp_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->emp_unit2)){echo $formData->emp_unit2;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="emp_city2" id="emp_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->emp_city2)){echo $formData->emp_city2;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="emp_province2" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->emp_province2)){echo $formData->emp_province2;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="emp_country2" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result2)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->emp_country2 == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>Occupation:</label>
            <input type="text" class="form-control" name="emp_occupation2" placeholder="Occupation" value="<?php if (isset($formData) && !empty($formData->emp_occupation2)){echo $formData->emp_occupation2;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_from_date2" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->emp_from_date2)){echo $formData->emp_from_date2;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <label>To Present:</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_to_date2" placeholder="Date To" value="<?php if (isset($formData) && !empty($formData->emp_to_date2)){echo $formData->emp_to_date2;} ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-12">
            <label>3. Full Name of Employer:</label>
            <input type="text" class="form-control" name="emp_name3" placeholder="Employer Name" value="<?php if (isset($formData) && !empty($formData->emp_name3)){echo $formData->emp_name3;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Address of Employer Street Number and Name:</label>
            <input type="text" class="form-control" name="emp_address3" id="emp_address" placeholder="Employer Address" value="<?php if (isset($formData) && !empty($formData->emp_address3)){echo $formData->emp_address3;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Unit:</label>
            <input type="text" class="form-control" name="emp_unit3" id="emp_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->emp_unit3)){echo $formData->emp_unit3;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="emp_city3" id="emp_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->emp_city3)){echo $formData->emp_city3;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="emp_province3" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->emp_province3)){echo $formData->emp_province3;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="emp_country3" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result3)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->emp_country3 == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>Occupation:</label>
            <input type="text" class="form-control" name="emp_occupation3" placeholder="Occupation" value="<?php if (isset($formData) && !empty($formData->emp_occupation3)){echo $formData->emp_occupation3;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_from_date3" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->emp_from_date3)){echo $formData->emp_from_date3;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <label>To Present:</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_to_date3" placeholder="Date To" value="<?php if (isset($formData) && !empty($formData->emp_to_date3)){echo $formData->emp_to_date3;} ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-12">
            <label>4. Full Name of Employer:</label>
            <input type="text" class="form-control" name="emp_name4" placeholder="Employer Name" value="<?php if (isset($formData) && !empty($formData->emp_name4)){echo $formData->emp_name4;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Address of Employer Street Number and Name:</label>
            <input type="text" class="form-control" name="emp_address4" id="emp_address" placeholder="Employer Address" value="<?php if (isset($formData) && !empty($formData->emp_address4)){echo $formData->emp_address4;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Unit:</label>
            <input type="text" class="form-control" name="emp_unit4" id="emp_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->emp_unit4)){echo $formData->emp_unit4;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="emp_city4" id="emp_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->emp_city4)){echo $formData->emp_city4;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="emp_province4" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->emp_province4)){echo $formData->emp_province4;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="emp_country4" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result4)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->emp_country4 == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>Occupation:</label>
            <input type="text" class="form-control" name="emp_occupation4" placeholder="Occupation" value="<?php if (isset($formData) && !empty($formData->emp_occupation4)){echo $formData->emp_occupation4;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_from_date4" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->emp_from_date4)){echo $formData->emp_from_date4;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <label>To Present:</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_to_date4" placeholder="Date To" value="<?php if (isset($formData) && !empty($formData->emp_to_date4)){echo $formData->emp_to_date4;} ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-12">
            <label>5. Full Name of Employer:</label>
            <input type="text" class="form-control" name="emp_name5" placeholder="Employer Name" value="<?php if (isset($formData) && !empty($formData->emp_name5)){echo $formData->emp_name5;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Address of Employer Street Number and Name:</label>
            <input type="text" class="form-control" name="emp_address5" id="emp_address" placeholder="Employer Address" value="<?php if (isset($formData) && !empty($formData->emp_address5)){echo $formData->emp_address5;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Unit:</label>
            <input type="text" class="form-control" name="emp_unit5" id="emp_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->emp_unit5)){echo $formData->emp_unit5;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="emp_city5" id="emp_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->emp_city5)){echo $formData->emp_city5;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="emp_province5" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->emp_province5)){echo $formData->emp_province5;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="emp_country5" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result5)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->emp_country5 == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>Occupation:</label>
            <input type="text" class="form-control" name="emp_occupation5" placeholder="Occupation" value="<?php if (isset($formData) && !empty($formData->emp_occupation5)){echo $formData->emp_occupation5;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_from_date5" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->emp_from_date5)){echo $formData->emp_from_date5;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <label>To Present:</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_to_date5" placeholder="Date To" value="<?php if (isset($formData) && !empty($formData->emp_to_date5)){echo $formData->emp_to_date5;} ?>">
            </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-12">
            <label>If you have not been employed for the last 5 years, please provide information of your Last <u>Employer</u>:</label>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-12">
            <label>Full Name of Employer:</label>
            <input type="text" class="form-control" name="emp_name6" placeholder="Employer Name" value="<?php if (isset($formData) && !empty($formData->emp_name6)){echo $formData->emp_name6;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Address of Employer Street Number and Name:</label>
            <input type="text" class="form-control" name="emp_address6" id="emp_address" placeholder="Employer Address" value="<?php if (isset($formData) && !empty($formData->emp_address6)){echo $formData->emp_address6;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Unit:</label>
            <input type="text" class="form-control" name="emp_unit6" id="emp_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->emp_unit6)){echo $formData->emp_unit6;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="emp_city6" id="emp_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->emp_city6)){echo $formData->emp_city6;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="emp_province6" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->emp_province6)){echo $formData->emp_province6;} ?>">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="emp_country6" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->emp_country6 == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label>Occupation:</label>
            <input type="text" class="form-control" name="emp_occupation6" placeholder="Occupation" value="<?php if (isset($formData) && !empty($formData->emp_occupation6)){echo $formData->emp_occupation6;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_from_date6" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->emp_from_date6)){echo $formData->emp_from_date6;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <label>To Present:</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="emp_to_date6" placeholder="Date To" value="<?php if (isset($formData) && !empty($formData->emp_to_date6)){echo $formData->emp_to_date6;} ?>">
            </div>
        </div>
    </div>
</div>
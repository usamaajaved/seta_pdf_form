<!-- edited -->
<?php 
$query = "SELECT * from countries";
$result = mysqli_query($con_str, $query);

$query_nat = "SELECT * from nationalities";
$result_nat = mysqli_query($con_str, $query_nat);

$father_birth_country_query = "SELECT * from countries";
$father_birth_country_result = mysqli_query($con_str, $father_birth_country_query);

$mother_birth_country_query = "SELECT * from countries";
$mother_birth_country_result = mysqli_query($con_str, $mother_birth_country_query);

$father_residence_country_query = "SELECT * from countries";
$father_residence_country_result = mysqli_query($con_str, $father_residence_country_query);

$mother_residence_country_query = "SELECT * from countries";
$mother_residence_country_result = mysqli_query($con_str, $mother_residence_country_query);

$current_spouse_birth_country_query = "SELECT * from countries";
$current_spouse_birth_country_result = mysqli_query($con_str, $current_spouse_birth_country_query);

$former_spouse_birth_country_query = "SELECT * from countries";
$former_spouse_birth_country_result = mysqli_query($con_str, $former_spouse_birth_country_query);

$current_spouse_residence_country_query = "SELECT * from countries";
$current_spouse_residence_country_result = mysqli_query($con_str, $current_spouse_residence_country_query);

$former_spouse_residence_country_query = "SELECT * from countries";
$former_spouse_residence_country_result = mysqli_query($con_str, $former_spouse_residence_country_query);

$current_spouse_marriage_country_query = "SELECT * from countries";
$current_spouse_marriage_country_result = mysqli_query($con_str, $current_spouse_marriage_country_query);

$former_spouse_marriage_country_query = "SELECT * from countries";
$former_spouse_marriage_country_result = mysqli_query($con_str, $former_spouse_marriage_country_query);
?>

<div class="col-md-12">
    <div class="row text-center">
        <div class="form-group col-lg-12">
            <label class="d-block font-weight-semibold"> <strong>CHECK OFF THE BOX THAT IS APPLICABLE TO YOUR APPLICATION</strong></label>
            <div class="custom-control custom-checkbox custom-control-inline" style="margin-left: 40px;">
                <input type="checkbox" class="custom-control-input" id="checkbox1" name="CP" <?php if (isset($formData->CP) && $formData->CP == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="checkbox1"> <strong>Canadian Pardon</strong></label>
            </div>

            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="checkbox2" name="USTW" <?php if (isset($formData->USTW) && $formData->USTW == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="checkbox2"> <strong>U.S. Travel Waiver</strong></label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="checkbox3" name="Both" <?php if (isset($formData->Both) && $formData->Both == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="checkbox3"> <strong>both Pardon & Waiver</strong></label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="checkbox4" name="FileDestruction" <?php if (isset($formData->FileDestruction) && $formData->FileDestruction == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="checkbox4"> <strong>File Destruction</strong></label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="checkbox5" name="TRP" <?php if (isset($formData->TRP) && $formData->TRP == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="checkbox5"> <strong>TRP</strong></label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label><strong>Family Name: </strong><span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="fname" placeholder="Family Name" value="<?php if (isset($formData) && !empty($formData->fname)){echo $formData->fname;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Given Name: </strong><span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="gname" placeholder="Given Name" value="<?php if (isset($formData) && !empty($formData->gname)){echo $formData->gname;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Middle Name: </strong></label>
            <input type="text" class="form-control" name="mname" placeholder="Middle name" value="<?php if (isset($formData) && !empty($formData->mname)){echo $formData->mname;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label><strong>Other Names Used:</strong></label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_1" placeholder="E.g. birth name, alias, previous marrige name" value="<?php if (isset($formData) && !empty($formData->oname_1)){echo $formData->oname_1;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_2" placeholder="E.g. birth name, alias, previous marrige name" value="<?php if (isset($formData) && !empty($formData->oname_2)){echo $formData->oname_2;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_3" placeholder="E.g. birth name, alias, previous marrige name" value="<?php if (isset($formData) && !empty($formData->oname_3)){echo $formData->oname_3;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_4" placeholder="E.g. birth name, alias, previous marrige name" value="<?php if (isset($formData) && !empty($formData->oname_4)){echo $formData->oname_4;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_5" placeholder="E.g. birth name, alias, previous marrige name" value="<?php if (isset($formData) && !empty($formData->oname_5)){echo $formData->oname_5;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_6" placeholder="E.g. birth name, alias, previous marrige name" value="<?php if (isset($formData) && !empty($formData->oname_6)){echo $formData->oname_6;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="d-block mb-17 mb-17"><strong>Gender:</strong> <span class="text-danger">*</span></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="gender" value="M" id="custom_radio_inline_unchecked" checked <?php if (isset($formData->gender) && $formData->gender == 'M') {echo 'checked';}?>>
                <label class="custom-control-label" for="custom_radio_inline_unchecked"> Male</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="gender" value="F" id="custom_radio_inline_checked" <?php if (isset($formData->gender) && $formData->gender == 'F') {echo 'checked';}?>>
                <label class="custom-control-label" for="custom_radio_inline_checked"> Female</label>
            </div>
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Date of Birth: </strong><span class="text-danger">*</span></label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility required" name="dob" placeholder="Date of Birth" value="<?php if (isset($formData) && !empty($formData->dob)){echo $formData->dob;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Nationality: </strong><span class="text-danger">*</span></label>
            <select data-placeholder="Enter Nationality" class="form-control form-control-select2 required" data-fouc name="nationality">
                <option value="Canadian">Canadian</option>
                <?php while ($nationalities = mysqli_fetch_array($result_nat)) { ?>
                    <option value="<?php echo $nationalities['nationality']; ?>" <?php if (isset($formData) && $formData->nationality == $nationalities['nationality']){echo 'selected="selected"';} ?>>
                        <?php echo $nationalities['nationality']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label><strong>City: </strong><span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="city" placeholder="Enter City" value="<?php if (isset($formData) && !empty($formData->city)){echo $formData->city;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label>State: <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="state" placeholder="Enter State" value="<?php if (isset($formData) && !empty($formData->state)){echo $formData->state;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Country: </strong><span class="text-danger">*</span></label>
            <select data-placeholder="Select Country" class="form-control form-control-select2 required" data-fouc name="country">
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->country == $countries['name']){echo 'selected="selected"';}elseif (!isset($formData) && $countries['name'] == 'Canada') {echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label><strong>Home Phone Number: </strong><span class="text-danger">*</span></label>
            <input type="number" class="form-control required" name="home" placeholder="Enter Home Number" value="<?php if (isset($formData) && !empty($formData->home)){echo $formData->home;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Cell Number: </strong><span class="text-danger">*</span></label>
            <input type="number" class="form-control required" name="cell" placeholder="Enter Cell Number" value="<?php if (isset($formData) && !empty($formData->cell)){echo $formData->cell;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Work Phone Number: </strong><span class="text-danger">*</span></label>
            <input type="number" class="form-control required" name="work" placeholder="Enter Work Number" value="<?php if (isset($formData) && !empty($formData->work)){echo $formData->work;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label><strong>Primary Email Address: </strong><span class="text-danger">*</span></label>
            <input type="email" class="form-control required" name="email" placeholder="Enter Your Mail" value="<?php if (isset($formData) && !empty($formData->email)){echo $formData->email;} ?>">
        </div>
        <div class="form-group col-lg-6">
            <label><strong>Secondary Mail Address</strong>:</label>
            <input type="text" class="form-control" name="email2" placeholder="Enater Secondary Mail" value="<?php if (isset($formData) && !empty($formData->email2)){echo $formData->email2;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-4">
            <label class="d-block mb-17"><strong>Driver’s License:</strong></label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="d_license" value="Y" id="yes_license" <?php if (isset($formData->d_license) && $formData->d_license == 'Y') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_license"> Yes</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="d_license" value="N" id="no_license" checked="" <?php if (isset($formData->d_license) && $formData->d_license == 'N') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_license"> No</label>
            </div>
        </div>
        <div class="form-group col-lg-4">
            <label><strong>License Number:</strong></label>
            <input type="text" class="form-control" name="license_no" id="license_no" placeholder="Enter License Number" disabled="" value="<?php if (isset($formData) && !empty($formData->license_no)){echo $formData->license_no;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label><strong>Province of Issue: </strong></label>
            <input type="text" class="form-control" name="license_province" id="license_province" placeholder="Enter Province" disabled="" value="<?php if (isset($formData) && !empty($formData->license_province)){echo $formData->license_province;} ?>">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label><strong>U.S Social Security Number: </strong><span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="security_no" placeholder="Social Security Number" value="<?php if (isset($formData) && !empty($formData->security_no)){echo $formData->security_no;} ?>">
        </div>
        <div class="form-group col-lg-6">
            <label><strong>U.S Alien Registration Number: </strong><span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="alien_no" placeholder="Alien Registration Number" value="<?php if (isset($formData) && !empty($formData->alien_no)){echo $formData->alien_no;} ?>">
        </div>
    </div>

    <!---------Father & Mother Details Starts------------>

    <div class="row form-group">
        <div class="col-lg-6 text-center">
            <strong>Father Details:</strong>
        </div>
        <div class="col-lg-6 text-center">
            <strong>Mother Details:</strong>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Family Name: </strong><span class="text-danger">*</span></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control required" name="father_family_name" placeholder="Father's Family Name" value="<?php if (isset($formData) && !empty($formData->father_family_name)){echo $formData->father_family_name;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control required" name="mother_family_name" placeholder="Mother's Family Name" value="<?php if (isset($formData) && !empty($formData->mother_family_name)){echo $formData->mother_family_name;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>First Name: </strong><span class="text-danger">*</span></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control required" name="father_first_name" placeholder="Father's First Name" value="<?php if (isset($formData) && !empty($formData->father_first_name)){echo $formData->father_first_name;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control required" name="mother_first_name" placeholder="Mother's First Name" value="<?php if (isset($formData) && !empty($formData->mother_first_name)){echo $formData->mother_first_name;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Date of Birth (MM/DD/YYYY): </strong><span class="text-danger">*</span></label>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control required pickadate-accessibility" name="father_dob" placeholder="Father's Date of Birth" value="<?php if (isset($formData) && !empty($formData->father_dob)){echo $formData->father_dob;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control required pickadate-accessibility" name="mother_dob" placeholder="Mother's Date of Birth" value="<?php if (isset($formData) && !empty($formData->mother_dob)){echo $formData->mother_dob;} ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>City of Birth: </strong><span class="text-danger">*</span></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control required" name="father_birth_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->father_birth_city)){echo $formData->father_birth_city;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control required" name="mother_birth_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->mother_birth_city)){echo $formData->mother_birth_city;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Country of Birth: </strong><span class="text-danger">*</span></label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" class="form-control required form-control-select2" name="father_birth_country" data-fouc >
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_array($father_birth_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->father_birth_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" class="form-control required form-control-select2" name="mother_birth_country" data-fouc >
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_array($mother_birth_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->mother_birth_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>City of Residence: </strong><span class="text-danger">*</span></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control required" name="father_residence_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->father_residence_city)){echo $formData->father_residence_city;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control required" name="mother_residence_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->mother_residence_city)){echo $formData->mother_residence_city;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Country of Residence: </strong><span class="text-danger">*</span></label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" class="form-control required form-control-select2" data-fouc name="father_residence_country">
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_array($father_residence_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->father_residence_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" class="form-control required form-control-select2" name="mother_residence_country" data-fouc >
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_array($mother_residence_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->mother_residence_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>

    <!---------Current & Former Details Starts------------>

    <div class="row text-center">
        <div class="col-lg-12">
            <label><strong>Complete this section only if you are currently married (If not, write N/A) or if you were previously married (If not, write N/A)</strong></label>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-6 text-center">
            <strong>Current Spouse:</strong>
        </div>
        <div class="col-lg-6 text-center">
            <strong>Former Spouse:</strong>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Family Name:</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="cfamily_name" placeholder="Current Spouse's Family Name" value="<?php if (isset($formData) && !empty($formData->cfamily_name)){echo $formData->cfamily_name;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="ffamily_name" placeholder="Former Spouse's Family Name" value="<?php if (isset($formData) && !empty($formData->ffamily_name)){echo $formData->ffamily_name;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>First Name:</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="c_first_name" placeholder="Current Spouse's First Name" value="<?php if (isset($formData) && !empty($formData->c_first_name)){echo $formData->c_first_name;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="f_f_name" placeholder="Former Spouse's First Name" value="<?php if (isset($formData) && !empty($formData->f_f_name)){echo $formData->f_f_name;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Date of Birth (MM/DD/YYYY):</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="c_dob" placeholder="Current Spouse's DOB" value="<?php if (isset($formData) && !empty($formData->c_dob)){echo $formData->c_dob;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="f_dob" placeholder="Former Spouse's DOB" value="<?php if (isset($formData) && !empty($formData->f_dob)){echo $formData->f_dob;} ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>City of Birth:</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="current_spouse_birth_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->current_spouse_birth_city)){echo $formData->current_spouse_birth_city;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="former_spouse_birth_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->former_spouse_birth_city)){echo $formData->former_spouse_birth_city;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Country of Birth:</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="current_spouse_birth_country" class="form-control select" data-fouc>
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_assoc($current_spouse_birth_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->current_spouse_birth_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="former_spouse_birth_country" class="form-control select" data-fouc>
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_assoc($former_spouse_birth_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->former_spouse_birth_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Date of Marriage (MM/DD/YYYY): </strong></label>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="c_dom" placeholder="Current Spouse's Date of Marriage" value="<?php if (isset($formData) && !empty($formData->c_dom)){echo $formData->c_dom;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="f_dom" placeholder="Former Spouse's Date of Marriage" value="<?php if (isset($formData) && !empty($formData->f_dom)){echo $formData->f_dom;} ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>City or Town of Marriage:</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="current_spouse_marriage_city" placeholder="Marriage City" value="<?php if (isset($formData) && !empty($formData->current_spouse_marriage_city)){echo $formData->current_spouse_marriage_city;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="former_spouse_marriage_city" placeholder="Marriage City" value="<?php if (isset($formData) && !empty($formData->former_spouse_marriage_city)){echo $formData->former_spouse_marriage_city;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>State or Province of Marriage:</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="current_spouse_marriage_state" placeholder="Marriage Province" value="<?php if (isset($formData) && !empty($formData->current_spouse_marriage_state)){echo $formData->current_spouse_marriage_state;} ?>">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="former_spouse_marriage_state" placeholder="Marriage Province" value="<?php if (isset($formData) && !empty($formData->former_spouse_marriage_state)){echo $formData->former_spouse_marriage_state;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label><strong>Country of Marriage:</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="current_spouse_marriage_country" class="form-control select" data-fouc>
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_assoc($current_spouse_marriage_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->current_spouse_marriage_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="former_spouse_marriage_country" class="form-control select" data-fouc>
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_assoc($former_spouse_marriage_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->former_spouse_marriage_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-7 pt-10">
            <label><strong>Date of Termination of Marriage (MM/DD/YYYY):</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="t_m_dob" placeholder="Marriage Termination Date" value="<?php if (isset($formData) && !empty($formData->t_m_dob)){echo $formData->t_m_dob;} ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-7 pt-10">
            <label><strong>Place of Termination of Marriage (MM/DD/YYYY):</strong></label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="terminate_marriage" placeholder="Place" value="<?php if (isset($formData) && !empty($formData->terminate_marriage)){echo $formData->terminate_marriage;} ?>">
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#no_license").click(function() {
        $("#license_no").attr('disabled', true);
        $("#license_province").attr('disabled', true);
    });
    $("#yes_license").click(function() {
        $("#license_no").removeAttr('disabled');
        $("#license_province").removeAttr('disabled');
    });
</script>
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
            <label class="d-block font-weight-semibold"> CHECK OFF THE BOX THAT IS APPLICABLE TO YOUR APPLICATION</label>
            <div class="custom-control custom-checkbox custom-control-inline" style="margin-left: 40px;">
                <input type="checkbox" class="custom-control-input" id="checkbox1" name="CP">
                <label class="custom-control-label" for="checkbox1"> Canadian Pardon</label>
            </div>

            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="checkbox2" name="USTW">
                <label class="custom-control-label" for="checkbox2"> U.S. Travel Waiver</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="checkbox3" name="Both">
                <label class="custom-control-label" for="checkbox3"> both Pardon & Waiver</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="checkbox4" name="FileDestruction">
                <label class="custom-control-label" for="checkbox4"> File Destruction</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="checkbox5" name="TRP">
                <label class="custom-control-label" for="checkbox5"> TRP</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Family Name:</label>
            <input type="text" class="form-control" name="fname" placeholder="Your Name ">
        </div>
        <div class="form-group col-lg-4">
            <label>Given Name:</label>
            <input type="text" class="form-control" name="gname" placeholder="Given Name ">
        </div>
        <div class="form-group col-lg-4">
            <label>Middle Name:</label>
            <input type="text" class="form-control" name="mname" placeholder="Middle name ">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label>Other Names Used:</label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_1" placeholder="E.g. birth name, alias, previous marrige name">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_2" placeholder="E.g. birth name, alias, previous marrige name">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_3" placeholder="E.g. birth name, alias, previous marrige name">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_4" placeholder="E.g. birth name, alias, previous marrige name">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_5" placeholder="E.g. birth name, alias, previous marrige name">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="oname_6" placeholder="E.g. birth name, alias, previous marrige name">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label class="d-block mb-17 mb-17">Gender:</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="gender" value="M" id="custom_radio_inline_unchecked" checked="">
                <label class="custom-control-label" for="custom_radio_inline_unchecked"> Male</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="gender" value="F" id="custom_radio_inline_checked">
                <label class="custom-control-label" for="custom_radio_inline_checked"> Female</label>
            </div>
        </div>
        <div class="form-group col-lg-4">
            <label>Date Of Birth:</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="dob" value="1 January, 1960">
            </div>
        </div>
        <div class="form-group col-lg-4">
            <label>Nationality:</label>
            <select data-placeholder="Enter Nationality" class="form-control select" data-fouc name="nationality">
                <option></option>
                <?php while ($nationalities = mysqli_fetch_array($result_nat)) { ?>
                    <option value="<?php echo $nationalities['nationality']; ?>">
                        <?php echo $nationalities['nationality']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>City:</label>
            <input type="text" class="form-control" name="city" placeholder="Enter City">
        </div>
        <div class="form-group col-lg-4">
            <label>State:</label>
            <input type="text" class="form-control" name="state" placeholder="Enter State">
        </div>
        <div class="form-group col-lg-4">
            <label>Country:</label>
            <select data-placeholder="Select Country" class="form-control select" data-fouc name="country">
                <option></option>
                <?php while ($countries = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-4">
            <label>Home Phone Number:</label>
            <input type="number" class="form-control" name="home" placeholder="Enter Home Number">
        </div>
        <div class="form-group col-lg-4">
            <label>Cell Number:</label>
            <input type="number" class="form-control" name="cell" placeholder="Enter Cell Number">
        </div>
        <div class="form-group col-lg-4">
            <label>Work Phone Number:</label>
            <input type="number" class="form-control" name="work" placeholder="Enter Work Number">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label>Primary Email Address:</label>
            <input type="email" class="form-control required" name="email" placeholder="Enter Your Mail">
        </div>
        <div class="form-group col-lg-6">
            <label>Secondary Mail Address:</label>
            <input type="text" class="form-control" name="email2" placeholder="Enater Secondary Mail ">
        </div>
    </div>
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-4">
            <label class="d-block mb-17">Driver’s License:</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="d_license" value="Y" id="yes_license">
                <label class="custom-control-label" for="yes_license"> Yes</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="d_license" value="N" id="no_license">
                <label class="custom-control-label" for="no_license"> No</label>
            </div>
        </div>
        <div class="form-group col-lg-4">
            <label>License Number:</label>
            <input type="text" class="form-control" name="license_no" id="license_no" placeholder="Enter License Number" disabled="">
        </div>
        <div class="form-group col-lg-4">
            <label>Province of issue:</label>
            <input type="text" class="form-control" name="license_province" id="license_province" placeholder="Enter Province" disabled="">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>U.S Social Security Number:</label>
            <input type="text" class="form-control" name="security_no" placeholder="Social Security Number">
        </div>
        <div class="form-group col-lg-6">
            <label>U.S Alien Registration Number:</label>
            <input type="text" class="form-control" name="alien_no" placeholder="Alien Registration Number">
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
            <label>Family Name:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="father_family_name" placeholder="Family Name">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="mother_family_name" placeholder="Family Name">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>First Name:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="father_first_name" placeholder="First Name">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="mother_famliy_name" placeholder="First Name">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>Date of Birth (MM/DD/YYYY):</label>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="father_dob" value="">
            </div>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="mother_dob" value="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>City of Birth:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="father_birth_city" placeholder="City">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="mother_birth_city" placeholder="City">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>Country of Birth:</label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" class="form-control select" name="father_birth_country" data-fouc name="country">
                <option></option>
                <?php while ($countries = mysqli_fetch_array($father_birth_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" class="form-control select" name="mother_birth_country" data-fouc name="country">
                <option></option>
                <?php while ($countries = mysqli_fetch_array($mother_birth_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>City of Residence:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="father_residence_city" placeholder="City">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="mother_residence_city" placeholder="City">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>Country of Residence:</label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" class="form-control select" name="father_residence_country" data-fouc name="country">
                <option></option>
                <?php while ($countries = mysqli_fetch_array($father_residence_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" class="form-control select" name="mother_residence_country" data-fouc name="country">
                <option></option>
                <?php while ($countries = mysqli_fetch_array($mother_residence_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>

    <!---------Current & Former Details Starts------------>

    <div class="row text-center">
        <div class="col-lg-12">
            <label>Complete this section only if you are currently married (If not, write N/A) or if you were previously married (If not, write N/A)</label>
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
            <label>Family Name:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="cfamily_name" placeholder="Family Name">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="ffamily_name" placeholder="Family Name">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>First Name:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="c_first_name" placeholder="First Name">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="f_f_name" placeholder="First Name">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>Date of Birth (MM/DD/YYYY):</label>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="f_dob" value="">
            </div>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="m_dob" value="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>City of Birth:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="current_spouse_birth_city" placeholder="City">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="former_spouse_birth_city" placeholder="City">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>Country of Birth:</label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="current_spouse_birth_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($current_spouse_birth_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="former_spouse_birth_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($former_spouse_birth_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>City of Residence:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="current_spouse_residence_city" placeholder="City">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="former_spouse_residence_city" placeholder="City">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>Country of Residence:</label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="current_spouse_residence_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($current_spouse_residence_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="former_spouse_residence_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($former_spouse_residence_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>City or Town of Marriage:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="current_spouse_marriage_city" placeholder="Marriage City">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="former_spouse_marriage_city" placeholder="Marriage City">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>State or Province of Marriage:</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="current_spouse_marriage_state" placeholder="Marriage Province">
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="former_spouse_marriage_state" placeholder="Marriage Province">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2 pt-10">
            <label>Country of Marriage:</label>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="current_spouse_marriage_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($current_spouse_marriage_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-5">
            <select data-placeholder="Select Country" name="former_spouse_marriage_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($former_spouse_marriage_country_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-7 pt-10">
            <label>Date of Termination of Marriage (MM/DD/YYYY):</label>
        </div>
        <div class="form-group col-lg-5">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="m_dob" value="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-7 pt-10">
            <label>Place of Termination of Marriage (MM/DD/YYYY):</label>
        </div>
        <div class="form-group col-lg-5">
            <input type="text" class="form-control" name="former_spouse_marriage_country" placeholder="Place">
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
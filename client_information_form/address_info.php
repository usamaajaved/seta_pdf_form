<?php 
$query = "SELECT * from countries";
$result = mysqli_query($con_str,$query);

$query1 = "SELECT * from countries";
$result1 = mysqli_query($con_str,$query1);
?>
<div class="col-md-12">
	<div class="row">
        <div class="form-group col-lg-8">
            <label>Current Home Address: <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="current_address" placeholder="Current Address" value="<?php if (isset($formData) && !empty($formData->current_address)){echo $formData->current_address;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit: <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="current_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->current_unit)){echo $formData->current_unit;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <label>City: <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="current_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->current_city)){echo $formData->current_city;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Province: <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="current_province" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->current_province)){echo $formData->current_province;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Postal Code: <span class="text-danger">*</span></label>
            <input type="text" class="form-control required" name="current_postal" placeholder="Postal Code" value="<?php if (isset($formData) && !empty($formData->current_postal)){echo $formData->current_postal;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Country: <span class="text-danger">*</span></label>
            <select data-placeholder="Select Country" name="current_country" class="form-control required form-control-select2" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->current_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label>When did you move to this address? <span class="text-danger">*</span></label>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>From (MM/DD/YYYY): <span class="text-danger">*</span></label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control required pickadate-accessibility" name="current_date_from" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->current_date_from)){echo $formData->current_date_from;} ?>">
            </div>
            <!-- <input type="text" class="form-control required" name="current_date_from" placeholder="From"> -->
        </div>
        <div class="form-group col-lg-6">
            <label>To: </label>
            <input type="text" class="form-control" name="current_date_present" placeholder="Present" readonly="">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-8">
            <label>Mailing Address:</label>
            <input type="text" class="form-control" name="mail_address" placeholder="Mailing Address" value="<?php if (isset($formData) && !empty($formData->mail_address)){echo $formData->mail_address;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit:</label>
            <input type="text" class="form-control" name="mail_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->mail_unit)){echo $formData->mail_unit;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <label>City:</label>
            <input type="text" class="form-control" name="mail_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->mail_city)){echo $formData->mail_city;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Province:</label>
            <input type="text" class="form-control" name="mail_province" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->mail_province)){echo $formData->mail_province;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="mail_postal" placeholder="Postal Code" value="<?php if (isset($formData) && !empty($formData->mail_postal)){echo $formData->mail_postal;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="mail_country" class="form-control select" data-fouc>
                <?php while ($countries = mysqli_fetch_array($result1)) { ?>
                    <option></option>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->mail_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
</div>
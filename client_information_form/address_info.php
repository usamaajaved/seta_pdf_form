<?php 
$query = "SELECT * from countries";
$result = mysqli_query($con_str,$query);

$query1 = "SELECT * from countries";
$result1 = mysqli_query($con_str,$query1);
?>
<div class="col-md-12">
    <div class="row mb-10">
        <div class="col-lg-12">
            <strong>Current Address Information <span class="text-danger">*</span></strong>
        </div>
    </div>
	<div class="row">
        <div class="form-group col-lg-8">
            <input type="text" class="form-control required" name="current_address" placeholder="Current Address" value="<?php if (isset($formData) && !empty($formData->current_address)){echo $formData->current_address;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control required" name="current_unit" placeholder="Unit Number" value="<?php if (isset($formData) && !empty($formData->current_unit)){echo $formData->current_unit;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <input type="text" class="form-control required" name="current_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->current_city)){echo $formData->current_city;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <input type="text" class="form-control required" name="current_province" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->current_province)){echo $formData->current_province;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <input type="text" class="form-control required" name="current_postal" placeholder="Postal Code" value="<?php if (isset($formData) && !empty($formData->current_postal)){echo $formData->current_postal;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <select data-placeholder="Select Country" name="current_country" class="form-control required form-control-select2" data-fouc>
                <option value="Canadian">Canada</option>
                <?php while ($countries = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->current_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row mb-10">
        <div class="col-lg-12">
            <strong>When did you move to this address? </strong>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control required pickadate-accessibility" name="current_date_from" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->current_date_from)){echo $formData->current_date_from;} ?>">
            </div>
            <!-- <input type="text" class="form-control required" name="current_date_from" placeholder="From"> -->
        </div>
        <div class="form-group col-lg-6">
            <input type="text" class="form-control" name="current_date_present" placeholder="Present" readonly="">
        </div>
    </div>

    <div class="row mb-10">
        <div class="col-lg-12">
            <strong>Mailing Address Information <span class="text-danger">*</span></strong>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-8">
            <input type="text" class="form-control" name="mail_address" placeholder="Mailing Address" value="<?php if (isset($formData) && !empty($formData->mail_address)){echo $formData->mail_address;} ?>">
        </div>
        <div class="form-group col-lg-4">
            <input type="text" class="form-control" name="mail_unit" placeholder="Unit Number" value="<?php if (isset($formData) && !empty($formData->mail_unit)){echo $formData->mail_unit;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <input type="text" class="form-control" name="mail_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->mail_city)){echo $formData->mail_city;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <input type="text" class="form-control" name="mail_province" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->mail_province)){echo $formData->mail_province;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <input type="text" class="form-control" name="mail_postal" placeholder="Postal Code" value="<?php if (isset($formData) && !empty($formData->mail_postal)){echo $formData->mail_postal;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <select data-placeholder="Select Country" name="mail_country" class="form-control select" data-fouc>
                <option value="Canada">Canada</option>
                <?php while ($countries = mysqli_fetch_array($result1)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->mail_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
</div>
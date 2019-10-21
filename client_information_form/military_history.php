<!-- edited -->

<?php 
$query = "SELECT * from countries";
$result = mysqli_query($con_str,$query);
?>
<div class="col-md-12">
    <div class="row mb-10">
        <div class="form-group mb-3 mb-md-2 col-lg-12 text-center">
            <strong class="mb-17 mr-2p">Have you ever been a member of the Canadian Forces?</strong>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force_member" value="Choice1" id="no_member" checked="" <?php if (isset($formData->force_member) && $formData->force_member == 'Choice1') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_member"><strong> No</strong></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force_member" value="2" id="former_member" <?php if (isset($formData->force_member) && $formData->force_member == '2') {echo 'checked';}?>>
                <label class="custom-control-label" for="former_member"><strong> Yes - Former</strong></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force_member" value="2" id="current_member" <?php if (isset($formData->force_member) && $formData->force_member == '2') {echo 'checked';}?>>
                <label class="custom-control-label" for="current_member"><strong> Yes - Current</strong></label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force_member" value="3" id="reserve_member" <?php if (isset($formData->force_member) && $formData->force_member == '3') {echo 'checked';}?>>
                <label  class="custom-control-label" for="reserve_member"><strong> Yes - Former or Current Reserve Member</strong></label>
            </div>
        </div>
    </div>
    <div class="row text-center mb-10">
        <div class="mb-md-2 col-lg-12 text-center">
            <strong class="mb-17 mr-2p">If yes, indicate your Unit’s Level of Service:</strong>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force" id="regular_force" value="Reg" checked="" <?php if (isset($formData->force) && $formData->force == 'Reg') {echo 'checked';}?>>
                <label class="custom-control-label" for="regular_force"> Regular Forces</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force" value="Res" id="reserved_force" <?php if (isset($formData->force) && $formData->force == 'Res') {echo 'checked';}?>>
                <label class="custom-control-label" for="reserved_force"> Reserved Forces</label>
            </div>
        </div>
    </div>
    <div class="row mb-10">
        <div class="col-lg-12">
            <strong>If yes, provide the complete mailing address of your unit: Street Address</strong>
        </div>
    </div>
    <div class="row text-center">
        <div class="form-group mb-3 mb-md-2 col-lg-12">
            <input type="text" class="form-control" name="military_address" id="military_address" placeholder="Address" value="<?php if (isset($formData) && !empty($formData->military_address)){echo $formData->military_address;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <input type="text" class="form-control" name="military_city" placeholder="City" value="<?php if (isset($formData) && !empty($formData->military_city)){echo $formData->military_city;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <input type="text" class="form-control" name="military_province" placeholder="Province" value="<?php if (isset($formData) && !empty($formData->military_province)){echo $formData->military_province;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <input type="text" class="form-control" name="military_postal" placeholder="Postal Code" value="<?php if (isset($formData) && !empty($formData->military_postal)){echo $formData->military_postal;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <select data-placeholder="Select Country" name="military_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $countries['name']; ?>" <?php if (isset($formData) && $formData->military_country == $countries['name']){echo 'selected="selected"';} ?>>
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <input type="text" class="form-control" name="service_num" placeholder="Military / Service ID Number" value="<?php if (isset($formData) && !empty($formData->service_num)){echo $formData->service_num;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <input type="text" class="form-control" name="military_unit" placeholder="Unit" value="<?php if (isset($formData) && !empty($formData->military_unit)){echo $formData->military_unit;} ?>">
        </div>
        <div class="form-group col-lg-3">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="military_from" placeholder="Date From" value="<?php if (isset($formData) && !empty($formData->military_from)){echo $formData->military_from;} ?>">
            </div>
        </div>
        <div class="form-group col-lg-3">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="military_to" placeholder="Date To" value="<?php if (isset($formData) && !empty($formData->military_to)){echo $formData->military_to;} ?>">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript"></script>
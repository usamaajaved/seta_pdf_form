<!-- edited -->

<?php 
$query = "SELECT * from countries";
$result = mysqli_query($con_str,$query);
?>
<div class="col-md-12">
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-12 text-center">
            <label class="mb-17 mr-2p">Have you ever been a member of the Canadian Forces?</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force_member" value="Choice1" id="no_member">
                <label class="custom-control-label" for="no_member"> No</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force_member" value="2" id="former_member">
                <label class="custom-control-label" for="former_member"> Yes - Former</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force_member" value="2" id="current_member">
                <label class="custom-control-label" for="current_member"> Yes - Current</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force_member" value="3" id="reserve_member">
                <label class="custom-control-label" for="reserve_member"> Yes - Former or Current Reserve Member</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-4">
            <label class="d-block mb-17">If yes, indicate your Unit’s Level of Service:</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force" value="reg" id="regular_force">
                <label class="custom-control-label" for="regular_force"> Regular Forces</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="force" value="1" id="reserved_force">
                <label class="custom-control-label" for="reserved_force"> Reserved Forces</label>
            </div>
        </div>
        <div class="form-group mb-3 mb-md-2 col-lg-8">
            <label>If yes, provide the complete mailing address of your unit: Street Address</label>
            <input type="text" class="form-control" name="military_address" id="military_address" placeholder="Address">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <label>City:</label>
            <input type="text" class="form-control" name="military_city" placeholder="City">
        </div>
        <div class="form-group col-lg-3">
            <label>Province:</label>
            <input type="text" class="form-control" name="military_province" placeholder="Province">
        </div>
        <div class="form-group col-lg-3">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="military_postal" placeholder="Postal Code">
        </div>
        <div class="form-group col-lg-3">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="military_country" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label>Military / Service ID Number:</label>
            <input type="text" class="form-control" name="service_num" placeholder="Service ID Number">
        </div>
        <div class="form-group col-lg-6">
            <label>Unit:</label>
            <input type="text" class="form-control" name="military_unit" placeholder="Unit">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label>Years of Serice:</label>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-6">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="military_from" value="03/18/2013">
            </div>
        </div>
        <div class="form-group col-lg-6">
            <label>To Present:</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="military_to" value="03/18/2013">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript"></script>
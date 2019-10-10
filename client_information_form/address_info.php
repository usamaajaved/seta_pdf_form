<?php 
$query = "SELECT * from countries";
$result = mysqli_query($con_str,$query);

$query1 = "SELECT * from countries";
$result1 = mysqli_query($con_str,$query1);
?>
<div class="col-md-12">
	<div class="row">
        <div class="form-group col-lg-8">
            <label>Current Home Address:</label>
            <input type="text" class="form-control" name="current_address" placeholder="Current Address">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit:</label>
            <input type="text" class="form-control" name="current_unit" placeholder="Unit">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <label>City:</label>
            <input type="text" class="form-control" name="current_city" placeholder="City">
        </div>
        <div class="form-group col-lg-3">
            <label>Province:</label>
            <input type="text" class="form-control" name="current_province" placeholder="Province">
        </div>
        <div class="form-group col-lg-3">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="current_postal" placeholder="Postal Code">
        </div>
        <div class="form-group col-lg-3">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="current_country" class="form-control select" data-fouc>
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
        <div class="col-lg-12">
            <label>When did you move to this address?</label>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-6">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="current_date_from" placeholder="Date From">
            </div>
            <!-- <input type="text" class="form-control" name="current_date_from" placeholder="From"> -->
        </div>
        <div class="form-group col-lg-6">
            <label>To:</label>
            <input type="text" class="form-control" name="current_date_present" placeholder="Present" readonly="">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-8">
            <label>Mailing Address:</label>
            <input type="text" class="form-control" name="mail_address" placeholder="Mailing Address">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit:</label>
            <input type="text" class="form-control" name="mail_unit" placeholder="Unit">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <label>City:</label>
            <input type="text" class="form-control" name="mail_city" placeholder="City">
        </div>
        <div class="form-group col-lg-3">
            <label>Province:</label>
            <input type="text" class="form-control" name="mail_province" placeholder="Province">
        </div>
        <div class="form-group col-lg-3">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="mail_postal" placeholder="Postal Code">
        </div>
        <div class="form-group col-lg-3">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="mail_country" class="form-control select" data-fouc>
                <?php while ($countries = mysqli_fetch_array($result1)) { ?>
                    <option></option>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
    </div>
</div>
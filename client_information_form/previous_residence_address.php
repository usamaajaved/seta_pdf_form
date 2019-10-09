<!-- edited -->
<?php 
$a_query = "SELECT * from countries";
$a_result = mysqli_query($con_str,$a_query);

$b_query = "SELECT * from countries";
$b_result = mysqli_query($con_str,$b_query);

$c_query = "SELECT * from countries";
$c_result = mysqli_query($con_str,$c_query);

$d_query = "SELECT * from countries";
$d_result = mysqli_query($con_str,$d_query);

$e_query = "SELECT * from countries";
$e_result = mysqli_query($con_str,$e_query);
?>
<div class="col-md-12">
    <div class="row">
        <div class="form-group col-lg-8">
            <label>a) Street Number and Name:</label>
            <input type="text" class="form-control" name="prev_address_1" placeholder="Street Number and Name">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit:</label>
            <input type="text" class="form-control" name="prev_unit_1" placeholder="Unit">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="prev_city_1" placeholder="City">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="prev_province_1" placeholder="Province">
        </div>
        <div class="form-group col-lg-2">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="prev_posta_1" placeholder="Postal Code">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="prev_country_1" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($a_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-2">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_from_date_1" value="03/18/2013">
            </div>
        </div>
        <div class="form-group col-lg-2">
            <label>To: (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_to_date_1" value="03/18/2013">
            </div>
            <!-- <input type="text" class="form-control" name="prev_to_date_1" placeholder="Present"> -->
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-8">
            <label>b) Street Number and Name:</label>
            <input type="text" class="form-control" name="prev_address_2" placeholder="Street Number and Name">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit:</label>
            <input type="text" class="form-control" name="prev_unit_2" placeholder="Unit">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="prev_city_2" placeholder="City">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="prev_province_2" placeholder="Province">
        </div>
        <div class="form-group col-lg-2">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="prev_postal_2" placeholder="Postal Code">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="prev_country_2" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($b_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-2">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_from_date_2" value="03/18/2013">
            </div>
        </div>
        <div class="form-group col-lg-2">
            <label>To: (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_to_date_2" value="03/18/2013">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-8">
            <label>c) Street Number and Name:</label>
            <input type="text" class="form-control" name="prev_address_3" placeholder="Street Number and Name">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit:</label>
            <input type="text" class="form-control" name="prev_unit_3" placeholder="Unit">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="prev_city_3" placeholder="City">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="prev_province_3" placeholder="Province">
        </div>
        <div class="form-group col-lg-2">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="prev_postal_3" placeholder="Postal Code">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="prev_country_3" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($c_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-2">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_from_date_3" value="03/18/2013">
            </div>
        </div>
        <div class="form-group col-lg-2">
            <label>To: (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_to_date_3" value="03/18/2013">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-8">
            <label>d) Street Number and Name:</label>
            <input type="text" class="form-control" name="prev_address_4" placeholder="Street Number and Name">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit:</label>
            <input type="text" class="form-control" name="prev_unit_4" placeholder="Unit">
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="prev_city_4" placeholder="City">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="prev_province_4" placeholder="Province">
        </div>
        <div class="form-group col-lg-2">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="prev_postal_4" placeholder="Postal Code">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="prev_country_4" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($d_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-2">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_from_date_4" value="03/18/2013">
            </div>
        </div>
        <div class="form-group col-lg-2">
            <label>To: (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_to_date_4" value="03/18/2013">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-lg-8">
            <label>e) Street Number and Name:</label>
            <input type="text" class="form-control" name="prev_address_5" placeholder="Street Number and Name">
        </div>
        <div class="form-group col-lg-4">
            <label>Apt.#/Unit:</label>
            <input type="text" class="form-control" name="prev_unit_5" placeholder="Unit">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2">
            <label>City:</label>
            <input type="text" class="form-control" name="prev_city_5" placeholder="City">
        </div>
        <div class="form-group col-lg-2">
            <label>Province:</label>
            <input type="text" class="form-control" name="prev_province_5" placeholder="Province">
        </div>
        <div class="form-group col-lg-2">
            <label>Postal Code:</label>
            <input type="text" class="form-control" name="prev_postal_5" placeholder="Postal Code">
        </div>
        <div class="form-group col-lg-2">
            <label>Country:</label>
            <select data-placeholder="Select Country" name="prev_country_5" class="form-control select" data-fouc>
                <option></option>
                <?php while ($countries = mysqli_fetch_assoc($e_result)) { ?>
                    <option value="<?php echo $countries['name']; ?>">
                        <?php echo $countries['name']; ?>
                    </option>
                <?php } ?>

            </select>
        </div>
        <div class="form-group col-lg-2">
            <label>From (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_from_date_5" value="03/18/2013">
            </div>
        </div>
        <div class="form-group col-lg-2">
            <label>To: (MM/DD/YYYY):</label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control daterange-single" name="prev_to_date_5" value="03/18/2013">
            </div>
        </div>
    </div>
</div>
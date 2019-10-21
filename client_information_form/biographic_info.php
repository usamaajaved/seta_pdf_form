<div class="col-md-12">
    <div class="row"> 
        <div class="form-group mb-3 mb-md-2 col-lg-3">
            <label class="mr-2p"><strong>1. Ethnicity</strong> (Select only one box)</label>
        </div>
        <div class="form-group mb-3 mb-md-2 col-lg-9">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hispanic_latino" value="H" id="yes_hispanic_latino" checked="" <?php if (isset($formData->hispanic_latino) && $formData->hispanic_latino == 'H') {echo 'checked';}?>>
                <label class="custom-control-label" for="yes_hispanic_latino"> Hispanic or Latino</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hispanic_latino" value="NH" id="no_hispanic_latino" <?php if (isset($formData->hispanic_latino) && $formData->hispanic_latino == 'NH') {echo 'checked';}?>>
                <label class="custom-control-label" for="no_hispanic_latino"> Not Hispanic or Latino</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-3">
            <label class="mr-2p"><strong>2. Race</strong> (Select all applicable boxes)</label>
        </div>
        <div class="form-group mb-3 mb-md-2 col-lg-9">
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="white" id="white" <?php if (isset($formData->white) && $formData->white == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="white"> White</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="asian" id="asian" <?php if (isset($formData->asian) && $formData->asian == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="asian"> Asian</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="black" id="black_african_american" <?php if (isset($formData->black) && $formData->black == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="black_african_american"> Black or African American</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="american_indian" id="american_indian" <?php if (isset($formData->american_indian) && $formData->american_indian == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="american_indian"> American Indian or Alaska Native</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="native" id="native_hawaiian" <?php if (isset($formData->native) && $formData->native == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="native_hawaiian"> Native Hawaiian or Other Pacific Islander</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-10">
            <strong>3. Height:</strong>
        </div>
        <div class="col-lg-4 mb-10">
            <strong>Weight:</strong>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-2">
            <select data-placeholder="Feet" name="feet" placeholder="Feet" class="form-control required form-control-select2" data-fouc>
                <?php if (isset($formData->feet) && !empty($formData->feet)) { ?>
                    <option value="<?php echo $formData->feet; ?>"><??><?php echo $formData->feet; ?></option>
                <?php } ?>
                <option value=""></option>
                <option value=" "> </option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>

            </select>
        </div>
        <div class="form-group col-lg-2">
            <select data-placeholder="Inches" name="inches" placeholder="Inches" placeholder="Feet" class="form-control required form-control-select2" data-fouc>
                <?php if (isset($formData->inches) && !empty($formData->inches)) { ?>
                    <option value="<?php echo $formData->inches; ?>"><??><?php echo $formData->inches; ?></option>
                <?php } ?>
                <option value=""></option>
                <option value=" "> </option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
            </select>
        </div>
        <div class="form-group col-lg-2">
            <input type="number" class="form-control required" name="pound" placeholder="Pound" maxlength="3" value="<?php if (isset($formData) && !empty($formData->pound)){echo $formData->pound;} ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group mb-3 mb-md-2 col-lg-3">
            <label class="mr-2p"><strong>5. Eye Colour</strong> (Select only one box)</label>
        </div>
        <div class="form-group mb-3 mb-md-2 col-lg-9">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" checked class="custom-control-input" name="eye_colour" value="BLK" id="black" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'BLK') {echo 'checked';}?>>
                <label class="custom-control-label" for="black"> Black</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="eye_colour" value="BLU" id="blue" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'BLU') {echo 'checked';}?>>
                <label class="custom-control-label" for="blue"> Blue</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="eye_colour" value="BRN" id="brown" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'BRN') {echo 'checked';}?>>
                <label class="custom-control-label" for="brown"> Brown</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="eye_colour" value="GRAY" id="gray" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'GRAY') {echo 'checked';}?>>
                <label class="custom-control-label" for="gray"> Gray</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="eye_colour" value="GRN" id="green" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'GRN') {echo 'checked';}?>>
                <label class="custom-control-label" for="green"> Green</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="eye_colour" value="HZl" id="Hazel" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'HZl') {echo 'checked';}?>>
                <label class="custom-control-label" for="Hazel"> Hazel</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="eye_colour" value="MRN" id="Maroon" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'MRN') {echo 'checked';}?>>
                <label class="custom-control-label" for="Maroon"> Maroon</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="eye_colour" value="PNK" id="Pink" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'PNK') {echo 'checked';}?>>
                <label class="custom-control-label" for="Pink"> Pink</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="eye_colour" value="OTH" id="Unknown" <?php if (isset($formData->eye_colour) && $formData->eye_colour == 'OTH') {echo 'checked';}?>>
                <label class="custom-control-label" for="Unknown"> Unknown/Other</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group mb-3 mb-md-2 col-lg-3">
            <label class="mr-2p"><strong>5. Hair Colour</strong> (Select only one box)</label>
        </div>
        <div class="form-group mb-3 mb-md-2 col-lg-9">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" checked name="hair_colour" value="BLD" id="bald" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'BLD') {echo 'checked';}?>>
                <label class="custom-control-label" for="bald"> Bald (No hair)</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hair_colour" value="BLK" id="black_hair_colour" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'BLK') {echo 'checked';}?>>
                <label class="custom-control-label" for="black_hair_colour"> Black</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hair_colour" value="BND" id="blonde" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'BND') {echo 'checked';}?>>
                <label class="custom-control-label" for="blonde"> Blonde</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hair_colour" value="BRN" id="brown_hair_colour" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'BRN') {echo 'checked';}?>>
                <label class="custom-control-label" for="brown_hair_colour"> Brown</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hair_colour" value="GRY" id="gray_hair_colour" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'GRY') {echo 'checked';}?>>
                <label class="custom-control-label" for="gray_hair_colour"> Gray</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hair_colour" value="RED" id="red" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'RED') {echo 'checked';}?>>
                <label class="custom-control-label" for="red"> Red</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hair_colour" value="SDY" id="sandy" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'SDY') {echo 'checked';}?> >
                <label class="custom-control-label" for="sandy"> Sandy</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hair_colour" value="WHT" id="white_hair_colour" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'WHT') {echo 'checked';}?>>
                <label class="custom-control-label" for="white_hair_colour"> White</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="hair_colour" value="OTH" id="Unknown_hair_colour" <?php if (isset($formData->hair_colour) && $formData->hair_colour == 'OTH') {echo 'checked';}?>>
                <label class="custom-control-label" for="Unknown_hair_colour"> Unknown/Other</label>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="row"> 
        <div class="form-group mb-3 mb-md-2 col-lg-3">
            <label class="mr-2p"><strong>1. Ethnicity</strong> (Select only one box)</label>
        </div>
        <div class="form-group mb-3 mb-md-2 col-lg-9">
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="hispanic_latino" id="hispanic_latino" <?php if (isset($formData->hispanic_latino) && $formData->hispanic_latino == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="hispanic_latino"> Hispanic or Latino</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="not_hispanic_latino" id="not_hispanic_latino" <?php if (isset($formData->not_hispanic_latino) && $formData->hispanic_latino == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="not_hispanic_latino"> Not Hispanic or Latino</label>
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
                <input type="checkbox" class="custom-control-input" name="native_hawaiian" id="native_hawaiian" <?php if (isset($formData->native) && $formData->native == 'on') {echo 'checked';}?>>
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
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="black_eye_color" id="black_eye_color" <?php if (isset($formData->black_eye_color) && $formData->black_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="black_eye_color"> Black</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="blue_eye_color" id="blue_eye_color" <?php if (isset($formData->blue_eye_color) && $formData->blue_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="blue_eye_color"> Blue</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="brown_eye_color" id="brown_eye_color" <?php if (isset($formData->brown_eye_color) && $formData->brown_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="brown_eye_color"> Brown</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="gray_eye_color" id="gray_eye_color" <?php if (isset($formData->gray_eye_color) && $formData->gray_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="gray_eye_color"> Gray</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="green_eye_color" id="green_eye_color" <?php if (isset($formData->green_eye_color) && $formData->green_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="green_eye_color"> Green</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="hazel_eye_color" id="hazel_eye_color" <?php if (isset($formData->hazel_eye_color) && $formData->hazel_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="hazel_eye_color"> Hazel</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="maroon_eye_color" id="maroon_eye_color" <?php if (isset($formData->maroon_eye_color) && $formData->maroon_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="maroon_eye_color"> Maroon</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="pink_eye_color" id="pink_eye_color" <?php if (isset($formData->pink_eye_color) && $formData->pink_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="pink_eye_color"> Pink</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="unknown_eye_color" id="unknown_eye_color" <?php if (isset($formData->unknown_eye_color) && $formData->unknown_eye_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="unknown_eye_color"> Unknown/Other</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group mb-3 mb-md-2 col-lg-3">
            <label class="mr-2p"><strong>5. Hair Colour</strong> (Select only one box)</label>
        </div>
        <div class="form-group mb-3 mb-md-2 col-lg-9">
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="bald" id="bald" <?php if (isset($formData->bald) && $formData->bald == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="bald"> Bald (No hair)</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="black_hair_colour" id="black_hair_colour" <?php if (isset($formData->black_hair_colour) && $formData->black_hair_colour == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="black_hair_colour"> Black</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="blonde_hair_color" id="blonde_hair_color" <?php if (isset($formData->blonde_hair_color) && $formData->blonde_hair_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="blonde_hair_color"> Blonde</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="brown_hair_colour" id="brown_hair_colour" <?php if (isset($formData->brown_hair_colour) && $formData->brown_hair_colour == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="brown_hair_colour"> Brown</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="gray_hair_colour" id="gray_hair_colour" <?php if (isset($formData->gray_hair_colour) && $formData->gray_hair_colour == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="gray_hair_colour"> Gray</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="red_hair_color" id="red_hair_color" <?php if (isset($formData->red_hair_color) && $formData->red_hair_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="red_hair_color"> Red</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="sandy_hair_color" id="sandy_hair_color" <?php if (isset($formData->sandy_hair_color) && $formData->sandy_hair_color == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="sandy_hair_color"> Sandy</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="white_hair_colour" id="white_hair_colour" <?php if (isset($formData->white_hair_colour) && $formData->white_hair_colour == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="white_hair_colour"> White</label>
            </div>
            <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" name="unknown_hair_colour" id="unknown_hair_colour" <?php if (isset($formData->unknown_hair_colour) && $formData->unknown_hair_colour == 'on') {echo 'checked';}?>>
                <label class="custom-control-label" for="unknown_hair_colour"> Unknown/Other</label>
            </div>
        </div>
    </div>
    <div class="row form-group">
        <div class="form-group col-lg-3">
            <label><strong>Date Completed: </strong></label>
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                </span>
                <input type="text" class="form-control pickadate-accessibility" name="complete_date" placeholder="Completion Date" value="<?php if (isset($formData) && !empty($formData->complete_date)){echo $formData->complete_date;} ?>">
            </div>
        </div>
    </div>
</div>
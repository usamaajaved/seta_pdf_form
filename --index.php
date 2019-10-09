<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Seta PDF Example</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="global_assets/js/main/jquery.min.js"></script>
    <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

    <div class="page-content">

        <div class="content-wrapper">

            <div class="page-header" style="margin-top: 50px">
                
            </div>


            <div class="content pt-0">
                <div class="row">
                    <div class="col-md-10 offset-md-1">

                        <!-- Basic layout-->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Basic Form</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="seta_pdf.php" enctype="multipart/form-data" method="post">
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Family Name:</label>
                                            <input type="text" class="form-control" name="fname" placeholder="Your Name ">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Given Name:</label>
                                            <input type="text" class="form-control" name="gname" placeholder="Given Name ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Middle Name:</label>
                                            <input type="text" class="form-control" name="mname" placeholder="Enter Middle name ">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label class="d-block">Gender:</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="gender" value="M" id="custom_radio_inline_unchecked" checked="">
                                                <label class="custom-control-label" for="custom_radio_inline_unchecked"> Male</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="gender" value="F" id="custom_radio_inline_checked">
                                                <label class="custom-control-label" for="custom_radio_inline_checked"> Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
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
                                        <div class="form-group col-lg-6">
                                            <label>Date Of Birth:</label>
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                                </span>
                                                <input type="text" class="form-control daterange-single" name="dob" value="03/18/2013">
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Nationality:</label>
                                            <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality">
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
                                            <input type="text" class="form-control" name="country" placeholder="Enter Country">
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
                                            <input type="text" class="form-control" name="email" placeholder="Enter Your Mail">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Secondary Mail Address:</label>
                                            <input type="text" class="form-control" name="email2" placeholder="Enater Secondary Mail ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group mb-3 mb-md-2 col-lg-4">
                                            <label class="d-block">Driver’s License:</label>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="d_license" value="Y" id="custom_radio_inline_unchecked1" checked="">
                                                <label class="custom-control-label" for="custom_radio_inline_unchecked1"> Yes</label>
                                            </div>

                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="d_license" value="N" id="custom_radio_inline_checked1">
                                                <label class="custom-control-label" for="custom_radio_inline_checked1"> No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label>License Number:</label>
                                            <input type="number" class="form-control" name="license_no" placeholder="Enter License Number">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label>Province Of issue:</label>
                                            <input type="text" class="form-control" name="license_province" placeholder="Enter Province">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    
                </div>
            </div>
            

        </div>

    </div>

</body>
</html>

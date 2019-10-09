<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Client Information Form</title>

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

    <script src="global_assets/js/plugins/forms/wizards/steps.min.js"></script>
    <script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="global_assets/js/plugins/forms/inputs/inputmask.js"></script>
    <script src="global_assets/js/plugins/extensions/cookie.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/dashboard.js"></script>
    <script src="global_assets/js/demo_pages/form_wizard.js"></script>
    <script src="global_assets/js/demo_pages/picker_date.js"></script>

    <script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>
    <script src="global_assets/js/plugins/pickers/anytime.min.js"></script>
    <script src="global_assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script src="global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script src="global_assets/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script src="global_assets/js/plugins/pickers/pickadate/legacy.js"></script>
    <script src="global_assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script src="global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
    <script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="global_assets/js/demo_pages/form_select2.js"></script>
    <script src="global_assets/js/plugins/forms/validation/validate.min.js"></script>
    <!-- /theme JS files -->
    

</head>

<style type="text/css">
    .mb-17 {
        margin-bottom: 17px;
    }
    .mb-10 {
        margin-bottom: 10px;
    }
    .mt-10 {
        margin-top: 10px;
    }
    .mr-2p {
        margin-right: 2%;
    }
    .pt-10 {
        padding-top: 10px;
    }

</style>

<body>

    <div class="page-content">

        <div class="content-wrapper">

            <div class="page-header" style="margin-top: 50px">
                
            </div>


            <div class="content pt-0">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Basic layout-->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Client Information Form</h5>
                            </div>
                            <div class="card-body">
                                <form class="wizard-form steps-basic" action="seta_pdf.php" enctype="multipart/form-data" method="post">
                                    <h6>Personal Information</h6>
                                    <fieldset>
                                        <div class="row mt-10">
                                            <?php require'client_information_form/biographic_info.php';?>
                                        </div>
                                    </fieldset>
                                    <h6>Address Information</h6>
                                    <fieldset>
                                        <div class="row">
                                            <?php require'client_information_form/address_info.php';?>
                                        </div>
                                    </fieldset>
                                    <h6>Previous Residence Address</h6>
                                    <fieldset>
                                        <div class="row">
                                            <?php require'client_information_form/previous_residence_address.php';?>
                                        </div>
                                    </fieldset>
                                    <h6>Employment Information</h6>
                                    <fieldset>
                                        <div class="row">
                                            <?php require'client_information_form/employment_info.php';?>
                                        </div>
                                    </fieldset>
                                    <h6>Military Service History</h6>
                                    <fieldset>
                                        <div class="row">
                                            <?php require'client_information_form/military_history.php';?>
                                        </div>
                                    </fieldset>
                                    <h6>Immigration and Criminal History</h6>
                                    <fieldset>
                                        <div class="row">
                                            <?php require'client_information_form/immigration_criminal_history.php';?>
                                        </div>
                                    </fieldset>
                                    <h6>Biographic Information</h6>
                                    <fieldset>
                                        <div class="row">
                                            <?php require'client_information_form/biographic_info.php';?>
                                        </div>
                                    </fieldset>
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

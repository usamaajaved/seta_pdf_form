<?php 
session_start();
if (!$_SESSION) {
    header('Location: login.php');
}else{
?>
<?php include 'header.php'; ?>
<?php 
    $getFormData = "Select * from pdf_form where user_id = ".$_SESSION['user_id']."";
    $getQuery = mysqli_query($con_str, $getFormData);
    if (mysqli_num_rows($getQuery) > 0) {
        $res = mysqli_fetch_object($getQuery);
        $formData = json_decode($res->form_data);
    }
?>
<body>
    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    <a href="authentication/logout.php" class="navbar-nav-link legitRipple">
                        <i class="icon-switch2"></i>
                        <span class="d-md-none ml-2">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

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
                                <form class="wizard-form steps-validation" action="seta_pdf.php" enctype="multipart/form-data" method="post" id="seta_pdf_form_wizard">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                    <h6>Personal Information</h6>
                                    <fieldset>
                                        <div class="row mt-10">
                                            <?php require'client_information_form/personal_info.php';?>
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

<script type="">
    function save_form_data(){
        var formData = new FormData($("#seta_pdf_form_wizard")[0]);
        formData.append("submitType", "ajax");
        $.ajax({
            url: 'seta_pdf.php',
            data: formData,
            type: "POST",
            processData: false,
            contentType: false,
            success: function(data){
                
            }
        });
    }
</script>
</body>
</html>
<?php }?>
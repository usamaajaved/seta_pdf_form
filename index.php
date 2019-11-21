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
<style type="text/css">

    .wizard>.steps>ul>li.current .number {
        font-size: 0;
        border-color: #9f0509;
        background-color: #fff;
        color: #9f0509;
    }
    .wizard>.steps>ul>li.done .number {
        font-size: 0;
        background-color: #208424;
        border-color: #208424;
        color: #fff;
    }
    .wizard>.steps>ul>li:after, .wizard>.steps>ul>li:before {
        content: '';
        display: block;
        position: absolute;
        top: 2.375rem;
        width: 50%;
        height: 2px;
        background-color: #208424;
        z-index: 9;
    }
    .btn-primary{
        color: #fff;
        background-color: #9f0509;
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #b91414;
    }
    #scroll-down {
        background-color: #9f0509;
        color: #fff;
    }

    #myBtn {
        opacity: 0.2;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 10px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #9f0509;
        color: white;
        cursor: pointer;
        padding: 11px;
        font-size: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }

</style>

<body>
    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static" style="background-color: #9f0509;">
        <div class="collapse navbar-collapse" id="navbar-mobile">
                <a href="" class="d-inline-block">
                    <img src="assets/img/logo-final-02.jpg" alt="Record Removal Services" style="height: 76px;">
                </a>
            <span class="navbar-text ml-md-3" style="padding-bottom: 0px;">
                <h3 style="font-family: initial; margin-left: 330px;">CLIENT INFORMATION FORM</h3>
            </span>
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

        <div class="content-wrapper" style="padding-top: 20px;">

            <div class="content pt-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row text-right form-group">
                            <div class="col-md-12">
                            </div>
                        </div>

                        <!-- Basic layout-->
                        <div class="card">
                            
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
                                <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="icon-circle-down2"></i></button>
                                <div class="row text-center" style="padding-right: 21px;">
                                    <div class="col-md-12 text-right" id="pagin">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {scrollFunction()};

    $(window).on("scroll", function() {
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();
        if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
            mybutton.style.display = "none";
        }
    });
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        var step = $("#seta_pdf_form_wizard").steps("getCurrentIndex");
        var stepNo = step + 1;
        $('#pagin').html("Page "+ stepNo +" of 7");
        mybutton.style.display = "block";
      }else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
    }

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
    function finish_form(){
        var id = '<?php echo $_SESSION['user_id']; ?>';
        $.post('seta_pdf.php',{id:id,finishedForm:'finished'}).done(function(data){
            // alert('Form submitted successfully!');
            // window.location.replace('authentication/logout.php');
            console.log(data);
        });
    }

    $("#scroll-down").click(function(){
        $("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
    });
    
</script>
</body>
</html>
<?php }?>
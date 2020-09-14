<?php
session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['aid'] == 0)) {
    header('location:logout.php');
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Welcome to ABMTC Alumni Rocord Management System </title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet">
        <link href="../css/dropify.css" rel="stylesheet">

    </head>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('includes/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('includes/header.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="singleUploadCard" class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                                <div class="col-lg-7">
                                    <p class="text-center" id="msg" style="font-size:25px"></p>
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Add an Alumni <span>OR <button
                                                            type="button" class="btn btn-outline-secondary btn-user"
                                                            id="changeToFileUpload">Upload Bulk</button></span></h1>
                                        </div>
                                        <form method="post" enctype="multipart/form-data" id="addNewAlumni"
                                              class="user">
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-2">
                                                    <div class="dropdown">
                                                        <select name="title" id="title"
                                                                class="form-control form-control-range">
                                                            <option value="pastor">Pastor</option>
                                                            <option value="rev">Rev.</option>
                                                            <option value="bishop">Bishop</option>
                                                            <option value="apostle">Apostle</option>
                                                            <option value="prophet">Prophet</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-sm-0">
                                                    <input type="text" class="form-control form-control-user"
                                                           id="exampleFirstName" name="fullname"
                                                           placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user"
                                                           id="address" placeholder="Address" name="address">

                                                </div>
                                                <div class="col-sm-6">
                                                    <input name="email" type="email"
                                                           class="form-control form-control-user"
                                                           id="exampleInputEmail" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <input name="childrenCount" type="number"
                                                           class="form-control form-control-user"
                                                           id="noOfChildren"
                                                           placeholder="No of Children">
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group mb-3">
                                                        <select name="relationship" class="custom-select"
                                                                id="inputGroupSelect01">
                                                            <option selected>Relationship...</option>
                                                            <option value="1">Single</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12">

                                                    <div class="input-group">
                                                        <select name="nationality" class="custom-select"
                                                                id="nationality">
                                                            <option value="-" id="loadingNationality">Loading...
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-center">About Church</p>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <select name="position" class="custom-select"
                                                                id="inputGroupSelect01">
                                                            <option selected>Position in Church...</option>
                                                            <option value="1">Resident Pastor</option>
                                                            <option value="2">Assistant</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control form-control-user"
                                                           id="churchName" name="churchName" placeholder="Church name">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <input type="text" name="churchCity"
                                                           class="form-control form-control-user"
                                                           id="currentChurchCity" placeholder="current Church City">
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="input-group">
                                                        <select name="churchCountry" class="custom-select"
                                                                id="churchCountry">
                                                            <option value="-" id="loadingChurch">Loading..</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-user btn-block btn-success">Proceed
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="bulkUploadCard" class="card o-hidden border-0 shadow-lg my-5 d-none ">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                                <div class="col-lg-7">
                                    <p class="text-center" id="msg" style="font-size:25px"></p>
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Use Excel Sheet <span>OR <button
                                                            class="btn btn-outline-secondary btn-user"
                                                            id="changeToSingleUpload">Single Upload</button></span></h1>
                                        </div>
                                        <form method="post" enctype="multipart/form-data" id="bulkUploadForm">
                                            <input type="file" id="docfile" class="dropify" data-max-file-size="10M">
                                            <button type="submit" class="btn btn-block btn-dark btn-user">Proceed
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?php include_once('includes/footer.php'); ?>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="../js/dropify.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script>
        $(function () {
            $('.dropify').dropify();
            $.get("https://restcountries.eu/rest/v2/all", (response) => {
                $.each(response, function (key, cName) {
                    optionValue = cName.alpha3code;
                    optionText = cName.name;
                    var option = new Option(cName.name, cName.alpha3Code);
                    $("#nationality").append(option);
                    // $("#churchCountry").append(option);
                });
                $('#loadingNationality').text('Country');
                // $('#loadingChurch').text('Country');
            });
            $.get("https://restcountries.eu/rest/v2/all", (response) => {
                $.each(response, function (key, cName) {
                    optionValue = cName.alpha3code;
                    optionText = cName.name;
                    var option = new Option(cName.name, cName.alpha3Code);
                    // $("#nationality").append(option);
                    $("#churchCountry").append(option);
                });
                // $('#loadingNationality').text('Country');
                $('#loadingChurch').text('Country');
            });

            $("#addNewAlumni").submit((e) => {
                e.preventDefault();
                var form = $("#addNewAlumni").serializeArray();
                $.post("includes/alumni.php", form, (response) => {
                    if (response.code === 200) {
                        $("#msg").addClass('text-success');
                        $("#msg").text(response.message);
                    } else {
                        $("#msg").addClass('text-danger');
                        $("#msg").text(response.message);

                    }
                });
            });
            $("#changeToFileUpload").click(() => {
                $("#singleUploadCard").addClass('d-none');
                $("#bulkUploadCard").removeClass('d-none');
            });
            $("#changeToSingleUpload").click(() => {
                $("#bulkUploadCard").addClass('d-none');
                $("#singleUploadCard").removeClass('d-none');
            });
            var fileName;
            $('input[type="file"]').change(function (e) {
                fileName = e.target.files[0];
                console.log(fileName);
            });
            $("#bulkUploadForm").submit((e, element) => {
                e.preventDefault();
                var fd = new FormData();
                var files = $('#docfile')[0].files[0];
                fd.append('uploadFile', fileName);
                $.post('includes/file.php', fd, (response) => {
                    console.log(response);
                });
            });
        });
    </script>


    </body>

    </html>

    </html>
    <?php
}
?>
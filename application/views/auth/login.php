<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('') ?>assets/assets_login/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Authentication</title>

    <!-- BOOTSTRAP CSS -->
    <link href="<?= base_url('') ?>assets/assets_login/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?= base_url('') ?>assets/assets_login/css/style.css" rel="stylesheet" />
    <link href="<?= base_url('') ?>assets/assets_login/css/dark-style.css" rel="stylesheet" />
    <link href="<?= base_url('') ?>assets/assets_login/css/skin-modes.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="<?= base_url('') ?>assets/assets_login/css/sidemenu.css" rel="stylesheet" id="sidemenu-theme">

    <!-- SINGLE-PAGE CSS -->
    <link href="<?= base_url('') ?>assets/assets_login/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

    <!--C3 CHARTS CSS -->
    <link href="<?= base_url('') ?>assets/assets_login/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="<?= base_url('') ?>assets/assets_login/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="<?= base_url('') ?>assets/assets_login/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url('') ?>assets/assets_login/colors/color1.css" />

    <!-- SELECT2 CSS -->
    <link href="<?= base_url('') ?>assets/assets_login/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- INTERNAL Sumoselect css-->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/assets_login/plugins/sumoselect/sumoselect.css">

    <!-- MULTI SELECT CSS -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/assets_login/plugins/multipleselect/multiple-select.css">
    <style>
        .otp-input-wrapper {
            width: 240px;
            text-align: left;
            display: inline-block;
        }

        .otp-input-wrapper input {
            padding: 0;
            width: 264px;
            font-size: 20px;
            font-weight: 600;
            color: #3e3e3e;
            background-color: transparent;
            border: 0;
            margin-left: 2px;
            letter-spacing: 30px;
            font-family: sans-serif !important;
        }

        .otp-input-wrapper input:focus {
            box-shadow: none;
            outline: none;
        }

        .otp-input-wrapper svg {
            position: relative;
            display: block;
            width: 240px;
            height: 2px;
        }
    </style>
</head>

<body class="">


    <!-- JQUERY JS -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <div class="login-img bg-dark">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="<?= base_url('') ?>assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- CONTAINER OPEN -->
                <div class="container-login100 d-flex">
                    <div class="wrap-login100 p-0">
                        <div class="card-body">
                            <!-- CONTAINER OPEN -->
                            <div class="col col-login mx-auto">
                                <div class="text-center">
                                    <img src="<?= base_url('') ?>assets/images/hisuara_new.png" class="img-fluid img-thumbnail mx-auto mb-3 border-0" style="width:130px;height:auto;" alt="">
                                </div>
                            </div>

                            <form class="login100-form validate-form" method="POST" action="<?= base_url('') ?>auth/action_login">
                                <input type="hidden" name="_token" value="pdeCGUJuHZKZH9C8W40OyrzCco8oGzawGBZ1hDqF">
                                <input type="hidden" id="latitude" name="latitude">
                                <input type="hidden" id="longitude" name="longitude">


                                <span class="login100-form-title">
                                    Login
                                </span>
                                <?php if ($this->session->flashdata('error')) { ?>
                                    <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
                                <?php } ?>


                                <div class="wrap-input100 validate-input">
                                    <input class="input100" type="email" name="email" placeholder="Masukkan No. KTP/No. Hp/Email" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                    </span>
                                </div>

                                <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                    <input class="input100" type="password" name="password" placeholder="Password" required>
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2-show-search form-select select2-hidden-accessible" name="provinsi" id="Provinsi" tabindex="-1" aria-hidden="true">
                                        <option selected disabled>Pilih Provinsi</option>
                                        <?php foreach ($provinsi as $prov) : ?>
                                            <option value="<?= $prov->id_prov ?>"><?= $prov->nama ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2-show-search form-select select2-hidden-accessible" name="kota" id="Kota" tabindex="-1" aria-hidden="true">
                                        <option selected disabled>Pilih Kota</option>

                                    </select>
                                </div>



                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn" style="background-color: #6c757d!important;color:white">
                                        Login
                                    </button>
                                </div>
                                <div class="text-center pt-3">
                                    <p class="text-dark mb-0">Not a member?<a href="<?= base_url('') ?>auth/register" class="text-primary ms-1">Create an Account</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <h5 class="fw-semibold text-center">
                                www.hisuara.id
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <section class="bg-light">
            <div class="container pt-5">
                <!-- <img style="display: block; margin-left: auto; margin-right: auto;" src="http://localhost:8000/assets/images/acakey_new.png" width="250px" class="pt-5 mb-5"> -->
                <div class="text-center pb-5" style="font-size: 13px;">
                    © Hisuara.id <br />
                    All Right Reserved 2021
                </div>
            </div>
        </section>
        <!-- End PAGE -->

    </div>




    <!-- BACKGROUND-IMAGE CLOSED -->


    <!-- CHART-CIRCLE JS -->

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="<?= base_url('') ?>assets/assets_login/js/circle-progress.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="<?= base_url('') ?>assets/assets_login/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- INPUT MASK JS -->
    <script src="<?= base_url('') ?>assets/assets_login/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- CUSTOM JS-->
    <script src="<?= base_url('') ?>assets/assets_login/js/custom.js"></script>

    <!-- SELECT2 JS -->
    <script src="<?= base_url('') ?>assets/assets_login/plugins/select2/select2.full.min.js"></script>
    <script src="<?= base_url('') ?>assets/assets_login/js/select2.js"></script>
    <script src="<?= base_url('') ?>assets/assets_login/js/form-elements.js"></script>

    <!-- MULTI SELECT JS-->
    <script src="<?= base_url('') ?>assets/assets_login/plugins/multipleselect/multiple-select.js"></script>
    <script src="<?= base_url('') ?>assets/assets_login/plugins/multipleselect/multi-select.js"></script>
    <script>
        $('#Provinsi').on('change', function() {
            let idProvinsi = $(this).val();
            // console.log(idProvinsi)
            $.ajax({
                url: '<?= base_url() ?>auth/getKota',
                method: 'post',
                data: {
                    idProvinsi: idProvinsi
                },
                type: "post",
                success: function(response) {
                    $('#Kota').html("")
                    $('#Kota').html(response);
                    // console.log(response)
                }

            });
        })
    </script>
</body>

</html>
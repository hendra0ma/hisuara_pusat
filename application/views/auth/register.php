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
    <style>
    .picture___input {
      display: none;
    }

    .picture {
      width: 300px;
      aspect-ratio: 16/9;
      background: #ddd;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #aaa;
      border: 2px dashed currentcolor;
      cursor: pointer;
      font-family: sans-serif;
      transition: color 300ms ease-in-out, background 300ms ease-in-out;
      outline: none;
      overflow: hidden;
    }

    .picture:hover {
      color: #777;
      background: #ccc;
    }

    .picture:active {
      border-color: turquoise;
      color: turquoise;
      background: #eee;
    }

    .picture:focus {
      color: #777;
      background: #ccc;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .picture__img {
      max-width: 100%;
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
            <img src="../../assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-5">
                    <div class="text-center">
                        <img src="<?= base_url('') ?>assets/images/garuda.png" class="img-fluid mx-auto mb-3 border-0" style="width:150px;height:auto;" alt="">
                    </div>
                </div>
                <div class="container mt-3 mb-7">
                    <div class="row justify-content-sm-center">
                        <div class="col-lg-6">
                            <div class="wrap-login100 p-0">

                                <div class="card-body">
                                    <div class="col col-login mx-auto">
                                        <div class="text-center">
                                            <img src="<?= base_url('') ?>assets/images/hisuara_new.png" class="img-fluid img-thumbnail mx-auto mb-3 border-0" style="width:150px;height:auto;" alt="">
                                        </div>
                                    </div>
                                    <form class="justify-content-center validate-form" method="POST" action="<?= base_url() ?>auth/daftar"enctype="multipart/form-data">
                                        <span class="login100-form-title" style="padding-bottom: 0.75rem ">
                                            Registrasi
                                        </span>
                                        <?php if ($this->session->flashdata('error')) : ?>
                                            <div class="alert alert-damger alert-dismissible fade show" role="alert">
                                                <?= $this->session->flashdata('error') ?>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        <?php endif ?>
                                        <?php if ($this->session->userdata('response')) : ?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <?php
                                                $response = json_decode($this->session->userdata('response'), true);
                                                ?>

                                                <?php if (isset($response['message'])) : ?>
                                                    <ul>
                                                        <li>
                                                            <?= $response['message'] ?>
                                                        </li>
                                                    </ul>
                                                <?php else : ?>
                                                    <ul>
                                                    <?php foreach ($response['errors'] as $field => $messages) : ?>
                                                            <?php foreach ($messages as $message) : ?>
                                                                <li>
                                                                    <?= $message ?>
                                                                </li>
                                                            <?php endforeach ?>


                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                                <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="alert" aria-label="Close"> X </button>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <select class="form-control select2-show-search form-select select2-hidden-accessible" name="role" id="role" tabindex="-1" aria-hidden="true">
                                                <option selected>Pilih Role</option>
                                                <option value="tps|8">Saksi</option>
                                                <option value="tdk|16">Enumerator</option>
                                                <option value="tdk|9">Rekapitulator</option>
                                                <option value="tps|14">Relawan Tps</option>
                                                <option value="tdk|1">Admin</option>
                                                <!-- <option value="tdk|3">Auditor</option>  -->
                                            </select>
                                        </div>


                                        <div class="wrap-input100 validate-input">
                                            <input class="input100" type="text" name="nik" placeholder="Masukkan Nomor Induk Kependudukan (No. KTP)" maxlength="16" autocomplete="nik">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="mdi mdi-account-card-details" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="wrap-input100 validate-input">
                                            <input class="input100" type="text" name="name" placeholder="Masukkan Nama Lengkap">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="mdi mdi-account" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="wrap-input100 validate-input">
                                            <input class="input100" type="text" name="alamat" placeholder="Masukkan Alamat Lengkap">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="mdi mdi-home" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <input class="input100" type="text" name="email" placeholder="Masukkan Alamat Email">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="wrap-input100 validate-input">
                                            <input class="input100" type="text" name="no_hp" placeholder="Masukkan Nomor Handphone">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="mdi mdi-cellphone" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                            <input class="input100" type="password" name="password" placeholder="Masukkan Password">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                            <input class="input100" type="password" name="password_confirmation" placeholder="Masukkan Ulang Password">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                            </span>
                                        </div>

                                        <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                            <label class="form-label mt-3">Upload Foto Ktp</label>
                                            <label class="picture" for="picture__input" tabIndex="0">
                                                <span class="picture__image"></span>
                                            </label>

                                            <input type="file" name="foto_ktp" id="picture__input"class="picture___input">
                                        </div>

                                        <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                            <label class="form-label mt-3">Upload Foto Profile</label>
                                            <label class="picture" for="picture__input2" tabIndex="0">
                                                <span class="picture__image2"></span>
                                            </label>

                                            <input type="file" name="foto_profil" id="picture__input2"class="picture___input">
                                        </div>




                                        <div id="role-admin" style="display:none">

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
                                        </div>

                                        <div id="role-saksi" style="display:none">
                                            <div class="form-group">
                                                <select class="form-control select2-show-search form-select select2-hidden-accessible" name="kecamatan" id="Kecamatan" tabindex="-1" aria-hidden="true">
                                                    <option selected disabled>Pilih Kecamatan</option>


                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control select2-show-search form-select select2-hidden-accessible" name="kelurahan" id="Kelurahan" tabindex="-1" aria-hidden="true">
                                                    <option selected disabled>Pilih Kelurahan / Desa</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control select2-show-search form-select select2-hidden-accessible" name="tps" id="tps" tabindex="-1" aria-hidden="true">
                                                    <option selected disabled>Pilih TPS</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                        <div class="text-center pt-3">
                                            <p class="text-dark mb-0">Already have account?<a href="<?= base_url('/') ?>" class="text-primary ms-1">Sign In</a></p>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <section class="bg-light">
                    <div class="container pt-5">
                        <!-- <img style="display: block; margin-left: auto; margin-right: auto;" src="../../assets/images/acakey_new.png" width="250px" class="pt-5 mb-5"> -->
                        <div class="text-center pb-5" style="font-size: 13px;">
                            © Hisuara.id <br />
                            All Right Reserved 2021
                        </div>
                    </div>
                </section>
                <!-- CONTAINER CLOSED -->
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- END PAGE -->

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
    <script src="<?= base_url('') ?>assets/assets_login/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- MULTI SELECT JS-->
    <script src="<?= base_url('') ?>assets/assets_login/plugins/multipleselect/multiple-select.js"></script>
    <script src="<?= base_url('') ?>assets/assets_login/plugins/multipleselect/multi-select.js"></script>


    <script>
        $('#role').on('change', function() {
            let cekTps = $(this).val().split("|");
            if (cekTps[0] == "tps") {
                // console.log("hai")
                $('#role-admin').show(100);
                $('#role-saksi').show(100);
            } else if (cekTps[0] == "tdk") {
                $('#role-admin').show(100);
                $('#role-saksi').hide(100);

                // console.log("halo")
            } else {
                $('#role-admin').hide(100);
                $('#role-saksi').hide(100);

            }
        });

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
        $('#Kota').on('change', function() {
            let idKota = $(this).val();
            // console.log(idKota)
            $.ajax({
                url: '<?= base_url() ?>auth/getKec',
                method: 'post',
                data: {
                    idKota: idKota
                },
                dataType: "json",
                success: function(response) {
                    $('#Kecamatan').html("")
                    response.forEach((item, id) => {
                        var option = $(`<option value="${item.id}">${item.name}</option>`); // Membuat elemen baru
                        $('#Kecamatan').append(option)
                    })
                }

            });
        })

        $('#Kecamatan').on('change', function() {

            let idKec = $(this).val();

            $.ajax({
                url: '<?= base_url() ?>auth/getKel',
                method: 'post',
                data: {
                    idKec: idKec
                },
                dataType: "json",
                success: function(response) {
                    $('#Kelurahan').html("")
                    response.forEach((item, id) => {
                        var option = $(`<option value="${item.id}">${item.name}</option>`); // Membuat elemen baru
                        $('#Kelurahan').append(option)
                    })

                    // console.log(response)
                }

            });
        })

        $('#btn-close').on('click', function() {
            $.ajax({
                url: '<?= base_url() ?>auth/btnClose',
                method: 'post',

                success: function(response) {}

            });
        })


        $('#Kelurahan').on('change', function() {

            let idKel = $(this).val();

            $.ajax({
                url: '<?= base_url() ?>auth/getTps',
                method: 'post',
                data: {
                    idKel: idKel
                },
                dataType: "json",
                success: function(response) {
                    $('#tps').html("Pilih TPS")
                    if (response.messages != null) {
                        var option = $(`<option disabled>Data Tps Kosong</option>`); // Membuat elemen baru
                        $('#tps').append(option)
                    }
                    response.forEach((item, id) => {
                        var option = $(`<option value="${item.id}">${item.number}</option>`); // Membuat elemen baru
                        $('#tps').append(option)
                    })
                    // console.log(response)
                }

            });
        })


        const inputFile = document.querySelector("#picture__input");
        const inputFile2 = document.querySelector("#picture__input2");
        const pictureImage = document.querySelector(".picture__image");
        const pictureImage2 = document.querySelector(".picture__image2");
        // const pictureImageTxt = "Choose an image";
          pictureImage.innerHTML = "Pilih Foto Ktp";
          pictureImage2.innerHTML = "Pilih Foto Profile";

    inputFile.addEventListener("change", function(e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function(e) {
                const readerTarget = e.target;

                const img = document.createElement("img");
                img.src = readerTarget.result;
                img.classList.add("picture__img");

                pictureImage.innerHTML = "";
                pictureImage.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage.innerHTML = "Pilih Foto Ktp";
        }
    });

    inputFile2.addEventListener("change", function(e) {
        const inputTarget = e.target;
        const file = inputTarget.files[0];

        if (file) {
            const reader = new FileReader();

            reader.addEventListener("load", function(e) {
                const readerTarget = e.target;

                const img = document.createElement("img");
                img.src = readerTarget.result;
                img.classList.add("picture__img");

                pictureImage2.innerHTML = "";
                pictureImage2.appendChild(img);
            });

            reader.readAsDataURL(file);
        } else {
            pictureImage2.innerHTML = "Pilih Foto Profile";
        }
    });

    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Siaga Covid</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="Informasi Jumlah Penderita Virus Covid-19">
    <meta name="author" content="">
    <meta name="keyword" content="Covid-19, Corona Virus">
    <meta name="csrf" id="<?= $this->security->get_csrf_token_name(); ?>" content="<?= $this->security->get_csrf_hash(); ?>">
    <meta name="mapbookapi" id="mapbookapi" content="<?= KEY_MAPBOXAPI; ?>">

    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url('kapella/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('kapella/vendors/base/vendor.bundle.base.css'); ?>">
    <!-- endinject -->

    <!-- plugin css for this page -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= base_url('plugins/datatables/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables/Select-1.2.4/css/select.bootstrap4.min.css'); ?>">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('kapella/css/style.css'); ?>">
    <!-- endinject -->

    <link rel="shortcut icon" href="<?= base_url('kapella/images/icon.png'); ?>" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script>
        var public_html = "<?= base_url(); ?>";
    </script>

    <!-- base:js -->
    <script src="<?= base_url('kapella/vendors/base/vendor.bundle.base.js'); ?>"></script>

    <!-- datatables -->
    <script src="<?= base_url('plugins/datatables/datatables.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables/Select-1.2.4/js/dataTables.select.min.js'); ?>"></script>
    <!-- endinject -->

    <script src="<?= base_url('kapella/js/my.js'); ?>" type="text/javascript"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            </nav>
            <nav class="bottom-navbar">
                <div class="container">
                    <ul class="nav page-navigation">
                        <?php
                        $url = array(
                            0 => array(
                                'name' => 'Home',
                                'url' => site_url('home'),
                                'class' => 'home',
                                'icon' => 'mdi-file-document-box',
                            ),
                            1 => array(
                                'name' => 'RS Rujukan',
                                'url' => site_url('wilayah'),
                                'class' => 'wilayah',
                                'icon' => 'mdi-map-marker-radius',
                            ),
                            2 => array(
                                'name' => 'Hotline',
                                'url' => site_url('about'),
                                'class' => 'about',
                                'icon' => 'mdi-account-box-outline',
                            ),
                        );

                        $class = ($this->uri->segment(1)) ? $this->uri->segment(1) : 'home';
                        $title = "Home";
                        foreach ($url as $value) {
                            if (($value['class'] == $class)) {
                                $title = $value['name'];
                            }
                        ?>

                            <li class="nav-item <?= ($value['class'] == $class) ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?= $value['url']; ?>" style="padding: 5px 32px;">
                                    <i class="mdi <?= $value['icon']; ?> menu-icon"></i>
                                    <span class="menu-title"><?= $value['name']; ?></span>
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <?php echo $template['body']; ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="footer-wrap" style="padding: 5px 1rem;">
                        <div class="w-100 clearfix">
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- inject:js -->
    <script src="<?= base_url('kapella/js/template.js'); ?>"></script>
    <!-- endinject -->
</body>

</html>
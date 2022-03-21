<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="http://simunipa.unipa.ac.id/styles/css1/demo-common.css" />
    <link rel="stylesheet" type="text/css" href="http://simunipa.unipa.ac.id/styles/css1/demo-element.css" />
    <title></title>
    <script type="text/javascript" src="http://simunipa.unipa.ac.id/scripts/jquery.js"></script>
    <script type="text/javascript">
        function toggle_drawer(drawer_obj) {
            if (document.getElementById(drawer_obj).style.height == "0px")
                $(document.getElementById(drawer_obj)).show("fast");
            else
                $(document.getElementById(drawer_obj)).hide("fast");
        }
    </script>
    <style>
        #footer {
            width: 100%;
            color: #FFFFFF;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 10px;
            text-align: center;
            background-color: transparent !important;
            position: fixed;
            bottom: 0px;
            left: 0px;
            z-index: 16;
            overflow: hidden;
            margin: 0px auto 0px auto;
            padding: 8px 0px 0px 12px;
            background-image: url(http://simunipa.unipa.ac.id/styles/images1/header2.jpg);
            height: 76px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body id="common">
    <div id="header"></div>
    <div id="page">
        <div id="maincontent">
            <div class="content">
                <!--start-product-->
                <div class="products">
                    <!-- <img style="cursor:pointer;" onclick="toggle_drawer('filter-drawer-A');" src="http://simunipa.unipa.ac.id/styles/images/academic_ms.gif" /> -->
                    <div id="filter-drawer-A">
                        <img src="http://simunipa.unipa.ac.id/images/academica.jpg" />
                        <ul>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="<?php echo site_url('/'); ?> " target='_blank'>
                                        Portal PMB</a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://simunipa.unipa.ac.id/gtakademik_portal/" target='_blank'>
                                        Undangan Sesama</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <img src="http://simunipa.unipa.ac.id/styles/images/bottom2.gif" />
                </div>
                <!--end-of-product-->

            </div>
        </div>
    </div>
    <div id="footer">
        Copyright Biro Perencanaan Akademik dan Kemahasiswaan Universitas Papua &copy; 2021. Hak cipta dilindungi undang-undang.
    </div>
</body>

</html>
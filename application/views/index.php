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
</head>

<body id="common">
    <div id="header"></div>
    <div id="page">
        <div id="maincontent">
            <div class="content">

                <!--start-product-->

                <div class="products">
                    <img style="cursor:pointer;" onclick="toggle_drawer('filter-drawer-A');" src="http://simunipa.unipa.ac.id/styles/images/academic_ms.gif" />
                    <div id="filter-drawer-A">
                        <img src="http://simunipa.unipa.ac.id/images/academica.jpg" />
                        <ul>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://simunipa.unipa.ac.id/gtakademik/" target='_blank'>
                                        Sistem Informasi Akademik (Dekan,Wd,Prodi,Akademik) </a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://simunipa.unipa.ac.id/gtakademik_portal/" target='_blank'>
                                        Portal Akademik (Dosen|Mahasiswa) </a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://simunipa.unipa.ac.id/gtregistrasi/" target='_blank'>
                                        Sistem Informasi Registrasi </a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://simunipa.unipa.ac.id/gtpembayaran/" target='_blank'>
                                        Sistem Informasi Pembayaran </a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://simunipa.unipa.ac.id/gtadmisi/" target='_blank'>
                                        Sistem Informasi Admisi / PMB </a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://simunipa.unipa.ac.id/gtsdm/fo/" target='_blank'>
                                        Portal Kepegawaian </a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://simunipa.unipa.ac.id/gtsdm/bo/" target='_blank'>
                                        Sistem Informasi Kepegawaian </a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://alumni.unipa.ac.id" target='_blank'>
                                        Portal Alumni </a>
                                </div>
                            </li>

                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <a href="http://alumni.unipa.ac.id/bo/" target='_blank'>
                                        Sistem Informasi Alumni </a>
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
        Copyright UNIPA &copy; 2016. Hak cipta dilindungi undang-undang.
    </div>

</body>

</html>
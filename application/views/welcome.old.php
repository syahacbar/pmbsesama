<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="http://simunipa.unipa.ac.id/styles/css1/demo-common.css" />
    <link rel="stylesheet" type="text/css" href="http://simunipa.unipa.ac.id/styles/css1/demo-element.css" />
    <title>pmb.unipa.ac.id</title>
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

        #common {
            margin: 0px;
            padding: 0px;
            background: url(https://unipa.ac.id/wp-content/uploads/2021/01/banner1-1-scaled.jpg) #FFFFFF repeat-x;
            border: 0;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        #page {
            width: 764px;
            height: auto;
            background: transparent;
            border: 0 !important;
            margin: 10% auto 20% auto;
            padding: 0px 0px 80px 0px;
            overflow: hidden !important;
        }

        div#maincontent {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .products li {
            background: no-repeat;
            border: 0;
            margin: 0;
            background-image: none !important;
        }

        #filter-drawer-A img {
            border: 0;
            float: left;
            padding: 4px;
            margin: 0;
        }

        #filter-drawer-A {
            overflow: hidden;
            background: none;
            padding: 0px 0px;
            margin: 0px 0px;
            background-color: #fff;
            border-radius: 30px;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgb(31 38 135 / 37%);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .products ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .products li {
            background: no-repeat;
            border: 0;
            margin: 0;
            background-image: none !important;
            padding: 0;
        }

        .products li {
            background: no-repeat;
            border: 0;
            background-image: none !important;
            width: 54%;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            margin: 10px;
            min-width: 60%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        .products li .title {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .products li img {
            width: 50px;
            margin-bottom: 10px !important;
        }
    </style>
</head>

<body id="common">
    <div id="page">
        <div id="maincontent">
            <div class="content">
                <div class="products">
                    <div id="filter-drawer-A">
                        <ul>
                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <img src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop-outline.svg">
                                    <a href="<?php echo site_url('auth/login'); ?> " target='_blank'>Portal PMB</a>
                                </div>
                            </li>
                            <li>
                                <div class="label">
                                </div>
                                <div class="title">
                                    <img src="https://unpkg.com/ionicons@5.5.2/dist/svg/desktop-outline.svg">
                                    <a href="https://bpak.unipa.ac.id/undangansesama/" target='_blank'>Undangan Sesama</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        Copyright BPAK UNIPA &copy; 2021. Hak cipta dilindungi undang-undang.
    </div>
</body>

</html>
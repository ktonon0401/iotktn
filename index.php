<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sidebar Dashboard Template With Sub Menu</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>

        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
            <div class="header">
                <div class="header-menu">
                    <div class="title"><a href="index.php" class="menu-btn" style="color: #4CCEE8;">iot project</a></div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fas fa-search"></i></a></li>
                        <li><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li><a href="#"><i class="fas fa-power-off"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--header menu end-->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="1.jpg" alt="">
                        <p>IOT</p>
                    </center>
                    <!-- <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-dxesktop"></i><span>Dashboard</span>
                        </a>
                    </li> -->
                    <li class="item" id="profile">
                        <a href="profile.php" class="menu-btn">
                            <i class="fas fa-user-circle"></i><span>Profile </span>
                        </a>
                        <!-- <div class="sub-menu">
                            <a href="#"><i class="fas fa-image"></i><span>Picture</span></a>
                            <a href="#"><i class="fas fa-address-card"></i><span>Info</span></a>
                        </div> -->
                    </li>
                    <li class="item" id="operation">
                        <a href="#operation" class="menu-btn">
                            <i class="fas fa-envelope"></i><span>Operation <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="CNN.php"><i class="fas fa-envelope"></i><span>CNN</span></a>
                            <a href="chart.php"><i class="fas fa-envelope-square"></i><span>Chart</span></a>

                            <!-- <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a> -->
                        </div>
                    </li>
                    <li class="item" id="settings">
                        <a href="#settings" class="menu-btn">
                            <i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
                            <a href="#"><i class="fas fa-language"></i><span>Language</span></a>
                        </div>
                    </li>
                    <!-- <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>About</span>
                        </a>
                    </li> -->
                </div>
            </div>
            <!--sidebar end-->
        </div>
        <!--wrapper end-->

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>

    </body>
</html>

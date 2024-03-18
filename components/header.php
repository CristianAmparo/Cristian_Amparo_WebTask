<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>

<!-- Header Starts here -->
<header class="fixed top-0 left-0 right-0 w-screen bg-white h-[89px] z-50">
    <div class="mx-auto flex items-center justify-between lg:justify-start lg:pl-20 py-[10px] lg:pr-40 pl-0 md:px-16 pr-5 lg:gap-[280px] xl:w-[1440px] w-full h-[89px] bg-white">
        <img class="md:scale-100 scale-75" src="./images/logo.png" alt="">
        <nav class="font-Nunito sm:flex hidden sm:w-auto w-screen text-center" id="nav">
            <ul class="navBigScreen" id="navlist">
                <a class="<?= ($page == 'index.php') ? 'activeNav' : '' ?>" href="index.php">
                    <li>Home</li>
                </a>
                <a class="<?= ($page == 'about.php') ? 'activeNav' : '' ?>" href="about.php">
                    <li>About Us</li>
                </a>
                <a class="<?= ($page == 'services.php') ? 'activeNav' : '' ?>" href="services.php">
                    <li>Services</li>
                </a>
                <a class="<?= ($page == 'contactus.php') ? 'activeNav' : '' ?>" href="contactus.php">
                    <li>Contact Us</li>
                </a>
            </ul>
        </nav>
        <div class="w-5 flex sm:hidden cursor-pointer" id="mobile-menu-toggle">
            <img id="toggle-image" src="./images/hamburger.png" alt="">
        </div>
    </div>
</header>
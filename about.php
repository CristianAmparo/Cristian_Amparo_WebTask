<!-- Include Head and Header-->
<?php
include('components/head.php');
include('components/header.php');
?>

<body>
    <!-- All Content of Home Page Starts Here-->
    <main class="3xl:w-full 2xl:w-[1440px] w-full h-auto  2xl:mx-auto  font-Nunito   ">

        <!-- About Us Container Section Include -->
        <div class="h-screen bg-black flex items-center justify-center">
            <?php include('components/aboutUsSection.php') ?>
        </div>


        <!-- Services Container Section Include -->
        <?php include('components/servicesSection.php') ?>


        <!-- Offer Container Section Start-->
        <section class="relative bg-white flex xl:flex-row flex-col-reverse gap-5 justify-center items-center  w-full overflow-hidden md:p-[60px] p-5 font-Nunito">
            <div class="circle absolute -top-20 -left-36 bg-tertiary"></div>
            <div class="circle absolute -bottom-24 -right-48 bg-tertiary"></div>
            <div class="flex flex-col gap-[30px]">
                <div class="text-center ">
                    <h3 class="md:text-[20px] text-[16px] font-bold p-2">Our Team</h3>
                    <h1 class="md:text-[50px] text-2xl font-bold text-tertiary">What We Offer</h1>
                </div>
                <div class="flex items-center justify-center p-[10px] gap-[10px] flex-wrap " data-aos="fade-right">
                    <div class="flex flex-col justify-center items-center ">
                        <img class=" w-[304px] h-[237px]" src="./images/team/image1.png" alt="">
                        <h3 class="text-[20px] font-medium">Ethan Mitchell</h3>
                        <p class="text-[16px]">CEO</p>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <img class="w-[304px] h-[237px]" src="./images/team/image2.png" alt="">
                        <h3 class="text-[20px] font-medium">Olivia Anderson</h3>
                        <p class="text-[16px]">COO</p>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <img class="w-[304px] h-[237px]" src="./images/team/image3.png" alt="">
                        <h3 class="text-[20px] font-medium">Lucas Harrison</h3>
                        <p class="text-[16px]">CFO</p>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <img class="w-[304px] h-[237px]" src="./images/team/image4.png" alt="">
                        <h3 class="text-[20px] font-medium">Sofia Bennett</h3>
                        <p class="text-[16px]">CIO</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer Container Section End-->

        <!-- Testimonial Container Section Include -->
        <?php include('components/testimonialSection.php') ?>

        <!-- Include Footer-->
        <?php include('components/footer.php') ?>



    </main>
    <!-- All Content of Home Page Ends Here-->

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/script.js"></script>

</html>
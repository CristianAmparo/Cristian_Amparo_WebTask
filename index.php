<!-- Include Head and Header-->
<?php
include('components/head.php');
include('components/header.php');
?>

<body class="overflow-x-hidden">
    <!-- All Content of Home Page Starts Here-->
    <main class="3xl:w-full 2xl:w-[1440px] w-full h-auto  2xl:mx-auto  font-Nunito ">
        <!-- Landing Page Container Section Start -->
        <section class="flex xl:flex-row flex-col items-center justify-center  gap-[30px]  lg:pl-[80px] w-full 2xl:h-screen" data-aos="fade-down">
            <div class="flex flex-col justify-center items-start gap-[20px]  md:w-[607px] h-[486px] px-5  ">
                <h3 class="2xl:text-[20px] md:text-[18px] text-[16px] font-bold text-secondary">Your Partner in Business
                    Success
                </h3>
                <h1 class="2xl:text-[80px] md:text-[70px] text-[40px] -my-5 font-extrabold text-headingColor textShadow">
                    AMT AGENCY
                </h1>
                <p class="2xl:text-[16px] md:text-[14px] text-[12px] text-tertiary">Forge a powerful alliance with a
                    team that
                    understands your goals.
                    We're not just
                    service providers;
                    we're your partners
                    in success
                </p>
                <button class="bg-tertiary xl:text-base md:text-sm text-xs text-white xl:px-10 xl:py-4 px-8 py-3 rounded-lg">Get
                    Started</button>

            </div>
            <img class="2xl:w-[725px] max-w-[725px] lg:w-[625px] w-full xl:ml-0 lg:-ml-[80px] lg:mt-0 -mt-32 h-auto" src="./images/home-image1.png" alt="">
        </section>
        <!-- Landing Page Container Section End -->

        <!-- Services Container Section Include -->
        <?php include('components/servicesSection.php') ?>

        <!-- About Us Container Section Include -->
        <?php include('components/aboutUsSection.php') ?>


        <!-- Logos Container Section Start-->
        <section class="flex  items-center justify-center min-h-[207px] py-14" data-aos="fade-up">
            <div class="flex flex-wrap gap-7 items-center justify-center bg-white">
                <img class="lg:w-[246px] w-[150px] h-auto" src="./images/home-image6.png" alt="">
                <img class="lg:w-[246px] w-[150px]" src="./images/home-image7.png" alt="">
                <img class="lg:w-[246px] w-[150px]" src="./images/home-image8.png" alt="">
                <img class="lg:w-[246px] w-[150px]" src="./images/home-image9.png" alt="">
            </div>
        </section>
        <!-- Logos Container Section End-->


        <!-- Video Container Section Star t-->
        <section class="lg:px-[67px] lg:py-[62px] md:px-8 md:py-8 px-5 py-5  flex justify-center">
            <div class="w-[1285px] aspect-video rounded-3xl overflow-hidden" data-aos="zoom-in">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/wAmbDCJocJM?si=WIKJo1AJedSgzh7p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
            </div>
        </section>
        <!-- Video Container Section End -->


        <!-- Testimonial Container Section include -->
        <?php include('components/testimonialSection.php') ?>


        <!-- Contact Us Section Container Start-->
        <section class="flex items-center justify-center w-full md:px-[70px] md:py-[60px] px-5 py-5" data-aos="zoom-out">
            <div class="flex xl:flex-row flex-col items-center justify-center bg-tertiary md:p-[50px] px-5 font-Poppins rounded-[18px] w-[1290px]">
                <div class=" flex flex-col items-start gap-[25px] h-[416px] justify-center sm:w-[537px]">
                    <h3 class="2xl:text-[20px] md:text-[18px] text-[16px] text-white">Your Partner in Business
                        Success</h3>
                    <h1 class="2xl:text-[40px] md:text-[30px] text-[25px]  font-bold text-headingColor">
                        Got A Question? We Would Be Happy To Help!
                    </h1>
                    <p class="2xl:text-[16px] md:text-[14px] font-Nunito text-[12px] text-white">Forge a powerful
                        alliance with a
                        team that understands your goals. We're not just service providers; we're your partners
                        in success
                    </p>
                    <div class="flex gap-[10px]">
                        <button class="flex items-center gap-[10px] bg-headingColor font-bold xl:text-base md:text-sm text-xs text-white xl:px-10 xl:py-4 px-8 py-3 rounded-lg">
                            <img class="md:w-3 w-2" src="./images/facebook.png" alt="">
                            Visit Us
                        </button>
                        <button class="bg-secondary font-bold xl:text-base md:text-sm text-xs text-white xl:px-10 xl:py-4 px-8 py-3 rounded-lg">Contact
                            Us</button>
                    </div>

                </div>
                <img class="md:w-[676px] h-auto md:mt-0 -mt-10" src="./images/rocketman.png" alt="">
            </div>
        </section>
        <!-- Contact Us Section Container End-->

        <!-- Include Footer-->
        <?php include('components/footer.php') ?>


    </main>
    <!-- All Content of Home Page End Here-->



</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/script.js"></script>


</html>
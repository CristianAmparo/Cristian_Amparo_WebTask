<!-- Include Head and Header-->
<?php
include('components/head.php');
include('components/header.php');
?>

<body>
    <!-- Contact Us Page Starts here-->
    <main class="3xl:w-full 2xl:w-[1440px] w-full h-auto  2xl:mx-auto  font-Nunito ">

        <!-- Form Section Container Starts here-->
        <section class="relative bg-white flex xl:flex-row flex-col-reverse gap-5 md:justify-center justify-end items-center min-h-[742px] h-screen w-full overflow-hidden padding">
            <div class="circle absolute top-20 -left-36 bg-tertiary"></div>
            <div class="circle absolute bottom-32 -right-48 bg-tertiary"></div>
            <div class="flex gap-[30px] items-center justify-center md:pt-0 pt-[40px]">
                <img class="w-[657px] h-[582px] 2xl:flex hidden" src="./images/contactUsImage1.png" alt="" data-aos="fade-right" data-aos-delay="100">
                <div class="lg:w-[620px] w-full " data-aos="fade-left" data-aos-delay="100">
                    <form action="" class="flex flex-col gap-[30px]">
                        <h1 class="2xl:text-[50px] md:text-[50px] text-[26px]  font-bold text-tertiary">
                            Get In Touch With Us
                        </h1>
                        <div class="flex w-full justify-between lg:gap-[40px] gap-4">
                            <input type="text" name="Name" id="Name" placeholder="Full Name" class="w-1/2">
                            <input type="text" name="Subject" id="Subject" placeholder="Subject" class="w-1/2">
                        </div>
                        <input type="text" name="Email" id="Email" placeholder="Email" class="w-full">
                        <textarea type="text" name="Message" id="Message" placeholder="Message" class="border border-tertiary h-[270px] rounded-[18px] w-full px-[34px] py-[14px]">
                        </textarea>
                        <div class="w-full flex justify-end">
                            <button class="bg-tertiary xl:text-base md:text-sm text-xs text-white xl:px-10 xl:py-4 px-8 py-3 rounded-lg font-Poppins font-bold">
                                Submit
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </section>
        <!-- Form Section Container Ends here-->

        <!-- Contacts Container Section Start -->
        <section class="relative flex items-center justify-center min-h-[534px] padding lg:p-[50px] bg-backgroundColor overflow-hidden font-semibold ">
            <div class="circle absolute -top-32 -left-56 bg-primary"></div>
            <div class="circle absolute -bottom-36 -right-48 bg-primary"></div>
            <div class="flex flex-wrap justify-center font-Poppins gap-[50px] items-center">
                <div class="w-[271px] h-[322px] bg-white rounded-[18px] flex flex-col items-center justify-center gap-[13px] border border-tertiary" data-aos="fade-down" data-aos-delay="50">
                    <img class="w-[70px] h-[70px]" src="./images/contact/email.png" alt="">
                    <h3 class="text-[20px] font-medium ">Email</h3>
                    <div class="w-[216px] text-center font-normal">
                        <p>(51) 123-123456</p>
                        <p>(51) 123-123456</p>
                    </div>
                </div>

                <div class=" w-[271px] h-[322px] bg-white rounded-[18px] flex flex-col items-center justify-center gap-[13px] border border-tertiary" data-aos="fade-down" data-aos-delay="70">
                    <img class="w-[70px] h-[70px]" src="./images/contact/address.png" alt="">
                    <h3 class="text-[20px] font-medium ">Address</h3>
                    <div class="w-[216px] text-center font-normal">
                        <p>talentus@gmail.com</p>
                    </div>
                </div>

                <div class="w-[271px] h-[322px] bg-white rounded-[18px] flex flex-col items-center justify-center gap-[13px] border border-tertiary" data-aos="fade-down" data-aos-delay="90">
                    <img class="w-[70px] h-[70px]" src="./images/contact/clock.png" alt="">
                    <h3 class="text-[20px] font-medium ">Working Hours</h3>
                    <div class="w-[216px] text-center font-normal">
                        <p>Rockwell Center, 5/F Phinma Plaza, 39 Plaza Dr, Makati, 1200 Metro Manila</p>
                    </div>
                </div>

                <div class="w-[271px] h-[322px] bg-white rounded-[18px] flex flex-col items-center justify-center gap-[13px] border border-tertiary" data-aos="fade-down" data-aos-delay="110">
                    <img class="w-[70px] h-[70px]" src="./images/contact/phone.png" alt="">
                    <h3 class="text-[20px] font-medium ">Phone</h3>
                    <div class="w-[216px] text-center font-normal">
                        <p>(09) 123-123456</p>
                        <p>(09) 123-123456</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- Contacts Container Section End -->

        <!-- Map Container Section Start -->
        <section class="flex items-center justify-center padding lg:p-[50px] w-full" data-aos="zoom-out">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.614690912447!2d121.03484287614339!3d14.564013185918062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c98c59c8936b%3A0xd8d8b7d754dd071e!2sAcceler8%20by%20UnionSPACE%20-%20Rockwell!5e0!3m2!1sen!2sph!4v1710315828568!5m2!1sen!2sph" class="w-full max-w-[1300px] aspect-video" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!-- Map Container Section End -->

        <!-- Include Footer-->
        <div class="bg-backgroundColor w-full">
            <?php include('components/footer.php') ?>
        </div>




    </main>
    <!-- Contact Us Page Ends here-->

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/script.js"></script>

</html>
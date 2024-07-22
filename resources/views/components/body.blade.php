@php
    $startCareer = 2021;
    $experience = date('Y') - $startCareer;
@endphp

<Layout title="Yoga Agung Prasetio | Full Stack Web Developer">
    <main>
        <!--================ Start Home Banner Area =================-->
        <section class="home_banner_area" id="home">
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="banner_content">
                                <h3 class="text-uppercase">Hello</h3>
                                <h1 class="text-uppercase">I am Yoga Agung Prasetio</h1>
                                <h5 class="text-uppercase">Full Stack Developer</h5>
                                <div class="d-flex align-items-center">
                                    <a class="primary_btn" href="https://wa.me/62881080002564" target="_blank"><span>Get
                                            In Touch</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="profile_img">
                                <img class="img-fluid" src="img/home-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--================ End Home Banner Area =================-->

        <!--================ Start About Us Area =================-->
        <section class="about_area" id="about">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-5">
                        <div class="about_img">
                            <img src="img/about-us.png" alt="">
                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-5">
                        <div class="main_title text-left">
                            <h2>let’s <br>
                                Introduce about <br>
                                myself</h2>
                            <p>
                                Person who learn new things, even it's not about code. Experienced in
                                {{ $experience }}+
                                years being developer, I have working on variety project website, apps and api.
                            </p>
                            <a class="primary_btn" target="_blank"
                                href="https://drive.google.com/file/d/1EcnqM2DGZ6sQ-XkoTyb_YEdtOZQqhRa0/view?usp=drive_link"><span>Download
                                    CV</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End About Us Area =================-->

        <!--================ Start Projects Area =================-->
        <section class="projects_area" id="projects">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="main_title">
                            <h2>Projects</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <x-project title="HCDEV - Petrokimia"
                        :images="[
                            asset('img/portofolio/petrokimia/home.png'),
                            asset('img/portofolio/petrokimia/login.png')
                        ]"
                        about="HCDEV is a website that I developed during my tenure at CV Mamorasoft. This platform was crafted with the aim of assisting PT. Petrokimia Gresik in streamlining and enhancing their hiring process, ensuring efficiency and effectiveness throughout."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Yii2","MySQL"]'
                        website="https://recruitment.petrokimia-gresik.com/" github="" />

                    <x-project title="Indofarm"
                        :images="[
                            asset('img/portofolio/indofarm/home.png'),
                            asset('img/portofolio/indofarm/login-customer.png'),
                            asset('img/portofolio/indofarm/login-admin.png'),
                            asset('img/portofolio/indofarm/dashboard.png')
                        ]"
                        about="Online store website where selling genset, diesel machine and other things for support agriculture. They have product from many brands, and support payment from bank transfer to digital money like Gopay, Ovo, and Dana."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","MySQL"]'
                        website="https://indofarm.id/" github="" />

                    <x-project title="Kampus Merdeka"
                        :images="[
                            asset('img/portofolio/mbkm/home.png'),
                            asset('img/portofolio/mbkm/login.png'),
                            asset('img/portofolio/mbkm/dashboard.png')
                        ]"
                        about="LMS websites focus on certain segments, like report what your do today for mentee, register program for mentee, review report from mentee for mentor, and others. Kampus merdeka is program from Education Ministry Indonesia for support education."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","CodeIgniter3","PgSQL"]'
                        website="https://kampusmerdeka.kemdikbud.go.id/" github="" />

                    <x-project title="ARK - TMS"
                        :images="[
                            asset('img/portofolio/ark/login.png'),
                            asset('img/portofolio/ark/dashboard.png'),
                            asset('img/portofolio/ark/transport-order.png')
                        ]"
                        about="ARK TMS is a cutting-edge website meticulously crafted by me and my team at TransTrack to assist PT ARK Logistics & Transportation in managing their logistical needs. From deliveries and vendors to transporters, vehicles, drivers, finances, and others that ARK requires. ARK TMS ensures that the logistics processes at PT ARK Logistics & Transportation operate smoothly and efficiently, empowering them to deliver excellence in every aspect of their operations."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","Livewire","MySQL"]'
                        website="https://arksystem.transtrack.id/" github="" />

                    <x-project title="MyTASK - API"
                        :images="[
                            asset('img/portofolio/mytask/login.png'),
                            asset('img/portofolio/mytask/api.png'),
                            asset('img/portofolio/mytask/dashboard.png')
                        ]"
                        about="MyTask is an innovative application designed by me and my team at TransTrack to meet the needs of monitoring attendance and assignments for TransTrack employees, particularly field operators. In this project, I was responsible for developing the API for MyTask and collaborated with FrontEnd Developers using ReactJS to enhance our teamwork experience. MyTask streamlines the process of monitoring and attendance, making it significantly easier and more efficient."
                        :stacks='["PHP","Lumen","MySQL"]'
                        website="https://mytask-api.transtrack.id/" github="" />

                    <x-project title="KBS - TAS"
                        :images="[
                            asset('img/portofolio/kbs-tas.png')
                        ]"
                        about="KBS TAS is website for KBS company, they use this website for manage their transportation queues, ritase, activities, exit and entry of a truck at the shipping dock. This website has feature for manage driver, vehicle, and schedule for when ship ready on shipping dock."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","Livewire","PgSQL","Docker"]'
                        website="https://kbs-tas.yoo.ga/" github="" />

                    <x-project title="KILOGS - WMS"
                        :images="[
                            asset('img/portofolio/kilogs/login.png'),
                            asset('img/portofolio/kilogs/dashboard.png'),
                            asset('img/portofolio/kilogs/inbound.png')
                        ]"
                        about="KiLogs WMS is website for KiLogs company, they use this website for manage their warehouse. This website has feature for manage product, stock, suggestion for product placement by type of product or high demand, and others."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","Livewire","PgSQL","Docker"]'
                        website="https://kilogs-warehouse.yoo.ga/" github="" />

                    <x-project title="Mostrans Integration"
                        :images="[
                            asset('img/portofolio/mostrans/login.png'),
                            asset('img/portofolio/mostrans/dashboard.png'),
                            asset('img/portofolio/mostrans/map.png')
                        ]"
                        about="Mostrans Integration is a project developed by the TransTrack team to assist TransTrack GPS users in integrating GPS and other data into the Mostrans application. The platform is designed to enhance data integration and management, making it easy and efficient for users to leverage their GPS information."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","Livewire","MySQL","Docker"]'
                        website="https://mostrans.transtrack.id/" github="" />

                    <x-project title="WPI - Solog"
                        :images="[
                            asset('img/portofolio/wpi/login.png'),
                            asset('img/portofolio/wpi/dashboard.png'),
                            asset('img/portofolio/wpi/schedule.png')
                        ]"
                        about="WPI Solog is a dynamic website meticulously crafted to empower PT Wangsa Pratama Internasional in managing their logistical requirements seamlessly. From data management to shipping, scheduling, financial management, vehicle and driver management and others that WPI requires. WPI Solog ensures that the logistics process at PT Wangsa Pratama Internasional operates smoothly and efficiently, enabling streamlined operations and enhanced productivity."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","AngularJS","MySQL","Docker"]'
                        website="https://wpi.solog.id/" github="" />
                </div>
            </div>
        </section>
        <!--================ End Projects Area =================-->
        <x-project-detail />
    </main>
</Layout>

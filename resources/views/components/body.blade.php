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

                    <x-project title="Indofarm" img="{{ asset('img/portofolio/indofarm.png') }}"
                        about="Online store website where selling genset, diesel machine and other things for support argicultur. They has product from many brands, and support payment from bank transfer to digital money like Gopay, Ovo, and Dana."
                        stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","MySQL"]'
                        website="https://indofarm.id/" github="" />

                    <x-project title="Kampus Merdeka" img="{{ asset('img/portofolio/kampus-merdeka.png') }}"
                        about="LMS websites focus on certain segments, like report what your do today for mentee, register program for mentee, review report from mentee for mentor, and others. Kampus merdeka is program from Education Ministry Indonesia for support education."
                        stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","CodeIgniter3","PgSQL"]'
                        website="https://kampusmerdeka.kemdikbud.go.id/" github="" />

                    <x-project title="KBS - TAS" img="{{ asset('img/portofolio/kbs-tas.png') }}"
                        about="KBS TAS is website for KBS company, they use this website for manage their transportation queues, ritase, activities, exit and entry of a truck at the shipping dock. This website has feature for manage driver, vehicle, and schedule for when ship ready on shipping dock."
                        stacks='["HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","ViteJS","PgSQL"]'
                        website="https://kbs-tas.yoo.ga/" github="" />

                    <x-project title="KILOGS - WMS" img="{{ asset('img/portofolio/kilogs-wms.png') }}"
                        about="KiLogs WMS is website for KiLogs company, they use this website for manage their warehouse. This website has feature for manage product, stock, suggestion for product placment by type of product or high demand, and others."
                        stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","ViteJS","PgSQL"]'
                        website="https://kilogs-warehouse.yoo.ga/" github="" />

                </div>

            </div>
        </section>
        <!--================ End Projects Area =================-->
        <x-project-detail />
    </main>
</Layout>

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
                                <h5 class="text-uppercase">Software Developer</h5>
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
                                href="https://drive.google.com/file/d/1mkX5RndV6dPTs2hoAcdXdSzMrN4-CURY/view?usp=drive_link"><span>Download
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

                    <x-project title="Pintro Pay"
                        :images="[
                            asset('img/portofolio/pintropay/login.png'),
                            asset('img/portofolio/pintropay/dashboard.png'),
                            asset('img/portofolio/pintropay/report.png'),
                            asset('img/portofolio/pintropay/user-manajemen.png')
                        ]"
                        about="Pintro Pay is a payment gateway platform developed by PT Indoglobal Nusa Persada, designed to manage payments, transactions, and other related services. Similar to other payment gateways like Doku and Midtrans, Pintro Pay supports various Pintro products and is also available as a standalone solution."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","MySQL","WhatsApp API", "Docker"]'
                        website="https://pay.pintro.id/" github="" />

                    <x-project title="Sista Sekolah Auliya - Thinkspedia"
                        :images="[
                            asset('img/portofolio/thinkspedia/login.png'),
                            asset('img/portofolio/thinkspedia/home.png'),
                            asset('img/portofolio/thinkspedia/dashboard-employee.png'),
                            asset('img/portofolio/thinkspedia/dashboard-finance.png'),
                            asset('img/portofolio/thinkspedia/dashboard-education.png')
                        ]"
                        about="Sista Sekolah Auliya is a platform developed by Thinkspedia for Sekolah Auliya, providing tools to manage students, teachers, parents, and administrative tasks. It includes features for new student registration, reporting academic progress, financial management, and employee administration, supporting a wide range of school operations."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","Laravel","MySQL","Jenkins", "Docker"]'
                        website="https://sista.sekolahauliya.sch.id/" github="" />

                    <x-project title="Tako POS"
                        :images="[
                            asset('img/portofolio/takopos/login.png'),
                            asset('img/portofolio/takopos/dashboard.png'),
                            asset('img/portofolio/takopos/packages.png'),
                            asset('img/portofolio/takopos/store.png'),
                            asset('img/portofolio/takopos/food-list.png'),
                            asset('img/portofolio/takopos/order-history.png'),
                        ]"
                        about="Tako POS is a Point of Sale system I developed as my own product, designed to empower small and medium businesses in managing sales transactions, inventory, and customer data. Featuring a comprehensive suite of tools, Tako POS includes product management, inventory tracking, sales reporting, and more, making it an essential solution for streamlining business operations."
                        :stacks='["PHP","HTML","CSS","JavaScript","Bootstrap","jQuery","ChartJS", "Laravel","MySQL", "Docker", "API Currency Exchange"]'
                        website="https://pos.takotekno.solutions/" github="" />
                </div>
            </div>
        </section>
        <!--================ End Projects Area =================-->

        <!--================ Start Personal / Github Projects Area =================-->
        <section class="personal_projects_area" id="personal-projects">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="main_title">
                            <h2>Personal / Github Projects</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <x-project title="Fruit App"
                        :images="[
                            asset('img/personal-projects/fruitApp/mainPage.png'),
                            asset('img/personal-projects/fruitApp/detailPage.png'),
                            asset('img/personal-projects/fruitApp/favPage.png')
                        ]"
                        about="Fruit App is apps to see list of fruits and detail of fruits. This app use local storage to save favorite fruits. User can see list of fruits, search fruit by name, see detail of fruit, and add fruit to favorite."
                        :stacks='["Kotlin","Jetpack Compose", "MVVM", "Local Storage"]'
                        website="" github="https://github.com/yogaap24/fruitApp" />

                    <x-project title="Shoes Store"
                        :images="[
                            asset('img/personal-projects/shoes-store/mainPage.png'),
                            asset('img/personal-projects/shoes-store/detailPage.png'),
                            asset('img/personal-projects/shoes-store/cartPage.png'),
                            asset('img/personal-projects/shoes-store/profilePage.png')
                        ]"
                        about="Shoes Store is a simple shoe shopping application based on Android, developed with Kotlin. The application uses Firebase as the database and offers various features to make shoe shopping easier for users."
                        :stacks='["Kotlin","MVVM","Local Storage", "Firebase Auth", "Firebase Firestore", "Firebase Storage"]'
                        website="" github="https://github.com/yogaap24/shoes-store" />

					<x-project title="Shoes Store"
                        :images="[
                            asset('img/personal-projects/card-bisindo/mainPage.jpeg'),
                            asset('img/personal-projects/card-bisindo/gamePage.jpeg'),
                            asset('img/personal-projects/card-bisindo/resultPage.jpeg'),
                        ]"
                        about="Card Bisindo is simple card game where player gonna get a card and try make valid Indonesian word from the card. This game have some level for difficulty to make the game more challenging."
                        :stacks='["ReactJS","ExpressJS", "Vite", "PostgreSQL","Docker", "KBBI API"]'
                        website="https://card-bisindo.yoo.ga/" github="https://github.com/yogaap24/simple-card-game" />
                </div>
            </div>
        </section>

        <x-project-detail />
    </main>
</Layout>

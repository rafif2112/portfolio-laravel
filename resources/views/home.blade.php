<x-layout>

    <body>
        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container">

                    <x-navbar></x-navbar>

                </div>
            </header>
            <!-- end header section -->
            <!-- slider section -->
            <section class="slider_section ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="detail_box">
                                <h1>
                                    Hello 👋, Im <br>
                                    Muhamad Rafif <br>
                                </h1>
                                <p>
                                    I attended Vocational School Wikrama Bogor, I majored in software and game
                                    development. My dream is to become a programmer.
                                </p>
                                <a href="/contact" class="">
                                    Contact Me
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 offset-lg-1">
                            <div class="img_content">
                                <div class="img_container">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="img-box">
                                                    <img src="images/slider/image-5.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="img-box">
                                                    <img src="images/slider/image-6.jpg" alt="">
                                                </div>
                                            </div>
                                            {{-- <div class="carousel-item">
                                                <div class="img-box">
                                                    <img src="images/slider/image-3.jpg" alt="">
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end slider section -->
        </div>


        <!-- service section -->
        <section class="service_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Services
                    </h2>
                </div>

                <div class="service_container">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/services/s1.png" class="img1" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Web Development
                            </h5>
                            <p>
                                There are many variations of passages of Lorem Ipsum available,
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="img-box">
                            <img src="images/services/s2.png" class="img1" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                UI / UX Design
                            </h5>
                            <p>
                                There are many variations of passages of Lorem Ipsum available,
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="img-box">
                            <img src="images/services/s3.png" class="img1" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Web Design
                            </h5>
                            <p>
                                There are many variations of passages of Lorem Ipsum available,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="/service">
                        Read More
                    </a>
                </div>
            </div>
        </section>
        <!-- end service section -->

        <!-- blog section -->
        <section class="blog_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Project
                    </h2>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <a href="https://rafif22.netlify.app/" style="color: black;">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/project/portofolio2.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Personal Portofolio
                                    </h5>
                                    <p>
                                        Sebuah website yang menampilkan profil, keterampilan, dan projek portofolio Anda
                                        Website ini dirancang untuk membantu mempresentasikan diri kepada calon klien atau
                                        pemberi kerja.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="https://rafif.free.nf/imt/" style="color: black;">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/project/imt.png" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Kalkulator Index Masa Tubuh
                                    </h5>
                                    <p>
                                        Mengembangkan aplikasi kalkulator IMT berbasis web yang memungkinkan pengguna
                                        untuk menghitung IMT mereka dengan mudah dan cepat.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="/project">
                        Read More
                    </a>
                </div>
            </div>
        </section>

        <!-- end blog section -->

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</x-layout>

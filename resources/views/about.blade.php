<x-layout>

    <body class="sub_page">
        <div class="hero_area">
            <!-- header section starts -->
            <header class="header_section">
                <div class="container">
                    <x-navbar></x-navbar>
                </div>
            </header>
            <!-- end header section -->
        </div>

        <!-- about section -->
        <section class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>About Me</h2>
                            </div>
                            <p>
                                Halo! Saya Muhamad Rafif, pelajar di SMK Wikrama Bogor, jurusan Pengembangan Perangkat
                                Lunak Dan GIM. Saya aktif dalam berbagai proyek dan kegiatan ekstrakurikuler yang
                                memperkuat kemampuan kepemimpinan dan kerjasama tim. saya siap untuk tantangan baru.
                                Hubungi saya untuk informasi lebih lanjut atau peluang kerjasama.
                            </p>
                            <a href="/contact">Contact Me</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="img_container">
                            <div class="img-box b1">
                                <img src="images/slider/image-5.jpg" alt="" />
                            </div>
                            <div class="img-box b2">
                                <img src="images/about-img1.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end about section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section-bg layout_padding">
            <div class="container" data-aos="fade-up">
                <div class="heading_container mb-5">
                    <h2>Skills</h2>
                </div>
                <div class="skills-content row">
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">PHP <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Laravel <i class="val">30%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume layout_padding">
            <div class="container" data-aos="fade-up">
                <div class="heading_container mb-5">
                    <h2>Resume</h2>
                </div>
                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                    <h4>SMPIT Roudlotul Jannah</h4>
                    <h5>2020 - 2023</h5>
                    <p><em>Lulusan SMPIT ROUDLOTUL JANNAH tahun 2023..</em></p>
                    <p>Mengikuti pendidikan menengah pertama di SMPIT ROUDLOTUL JANNAH selama 3 tahun, dari tahun 2020 hingga 2023.</p>
                </div>
                <div class="resume-item">
                    <h4>SMK Wikrama Bogor</h4>
                    <h5>2023 - 2026</h5>
                    <p><em>Siswa Di SMK Wikrama Bogor.</em></p>
                    <p>Saat ini sedang menempuh pendidikan di SMK WIKRAMA BOGOR jurusan Pengembangan Perangkat Lunak dan GIM angkatan 2023.</p>
                </div>
            </div>
        </section>
        <!-- End Resume Section -->

        <!-- Certification Section -->
        <section class="about_section layout_padding">
            
        </section>
        <!-- End Certification Section -->

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="assets/waypoints/noframework.waypoints.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                let select = (el, all = false) => {
                    el = el.trim()
                    if (all) {
                        return [...document.querySelectorAll(el)]
                    } else {
                        return document.querySelector(el)
                    }
                }

                let skilsContent = select('.skills-content');
                if (skilsContent) {
                    new Waypoint({
                        element: skilsContent,
                        offset: '80%',
                        handler: function(direction) {
                            let progress = select('.progress .progress-bar', true);
                            progress.forEach((el) => {
                                el.style.width = el.getAttribute('aria-valuenow') + '%'
                            });
                        }
                    })
                }
            });
        </script>
    </body>
</x-layout>

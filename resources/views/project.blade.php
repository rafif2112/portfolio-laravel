<x-layout>

    <head>
        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </head>

    <body class="sub_page">
        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container">

                    <x-navbar></x-navbar>

                </div>
            </header>
            <!-- end header section -->
        </div>

        <section class="blog_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Project
                    </h2>
                </div>
                <div class="row">

                    @foreach ($projects as $project)
                    <div class="col-md-6">
                        <a href="{{ $project['link'] }}" style="color: black;">
                            <div class="box" style="height: 480px">
                                <div class="img-box">
                                    <img src="images/project/{{ $project['image'] }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{ $project['title'] }}
                                    </h5>
                                    <p>
                                        {{ $project['description'] }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>

        <!-- end blog section -->


        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</x-layout>

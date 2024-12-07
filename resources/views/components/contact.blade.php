<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container ">
        <div class="heading_container">
            <h2>
                Contact Me
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/contact" method="POST">
                    @csrf
                    <div>
                        <input name="subject" id="subject" type="text" placeholder="Subject" max="100"
                            required />
                    </div>
                    <div>
                        <input name="name" id="name" type="text" placeholder="Name" max="100"
                            required />
                    </div>
                    <div>
                        <input name="email" id="email" type="email" placeholder="Email" max="100"
                            required />
                    </div>
                    <div>
                        <input name="message" id="message" type="text" class="message-box" placeholder="Message"
                            max="200" required />
                    </div>
                    <div class="d-flex ">
                        <a href="/contact">
                            <button type="submit" name="submit">
                                SEND
                            </button>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="map_container">
                    <div class="map-responsive">
                        <iframe src="https://maps.google.com/maps?q=bogor&t=&z=9&ie=UTF8&iwloc=&output=embed"
                            width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

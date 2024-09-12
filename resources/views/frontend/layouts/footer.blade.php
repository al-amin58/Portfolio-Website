<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About</h2>
                    <p>{{$footer->description}}</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="{{$footer->twitter}}"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="{{$footer->github}}"><span class="icon-github"></span></a></li>
                        <li class="ftco-animate"><a href="{{$footer->linkedin}}"><span class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a href="{{$footer->facebook}}"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="{{$footer->instagram}}"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="{{$footer->youtube}}"><span class="icon-youtube-play"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                        <li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        @foreach($services->slice(0, 5) as $service)
                        <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>{{$service->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{$footer->address}}</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$footer->number}}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$footer->email}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="">Al-Amin</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>




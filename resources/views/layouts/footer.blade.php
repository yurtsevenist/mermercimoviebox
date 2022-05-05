<!-- footer section start -->
<footer class="footer">
    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="widget">
                    <img src="{{asset('tema')}}/assets/img/logo.png" alt="about" />
                    <p>Designd by: <br> <a href="https://tuna.ihmtal.com" target="_blank">Tuna</a> , <a href="">Mustafa</a> , <a href="https://ramazan.ihmtal.com">Ramazan</a> <br> <a href="https://enes.ihmtal.com">Enes</a> , <a href="https://utku.ihmtal.com">Utku</a></p>
                    <h6><span>Call us: </span>(+880) 111 222 3456</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Watchlist</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">User Guide</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget">
                    <h4>Newsletter</h4>
                    <p>Subscribe to our newsletter system now to get latest news from us.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email.."/>
                        <button class="mt-2">SUBSCRIBE NOW</button>
                    </form>
                </div>
            </div>
        </div>
        <hr />
    </div> --}}
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <div class="copyright-content">
                        <p><a target="_blank" href="">Moviebox</a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="copyright-content">
                        <a href="#" class="scrollToTop">
                            Menüye Git<i class="icofont icofont-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- footer section end -->
<!-- jquery main JS -->
<script src="{{asset('tema')}}/assets/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('tema')}}/assets/js/bootstrap.min.js"></script>
<!-- Slick nav JS -->
<script src="{{asset('tema')}}/assets/js/jquery.slicknav.min.js"></script>
<!-- owl carousel JS -->
<script src="{{asset('tema')}}/assets/js/owl.carousel.min.js"></script>
<!-- Popup JS -->
<script src="{{asset('tema')}}/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Isotope JS -->
<script src="{{asset('tema')}}/assets/js/isotope.pkgd.min.js"></script>
<!-- main JS -->
<script src="{{asset('tema')}}/assets/js/main.js"></script>
@yield('js')
@toastr_js
@toastr_render
</body>

</html>


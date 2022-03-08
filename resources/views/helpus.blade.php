@include('common.header')

<!-- Content -->
<main class="main">
    <section class="section-box">
        <div class="container pt-50">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-title-large mb-30 wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Spolupráce a pomoc našemu portálu</h1>
                    <p class="mb-30 text-muted wow animate__ animate__fadeInUp animated">Bez pomoci těchto partnerů by provoz našeho portálu nebyl možný. Velmi si jejich podpory vážíme a děkujeme za ni!</p>
                    <h5 class="mb-30 text-muted wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">V případě zájmu o spolupráci se nám prosím ozvěte na e-mail pesatmichal.dev@gmail.com</h5>
                </div>
            </div>
            <!--<div class="box-banner-services mt-40">
                <div class="box-banner-services--inner wow animate__ animate__fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <figure><img alt="jobhub" src="assets/imgs/page/services/banner-our-services.png"></figure>
                    <a href="https://www.youtube.com/watch?v=ea-I4sqgVGY" class="popup-youtube btn-play-2"></a>
                </div>
            </div>-->
        </div>
    </section>

    <div class="section-box">
        <div class="container">
            <ul class="list-partners">
                <li class="wow animate__ animate__fadeInUp hover-up animated" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                    <a href="https://foxentry.cz" target="_blank">
                        <figure><img alt="jobhub" src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/partners/foxentry.png"></figure>
                    </a>
                </li>

            </ul>
        </div>
    </div>

</main>
<!-- End Content -->


@include('common.footer')


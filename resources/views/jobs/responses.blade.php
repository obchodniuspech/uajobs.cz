@include('common.header')


<script src="https://www.google.com/recaptcha/api.js?render=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></script>
<script>
// test: 6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI
// test secret: 6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe
//muj:  6Lf3t74eAAAAAIvHTiBNwfudSCiVtTSSbzlkbrwd
   function onSubmit(token) {
     document.getElementById("#contactForm").submit();
   }
 </script>


<!-- Content -->
<main class="main">
    <section class="section-box text-center">
        <div class="box-head-single bg-2">
            <div class="container">
                <div class="avatar-sidebar mx-auto">
                    <div class="d-flex align-items-center">
                        <div class="sidebar-info text-start">
                            <h5 class="sidebar-company">{{$job->companyName}}</h5>
                            {{--<span class="sidebar-website-text">alithemes.com</span>--}}
                        </div>
                    </div>
                </div>
                <h3>{{$job->positionName}} - Odpovědi</h3>
                {{--<ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li>Jobs listing</li>
                </ul>--}}
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">





<div class="row">

    @foreach ($responses AS $response)
    <div class="col-lg-3 col-md-6">
        <div class="card-grid-2 hover-up">
            <div class="card-grid-2-link">
                {{--<a href="#"><i class="fi-rr-shield-check"></i></a>
                <a href="#"><i class="fi-rr-bookmark"></i></a>--}}
            </div>
            <div class="text-center card-grid-2-image-rd online">
                <a href="candidates-single.html">
                    <figure><img alt="jobhub" src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/page/candidates/img-candidate.png" /></figure>
                </a>
            </div>
            <div class="card-block-info">
                <div class="card-profile">
                    <a href="candidates-single.html"><strong>{{$response->messageFromName}}</strong></a>
                    <span class="text-sm">{{$response->messageFrom}}<br>{{$response->messageFromPhone}}</span>
                    {{--<div class="rate-reviews-small">
                        <span><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/theme/icons/star.svg" alt="jobhub" /></span>
                        <span><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/theme/icons/star.svg" alt="jobhub" /></span>
                        <span><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/theme/icons/star.svg" alt="jobhub" /></span>
                        <span><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/theme/icons/star.svg" alt="jobhub" /></span>
                        <span><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/theme/icons/star.svg" alt="jobhub" /></span>
                        <span class="ml-10 text-muted text-small">(5.0)</span>
                    </div>--}}
                </div>
                <div class="employers-info d-flex align-items-center justify-content-center mt-15">
                    {{$response->messageTextUA}}
                    {{--<span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i> Chicago, US</span>
                    <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i>Software</span>--}}
                </div>
                <div class="card-2-bottom card-2-bottom-candidate mt-30">
                    <div class="text-center">
                        <a href="#" class="btn btn-tags-sm mb-10 mr-5">


                            <option value="not_lang">Neumím Česky, ani Anglicky</option>
                              <option value="czech">Umím Česky</option>
                              <option value="czech_basics">Umím základy Češtiny</option>
                              <option value="english">Umím Anglicky</option>
                              <option value="other">Jiné</option>


                            @switch($response->messageFromLang)
                                @case("czech")
                                    Mluví Česky
                                    @break

                                @case("not_lang")
                                    Nemluví Česky ani Anglicky
                                @break
                                @case("not_lang")
                                    Nemluví Česky ani Anglicky
                                @break
                                @case("czech_basics")
                                    Základy Češtiny
                                @break
                                @case("english")
                                    Mluví Anglicky
                                @break

                                @default
                                    Jiný jazyk
                            @endswitch
                        </a>
                    </div>
                    {{--<div class="text-center mt-25 mb-5">
                        <a href="candidates-single.html" class="btn btn-border btn-brand-hover">Dokumenty</a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    @endforeach



</div>




        </div>
    </section>

</main>




<!-- End Content -->


@include('common.footer')

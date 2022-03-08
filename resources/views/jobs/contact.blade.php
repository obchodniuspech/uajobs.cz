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
                <h3>{{$job->positionNameUA}}</h3>
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
                <div class="col-lg-10 mx-auto">
                    <div class="job-overview">
                        <div class="row">
                            <div class="col-md-4 d-flex">
                                <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Тип роботи</span>
                                    <strong class="small-heading">{{$job->jobType}}</strong>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex mt-sm-15">
                                <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Місто</span>
                                    <strong class="small-heading">{{$job->positionCity}}</strong>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex mt-sm-15">
                                <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Заробітна плата за годину</span>
                                    <strong class="small-heading">{{$job->salaryFrom}}-{{$job->salaryTo}} Kč/годину</strong>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-md-4 d-flex">
                                <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Дата вставки</span>
                                    <strong class="small-heading">{{$job->created_at}}</strong>
                                </div>
                            </div>
                            @if ($job->publishContact=="1")
                            <div class="col-md-4 d-flex mt-sm-15">
                                <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">E-mail</span>
                                    <strong class="small-heading">{!! $job->companyContactEmail !!}</strong>
                                </div>
                            </div>
                            @endif
                            @if ($job->publishContact=="1")
                            <div class="col-md-4 d-flex mt-sm-15">
                                <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Телефон</span>
                                    <strong class="small-heading">{{$job->companyContactPhone }}</strong>
                                </div>
                            </div>
                            @endif
                            {{--<div class="col-md-4 d-flex mt-sm-15">
                                <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                <div class="sidebar-text-info ml-10">
                                    <span class="text-description mb-10">Job Title</span>
                                    <strong class="small-heading">Designer</strong>
                                </div>
                            </div>--}}
                        </div>
                        <div class="row mt-50">
                            <div class="col-lg-6 col-md-12">
                                <a href="#/" id="reply" class="btn btn-default mr-10">Відповісти</a>
                                {{--<a href="#" class="btn btn-border">Save job</a>--}}
                            </div>
                            <div class="col-lg-6 col-md-12 mt-lg-30">
                                {{--<div class="social-share">
                                    <a href="#" class="btn btn-border btn-sm mr-10"><img alt="jobhub" src="assets/imgs/theme/icons/share-fb.svg" /> Share</a>
                                    <a href="#" class="btn btn-border btn-sm mr-10"><img alt="jobhub" src="assets/imgs/theme/icons/share-tw.svg" /> Tweet</a>
                                    <a href="#" class="btn btn-border btn-sm"><img alt="jobhub" src="assets/imgs/theme/icons/share-pinterest.svg" /> Pin</a>
                                </div>--}}
                            </div>
                        </div>

<form method="post" action="{{ route('Odeslat zprávu')}}" class="formContact" id="contactForm">
    @csrf
    <input type="hidden" name="id" value="{{$job->id}}">
    <!-- Name input -->
    <div class="mb-3">
      <label class="form-label" for="name">Ваше ім'я та прізвище</label>
      <input class="form-control" name="name" id="name" required="required" type="text" placeholder="Ваше ім'я та прізвище" data-sb-validations="required" />
      <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
    </div>

    <input class="form-control" placeholder="Surname" name="surname" id="surname" type="text" style="display: None;">

<!-- Email address input -->
<div class="mb-3">
  <label class="form-label" for="emailAddress">E-mail</label>
  <input class="form-control" name="emailAddress" id="emailAddress" required="required" type="email" placeholder="E-mail" data-sb-validations="required, email" />
</div>

<!-- phone address input -->
<div class="mb-3">
  <label class="form-label" for="emailAddress">Мобільний телефон</label>
  <input class="form-control" name="fromPhone" id="emailAddress" required="required" type="text" placeholder="Мобільний телефон" data-sb-validations="required, email" />

</div>

<div class="mb-3">
  <label class="form-label" for="langSkills">Ваші мовні навички</label>
  <select class="form-control" name="langSkills" id="langSkills">
      <option value="not_lang">Я не розмовляю ні чеською, ні англійською</option>
      <option value="czech">Я розмовляю чеською</option>
      <option value="czech_basics">Я знаю основи чеської</option>
      <option value="english">я знаю англійську</option>
      <option value="other">Інший</option>
  </select>
</div>

<!-- Message input -->
<div class="mb-3">
  <label class="form-label" for="message">Ваше повідомлення, уявіть, що ви можете зробити тощо.</label>
  <textarea class="form-control" required="required" name="message" id="message" type="text" placeholder="Ваше повідомлення, уявіть, що ви можете зробити тощо." style="height: 10rem;" data-sb-validations="required"></textarea>
  <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
</div>

    <button type="submit" class="btn btn-success g-recaptcha"
    data-sitekey="reCAPTCHA_site_key"
    data-callback='onSubmit'
    data-action='submit'>Надішліть відповідь</button>
</form>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 mx-auto">
                    <div class="content-single content-except">
                        <h5>Опис позиції</h5>
                        {{$job->positionDescUA}}
                    </div>



                </div>




            </div>
        </div>
    </section>

</main>




<!-- End Content -->


@include('common.footer')

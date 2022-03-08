@include('common.header')



<!-- Content -->
<main class="main">
  <!--  <section class="section-box-2">
        <div class="box-head-single none-bg">
            <div class="container">
                <h4>There Are 65.866 Jobs<br />Here For you!</h4>
                <div class="row mt-15 mb-40">
                    <div class="col-lg-7 col-md-9">
                        <span class="text-mutted">Discover your next career move, freelance gig, or
                            internship</span>
                    </div>
                    <!--<div class="col-lg-5 col-md-3 text-lg-end text-start">
                        <ul class="breadcrumbs mt-sm-15">
                            <li><a href="#">Home</a></li>
                            <li>Jobs listing</li>
                        </ul>
                    </div>--
                </div>
                <div class="box-shadow-bdrd-15 box-filters">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="box-search-job">
                                <form class="form-search-job">
                                    <input type="text" class="input-search-job" placeholder="UI Designer" />
                                </form>
                            </div>
                            <div class="list-tags-job">
                                <a href="#" class="text-normal job-tag">UI/UX designing <span class="remove-tags-job"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex job-fillter">
                                <div class="d-block d-lg-flex">
                                    <div class="dropdown job-type">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownJobType" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true" data-bs-display="static"><i class="fi-rr-briefcase"></i>
                                            <span>Full time</span> <i class="fi-rr-angle-small-down"></i></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownJobType">
                                            <li><a class="dropdown-item active" href="#">Full time</a></li>
                                            <li><a class="dropdown-item" href="#">Part time</a></li>
                                            <li><a class="dropdown-item" href="#">Freelancer</a></li>
                                            <li><a class="dropdown-item" href="#">Online work</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownLocation" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><i class="fi-rr-marker"></i> <span>New
                                                York, USA</span> <i class="fi-rr-angle-small-down"></i></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownLocation">
                                            <li><a class="dropdown-item active" href="#">New York, USA</a></li>
                                            <li><a class="dropdown-item" href="#">Dallas, USA</a></li>
                                            <li><a class="dropdown-item" href="#">Chicago, USA</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownLocation2" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><i class="fi-rr-dollar"></i> <span>Salary Range</span> <i class="fi-rr-angle-small-down"></i></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownLocation2">
                                            <li><a class="dropdown-item active" href="#">$100 - $500</a></li>
                                            <li><a class="dropdown-item" href="#">$500 - $1000</a></li>
                                            <li><a class="dropdown-item" href="#">$1000 - $1500</a></li>
                                            <li><a class="dropdown-item" href="#">$1500 - $2000</a></li>
                                            <li><a class="dropdown-item" href="#">Over $2000</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-button-find">
                                    <button class="btn btn-default float-right">Find Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section class="section-box mt-80">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                    <div class="content-page">
                        <div class="box-filters-job mt-15 mb-10">
                            <div class="row">
                                <div class="col-lg-7">
                                    <span class="text-small">всього <strong>{{$totalCount}} </strong>пропозицій роботи</span>
                                </div>
                                <div class="col-lg-5 text-lg-end mt-sm-15">
                                    <div class="display-flex2">
                                        <!--<span class="text-sortby">Sort by:</span>
                                        <div class="dropdown dropdown-sort">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownSort" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>Newest Post</span> <i class="fi-rr-angle-small-down"></i></button>
                                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort">
                                                <li><a class="dropdown-item active" href="#">Newest Post</a></li>
                                                <li><a class="dropdown-item" href="#">Oldest Post</a></li>
                                                <li><a class="dropdown-item" href="#">Rating Post</a></li>
                                            </ul>
                                        </div>-->
                                        <!--<div class="box-view-type">
                                            <a href="job-grid.html" class="view-type"><img src="./jobhub_frontend/assets/imgs/theme/icons/icon-list.svg" alt="jobhub" /></a>
                                            <a href="job-list.html" class="view-type"><img src="./jobhub_frontend/assets/imgs/theme/icons/icon-grid.svg" alt="jobhub" /></a>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="job-list-list mb-15">
                            <div class="list-recent-jobs">


                                @foreach ($jobs AS $thisJob)
                                <div class="card-job hover-up wow animate__animated animate__fadeIn">
                                <div class="card-job-top">
                                    <div class="card-job-top--image">
                                        <figure><img alt="jobhub" src="./jobhub_frontend/assets/imgs/page/job/digital.png" /></figure>
                                    </div>
                                    <div class="card-job-top--info">
                                        <h6 class="card-job-top--info-heading"><a href="{{ route('Kontaktovat', $thisJob->id) }}">{{$thisJob->positionNameUA}}</a></h6>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <a href="#/"><span class="card-job-top--company">{{$thisJob->companyName}}</span></a>
                                                <span class="card-job-top--location text-sm"><i class="fi-rr-marker"></i> {{$thisJob->positionCity}}</span>
                                                <span class="card-job-top--type-job text-sm"><i class="fi-rr-briefcase"></i> {{$thisJob->jobType}}</span>
                                                <span class="card-job-top--post-time text-sm"><i class="fi-rr-clock"></i> {{$thisJob->created_at}}</span>
                                            </div>
                                            <div class="col-lg-5 text-lg-end">
                                                <span class="card-job-top--price">{{$thisJob->salaryFrom}}-{{$thisJob->salaryTo}} Kč<span>/hod</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-job-description mt-20">
                                   {{$thisJob->positionDescUA}}
                                </div>
                                <div class="card-job-bottom mt-25">
                                    <div class="row">
                                        <div class="col-lg-9 col-sm-8 col-12">
                                            <a href="#/" class="btn btn-small background-urgent btn-pink mr-5">Мову:
                                                @switch($thisJob->lang)
                                                    @case("czech_needed")
                                                        Потрібна чеська мова
                                                        @break

                                                    @case("not_needed")
                                                        Мова не потрібна
                                                    @break
                                                    @case("czech_basics_needed")
                                                        Необхідні основи чеської мови
                                                    @break
                                                    @case("english_needed")
                                                        англійська
                                                    @break
                                                        Інший
                                                    @default
                                                        Jiný jazyk
                                                @endswitch
                                            </a>
                                            <a href="#/" class="btn btn-small background-6 disc-btn">Тип роботи: {{$thisJob->jobType}}</a>
                                            <!--<a href="#/" class="btn btn-small background-blue-light mr-5">Категорія: {{$thisJob->jobType}}</a>-->

                                        </div>
                                        {{-- <div class="col-lg-3 col-sm-4 col-12 text-lg-end d-lg-block d-none">
                                            <span><img src="./jobhub_frontend/assets/imgs/theme/icons/shield-check.svg" alt="jobhub"></span>
                                            <span class="ml-5"><img src="./jobhub_frontend/assets/imgs/theme/icons/bookmark.svg" alt="jobhub"></span>
                                        </div>--}}
                                        <div class="col-lg-3 col-sm-4 col-12 text-lg-end d-lg-block d-none">
                                            <a href="{{ route('Kontaktovat', $thisJob->id) }}"><button class="btn btn-primary"><i class="bi bi-envelope"></i> Kontaktovat</button></a>
                                        </div>
                                    </div>
                                </div>

                                </div>
                                    @endforeach


                            </div>
                        </div>
                        <div class="paginations">
                            {{-- $jobs->withQueryString()->links() --}}

                            {!! $jobs->links() !!}
                            {{--
                            <ul class="pager">
                                <li><a href="#" class="pager-prev"></a></li>
                                <li><a href="#" class="pager-number">1</a></li>
                                <li><a href="#" class="pager-number">2</a></li>
                                <li><a href="#" class="pager-number">3</a></li>
                                <li><a href="#" class="pager-number">4</a></li>
                                <li><a href="#" class="pager-number">5</a></li>
                                <li><a href="#" class="pager-number active">6</a></li>
                                <li><a href="#" class="pager-number">7</a></li>
                                <li><a href="#" class="pager-next"></a></li>
                            </ul>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                   <!-- <div class="sidebar-with-bg">
                        <h5 class="font-semibold mb-10">Set job reminder</h5>
                        <p class="text-body-999">Enter you email address and get job notification.</p>
                        <div class="box-email-reminder">
                            <form>
                                <div class="form-group mt-15">
                                    <input type="text" class="form-control input-bg-white form-icons" placeholder="Enter email address" />
                                    <i class="fi-rr-envelope"></i>
                                </div>
                                <div class="form-group mt-25 mb-5">
                                    <button class="btn btn-default btn-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>-->

                    <form method="get" action="">
                    <div class="sidebar-shadow none-shadow mb-30">
                        <div class="sidebar-filters">
                            <div class="filter-block mb-30">
                                <h5 class="medium-heading mb-15">Місто</h5>

                                <div class="form-group select-style select-style-icon">
                                    <select name="filterLocation" class="form-control form-icons select-active">
                                        <option value="all">всі
                                        @foreach ($cities AS $city)
                                            <option @isset ($req->filterLocation) @if ($city->positionCity == $req->filterLocation) selected="selected" @endif @endisset>{{$city->positionCity}}
                                        @endforeach
                                    </select>
                                    <i class="fi-rr-marker"></i>
                                </div>
                            </div>
                            <div class="filter-block mb-30">
                                <h5 class="medium-heading mb-15">Категорія</h5>
                                <div class="form-group select-style select-style-icon">
                                    <select name="filterCategory" class="form-control form-icons select-active">
                                        <option value="all">всі
                                        @foreach ($categories AS $cat)
                                            <option @isset ($req->filterLocation) @if ($cat->id == $req->filterCategory) selected="selected" @endif @endisset value="{{$cat->id}}">{{$cat->categoryNameUA}}
                                        @endforeach
                                    </select>
                                    <i class="fi-rr-briefcase"></i>
                                </div>
                            </div>
                            <div class="filter-block mb-30">
                                <h5 class="medium-heading mb-15">Тип роботи</h5>

                                <div class="form-group select-style select-style-icon">
                                    <select name="filterType" class="form-control form-icons select-active">
                                        <option value="all">всі</option>
                                        <option value="fullTime" @isset ($req->filterType) @if ($req->filterType=="fullTime") selected="selected" @endif @endisset>Повний день/option>
                                        <option value="halfTime" @isset ($req->filterType) @if ($req->filterType=="halfTime") selected="selected" @endif @endisset>Неповний робочий день</option>
                                        <option value="parttime" @isset ($req->filterType) @if ($req->filterType=="parttime") selected="selected" @endif @endisset>бригада</option>
                                        <option value="freelance" @isset ($req->filterType) @if ($req->filterType=="freelance") selected="selected" @endif @endisset>Позаштатний</option>
                                        <option value="time2time" @isset ($req->filterType) @if ($req->filterType=="time2time") selected="selected" @endif @endisset>Невідкладна допомога</option>
                                        <option value="personal" @isset ($req->filterType) @if ($req->filterType=="personal") selected="selected" @endif @endisset>Допомога по дому / приватні оголошення тощо.</option>
                                    </select>
                                    <i class="fi-rr-briefcase"></i>
                                </div>

                                {{--
                                <div class="form-group">
                                    <ul class="list-checkbox">
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"> <span class="text-small">Full Time Jobs</span>
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="number-item">235</span>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox" checked="checked"> <span class="text-small">Part Time
                                                    Jobs</span>
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="number-item">28</span>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox" checked="checked"> <span class="text-small">Remote
                                                    Jobs</span>
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="number-item">67</span>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"> <span class="text-small">Freelance</span>
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="number-item">92</span>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"> <span class="text-small">Temporary</span>
                                                <span class="checkmark"></span>
                                            </label>
                                            <span class="number-item">14</span>
                                        </li>
                                    </ul>
                                </div>
                                --}}
                            </div>
                            <div class="filter-block mb-30">
                                <h5 class="medium-heading mb-10">Мову</h5>
                                <div class="form-group select-style select-style-icon">
                                    <select name="filterLang" class="form-control form-icons select-active">
                                        <option value="all">всі</option>
                                        <option value="not_needed" @isset ($req->filterLang) @if ($req->filterLang=="not_needed") selected="selected" @endif @endisset>Мова не потрібна</option>
                                        <option value="czech_needed" @isset ($req->filterLang) @if ($req->filterLang=="czech_needed") selected="selected" @endif @endisset>Потрібна чеська мова</option>
                                        <option value="czech_basics_needed" @isset ($req->filterLang) @if ($req->filterLang=="czech_basics_needed") selected="selected" @endif @endisset>Необхідні основи чеської мови</option>
                                        <option value="english_needed" @isset ($req->filterLang) @if ($req->filterLang=="english_needed") selected="selected" @endif @endisset>англійська</option>
                                    </select>
                                    <i class="fi-rr-briefcase"></i>
                                </div>
                            </div>
                           <!-- <div class="filter-block mb-40">
                                <h5 class="medium-heading mb-25">Salary Range</h5>
                                <div class="">
                                    <div class="row mb-20">
                                        <div class="col-sm-12">
                                            <div id="slider-range"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label class="lb-slider">From</label>
                                            <div class="form-group minus-input">
                                                <input type="text" name="min-value-money" class="input-disabled form-control min-value-money" disabled="disabled" value="" />
                                                <input type="hidden" name="min-value" class="form-control min-value" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="lb-slider">To</label>
                                            <div class="form-group">
                                                <input type="text" name="max-value-money" class="input-disabled form-control max-value-money" disabled="disabled" value="" />
                                                <input type="hidden" name="max-value" class="form-control max-value" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <div class="buttons-filter">
                                <button class="btn btn-default">Фільтр</button>
                                {{--<a href="./"><button class="btn">Reset filter</button></a>--}}
                            </div>
                        </div>
                    </div>
                    </form>

                    <div class="sidebar-with-bg background-primary bg-sidebar pb-80">
                        <h5 class="medium-heading text-white mb-20 mt-20">Hledáte nové zaměstnance?</h5>
                        <p class="text-body-999 text-white mb-30">Inzerujte zde</p>
                        <a href="{{ route('Nový inzerát') }}" class="btn btn-border icon-chevron-right btn-white-sm">Vložte inzerát</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   {{--<section class="section-box mt-50 mb-60">
        <div class="container">
            <div class="box-newsletter">
                <h5 class="text-md-newsletter">Sign up to get</h5>
                <h6 class="text-lg-newsletter">the latest jobs</h6>
                <div class="box-form-newsletter mt-30">
                    <form class="form-newsletter">
                        <input type="text" class="input-newsletter" value="" placeholder="contact.alithemes@gmail.com" />
                        <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="box-newsletter-bottom">
                <div class="newsletter-bottom"></div>
            </div>
        </div>
    </section>--}}
</main>
<!-- End Content -->


@include('common.footer')

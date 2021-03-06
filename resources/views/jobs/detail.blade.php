@include('common.header')



<!-- Content -->
<main class="main">

    <section class="section-box mt-80">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                    <div class="content-page">
                        <div class="box-filters-job mt-15 mb-10">
                            <div class="row">
                                <div class="col-lg-7">
                                    <span class="text-small">Celkem <strong>{{$totalCount}} </strong>nabídek práce</span>
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
                                        <h6 class="card-job-top--info-heading"><a href="{{ route('Zobrazit detail', $thisJob->id) }}">{{$thisJob->positionName}}</a></h6>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <a href="employers-grid.html"> <a href="employers-grid.html"><span class="card-job-top--company">{{$thisJob->companyName}}</span></a></a>
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
                                   {{$thisJob->positionDesc}}
                                </div>
                                <div class="card-job-bottom mt-25">
                                    <div class="row">
                                        <div class="col-lg-9 col-sm-8 col-12">
                                            <a href="job-grid.html" class="btn btn-small background-urgent btn-pink mr-5">Jazyk: {{$thisJob->lang}}</a>
                                            <a href="job-grid.html" class="btn btn-small background-6 disc-btn">Typ: {{$thisJob->jobType}}</a>
                                            <a href="job-grid-2.html" class="btn btn-small background-blue-light mr-5">Kategorie: {{$thisJob->jobType}}</a>

                                        </div>
                                        {{-- <div class="col-lg-3 col-sm-4 col-12 text-lg-end d-lg-block d-none">
                                            <span><img src="./jobhub_frontend/assets/imgs/theme/icons/shield-check.svg" alt="jobhub"></span>
                                            <span class="ml-5"><img src="./jobhub_frontend/assets/imgs/theme/icons/bookmark.svg" alt="jobhub"></span>
                                        </div>--}}
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
                                <h5 class="medium-heading mb-15">Místo</h5>

                                <div class="form-group select-style select-style-icon">
                                    <select name="filterLocation" class="form-control form-icons select-active">
                                        <option value="all">Vše
                                        @foreach ($cities AS $city)
                                            <option @isset ($req->filterLocation) @if ($city->positionCity == $req->filterLocation) selected="selected" @endif @endisset>{{$city->positionCity}}
                                        @endforeach
                                    </select>
                                    <i class="fi-rr-marker"></i>
                                </div>
                            </div>
                            <div class="filter-block mb-30">
                                <h5 class="medium-heading mb-15">Kategorie</h5>
                                <div class="form-group select-style select-style-icon">
                                    <select name="filterCategory" class="form-control form-icons select-active">
                                        <option value="all">Vše
                                        @foreach ($categories AS $cat)
                                            <option @isset ($req->filterLocation) @if ($cat->id == $req->filterCategory) selected="selected" @endif @endisset value="{{$cat->id}}">{{$cat->categoryName}}
                                        @endforeach
                                    </select>
                                    <i class="fi-rr-briefcase"></i>
                                </div>
                            </div>
                            <div class="filter-block mb-30">
                                <h5 class="medium-heading mb-15">Typ úvazku</h5>

                                <div class="form-group select-style select-style-icon">
                                    <select name="filterType" class="form-control form-icons select-active">
                                        <option value="all">Vše</option>
                                        <option value="fullTime" @isset ($req->filterType) @if ($req->filterType=="fullTime") selected="selected" @endif @endisset>Plný úvazek</option>
                                        <option value="halfTime" @isset ($req->filterType) @if ($req->filterType=="halfTime") selected="selected" @endif @endisset>Zkrácený úvazek</option>
                                        <option value="parttime" @isset ($req->filterType) @if ($req->filterType=="parttime") selected="selected" @endif @endisset>Brigáda</option>
                                        <option value="freelance" @isset ($req->filterType) @if ($req->filterType=="freelance") selected="selected" @endif @endisset>Freelance</option>
                                        <option value="time2time" @isset ($req->filterType) @if ($req->filterType=="time2time") selected="selected" @endif @endisset>Nárazová výpomoc</option>
                                        <option value="personal" @isset ($req->filterType) @if ($req->filterType=="personal") selected="selected" @endif @endisset>Výpomoc v domácnostech / soukromé inzeráty apod.</option>
                                    </select>
                                    <i class="fi-rr-briefcase"></i>
                                </div>

                                {{--
                                <div class="form-group">
                                    <ul class="list-checkbox">
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"> <span class="text-small">Full Time
                                                    Jobs</span>
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
                                <h5 class="medium-heading mb-10">Jazyk</h5>
                                <div class="form-group select-style select-style-icon">
                                    <select name="filterLang" class="form-control form-icons select-active">
                                        <option value="all">Vše</option>
                                        <option value="not_needed" @isset ($req->filterLang) @if ($req->filterLang=="not_needed") selected="selected" @endif @endisset>Jazyk není nutný</option>
                                        <option value="czech_needed" @isset ($req->filterLang) @if ($req->filterLang=="czech_needed") selected="selected" @endif @endisset>Nutná čeština</option>
                                        <option value="czech_basics_needed" @isset ($req->filterLang) @if ($req->filterLang=="czech_basics_needed") selected="selected" @endif @endisset>Nutné základy češtiny</option>
                                        <option value="english_needed" @isset ($req->filterLang) @if ($req->filterLang=="english_needed") selected="selected" @endif @endisset>Angličtina</option>
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
                                <button class="btn btn-default">Filtrovat</button>
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

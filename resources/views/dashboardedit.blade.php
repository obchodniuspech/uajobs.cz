<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                <!-- Content -->
                <main class="main">



                <form action="{{ route('Nový inzerát') }}" method="post">
                    @csrf

                    <input type="hidden" name="id" value="{{$job->id}}">
                    <section class="section-box mt-3">
                        <div class="container">
                            <div class="row flex-row-reverse">
                                <div class="col-lg-8 col-md-12 col-sm-12 col-12 float-right">
                                    <div class="content-page">

                                        <div class="job-list-list mb-15">
                                            <div class="list-recent-jobs">

                                            <div class="sidebar-shadow none-shadow mb-30">
                                            <div class="sidebar-filters">
                                                <div class="filter-block mb-30">

                                            <div class="input-group">
                                              <span class="input-group-text" id="basic-addon1">Stav inzerátu</span>
                                                 <select name="status">
                                                     <option value="waiting_approval" @if ($job->status=="waiting_approval") selected @endif>Čeká na schválení
                                                     <option value="approved" @if ($job->status=="approved") selected @endif>Schváleno
                                                     <option value="paused" @if ($job->status=="paused") selected @endif>Pozastaveno
                                                     <option value="declined" @if ($job->status=="declined") selected @endif>Zamítnuto
                                                 </select>
                                           </div>

                                                <h5 class="medium-heading mb-15">Název pozice</h5>
                                                   <div class="input-group">
                                                      <span class="input-group-text" id="basic-addon1"><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/czech.png" height="20"></span>
                                                         <input type="text" required="required" class="form-control form-icons" value="{{$job->positionName}}"" name="positionName" placeholder="Název pozice CZ" />
                                                   </div>

                                                   <div class="input-group">
                                                      <span class="input-group-text" id="basic-addon1"><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/ukraine.png" height="20"></span>
                                                         <input type="text" required="required" class="form-control form-icons" value="{{$job->positionNameUA}}"" name="positionNameUA" placeholder="Název pozice UA" />
                                                   </div>

                                                <h5 class="medium-heading mb-15 mt-3">Stručný popis</h5>
                                                   <div class="input-group">
                                                      <span class="input-group-text" id="basic-addon1"><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/czech.png" height="20"></span>
                                                         <input type="text" class="form-control form-icons" name="positionDesc" value="{{$job->positionDesc}}" placeholder="Stručný popis" />
                                                   </div>
                                                   <div class="input-group">
                                                      <span class="input-group-text" id="basic-addon1"><img src="{{ env('APP_URL') }}/jobhub_frontend/assets/imgs/ukraine.png" height="20"></span>
                                                         <input type="text" class="form-control form-icons" name="positionDescUA" value="{{$job->positionDescUA}}" placeholder="Stručný popis UA" />
                                                   </div>

                                                <h5 class="medium-heading mb-15 mt-3">Přesná adresa místa výkonu práce</h5>
                                                <div class="form-group">
                                                         <input type="text" required="required" class="form-control form-icons" value="{{$job->positionAddress}}"  name="positionAddress" placeholder="Přesná adresa místa výkonu práce" />
                                                         <i class="fi-rr-marker"></i>
                                                </div>

                                                <h5 class="medium-heading mb-15">Město</h5>
                                                <div class="form-group">
                                                         <input type="text" required="required" class="form-control form-icons" value="{{$job->positionCity}}"  name="positionCity" placeholder="Město" />
                                                         <i class="fi-rr-marker"></i>
                                                </div>

                                                <h5 class="medium-heading mb-15">IČ firmy</h5>
                                                <div class="form-group">
                                                         <input type="text" required="required" class="form-control form-icons" value="{{$job->companyId}}" name="companyId" placeholder="IČ firmy" />
                                                         <i class="fi-rr-marker"></i>
                                                </div>

                                                <h5 class="medium-heading mb-15">Název firmy</h5>
                                                <div class="form-group">
                                                         <input type="text" required="required" class="form-control form-icons" value="{{$job->companyName}}" name="companyName" placeholder="Název firmy" />
                                                         <i class="fi-rr-marker"></i>
                                                </div>

                                                <h5 class="medium-heading mb-15">Kategorie</h5>
                                                <div class="form-group select-style select-style-icon">
                                                    <select class="form-control form-icons select-active" name="categoryId">
                                                        @foreach ($categories AS $c)
                                                            <option value="{{$c->id}}" @if ($job->categoryId==$c->id) selected @endif>{{$c->categoryName}}
                                                        @endforeach
                                                    </select>
                                                    <i class="fi-rr-briefcase"></i>
                                                </div>

                                                <h5 class="medium-heading mb-15">Mzda za hodinu</h5>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label class="lb-slider">Od</label>
                                                        <div class="form-group minus-input">
                                                            <input type="text" name="salaryFrom" class=" form-control min-value-money"  value="{{$job->salaryFrom}}" />
                                                            <input type="hidden" name="min-value" class="form-control min-value" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="lb-slider">Do</label>
                                                        <div class="form-group">
                                                            <input type="text" name="salaryTo" class=" form-control max-value-money" value="{{$job->salaryTo}}" />
                                                            <input type="hidden" name="max-value" class="form-control max-value" value="" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <h5 class="medium-heading mb-15">Typ úvazku</h5>
                                                <div class="form-group select-style select-style-icon">
                                                    <select name="jobType" required="required" class="form-control form-icons select-active">
                                                        <option value="fullTime" @if ($job->jobType=="fullTime") selected @endif>Plný úvazek</option>
                                                        <option value="halfTime" @if ($job->jobType=="halfTime") selected @endif>Zkrácený úvazek</option>
                                                        <option value="partTime" @if ($job->jobType=="partTime") selected @endif>Brigáda</option>
                                                        <option value="freelance" @if ($job->jobType=="freelance") selected @endif>Freelance</option>
                                                        <option value="time2time" @if ($job->jobType=="time2time") selected @endif>Nárazová výpomoc</option>
                                                        <option value="personal" @if ($job->jobType=="personal") selected @endif>Výpomoc v domácnostech / soukromé inzeráty apod.</option>
                                                    </select>
                                                    <i class="fi-rr-briefcase"></i>
                                                </div>

                                                <h5 class="medium-heading mb-15">Jazyková vybavenost</h5>
                                                <div class="form-group select-style select-style-icon">
                                                    <select name="lang" required="required" class="form-control form-icons select-active">
                                                        <option value="not_needed" @if ($job->lang=="not_needed") selected @endif>Jazyk není nutný</option>
                                                        <option value="czech_needed" @if ($job->lang=="czech_needed") selected @endif>Nutná čeština</option>
                                                        <option value="czech_basics_needed" @if ($job->lang=="czech_basics_needed") selected @endif>Nutné základy češtiny</option>
                                                        <option value="english_needed" @if ($job->lang=="english_needed") selected @endif>Angličtina</option>

                                                    </select>
                                                    <i class="fi-rr-briefcase"></i>
                                                </div>

                                                <div class="buttons-filter">
                                                    <button class="btn btn-lg btn-default">Uložit inzerát</button>
                                                </div>

                                                </div>
                                            </div>
                                            </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                                    <div class="sidebar-shadow none-shadow mb-30">
                                        <div class="sidebar-filters">
                                            <h5 class="medium-heading mb-15">Telefon</h5>
                                            <div class="form-group">
                                                  <input type="text" class="form-control form-icons" name="companyContactPhone" value="{{$job->companyContactPhone}}" placeholder="Telefon" />
                                                  <i class="fi-rr-marker"></i>
                                            </div>

                                            <h5 class="medium-heading mb-15">E-mail</h5>
                                            <div class="form-group">
                                                  <input type="text" required="required" class="form-control form-icons" value="{{$job->companyContactEmail}}" name="companyContactEmail" placeholder="E-mail" />
                                                  <i class="fi-rr-marker"></i>
                                            </div>

                                            <h5 class="medium-heading mb-15">Zveřejnit kontakty</h5>
                                            <div class="form-group select-style select-style-icon">
                                                <select class="form-control form-icons select-active" name="publishContact">
                                                    <option value="1" @if ($job->publishContact=="1") selected @endif>Ano - zájemci budou kontaktovat přímo</option>
                                                    <option value="0"@if ($job->publishContact=="0") selected @endif>Ne - odpověď bude přes web a email</option>
                                                </select>
                                                <i class="fi-rr-briefcase"></i>
                                            </div>

                                            <h5 class="medium-heading mb-15">Doba zveřejnění - zbývající ve dnech</h5>
                                            <div class="form-group">
                                                  <input type="text" required="required" class="form-control form-icons" value="{{$job->publishTime}}" name="publishTime" placeholder="Dny" />
                                                  <i class="fi-rr-marker"></i>
                                            </div>
                                            
                                            <table style="margin-top: 50px;">
	                                            <tr>
		                                            <td>
			                                            {{$employeeLinkEdit}}
		                                            </td>
	                                            </tr>
                                            </table>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </form>

                </main>
                <!-- End Content -->



                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('common.header')

<!-- Content -->
<main class="main">
    
    
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Příjem inzerátů</h4>
  <p>Aktuálně přijímáme inzeráty, od zítřka (max 2 dny) / jakmile se databáze naplní spouštíme zobrazování inzerátů a registraci zájemců, prosím šiřte tento portál dále - děkujeme!</p>
</div>    
    
<form action="{{ route('Nový inzerát') }}" method="post">
    @csrf

    <section class="section-box mt-80">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12 float-right">
                    <div class="content-page">

                        <div class="job-list-list mb-15">
                            <div class="list-recent-jobs">

                            <div class="sidebar-shadow none-shadow mb-30">
                            <div class="sidebar-filters">
                                <div class="filter-block mb-30">

                                <h5 class="medium-heading mb-15">Název pozice</h5>
                                   <div class="input-group">
                                      <span class="input-group-text" id="basic-addon1"><img src="./jobhub_frontend/assets/imgs/czech.png" height="20"></span>
                                         <input type="text" required="required" class="form-control form-icons" value="{{old('positionName')}}"" name="positionName" placeholder="Název pozice CZ" />
                                   </div>
                                   
                                   <div class="input-group">
                                      <span class="input-group-text" id="basic-addon1"><img src="./jobhub_frontend/assets/imgs/ukraine.png" height="20"></span>
                                         <input type="text" required="required" class="form-control form-icons" value="{{old('positionNameUA')}}"" name="positionNameUA" placeholder="Název pozice UA" />
                                   </div>

                                <h5 class="medium-heading mb-15 mt-3">Stručný popis</h5>
                                   <div class="input-group">
                                      <span class="input-group-text" id="basic-addon1"><img src="./jobhub_frontend/assets/imgs/czech.png" height="20"></span>
                                         <input type="text" class="form-control form-icons" name="positionDesc" placeholder="Stručný popis" />
                                   </div>
                                   <div class="input-group">
                                      <span class="input-group-text" id="basic-addon1"><img src="./jobhub_frontend/assets/imgs/ukraine.png" height="20"></span>
                                         <input type="text" class="form-control form-icons" name="positionDescUA" placeholder="Stručný popis UA" />
                                   </div>

                                <h5 class="medium-heading mb-15 mt-3">Přesná adresa místa výkonu práce</h5>
                                <div class="form-group">
                                         <input type="text" required="required" class="form-control form-icons"  name="positionAddress" placeholder="Přesná adresa místa výkonu práce" />
                                         <i class="fi-rr-marker"></i>
                                </div>
                                
                                <h5 class="medium-heading mb-15">Město</h5>
                                <div class="form-group">
                                         <input type="text" required="required" class="form-control form-icons"  name="positionCity" placeholder="Město" />
                                         <i class="fi-rr-marker"></i>
                                </div>

                                <h5 class="medium-heading mb-15">IČ firmy</h5>
                                <div class="form-group">
                                         <input type="text" required="required" class="form-control form-icons" name="companyId" placeholder="IČ firmy" />
                                         <i class="fi-rr-marker"></i>
                                </div>
                                
                                <h5 class="medium-heading mb-15">Název firmy</h5>
                                <div class="form-group">
                                         <input type="text" required="required" class="form-control form-icons" name="companyName" placeholder="Název firmy" />
                                         <i class="fi-rr-marker"></i>
                                </div>

                                <h5 class="medium-heading mb-15">Kategorie</h5>
                                <div class="form-group select-style select-style-icon">
                                    <select class="form-control form-icons select-active" name="categoryId">
                                        @foreach ($categories AS $c)
                                            <option value="{{$c->id}}">{{$c->categoryName}}
                                        @endforeach
                                    </select>
                                    <i class="fi-rr-briefcase"></i>
                                </div>

                                <h5 class="medium-heading mb-15">Mzda za hodinu</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="lb-slider">Od</label>
                                        <div class="form-group minus-input">
                                            <input type="text" name="salaryFrom" class=" form-control min-value-money" value="" />
                                            <input type="hidden" name="min-value" class="form-control min-value" value="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="lb-slider">Do</label>
                                        <div class="form-group">
                                            <input type="text" name="salaryTo" class=" form-control max-value-money" value="" />
                                            <input type="hidden" name="max-value" class="form-control max-value" value="" />
                                        </div>
                                    </div>
                                </div>

                                <h5 class="medium-heading mb-15">Typ úvazku</h5>
                                <div class="form-group select-style select-style-icon">
                                    <select name="jobType" required="required" class="form-control form-icons select-active">
                                        <option value="fullTime">Plný úvazek</option>
                                        <option value="halfTime">Zkrácený úvazek</option>
                                        <option value="parttime">Brigáda</option>
                                        <option value="freelance">Freelance</option>
                                        <option value="time2time">Nárazová výpomoc</option>
                                        <option value="personal">Výpomoc v domácnostech / soukromé inzeráty apod.</option>
                                    </select>
                                    <i class="fi-rr-briefcase"></i>
                                </div>
                                
                                <h5 class="medium-heading mb-15">Jazyková vybavenost</h5>
                                <div class="form-group select-style select-style-icon">
                                    <select name="lang" required="required" class="form-control form-icons select-active">
                                        <option value="not_needed">Jazyk není nutný</option>
                                        <option value="czech_needed">Nutná čeština</option>
                                        <option value="czech_basics_needed">Nutné základy češtiny</option>
                                        <option value="english_needed">Angličtina</option>
                                       
                                    </select>
                                    <i class="fi-rr-briefcase"></i>
                                </div>

                                <div class="buttons-filter">
                                    <button class="btn btn-lg btn-default">Vložit inzerát ZDARMA</button>
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
                                  <input type="text" class="form-control form-icons" name="companyContactPhone" placeholder="Telefon" />
                                  <i class="fi-rr-marker"></i>
                            </div>

                            <h5 class="medium-heading mb-15">E-mail</h5>
                            <div class="form-group">
                                  <input type="text" required="required" class="form-control form-icons" name="companyContactEmail" placeholder="E-mail" />
                                  <i class="fi-rr-marker"></i>
                            </div>

                            <h5 class="medium-heading mb-15">Zveřejnit kontakty</h5>
                            <div class="form-group select-style select-style-icon">
                                <select class="form-control form-icons select-active" name="publishContact">
                                    <option value="1">Ano - zájemci budou kontaktovat přímo</option>
                                    <option value="0">Ne - odpověď bude přes web a email</option>
                                </select>
                                <i class="fi-rr-briefcase"></i>
                            </div>

                            <h5 class="medium-heading mb-15">Doba zveřejnění</h5>
                            <div class="form-group select-style select-style-icon">
                                <select class="form-control form-icons select-active" name="publishTime">
                                    <option value="7">7 dní</option>
                                    <option value="14" selected="selected">14 dní</option>
                                    <option value="21">21 dní</option>
                                    <option value="999999">do smazání</option>
                                </select>
                                <i class="fi-rr-briefcase"></i>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</form>

</main>
<!-- End Content -->


@include('common.footer')

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Invoices;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewReply;
use App\Mail\InzeratSchvalen;


class jobsController extends Controller
{
    //

    public function showAll(Request $req) {

        $categories = DB::table('jobCategories')->get();
        
        if (!$req->filterLocation OR $req->filterLocation=="all") {
            $cityWhere = "%";
            $cityWhereDesc = "Všechna města";
        }
        else {
            $cityWhere = $req->filterLocation;
        }
        
        if (!$req->filterCategory OR $req->filterCategory=="all") {
            $categoryWhere = "%";
            $categoryWhereDesc = "Všechny kategorie";
        }
        else {
            $categoryWhere = $req->filterCategory;
        }
        
        if (!$req->filterType OR $req->filterType=="all") {
            $typeWhere = "%";
            $typeWhereDesc = "Všechny kategorie";
        }
        else {
            $typeWhere = $req->filterType;
        }
        
        if (!$req->filterLang OR $req->filterLang=="all") {
            $langWhere = "%";
            $langWhereDesc = "Všechny kategorie";
        }
        else {
            $langWhere = $req->filterLang;
        }
       
       
       //       $jobs = DB::table('jobOffers')->join('jobCategories', 'jobOffers.categoryId', '=', 'jobCategories.id')->where('positionCity','like',$cityWhere)->where('categoryId','like',$categoryWhere)->where('jobType','like',$typeWhere)->where('lang','like',$langWhere)->where('status','approved')->orderBy('id','desc')->paginate(100);
       
       
       $jobsTotal = DB::table('jobOffers')->where('categoryId','!=','16')->where('positionCity','like',$cityWhere)->where('categoryId','like',$categoryWhere)->where('jobType','like',$typeWhere)->where('lang','like',$langWhere)->where('categoryId','!=','16')->where('status','approved')->orderBy('id','desc')->count();
       $jobs = DB::table('jobOffers')->where('categoryId','!=','16')->where('positionCity','like',$cityWhere)->where('categoryId','like',$categoryWhere)->where('jobType','like',$typeWhere)->where('categoryId','!=','16')->where('lang','like',$langWhere)->where('status','approved')->orderBy('id','desc')->paginate(100);
       
       $jobsCities = DB::table('jobOffers')->groupBy('positionCity')->get();
        
        return view('jobs.index',['jobs'=>$jobs,"totalCount"=>$jobsTotal,'cities'=>$jobsCities,'categories'=>$categories,'req'=>$req]);
        
    }
    
    public function showIT(Request $req) {

        $categories = DB::table('jobCategories')->get();
        
        if (!$req->filterLocation OR $req->filterLocation=="all") {
            $cityWhere = "%";
            $cityWhereDesc = "Všechna města";
        }
        else {
            $cityWhere = $req->filterLocation;
        }
        
        if (!$req->filterCategory OR $req->filterCategory=="all") {
            $categoryWhere = "%";
            $categoryWhereDesc = "Všechny kategorie";
        }
        else {
            $categoryWhere = $req->filterCategory;
        }
        
        if (!$req->filterType OR $req->filterType=="all") {
            $typeWhere = "%";
            $typeWhereDesc = "Všechny kategorie";
        }
        else {
            $typeWhere = $req->filterType;
        }
        
        if (!$req->filterLang OR $req->filterLang=="all") {
            $langWhere = "%";
            $langWhereDesc = "Všechny kategorie";
        }
        else {
            $langWhere = $req->filterLang;
        }
       
       
       //       $jobs = DB::table('jobOffers')->join('jobCategories', 'jobOffers.categoryId', '=', 'jobCategories.id')->where('positionCity','like',$cityWhere)->where('categoryId','like',$categoryWhere)->where('jobType','like',$typeWhere)->where('lang','like',$langWhere)->where('status','approved')->orderBy('id','desc')->paginate(100);
       
       
       $jobsTotal = DB::table('jobOffers')->where('categoryId','=','16')->where('positionCity','like',$cityWhere)->where('categoryId','like',$categoryWhere)->where('jobType','like',$typeWhere)->where('lang','like',$langWhere)->where('status','approved')->orderBy('id','desc')->count();
       $jobs = DB::table('jobOffers')->where('positionCity','like',$cityWhere)->where('categoryId','like',$categoryWhere)->where('jobType','like',$typeWhere)->where('categoryId','=','16')->where('lang','like',$langWhere)->where('status','approved')->orderBy('id','desc')->paginate(100);
       
       $jobsCities = DB::table('jobOffers')->groupBy('positionCity')->get();
        
        return view('jobs.index',['jobs'=>$jobs,"totalCount"=>$jobsTotal,'cities'=>$jobsCities,'categories'=>$categories,'req'=>$req]);
        
    }

    public function showDetail (Request $req) {
    $jobDetail = DB::table('jobOffers')->where('id',$req->id)->get();
    //$jobDetail->companyContactEmail = str_replace("@", "ahoj", $jobDetail->companyContactEmail);
        return view('jobs.contact',['job'=>$jobDetail]);
    }
    
    public function showResponses (Request $req) {
        $jobDetail = DB::table('jobOffers')->where('id',$req->id)->first();
        $jobResponses = DB::table('jobMessages')->where('jobId',$req->id)->get();
        $linkHash = md5($jobDetail->companyContactEmail.$jobDetail->ip.env('APP_HASHSALT'));
        if ($linkHash==$req->hash) {
            return view('jobs.responses',['job'=>$jobDetail,'responses'=>$jobResponses]);
        }
        else {
            return view('jobs.responsesError');
        }
    }

       
       
    public function messageSend (Request $req) {
        $jobDetail = DB::table('jobOffers')->where('id',$req->id)->first();
        
        if ($req->surname) {
            echo "Succesfully sent!";
            exit;
        }
        //Mail::to("pesatmichal@gmail.com")->send(new NewReply($jobDetail));
        Mail::to("$jobDetail->companyContactEmail")->send(new NewReply($jobDetail));
        
        DB::table('jobMessages')->insert(
              array(
                  'jobId' => $req->id,
                  'messageFrom' => $req->emailAddress,
                  'messageFromName' => $req->name,
                  'messageFromPhone' => $req->fromPhone,
                  'messageFromLang' => $req->langSkills,
                  'messageTo' => $jobDetail->companyContactEmail,
                  'messageSubject' => "Nová odpověď na pozici ".$jobDetail->positionName,
                  'messageSubjectUA' => "Nová odpověď na pozici ".$jobDetail->positionName,
                  'messageAttach' => "",
                  'messageText' => "",
                  'messageTextUA' => $req->message,
                  'messageStatus' => "sent",
                  'ip' => $_SERVER['REMOTE_ADDR'],
                  'created_at' => Date("Y-m-d H:i:s"),
              )
          );  
          
          
          return view('jobs.messageSent');
          
          
    }
    
    
    
    public function showDetailContact (Request $req) {
        $jobDetail = DB::table('jobOffers')->where('id',$req->id)->first();
        $jobDetail->companyContactEmail = str_replace("@", "&commat;", $jobDetail->companyContactEmail);
        
        return view('jobs.contact',['job'=>$jobDetail]);
    }
    
    public function DashboardEdit (Request $req) {
        $jobDetail = DB::table('jobOffers')->where('id',$req->id)->first();
        $categories = DB::table('jobCategories')->get();
        
        $employeeLinkEdit = env('APP_URL')."/contact/".$jobDetail->id."/".md5($jobDetail->companyContactEmail.$jobDetail->ip.env('APP_HASHSALT'));
        
        return view('dashboardedit',['job'=>$jobDetail,'categories'=>$categories,'employeeLinkEdit'=>$employeeLinkEdit]);
    }

	public function editByEmployeee(Request $req) {
		$jobDetail = DB::table('jobOffers')->where('id',$req->id)->first();
        $categories = DB::table('jobCategories')->orderBy('categoryName','asc')->get();
        return view('jobs.edit',['categories'=>$categories,'job'=>$jobDetail]);
	}
	
    public function newOffer (Request $req) {
        $categories = DB::table('jobCategories')->orderBy('categoryName','asc')->get();
        return view('jobs.new',['categories'=>$categories]);
    }
    
   public function heplUaJobs (Request $req) {
       return view('helpus');
   }
   public function heplUa (Request $req) {
          return view('helpua');
  }
  public function contact (Request $req) {
         return view('contact');
  }
    public function newOfferDone (Request $req) {
        return view('jobs.newDone');
    }
    
    public function showWaiting() {
	    
	    $jobDetail = DB::table('jobOffers')->where('status','waiting_approval')->count();
	    $json = array("value"=>$jobDetail);
	    return json_encode($json);
    }

    public function store(Request $req) {

    if (isset($req->id)) {
        DB::table('jobOffers')->where(['id' => $req->id])->update(
              array(
                  'companyId' => $req->companyId,
                  'companyName' => $req->companyName,
                  'companyContactPhone' => $req->companyContactPhone,
                  'companyContactEmail' => $req->companyContactEmail,
                  'publishContact' => $req->publishContact,
                  'categoryId' => $req->categoryId,
                  'publishTime' => $req->publishTime,
                  'positionName' => $req->positionName,
                  'positionNameUA' => $req->positionNameUA,
                  'positionDesc' => $req->positionDesc,
                  'positionDescUA' => $req->positionDescUA,
                  'positionAddress' => $req->positionAddress,
                  'positionCity' => $req->positionCity,
                  'salaryFrom' => $req->salaryFrom,
                  'status' => $req->status,
                  'status4employer' => $req->status4employer,
                  'lang' => $req->lang,
                  'salaryTo' => $req->salaryTo,
                  'jobType' => $req->jobType,
                  'ip' => $_SERVER['REMOTE_ADDR'],
                  'created_at' => Date("Y-m-d H:i:s"),
              )
          );  
          
          if ($req->status=="approved") {
              Mail::to($req->companyContactEmail)->send(new InzeratSchvalen($req));
              Mail::to("pesatmichal@gmail.com")->send(new InzeratSchvalen($req));
          }
          
          if (isset($req->editbyEmployer)) {
		  	return redirect('/new-offer-done');
          }
          else {
          	return redirect('./dashboard');
          }
          
    }
    else {
      DB::table('jobOffers')->insert(
          array(
              'companyId' => $req->companyId,
              'companyName' => $req->companyName,
              'companyContactPhone' => $req->companyContactPhone,
              'companyContactEmail' => $req->companyContactEmail,
              'publishContact' => $req->publishContact,
              'categoryId' => $req->categoryId,
              'publishTime' => $req->publishTime,
              'positionName' => $req->positionName,
            'positionNameUA' => $req->positionNameUA,
            'positionDesc' => $req->positionDesc,
            'positionDescUA' => $req->positionDescUA,
              'positionAddress' => $req->positionAddress,
              'positionCity' => $req->positionCity,
              'salaryFrom' => $req->salaryFrom,
              'status' => 'waiting_approval',
              'status4employer' => 'not_confirmed',
              'lang' => $req->lang,
              'salaryTo' => $req->salaryTo,
              'jobType' => $req->jobType,
              'ip' => $_SERVER['REMOTE_ADDR'],
              'created_at' => Date("Y-m-d H:i:s"),
          )
      );  
      return redirect('/new-offer-done');
      
    }
    


    }


}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\cour;
use App\Models\note;
use App\Models\notification;
use App\Models\teacher;
use App\Models\email;
use App\Models\courses;
use App\Models\Student;
use App\Models\module;

class dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function profile()
    {
        $notes = note::where('email','=',Auth::user()->email)->get();
        $emails = email::where('annee','=',Auth::user()->annee)->orderBy('id', 'desc')->take(2)->get();
        $notifications = notification::orderBy('id', 'desc')->take(3)->get();
        $courses = courses::where('annee','=',Auth::user()->annee)->where('read','=',0)->orderBy('id', 'desc')->take(4)->get();
        $teachers = teacher::get();
        return view('dashboard/profile',compact('notes','notifications','emails','teachers','courses'));
    }
    public function cours()
    {
        $cours = cour::where('annee','=',Auth::user()->annee)->where('groupe','=',Auth::user()->groupe)->get();
        return view('dashboard/cours',compact('cours'));
    }
    public function notes()
    {
        $best = note::where('email','=',Auth::user()->email)->orderBy('moyenne', 'desc')->take(1)->get();
        $worst = note::where('email','=',Auth::user()->email)->orderBy('moyenne', 'asc')->take(1)->get();
        $notes = note::where('email','=',Auth::user()->email)->get();
        $teachers = teacher::get();
        $courses = courses::where('annee','=',Auth::user()->annee)->where('read','=',0)->orderBy('id', 'desc')->take(4)->get();
        $emails = email::where('annee','=',Auth::user()->annee)->orderBy('id', 'desc')->take(2)->get();
        return view('dashboard/Mynotes',compact('notes','best','worst','emails','teachers','courses'));
    }
    public function emploi_de_temps()
    {
        $notes = note::where('email','=',Auth::user()->email)->get();
        $days = cour::where('annee','=',Auth::user()->annee)->where('groupe','=',Auth::user()->groupe)->get();
        return view('dashboard/emploi',compact('days','notes'));
        
    }

    public function module()
    {
        $emails = email::where('annee','=',Auth::user()->annee)->orderBy('id', 'desc')->take(2)->get();
        $courses = courses::where('annee','=',Auth::user()->annee)->where('read','=',0)->orderBy('id', 'desc')->take(4)->get();
        $teachers = teacher::get();
        $s1 = module::where('annee','=',Auth::user()->annee)->where('semester','=',1)->get();
        $s2 = module::where('annee','=',Auth::user()->annee)->where('semester','=',2)->get();
        return view('dashboard/module',compact('emails','teachers','courses','s1','s2'));
    }

    public function ranking()
    {
        $emails = email::where('annee','=',Auth::user()->annee)->orderBy('id', 'desc')->take(2)->get();
        $courses = courses::where('annee','=',Auth::user()->annee)->where('read','=',0)->orderBy('id', 'desc')->take(4)->get();
        $teachers = teacher::get();
        $modules = note::where('annee','=',Auth::user()->annee)->where('email','=',Auth::user()->email)->get();
        $emd10 = note::where('module','=',$modules[0]->module)->orderBy('EMD1', 'desc')->get();
        $emd20 = note::where('module','=',$modules[0]->module)->orderBy('EMD2', 'desc')->get();
        $td0 = note::where('module','=',$modules[0]->module)->orderBy('TD', 'desc')->get();
        $emd11 = note::where('module','=',$modules[1]->module)->orderBy('EMD1', 'desc')->get();
        $emd21 = note::where('module','=',$modules[1]->module)->orderBy('EMD2', 'desc')->get();
        $td1 = note::where('module','=',$modules[1]->module)->orderBy('TD', 'desc')->get();
        $emd12 = note::where('module','=',$modules[2]->module)->orderBy('EMD1', 'desc')->get();
        $emd22 = note::where('module','=',$modules[2]->module)->orderBy('EMD2', 'desc')->get();
        $td2 = note::where('module','=',$modules[2]->module)->orderBy('TD', 'desc')->get();
        $emd13 = note::where('module','=',$modules[3]->module)->orderBy('EMD1', 'desc')->get();
        $emd23 = note::where('module','=',$modules[3]->module)->orderBy('EMD2', 'desc')->get();
        $td3 = note::where('module','=',$modules[3]->module)->orderBy('TD', 'desc')->get();
        $emd14 = note::where('module','=',$modules[4]->module)->orderBy('EMD1', 'desc')->get();
        $emd24 = note::where('module','=',$modules[4]->module)->orderBy('EMD2', 'desc')->get();
        $td4 = note::where('module','=',$modules[4]->module)->orderBy('TD', 'desc')->get();
        $emd15 = note::where('module','=',$modules[5]->module)->orderBy('EMD1', 'desc')->get();
        $emd25 = note::where('module','=',$modules[5]->module)->orderBy('EMD2', 'desc')->get();
        $td5 = note::where('module','=',$modules[5]->module)->orderBy('TD', 'desc')->get();
        $emd16 = note::where('module','=',$modules[6]->module)->orderBy('EMD1', 'desc')->get();
        $emd26 = note::where('module','=',$modules[6]->module)->orderBy('EMD2', 'desc')->get();
        $td6 = note::where('module','=',$modules[6]->module)->orderBy('TD', 'desc')->get();
        $emd17 = note::where('module','=',$modules[7]->module)->orderBy('EMD1', 'desc')->get();
        $emd27 = note::where('module','=',$modules[7]->module)->orderBy('EMD2', 'desc')->get();
        $td7 = note::where('module','=',$modules[7]->module)->orderBy('TD', 'desc')->get();
        return view('dashboard/ranking',compact('emails','teachers','courses','modules','emd10','emd20','td0','emd11','emd21','td1','emd12','emd22','td2','emd13','emd23','td3','emd14','emd24','td4','emd15','emd25','td5','emd16','emd26','td6','emd17','emd27','td7'));
    }
    public function rankingp()
    {
        $emails = email::where('annee','=',Auth::user()->annee)->orderBy('id', 'desc')->take(2)->get();
        $courses = courses::where('annee','=',Auth::user()->annee)->where('read','=',0)->orderBy('id', 'desc')->take(4)->get();
        $teachers = teacher::get();
        $notes = note::where('email','=',Auth::user()->email)->get();
        $bestTd = note::where('email','=',Auth::user()->email)->orderBy('TD', 'desc')->take(1)->get();
        $bestEmd1 = note::where('email','=',Auth::user()->email)->orderBy('EMD1', 'desc')->take(1)->get();
        $bestEmd2 = note::where('email','=',Auth::user()->email)->orderBy('EMD2', 'desc')->take(1)->get();
        $bestm = note::where('email','=',Auth::user()->email)->orderBy('moyenne', 'desc')->take(3)->get();
        $worstTd = note::where('email','=',Auth::user()->email)->orderBy('TD', 'asc')->take(1)->get();
        $worstEmd1 = note::where('email','=',Auth::user()->email)->orderBy('EMD1', 'asc')->take(1)->get();
        $worstEmd2 = note::where('email','=',Auth::user()->email)->orderBy('EMD2', 'asc')->take(1)->get();
        $worstm = note::where('email','=',Auth::user()->email)->orderBy('moyenne', 'asc')->take(1)->get();
        $classment0 = note::where('module','=',$bestm[0]->module)->orderBy('moyenne', 'desc')->get();
        $classment1 = note::where('module','=',$bestm[1]->module)->orderBy('moyenne', 'desc')->get();
        $classment2 = note::where('module','=',$bestm[2]->module)->orderBy('moyenne', 'desc')->get();
        return view('dashboard/rankingP',compact('emails','teachers','courses','bestTd','bestEmd1','bestEmd2','bestm','worstTd','worstEmd1','worstEmd2','worstm','notes','classment0','classment1','classment2'));
        }

    public function settings()
    {
        $emails = email::where('annee','=',Auth::user()->annee)->orderBy('id', 'desc')->take(2)->get();
        $teachers = teacher::get();
        $courses = courses::where('annee','=',Auth::user()->annee)->where('read','=',0)->orderBy('id', 'desc')->take(4)->get();
        return view('dashboard/settings',compact('emails','teachers','courses'));
    }


    public function add()
    {
        $emails = email::where('annee','=',Auth::user()->annee)->orderBy('id', 'desc')->take(2)->get();
        $teachers = teacher::where('email','!=','')->get();
        $courses = courses::where('annee','=',Auth::user()->annee)->where('read','=',0)->orderBy('id', 'desc')->take(4)->get();

        return view('admin/index',compact('teachers','emails','courses'));
    }

    public function absence(Request $request)
    {
        $modul = $request->get('module');
        $justifi = $request->get('justify');
        $abs =  note::where('email','=',Auth::user()->email)->where('module','=',$modul)->value('absence');
        $jst =  note::where('email','=',Auth::user()->email)->where('module','=',$modul)->value('justified');
        $abss =  note::where('email','=',Auth::user()->email)->where('module','=',$modul)->update(['absence'=>$abs+1]);
        if ($justifi) {
            $abss =  note::where('email','=',Auth::user()->email)->where('module','=',$modul)->update(['justified'=>$jst + 1]);
        }
        $notes = note::where('email','=',Auth::user()->email)->get();
        $days = cour::where('annee','=',Auth::user()->annee)->where('groupe','=',Auth::user()->groupe)->get();
        return view('dashboard/emploi',compact('days','notes'));
    }

    public function updateUserName(Request $request){
        $student = Student::find(Auth::user()->id);
        $student->prenom = $request->input('name');
        $student->update();
        return redirect()->back()->with('status','Student Updated Successfully');
    }
    public function updatePic(Request $request){
        if($request->hasFile('image'))
        {
            $student = Student::find(Auth::user()->id);
            $image_name = $request->file('image')->getClientOriginalName();
            $student->picture = $image_name;
            $student->update();
            $des_path = 'public/images/users';
            $path = $request->file('image')->storeAs($des_path,$image_name);
            return redirect()->back()->with('status','Student Updated Successfully');
        }else{
            return redirect()->back();
        }
    }
    public function read($id){
        $read = courses::where('id','=',$id)->update(['read'=> 1]);
        $link = courses::where('id','=',$id)->get();
        $cour =  module::where('module','=',$link[0]->module)->value('lastcourRead');
        $td =  module::where('module','=',$link[0]->module)->value('lasttdRead');
        if ($link[0]->type == 'TD') {
            $r = module::where('module','=',$link[0]->module)->update(['LasttdRead'=> $td +1]);
        } else {
            $r = module::where('module','=',$link[0]->module)->update(['LastcourRead'=> $cour +1]);
        }
        return redirect()->to($link[0]->link); 
    }

    
}

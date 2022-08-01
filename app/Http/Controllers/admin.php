<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\module;

class admin extends Controller
{
    public function notification(Request $request)
    {
        $request->validate([
            'type' => 'required',  
            'titre' => 'required',
            'link2' => 'required'
        ]);
        $query = DB::table('notification')->insert([
            'type'=>$request->input('type'),
            'titre'=>$request->input('titre'),
            'link'=>$request->input('link2')
        ]);
        if ($query) {
            return back()->with('success','notification has been add successfully');
        } else {
            return back()->with('fail','something went wrong');
        }
        
        
    }

    public function event(Request $request)
    {
        $request->validate([
            'date' => 'required',  
            'description' => 'required',
            'link' => 'required'
        ]);
        $query = DB::table('event')->insert([
            'date'=>$request->input('date'),
            'description'=>$request->input('description'),
            'link'=>$request->input('link')
        ]);
        if ($query) {
            return back()->with('success','event has been add successfully');
        } else {
            return back()->with('fail','something went wrong');
        }
    }

    public function hotemail(Request $request)
    {
        $request->validate([
            'titre2' => 'required',  
            'text' => 'required'
        ]);
        $query = DB::table('emails')->insert([
            'titre'=>$request->input('titre2'),
            'text'=>$request->input('text'),
            'prof'=>$request->input('prof'),
            'annee'=>$request->input('anne')
        ]);
        if ($query) {
            return back()->with('success','hot email has been add successfully');
        } else {
            return back()->with('fail','something went wrong');
        }
    }

    public function courses(Request $request)
    {
        $request->validate([
            'titre3' => 'required',  
            'link3' => 'required'
        ]);
        $query = DB::table('courses')->insert([
            'annee'=>$request->input('ann'),
            'module'=>$request->input('module'),
            'type'=>$request->input('type2'),
            'titre'=>$request->input('titre3'),
            'link'=>$request->input('link3'),
        ]);
        $type = $request->get('type2');
        $module = $request->get('module');
        $name = $request->get('titre3');
        $link = $request->get('link3');
        $cour =  module::where('module','=',$module)->value('lastCour');
        $td =  module::where('module','=',$module)->value('lastTd');
        
        if ( $type == "TD") {
            DB::table('modules')->where('module','=',$module)->update(['lastTd'=>$td + 1]);
            DB::table('modules')->where('module','=',$module)->update(['lastTdName'=>$name]);
            DB::table('modules')->where('module','=',$module)->update(['LastTdLink'=>$link]);
        } else {
            DB::table('modules')->where('module','=',$module)->update(['lastCour'=>$cour + 1]);
            DB::table('modules')->where('module','=',$module)->update(['lastCourName'=>$name]);
            DB::table('modules')->where('module','=',$module)->update(['LastCourLink'=>$link]);
        }
        
        if ($query) {
            return back()->with('success','course has been add successfully');
        } else {
            return back()->with('fail','something went wrong');
        }
    }

}

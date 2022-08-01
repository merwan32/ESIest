<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\event;
use App\Models\QnA;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teachers = teacher::where('image','=',1)->orderBy('teacherId', 'desc')->take(20)->get();
        $events = event::orderBy('id', 'desc')->take(8)->get();
        $qna = QnA::take(3)->get();
        return view('accuel',compact('teachers','events','qna'));
    }

    public function QA(){
        $qna = QnA::get();
        return view('QA',compact('qna'));
     }

    public function logout () {
        auth()->logout();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Employeerecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){

        $emp = Employeerecord::all();
        return view('home', compact('emp'));
       
    }

    public function summarydata(){
        $sumemp = Employeerecord::all();

        $getfem = DB::table('employeerecords')->select('gender')->where('gender', '=', 'female')->get();
        $getmale = DB::table('employeerecords')->select('gender')->where('gender', '=', 'male')->get();
        $countfem = count($getfem);
        $countmale = count($getmale);
        $getbd = DB::table('employeerecords')->select('birthd')->get();
        $countbd = count($getbd);
        $user_info = DB::table('employeerecords')
                ->selectRaw("TIMESTAMPDIFF(YEAR, DATE(birthd), current_date) AS age")
                ->get();
        //$arraybd = array($getbd);
       // $disbd = array_column($arraybd, 'birthd');
        $arraybd = json_decode(json_encode($user_info), true);
        //disbd = array_column($arraybd, 'birthd');
        $agescol = array_column($arraybd, 'age');
        $sumofages = array_sum($agescol);
        //var_dump($disbd);
        $average = $sumofages / $countbd;
     

        return view('summary', compact('sumemp', 'countfem', 'countmale', 'average'));
    }

    public function saveemployee(request $request){
        $saverecord = new Employeerecord();
        $saverecord->fname = $request->fname;
        $saverecord->lname = $request->lname;
        $saverecord->gender = $request->gender;
        $saverecord->birthd = $request->birthd;
        $saverecord->mosalary = $request->mosalary;

        $saverecord->save();

        return back()->with('success', 'Employee Data Saved');
    }

    public function updateemployee(Request $request, $empid){

      
      
        $updateemployee = DB::table('employeerecords')->where('empid', $empid)
        ->update(['fname'=> $request->fname, 'lname'=> $request->lname, 'gender'=> $request->gender, 'birthd'=> $request->birthd, 'mosalary'=> $request->mosalary]);
        return redirect('home')->with('success', 'Employee Data Updated');
    }

    public function delemployee(Request $request, $empid){
            $delemp = DB::table('employeerecords')->where('empid', $empid)->delete();

            return redirect('home')->with('success', 'Employee Data Deleted');
    }
}

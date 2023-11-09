<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
class VotingController extends Controller
{
    public function voting(Request $req){
        return view('voting',$req->input());
    }
    public function vote(Request $request){
        $request->validate([
            'Email' => [
                'required',
                'email',
                Rule::unique('voting'),
                'ends_with:karpagamtech.ac.in',
            ],
            'Team_Name' => [
                'required',
                Rule::exists('teamexpo', 'Team_Name'),
            ],
        ]);

        $Team_Name = $request->input('Team_Name');
        $Email = $request->input('Email');


        DB::table('voting')->insert([
            'Team_Name' => $Team_Name,
            'Email' => $Email,
        ]);


        DB::table('teamexpo')->where('Team_Name', $Team_Name)->increment('vote');


        DB::table('totalvote')->where('count', 'count')->increment('vote');

        $success="Vote";
        return view('success',['success'=>$success]);
    }

    public function register(Request $request ){
        try {
            $rules = [
                'Email' => [
                    'email',
                    'required',
                    Rule::unique('totalteam', 'Email'),
                    'ends_with:karpagamtech.ac.in',
                    'starts_with:21'
                ],
                'Team_Name' => 'required|min:5|unique:totalteam',
                'Team_Leader' => 'required|regex:/^[a-zA-Z \s]+$/',
                'Phone'=>'required|digits:10|regex:/^[0-9]+$/|Integer|unique:totalteam|',


                'Member_1' => 'required|regex:/^[a-zA-Z \s]+$/',


                'Member_2' => 'required|regex:/^[a-zA-Z \s]+$/',
                'Member_3' => 'required|regex:/^[a-zA-Z \s]+$/',

                'Team_Leader_Register_No' => [
                    'required',
                    'digits:12',
                    'integer',
                    'starts_with:721221',
                    'different:Member_2_Register_No',
                    'different:Member_3_Register_No',
                    'different:Member_4_Register_No',
                    'different:Member_5_Register_No',
                    'different:Member_1_Register_No',
                    Rule::unique('totalteam', 'Team_Leader_Register_No'),
                    Rule::unique('totalteam', 'Member_1_Register_No'),
                    Rule::unique('totalteam', 'Member_2_Register_No'),
                    Rule::unique('totalteam', 'Member_3_Register_No'),
                    Rule::unique('totalteam', 'Member_4_Register_No'),
                    Rule::unique('totalteam', 'Member_5_Register_No'),
                ],
                'Member_1_Register_No' => [
                    'required',
                    'digits:12',
                    'integer',
                    'starts_with:721221',
                    'different:Member_2_Register_No',
                    'different:Member_3_Register_No',
                    'different:Member_4_Register_No',
                    'different:Member_5_Register_No',
                    'different:Team_Leader_Register_No',
                    Rule::unique('totalteam', 'Team_Leader_Register_No'),
                    Rule::unique('totalteam', 'Member_1_Register_No'),
                    Rule::unique('totalteam', 'Member_2_Register_No'),
                    Rule::unique('totalteam', 'Member_3_Register_No'),
                    Rule::unique('totalteam', 'Member_4_Register_No'),
                    Rule::unique('totalteam', 'Member_5_Register_No'),
                ], 'Member_2_Register_No' => [
                    'required',
                    'digits:12',
                    'integer',
                    'starts_with:721221',
                    'different:Member_1_Register_No',
                    'different:Member_3_Register_No',
                    'different:Member_4_Register_No',
                    'different:Member_5_Register_No',
                    'different:Team_Leader_Register_No',
                    Rule::unique('totalteam', 'Team_Leader_Register_No'),
                    Rule::unique('totalteam', 'Member_1_Register_No'),
                    Rule::unique('totalteam', 'Member_2_Register_No'),
                    Rule::unique('totalteam', 'Member_3_Register_No'),
                    Rule::unique('totalteam', 'Member_4_Register_No'),
                    Rule::unique('totalteam', 'Member_5_Register_No'),
                ],'Member_3_Register_No' => [
                    'required',
                    'digits:12',
                    'integer',
                    'starts_with:721221',
                    'different:Member_2_Register_No',
                    'different:Member_1_Register_No',
                    'different:Member_4_Register_No',
                    'different:Member_5_Register_No',
                    'different:Team_Leader_Register_No',
                    Rule::unique('totalteam', 'Team_Leader_Register_No'),
                    Rule::unique('totalteam', 'Member_1_Register_No'),
                    Rule::unique('totalteam', 'Member_2_Register_No'),
                    Rule::unique('totalteam', 'Member_3_Register_No'),
                    Rule::unique('totalteam', 'Member_4_Register_No'),
                    Rule::unique('totalteam', 'Member_5_Register_No'),
                ],


            ];

            if ($request->filled('Member_4_Register_No')  || $request->filled('Member_4')) {
                $rules += [

                    'Member_4' => 'required|regex:/^[a-zA-Z \s]+$/',
                    'Member_4_Register_No' => [
                        'required',
                        'digits:12',
                        'integer',
                        'starts_with:721221',
                        'different:Member_2_Register_No',
                        'different:Member_3_Register_No',
                        'different:Member_1_Register_No',
                        'different:Member_5_Register_No',
                        'different:Team_Leader_Register_No',
                        Rule::unique('totalteam', 'Team_Leader_Register_No'),
                        Rule::unique('totalteam', 'Member_1_Register_No'),
                        Rule::unique('totalteam', 'Member_2_Register_No'),
                        Rule::unique('totalteam', 'Member_3_Register_No'),
                        Rule::unique('totalteam', 'Member_4_Register_No'),
                        Rule::unique('totalteam', 'Member_5_Register_No'),
                    ], ];
            }

            if ($request->filled('Member_5_Register_No')  || $request->filled('Member_5')) {
                $rules += [

                    'Member_5' => 'required|regex:/^[a-zA-Z \s]+$/',
                    'Member_5_Register_No' => [
                        'required',
                        'digits:12',
                        'integer',
                        'starts_with:721221',
                        'different:Member_2_Register_No',
                        'different:Member_3_Register_No',
                        'different:Member_4_Register_No',
                        'different:Member_1_Register_No',
                        'different:Team_Leader_Register_No',
                        Rule::unique('totalteam', 'Team_Leader_Register_No'),
                        Rule::unique('totalteam', 'Member_1_Register_No'),
                        Rule::unique('totalteam', 'Member_2_Register_No'),
                        Rule::unique('totalteam', 'Member_3_Register_No'),
                        Rule::unique('totalteam', 'Member_4_Register_No'),
                        Rule::unique('totalteam', 'Member_5_Register_No'),
                    ],  ];
            }

            $validatedData = $request->validate($rules);

        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }



        $Team_Name = $request->input('Team_Name');
        $Email = $request->input('Email');
        $Phone=$request->input('Phone');
        $Team_Leader = $request->input('Team_Leader');
        $Member_1 = $request->input('Member_1');
        $Member_2 = $request->input('Member_2');
        $Member_3 = $request->input('Member_3');
        $Member_4 = $request->input('Member_4');
        $Member_5 = $request->input('Member_5');
        $domain = "Domain";

        $Team_Leader_Register_No=$request->input('Team_Leader_Register_No');
        $Member_1_Register_No=$request->input('Member_1_Register_No');
        $Member_2_Register_No=$request->input('Member_2_Register_No');
        $Member_3_Register_No=$request->input('Member_3_Register_No');
        $Member_4_Register_No=$request->input('Member_4_Register_No');
        $Member_5_Register_No=$request->input('Member_5_Register_No');




        DB::table('totalteam')->insert([
            'Team_Name' => $Team_Name,
            'Email' => $Email,
            'Phone'=>$Phone,
            'Team_Leader'=>$Team_Leader,

            'Member_1'=>$Member_1,
            'Member_2'=>$Member_2,
            'Member_3'=>$Member_3,
            'Member_4'=>$Member_4,
            'Member_5'=>$Member_5,
            'domain'=>$domain,

            'Team_Leader_Register_No'=>$Team_Leader_Register_No,
            'Member_1_Register_No'=>$Member_1_Register_No,
            'Member_2_Register_No'=>$Member_2_Register_No,
            'Member_3_Register_No'=>$Member_3_Register_No,
            'Member_4_Register_No'=>$Member_4_Register_No,
            'Member_5_Register_No'=>$Member_5_Register_No,

        ]);

        DB::table('leaderboard')->insert([
            'Team_Name'=>$Team_Name,
        ]);
        DB::table('events')->insert(['Team_Name'=>$Team_Name]);
        $success="Registration";
        return view('success',['success'=>$success]);



    }
    public function leader(){
        $result=DB::table('leaderboard')
                ->orderByRaw('score DESC')
                ->get();
        return view('leader', ['team' => $result]);
    }

    public function leaderedit(){
        $result=DB::table('leaderboard')
                ->orderByRaw('score DESC')
                ->get();

        return view('home',['team'=>$result]);

    }
    public function edit(Request $request){

        $scor = $request->input('score');
        $Team_Name = $request->input('Team_Name');
        $event = $request->input('event');
        $request->validate([
            'score' => 'required|numeric|between:0,10',
            'event' => 'required',
            'Team_Name' => 'required',
        ]);
        $eventdata = DB::table('events')->where('Team_Name', $Team_Name)->first();
        if ($eventdata !== NULL) {
            $score = $eventdata->$event;

            if ($score === 0.00) {
                DB::table('events')->where('Team_Name', $Team_Name)->increment($event, $scor);
                $eventdata = DB::table('events')->where('Team_Name', $Team_Name)->first();

                $totalScore = $eventdata->quiz + $eventdata->coding + $eventdata->debate + $eventdata->expo + $eventdata->presentation + $eventdata->design + $eventdata->techgames + $eventdata->codevs;



                DB::table('leaderboard')->where('Team_Name', $Team_Name)->update(['score' => $totalScore]);

                return redirect('home')->with('success', $Team_Name);
            } else {
                return redirect('home')->with('error', 'Already updated');
            }
        } else {
            return redirect('home')->with('error', 'Record not found');
        }





    }

    public function view(){
        $result=DB::table('leaderboard')
                ->get();
        $teams=DB::table('teamexpo')->get();
        return view('voteteam',['team'=>$result,'teamexpo'=>$teams]);
    }
    public function insert(Request $request){
        $request->validate([
            'Team_Name'=>'required|unique:teamexpo',
        ]);
        $Team_Name=$request->input('Team_Name');
        DB::table('teamexpo')->insert([
            'Team_Name'=>$Team_Name
        ]);
        return redirect('voteteam')->with('success', 'Voted successfully!');
    }

    public function login(Request $request){
        $user = $request->input('Email');
        $pass = $request->input('password');

        $hashedPassword = password_hash("kala1234", PASSWORD_DEFAULT);
        $hashedPassword2 = password_hash("admin@123", PASSWORD_DEFAULT);
        if ($user == 'kalanithibala053@outlook.com' && password_verify($pass, $hashedPassword)) {
            $request->session()->put('username', 'kalanithi');
            return redirect('adminpanel');
        } else if($user == 'admin@gmail.com' && password_verify($pass, $hashedPassword2)) {
            $request->session()->put('username', 'byteworks');
            return redirect('home');
        }else{
            return view('admin', ['error' => 'Invalid username or password']);

        }
    }

    public function count(){
        $team = DB::table('teamexpo')
        ->orderByRaw('vote DESC')
        ->get();

        $count = DB::table('totalvote')->get();
        return view('counting', ['team' => $team, 'coun' => $count]);
    }
    public function generateReport()
{
    $data = DB::table('leaderboard')
        ->orderByRaw('score DESC')
        ->get();



    if ($data->isEmpty()) {

        $csvFileName = 'no_data_available.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $handle = fopen('php://output', 'w');
        fputcsv($handle, ['No data available']);
        fclose($handle);

        return Response::make(rtrim(ob_get_clean()), 200, $headers);
    } else {

        $csvFileName = 'leaderboard_report.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $handle = fopen('php://output', 'w');
        fputcsv($handle, array_keys((array)$data[0]));

        foreach ($data as $row) {
            fputcsv($handle, (array)$row);
        }

        fclose($handle);

        return Response::make(rtrim(ob_get_clean()), 200, $headers);
    }
}
public function generateReportvote()
{
    $data = DB::table('teamexpo')
    ->orderByRaw('vote DESC')
    ->get();

if ($data->isEmpty()) {

    $csvFileName = 'no_data_available.csv';
    $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=$csvFileName",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $handle = fopen('php://output', 'w');
    fputcsv($handle, ['No data available']);
    fclose($handle);

    return Response::make(rtrim(ob_get_clean()), 200, $headers);
} else {

    $csvFileName = 'expovote_report.csv';
    $headers = array(
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=$csvFileName",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    );

    $handle = fopen('php://output', 'w');
    fputcsv($handle, array_keys((array)$data[0]));

    foreach ($data as $row) {
        fputcsv($handle, (array)$row);
    }

    fclose($handle);

    return Response::make(rtrim(ob_get_clean()), 200, $headers);
}



}
public function generateReportevent()
{
    $data = DB::table('events')

        ->get();

        if ($data->isEmpty()) {

            $csvFileName = 'no_data_available.csv';
            $headers = array(
                "Content-type" => "text/csv",
                "Content-Disposition" => "attachment; filename=$csvFileName",
                "Pragma" => "no-cache",
                "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
                "Expires" => "0"
            );

            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['No data available']);
            fclose($handle);

            return Response::make(rtrim(ob_get_clean()), 200, $headers);
        } else {

            $csvFileName = 'event_report.csv';
            $headers = array(
                "Content-type" => "text/csv",
                "Content-Disposition" => "attachment; filename=$csvFileName",
                "Pragma" => "no-cache",
                "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
                "Expires" => "0"
            );

            $handle = fopen('php://output', 'w');
            fputcsv($handle, array_keys((array)$data[0]));

            foreach ($data as $row) {
                fputcsv($handle, (array)$row);
            }

            fclose($handle);
            return Response::make(rtrim(ob_get_clean()), 200, $headers);
}
}
public function generateReportregister()
{
    ob_start(); // Start output buffering

    $data = DB::table('totalteam')->get();

    if ($data->isEmpty()) {
        $csvFileName = 'no_data_available.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $handle = fopen('php://output', 'w');
        fputcsv($handle, ['No data available']);
        fclose($handle);

        return Response::make(rtrim(ob_get_clean()), 200, $headers);
    } else {
        $csvFileName = 'register_report.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$csvFileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $handle = fopen('php://output', 'w');
        fputcsv($handle, array_keys((array)$data[0]));

        foreach ($data as $row) {
            fputcsv($handle, (array)$row);
        }

        fclose($handle);
        return Response::make(rtrim(ob_get_clean()), 200, $headers);
    }
}

public function editmark(){
    $eventdata=DB::table('events')
            ->get();

    return view('editmark',['team'=>$eventdata]);

}
public function update(Request $request)
{

    $Team_Name = $request->input('Team_Name');
    $quiz = (float)($request->input('quiz') ?? 0.00);
    $coding = (float)($request->input('coding') ?? 0.00);
    $debate = (float)($request->input('debate') ?? 0.00);
    $expo = (float)($request->input('expo') ?? 0.00);
    $presentation = (float)($request->input('presentation') ?? 0.00);
    $design = (float)($request->input('design') ?? 0.00);
    $techgames = (float)($request->input('techgames') ?? 0.00);
    $codevs = (float)($request->input('codevs') ?? 0.00);
      $request->validate([
        'quiz' => 'numeric|between:0,10',
        'coding' => 'numeric|between:0,10',
        'debate' => 'numeric|between:0,10',
        'expo' => 'numeric|between:0,10',
        'presentation' => 'numeric|between:0,10',
        'design' => 'numeric|between:0,10',
        'techgames' => 'numeric|between:0,10',
        'codevs' => 'numeric|between:0,10',
    ]);
    $totalScore = $quiz + $coding + $debate + $codevs + $expo + $presentation + $design + $techgames;
    DB::table('events')->where('Team_Name', $Team_Name)->update([
        'quiz' => $quiz,
        'coding' => $coding,
        'debate' => $debate,
        'codevs' => $codevs,
        'expo' => $expo,
        'presentation' => $presentation,
        'design' => $design,
        'techgames' => $techgames,
    ]);

    DB::table('leaderboard')->where('Team_Name', $Team_Name)->update(['score' => $totalScore]);
    return redirect('evaluate')->with('success', $Team_Name);
}


public function initial(){
    DB::table('totalvote')->insert([
        'count'=>'count',
        'vote'=>0,
    ]);
    return redirect('leader');
}
public function reporter(){
    $events = DB::select('SELECT * FROM events');
    $teamlist = DB::select('SELECT Team_Name,id FROM totalteam');

    return view('adminpanel', compact('events', 'teamlist'));
}



public function updatedata(Request $request)
{
    $DATAS =  DB::table('totalteam')->where('id', $request->input('id'))->first();

    $fieldsToUpdate = [
        'Team_Name',
        'Email',
        'Phone',
        'Team_Leader',
        'Member_1',
        'Member_2',
        'Member_3',
        'Member_4',
        'Member_5',

        'Team_Leader_Register_No',
        'Member_1_Register_No',
        'Member_2_Register_No',
        'Member_3_Register_No',
        'Member_4_Register_No',
        'Member_5_Register_No',
    ];
try{
    $rules = [
        'Team_Name' => 'required|unique:totalteam,Team_Name,' . $request->input('id'),
    'Team_Leader' =>'required|regex:/^[a-zA-Z \s]+$/',
    'Member_1' => 'required|regex:/^[a-zA-Z \s]+$/',
    'Member_2' => 'required|regex:/^[a-zA-Z \s]+$/',
    'Member_3' => 'required|regex:/^[a-zA-Z \s]+$/',

        'Email' => 'email|required|starts_with:21|ends_with:karpagamtech.ac.in|unique:totalteam,Email,' . $request->input('id'),
        'Phone' => 'required|digits:10|regex:/^[0-9]+$/|Integer|unique:totalteam,Phone,' . $request->input('id'),
        'Team_Leader_Register_No' => [
            'required',

            'digits:12',
            'integer',
            'starts_with:721221',
            'different:Member_2_Register_No',
            'different:Member_3_Register_No',
            'different:Member_4_Register_No',
            'different:Member_5_Register_No',
            'different:Member_1_Register_No',
            Rule::unique('totalteam', 'Team_Leader_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_1_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_2_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_3_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_4_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_5_Register_No')->ignore($request->input('id')),
        ],
        'Member_1_Register_No' => [
            'required',
            'digits:12',
            'integer',
            'starts_with:721221',
            'different:Member_2_Register_No',
            'different:Member_3_Register_No',
            'different:Member_4_Register_No',
            'different:Member_5_Register_No',
            'different:Team_Leader_Register_No',
            Rule::unique('totalteam', 'Team_Leader_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_1_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_2_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_3_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_4_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_5_Register_No')->ignore($request->input('id')),
        ],
        'Member_2_Register_No' => [
            'required',
            'digits:12',
            'integer',
            'starts_with:721221',
            'different:Member_1_Register_No',
            'different:Member_3_Register_No',
            'different:Member_4_Register_No',
            'different:Member_5_Register_No',
            'different:Team_Leader_Register_No',
            Rule::unique('totalteam', 'Team_Leader_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_1_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_2_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_3_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_4_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_5_Register_No')->ignore($request->input('id')),
        ],
        'Member_3_Register_No' => [
            'required',
            'digits:12',
            'integer',
            'starts_with:721221',
            'different:Member_1_Register_No',
            'different:Member_2_Register_No',
            'different:Member_4_Register_No',
            'different:Member_5_Register_No',
            'different:Team_Leader_Register_No',
            Rule::unique('totalteam', 'Team_Leader_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_1_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_2_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_3_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_4_Register_No')->ignore($request->input('id')),
            Rule::unique('totalteam', 'Member_5_Register_No')->ignore($request->input('id')),
        ],




    ];

    if ($request->filled('Member_4_Register_No') || $request->filled('Member_4')) {
        $rules += [
            'Member_4' => 'required|regex:/^[a-zA-Z \s]+$/',
            'Member_4_Register_No' => [
                'required',
                'digits:12',
                'integer',
                'starts_with:721221',
                'different:Member_1_Register_No',
                'different:Member_3_Register_No',
                'different:Member_2_Register_No',
                'different:Member_5_Register_No',
                'different:Team_Leader_Register_No',
                Rule::unique('totalteam', 'Team_Leader_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_1_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_2_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_3_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_4_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_5_Register_No')->ignore($request->input('id')),
            ],   ];
    }

    if ($request->filled('Member_5_Register_No') || $request->filled('Member_5')) {
        $rules += [
            'Member_5' => 'required|regex:/^[a-zA-Z \s]+$/',
            'Member_5_Register_No' => [
                'required',
                'digits:12',
                'integer',
                'starts_with:721221',
                'different:Member_1_Register_No',
                'different:Member_3_Register_No',
                'different:Member_4_Register_No',
                'different:Member_2_Register_No',
                'different:Team_Leader_Register_No',
                Rule::unique('totalteam', 'Team_Leader_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_1_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_2_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_3_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_4_Register_No')->ignore($request->input('id')),
                Rule::unique('totalteam', 'Member_5_Register_No')->ignore($request->input('id')),
            ],  ];
    }
    $validatedData = $request->validate($rules);

} catch (ValidationException $e) {

    return redirect()->back()->withErrors($e->validator)->withInput();
}

    foreach ($fieldsToUpdate as $field)
    {
        $currentValue = $DATAS->$field;
        $newValue = $request->input($field);

        if ($currentValue !== $newValue) {

            DB::table('totalteam')->where('id', $request->input('id'))->update([$field => $newValue]);

        }
    }

    if ($DATAS->Team_Name !== $request->input('Team_Name')) {
        DB::table('leaderboard')->where('Team_Name', $DATAS->Team_Name)->update(['Team_Name' => $request->input('Team_Name')]);
 DB::table('events')->where('Team_Name', $DATAS->Team_Name)->update(['Team_Name' => $request->input('Team_Name')]);

        $expo = DB::table('teamexpo')->where('Team_Name', $DATAS->Team_Name)->first();

        if (!empty($expo)) {
            DB::table('teamexpo')->where('Team_Name', $DATAS->Team_Name)->update(['Team_Name' => $request->input('Team_Name')]);
        }
    }

    $success = 'success';
    return view('success', ['success' => $success]);
}
public function show($id)
{
    $details = DB::table('totalteam')->where('id', $id)->first();

    return view('editpanel', ['details' => $details]);
}

public function delete($id){
    DB::table('totalteam')->where('id', $id)->delete();
    DB::table('events')->where('id', $id)->delete();
    DB::table('leaderboard')->where('id', $id)->delete();
    DB::table('teamexpo')->where('id', $id)->delete();
    return redirect('/adminpanel');
}
}

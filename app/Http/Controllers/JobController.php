<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobs;
use App\jobdetails;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input = $request->all();

        $FinalArr['name'] = $request->name;
        $FinalArr['email'] = $request->email;
        $FinalArr['address'] = $request->address;
        $FinalArr['gender'] = $request->gender;
        $FinalArr['mobile'] = $request->mobile;        

        /*  qualification  */
        for ($i=0; $i < $request->hidden_ad_level ; $i++) {
            $qualiArr["institute"] = $request->institute[$i];
            $qualiArr["year"] = $request->year[$i];
            $qualiArr["marks"] = $request->marks[$i];
            $FinalArr['qualification'][$request->qualification[$i]] = $qualiArr;
        }
        /*  qualification  */

        /*  company  */
        for ($i=0; $i < $request->hidden_work_level ; $i++) {
            $qualiArr["designation"] = $request->designation[$i];
            $qualiArr["from"] = $request->from[$i];
            $qualiArr["to"] = $request->to[$i];
            $FinalArr['company'][$request->company[$i]] = $qualiArr;
        }
        // dd($FinalArr);
        /*  company  */

        /*  language  */
        $FinalArr['language']['Hindi'] = (isset($request->hindi_types) ? implode(',',$request->hindi_types) : '');
        $FinalArr['language']['English'] = (isset($request->english_types) ? implode(',',$request->english_types) : '');
        $FinalArr['language']['Gujarati'] = (isset($request->gujarati_types) ? implode(',',$request->gujarati_types) : '');
        // dd($FinalArr);
        /*  language  */

        /*  experience  */
        $FinalArr['technical_experience']['PHP'] = (isset($request->experience_types_php) ? implode(',',$request->experience_types_php) : '');
        $FinalArr['technical_experience']['Mysql'] = (isset($request->experience_types_mysql) ? implode(',',$request->experience_types_mysql) : '');
        $FinalArr['technical_experience']['Laravel'] = (isset($request->experience_types_laravel) ? implode(',',$request->experience_types_laravel) : '');
        $FinalArr['technical_experience']['Oracle'] = (isset($request->experience_types_oracle) ? implode(',',$request->experience_types_oracle) : '');
        /*  experience  */

        $FinalArr['preferred_location'] = $request->preferred_location;
        $FinalArr['current_ctc'] = $request->current_ctc;
        $FinalArr['expected_ctc'] = $request->expected_ctc;
        $FinalArr['notice_period'] = $request->notice_period;

        dd($FinalArr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $FinalArr['name'] = $request->name;
        $FinalArr['email'] = $request->email;
        $FinalArr['address'] = $request->address;
        $FinalArr['gender'] = $request->gender;
        $FinalArr['mobile'] = $request->mobile;        

        /*  qualification  */
        for ($i=0; $i < $request->hidden_ad_level ; $i++) {
            $qualiArr["institute"] = $request->institute[$i];
            $qualiArr["year"] = $request->year[$i];
            $qualiArr["marks"] = $request->marks[$i];
            $FinalArr['qualification'][$request->qualification[$i]] = $qualiArr;
        }
        /*  qualification  */

        /*  company  */
        for ($i=0; $i < $request->hidden_work_level ; $i++) {
            $qualiArr["designation"] = $request->designation[$i];
            $qualiArr["from"] = $request->from[$i];
            $qualiArr["to"] = $request->to[$i];
            $FinalArr['company'][$request->company[$i]] = $qualiArr;
        }
        // dd($FinalArr);
        /*  company  */

        /*  language  */
        $FinalArr['language']['Hindi'] = (isset($request->hindi_types) ? implode(',',$request->hindi_types) : '');
        $FinalArr['language']['English'] = (isset($request->english_types) ? implode(',',$request->english_types) : '');
        $FinalArr['language']['Gujarati'] = (isset($request->gujarati_types) ? implode(',',$request->gujarati_types) : '');
        // dd($FinalArr);
        /*  language  */

        /*  experience  */
        $FinalArr['technical_experience']['PHP'] = (isset($request->experience_types_php) ? implode(',',$request->experience_types_php) : '');
        $FinalArr['technical_experience']['Mysql'] = (isset($request->experience_types_mysql) ? implode(',',$request->experience_types_mysql) : '');
        $FinalArr['technical_experience']['Laravel'] = (isset($request->experience_types_laravel) ? implode(',',$request->experience_types_laravel) : '');
        $FinalArr['technical_experience']['Oracle'] = (isset($request->experience_types_oracle) ? implode(',',$request->experience_types_oracle) : '');
        /*  experience  */

        $FinalArr['preferred_location'] = $request->preferred_location;
        $FinalArr['current_ctc'] = $request->current_ctc;
        $FinalArr['expected_ctc'] = $request->expected_ctc;
        $FinalArr['notice_period'] = $request->notice_period;

        $ObjJobs = jobs::CreateData($FinalArr);
        $FinalArr['job_id'] = $ObjJobs->id;
        $ObjJobDetails = jobdetails::CreateData($FinalArr);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

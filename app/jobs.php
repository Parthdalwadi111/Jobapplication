<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $table = "jobs";
    protected $primaryKey = "id";

    public static function CreateData($input)
    {
        $ObjJobs = new jobs;
        $ObjJobs->name    = $input['name'];
        $ObjJobs->email    = $input['email'];
        $ObjJobs->address    = $input['address'];
        $ObjJobs->gender    = $input['gender'];
        $ObjJobs->mobile    = $input['mobile'];
        $ObjJobs->preferred_location    = $input['preferred_location'];
        $ObjJobs->current_ctc    = $input['current_ctc'];
        $ObjJobs->expected_ctc    = $input['expected_ctc'];
        $ObjJobs->notice_period    = $input['notice_period'];

        $ObjJobs->save();
        return $ObjJobs;
    }

    public static function UpdateData($input,$id)
    {
        $ObjJobs = jobs::where("id",$id)->first();
        $ObjJobs->name    = $input['name'];
        $ObjJobs->email    = $input['email'];
        $ObjJobs->address    = $input['address'];
        $ObjJobs->gender    = $input['gender'];
        $ObjJobs->mobile    = $input['mobile'];
        $ObjJobs->preferred_location    = $input['preferred_location'];
        $ObjJobs->current_ctc    = $input['current_ctc'];
        $ObjJobs->expected_ctc    = $input['expected_ctc'];
        $ObjJobs->notice_period    = $input['notice_period'];

        $ObjJobs->save();
        return $ObjJobs;
    }
}

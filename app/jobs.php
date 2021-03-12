<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $table = "jobs";
    protected $primaryKey = "id";

    public static function CreateData($input)
    {
        $objJobs = new jobs;
        $objJobs->name    = $input['name'];
        $objJobs->email    = $input['email'];
        $objJobs->address    = $input['address'];
        $objJobs->gender    = $input['gender'];
        $objJobs->mobile    = $input['mobile'];
        $objJobs->preferred_location    = $input['preferred_location'];
        $objJobs->current_ctc    = $input['current_ctc'];
        $objJobs->expected_ctc    = $input['expected_ctc'];
        $objJobs->notice_period    = $input['notice_period'];

        $objJobs->save();
        return $objJobs;
    }
}

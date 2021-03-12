<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobdetails extends Model
{
    protected $table = "jobdetails";
    protected $primaryKey = "id";

    public static function CreateData($input)
    {
        $objJobDetails = new jobdetails;
        $objJobDetails->job_id    = $input['job_id'];
        $objJobDetails->qualification    = json_encode($input['qualification']);
        $objJobDetails->company    = json_encode($input['company']);
        $objJobDetails->language    = json_encode($input['language']);
        $objJobDetails->technical_experience    = json_encode($input['technical_experience']);

        $objJobDetails->save();
        return $objJobDetails;
    }
}

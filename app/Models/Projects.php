<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Projects extends Model
{
   // protected $table = 'projects';
    protected $fillable = [
        'userID', 'title', 'location', 'countryId', 'jobtypeId','categoryId', 'externalLink',
        'budgetType','jobdurationId','hoursperweekId','minRate', 'maxRate', 'jobDescription'
    ];
    
    static function get_posts_by_filed($filed, $value)
    {
        $result = DB::table('projects')->where($filed, $value);
        return $result;
    }
}

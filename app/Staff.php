<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
<<<<<<< HEAD

protected $table = "staffs";
protected $primaryKey = 'ssn';
protected $fillable = ['ssn','name','position','gender','work_hour','phone_number','salary'];
=======
    protected $table = "staffs";

>>>>>>> 0a07874e1afe29a63501c27bb9ec6bab81529a8c
    public function work()
    {
        return $this->belongsTo('App\Dorm');
    }
}

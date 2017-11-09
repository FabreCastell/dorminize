<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DormExpense extends Model
{
    protected $fillable = ['datetime','elec_cost','water_cost'];
    protected $primaryKey = 'id';
    public function fromdorm()
    {
        return $this->belongsTo('App\Dorm');
    }
}

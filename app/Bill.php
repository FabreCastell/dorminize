<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        'elec_unit', 'water_unit'
    ];

    protected $primaryKey = 'invoice_number';

    public function paidby()
    {
        return $this->belongsTo('App\Client','invoice_number','invoice_number');
    }

    public function collectedby()
    {
        return $this->belongsTo('App\Dorm');
    }

    public function fromroom()
    {
        return $this->belongsTo('App\Room');
    }
}

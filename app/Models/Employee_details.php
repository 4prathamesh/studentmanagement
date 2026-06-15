<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Employee_details extends Model
{
    protected $fillable = [
        'employee_id',
        'aadhaar_no',
        'pan_no'
    ];
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}

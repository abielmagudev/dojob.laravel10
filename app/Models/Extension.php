<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;

    const MODELS_NAMESPACE = '\App\Models\ApiExtensions';

    const CONTROLLERS_NAMESPACE = '\App\Http\Controllers\ApiExtensions';
    
    protected $fillable = [
        'is_available',
        'api_extension_id',
        'api_extension_classname',
    ];

    public function getClassnameAttribute()
    {
        return $this->api_extension_classname;
    }
    
    public function api()
    {
        return $this->belongsTo(ApiExtension::class, 'api_extension_id');
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
}

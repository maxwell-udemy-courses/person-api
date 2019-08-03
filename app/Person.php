<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "persons";

    protected $fillable = [
        "firstName", "lastName", "country",
        "city", "street", "number", "single",
        "documentNumber"
    ];

    protected $hidden = [
        "created_at", "updated_at"
    ];
}
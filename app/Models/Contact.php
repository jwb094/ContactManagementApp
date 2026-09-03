<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    protected $table = 'contacts'; 

     protected $primaryKey = 'id'; 

    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "phone",
        "facebook",
        "twitter",
        "linkedin",
        "address_line_1",
        "address_line_2",
        "town_city",
        "county",
        "post_code",
        "date_of_birth",
        "is_favourite",
        "notes",
        "created_at",
        "updated_at",
    ];
}

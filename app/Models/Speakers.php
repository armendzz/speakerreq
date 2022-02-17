<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    use HasFactory;

    protected $fillable = [
        'first-name',
        'last-name',
        'organization',
        'address',
        'city',
        'state',
        'zip',
        'phone',
        'cellphone',
        'fax',
        'email',
        'chapter',
        'chapter-state',
        'chapter-city',
        'chapter-region',
        'event-type',
        'event-theme',
        'event-location',
        'date',
        'event-start-time',
        'event-end-time',
        'expectedattendes',
        'description-attendes',
        'colors-attire',
        'non-aka',
        'special-guests',
        'role-of-president',
        'log-lodging-facility',
        'log-address',
        'log-city',
        'log-zip',
        'log-state',
        'log-phone',
        'log-wifi',
        'log-access-code',
        'request-type'

    ]
}

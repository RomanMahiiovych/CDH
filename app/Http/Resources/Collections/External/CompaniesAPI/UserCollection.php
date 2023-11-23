<?php

namespace App\Http\Resources\Collections\External\CompaniesAPI;

use App\Http\Resources\External\CompaniesAPI\UserResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    public static $wrap = 'users';

    public $collects = UserResource::class;
}

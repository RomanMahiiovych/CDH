<?php

namespace App\Http\Resources\Collections\External\CompaniesAPI;

use App\Http\Resources\External\CompaniesAPI\PositionResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PositionCollection extends ResourceCollection
{
    public static $wrap = 'positions';

    public $collects = PositionResource::class;
}

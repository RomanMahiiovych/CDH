<?php

namespace App\Http\Resources\Collections\External\CompaniesAPI;

use App\Http\Resources\External\CompaniesAPI\CompanyResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CompanyCollection extends ResourceCollection
{
    public static $wrap = 'companies';

    public $collects = CompanyResource::class;
}

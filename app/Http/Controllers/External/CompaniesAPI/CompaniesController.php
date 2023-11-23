<?php

namespace App\Http\Controllers\External\CompaniesAPI;


use App\Services\External\CompaniesAPI\APICompaniesClient;
use App\Http\Resources\Collections\External\CompaniesAPI\CompanyCollection;

class CompaniesController
{
    private APICompaniesClient $client;

    public function __construct(APICompaniesClient $client)
    {
        $this->client = $client;
    }

    public function index(): CompanyCollection
    {
        $companies = $this->client->getCompanies();

        return new CompanyCollection($companies);
    }
}

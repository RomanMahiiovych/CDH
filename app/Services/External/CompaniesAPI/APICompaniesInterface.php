<?php

namespace App\Services\External\CompaniesAPI;

use Illuminate\Support\Collection;

interface APICompaniesInterface
{
    public function getUsers(): Collection;
    public function getCompanies(): Collection;
    public function getCompanyPositions(): Collection;
}

<?php

namespace App\Services\External\CompaniesAPI;

use App\Services\External\CompaniesAPI\Exceptions\CompaniesException;
use App\Services\External\CompaniesAPI\Exceptions\PositionsException;
use App\Services\External\CompaniesAPI\Exceptions\UsersException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use App\Services\External\RequestHelper;

class APICompaniesClient extends RequestHelper implements APICompaniesInterface
{
    public function getUsers(): Collection
    {
        try {
            $users = Http::get(
                $this->url('users'),
                $this->query(),
            )->throw();
        } catch (RequestException $exception) {
            throw new UsersException($exception->getMessage(), $exception->getCode(), $exception);
        }

        return  collect($users->json('users'))
            ->map(fn( $userData) => (object) $userData );
    }

    public function getCompanies(): Collection
    {
        try {
            $companies = Http::get(
                $this->url('companies'),
                $this->query(),
            )->throw();
        } catch (RequestException $exception) {
            throw new CompaniesException($exception->getMessage(), $exception->getCode(), $exception);
        }

        return  collect($companies->json('companies'))
            ->map(fn( $companyData) => (object) $companyData );
    }

    public function getCompanyPositions(): Collection
    {
        try {
            $positions = Http::get(
                $this->url('positions'),
                $this->query(),
            )->throw();
        } catch (RequestException $exception) {
            throw new PositionsException($exception->getMessage(), $exception->getCode(), $exception);
        }

        return  collect($positions->json('positions'))
            ->map(fn( $positionData) => (object) $positionData );
    }
}

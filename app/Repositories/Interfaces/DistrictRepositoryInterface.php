<?php

namespace App\Repositories\Interfaces;

/**
 * Interface DistrictServiceInterface
 * @package App\Services\Interfaces
 */
interface DistrictRepositoryInterface
{
    public function all();
    // public function findDistrictByProvinceID(int $provinceID);
    public function findById(int $modelId, array $columns = ['*'], array $relations = []);
}

<?php

namespace App\Repositories;

use App\Models\Base;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
/**
 * Class BaseService
 * @package App\Services
 */
class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct(Model $model){
        $this->model = $model;
    }

    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        array $extend = [],
        int $perPage=1
    ){
        $query = $this->model->select($column)
                    ->where(function($query) use ($condition){
                        if(isset($condition['keyword']) && !empty( $condition['keyword'])){
                            //
                            $query->where(function($q) use ($condition) {
                                $keyword = '%' . $condition['keyword'] . '%';
                                $q->where('name', 'LIKE', $keyword)
                                  ->orWhere('email', 'LIKE', $keyword)
                                  ->orWhere('phone', 'LIKE', $keyword)
                                  ->orWhere('address', 'LIKE', $keyword);
                            });
                        }
                    });
        if(!empty($join)){
            $query->join(...$join);
        }
        return $query->paginate($perPage)->withQueryString()->withPath(env('APP_URL').$extend['path']);
    }

    public function all(){
        return $this->model->all();
    }
    public function findById(
        int $modelId,
        array $column = ['*'],
        array $relation = []
        ){
        return $this->model->select($column)->with($relation)->findOrFail( $modelId );
    }
    public function create(array $payload = []){
        $model=$this->model->create($payload);
        return $model->fresh();
    }
    public function update(int $id=0, array $payload = []){
        $model=$this->findById($id);
        return $model->update($payload);
    }
    public function updateByWhereIn(string $whereInField = '', array $whereIn = [], array $payload=[]){
        return $this->model->whereIn( $whereInField, $whereIn)->update($payload);
    }
    public function delete(int $id= 0){
        return $this->findById($id)->delete();
    }
    public function forceDelete($id){
        return $this->findById($id)->forceDelete();
    }
}

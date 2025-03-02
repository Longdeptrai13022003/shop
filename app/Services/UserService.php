<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;
    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }
    public function paginate($request){

        $condition['keyword']=addslashes($request->input('keyword'));

        $perPage = $request->integer('perpage');
        $users = $this->userRepository->pagination(['id' , 'name' , 'email' , 'phone' , 'address' , 'birthday' , 'ward_id' , 'district_id' , 'province_id' , 'publish' , 'description'],
                                                    $condition,
                                                    [],
                                                    ['path'=>'user/index'],
                                                    $perPage);
        return $users;
    }
    public function create($request){
        DB::beginTransaction();
        try {
            $payload=$request->except(['_token','send', 're_password']);
            $payload['birthday']=$this->convertBirthday2Date($payload['birthday']);
            $payload['password'] = Hash::make($payload['password']);

            $user = $this->userRepository->create($payload);

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
    public function update($id, $request){
        DB::beginTransaction();
        try {
            $user=$this->userRepository->findById($id);
            $payload=$request->except(['_token','send']);
            $payload['birthday']=$this->convertBirthday2Date($payload['birthday']);


            $user = $this->userRepository->update($id, $payload);

            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
    private function convertBirthday2Date($birthday=''){
        $carbonDate = Carbon::createFromFormat('Y-m-d', $birthday);
        $birthday = $carbonDate->format('Y-m-d H:i:s');
        return $birthday;
    }
    public function destroy($id){
        DB::beginTransaction();
        try {
            $user=$this->userRepository->delete($id);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            return false;
        }
    }
}

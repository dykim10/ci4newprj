<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\Entities\UserEntity;

class UserModel extends Model
{
    protected $table = 'tb_users';
    protected $primaryKey = 'uuid';
    protected $returnType = UserEntity::class;
    protected $allowedFields = ['uuid', 'username', 'email', 'password'];

    public function findByUsername(string $username): ?UserEntity
    {
        return $this->where('username', $username)->first();
    }

    public function saveUser(UserEntity $user): bool
    {
        return $this->insert($user);
    }
}

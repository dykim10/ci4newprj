<?php

namespace App\Models\Entities;

use CodeIgniter\Entity\Entity;

class UserEntity extends Entity
{
    protected $attributes = [
        'uuid'     => null,
        'username' => null,
        'email'    => null,
        'password' => null
    ];

    // 비밀번호 해싱 (setter 메서드 활용)
    public function setPassword(string $password)
    {
        $this->attributes['password'] = password_hash($password, PASSWORD_BCRYPT);
        return $this;
    }
}

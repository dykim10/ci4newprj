<?php

namespace App\Services;

use App\Models\UserModel;
use App\Models\DTOs\UserDTO;

class AuthService
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    /**
     * 로그인 처리
     */
    public function loginUser(string $username, string $password): array
    {
        $user = $this->userModel->findByUsername($username);

        if (!$user) {
            return ['success' => false, 'message' => '사용자를 찾을 수 없습니다.'];
        }

        if (!password_verify($password, $user->password)) {
            return ['success' => false, 'message' => '잘못된 비밀번호입니다.'];
        }

        return [
            'success' => true,
            'user' => new UserDTO($user->toArray())
        ];
    }
}

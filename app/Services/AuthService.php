<?php

namespace App\Services;

use App\Models\UserModel;
use App\Models\Dto\UserDTO;

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
    public function loginUser(string $userId, string $userPwd): array
    {
        $user = $this->userModel->findByUserId($userId);

        if (!$user) {
            return ['success' => false, 'message' => '사용자를 찾을 수 없습니다.'];
        }

        if (!password_verify($userPwd, $user->userPassword)) {
            return ['success' => false, 'message' => '잘못된 비밀번호입니다.'];
        }

        return [
            'success' => true,
            'user' => new UserDTO($user->toArray())
        ];
    }
}

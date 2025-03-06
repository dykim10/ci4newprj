<?php

namespace App\Models\DTOs;

class UserDTO
{
    public string $uuid;
    public string $username;
    public string $email;

    public function __construct(array $data)
    {
        $this->uuid = $data['uuid'] ?? '';
        $this->username = $data['username'] ?? '';
        $this->email = $data['email'] ?? '';
    }

    public function toArray(): array
    {
        return [
            'uuid'     => $this->uuid,
            'username' => $this->username,
            'email'    => $this->email
        ];
    }
}

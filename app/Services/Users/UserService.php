<?php

namespace App\Services\Users;

use App\Interfaces\UserRepositoryInterface;

class UserService
{
    protected $userRepository ;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store($data)
    {
        return $this->userRepository->store($data);
    }
}

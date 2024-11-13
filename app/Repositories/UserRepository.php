<?php

namespace App\Repositories;
use App\Interfaces\RepositoriesInterface;
use App\Models\User;


class UserRepository implements RepositoriesInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    
    public function index() : \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return User::paginate(10);
    }
    
    public function getById($id) : User
    {
        return User::findOrFail($id);
    }

    public function store(array $data) : User
    {
        return User::create($data);
    }

    public function update(array $data,$id) : User
    {
        $User = $this->getById($id);
        $User->update($data);
        return $User;
    }

    public function delete($id) : bool
    {
        $User = $this->getById($id);
        return $User->delete() > 0;
    }

    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }
}

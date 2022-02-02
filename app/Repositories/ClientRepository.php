<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepository extends BaseRepository
{
    public function model()
    {
        return 'App\Models\Client';
    }
}
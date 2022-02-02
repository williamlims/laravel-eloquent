<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class BillRepository extends BaseRepository
{
    public function model()
    {
        return 'App\Models\Bill';
    }
}
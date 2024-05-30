<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface UserRepository
{

    public function getViewers(int $userId): Collection;
}

<?php

namespace AbacusWonder\Formary\Services;

use Illuminate\Support\Facades\DB;

class BaseService
{
    public static function transaction(\Closure $closure, int $attempts = 1): mixed
    {
        return DB::transaction($closure, $attempts);
    }
}

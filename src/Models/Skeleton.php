<?php

namespace VendorName\Skeleton\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use VendorName\Skeleton\Database\Factories\SkeletonFactory;

class Skeleton extends Model
{
    use HasFactory;

    protected $table = 'skeleton_table';

    /**
     * This is used to resolve the correct facotry class during our tests
     * @return Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return SkeletonFactory::new();
    }
}

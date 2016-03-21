<?php
/*
 * This code was generated automatically by Nebo15/REST
 */

namespace App\Models;

use Nebo15\REST\Traits\ListableTrait;
use Nebo15\REST\Interfaces\ListableInterface;

/**
 * Class Group
 * @package App\Models
 * @property array $tables;
 * @property string $probability;
 */
class Group extends Base implements ListableInterface
{
    use ListableTrait;

    protected $fillable = ['tables', 'probability'];

    protected $listable = ['_id', 'probability', 'tables'];

    protected $visible = ['_id', 'probability', 'fields', 'tables'];

    protected $casts = [
        '_id' => 'string',
    ];
}

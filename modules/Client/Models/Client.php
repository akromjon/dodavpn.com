<?php

namespace Modules\Client\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\Client\Models\Client
 * @property int $id
 * @property string $name
 * @property string $email
 * @property array $address
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Database\Factories\ClientFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery() *
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 */

class Client extends Model
{
    protected $table="clients";

    protected $fillable = [
        'name',
        'email',
        'address',
    ];

}

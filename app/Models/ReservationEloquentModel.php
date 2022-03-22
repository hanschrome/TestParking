<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $uuid
 */
class ReservationEloquentModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'reservations';
}

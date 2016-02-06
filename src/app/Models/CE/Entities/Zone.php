<?php
/**
 * Created by PhpStorm.
 * User: ndy40
 * Date: 06/02/16
 * Time: 19:28
 */

namespace CE\Entities;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Zones
 *
 * @package CE\Entities
 * @property int $id - Id of the zones.
 * @propery string $name - Name of the zones.
 */
class Zone extends Model
{
    protected $table = "zones";
}

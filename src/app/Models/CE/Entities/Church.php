<?php
/**
 * Created by PhpStorm.
 * User: ndy40
 * Date: 06/02/16
 * Time: 20:00
 */

namespace CE\Entities;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Church
 *
 * @package CE\Entities
 * @property int $id    Primary Key
 * @property string $name   Name of Church
 * @property int $zone_id   Id of zone.
 */
class Church extends Model
{
    protected $table = 'churches';

    protected function zone()
    {
        return $this->belongsTo('CE\Entities\Zone');
    }
}

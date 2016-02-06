<?php
/**
 * Created by PhpStorm.
 * User: ndy40
 * Date: 06/02/16
 * Time: 20:06
 */

namespace CE\Entities;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Partnership
 *
 * @package CE\Entities
 * @property int $id - Primary Key
 * @property string $title - Title of person
 * @property string $surname - Surname of person
 * @property string $other_name - Other names of person
 * @property string $pcf - Pastoral Care fellowship.
 * @property string $gender - Gender of the person.
 * @property date $birthday - Birthday of the partner.
 * @property string $marital_status - Marital status.
 * @property date $wedding_anniv - Wedding anniversary.
 */
class Partnership extends Model
{
    protected $table = "partnerships";


    public function church()
    {
        return $this->belongsTo('CE\Entities\Church');
    }

    public function contact()
    {
        return $this->hasOne('CE\Entities\Contact');
    }

    public function arms()
    {
        return $this->belongsToMany('CE\Entities\Arm', 'partnerships_arms');
    }
}

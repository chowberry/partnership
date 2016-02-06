<?php
/**
 * Created by PhpStorm.
 * User: ndy40
 * Date: 06/02/16
 * Time: 20:15
 */

namespace CE\Entities;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 *
 * @package CE\Entities
 * @property int $partnership_id - Id of partnership
 * @property string $email - Email
 * @property string $alt_email - Alternate email address
 * @property string $phone - Phone number
 * @property string $alt_phone - alternate phone number.
 */
class Contact extends Model
{
    public function partnership()
    {
        return $this->belongsTo('CE\Entities\Partnership');
    }
}

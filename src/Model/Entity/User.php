<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $login_name
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property string $contact_number
 * @property string $mobile_country_code
 * @property string $word_country_code
 * @property string $work_contact_number
 * @property string $home_country_code
 * @property string $home_contact_number
 * @property string $signature
 * @property string|null $profile_pic
 * @property \Cake\I18n\FrozenTime $last_login
 * @property string $is_active
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'login_name' => true,
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'contact_number' => true,
        'mobile_country_code' => true,
        'word_country_code' => true,
        'work_contact_number' => true,
        'home_country_code' => true,
        'home_contact_number' => true,
        'signature' => true,
        'profile_pic' => true,
        'last_login' => true,
        'is_active' => true
    ];
}

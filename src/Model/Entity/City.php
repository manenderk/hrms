<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * City Entity
 *
 * @property int $id
 * @property int $country_id
 * @property int $state_id
 * @property string $city_name
 * @property string $zipcode
 * @property string $latitude
 * @property string $longitude
 * @property bool $is_active
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\EmployeesDetail[] $employees_details
 */
class City extends Entity
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
        'country_id' => true,
        'state_id' => true,
        'city_name' => true,
        'zipcode' => true,
        'latitude' => true,
        'longitude' => true,
        'is_active' => true,
        'country' => true,
        'state' => true,
        'employees_details' => true
    ];
}

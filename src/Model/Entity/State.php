<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * State Entity
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property bool|null $is_active
 * @property string|null $comments
 * @property \Cake\I18n\FrozenTime $created_date
 * @property \Cake\I18n\FrozenTime $modified_date
 * @property int|null $created_by
 * @property int|null $modified_by
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\City[] $cities
 * @property \App\Model\Entity\EmployeesDetail[] $employees_details
 */
class State extends Entity
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
        'name' => true,
        'is_active' => true,
        'comments' => true,
        'created_date' => true,
        'modified_date' => true,
        'created_by' => true,
        'modified_by' => true,
        'country' => true,
        'cities' => true,
        'employees_details' => true
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HrmsWorkSchedule Entity
 *
 * @property int $id
 * @property string $schedule_name
 * @property bool $monday
 * @property bool $tuesday
 * @property bool $wednesday
 * @property bool $thursday
 * @property bool $friday
 * @property bool $saturday
 * @property bool $sunday
 * @property float $monday_hours
 * @property float $tuesday_hours
 * @property float $wednesday_hours
 * @property float $thursday_hours
 * @property float $friday_hours
 * @property float $saturday_hours
 * @property float $sunday_hours
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $created_by
 * @property int|null $modifed_by
 */
class HrmsWorkSchedule extends Entity
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
        'schedule_name' => true,
        'monday' => true,
        'tuesday' => true,
        'wednesday' => true,
        'thursday' => true,
        'friday' => true,
        'saturday' => true,
        'sunday' => true,
        'monday_hours' => true,
        'tuesday_hours' => true,
        'wednesday_hours' => true,
        'thursday_hours' => true,
        'friday_hours' => true,
        'saturday_hours' => true,
        'sunday_hours' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modifed_by' => true
    ];
}

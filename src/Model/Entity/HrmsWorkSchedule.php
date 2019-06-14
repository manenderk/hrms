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
 * @property string $monday_shift_start
 * @property string $tuesday_shift_start
 * @property string $wednesday_shift_start
 * @property string $thursday_shift_start
 * @property string $friday_shift_start
 * @property string $saturday_shift_start
 * @property string $sunday_shift_start
 * @property string $monday_shift_end
 * @property string $tuesday_shift_end
 * @property string $wednesday_shift_end
 * @property string $thursday_shift_end
 * @property string $friday_shift_end
 * @property string $saturday_shift_end
 * @property string $sunday_shift_end
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
        'monday_shift_start' => true,
        'tuesday_shift_start' => true,
        'wednesday_shift_start' => true,
        'thursday_shift_start' => true,
        'friday_shift_start' => true,
        'saturday_shift_start' => true,
        'sunday_shift_start' => true,
        'monday_shift_end' => true,
        'tuesday_shift_end' => true,
        'wednesday_shift_end' => true,
        'thursday_shift_end' => true,
        'friday_shift_end' => true,
        'saturday_shift_end' => true,
        'sunday_shift_end' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modifed_by' => true
    ];
}

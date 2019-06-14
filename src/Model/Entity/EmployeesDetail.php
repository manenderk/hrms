<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmployeesDetail Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $present_address
 * @property int $city_id
 * @property int $state_id
 * @property int $country_id
 * @property string $zipcode
 * @property string $home_phone_code
 * @property string $home_phone
 * @property string $cell_phone_code
 * @property string $cell_phone
 * @property \Cake\I18n\FrozenDate $date_of_birth
 * @property string $social_security_number
 * @property string $emergency_contact_name
 * @property string $emergency_contact_relationship
 * @property string $emergency_contact_phone_code
 * @property string $emergency_contact_phone
 * @property string $employee_id
 * @property string $position
 * @property string $department
 * @property string $manager_name
 * @property string $team_lead_name
 * @property string $work_location_number
 * @property string $office_location
 * @property string $department_number
 * @property string $time_keeper
 * @property bool $w_4_documentation_complete
 * @property bool $i_9_documentation_complete
 * @property int $employee_type_id
 * @property bool $required_to_travel
 * @property string $emr_program
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate|null $end_date
 * @property string $evaluation
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $created_by
 * @property int $modified_by
 *
 * @property \App\Model\Entity\City $city
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\EmployeeType $employee_type
 */
class EmployeesDetail extends Entity
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
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'email' => true,
        'present_address' => true,
        'city_id' => true,
        'state_id' => true,
        'country_id' => true,
        'zipcode' => true,
        'home_phone_code' => true,
        'home_phone' => true,
        'cell_phone_code' => true,
        'cell_phone' => true,
        'date_of_birth' => true,
        'social_security_number' => true,
        'emergency_contact_name' => true,
        'emergency_contact_relationship' => true,
        'emergency_contact_phone_code' => true,
        'emergency_contact_phone' => true,
        'employee_id' => true,
        'position' => true,
        'department' => true,
        'manager_name' => true,
        'team_lead_name' => true,
        'work_location_number' => true,
        'office_location' => true,
        'department_number' => true,
        'time_keeper' => true,
        'w_4_documentation_complete' => true,
        'i_9_documentation_complete' => true,
        'employee_type_id' => true,
        'required_to_travel' => true,
        'emr_program' => true,
        'start_date' => true,
        'end_date' => true,
        'evaluation' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modified_by' => true,
        'city' => true,
        'state' => true,
        'country' => true,
        'employee' => true,
        'employee_type' => true
    ];
}

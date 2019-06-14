<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\State $state
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees Details'), ['controller' => 'EmployeesDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employees Detail'), ['controller' => 'EmployeesDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="states view large-9 medium-8 columns content">
    <h3><?= h($state->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $state->has('country') ? $this->Html->link($state->country->name, ['controller' => 'Countries', 'action' => 'view', $state->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($state->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($state->comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($state->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($state->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($state->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Date') ?></th>
            <td><?= h($state->created_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($state->modified_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $state->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cities') ?></h4>
        <?php if (!empty($state->cities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('City Name') ?></th>
                <th scope="col"><?= __('Zipcode') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->cities as $cities): ?>
            <tr>
                <td><?= h($cities->id) ?></td>
                <td><?= h($cities->country_id) ?></td>
                <td><?= h($cities->state_id) ?></td>
                <td><?= h($cities->city_name) ?></td>
                <td><?= h($cities->zipcode) ?></td>
                <td><?= h($cities->latitude) ?></td>
                <td><?= h($cities->longitude) ?></td>
                <td><?= h($cities->is_active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cities', 'action' => 'view', $cities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cities', 'action' => 'edit', $cities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cities', 'action' => 'delete', $cities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Employees Details') ?></h4>
        <?php if (!empty($state->employees_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Present Address') ?></th>
                <th scope="col"><?= __('City Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Zipcode') ?></th>
                <th scope="col"><?= __('Home Phone Code') ?></th>
                <th scope="col"><?= __('Home Phone') ?></th>
                <th scope="col"><?= __('Cell Phone Code') ?></th>
                <th scope="col"><?= __('Cell Phone') ?></th>
                <th scope="col"><?= __('Date Of Birth') ?></th>
                <th scope="col"><?= __('Social Security Number') ?></th>
                <th scope="col"><?= __('Emergency Contact Name') ?></th>
                <th scope="col"><?= __('Emergency Contact Relationship') ?></th>
                <th scope="col"><?= __('Emergency Contact Phone Code') ?></th>
                <th scope="col"><?= __('Emergency Contact Phone') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Department') ?></th>
                <th scope="col"><?= __('Manager Name') ?></th>
                <th scope="col"><?= __('Team Lead Name') ?></th>
                <th scope="col"><?= __('Work Location Number') ?></th>
                <th scope="col"><?= __('Office Location') ?></th>
                <th scope="col"><?= __('Department Number') ?></th>
                <th scope="col"><?= __('Time Keeper') ?></th>
                <th scope="col"><?= __('W 4 Documentation Complete') ?></th>
                <th scope="col"><?= __('1 9 Documentation Complete') ?></th>
                <th scope="col"><?= __('Employee Type Id') ?></th>
                <th scope="col"><?= __('Required To Travel') ?></th>
                <th scope="col"><?= __('Emr Program') ?></th>
                <th scope="col"><?= __('Start Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col"><?= __('Evaluation') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->employees_details as $employeesDetails): ?>
            <tr>
                <td><?= h($employeesDetails->id) ?></td>
                <td><?= h($employeesDetails->first_name) ?></td>
                <td><?= h($employeesDetails->middle_name) ?></td>
                <td><?= h($employeesDetails->last_name) ?></td>
                <td><?= h($employeesDetails->email) ?></td>
                <td><?= h($employeesDetails->present_address) ?></td>
                <td><?= h($employeesDetails->city_id) ?></td>
                <td><?= h($employeesDetails->state_id) ?></td>
                <td><?= h($employeesDetails->country_id) ?></td>
                <td><?= h($employeesDetails->zipcode) ?></td>
                <td><?= h($employeesDetails->home_phone_code) ?></td>
                <td><?= h($employeesDetails->home_phone) ?></td>
                <td><?= h($employeesDetails->cell_phone_code) ?></td>
                <td><?= h($employeesDetails->cell_phone) ?></td>
                <td><?= h($employeesDetails->date_of_birth) ?></td>
                <td><?= h($employeesDetails->social_security_number) ?></td>
                <td><?= h($employeesDetails->emergency_contact_name) ?></td>
                <td><?= h($employeesDetails->emergency_contact_relationship) ?></td>
                <td><?= h($employeesDetails->emergency_contact_phone_code) ?></td>
                <td><?= h($employeesDetails->emergency_contact_phone) ?></td>
                <td><?= h($employeesDetails->employee_id) ?></td>
                <td><?= h($employeesDetails->position) ?></td>
                <td><?= h($employeesDetails->department) ?></td>
                <td><?= h($employeesDetails->manager_name) ?></td>
                <td><?= h($employeesDetails->team_lead_name) ?></td>
                <td><?= h($employeesDetails->work_location_number) ?></td>
                <td><?= h($employeesDetails->office_location) ?></td>
                <td><?= h($employeesDetails->department_number) ?></td>
                <td><?= h($employeesDetails->time_keeper) ?></td>
                <td><?= h($employeesDetails->w_4_documentation_complete) ?></td>
                <td><?= h($employeesDetails->1_9_documentation_complete) ?></td>
                <td><?= h($employeesDetails->employee_type_id) ?></td>
                <td><?= h($employeesDetails->required_to_travel) ?></td>
                <td><?= h($employeesDetails->emr_program) ?></td>
                <td><?= h($employeesDetails->start_date) ?></td>
                <td><?= h($employeesDetails->end_date) ?></td>
                <td><?= h($employeesDetails->evaluation) ?></td>
                <td><?= h($employeesDetails->created) ?></td>
                <td><?= h($employeesDetails->modified) ?></td>
                <td><?= h($employeesDetails->created_by) ?></td>
                <td><?= h($employeesDetails->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmployeesDetails', 'action' => 'view', $employeesDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmployeesDetails', 'action' => 'edit', $employeesDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployeesDetails', 'action' => 'delete', $employeesDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

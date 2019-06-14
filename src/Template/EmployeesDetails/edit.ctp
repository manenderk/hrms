<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDetail $employeesDetail
 */
?>
<div class="row">

    <div class="col-md-12">
        <div class="page-title">EMPLOYEE
            <small>[ Add EMPLOYEE ]</small>
            <span class="pull-right short-ico">
                <a
                    href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
                    <i class="fa fa-hand-o-left fa-2x" title="Click to go back" data-toggle="tooltip"
                        data-placement="bottom"></i> Go Back
                </a>
                <a id="cancelBtn">
                    <i class="cursor-pointer fa fa-close fa-2x" title="Click to close this page" data-toggle="tooltip"
                        data-placement="bottom"></i> Close
                </a>
            </span>
        </div>
    </div>
</div>

<div class="panel-body bg-gray-lighter">
    <div class="panel-body">
        <?= $this->Form->create($employeesDetail, ['id'=>'employeeForm','autocomplete'=>'Off']); ?>
        <div class="row">
            <h3>Employee Information</h3>
            <section>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Last Name</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('last_name', ['label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter last name']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>First Name</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('first_name', ['label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter first name']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        Middle Name</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('middle_name', ['label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter Middle name']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Email</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('email', ['label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter email']) ?>
                    </div>
                </div>
                <div class="form-group col-md-8">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Present address</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('present_address', ['type' => 'text', 'label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter Present address']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Country</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('country_id', ['label'=>false, 'options' => $countries, 'class'=>'input-sm bg-gray form-control','empty'=>'Select country']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>State</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('state_id', ['label'=>false, 'class'=>'input-sm bg-gray form-control','empty'=>'Select state']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>City</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('city_id', ['label'=>false, 'class'=>'input-sm bg-gray form-control','empty'=>'Select city']); ?>
                    </div>
                </div>                              
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Zipcode</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('zipcode', ['label'=>false, 'options' => [], 'class'=>'input-sm bg-gray form-control','empty'=>'Select Zipcode']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Home Phone</label>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <?php echo $this->Form->control('home_phone_code', ['label'=>false, 'options' => ['+1' => '+1', '+91' => '+91'], 'class'=>'input-sm bg-gray form-control','empty'=>'Select home phone code']); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->control('home_phone', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter home phone']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Cell Phone</label>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <?php echo $this->Form->control('cell_phone_code', ['label'=>false, 'options' => ['+1' => '+1', '+91' => '+91'], 'class'=>'input-sm bg-gray form-control','empty'=>'Select cell phone code']); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->control('cell_phone', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter cell phone']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Date of birth</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('date_of_birth', ['type' => 'text', 'label'=>false, 'class'=>'input-sm bg-gray form-control','empty'=>'Select DOB', 'value' => $employeesDetail->date_of_birth->i18nFormat('yyyy-MM-dd')]); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Social Security Number</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('social_security_number', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter social security number']); ?>
                    </div>
                </div>                
            </section>
            <h3>Emergency contact Information</h3>
            <section>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Emergency contact name</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('emergency_contact_name', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter emergency contact name']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Emergency contact relationship</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('emergency_contact_relationship', ['label'=>false,'class'=>'input-sm bg-gray form-control', 'placeholder' => 'Enter emergency contact relationship']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                   <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Emergency contact Phone</label>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <?php echo $this->Form->control('emergency_contact_phone_code', ['label'=>false, 'options' => ['+1' => '+1', '+91' => '+91'], 'class'=>'input-sm bg-gray form-control','empty'=>'Select emergency contact phone code']); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?php echo $this->Form->control('emergency_contact_phone', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter cell phone']); ?>
                    </div>
                </div>                
            </section>
            <h3>Additional Information</h3>
            <section>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Employee id</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('employee_id', ['label'=>false, 'type' => 'text', 'class'=>'input-sm bg-gray form-control', 'placeholder' => 'Enter employee id']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Position</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('position', ['label'=>false, 'class'=>'input-sm bg-gray form-control', 'placeholder'=>'Enter position']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Department</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('department', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter department']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Mananger Name</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('manager_name', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter Mananger Name']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Team Lead Name</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('team_lead_name', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter team lead name']); ?>
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Work Location Number</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('work_location_number', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter work location number']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Office Location</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('office_location', ['label'=>false, 'class'=>'input-sm bg-gray form-control', 'placeholder'=>'Enter office location']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Department Number</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('department_number', ['label'=>false, 'class'=>'input-sm bg-gray form-control', 'placeholder'=>'Enter department number']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Time Keeper</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('time_keeper', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter time keeper']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <?php echo $this->Form->control('w_4_documentation_complete', ['label' => 'W-4 Documentation Completed']); ?>
                </div>
                <div class="form-group col-md-4">
                    <?php echo $this->Form->control('i_9_documentation_complete', ['label' => 'I-9 Documentation Completed']); ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Employee Type</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('employee_type_id', ['label'=>false, 'options' => $employeeTypes, 'class'=>'input-sm bg-gray form-control', 'empty'=>'Select employee type']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <?php echo $this->Form->control('required_to_travel', ['label' => 'Required to travel']); ?>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>EMR Program</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('emr_program', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter EMR Program']); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Start Date</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('start_date', ['label'=>false, 'type' => 'text', 'class'=>'input-sm bg-gray form-control','placeholder'=>'Select start date', 'value'=>$employeesDetail->start_date->i18nFormat('yyyy-MM-dd')]); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        End Date</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('end_date', ['label'=>false, 'type' => 'text', 'class'=>'input-sm bg-gray form-control','placeholder'=>'Select end date', 'value'=>$employeesDetail->end_date->i18nFormat('yyyy-MM-dd')]); ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class="col-lg-3 col-md-3 col-sm-3 col-xs-12 control-label">
                        <span class="text-danger">*</span>Evaluation</label>
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-9">
                        <?php echo $this->Form->control('evaluation', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter evaluation']); ?>
                    </div>
                </div>
            </section>            
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
<script>
    var form = $("#employeeForm");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        }        
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        /* onStepChanged: function(event, currentIndex, priorIndex) {
            $('.wizard > .content').height($('#steps-uid-1-p-' + currentIndex).height() + 50);
        }, */
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            form.submit();
        }
    });

    $('#date-of-birth').datepicker({
        format: 'yyyy-mm-dd'
    });

    $('#start-date').datepicker({
        format: 'yyyy-mm-dd'
    });
    $('#end-date').datepicker({
        format: 'yyyy-mm-dd'
    });    
    $('#country-id').on('rightnow change', function(){
        var countryId = $(this).val();        
        $.ajax({
            url: "<?=$this->Url->build(["controller" => "states", "action" => "get-states-of-country"]);?>",
            type: 'post',
            data: {country_id : countryId},
            cache: false,
            headers: {
                'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
            },
            success: function(response){                
                var states = JSON.parse(response);
                var optionsHtml = '';
                $.each(states, function(key, state){                    
                    optionsHtml += '<option value="' + state.id +'">' + state.name + '</option>';
                });
                $('#state-id').html(optionsHtml);
                $('#state-id').val(<?= $employeesDetail->state_id ?>);
                $('#state-id').trigger('rightNow1');
            },
            error: function(err){
                console.log(err);
            }
        })       
    }).triggerHandler("rightnow");

    $('#state-id').on('rightNow1 change', function(){
        var stateId = $(this).val();        
        $.ajax({
            url: "<?=$this->Url->build(["controller" => "cities", "action" => "get-cities-of-state"]);?>",
            type: 'post',
            data: {state_id : stateId},
            cache: false,
            headers: {
                'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
            },
            success: function(response){                
                var cities = JSON.parse(response);
                var optionsHtml = '';
                $.each(cities, function(key, city){                    
                    optionsHtml += '<option value="' + city.id +'">' + city.city_name + '</option>';
                });
                $('#city-id').html(optionsHtml);
                $('#city-id').val(<?= $employeesDetail->city_id ?>);
                $('#city-id').trigger('rightNow2');
            },
            error: function(err){
                console.log(err);
            }
        })       
    });

    $('#city-id').on('rightNow2 change', function(){
        var cityName = $('#city-id option:selected').text();        
        $.ajax({
            url: "<?=$this->Url->build(["controller" => "cities", "action" => "get-zipcodes-of-city"]);?>",
            type: 'post',
            data: {city_name : cityName},
            cache: false,
            headers: {
                'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
            },
            success: function(response){                
                var zipcodes = JSON.parse(response);
                var optionsHtml = '';
                $.each(zipcodes, function(key, zipcode){                    
                    optionsHtml += '<option value="' + zipcode.zipcode +'">' + zipcode.zipcode + '</option>';
                });
                $('#zipcode').html(optionsHtml);
                $('#zipcode').val(<?= $employeesDetail->zipcode ?>);
            },
            error: function(err){
                console.log(err);
            }
        })       
    });

    
    
    
</script>
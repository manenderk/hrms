<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesDetail $employeesDetail
 */
?>
<div class="row">

    <div class="col-md-12">
        <div class="page-title">EMPLOYEE
            <small>[ EDIT EMPLOYEE ]</small>
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
        <div class="row">
            <div class="col-sm-12">
            <?= $this->Form->create($employeesDetail, ['id'=>'employeeForm','autocomplete'=>'Off']); ?>
                <div>
                <h3>Employee Information</h3>
                <section>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Last Name</label>
                            <?php echo $this->Form->control('last_name', ['label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter last name']); ?>                    
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>First Name</label>
                            <?php echo $this->Form->control('first_name', ['label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter first name']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Middle Name</label>
                            <?php echo $this->Form->control('middle_name', ['label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter Middle name']); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Email</label>
                            <?php echo $this->Form->control('email', ['label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter email']) ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Present address</label>
                            <?php echo $this->Form->control('present_address', ['type' => 'text', 'label'=>false,'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter Present address']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Date of birth</label>
                            <?php echo $this->Form->control('date_of_birth', ['type' => 'text', 'label'=>false, 'class'=>'input-sm bg-gray form-control','empty'=>'Select DOB' , 'value'=>$employeesDetail->date_of_birth->i18nFormat('yyyy-MM-dd')]); ?>
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-md-4">                           
                            <label class="control-label"><span class="text-danger">*</span>Home Phone</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <?php echo $this->Form->control('home_phone_code', ['label'=>false, 'options' => ['+1' => '+1', '+91' => '+91'], 'class'=>'input-sm bg-gray form-control','empty'=>'Phone code']); ?>
                                </div>
                                <div class="col-sm-8">
                                    <?php echo $this->Form->control('home_phone', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter home phone']); ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Cell Phone</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <?php echo $this->Form->control('cell_phone_code', ['label'=>false, 'options' => ['+1' => '+1', '+91' => '+91'], 'class'=>'input-sm bg-gray form-control','empty'=>'Phone code']); ?>
                                </div>
                                <div class="col-sm-8">
                                    <?php echo $this->Form->control('cell_phone', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter cell phone']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Social Security Number</label>
                            <?php echo $this->Form->control('social_security_number', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter social security number']); ?>
                        </div>    
                    </div>
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="control-label"><span class="text-danger">*</span>Country</label>
                            <?php echo $this->Form->control('country_id', ['label'=>false, 'options' => $countries, 'class'=>'chosen-select input-sm bg-gray form-control','empty'=>'Select country', 'required' => true]); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label"><span class="text-danger">*</span>State</label>
                            <?php echo $this->Form->control('state_id', ['label'=>false, 'class'=>'chosen-select input-sm bg-gray form-control','empty'=>'Select state', 'required' => true]); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label"><span class="text-danger">*</span>City</label>
                            <?php echo $this->Form->control('city_id', ['label'=>false, 'class'=>'chosen-select input-sm bg-gray form-control','empty'=>'Select city', 'required' => true]); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label"><span class="text-danger">*</span>Zipcode</label>
                            <?php echo $this->Form->control('zipcode', ['label'=>false, 'options' => [], 'class'=>'chosen-select input-sm bg-gray form-control','empty'=>'Select Zipcode', 'required' => true]); ?>
                        </div>
                    </div>

                </section>
                <h3>Emergency contact Information</h3>
                <section>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Emergency contact name</label>
                            <?php echo $this->Form->control('emergency_contact_name', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter emergency contact name']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Emergency contact relationship</label>
                            <?php echo $this->Form->control('emergency_contact_relationship', ['label'=>false,'class'=>'input-sm bg-gray form-control', 'placeholder' => 'Enter emergency contact relationship']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Emergency contact Phone</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <?php echo $this->Form->control('emergency_contact_phone_code', ['label'=>false, 'options' => ['+1' => '+1', '+91' => '+91'], 'class'=>'input-sm bg-gray form-control','empty'=>'Select phone code']); ?>
                                </div>
                                <div class="col-sm-8">
                                    <?php echo $this->Form->control('emergency_contact_phone', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter cell phone']); ?>
                                </div>
                            </div>
                        </div>   
                    </div>
                    
                </section>
                <h3>Additional Information</h3>
                <section>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Employee id</label>
                            <?php echo $this->Form->control('employee_id', ['label'=>false, 'type' => 'text', 'class'=>'input-sm bg-gray form-control', 'placeholder' => 'Enter employee id']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Position</label>
                            <?php echo $this->Form->control('position', ['label'=>false, 'class'=>'input-sm bg-gray form-control', 'placeholder'=>'Enter position']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Department</label>
                            <?php echo $this->Form->control('department', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter department']); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Mananger Name</label>
                            <?php echo $this->Form->control('manager_name', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter Mananger Name']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Team Lead Name</label>
                            <?php echo $this->Form->control('team_lead_name', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter team lead name']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Time Keeper</label>
                            <?php echo $this->Form->control('time_keeper', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter time keeper']); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Employee Type</label>
                            <?php echo $this->Form->control('employee_type_id', ['label'=>false, 'options' => $employeeTypes, 'class'=>'input-sm bg-gray form-control', 'empty'=>'Select employee type', 'required' => true]); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Work Location Number</label>
                            <?php echo $this->Form->control('work_location_number', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter work location number']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Department Number</label>
                            <?php echo $this->Form->control('department_number', ['label'=>false, 'class'=>'input-sm bg-gray form-control', 'placeholder'=>'Enter department number']); ?>
                        </div>
                    </div>
                    
                    <div class="row">                        
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->control('w_4_documentation_complete', ['label' => 'W-4 Documentation Completed?']); ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->control('i_9_documentation_complete', ['label' => 'I-9 Documentation Completed?']); ?>
                        </div>                        
                        <div class="form-group col-md-4">
                            <?php echo $this->Form->control('required_to_travel', ['label' => 'Required to travel?']); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="control-label"><span class="text-danger">*</span>EMR Program</label>
                            <?php echo $this->Form->control('emr_program', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter EMR Program']); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label"><span class="text-danger">*</span>Start Date</label>
                            <?php echo $this->Form->control('start_date', ['label'=>false, 'type' => 'text', 'class'=>'input-sm bg-gray form-control','placeholder'=>'Select start date' , 'value'=>$employeesDetail->start_date->i18nFormat('yyyy-MM-dd')]); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">End Date</label>
                            <?php echo $this->Form->control('end_date', ['label'=>false, 'type' => 'text', 'class'=>'input-sm bg-gray form-control','placeholder'=>'Select end date', 'value'=> $employeesDetail->end_date != null ? $employeesDetail->end_date->i18nFormat('yyyy-MM-dd') : '']); ?>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label"><span class="text-danger">*</span>Evaluation</label>
                            <?php echo $this->Form->control('evaluation', ['label'=>false, 'class'=>'input-sm bg-gray form-control','placeholder'=>'Enter evaluation']); ?>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label"><span class="text-danger">*</span>Office Location</label>
                            <?php echo $this->Form->control('office_location', [ 'type' => 'text', 'label'=>false, 'class'=>'input-sm bg-gray form-control', 'placeholder'=>'Enter office location']); ?>
                        </div>
                    </div>                       
                </section>         
                <?= $this->Form->end() ?>
                </div>
            </div>   
        </div>
       
    </div>
</div>

<?= $this->Html->css('chosen.css') ?>
<?= $this->Html->script('chosen.jquery');?>
<?= $this->Html->script('jquery.maskedinput.min') ?>
<script>
    var form = $("#employeeForm");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.after(error);
        }
    });
    $("#home-phone").rules("add", {
        digits: true
    });
    $("#cell-phone").rules("add", {
        digits: true
    });

    $('#emergency-contact-phone').rules('add', {
        digits: true
    });
    $('#department-number').rules('add', {
        digits: true
    });
    $('#work-location-number').rules('add', {
        digits: true
    });

    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
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
    $('#social-security-number').mask("999-99-9999");

    var config = {
        '.chosen-select': {},
        '.chosen-select-deselect': {
            allow_single_deselect: true
        },
        '.chosen-select-no-single': {
            disable_search_threshold: 10
        },
        '.chosen-select-no-results': {
            no_results_text: 'Oops, nothing found!'
        },
        '.chosen-select-width': {
            width: "95%"
        }
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }

    var initialHtml = {
        'states': $('#state-id').html(),
        'cities': $('#city-id').html(),
        'zipcodes': $('#zipcode').html()
    }
    $('#country-id').change(function() {
        $('#state-id').html(initialHtml.states).trigger("chosen:updated");
        $('#city-id').html(initialHtml.cities).trigger("chosen:updated");
        $('#zipcode').html(initialHtml.zipcodes).trigger("chosen:updated");

        var countryId = $(this).val();
        $.ajax({
            url: "<?=$this->Url->build(["controller" => "states", "action" => "get-states-of-country"]);?>",
            type: 'post',
            data: {
                country_id: countryId
            },
            cache: false,
            headers: {
                'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
            },
            success: function(response) {
                var states = JSON.parse(response);
                var optionsHtml = initialHtml.states;
                $.each(states, function(key, state) {
                    optionsHtml += '<option value="' + state.id + '">' + state.name +
                        '</option>';
                });
                $('#state-id').html(optionsHtml).trigger("chosen:updated");
            },
            error: function(err) {
                console.log(err);
            }
        })
    });

    $('#state-id').change(function() {
        $('#city-id').html(initialHtml.cities).trigger("chosen:updated");
        $('#zipcode').html(initialHtml.zipcodes).trigger("chosen:updated");
        var stateId = $(this).val();
        $.ajax({
            url: "<?=$this->Url->build(["controller" => "cities", "action" => "get-cities-of-state"]);?>",
            type: 'post',
            data: {
                state_id: stateId
            },
            cache: false,
            headers: {
                'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
            },
            success: function(response) {
                var cities = JSON.parse(response);
                var optionsHtml = initialHtml.cities;
                $.each(cities, function(key, city) {
                    optionsHtml += '<option value="' + city.id + '">' + city.city_name +
                        '</option>';
                });
                $('#city-id').html(optionsHtml).trigger("chosen:updated");
            },
            error: function(err) {
                console.log(err);
            }
        })
    });

    $('#city-id').change(function() {
        $('#zipcode').html(initialHtml.zipcodes).trigger("chosen:updated");
        var cityName = $('#city-id option:selected').text();
        $.ajax({
            url: "<?=$this->Url->build(["controller" => "cities", "action" => "get-zipcodes-of-city"]);?>",
            type: 'post',
            data: {
                city_name: cityName
            },
            cache: false,
            headers: {
                'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
            },
            success: function(response) {
                var zipcodes = JSON.parse(response);
                var optionsHtml = initialHtml.zipcodes;
                $.each(zipcodes, function(key, zipcode) {
                    optionsHtml += '<option value="' + zipcode.zipcode + '">' + zipcode
                        .zipcode + '</option>';
                });
                $('#zipcode').html(optionsHtml).trigger("chosen:updated");
            },
            error: function(err) {
                console.log(err);
            }
        })
    });

    $(function() {
        var countryId = $('#country-id').val();
        $.ajax({
            url: "<?=$this->Url->build(["controller" => "states", "action" => "get-states-of-country"]);?>",
            type: 'post',
            data: {
                country_id: countryId
            },
            cache: false,
            headers: {
                'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
            },
            success: function(response) {
                var states = JSON.parse(response);
                var optionsHtml = initialHtml.states;
                $.each(states, function(key, state) {
                    optionsHtml += '<option value="' + state.id + '">' + state.name +
                        '</option>';
                });
                $('#state-id').html(optionsHtml);
                $('#state-id').val( <?= $employeesDetail->state_id ?>);
                $('#state-id').trigger("chosen:updated");
                var stateId = $('#state-id').val();
                $.ajax({
                    url: "<?=$this->Url->build(["controller" => "cities", "action" => "get-cities-of-state"]);?>",
                    type: 'post',
                    data: {
                        state_id: stateId
                    },
                    cache: false,
                    headers: {
                        'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
                    },
                    success: function(response) {
                        var cities = JSON.parse(response);
                        var optionsHtml = initialHtml.cities;
                        $.each(cities, function(key, city) {
                            optionsHtml += '<option value="' + city.id + '">' +
                                city.city_name + '</option>';
                        });
                        $('#city-id').html(optionsHtml);
                        $('#city-id').val( <?= $employeesDetail->city_id ?>);
                        $('#city-id').trigger("chosen:updated");
                        var cityName = $('#city-id option:selected').text();                        
                        $.ajax({
                            url: "<?=$this->Url->build(["controller" => "cities", "action" => "get-zipcodes-of-city"]);?>",
                            type: 'post',
                            data: {
                                city_name: cityName
                            },
                            cache: false,
                            headers: {
                                'X-CSRF-Token': <?= json_encode($this->request->getParam('_csrfToken')) ?>
                            },
                            success: function(response) {
                                var zipcodes = JSON.parse(response);
                                var optionsHtml = initialHtml.zipcodes;
                                $.each(zipcodes, function(key, zipcode) {
                                    optionsHtml += '<option value="' + zipcode.zipcode + '">' + zipcode
                                        .zipcode + '</option>';
                                });
                                $('#zipcode').html(optionsHtml);
                                $('#zipcode').val( <?= $employeesDetail->zipcode ?>);
                                $('#zipcode').trigger("chosen:updated");
                            },
                            error: function(err) {
                                console.log(err);
                            }
                        })
                    },
                    error: function(err) {
                        console.log(err);
                    }
                })
            },
            error: function(err) {
                console.log(err);
            }
        })
    });
</script>
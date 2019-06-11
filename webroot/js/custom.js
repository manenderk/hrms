$(function(){
    hideChoicesContainer();
    $('#field-type-id').on('change rightnow', function () {
        if (this.value == '3') {
            displayChoicesContainer();            
            if(!addPreviousChoices())
                addChoiceInputBox();
        } else {
            hideChoicesContainer();
            emptyChoicesContainer();
        }
    }).triggerHandler("rightnow");
    
    $(document).on('click', '.add-choice-action', function () {
        addChoiceInputBox();
    });

    $(document).on('click', '.remove-choice-action', function () {
        $(this).parent().remove();
    });

    function displayChoicesContainer() {
        $('#dropdown-choices-container').show();
    }

    function hideChoicesContainer() {
        $('#dropdown-choices-container').hide();
    }

    function emptyChoicesContainer() {
        $('#dropdown-choices-container').html('');
    }

    function addChoiceInputBox() {        
        var html = '<div class="col-md-6 text-right"><input type="text" name="custom-field-choices[]" placeholder="Enter dropdown choice option" class="dynamic-choice bg-gray form-control"></input><a class="btn btn-primary add-choice-action">Add</a>    <a class="btn btn-primary remove-choice-action">Remove</a></div>';
        $('#dropdown-choices-container').append(html);
    }

    function addPreviousChoices(){
        if (typeof previousChoices !== 'undefined') {
            $.each(previousChoices, function (key, value) {
                addChoiceInputBoxWithValue(key, value);
            });
            return true;
        }
        return false;
    }

    function addChoiceInputBoxWithValue(id, value){
        var html = '<div class="col-md-6 text-right"><input type="text" name="custom-field-choices[' + id + ']" value="' + value + '" placeholder="Enter dropdown choice option" class="dynamic-choice bg-gray form-control"></input><a class="btn btn-primary add-choice-action">Add</a>    <a class="btn btn-primary remove-choice-action">Remove</a></div>';
        $('#dropdown-choices-container').append(html);
    }
})

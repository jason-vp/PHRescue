@extends('master.mainLayout')

@section('content')
    <h2>Alta <?php echo $current_tab ?></h2>

    <div class='borderUp'>
        <create-animal  :type="variables.type"
                        :species="variables.species"
                        :sizes="variables.sizes"
                        :coats="variables.coats"
                        :characters="variables.characters"
                        :countries="variables.countries">
        </create-animal>
    </div>
@stop
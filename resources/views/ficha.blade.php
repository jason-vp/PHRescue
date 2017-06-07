@extends('master.mainLayout')

@section('content')
@include('_ficha-modals')
<animal-basic-data :animal.sync="variables.animal"
                   :type="variables.type"
                   :species="variables.species"
                   :sizes="variables.sizes"
                   :coats="variables.coats"
                   :characters="variables.characters"
                   :countries="variables.countries">
</animal-basic-data>
@include('_ficha-details')
@stop
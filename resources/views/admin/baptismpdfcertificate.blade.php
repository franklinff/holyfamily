
<h3>Baptism certificate</h3>

{{csrf_field()}}
<div>
    <label>Name :</label> {{ $individual_data->newborn_firstname.' '.$individual_data->newborn_middlename.' '.$individual_data->newborn_surname }} <br>
    <label>Gender:</label> {{ $individual_data->gender }} <br>
    <label> Birth date:</label> {{ $individual_data->birth_date }} <br>
    <label>Baptism date:</label> {{ $individual_data->baptism_date }} <br>
    <label> Fathers name:</label> {{ $individual_data->father_first_name.' '.$individual_data->father_middle_name.' '.$individual_data->father_last_name }} <br>
    <label>Mothers name:</label> {{ $individual_data->mother_first_name.' '.$individual_data->mother_middle_name.' '.$individual_data->mother_last_name }} <br>
    <label>Address:</label> {{ $individual_data->guardian_resident_adrs }} <br>

    <label>Godfather:</label> {{ $individual_data->gfather_first_name.' '.$individual_data->gfather_middle_name.' '.$individual_data->gfather_last_name }} <br>
    <label>Godfather adrs:</label> {{ $individual_data->gfather_adrs }} <br>

    <label>GodMother :</label> {{ $individual_data->gmother_first_name.' '.$individual_data->gmother_middle_name.' '.$individual_data->gmother_last_name }} <br>
    <label>GodMother adrs:</label> {{ $individual_data->gmother_adrs }} <br>

    <label>Baptised by:</label> {{ $individual_data->pastor }} <br>

    <p>Printed on: {{ date("l jS \of F Y") }} <p>
</div>

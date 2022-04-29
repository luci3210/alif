<table>
    <thead>
    <tr>
        <th style="width:180px;height: 30px;background-color:#fe0000">ID No.</th>
        <th style="width:180px;height: 30px;background-color:#fe0000">Ref ID</th>
        <th style="width:160px;height: 30px;background-color:#fe0000">First Name</th>
        <th style="width:160px;height: 30px;background-color:#fe0000">Middle Name</th>
        <th style="width:160px;height: 30px;background-color:#fe0000">Last Name</th>
        <th style="width:100px;height: 30px;background-color:#fe0000">HouseHold No.</th>
        <th style="width:100px;height: 30px;background-color:#fe0000">Contact No.</th>
        <th style="width:150px;height: 30px;background-color:#fe0000">Province</th>
        <th style="width:150px;height: 30px;background-color:#fe0000">City</th>
        <th style="width:150px;height: 30px;background-color:#fe0000">Barangay</th>
        <th style="width:150px;height: 30px;background-color:#fe0000">E/O</th>
        <th style="width:150px;height: 30px;background-color:#fe0000">Date Registed</th>
    </tr>
    </thead>
    <tbody>
    @foreach($members as $member)
        <tr>
            <td>ALIF-{{ str_pad($member->reg_id,7,0,STR_PAD_LEFT) }}</td>
            <td>{{ $member->idno }}</td>
            <td>{{ $member->firstname }}</td>
            <td>{{ $member->middlename }}</td>
            <td>{{ $member->lastname }}</td>
            <td>{{ $member->household_no }}</td>
            <td>{{ $member->mobile_no }}</td>
            <td>{{ $member->province_description }}</td>
            <td>{{ $member->city_municipality_description }}</td>
            <td>{{ $member->barangay_description }}</td>
            <td>{{ $member->manual }}</td>
            <td>{{ $member->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
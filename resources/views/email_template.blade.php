<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- DataTables -->
<script src="{{asset('public/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
</head>
<body>

</body>
</html>
<p>My name is <b>{{$data['first_name']}} {{$data['MI']}} {{$data['last_name']}}</b> </p>
<p>I would like to apply for a <b>{{$data['position_desired']}}</b> position starting from <b>{{$data['date_available']}}</b> on a 
<b>{{$data['employment_type']}}</b> basis.</p>
<h3>Personal Information</h3>
<table>
	<tr>
		<td>Street: <b>{{$data['street_address']}}</b></td>
		<td>City: <b>{{$data['city']}}</b></td>
		<td>State: <b>{{$data['state']}}</b></td>
	</tr>
	<tr>
		<td>Home Phone: <b>{{$data['home_phone']}}</b></td>
		<td>Alternative Phone: <b>{{$data['alt_phone']}}</b></td>
		<td>Email: <b>{{$data['your_email']}}</b></td>
	</tr>
	<tr>
		<td>Do you have a valid drivers license?  <b>{{$data['drivers_license']}}</b></td>
		<td>Class:  <b>{{$data['class']}}</b></td>
	</tr>
	<tr>
		<td>Have you ever served in the military? <b> {{$data['military']}}</b></td>
	</tr>
	<tr>
		<td>Do you have the legal right to obtain employment in the United States? <b>{{$data['employment_right']}}</b></td>
	</tr>
	<tr>
		<td>Can you perform the essential functions and responsibilities of the position for which you are applying? <b>{{$data['performance']}}</b></td>
	</tr>
	<tr>
		<td>Explanation: <b>{{$data['performance_explanation']}}</b></td>
	</tr>
	<br>
	<tr>
		<td><h3>License/Certifcation</h3></td>
	</tr>
	<tr>
		<td>Do you require any special accommodation to perform required duties? <b>{{$data['special_accommodation']}}</b></td>
	</tr>
	<tr>
		<td>Explanation: <b>{{$data['accommodation_explanation']}}</b></td>
	</tr>
	<tr>
		<td>Have you ever worked for Seven Hills Medical Solutions? {{$data['previous_worker']}}<b></b></td>
	</tr>
	<tr>
		<td>Position held: {{$data['position_held']}}</td>
		<td>Date: {{$data['employment_date']}}</td>
	</tr>
	<tr>
		<td>Do any of your relatives work for Seven Hills? <b>{{$data['relative_working']}}</b></td>
		<td>Name: <b>{{$data['relative_name']}}</b></td>
	</tr>
	<tr>
		<td>Certifications: <b>{{$data['certifications']}}</b></td>
	</tr>
	<tr>
		<td>Convicted of criminal offense? <b>{{$data['criminal_offense']}}</b></td>
	</tr>
	<!-- References -->
	<br>
	<tr>
		<td><h3>References</h3></td>
	</tr>
	<tr>
		<td><h5>Reference 1</h5></td>
	</tr>
	<tr>
		<td>{{$data['reference_name']}}</td>
		<td>{{$data['reference_phone_number']}}</td>
		<td>{{$data['reference_mail_address']}}</td>
	</tr>
	<tr>
		<td><h5>Reference 2</h5></td>
	</tr>
	<tr>
		<td>{{$data['reference_name_2']}}</td>
		<td>{{$data['reference_phone_number_2']}}</td>
		<td>{{$data['reference_mail_address_2']}}</td>
	</tr>
	<tr>
		<td><h5>Reference 3</h5></td>
	</tr>
	<tr>
		<td>{{$data['reference_name_3']}}</td>
		<td>{{$data['reference_phone_number_3']}}</td>
		<td>{{$data['reference_mail_address_3']}}</td>
	</tr>
	<br>
	<!-- Education and skills -->
	<tr>
		<td><h3>Education & Skills</h3></td>
	</tr>
	<tr>
		<td>Education Level: <b>{{$data['education_level']}}</b></td>
	</tr>
	<tr>
		<td>Degree Major: <b>{{$data['degree_major']}}</b></td>
	</tr>
	<tr>
		<td>Skills: <b>{{$data['skills']}}</b></td>
	</tr>
	<!-- Experience 1 -->
	<br>
	<tr>
		<td><h3>Experience</h3></td>
	</tr>
	<tr>
		<td>From: <b>{{$data['from_date']}}</b></td>
		<td>To: <b>{{$data['to_date']}}</b></td>
	</tr>
	<tr>
		<td>Start salary: <b>{{$data['start_salary']}}</b></td>
	</tr>
	<tr>
		<td>Employer name: <b>{{$data['employer_name']}}</b></td>
	</tr>
	<tr>
		<td>May we contact the previous employer? <b>{{$data['contact_permission']}}</b></td>
	</tr>
	<tr>
		<td>Street: <b>{{$data['street_address']}}</b></td>
		<td>City: <b>{{$data['city']}}</b></td>
		<td>State: {{$data['state']}}</td>
	</tr>
	<tr>
		<td>Home Phone: <b>{{$data['home_phone_employer']}}</b></td>
	</tr>
	<tr>
		<td>Titles & Duties performed: <b>{{$data['title_performed']}}</b></td>
	</tr>
	<tr>
		<td>Reason for leaving: <b>{{$data['reason_leaving']}}</b></td>
	</tr>
	<br>
	<!-- Experience 2 -->
	<tr>
		<td><h3>Experience 2</h3></td>
	</tr>
	<tr>
		<td>From: <b>{{$data['from_date_experience2']}}</b></td>
		<td>To: <b>{{$data['to_date_experience2']}}</b></td>
	</tr>
	<tr>
		<td>Start salary: <b>{{$data['start_salary_experience2']}}</b></td>
	</tr>
	<tr>
		<td>Employer name: <b>{{$data['employer_name_experience2']}}</b></td>
	</tr>
	<tr>
		<td>May we contact the previous employer? <b>{{$data['contact_permission_experience2']}}</b></td>
	</tr>
	<tr>
		<td>Street: <b>{{$data['street_address_employer_experience2']}}</b></td>
		<td>City: <b>{{$data['city_employer_experience2']}}</b></td>
		<td>State : <b>{{$data['state_employer_experience2']}}</b></td>
	</tr>
	<tr>
		<td>Home Phone: <b>{{$data['home_phone_employer_experience2']}}</b></td>
	</tr>
	<tr>
		<td>Titles & Duties performed: <b>{{$data['title_performed_experience2']}}</b></td>
	</tr>
	<tr>
		<td>Reason for leaving: <b>{{$data['reason_leaving_experience2']}}</b></td>
	</tr>

</table>




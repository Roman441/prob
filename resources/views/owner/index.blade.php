@extends ('layout')

@section ('content')
    <div class="page-header">
        <h1>
            List onwers
        </h1>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
		<th>Name</th>
		<th>age</th>
		<th>buiznes</th>
		<th>Edit</th>
            </tr>
            </thead>
            <tbody>
		@foreach ($owners as $owner)
                <tr>
                    <td> {{$owner->id}} </td>
		    <td> {{$owner->name}} </td>	
		    <td> {{$owner->age}} </td>
                    <td> {{$owner->buiznes}} </td>
		    <td> <a href = 'owner/{{ $owner->id }}'>Edit</a> </td>
                </tr>
		@endforeach
            </tbody>
        </table>
    </div>
   </div>
@endsection

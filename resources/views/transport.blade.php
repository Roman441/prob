@extends ('layout')

@section ('content')
    <div class="page-header">
        <h1>
            List transports
        </h1>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
		<th>Name</th>
		<th>Mark</th>
		<th>Year of issue</th>
		<th>Owner name</th>
		<th>Owner age</th>
            </tr>
            </thead>
            <tbody>
            @foreach ( $posts as $post )
                <tr>
                    <td> {{$post->id}} </td>
		    <td> {{$post->name}} </td>	
		    <td> {{$post->mark}} </td>
                    <td> {{$post->year_of_issue}} </td>
		    <td><a href="/owner/{{$post->owner->id}}"> {{$post->owner->name}} </a></td>
		    <td> {{$post->owner->age}} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">New transport</button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
          <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New transport</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
             </div>
             <div class="modal-body">
		{!! Form::open(array('url' => 'transport/create')) !!}
	           {!! Form::label('name', 'Name')!!}
        	   {!! Form::text('transport_name', 'Name', array('class' => 'form-control')) !!}
	           {!! Form::label('mark', 'Mark')!!}
	           {!! Form::text('mark', 'MAZ', array('class' => 'form-control')) !!}
		   {!! Form::label('year_of_issue', 'year_of_issue')!!}
                   {!! Form::number('year_of_issue', '2000', array('class' => 'form-control')) !!}
		   {!! Form::label('name', 'Name_ow')!!}
                   {!! Form::text('owner_name', 'Name', array('class' => 'form-control')) !!}
                   {!! Form::label('age', 'age')!!}
                   {!! Form::number('age', '2000', array('class' => 'form-control')) !!}
	           {!! Form::label('buiznes', 'buiznes')!!}
	           {!! Form::checkbox('buiznes',  true, array('class' => 'form-check-label')) !!}
             </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::submit('Save!', array('class' => 'btn btn-primary')) !!}
             {!! Form::close() !!}
		</form>
            </div>
         </div>
      </div>
   </div>
@endsection

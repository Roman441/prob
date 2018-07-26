@extends ('layout')

@section ('content')
    <div class="page-header">
        <h1>
            {{$owner->name}}
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
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{$owner->id}} </td>
		    <td> {{$owner->name}} </td>	
		    <td> {{$owner->age}} </td>
                    <td> {{$owner->buiznes}} </td>
                </tr>
            </tbody>
        </table>
	<form action = "edit/<?php echo $owner->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'name' value = '<?php echo$owner->name; ?>'/>
               </td>
	       <td>
                  <input type = 'text' name = 'age' value = '<?php echo$owner->age; ?>'/>
               </td>
               <td>
                  <input type = 'text' name = 'buiznes' value = '<?php echo$owner->buiznes; ?>'/>
               </td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update owner" />
               </td>
            </tr>
         </table>

      </form>
	<h1>
            Transport {{$owner->name}}
        </h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>mark</th>
                <th>year of issue</th>
            </tr>
            </thead>
            <tbody>
	       @foreach ( $transport as $post )
		<tr>
	         <td> {{$post->id}} </td>
                 <td> {{$post->name}} </td>
                 <td> {{$post->mark}} </td>
                 <td> {{$post->year_of_issue}} </td> 
	       </tr>
	      @endforeach
            </tbody>
        </table>
    </div>
   </div>
@endsection

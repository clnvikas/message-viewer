
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>send a message...</b></div>

                <div class="card-body">


<form action="{{url('/text')}}" method="post">
          {{csrf_field()}}
<table>
<tr><td>
from:
</td>

<td> 
	<input type="text" name="text" value="<?php echo $data[0]->email;?>" required>

</td>
</tr>
<h2>select the users to send the message...</h2>
<tr>
	<td>
  to:
	</td>
</tr>

		<?php 
		if(count($msg)>0)
		{
			foreach($msg as $msg1){
		?>
		<tr>
	       <td> 
		    <input type="checkbox" name="mail_id[]" value="<?php echo $msg1->id;?>" > <?php echo $msg1->email; ?>
		   </td>
		</tr>
	<?php 	}
		}
	else{
			echo "no msg can be sent as there are no users...!";
		
		
	}	?>


<h2>type message to send...</h2>
<tr><td>Message: </td><td><textarea name="message" rows="10" cols="30" ></textarea></td></tr>		

<tr><td><button class="button button-block"/>send</button> <td> </tr>

<tr><td>your previous Messages: </td><td><textarea name="m" rows="10" cols="30"><?php echo $data[0]->message;?></textarea></td></tr>


</table>




  
  <br>

</form>
{{csrf_field()}}
	

	             </div>
            </div>
        </div>
    </div>
</div>'

@endsection
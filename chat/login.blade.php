


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>registration form</b></div>

                <div class="card-body">

<div class="container">
 
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="{{url('/checklog')}}" method="post">
          {{csrf_field()}}
            <div class="field-wrap">

              <table>
        <tr>
        <td>
            <label>
              email
            </label>
            <td>
      
            <input type="email" name="email" required autocomplete="off"/>
            </td>
      </td>
          </div>
          
          <div class="field-wrap">
              <tr>
        <td>
            <label>
              Password
            </label>

        <td>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
            </td>
        </td>
     
       </div>
        <div>
          <tr>
<td>
          <button class="button button-block"/>Log In</button>
        </td>  </div>
           </tr>
            </table>
          </form>
{{csrf_field()}}
               </div>
            </div>
        </div>
    </div>
</div>'

@endsection
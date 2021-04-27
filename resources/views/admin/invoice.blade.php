<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;"><strong>Invoice for Your child</strong></h2>
          @foreach ( $user as $value ) 
      <h3 style="text-align: center; color: blue;">Jina: <strong>{{$value->player_fname}} {{$value->player_lname}}</strong></h3>
      @endforeach   

   

   <table class="table">
    <thead>

      <tr>
        <th>Siku Alizohudhuria</th>
        <th>Kiasi kwa Kila Siku</th>
        <th>Jumla</th>

      </tr>

    </thead>
<hr>
    <tbody>
      <tr>
        <td>SIKU {{$days_attended}} </td>
        <td>2000 TZS</td>
        <td style="font-weight: 300;">{{$days_attended*2000}} TZS</td>
      </tr>
    </tbody>

  </table>


  <div class="row">
    
    <div>
      <h3>Kisota Sports community Centre</h3>
    </div>
  </div>
</div>



</body>
</html>

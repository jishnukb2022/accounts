<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Accounts Table</h2>

<table>
  <tr>
    <th>Code</th>
    <th>Account</th>
    <th>Debit</th>
    <th>Credit</th>
    
  </tr>
    <?php $dr=0 ?>
    <?php $cr=0 ?>
  @foreach($account as $data)
  <tr>
    <td>{{$data->ledger_code}}</td>
    <td>{{$data->ledger_name}}</td>

    @if($data->type == 'Dr')
    <?php $dr+= $data->amount?>
    <td>{{$data->amount}}</td>
    @else
    <td></td>
    @endif
   @if($data->type == 'Cr')
   <?php $cr+= $data->amount?>
    <td>{{$data->amount}}</td>

    @else
    <td></td>
   @endif
   
  </tr>
  
 @endforeach
 <tr>

    <td>Total</td>
    <td></td>
    <td>{{$dr}}</td>
    <td>{{$cr }}</td>
   
</tr>
</table>

</body>
</html>
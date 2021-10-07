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

<h2>Expense list</h2>

<table>
  <tr>
    <th>Date of transaction</th>
    <th>Ledger</th>
    <th>Subledger</th>
    <th>Amount</th>
    
  </tr>
  
  @foreach($subledger as $data)
  <tr>
    <td>{{$data->date}}</td>
    <td>{{$data->ledger_name}}</td>
    <td>{{$data->subledger}}</td>
    <td>{{$data->amount}}</td>

  
   
  </tr>
  
 @endforeach
 <tr>

   
</tr>
</table>

</body>
</html>
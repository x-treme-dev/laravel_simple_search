<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>
<body>
<form action="{{ route('search') }}" method='post' enctype='multipart/form-data'>
@csrf
<select id="trade_mark" name="trade_mark">
    <option value="None">None</option>
    <option value="Brioni">Brioni</option>
    <option value="Berluti">Berluti</option>
</select>
<br><br>
<select id="name" name="name">
    <option value="None">None</option>
    <option value="Blazer">Blazer</option>
    <option value="Suit">Suit</option>
    <option value="Trousers">Trousers</option>
</select>
<p>Дата производства: <input type="date" name="date">
<br><br>
         <input type="submit" value="Search">
</form>
  
@if (is_object($rowData))
<table>
<thead>
<tr>
<th>Trade Mark</th>
<th>Name</th>
<th>Description</th>
<th>Date manufacture</th>
<th>Date receipts</th>
<th>Quantity</th>
<th>Weight</th>
<th>Price</th>
<th>Sale</th>
<th>Discount</th>
<th>Size</th>
</tr>
</thead>
<tbody>
@foreach ($rowData as $item)
<tr>
    <td>{{ $item->trade_mark }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->description }}</td>
    <td>{{ $item->date_manufacture }}</td>
    <td>{{ $item->date_receipts }}</td>
    <td>{{ $item->quantity }}</td>
    <td>{{ $item->weight }}</td>
    <td>{{ $item->price }}</td>
    <td>{{ $item->sale }}</td>
    <td>{{ $item->discount }}</td>
    <td>{{ $item->size }}</td>
    </tr>
@endforeach
</tbody>
</table>
@else <p><b>Not found!</b></p>
@endif
</body>
</html>
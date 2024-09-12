<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>
<body>
<p>Слова для поиска: berluti, brioni, блейзер, брюки, костюм...</p>
<form action="{{ route('search') }}" method='post' enctype='multipart/form-data'>
@csrf
<input type="text" name='search' id="search" required placeholder="Enter word..."  class="@error('search') is-invalid @else is-valid @enderror">
         @error('search')
         <b>{{ $message }}</b>
         @enderror
<br><br>
         <input type="submit" value="Search">
</form>
  
@if (count($searchData) != 0)
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
@foreach ($searchData as $item)
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
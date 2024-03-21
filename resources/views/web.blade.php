@php
$operationshift = get_operationshift(); 
$Shift = get_operationshift_data('07.00 - 15.00');
$Links = get_link(); 
$judul = get_link_value('Judul');
$image = get_link_data('Image')
@endphp


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script></script>
    <title>Enrichment</title>
  </head>
  <body>
    <div class="bio-link">
      
      <header>
        <img src="assets/512x512bb.jpg" />
        <h1>IT Binus @Malang</h1>
      </header>
<body>
  <h3> IT Operation’s Shift Status </h3>
	<table id="myTable">
		<tr>
			<th>IT Agents</th>
			<th>Shift</th>
		</tr>
    @php 
    $i=1;
    @endphp

    @foreach ($operationshift as $row)
    <tr>
			<td>{{$row->Nama}}</td>
			<td>{{ $row->Shift }}</td>
		</tr>
    @php 
    $i++;
    @endphp
    @endforeach
	</table>
</body>
</html>
<h3>How We Can Help You</h3>
<ul>
@php 
    $i=1;
    @endphp

    @foreach ( $Links as $item)
  <li>
    <a
      href="{{$item->Link}}"
    >
        <img src="{{ Storage::url($item->Image) }}" alt="" />
      {{ $item->Judul}}
    </a>
  </li>
  @php 
    $i++;
    @endphp
    @endforeach

    <script src="script.js"></script>
  </body>
</html>

<img src="{{ $message->embed('assets/img/swan_email.jpg') }}">

<h3>Booking Confirm</h3>
<h3>The Swnad</h3>

<p>Book On : {{ $tgl_reservasi }}<br />
Booking ID : {{ $no_reservasi }}</p>

<table style="width:70%;border:1px solid;">
	<tbody>
		<tr>
			<td style="width:50%">Property : {{ $code_service }}</td>
			<td>Payment : {{ $type_bayar }} ( {{ number_format($total) }} )</td>
		</tr>
		<tr>
			<td>Cekin : {{ $cek_in }}</td>
			<td>Night :</td>
		</tr>
		<tr>
			<td>Cek Out : {{ $cek_out }}</td>
			<td>Number Of Room : </td>
		</tr>
	</tbody>
</table>

<table style="width:70%;border:1px solid;">
	<tbody>
		<tr>
			<td style="width:50%">Guest Name : {{ $name }}</td>
			<td>Adult : {{ $adult }}</td>
		</tr>
		<tr>
			<td>Nationality : {{ $nationality }}</td>
			<td>&nbsp;</td>
		</tr>
	</tbody>
</table>

<ul>
	<li>Booking Detail</li>
</ul>

<table style="width:70%;border:1px solid;">
	<tbody>
        @php $deta = array_slice($detail, 0, -1) ; @endphp
        @foreach($deta as $det)
		<tr>
			<td>{{ $det['tgl'] }}</td>
			<td>{{ number_format($det['harga']) }}</td>
		</tr>
        @endforeach
	</tbody>
    <tfoot>
        <tr>
            <td>Total</td>
            <td>{{ number_format($total_bayar) }}</td>
        </tr>
    </tfoot>
</table>

<ul>
	<li>Payment {{ $type_bayar }} Is Paid To The Swand</li>
</ul>

<p>&nbsp;</p>

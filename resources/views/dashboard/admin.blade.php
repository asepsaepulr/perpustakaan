@extends('layouts.app')
@section('content')
<div class="container">
	<b><center>
	<font face="vivaldi" size="5" color="black">Selamat datang di Menu Administrasi Larapus. Silahkan pilih menu administrasi yang diinginkan.</font> 

	</center></b>
	
	<hr>
<h4>Statistik Penulis</h4>
<canvas id="chartPenulis" width="400" height="150"></canvas>
</div>
@endsection
@section('scripts')
<script src="{{asset('/js/Chart.min.js')}}"></script>
<script>
var data = {
	labels: {!! json_encode($authors) !!},
	datasets: [{
	label: 'Jumlah buku',
	data: {!! json_encode($books) !!},
	backgroundColor:['blue','red','green','yellow','orange','blue','red','green','yellow','orange'],
	borderColor: ['blue','red','green','yellow','orange','blue','red','green','yellow','orange'],
}]
};
	var options = {
	scales: {
	yAxes: [{
	ticks: {
	beginAtZero:true,
	stepSize: 1
}
}]
}
};
var ctx = document.getElementById("chartPenulis").getContext("2d");
	var authorChart = new Chart(ctx, {
	type: 'bar',
	data: data,
options: options
});
</script>
@endsection
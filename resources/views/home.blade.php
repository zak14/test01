@extends('adminlte::page') @section('title', 'AdminLTE') @section('content_header')
<h1>Dashboard</h1>
@stop @section('content')
<p>You are logged in!</p>
<div id="calendario">

</div>
@stop @section ('adminlte_js')
<script>
	$('#calendario').fullCalendar()

</script>
@stop
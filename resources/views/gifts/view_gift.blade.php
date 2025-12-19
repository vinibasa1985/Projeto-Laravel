@extends('layouts.main_layout')

@section('content')
    <h6>Info Gifts</h6>
    <p>Name: {{ $gifts->name }}</p>
    <p>Valor Previsto: {{ $gifts->expected_value }}</p>
    <p>Valor Gasto: {{ $gifts->amount_spent }}</p>

@endsection

@extends('layouts.Home')
@section('content')
  <livewire:navigationcc />
  <livewire:blogmain />
  @livewire('layout.leftslider')
  <livewire:theme />
  <livewire:footer />
@endsection

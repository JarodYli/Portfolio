@extends('layout')

@section('content')


    <div class="container">

            <img src='/images/spiceHeader.jpg'>

    </div>

    <div id="app">
        <menuGenerator></menuGenerator>
    </div>

<style>    
.container {
  position: relative;
  width: 100%;
}
</style>
@endsection

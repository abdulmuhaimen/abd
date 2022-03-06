
@extends('layouts.app')

@section('content')

     <form action="add" method="POST">
         @csrf

        product name: <input type="text" name="name" placeholder="Enter name">
        <br>
        product price: <input type="text" name="price" placeholder="Enter price">
        <br>
        <input type="submit" value="Add product">

     </form>

     @endsection


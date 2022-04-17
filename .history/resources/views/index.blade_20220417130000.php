<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <p>{{$text}}</p>
    <title>@yield('title')</title>

@extends('layouts.default')
<style>
  th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
</style>
@section('title', 'auth.blade.php')

@section('content')

<form action="/auth" method="post">
  <table>
    @csrf
    <tr><th>メール: </th><td><input type="text" 
          name="email"></td></tr>
    <tr><th>パスワード: </th><td><input type="password" 
          name="password"></td></tr>
    <tr><th></th><td><input type="submit" 
          value="送信"></td></tr>
  </table>
</form>
@endsection
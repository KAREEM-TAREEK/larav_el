@extends('laypot.nav')
@section('title')
    paste
@endsection
<h1>hello create </h1>

    <form  action="{{url('paste/insert')}}" method="POST"> 
        @csrf
     <input  type="text" name="title" placeholder=" enter title"  ><br><br>
    <input type="body" name="body" placeholder=" enter num"  >
<button type="submit"    > sub</button>

</form>


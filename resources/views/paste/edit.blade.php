@extends('laypot.nav')
@section('title')
    edit
@endsection
<h1 style="text-align: center">hello edit </h1>

    <form  action="{{url('paste/update',$data->id)}}" method="POST"> 
        @csrf
     <input  type="text" name="title" value="{{$data->title }}" ><br><br>
    <input type="body" name="body" value="{{$data->body}}" ><br><br>
<button type="submit"> sub</button>

</form>


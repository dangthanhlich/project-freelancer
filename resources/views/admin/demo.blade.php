<form action="demo" method="post">
    @if(count($errors) >0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
        {{$err}}<br>
        @endforeach
    </div>
    @endif
    @if(session('thongbao'))
        {{session('thongbao')}}
    @endif
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="text" name="email">
    <input type="passsword"  name="password" placeholder="password" >
    <button  type="submit">submit</button>
</form>
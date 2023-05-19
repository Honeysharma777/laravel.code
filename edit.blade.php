<form action="../update/{{$todoArr->id}}" method="post" >
  @csrf
    <label for="form-title"><h1>Meet a designer</h1></label>
<input type="text" name="uname" value="{{$todoArr->uname}}" placeholder="Enter your name">
<input type="text" name="uemail" value="{{$todoArr->uemail}}" placeholder="Enter your email">
<input type="tel" name="uphone"value="{{$todoArr->uphone}}" placeholder="Enter your mobile number">
<input type="text" name="upin" value="{{$todoArr->upin}}" placeholder="Enter your current residence pincode">
<input type="submit" name="submit" value="update">
  </form>
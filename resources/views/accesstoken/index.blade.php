<form action="{{url('tokenrequest')}}" method="post">
    <div>
        <label>Email Adress</label>
        <input type="email" name="email" required >
    </div>
    {{csrf_field()}}
    <button type="submit">Make Request</button>
</form>
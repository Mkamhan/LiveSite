
<h5>Reset Account</h5>
<br/>
<p>Welcome Dear : {{ $admin->name }}.</p>

<br/>
<p>
    Yore password on LiveTack System was changed successfully, Here is your new login credentials:
    <br>
    <b>Login ID :</b>{{ $admin->email }} OR {{$admin->username  }}
    <br>
    <b>Password: </b> {{ $new_password }}
</p>



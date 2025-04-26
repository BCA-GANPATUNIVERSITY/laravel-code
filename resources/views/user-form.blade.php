<div>
    <h1>LOGIN PAGE</h1>
<div class="kishan">
    <h1>Add New User</h1>
                                <!-- display error -->
    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
    @endforeach
    @endif -->
    
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Name" name="Username">
            <span style="color:red">@error('Username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User Email" name="Email">
            <span style="color:red">@error('Email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter User City" name="City">
            <span style="color:red">@error('City'){{$message}}@enderror</span>
        </div>
        <!-- <div class="input-wrapper">
            <button>Add New User</button>        
    </div> -->
    <h1>User Skill</h1>
    <div class="input-wrapper">
        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]" value="JAVA" id="java">
        <label for="java">JAVA</label>
        <input type="checkbox" name="skill[]" value="PYTHON" id="python">
        <label for="python">PYTHON</label>
    </div>
    <h1>Gender</h1>
    <div class="input-wrapper">
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">MALE</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">FEMALE</label>
    </div>
    <h1>CITY</h1>
    <div class="input-wrapper">
        <select name="city" id="">
            <option value="delhi">Delhi</option>
            <option value="gujarat">Gujarat</option>
            <option value="mumbai">Mumbai</option>
        </select>  
    </div>
    <h1>AGE</h1>
    <div class="input-wrapper">
<input type="range" name="age" min="18" max="100">
<div class="input-wrapper">
            <button>Add New User</button>        
    </div>
</div>
</div>
    </form>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>

<style>
    body{
        background-color: skyblue;
        text-align: left;
        padding: 70px;
        border: black 5px solid;
    }
    .kishan{
        /* padding: 80px; */
        text-align: center;
        border: black 2px solid;
        background-color: gray;
        /* width: 250px; */
    }
    input{
        border: orange 1px solid;
        height: 50px;
        width: 1000px;
        border-radius: 2px;
        color: orange;
    }
    .input-wrapper{
        margin: 10px;
    }
    button{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: #fff;
        cursor: pointer;
    }
    H1{
        color: red;
        text-align: center;
    }
</style>


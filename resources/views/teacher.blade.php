<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
     <h1>Teachers</h1>

     <table border="3">
        <tr>
        <th>id</th>
        <th>Username</th>
        <th>Phone</th>
        <th>Email</th>
        </tr>
 @foreach($teacher as $teacher)
        <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->Username}}</td>
            <td>{{$teacher->Phone}}</td>
            <td>{{$teacher->Email}}</td>

        </tr> 
        @endforeach
     </table>
</div>
<style>
    th{
        background-color:gray;
    }
    td{
        background-color:skyblue;
    }
    body{
        background-color: #FF78AC;

    }
    
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <link rel="icon" href="{{url('images/Myproject1.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
     integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>
<body>
    <div class="header text-center m-2 p-2">
        <h2>Application For Ammending a Sri Lankan Passport</h2>
    </div>
    <form action="/addApplicants" method="post">
    {{csrf_field()}}

    <h3>(A)</h3>

        <ul>
            <li>
               i. Present Passport No :
            </li>
            <li>
                <input type="text" name="txtPassNo" class="form-control">
            </li>
            <li>
               ii. Surname :
            </li>
            <li>
                <input type="text" name="txtSurname" class="form-control">
            </li>
            <li>
                iii. Names Other Than Surname :
            </li>
            <li>
                <input type="text" name="txtOthername" class="form-control">
            </li>
            <li>
                iv. Permanent Address :
            </li>
            <li>
                <input type="text" name="txtAddrs" class="form-control">
            </li>
            <li>
                v. Telephone Number of the Applicant :
            </li>
            <li>
                <input type="number" name="txttpNo" class="form-control">
            </li>

            
            <li style="text-allign:right;">
                <button type="submit" class="btn btn-dark ms-auto">Next</button>
            </li>
        </ul>
    </form>
    <table class="table mt-5 mx-4 w-75">
        <tr class="table-dark">
            <th>
                Passport Number
            </th>
            <th>
                Name
            </th>
            <th></th>
        </tr>

        @foreach($infos as $info)
        <tr class="table-light">
            <td>{{$info->passport_no}}</td>
            <td>{{$info-> other_surnames}} {{$info->surname}} </td>
            <td><a href="/moreinfo/{{$info->id}}" class="btn btn-dark">Add otherinfo</a>
            <a href="/printinfo/{{$info->id}}" class="btn btn-dark">Print</a>
            <a href="/updateRec/{{$info->id}}" class="btn btn-dark">update</a>
            <a href="/delRec/{{$info->id}}" class="btn btn-dark">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
</body>
</html>
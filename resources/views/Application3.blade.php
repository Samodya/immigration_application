<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
     integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand mx-2 fw-bolder fs-2" href="#"><i class="bi bi-person-fill"></i> Application For Ammending a Sri Lankan Passport</a>

           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold mt-2 ">
                    <li class="nav-item">
                        <a class="nav-link fs-5 home" aria-current="page" href="/Application">Add another Applicant</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5 home" aria-current="page" href="/Application">Edit Application data</a>
                    </li>
                    
                </ul>
               
            </div>

            <div class="btn-group mx-2 ms-auto" id="printbtn">
                        <button type="button" class="btn btn-secondary dropdown-toggle " 
                        onclick="window.print()" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-printer"></i>
                        </button>
                        
                    </div>
        </div>
    </nav>
    <form action="/updateFull" method="post" class="my-5">
    {{csrf_field()}}

    <ul>
            <input type="text" name="txtupid" value="{{$view2->id}}" hidden>
            <li>
               i. Present Passport No :
            </li>
            <li>
                <input type="text" name="txtupPassNo" class="form-control" 
                value="{{$view2->passport_no}}">
            </li>
            <li>
               ii. Surname :
            </li>
            <li>
                <input type="text" name="txtupSurname" class="form-control"
                value="{{$view2->surname}}">
            </li>
            <li>
                iii. Names Other Than Surname :
            </li>
            <li>
                <input type="text" name="txtupOthername" class="form-control"
                value="{{$view2->other_surnames}}">
            </li>
            <li>
                iv. Permanent Address :
            </li>
            <li>
                <input type="text" name="txtupAddrs" class="form-control"
                value="{{$view2->perm_address}}">
            </li>
            <li>
                v. Telephone Number of the Applicant :
            </li>
            <li>
                <input type="text" name="txtuptpNo" class="form-control"
                value="{{$view2->telephone}}">
            </li>

           
            <li style="text-allign:right;">
                <button type="submit" class="btn btn-warning ms-auto">Update</button>
            </li>
        </ul>
    </form>
</body>
</html>
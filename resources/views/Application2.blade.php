<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application2</title>
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

   
    <form action="/addApplicants2" method="post" class="form bg-dark text-light" >

            <h2>Add other information if necessary</h2>
    {{csrf_field()}}

    
        <input type="text" name="txtmreinfoID1" class="text1" value="{{$moreinfo->id}}" hidden>
       Passport no: <input type="text" name="txtmrePassID" class="text1" value="{{$moreinfo->passport_no}}" >
        
    
        {{$moreinfo->other_surnames}} {{$moreinfo->surname}}


        <h3>(B) Check the relevent boxes if the information are available</h3>

        <ul>
            
            <li>
                i. Change Surname/other names/name after marriage :
                   
                    <a href="/updatesurname/{{$moreinfo->id}}" class="btn btn-primary">Yes</a>
                  
                    <a href="/updatesurnameno/{{$moreinfo->id}}" class="btn btn-danger">No</a>
                    
                </li>
                <li>
                    <input type="text" name="txtchangesurname" class="form-control">
                
                </li>
                <input type="text" name="txtdent" class="form-control" hidden>
                <li>
                ii. Profession/job/Designamtion :
               
                    <a href="/updatejob/{{$moreinfo->id}}" class="btn btn-primary">Yes</a>
                   
                    <a href="/updatejobno/{{$moreinfo->id}}" class="btn btn-danger">No</a>
                </li>
                <li>
                    <input type="text" name="txtDesignation" class="form-control">
                </li>
              
                <li>
                iii. Inclusion of Identity : 
                    
                    <a href="/updateident/{{$moreinfo->id}}" class="btn btn-primary">Yes</a>
               
                    <a href="/updateidentno/{{$moreinfo->id}}" class="btn btn-danger">No</a>
                </li>
                <li>
                    <input type="text" name="txtIdentity" class="form-control">
                </li>
               
                <li>
                    iv. Extension of period of valididy : 
                    
                    <a href="/updateextendvalidation/{{$moreinfo->id}}" class="btn btn-primary">Yes</a>
                  
                    <a href="/updateextendvalidationno/{{$moreinfo->id}}" class="btn btn-danger">No</a>
                </li>
                <li>
                    Years: <input type="number" name="txtExtension" class="" style="width:60px">
                </li>
                
                <li>
                    v. Validation for Another journey : 
                    <a href="/updatejourney/{{$moreinfo->id}}" class="btn btn-primary">Yes</a>
                    <a href="/updatejourneyno" class="btn btn-danger">No</a>
                </li>
                <li>
                    vi. Any other amendments : 
                    <a href="/updateammedments/{{$moreinfo->id}}" class="btn btn-primary">Yes</a>
                    <a href="/updateammedmentsno/{{$moreinfo->id}}" class="btn btn-danger">No</a>
                </li>
                <li>
                    <input type="text" name="txtammendment" class="form-control">
                </li>

                <li style="text-allign:right;">
                    <button type="submit" class="btn btn-success ms-auto">Contiune</button>
                </li>
            </ul>
            
    </form>

    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
</body>
</html>
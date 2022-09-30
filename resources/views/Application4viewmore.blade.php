<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
     integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">

     <style>
        
     </style>
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


<div class="container">
   <div class="print-form my-5" id="printthis">
   
    <div class="row">
    <img src="{{asset('images/header.png')}}" class="coverimg">
    </div>
   <input type="text" name="txtID" value="{{$view->id}}" hidden>

   <table class="table2">
    <tr>
        <td class="catog"><b>Passport No:</b></td>
        <td style="text-align:right">{{$view->passport_no}}</td>
    </tr>
    <tr>
        <td class="catog"><b>Surname:</b></td>
        <td style="text-align:right">{{$view->surname}}</td>
    </tr>
    <tr>
        <td class="catog"><b>Change surname/other name/names after Marriege:</b></td>
        <td style="text-align:right">{{$view->other_surnames}}</td>
    </tr>
    <tr>
        <td class="catog"><b>Permanent Address:</b></td>
        <td style="text-align:right">{{$view->perm_address}}</td>
    </tr>
    <tr>
        <td class="catog"><b>Telephone:</b></td>
        <td style="text-align:right">{{$view->telephone}}</td>
    </tr>
    
    
    <tr>
        <td class="catog"><b>Profession/Job/Designation :</b></td>
        <td style="text-align:right">{{$view->designatiion}}</td>
    </tr>
    <tr>
        <td class="catog"><b>Inclusion of Identity:</b></td>
        <td style="text-align:right">{{$view->insert_id}}</td>
    </tr>
    <tr>
        <td class="catog"><b>Extension of Validity:</b></td>
        <td style="text-align:right">Years:{{$view->years}}</td>
    </tr>
    <tr>
        <td class="catog"><b>Validation of another journey:  (0:no, 1:yes)</b></td>
        <td style="text-align:right">{{$view->is_journey}}</td>
    </tr>
    <tr>
        <td class="catog"><b>Any Other Ammendments:</b></td>
        <td style="text-align:right">{{$view->amendments}}</td>
    </tr>
   </table>
</div>
</div>

        <script>
            document.getElementById("printbtn").onclick = function(){
                printElement(document.getElementById("printthis"));
            }

            function printElement(){
                var dclone=elem.cloneNode(true);
                var printSec=document.getElementById("printSection");
                if(!printSec){
                    var printSec = document.createElement("div");
                    prinSec.id="printSection";
                    document.body.appendChild(printSec);
                }
                printSec.innerHTML=""
                printSec.appendChild(dclone);
;                window.print();
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
</body>
</html>
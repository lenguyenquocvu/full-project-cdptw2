<!doctype html>
<html lang="en">

<head>
    <title>Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('result/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('result/css/members.css')}}">
   </head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light ">

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Members</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Sign out</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container white">
        <nav>
            <div class="row inline">
                <div class="col-6 col-md-4"></div>
                <div class="col-6 col-md-3 text-center">Trạng thái</div>
                <div class="col-md-3 text-center none">Thời gian</div>
                <div class="col-md-2 text-left none">
                    <ion-icon class="mr-2" name="person"></ion-icon>
                    <ion-icon name="settings"></ion-icon>
                </div>
            </div>
        </nav>
        <div class="container m-2 overflow">
            <div class="row title pt-3">
                <span>Đang thực hiện</span>

            </div>
            <div class="row pt-2 ">
                <div class="col-6 col-md-4 text-center1">

                    <ion-icon  class="mr-2" name="checkmark-circle-outline"></ion-icon>
                    <span>Chuyên đề web 1</span>

                </div>
                <div class="col-6 col-md-3 status on text-center">Đang thực hiện</div>
                <div class="col-3 time text-center none">Feb 1</div>
                <div class="col-2 text-center1 none">Teacher</div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-md-4 text-center1">
                    <ion-icon  class="mr-2" name="checkmark-circle-outline"></ion-icon>
                    <span>Chuyên đề web 2</span>
                </div>
                <div class="col-6 col-md-3 status near text-center">Gần kết thúc</div>
                <div class="col-3 time text-center none">Mar 16</div>
                <div class="col-2 text-center1 none">Teacher</div>
            </div>
            <div class="row title pt-3">
                <span>Đã kết thúc</span>
            </div>
            <div class="row pt-2">
                <div class="col-6 col-md-4 text-center1">

                    <ion-icon  class="mr-2" name="checkmark-circle-outline"></ion-icon>
                    <span>Chuyên đề web 1</span>

                </div>
                <div class="col-6 col-md-3 status on text-center">Đang thực hiện</div>
                <div class="col-3 time text-center none">Feb 1</div>
                <div class="col-2 text-center1 none">Teacher</div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-md-4 text-center1">

                    <ion-icon class="mr-2" name="checkmark-circle-outline"></ion-icon>
                    <span>Tin học</span>

                </div>
                <div class="col-6 col-md-3 finish status text-center">Kết thúc</div>
                <div class="col-3 time text-center none">Mar 16</div>
                <div class="col-2 text-center1 none">Teacher</div>
            </div>
            <div class="row mt-2">
                    <div class="col-6 col-md-4 text-center1">
    
                        <ion-icon  class="mr-2" name="checkmark-circle-outline"></ion-icon>
                        <span>Lập trình di động 2</span>

                    </div>
                    <div class="col-6 col-md-3 out status text-center">Kết thúc</div>
                    <div class="col-3 time text-center none">Mar 16</div>
                    <div class="col-2 text-center1 none ">Teacher</div>
                </div>
               
                   
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('result/js/jquery-3.4.1.slim.js')}}"></script>
    <script src="{{asset('result/js/bootstrap.min.js')}}"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core@4.7.4/dist/ionic/ionic.esm.js"></script>
   </body>

</html>
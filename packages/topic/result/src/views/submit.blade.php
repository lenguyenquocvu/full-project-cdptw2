<!doctype html>
<html lang="en">

<head>
    <title>Submit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('result/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('result/css/submit.css')}}">

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light ">

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           
        </button>
        <span>Student</span>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Student</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Sign out</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container white">
        <div class="container">
            <nav>

                <div class="row inline">
                    <div class="col-6 col-md-6 topic pl-4 font-weight-bold">Bài tập...</div>

                    <div class="col-6 col-md-6 text-right pr-5">
                        <ion-icon class="mr-2" name="person"></ion-icon>
                        <ion-icon name="settings"></ion-icon>
                    </div>
                </div>
            </nav>
            <div class="content pl-4 pt-3">
                <div class="title">
                    <h5>Tiêu đề</h5>
                    <div class="description pb-2">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Voluptatum vero aperiam nisi quaerat, sapiente beatae accusamus, recusandae
                        provident, numquam libero harum ipsa pariatur corporis quos vitae tempora natus molestiae
                        suscipit?</div>
                    <div class="class-student">
                        <div class="row">
                            <div class=" col-3 col-md-3">Lớp</div>
                            <div class="col-9 col-md-9">123456CD456789</div>
                        </div>
                        </div>
                        <div class="class-student "></span>
                            <div class="row">
                                <div class=" col-3 col-md-3">Bắt đầu</div>
                                <div class=" col-9 col-md-9">Monday, 9 September 2019, 12:00 AM</div>
                            </div>
                        </div>
                            <div class="class-student ">
                                <div class="row">
                                    <div class=" col-3 col-md-3">Kết thúc</div>
                                    <div class=" col-9 col-md-9">Sunday, 8 September 2019, 11:39 PM</div>
                                </div>
                            </div>
                            <div class="submit py-3"><form class="md-form">
                                    <div class="file-field">
                                      <div class="btn btn-rounded purple-gradient btn-sm float-left">
                                        <span>Choose file</span>
                                        <input type="file">
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload your file">
                                      </div>
                                    </div>
                                  </form></div>
                            <form>
                                    
                                  </form>
             

                        <!-- Optional JavaScript -->
                        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                        <script src="{{asset('result/js/jquery-3.4.1.slim.js')}}"></script>
                        <script src="{{asset('result/js/bootstrap.min.js')}}"></script>
                        <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core@4.7.4/dist/ionic/ionic.esm.js"></script>

</body>

</html>
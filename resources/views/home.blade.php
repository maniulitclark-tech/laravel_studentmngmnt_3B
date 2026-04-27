@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <p class="card-text">
                                {{ __('Welcome!') }}
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clark Neil Y. Maniulit - Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="row">
            
            <div class="col-md-3">
                
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" 
                                 src="https://scontent.fmnl37-1.fna.fbcdn.net/v/t39.30808-1/605783544_1968733900355285_6117493705549920026_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=109&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeHkBFS5Js3NdT3JZTH3ifCVYZnaDsRNVAlhmdoOxE1UCZwGXz_2XJ3MyGa1OLx65_8s7jg4A4wXIMNrrHLS9lJl&_nc_ohc=e-ho1iHqJHgQ7kNvwHLgzhT&_nc_oc=AdnaUYxzeEtHcRrZYzhA3nDjjD-szAj0adGR5fl9tsJzKuCeXvmg3lpOxtBotM4LXFn9u-WUuPpc6BQU3QQEFlTo&_nc_zt=24&_nc_ht=scontent.fmnl37-1.fna&_nc_gid=jWgs4C_sHiShTqmNNP3KyA&oh=00_AfvtDWgAsbk7d5p9BWHyg5q2A8aEzMEXoWwZ9I3xt7gy3A&oe=698F8187" 
                                 alt="Clark Neil Y. Maniulit">
                        </div>
                        <h3 class="profile-username text-center">Clark Neil Y. Maniulit</h3>
                        <p class="text-muted text-center">IT Student</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Age</b> <a class="float-right">20</a>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="float-right">Male</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nationality</b> <a class="float-right">Filipino</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Education</strong>
                        <p class="text-muted">
                            <strong>High School:</strong><br>
                            Bro. Andre Gonzales Technical High School (2017–2021)
                        </p>
                        <p class="text-muted">
                            <strong>College:</strong><br>
                            Don Honorio Ventura State University – Apalit Campus<br>
                            BS in Information Technology (2023–Present)
                        </p>

                       
                        <hr>
                        <strong><i class="fas fa-phone mr-1"></i> Contact</strong>
                        <p class="text-muted">
                            <i class="fas fa-phone mr-2"></i>+639975568696<br>
                            <i class="fas fa-envelope mr-2"></i>maniulitclark@gmail.com
                        </p>
                    </div>
                </div>
            </div>

            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                       
                        <div class="mb-3">

                        </div>

                        <p class="text-muted text-sm"><b>Contact Information</b></p>

                        <ul class="ml-4 mb-4 fa-ul text-muted">
                            <li class="small mb-2">
                                <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> 
                                Cellphone: +639975568696
                            </li>
                            <li class="small mb-2">
                                <span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> 
                                Email: maniulitclark@gmail.com
                            </li>
                            <li class="small mb-2">
                                <span class="fa-li"><i class="fas fa-lg fa-map-marker-alt"></i></span> 
                                Address: #55 Sitio Paligui, Dudurut, Colgante, Apalit, Pampanga
                            </li>
                        </ul>
                        <hr>

                       
                        <div class="mb-4">
                            <h5 class="mb-3"><strong>Introduction</strong></h5>
                            <p class="text-muted" style="text-align: justify; line-height: 1.8;">
                                I am a dedicated and passionate Information Technology student currently pursuing my Bachelor's degree 
                                at Don Honorio Ventura State University – Apalit Campus. With a strong foundation in programming and 
                                software development, I am committed to expanding my technical expertise and contributing to innovative 
                                solutions in the field of technology. My educational journey has equipped me with practical skills in 
                                various programming languages and development frameworks, preparing me for a successful career in the 
                                IT industry.
                            </p>
                        </div>

                        <hr>

                       
                        <strong><i class="fas fa-user mr-1"></i> Personal Information</strong>
                        <p class="text-muted mt-2">
                            <span class="label">Gender:</span> <span>Male</span><br>
                            <span class="label">Age:</span> <span>19</span><br>
                            <span class="label">Date of Birth:</span> <span>September 24, 2005</span><br>
                            <span class="label">Nationality:</span> <span>Filipino</span><br>
                            <span class="label">Religion:</span> <span>Catholic</span><br>
                            <span class="label">Father's Name:</span> <span>Henry Y. Maniulit</span><br>
                            <span class="label">Mother's Name:</span> <span>Lerma Y. Maniulit</span><br>
                        </p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Technical Skills</strong>
                        <p class="text-muted mt-2">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">C++</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">VB.Net</span>
                        </p>

                        <hr>

                        <!-- Career Objective -->
                        <strong><i class="far fa-file-alt mr-1"></i> Career Objective</strong>
                        <p class="text-muted mt-2" style="text-align: justify;">
                            To leverage my technical skills and academic knowledge in a challenging IT position where I can 
                            contribute to innovative projects while continuing to develop my professional competencies. I am 
                            seeking opportunities to apply my programming expertise and problem-solving abilities in a dynamic 
                            work environment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
              </div>
@endsection
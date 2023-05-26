<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/courses.show.css')}}" rel="stylesheet">
    <title>Show_Courses</title>
</head>
<body>
@extends('extend')
@section('content')

   

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}

        </div>
    @endif
    <div class="sidebar">
        <div class="logo-details">
          <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Restore  Courses</div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
          <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li>
          <li>
            <a href="{{route('departments.index')}}">
              <i class='bx bx-grid-alt'></i>
              <span class="links_name">Departments</span>
            </a>
             <span class="tooltip">Departments</span>
          </li>
        <li>
         <a href="{{route('users.index')}}">
           <i class='bx bx-user' ></i>
           <span class="links_name">User</span>
         </a>
         <span class="tooltip">User</span>
       </li>
      
       <li>
         <a href="{{route('courses.index')}}">
           <i class='bx bx-pie-chart-alt-2' ></i>
           <span class="links_name">courses</span>
         </a>
         <span class="tooltip">courses</span>
       </li>
       <li>
         <a href="{{route("course.restore.index")}}">
           <i class='bx bx-folder' ></i>
           <span class="links_name">Restore File </span>
         </a>
         <span class="tooltip">Restore-Files</span>
       </li>
         <li>
           <a href="#">
             <i class='bx bx-cart-alt' ></i>
             <span class="links_name">Order</span>
           </a>
           <span class="tooltip">Order</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-heart' ></i>
             <span class="links_name">Saved</span>
           </a>
           <span class="tooltip">Saved</span>
         </li>
         <li>
           <a href="#">
             <i class='bx bx-cog' ></i>
             <span class="links_name">Setting</span>
           </a>
           <span class="tooltip">Setting</span>
         </li>
         <li class="profile">
             <div class="profile-details">
               <img src="profile.jpg" alt="profileImg">
               <div class="name_job">
                 <div class="name">Prem Shahi</div>
                 <div class="job">Web designer</div>
               </div>
             </div>
            
            <button name="logout"><i class='bx bx-log-out' id="log_out" ></i></button>
          <span class="tooltip_logout">log_out</span>
    
         </li>
        </ul>
      </div>

    <aside class="profile-card">
        <header >
          <!-- here’s the avatar -->
          <a target="_blank" href="#">
            <img src="http://lorempixel.com/150/150/people/" class="hoverZoomLink">
          </a>
      
          <!-- the username -->
          <p>
          <span class="spans"> Name: </span>{{$courses->name}}
          </p>
      
          <!-- and role or location -->
            </p>
            <span class="spans"> Code:</span> {{$courses ->code}}         
        </p>
      
        </header>
      
        <!-- bit of a bio; who are you? -->
        <div class="profile-bio">
      
          <p>
            <span class="spans"> department:</span>  {{$courses ->department ->name}}      
         </p>
         <p>
            @if($courses ->prerequisite_id==null)
            <span class="spans">  Prerequisite:</span> {{"not prerequisite"}}
            @else

            <span class="spans">  Prerequisite: </span> {{$courses ->course->name}}

            @endif     
         </p>
         <p>
          @isset($courses ->professor->name)
          <span class="spans"> Professor:</span>{{$courses->professor->name}}</p>
          @else
          <span class="spans"> Professor:</span>No Professor</p>
         @endisset
        </div>
      
       
      </aside>

  
    <br><br>
    <br><br>
    <br><br>

  
    <br><br>
    <br><br>
    <a href="{{route('courses.index')}}">
        <button class="btn btn-success" type="submit"> Back</button>
    </a>

@endsection

</body>
</html>

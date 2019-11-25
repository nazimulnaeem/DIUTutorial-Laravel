 <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="/images/aboutAdmin/naeem.JPG" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Md. Nazimul Islam Naeem</p>
                  <div>
                    <small class="designation text-muted">Admin</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
             
            </div>
          </li>
          
          
          
               <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle mr-1"></i>Dashboard <span class="badge badge-success"></span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Question paper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Faculty member</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="">Question solve</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="">Helpful tutorial</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
          
          
          <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class=""></i>Manage Student</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.students') }}">All student info <span class="badge badge-secondary"></span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Create student</a>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                            </li>
          
          
                            
                             <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class=""></i>Manage Teacher</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.teachers') }}">All teacher</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Create teacher</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            
                            
                             <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class=""></i>Manage Question</a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('question.create') }}">Insert question</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.question') }}">Question info</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="">question view</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            
         
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class=""></i>Adnin</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Create admin</a>
                                        </li>
                         
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">update admin info</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            
                              <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
         


        </ul>
      </nav>
      <!-- partial -->
<aside class="slider-bar admins-slider float-start">
        
       <div class="menus-al">

        <nav class="navbar navbar-expand navbar-dark">
            <div class="fl w-100 d-block">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" href="{{ URL::to('admin/dashboard') }}"> 
                          <span> <i class="fas fa-tachometer-alt"></i> </span> Dashboard </a>
                    </li>
                  
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span> <i class="fas fa-folder-open"></i>  </span> Manage User
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ URL::to('performer') }}">Manage Performers</a></li>
                        <li><a class="dropdown-item" href="{{ URL::to('user') }}">Manage Users</a></li>
                      </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ URL::to('skill') }}">
                          <span> <i class="fas fa-folder-open"></i>  </span> Manage Skills
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>  <i class="fas fa-user"></i> </span> Manage Events
                      </a>
                      <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="{{ URL::to('event') }}"> Events List</a></li>
                        <li><a class="dropdown-item" href="{{ URL::to('/event/create') }}">Add Events</a></li>
                      </ul>
                    </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span> <i class="fas fa-folder-open"></i>  </span> Manage Advertisements
                        </a>
                          <ul class="dropdown-menu">
                              <!-- <li><a class="dropdown-item" href="{{ URL::to('schedule') }}">Manage Schedule</a></li> -->
                              <li><a class="dropdown-item" href="{{ URL::to('ad') }}"> Manage Ad Sample</a></li>
                              <!-- <li><a class="dropdown-item" href="{{ URL::to('trans') }}">Manage Transactions</a></li>
                              <li><a class="dropdown-item" href="{{ URL::to('position') }}">Manage Position</a></li>
                              <li><a class="dropdown-item" href="{{ URL::to('analytic') }}">Manage Analytics</a></li> -->
                          </ul>
                      </li>

 
                 
                 
                </ul>
               
              </div>
            </div>
        </nav>

          
       </div>

    </aside>
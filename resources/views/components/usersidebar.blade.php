<div class="menus-slidebar d-inline-block w-100">
                     <nav class="navbar navbar-expand navbar-light d-block bg-light flex-column">
                        <div class="p-0">

                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-column">
                              <li class="nav-item">
                                <a class="nav-link active" href="{{ URL::to('/dashboard') }}">
                                    <i class="ri-home-4-line"></i>  Dashboard
                                </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('profile', ['id' => Auth::user()->id]) }}">
                                      <i class="ri-shield-user-line"></i> Profile
                                  </a>
                              </li>

                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-pushpin-2-line"></i> Audio/Videos/Image
                                </a>
                                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="{{ URL::to('/portfolio-list') }}">Manage Files</a></li>
                                  <li><a class="dropdown-item" href="{{ URL::to('/add-portfolio') }}">Add Audio/Videos/Image </a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('/message') }}">
                                    <i class="ri-message-2-line"></i>  Message
                                </a>
                              </li>

                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-pushpin-2-line"></i> Event
                                </a>
                                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="{{ URL::to('/userevent') }}">Event list</a></li>
                                  <li><a class="dropdown-item" href="{{ URL::to('/create-event') }}">Create event</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">

                                      <a href="{{ URL::to('logout') }}" class="nav-link">
                                          <i class="ri-logout-circle-r-line"></i> Logout
                                      </a>

                              </li>


                            </ul>

                          </div>
                        </div>
                      </nav>
                  </div>

<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">
        @if(Auth::check())
        {{auth()->user()->name}}
        @endif
    
    </span>

    {{-- ما زبطت ما عم تطلع البليس هولدر لما ما يكون في صورة --}}
  {{--   @if($userphoto && $userphoto->isNotEmpty())
     <img width= '150' height='150' class="img-profile rounded-circle" src="{{ $userphoto->file }}">
    @else
     <img width='150' height='150' class="img-profile rounded-circle" src="https://placehold.co/600x400"> 
    @endif --}}
      {{-- <img class="img-profile rounded-circle" src="{{auth()->user()->photo}}"> --}}

      <img width= '150' height='150' class="img-profile rounded-circle" src="{{auth()->user()->userphoto ? auth()->user()->userphoto->file  : 'https://placehold.co/600x400' }}">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

      @if(auth()->user()->roles()->where('name', 'Admin')->exists())
       <a class="dropdown-item" href="{{ route( 'profile.adminuser',auth()->user()->slug ) }}">
      @elseif(auth()->user())
      <a class="dropdown-item" href="{{ route( 'profile.normaluser',auth()->user()->slug ) }}">
      @endif
      
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      {{-- <a class="dropdown-item" href="#">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        Settings
      </a>
      <a class="dropdown-item" href="#">
        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
        Activity Log
      </a> --}}
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>


    <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

         
          <form action="/logout" method="post">
           @csrf
           <button class="btn btn-danger">Logout</button>
          </form>
         
        </div>
      </div>
    </div>
  </div>


  </li>
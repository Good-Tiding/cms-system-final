


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>POSTS</span>
    </a>
    <div id="collapsePost" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">posts</h6>
        <a class="collapse-item" href="{{route('post.create')}}">creating post</a>
        <a class="collapse-item" href="{{route('post.index')}}">show All posts</a>
     {{--    <a class="collapse-item" href="{{route('comments.index')}}">show Post Comments</a> --}}
      </div>
    </div>
  </li>


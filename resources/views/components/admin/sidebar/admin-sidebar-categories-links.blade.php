<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Categories</span>
    </a>
    <div id="collapseCategories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">categories</h6>
        {{-- <a class="collapse-item" href="{{route('categories.create')}}">Creating Categories</a> --}}
        <a class="collapse-item" href="{{route('category.index')}}">Show All Categories</a>
      </div>
    </div>
  </li>

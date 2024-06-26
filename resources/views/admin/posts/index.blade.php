<x-admin-master>
    @section('content')
      @include('timeout-flasmessage')
      <h1>View Posts</h1>

        @if(Session::has('deleting_message'))
        <div class='alert alert-danger' >{{Session::get('deleting_message')}}</div>

        @elseif (session('creating_message'))
        <div class='alert alert-success' >{{session('creating_message')}}</div>

        @elseif (session('updating_message'))
        <div class='alert alert-primary' >{{session('updating_message')}}</div>

        @elseif (session('deleting_post_image_message'))
        <div class='alert alert-danger' >{{session('deleting_post_image_message')}}</div>

        @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       <thead>
                           <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Owner</th>
                                <th>Categeory</th>
                                <th>Edit Post</th>
                                <th>Description</th>
                                <th>Comments</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Delete</th>
                        
                            </tr>
                        </thead>

                        <tfoot>
                           <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Owner</th>
                                <th>Categeory</th>
                                <th>Edit Comment</th>
                                <th>Description</th>
                                <th>Comments</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            @if($show_posts)
                                @foreach ($show_posts as $post)
                                    <tr>
                                        <td>{{($show_posts->currentpage()-1) * $show_posts->perPage() + $loop->index + 1 }}</td> 

                                        <input type="hidden" name='post_id_database' value={{$post->id}} >

                                        <td> <img height="60px" src="{{$post->post_image ? $post->post_image : 'https://placehold.co/600x400'  }}"> </td>
                                        <td>{{$post->user->name}}</td>
                                        <td>{{$post->category ? $post->category->name :'UnCategorized'}}</td>
                                        <td>
                                            <a href="{{ route('post.edit', ['post' => $post, 'post_number' => ($show_posts->currentpage()-1) * $show_posts->perPage() + $loop->index + 1, 'page' => $show_posts->currentPage()]) }}">
                                                {{$post->title}}
                                            </a>
                                        </td>
                                        
                                        <td><a href="{{route('blog.post',$post->slug)}}">View Post</a></td>
                                        <td><a href="{{route('comments.show',$post->id)}}">View Comments</a></td>
                                        <td>{{$post->created_at->diffForHumans()}}</td>
                                        <td>{{$post->updated_at->diffForHumans()}}</td>
                                        <td>
                                           {{--  @can('view',$post) --}}
                                            <form method="post"  action="{{ route('post.delete', $post->slug) }}">
                                                <input type="hidden" name="_method" value="delete">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="row_number" value="{{ ($show_posts->currentPage() - 1) * $show_posts->perPage() + $loop->index + 1 }}">
                                                <input type="hidden" name="page" value="{{ $posts->currentPage() }}">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            {{--   @endcan --}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="d-flex">
            <div class="mx-auto">
                {{$show_posts->links('vendor.pagination.bootstrap-4')}}
            </div>
        </div>

    @endsection
   
    @section('table scripts')
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        {{-- <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>  --}}
    @endsection    
</x-admin-master>

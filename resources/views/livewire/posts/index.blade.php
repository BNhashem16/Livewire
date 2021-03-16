<div class="card">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Owner</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><img src="{{ asset('assets/images/'.$post->image) }}" width="100" alt=""> </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            {{-- <a href="{{ route('posts.edit' , $post->id) }}">Edit</a> --}}
                            {{-- <a href="javascript::void(0)" class="btn btn-danger" onclick="" >Delete</a> --}}

                        </td>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="float-right">
        {!! $posts->links() !!}

    </div>
</div>

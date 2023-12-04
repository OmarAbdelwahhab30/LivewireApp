<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">username</th>
            <th scope="col">email</th>
            <th scope="col">date of join</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>
                    <img style="width: 50px;height: 50px; border-radius: 50%" src="<?=
    $user->image != null ? asset("storage/photos/".$user->image): asset("storage/photos/user.jpg")

    ?>" alt="image">

                </td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Update
                    </button>
                    <button type="button" class="btn btn-danger m-1s" wire:click="remove({{$user->id}})">Delete</button>
                </td>
            </tr>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
    {{$users->links('pagination-links')}}
</div>

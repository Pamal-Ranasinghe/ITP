@extends('layouts.adminapp')

@section('content')
<div class="col-sm-12 text-center">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <br>
    <h3 class="text-center">Catering Package Menu</h3>

    <div class="row">
        <div class="col-sm-8">
            <a href="/create-package" class="btn btn-danger" title="Add package">New</a>
            <a href="/download-cpackage" class="btn btn-dark" title="View report">Export to PDF</a>
        </div>
        <form action="/search-cpackage" method="get">
        <h1 class="h3"><input class="form-control col-sm-12 offset-sm-10" type="search" name="search" placeholder="Search"
                aria-label="Search" title="search"></h1>
        </form>
    </div>

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Package Name</th>
                        <th>Description</th>
                        <th>Unit Price</th>
                        <th colspan=2>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cpackages as $cpackage)
                    <tr>
                        <td>{{$cpackage->id}}</td>
                        <td>{{$cpackage->p_name}}</td>
                        <td>{{$cpackage->description}}</td>
                        <td>Rs.{{$cpackage->price}}</td>
                        <td>
                            <a href="/edit-caterpackage/{{$cpackage->id}}" class="btn btn-dark"
                                title="Edit">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <form action="/delete-caterpackage/{{$cpackage->id}}" method="GET">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" title="Delete">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</main>

<!------------------------------------------ End of catering_packages.showcateringadmin  view------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------->

</div>

</div>
</div>
</body>
@endsection

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
    <h3 class="text-center">Catering Booking</h3>
    <div class="row">
        <div class="col-sm-8">
            <a href="/show-packages" class="btn btn-primary" title="Package Menu">Dashboard</a>
            <a href="/corder-report" class="btn btn-dark" title="View report">Show report</a>
            <a href="/download-corder" class="btn btn-danger" title="Download report">Download report</a>
        </div>
        <form action="/search-corder" method="get">
        <h1 class="h3"><input class="form-control col-sm-12 offset-sm-10" type="search" name="searchcorder" placeholder="Search"
                aria-label="Search" title="search"></h1>
        </form>
    </div>

    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>CID</th>
                        <th>Package</th>
                        <th>Date & Time</th>
                        <th>Location</th>
                        <th>Guests</th>
                        <th>Bill-amount</th>
                        <th colspan=2>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($corders as $corder)
                    <tr>
                        <td>{{$corder->customer_id}}</td>
                        <td>{{$corder->name}}</td>
                        <td>{{$corder->date_time}}</td>
                        <td>{{$corder->location}}</td>
                        <td>{{$corder->guests}}</td>
                        <td>Rs.{{$corder->amount}}.00</td>
                        <td>
                            <a href="/view_corders/{{$corder->id}}" class="btn btn-dark"
                                title="Show customer detail">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                    <path fill-rule="evenodd"
                                        d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                </svg>
                            </a>
                        </td>
                        <td>
                            <form action="/delete-corder/{{$corder->id}}" method="GET">
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


<!------------------------------------------ End of catering_Orders.showcorder  view------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------------------------------->
</div>

</div>
</div>

@endsection
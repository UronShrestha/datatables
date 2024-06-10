@extends('layouts.masterlayout')
@section('main-content')
    <div class="container">
        <h1>{{ __('List of Users') }}</h1>
        <div class="table-responsive">
            <table id ="tbl" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $row)
                        <tr class="">
                            <td scope="row">{{ $row->id }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>No Users Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>

    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $("#tbl").DataTable();
        });
    </script>
@endpush

@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Project</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i
                            class="anticon anticon-home m-r-5"></i>Home</a>
                </nav>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="float-right mb-3">
                    <a href="{{ route('admin.project.create') }}"><button class="btn btn-primary"><i
                                class="anticon anticon-plus"></i> Create
                            Project</button></a>
                </div>
                {{-- <div class="col-md-7 float-right">
                    <div class="row align-items-end">
                        <div class="col-md-8 mb-3 mb-md-0">
                            <input type="search" name="search" placeholder="Search" id="search" class="form-control" />
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" id="searchBtn">Search</button>
                            <a href="{{ route('admin.project.index') }}"><button class="btn btn-primary"
                                    id="refreshBtn">Refresh</button></a>
                        </div>
                    </div>
                </div> --}}
                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table" id="project-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Project Date</th>
                                <th>energy_generation</th>
                                <th>category</th>
                                <th>client_company</th>
                                <th>location</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#project-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.project.list') }}',
                    method: "GET",
                    datatype: 'JSON'
                },
                order: ['1', 'DESC'],
                pageLength: 10,
                searching: true,
                aoColumns: [{
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'title',
                        render: function(data, type, row) {
                            if (data) {
                                return data;
                            } else {
                                return '-';
                            }
                        }
                    },
                    {
                        data: 'project_date',
                        render: function(data, type, row) {
                            if (data) {
                                return data;
                            } else {
                                return '-';
                            }
                        }
                    },
                    {
                        data: 'energy_generation',
                        render: function(data, type, row) {
                            if (data) {
                                return data;
                            } else {
                                return '-';
                            }
                        }
                    },
                    {
                        data: 'get_category',
                        render: function(data, type, row) {
                            if (data) {
                                return data.title;
                            } else {
                                return '-';
                            }
                        }
                    },
                    {
                        data: 'client_company',
                        render: function(data, type, row) {
                            if (data) {
                                return data;
                            } else {
                                return '-';
                            }
                        }
                    },
                    {
                        data: 'location',
                        render: function(data, type, row) {
                            if (data) {
                                return data;
                            } else {
                                return '-';
                            }
                        }
                    },
                    {
                        data: 'id',
                        render: function(data, type, row) {
                            var projectID = btoa(row.id);
                            return `<div class="btn-group" style="gap:5px;">
                                        <a href="{{ route('admin.project.edit', '') }}/${projectID}">
                                            <button class="btn-primary btn btn-icon btn-hover btn-sm btn-tone btn-rounded">
                                                <i class="anticon anticon-edit"></i>
                                            </button>
                                        </a>
                                        <form method="POST" action="{{ route('admin.project.delete', '') }}/${projectID}">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit"
                                                    class="btn-danger btn btn-icon btn-hover btn-sm btn-tone btn-rounded show_confirm">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                        </form>
                                    </div>`;
                        }
                    }
                ]
            });

            $("#searchBtn").click(function() {
                $('#project-table').DataTable().ajax.reload();
            })

            $(document).on('click', '.show_confirm', function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Are you sure you want to delete this project?`,
                        // text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        });
    </script>
@endsection

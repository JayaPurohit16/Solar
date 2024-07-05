@extends('admin.layouts.main')
@section('main')
    <div class="main-content">
        <div class="page-header">
            <h2 class="header-title">Category</h2>
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
                    <a href="{{ route('admin.category.create') }}"><button class="btn btn-primary"><i
                                class="anticon anticon-plus"></i> Create
                            Category</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover e-commerce-table text-center" id="category-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
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
            $('#category-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.category.list') }}',
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
                        data: 'id',
                        render: function(data, type, row) {
                            var categoryID = btoa(row.id);
                            return `<div class="btn-group" style="gap:5px;">
                                        <a href="{{ route('admin.category.edit', '') }}/${categoryID}">
                                            <button class="btn-primary btn btn-icon btn-hover btn-sm btn-tone btn-rounded">
                                                <i class="anticon anticon-edit"></i>
                                            </button>
                                        </a>
                                        <form method="POST" action="{{ route('admin.category.delete', '') }}/${categoryID}">
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

            $(document).on('click', '.show_confirm', function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Are you sure you want to delete this category?`,
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

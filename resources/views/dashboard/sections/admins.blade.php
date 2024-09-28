@extends('dashboard.layouts.app')

@section('content')


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-12">
                        <div id="successMessageContainer"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Admins</strong>
                                <strong class="table-db" style="display:none;">users</strong>
                                <strong class="view" style="display:none;">dashboard.sections.users</strong>
                                <button id="addItemBtn" class="btn btn-success text-white pull-right" data-toggle="modal" data-target="#addItemModal">
                                    <i class="fa fa-plus-square"></i> &nbsp; Add Admin
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th id="id" class="text-center align-middle" style="display: none;">id</th>
                                                <th id="image" class="text-center align-middle">Image</th>
                                                <th id="first_name" class="text-center align-middle">First Name</th>
                                                <th id="last_name" class="text-center align-middle">Last Name</th>
                                                <th id="email" class="text-center align-middle">Email</th>

                                                <th id="password" class="text-center align-middle" style="display: none;">password</th>
                                                <th id="password_confirmation" class="text-center align-middle" style="display: none;">password_confirmation</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td class="text-center align-middle" style="display: none;">{{ $item['id'] }}</td>
                                                <td class="text-center align-middle">
                                                @if(isset($item['image']) && $item['image'])
                                                <img src="{{ asset($item->image) }}" alt="user" width="60" height="60" class="rounded-circle" />
                                                @else
                                                <img src="{{ URL::asset('images/admin.png') }}" alt="user" width="60" height="60" class="rounded-circle">
                                                @endif

                                                </td>
                                                <td class="text-center align-middle">{{ $item['first_name'] }}</td>
                                                <td class="text-center align-middle">{{ $item['last_name'] }}</td>
                                                <td class="text-center align-middle">{{ $item['email'] }}</td>
                                                <td class="text-center align-middle">
                                                    <button class="btn btn-warning text-white editBtn">
                                                        <i class="fa fa-edit"></i> edit
                                                    </button>
                                                    <button class="btn btn-danger text-white deleteBtn">
                                                        <i class="fa fa-trash"></i> delete
                                                    </button>
                                                </td>
                                                <td style="display: none;"></td>
                                                <td style="display: none;"></td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div><!-- .animated -->



@endsection
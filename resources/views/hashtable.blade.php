@extends('layout.master')
@section('title', 'HASH TABLE')

@section('content')
    <div class="">
        <div class>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Students Hash Table</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table id="hash-table" class="table table-striped">
                                <thead>
                                <th>Index</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Birthday</th>
                                <th>Credits</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Gender</th>
                                </thead>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

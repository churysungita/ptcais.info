@extends('layouts.admin_dashboard')
@section('href',asset('css/admin/view_cards.css'))

@section('content')

    <main>
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <a class="datcard my-3" href="{{ url('deo_details') }}">
                        <span style="color:white;" class="h4">Deos</span>
                        <h4>Total:490</h4>
                        <p> Click to view</p>
                        <div class="go-corner">
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a class="datcard my-3" href="{{ url('head_teachers_details') }}">
                        <span style="color:white;" class="h4">Head Teachers</span>
                        <h4>Total:490</h4>
                        <p> Click to view</p>
                        <div class="go-corner">
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="datcard my-3" href="#">
                        <span style="color:white;" class="h4">Schools</span>
                        <h4>Total:490</h4>
                        <p> Click to view</p>
                        <div class="go-corner">
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </main>

@endsection

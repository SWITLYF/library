@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="admin-heading">Dashboard</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%; max-width: 20rem; height: 15rem; margin: 0 auto; position: relative; overflow: hidden; display: flex; flex-direction: column;">
                        <div style="flex-grow: 1; background-image: url('{{ asset('images/authors.jpg') }}'); background-size: cover; background-position: center;"></div>
                        <div style="background-color: rgba(133, 25, 25, 0.7); padding: 10px; position: absolute; bottom: 0; left: 0; right: 0;">
                            <p style="color: #fff; font-size: 2.5vw; margin: 0; text-align: center;">{{ $authors }}</p>
                            <h5 style="color: #fff; font-size: 1.5vw; margin: 0; text-align: center;">Authors Listed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%; max-width: 20rem; height: 15rem; margin: 0 auto; position: relative; overflow: hidden; display: flex; flex-direction: column;">
                        <div style="flex-grow: 1; background-image: url('{{ asset('images/publishers.jpg') }}'); background-size: cover; background-position: center;"></div>
                        <div style="background-color: rgba(133, 25, 25, 0.7); padding: 10px; position: absolute; bottom: 0; left: 0; right: 0;">
                            <p style="color: #fff; font-size: 2.5vw; margin: 0; text-align: center;">{{ $publishers }}</p>
                            <h5 style="color: #fff; font-size: 1.5vw; margin: 0; text-align: center;">Publishers Listed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%; max-width: 20rem; height: 15rem; margin: 0 auto; position: relative; overflow: hidden; display: flex; flex-direction: column;">
                        <div style="flex-grow: 1; background-image: url('{{ asset('images/categories.jpg') }}'); background-size: cover; background-position: center;"></div>
                        <div style="background-color: rgba(133, 25, 25, 0.7); padding: 10px; position: absolute; bottom: 0; left: 0; right: 0;">
                            <p style="color: #fff; font-size: 2.5vw; margin: 0; text-align: center;">{{ $categories }}</p>
                            <h5 style="color: #fff; font-size: 1.5vw; margin: 0; text-align: center;">Categories Listed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%; max-width: 20rem; height: 15rem; margin: 0 auto; position: relative; overflow: hidden; display: flex; flex-direction: column;">
                        <div style="flex-grow: 1; background-image: url('{{ asset('images/Books.jpg') }}'); background-size: cover; background-position: center;"></div>
                        <div style="background-color: rgba(133, 25, 25, 0.7); padding: 10px; position: absolute; bottom: 0; left: 0; right: 0;">
                            <p style="color: #fff; font-size: 2.5vw; margin: 0; text-align: center;">{{ $books }}</p>
                            <h5 style="color: #fff; font-size: 1.5vw; margin: 0; text-align: center;">Books Listed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%; max-width: 20rem; height: 15rem; margin: 0 auto; position: relative; overflow: hidden; display: flex; flex-direction: column;">
                        <div style="flex-grow: 1; background-image: url('{{ asset('images/register.jpg') }}'); background-size: cover; background-position: center;"></div>
                        <div style="background-color: rgba(133, 25, 25, 0.7); padding: 10px; position: absolute; bottom: 0; left: 0; right: 0;">
                            <p style="color: #fff; font-size: 2.5vw; margin: 0; text-align: center;">{{ $students }}</p>
                            <h5 style="color: #fff; font-size: 1.5vw; margin: 0; text-align: center;">Register Students</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 100%; max-width: 20rem; height: 15rem; margin: 0 auto; position: relative; overflow: hidden; display: flex; flex-direction: column;">
                        <div style="flex-grow: 1; background-image: url('{{ asset('images/bookissue.jpg') }}'); background-size: cover; background-position: center;"></div>
                        <div style="background-color: rgba(133, 25, 25, 0.7); padding: 10px; position: absolute; bottom: 0; left: 0; right: 0;">
                            <p style="color: #fff; font-size: 2.5vw; margin: 0; text-align: center;">{{ $issued_books }}</p>
                            <h5 style="color: #fff; font-size: 1.5vw; margin: 0; text-align: center;">Books Issued</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
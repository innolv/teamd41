@extends('layouts.app')

@section('content')
    <div class="content">
        <section class="custom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Mans profils</h2>
                        <a href="/profile">Atpakaļ</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card">
                            <div class="card-header">Profila rediģēšana</div>

                            <div class="card-body">
                                {!! Form::open(['action' => ['UserController@editUser'], 'method' => 'POST']) !!}

                                <div class="form-group row">
                                    {{Form::label('firstname', 'Vārds', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                                    <div class="col-md-6">
                                        {{Form::text('firstname', $user->firstname, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{Form::label('lastname', 'Uzvārds', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                                    <div class="col-md-6">
                                        {{Form::text('lastname', $user->lastname, ['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    {{Form::label('email', 'Ē-Pasts', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                                    <div class="col-md-6">
                                        {{Form::email('email', $user->email, ['class' => 'form-control'])}}
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        {{Form::hidden('_method', 'PUT')}}
                                        {{Form::submit('Saglabāt', ['class' => 'btn btn-primary'])}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection


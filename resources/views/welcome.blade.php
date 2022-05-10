@extends('layouts.app')

@section('title', 'Home')

@section('content')

        <div class="content container">

            <main>
                <div class="container">
                    <!--{{__("messages.welcome")}}-->

                    <div class="auth">
                        @auth
                            <div class="jumbotron" style="background: none;">
                                <div class="row align-items-center align-content-center">
                                    <div class="col-12 col-sm-9">
                                        <h5 class="title h2">Title</h5>
                                        <p class="lead">Se você está conectado, esse card aparecerá para você! Tente acessar a página de produtos, lembrando que só conseguirá se seu email for o correto!</p>
                                        <a href="{{ url('/products') }}" class="btn btn-success">Acessar produtos</a>
                                    </div>
                                    <div class="col-12 col-sm-3">
                                        <img class="img" style="border-radius: 50px" src="{{ url('assets/img/download.png') }}" alt="Card image cap">
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>

                    <div class="row">
                        <div class="card m-1 col-12 col-sm-3" style="width: 18rem;">
                            <img class="card-img-top" src="{{ url('assets/img/download.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card m-1 col-12 col-sm-3" style="width: 18rem;">
                            <img class="card-img-top" src="{{ url('assets/img/download.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card m-1 col-12 col-sm-3" style="width: 18rem;">
                            <img class="card-img-top" src="{{ url('assets/img/download.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
@endsection

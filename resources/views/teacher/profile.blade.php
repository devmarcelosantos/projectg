@extends('layouts.teacher')

@section('content')
    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
        <div class="card card-profile shadow">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                        <a href="#">
                            <img src="{{ asset('assets/img/theme/team-4.jpg') }}" class="rounded-circle">
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
                <div class="row">
                    <div class="col">
                        <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                            <div>
                                <span class="heading">22</span>
                                <span class="description">Friends</span>
                            </div>
                            <div>
                                <span class="heading">10</span>
                                <span class="description">Photos</span>
                            </div>
                            <div>
                                <span class="heading">89</span>
                                <span class="description">Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h3>
                        Jessica Jones<span class="font-weight-light">, 27</span>
                    </h3>
                    <div class="h5 font-weight-300">
                        <i class="ni location_pin mr-2"></i>Bucharest, Romania
                    </div>
                    <div class="h5 mt-4">
                        <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                    </div>
                    <div>
                        <i class="ni education_hat mr-2"></i>University of Computer Science
                    </div>
                    <hr class="my-4"/>
                    <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes,
                        performs and records all of his own music.</p>
                    <a href="#">Show more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Minha Conta</h3>
                    </div>
                    <div class="col-4 text-right d-none">
                        <button id="formSubmit" class="btn btn-sm btn-primary">Settings</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <h6 class="heading-small text-muted mb-4">INFORMAÇÕES DO USUÁRIO</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Nome do
                                        usuário</label>
                                    <input type="text" id="input-username"
                                           class="form-control form-control-alternative"
                                           placeholder="Username" value="lucky.jesse">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Endereço de
                                        e-mail</label>
                                    <input type="email" id="input-email"
                                           class="form-control form-control-alternative"
                                           placeholder="jesse@example.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-first-name">Primeiro
                                        nome</label>
                                    <input type="text" id="input-first-name"
                                           class="form-control form-control-alternative"
                                           placeholder="First name" value="Rodolfo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-last-name">Ultimo
                                        nome</label>
                                    <input type="text" id="input-last-name"
                                           class="form-control form-control-alternative"
                                           placeholder="Ultimo nome" value="Barros">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4"/>
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">Sobre mim</h6>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label>Sobre Mim</label>
                            <textarea rows="4" class="form-control form-control-alternative"
                                      placeholder="A few words about you ..."></textarea>
                        </div>
                    </div>
                    <h6 class="heading-small text-muted mb-4">Recomendações</h6>
                    <div class="pl-lg-4">
                        <div class="form-group">
                            <label>Recomendações</label>
                            <textarea rows="4" class="form-control form-control-alternative"
                                      placeholder="A few words about you ..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

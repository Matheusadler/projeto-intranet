@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <!-- Site wrapper -->
        <div class="card bg-light">
            <div class="card-header text-muted border-bottom-0">
                Web Desenvolvimento
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        <h2 class="lead" style="padding: 5px"><b>Matheus Adler</b></h2>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email: matheus.adler@mirante.com.br</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefone: (98) 98704-5344 </li>
                        </ul>
                    </div>
                    <div class="col-5 text-center">
                        <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>

<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
            </div>
        </div>
    </div>
@endsection

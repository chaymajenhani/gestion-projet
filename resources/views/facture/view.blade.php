@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion des factures
                <small>Gestion des factures</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active">Factures</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des factures</h3>

                <a type="button" href="/facture/create" class="btn btn-primary pull-right " ><div class="glyphicon glyphicon-plus"></div> Ajouter une Facture</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Client</th>
                        <th>Devis</th>
                        <th>Projet</th>
                        <th>Statut</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($tab as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{$value->date }}</td>
                            <td>{{$value->client->nom }}</td>
                            <td>{{$value->devis->nom }}</td>
                            <td>{{$value->projet->nom }}</td>
                            <td>{{$value->statut }}</td>
                            

                                <td>

                                    <form action="/facture/{{$value->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                  <a href="{{url ('facture/'.$value->id.'/edit')}}" class="btn-warning btn glyphicon glyphicon-pencil" ></a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                     
                             <button type="submit" class="btn-danger btn glyphicon glyphicon-trash"></button></form> </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

@endsection
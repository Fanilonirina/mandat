@extends('layouts.app')

<!-- @section('content') -->
    <div class="" style="margin-left: 20px;">
        <!-- breadCrumb -->
        <ol class="breadcrumb v1">
            <li class="breadcrumb-level"><a href="">Accueil</a></li>
            <li class="breadcrumb-level"><a href="">Liste de mandat</a></li>
        </ol>

        <!-- button -->
        <div>
            <button class="btn btn-info mt-3 mb-3">Ajouter un Mandat </button>
        </div>

        <!-- Recherche  -->
        <div class="card">
             <div class="card-header">
                Recherche rapide
            </div> 
            <div class="card-body">
                <form action="" class>
                    <div>
                        <label for="">Nom du client</label>
                        <input type="search" name="" id="">
                    </div>
                    <div>
                        <label for=""> N° de mandat</label>
                        <input type="search" name="" id="">
                    </div>
                </form>
                <div>
                    <label for="">N° d'ordre</label>
                </div>
            </div>
        </div>

        <!-- List of Mandat -->
        <div class="card m-2">
            <div class="card-body">
                <div>
                    <button class="btn btn-info ">Ajouter un Mandat </button>
                </div>
                <table class="table table-bordered mt-3">
                    <thead class="table-light">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">N° de mandat</th>
                        <th scope="col">PDF</th>
                        <th scope="col">Nom du client</th>
                        <th scope="col">Honoraires soumis à la TVA</th>
                        <th scope="col">Honoraires d'expert</th>
                        <th scope="col">Frais annexes</th>
                        <th scope="col">Droits de suite et plus-value</th>
                        <th scope="col">Frais de publicité</th>
                        <th scope="col">Quantité</th>
                        <th scope="col">Edit.</th>
                        <th scope="col">Suppr.</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($mandats as $mandat)
                        <a href=>
                        <tr>
                            <td>{{$mandat->created_at->isoFormat('DD/MM/YYYY')}}</td>
                            <td><a onclick="window.location='{{url('/mandat/'.$mandat->id)}}'">{{$mandat->num_mandat}}</a></td>
                            <td>{{$mandat->fichier_pdf}}</td>
                            <td><a onclick="window.location='{{url('/mandat/'.$mandat->id)}}'">{{$mandat->client->nom}}</a></td>
                            <td><a onclick="window.location='{{url('/mandat/'.$mandat->id)}}'">{{$mandat->honoraire_tva}}</a></td>
                            <td><a onclick="window.location='{{url('/mandat/'.$mandat->id)}}'">{{$mandat->honoraire_expert}}</a></td>
                            <td><a onclick="window.location='{{url('/mandat/'.$mandat->id)}}'">{{$mandat->frais_annexe}}</a></td>
                            <td><a onclick="window.location='{{url('/mandat/'.$mandat->id)}}'">{{$mandat->droit_suite}}</a></td>
                            <td><a onclick="window.location='{{url('/mandat/'.$mandat->id)}}'">{{$mandat->frais_pub}}</a></td>
                            <td><a onclick="window.location='{{url('/mandat/'.$mandat->id)}}'">{{$mandat->quantite_bien}}</a></td>
                        </tr>
                        </a>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- @endsection -->

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
                        <label for="">Numero du mandat :</label>
                        <input type="text" name="num_mandat" id="" value="{{$mandat->num_mandat}}">
                    </div>
                    <div>
                        <label for=""> Nom du Client :</label>
                        <input type="text" name="nom_client" id="" value="{{$mandat->client->nom}}">
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- @endsection -->

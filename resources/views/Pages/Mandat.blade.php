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
                        <th scope="col">N° d'ordre</th>
                        <th scope="col">Nom du client</th>
                        <th scope="col">Honoraires soumis à la TVA</th>
                        <th scope="col">Honoraires d'expert</th>
                        <th scope="col">Frais annexes</th>
                        <th scope="col">Droits de suite et plus-value</th>
                        <th scope="col">Frais de publicité</th>
                        <th scope="col">Edit.</th>
                        <th scope="col">Suppr.</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20/09/2022</td>
                            <td>22-003</td>
                            <td></td>
                            <td>M. Robert Duval</td>
                            <td>8%</td>
                            <td>80 € HT</td>
                            <td>120 € HT</td>
                            <td>50 € HT</td>
                            <td>5</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- @endsection -->

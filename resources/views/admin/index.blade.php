@extends('layout.app')

@section('content')
@php
$dateDuJour = \Carbon\Carbon::now()->locale('fr_FR')->isoFormat('dddd D MMMM YYYY');
@endphp
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="content container-fluid">
    <div class="page-name 	mb-4">
        <h4 class="m-0 p-4"> Bienvenue sur votre tableau de bord</h4>
        <label>{{ $dateDuJour }}</label>
    </div>
    <div class="row mb-4">
        <div class="col-xl-6 col-sm-12 col-12">
            <div class="breadcrumb-path ">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><img src="assets/img/dash.png" class="mr-3"
                                alt="breadcrumb" />Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
                <h3>Tableau de bord</h3>
            </div>
        </div>
        <div class="col-xl-6 col-sm-12 col-12">
            <div class="row">
                <div class="col-xl-6 col-sm-6 col-12">
                    <a class="btn-dash"> Vue globale</a>
                </div>
                <div class="col-xl-6 col-sm-6 col-12">
                    <a class="btn-emp">Statistiques clés</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 d-flex mobile-h">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Logiciels</h5>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="myChart1"></canvas>
                    <div class="text-center text-muted">
                        <div class="row">
                            <div class="col-3">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="fas fa-circle text-primary mr-1"></i> IDE
                                    </p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="fas fa-circle text-success mr-1"></i>
                                        Mailing</p>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="fas fa-circle text-warning mr-1"></i> Testing
                                    </p>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="fas fa-circle text-danger mr-1"></i> Autres
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Type de logiciel</h5>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-sm-12 col-12 d-flex">



            <script>
                $(document).ready(function () {
                    $.ajax({
                        url: '/get.chart.datas',
                        method: 'GET',
                        success: function (response) {
                            var chartData = response;
                            var labels = Object.keys(chartData);
                            var values = Object.values(chartData);


                            const ctx = document.getElementById('myChart');

                            new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: labels,
                                    datasets: [{
                                        label: 'Vue statistique de repartition de logiciel',
                                        data: values,
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    })


                    $.ajax({
                        url: '/get.chart.datasCat',
                        method: 'GET',
                        success: function (response) {
                            var chartData = response;
                            var labels = Object.keys(chartData);
                            var values = Object.values(chartData);


                            const ctx = document.getElementById('myChart1');

                            new Chart(ctx, {
                                type: 'polarArea',
                                data: {
                                    labels: labels,
                                    datasets: [{
                                        label: 'Vue statistique de repartition de logiciel',
                                        data: values,
                                        borderWidth: 1,
                                        backgroundColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(54, 162, 235)',
                                            'rgb(255, 205, 86)',
                                            'rgb(75, 192, 192)'
                                        ]
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        }
                    })

                });

            </script>

            @endsection

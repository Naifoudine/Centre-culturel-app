@extends('layouts.app1')

@section('content1')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- MAIN -->
<div class="d-flex p-4">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h1 class="display-4 text-uppercase">Tableau de bord</h1>
                    <!-- <h4 class="text-uppercase">Tableau de bord</h4> -->
                    <p>Statistiques des attributions</p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <!-- //while ($donnees = $countAttrib->fetch()) {
                                        ?> -->
                                        <h3 class="danger"><? //= $donnees['Total']; 
                                                            ?></h3>

                                        <!-- // }
                                        // $countAttrib->closeCursor(); // Termine le traitement de la requête
                                        ?> -->
                                        <span class="text-uppercase">Attributions</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-calendar danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <!-- //while ($donnees = $countPC->fetch()) {
                                        ?> -->
                                        <h3 class="success"><? //= $donnees['Total']; 
                                                            ?></h3>

                                        <!-- // }
                                        // $countPC->closeCursor(); // Termine le traitement de la requête
                                        ?> -->
                                        <span class="text-uppercase">Ordinateurs</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-screen-desktop success font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <!-- //while ($donnees = $countUser->fetch()) {
                                        ?> -->
                                        <h3 class="primary"><? //= $donnees['Total']; 
                                                            ?></h3>

                                        <!-- // }
                                        // $countUser->closeCursor(); // Termine le traitement de la requête
                                        ?> -->
                                        <span class="text-uppercase">Utilisateurs</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-user primary font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <!-- //while ($donnees = $countRP->fetch()) {
                                        ?> -->
                                        <h3 class="warning">
                                            <!--//echo $donnees['Pourcentage'];
                                            ?> -->


                                            <span>Pourcentage de postes attribués</span>
                                        </h3>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress mt-1 mb-0" style="height: 7px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:  <!-- //echo $donnees['Pourcentage']; 
  ?>-->" aria-valuenow="  <!--// echo $donnees['Pourcentage'];  
                                                                                                                                ?>" --> aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- // }

                                //$countRP->closeCursor(); // Termine le traitement de la requête 

                                ?>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
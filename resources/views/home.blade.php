

@extends('layouts.app')


@section('content')
<script src="{{asset('js/active.js')}}" defer></script>

        <div class="col-auto text-g">
            <h2 class="mt-3 text-center">Liste des dernier ajout et modification</h2>
            <div class="divbottom d-flex">
                <div class=" mt-2 leftnav pt-2">
                    <ul id="info_voiture " class="nav nav-tabs mt-1 menu border-0 ">
                        {{--Affiche les tabs dont l'utlisateur à accès avec son role--}}
                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs','RH','chef agence','responsable commandes','responsable fournisseurs','secretaire','user']))
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-car fas fa-lg m-2 front"></span>
                            <a class="nav-link tabsHome side border rounded-0 btnTab "  href="#" data-bs-toggle="tab" data-bs-target="#table_voitures">Voitures</a>
                            </li>
                
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs','RH','chef agence','responsable commandes','responsable fournisseurs','secretaire','user']))
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-wrench fas fa-lg m-2 front "></span>
                            <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_entretiens">Entretiens</a>
                            </li>
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-gear fas fa-lg m-2 front "></span>
                            <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_reparations">Reparations</a>
                            </li>
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-calendar-check fas fa-lg m-2 front "></span>
                                <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_assurances">Assurances</a>
                            </li>
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-gas-pump fas fa-lg m-2 front "></span>
                                <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_carburants">Consommation</a>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs','RH','chef agence','responsable commandes','responsable fournisseurs','secretaire','user']))
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-calendar-days fas fa-lg m-2 front "></span>
                                <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_locations">Locations</a>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs','RH','chef agence','responsable commandes','responsable fournisseurs','secretaire','user']))
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-truck-ramp-box fas fa-lg m-2 front "></span>
                                <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_fournisseurs">Fournisseurs</a>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs','RH','chef agence','responsable commandes','responsable fournisseurs','secretaire','user']))
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-user-group fas fa-lg m-2 front "></span>
                                <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_users">Utilisateurs</a>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs','RH','chef agence','responsable commandes','responsable fournisseurs','secretaire','user']))
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-shop fas fa-lg m-2 front "></span>
                                <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_agences">Agences</a>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs','RH','chef agence','responsable commandes','responsable fournisseurs','secretaire','user']))
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-calendar-days fas fa-lg m-2 front "></span>
                                <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_commandes">Commandes</a>
                            </li>
                        @endif
                        @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs','RH','chef agence','responsable commandes','responsable fournisseurs','secretaire','user']))
                            <li class="nav-item menu_list">
                            <span class="fa-solid fa-car fas fa-lg m-2 front "></span>
                                <a class="nav-link tabsHome side rounded-0 btnTab" href="#" data-bs-toggle="tab" data-bs-target="#table_voitures_fournisseur">Voitures fournisseurs</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div id="block_info_voiture" class="tab-content">
                    {{--Affiche le tableau ou non selont le role de l'utilisateur--}}
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable auto', 'user']))
                        <div id="table_voitures" class="tab-pane d-none contentHome " role="tabpanel">
                            <h1>Voitures</h1>
                        <table id="DataTable_voitures" class="table table-dark table-bordered table-hover table-striped dataTable mt-2 table-responsive" style="width: 100%">
                            <thead>
                            <tr class="text-g">
                                <th>Marque</th>
                                <th>Model</th>
                                <th>Immatriculation</th>
                                <th>Nombre de porte</th>
                                <th>Nombre de siège</th>
                                <th>Mise en circulation</th>
                                <th>Puissance</th>
                                <th>Carburant</th>
                                <th>Type de véhicule</th>
                                <th>Agence</th>
                                <th>Fournisseur</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($voitures as $datas)
                                <tr class="text-white">
                                    <td>{{$datas->marque}}</td>
                                    <td>{{$datas->model}}</td>
                                    <td>{{$datas->immatriculation}}</td>
                                    <td>{{$datas->nbPorte}}</td>
                                    <td>{{$datas->nbPlace}}</td>
                                    <td>{{date('d/m/Y', strtotime($datas->circulation))}}</td>
                                    <td>{{$datas->puissance}}</td>
                                    <td>{{$datas->carburant}}</td>
                                    <td>{{$datas->type}}</td>
                                    {{--Affiche Aucune agence si aucune agence n'est relier à la voiture--}}
                                    <td>{{($datas->ville !== null) ? $datas->ville.' '.$datas->rue : 'Aucune agence'}}</td>
                                    <td>{{($datas->name !== null) ? $datas->name.' '.$datas->email : 'Aucun fournisseur'}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable auto']))
                        <div id="table_entretiens" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <!-- Button trigger modal -->
                        <h1>Entretiens</h1>
                        <table id="DataTable_entretiens" class="table table-bordered tTable table-dark table-hover mt-2 table-striped dataTable dt-responsive" style="width: 100%">
                            <thead>
                            <tr class="text-g">
                                <th>Nom garage</th>
                                <th>Type</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>immatriculation</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($entretiens as $datas)
                                <tr>
                                    <td>{{$datas->nom}}</td>
                                    <td>{{$datas->type}}</td>
                                    <td>{{$datas->montant.'€'}}</td>
                                    <td>{{date('d/m/Y', strtotime($datas->date))}}</td>
                                    <td>{{(isset($datas->immatriculation))? $datas->immatriculation : 'Aucune voiture'}}</td>
                                    <td>
                                        <div class="noteSupp">
                                            {{(isset($datas->note)) ? $datas->note : "aucune note"}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable auto']))
                        <div id="table_reparations" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <!-- Button trigger modal -->
                        <h1>Réparation</h1>
                        <table id="DataTable_reparations" class="table table-bordered tTable table-dark table-hover mt-2 table-striped dataTable dt-responsive" style="width: 100%">
                            <thead>
                            <tr class="text-g">
                                <th>Nom garage</th>
                                <th>Type</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Note</th>
                                <th>Immatriculation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reparations as $datas)
                                <tr>
                                    <td>{{$datas->nom}}</td>
                                    <td>{{$datas->type}}</td>
                                    <td>{{$datas->montant.'€'}}</td>
                                    <td>{{date('d/m/Y', strtotime($datas->date))}}</td>
                                    <td>{{(isset($datas->immatriculation))? $datas->immatriculation : 'Aucune voiture'}}</td>
                                    <td>
                                        <div class="noteSupp">
                                            {{(isset($datas->note)) ? $datas->note : "aucune note"}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable auto']))
                        <div id="table_assurances" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <!-- Button trigger modal -->
                        <h1>Assurences</h1>
                        <table id="DataTable_assurances" class="table table-bordered table-hover table-dark mt-2 table-striped dataTable dt-responsive" style="width: 100%">
                            <thead>
                            <tr class="text-g">
                                <th>Nom assurance</th>
                                <th>Debut assurance</th>
                                <th>Fin assurance</th>
                                <th>Immatriculation</th>
                                <th>Frais</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($assurances as $datas)
                                <tr>
                                    <td>{{$datas->nom}}</td>
                                    <td>{{date('d/m/Y', strtotime($datas->DateDebut))}}</td>
                                    <td>{{date('d/m/Y', strtotime($datas->DateFin))}}</td>
                                    <td>{{$datas->immatriculation ?? 'Aucune voiture'}}</td>
                                    <td>{{$datas->frais."€"}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable auto']))
                        <div id="table_carburants" class="tab-pane contentHome d-none mt-3" role="tabpanel">
                        <h1>Carburant</h1>
                        <table id="DataTable_carburants" class="table table-bordered table-hover table-dark mt-2 table-striped dataTable dt-responsive" style="width: 100%">
                            <thead>
                            <tr class="text-g">
                                <th>Nombre de litre</th>
                                <th>Montant</th>
                                <th>Immatriculation</th>
                                <th>litre/prix</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($consommations as $datas)
                                <tr>
                                    <td>{{$datas->litre}}</td>
                                    <td>{{$datas->montant.'€'}}</td>
                                    <td>{{$datas->immatriculation ?? 'Aucune voiture'}}</td>
                                    <td>{{round($datas->montant/$datas->litre,3).'€'}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','secretaire']))
                        <div id="table_locations" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <h1>Locations</h1>
                        <table id="DataTable_location" class="table table-bordered table-hover table-dark mt-2 table-striped dataTable table-responsive" style="width: 100%">
                            <thead>
                            <tr class="text-g">
                                <th>Date de début</th>
                                <th>Date de Fin</th>
                                <th>Immatriculation</th>
                                <th>utilisateur</th>
                                <th>Montant</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($locations as $datas)
                                <tr data-voiture="{{$datas->id}}" data-db="location">
                                    <td>{{date('d/m/Y', strtotime($datas->DateDebut))}}</td>
                                    <td>{{date('d/m/Y', strtotime($datas->DateFin))}}</td>
                                    <td>{{$datas->immatriculation ?? 'Aucune voiture'}}</td>
                                    <td>{{$datas->email ?? 'Aucun utilisateur'}}</td>
                                    <td>{{$datas->montant}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseurs']))
                        <div id="table_fournisseurs" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <h1>Fournisseurs</h1>
                            <table id="DataTable_fournisseur" class="table table-bordered table-hover table-dark mt-2 table-striped dataTable table-responsive" style="width: 100%">
                                <thead>
                                <tr class="text-g">
                                    <th>Nom</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fournisseurs as $datas)
                                    <tr data-voiture="{{$datas->id}}">
                                        <td>{{$datas->name}}</td>
                                        <td>{{$datas->email}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin', 'RH']))
                        <div id="table_users" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <h1>Users</h1>
                        <table id="DataTable_users" class="table table-bordered table-hover table-dark mt-2 table-striped dataTable table-responsive" style="width: 100%">
                            <thead>
                            <tr class="text-g">
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $datas)
                                <tr data-voiture="{{$datas->id}}">
                                    <td>{{$datas->first_name}}</td>
                                    <td>{{$datas->last_name}}</td>
                                    <td>{{$datas->email}}</td>
                                    <td>{{$datas->role}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin', 'chef agence']))
                        <div id="table_agences" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <h1>Agences</h1>
                            <table id="DataTable_agence" class="table table-bordered table-hover table-dark mt-2 table-striped dataTable table-responsive" style="width: 100%">
                                <thead>
                                <tr class="text-g">
                                    <th>Ville</th>
                                    <th>Rue</th>
                                    <th>Code Postal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($agences as $datas)
                                    <tr>
                                        <td>{{$datas->ville}}</td>
                                        <td>{{$datas->rue}}</td>
                                        <td>{{$datas->codePostal}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin', 'responsable commandes']))
                        <div id="table_commandes" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <h1>Commandes</h1>
                            <table id="DataTable_commandes" class="table table-bordered table-hover table-dark mt-2 table-striped dataTable table-responsive" style="width: 100%">
                                <thead>
                                <tr class="text-g">
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>voiture</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($commandes as $datas)
                                    <tr>
                                        <td>{{$datas->DateDebut}}</td>
                                        <td>{{$datas->DateFin}}</td>
                                        <td>{{$datas->marque.' '.$datas->model}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Auth::user()->hasRole(['admin','responsable fournisseur']))
                        <div id="table_voitures_fournisseur" class="tab-pane d-none contentHome mt-3" role="tabpanel">
                        <h1>Voitures fournisseur</h1>
                            <table id="DataTable_voitures_fournisseur" class="table table-dark table-bordered table-hover table-striped dataTable mt-2 table-responsive" style="width: 100%">
                                <thead>
                                <tr class="text-g">
                                    <th>Marque</th>
                                    <th>Model</th>
                                    <th>Puissance</th>
                                    <th>Carburant</th>
                                    <th>Type de véhicule</th>
                                    <th>Fournisseur</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($voitures_fournisseurs as $datas)
                                    <tr class="text-white">
                                        <td>{{$datas->marque}}</td>
                                        <td>{{$datas->model}}</td>
                                        <td>{{$datas->puissance}}</td>
                                        <td>{{$datas->carburant}}</td>
                                        <td>{{$datas->type}}</td>
                                        <td>{{($datas->name !== null) ? $datas->name.' '.$datas->email : 'Aucun fournisseur'}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <script src="{{asset('js/home.js')}}" defer></script>
@endsection

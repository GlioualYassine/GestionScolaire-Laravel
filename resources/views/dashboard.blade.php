@extends("layouts.app")
@section("content")
        <!-- Dashboard Widgets -->
        <div class="container mx-auto mt-10">
            <div class="flex flex-wrap -mx-4 mt-3">
                <!-- Students Widget -->
                <div class="w-50 md:w-1/2 lg:w-1/3 px-4">
                    <div class="dashboard-widget">
                        <div class="dashboard-widget-header">
                            <h2 class="text-xl font-semibold">Gestion des Étudiants</h2>
                        </div>
                        <div class="dashboard-widget-content">
                            <!-- Content specific to student management goes here -->
                            <a href="{{ route('etudiants.index') }}" class="btn btn-primary">Voir les étudiants</a>
                        </div>
                    </div>
                </div>

                <!-- Branches Widget -->
                <div class="w-50 md:w-1/2 lg:w-1/3 px-4">
                    <div class="dashboard-widget">
                        <div class="dashboard-widget-header bg-green-500">
                            <h2 class="text-xl font-semibold">Gestion des Filères</h2>
                        </div>
                        <div class="dashboard-widget-content">
                            <!-- Content specific to branch (filière) management goes here -->
                            <a href="{{ route('filieres.index') }}" class="btn btn-success">Voir les filières</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

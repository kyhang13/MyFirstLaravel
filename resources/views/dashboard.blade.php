<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 mb-0">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title mb-2">
                                Welcome, {{ auth()->user()->name }} ({{ auth()->user()->username }})
                            </h3>
                            <p class="card-text text-muted mb-0">
                                You are logged in. Use the navigation to manage your profile or log out.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
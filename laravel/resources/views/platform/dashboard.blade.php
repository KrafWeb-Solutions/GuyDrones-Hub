<x-platform-layout>

    <x-slot name="title">
        Platform Dashboard
    </x-slot>

    <h2 class="text-2xl font-bold mb-6">
        Welcome to GuyDrones Hub
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-blue-100 rounded-lg shadow p-6">
            <h3 class="text-sm text-gray-600">Companies</h3>

            <p class="text-3xl font-bold mt-2">
                {{ $stats['companies'] }}
            </p>
        </div>

        <div class="bg-green-100 rounded-lg shadow p-6">
            <h3 class="text-sm text-gray-600">Platform Users</h3>

            <p class="text-3xl font-bold mt-2">
                {{ $stats['users'] }}
            </p>
        </div>

        <div class="bg-yellow-100 rounded-lg shadow p-6">
            <h3 class="text-sm text-gray-600">Employees</h3>

            <p class="text-3xl font-bold mt-2">
                {{ $stats['employees'] }}
            </p>
        </div>

        <div class="bg-purple-100 rounded-lg shadow p-6">
            <h3 class="text-sm text-gray-600">Subscription Plans</h3>

            <p class="text-3xl font-bold mt-2">
                {{ $stats['plans'] }}
            </p>
        </div>

    </div>

    <div class="mt-10">

        <div class="bg-white rounded-lg shadow">

            <div class="border-b px-6 py-4">
                <h3 class="text-xl font-semibold">
                    Recent Companies
                </h3>
            </div>

            <div class="p-6">

                @forelse($recentCompanies as $company)

                    <div class="border-b last:border-0 py-3">
                        {{ $company->name }}
                    </div>

                @empty

                    <p class="text-gray-500">
                        No companies found.
                    </p>

                @endforelse

            </div>

        </div>

    </div>

</x-platform-layout>
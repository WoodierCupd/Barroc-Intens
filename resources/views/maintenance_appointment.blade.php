<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-extrabold">Maintenance appointment from '{{$maintenance_appointment->getCompany->name}}'</h1>
                    <p>{{$maintenance_appointment->remark}}</p>
                    <p class="text-xl font-semibold">appointment at: {{$maintenance_appointment->date_added}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

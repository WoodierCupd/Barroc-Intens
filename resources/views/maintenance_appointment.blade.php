<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-xl font-bold">Maintenance appointment from '{{$maintenance_appointment->getCompany->name}}'</p>
                    <p>{{$maintenance_appointment->remark}}</p>
                    <p>appointment at: {{$maintenance_appointment->date_added}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

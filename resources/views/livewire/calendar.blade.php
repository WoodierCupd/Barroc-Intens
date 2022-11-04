<style>
    #calendar-container{
        width: 100%;
    }
    #calendar{
        padding: 10px;
        margin: 10px;
        width: 100%;
        height: 610px;
    }
</style>
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />

<div>
    <div id='calendar-container'>
        <div id='calendar'></div>
    </div>
</div>

@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>

    <script>
        var maintenance_appointments = {!! json_encode($maintenance_appointments) !!};
        var events = [];
        maintenance_appointments.forEach(function (maintenance_appointment) {
            events.push({
                title: `appointment: ${maintenance_appointment['id']}`,
                start: maintenance_appointment['date_added'],
                end: maintenance_appointment['date_added'],
                remark: maintenance_appointment['remark']
            })
        })
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                timeZone: 'local',
                events: events,
                eventClick: (events) => {
                    console.log(events['event']['_def']['extendedProps']['remark'])
                    alert(`${events['event']['_def']['title']}\n${events['event']['_def']['extendedProps']['remark']}`);
                }
            });
            calendar.render();
        })
    </script>
@endpush

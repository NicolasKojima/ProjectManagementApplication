<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])
         <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        @livewireStyles
    <style>
        .links {
        display: grid;
        grid-template-columns: 87% 13%;
        gap: 5px;
        align-items: center;
        justify-content: center;
        margin-bottom: 3rem;
        border-bottom: black solid 2px;
        }
        /* calendar.css */

        /* calendar.css */

        /* calendar.css */
        .space {
            width:100%;
            height:100px;
            background-color: white;
        }
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: Arial, sans-serif;
        }

        .calendar-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            height:100vh;
            overflow-x: hidden;
        }

        .calendar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height:100%;
            padding: 10px;
            position:relative;
        }

        .nav-button {
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
        }

        

        .calendar-horizontal-grid{
            position:absolute;
            width: 100%;
            height:100%;
            display:grid;
            grid-template-columns: 15% 85%;
            top:0;
        }

        .days-container {
            display: flex;
            justify-content: flex-start;
            overflow-x: scroll;
            width:100%;
        }

        /* Initially hide the dropdown content */
        .dropdown-content {
            display: none;
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            position: absolute;
            z-index: 1;
        }


        .day {
            min-width: 10%;
            flex: 1;
            line-height: 50px;
            text-align: center;
            border: 1px solid #ccc;
            background-color: #fff;
            white-space: nowrap;
        }

        .left-colomn{
            height:100%;
            background-color: lightgray;
            border: 3px grey solid;
        }

        .grid-item {
        color: white;
        border-top: 1px solid #000; /* Border for each box */
        border-bottom: 1px solid #000;
        padding: 10px; /* Add spacing inside the box */
        margin-top: 10px; 
        width: 100%;
        height: 50px;
        background-color: #003300;
        }

        .title {
        height:50px;
        width:100%;
        color: #333;
        /* background-color: white; */
        }

        .space {
            width: 100%;
            height:80px;
        }

        .event-day {
            background-color: gainsboro; /* You can change this to the desired color */
            color: #000; /* Text color on the colored day */
        }

        .calendar_title_M_Y {
            padding:20px;
            font-size: 300;
            font-weight: 300;
            overflow: hidden;
            
        }

        /* Style the dropdown container */
        .dropdown-content {
            display: none;
            color: #004d1a;
            position: absolute;
            background-color:white; /* Set a cheerful background color */
            border: 1px solid #d68fca; /* Border color */
            padding: 10px;
            left: 0; /* Position from the left edge of the parent element */
            z-index: 1;
        }

        /* Style the list items inside the dropdown */
        .dropdown-content ul {
            list-style: none;
            padding: 0;
        }

        /* Style each list item */
        .dropdown-content li {
            margin-bottom: 5px; /* Add some space between items */
        }

        /* Style the clickable span */
        .users-event.clickable {
            cursor: pointer; /* Change the cursor to a pointer when hovering */
            color: black; /* Change text color for a clickable appearance */
            text-decoration: underline; /* Add underline to indicate it's clickable */
        }

        /* Add a hover effect for the clickable span */
        .users-event.clickable:hover {
            color: #0052cc; /* Change text color on hover */
        }

        /* Style the "no event" span */
        .user-noevent {
            background-color: #f3f3f3; /* Background color for no events */
        }


        .users-event {
            background-color: #e6ffee;
            position:absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;          
        }

        .date {
            margin-bottom: 23px;
        }

        .event-span {
            position:relative;
            border-top: #000 solid 1px;
            border-bottom: #000 solid 1px;
            margin-bottom:9.5px;
            height:50.5px;
        }

        .selection-button{
            margin-left: 30px;
        }

        .title {
            padding-left: 20px;
            padding-top:5px;
            font-family: verdana, sans-serif;
            font-weight:normal !important;
            height: 100px;
        }

        .title_grid {
            display: grid;
            grid-template-columns: 50% 50%;
        }

        .calendar-title{
            height:200px;
            width:100%;
        }

        .calendar_title_result{
            display: flex;
            justify-content: center; /* Horizontally center text */
            align-items: center; /* Vertically center text */
            height: 100%; /* Set a fixed height for the container */
                }

/* Adjust the styles as needed */

        </style>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')
    <!-- Page Content -->
    <main>
        <div class="space">
            <div class="title">
                <div class="title_grid">
                    <p style="font-size: 2em; font-weight: bold; padding-top:17px;"> DC Department Individual Schedules </p>
                    <div class="calendar">
                        <div class="calendar-controls">
                            <label for="month">Month:</label>
                            <select id="month">
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <label for="year">Year:</label>
                            <select id="year">
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                            <button id="updateCalendar">Update Calendar</button>
                        </div>
                        <div class="calendar_title_M_Y" style ="font-weight: 800;"></div>
                    </div>
                </div>
            </div>
            <div class="calendar-container">
                <div class="calendar">
                    <div class="calendar-horizontal-grid">
                        <div class="left-column">
                            <div class="calendar_title_result" style="height: 64px;">
                                <div id="calendarTitle"></div>
                            </div>
                            @foreach ($users->filter(function ($user) {
                                return $user->hasRole('Employee');
                            }) as $user)
                                <div class="grid-item" id="user-{{ $user->id }}">
                                    <p>{{$user->name}}</p>
                                </div>
                            @endforeach
                        </div>
                    <div class="days-container"></div>
                    </div>
                </div> 
            </div>
        </div>
    </main>
<script>
    // Function to update the calendar with events
    // Function to update the calendar with events
function updateCalendarWithEvents() {
    var selectedMonth = parseInt(document.getElementById('month').value);
    var selectedYear = parseInt(document.getElementById('year').value);
    var daysContainer = document.querySelector('.days-container');
    var calendarTitle = document.querySelector('.calendar_title_M_Y');

    // Clear the existing content of the days container
    daysContainer.innerHTML = '';

    // Update the calendar title
    var formattedDate = new Date(selectedYear, selectedMonth - 1, 1).toLocaleString('default', { month: 'long', year: 'numeric' });
    calendarTitle.textContent = formattedDate;

    fetch('/api/projectschedule1')
        .then(response => response.json())
        .then(eventsData => {
            // Loop through the days in the selected month
            for (var i = 1; i <= new Date(selectedYear, selectedMonth, 0).getDate(); i++) {
                var dayElement = document.createElement('div');
                dayElement.className = 'day';
                dayElement.innerHTML = '<div class="date">' + i + '</div';

                var matchingEvents = eventsData.filter(event => {
                    var eventStartDate = new Date(event.event_start);
                    var eventEndDate = new Date(event.event_end);

                    // Check if the date falls within the event's duration
                    return (
                        eventStartDate.getDate() <= i &&
                        i <= eventEndDate.getDate() &&
                        eventStartDate.getMonth() + 1 === selectedMonth &&
                        eventStartDate.getFullYear() === selectedYear
                    );
                });

                if (matchingEvents.length > 0) {
                    dayElement.classList.add('event-day'); // Add a CSS class to mark the day with an event
                    var eventInfo = document.createElement('div');
                    eventInfo.className = 'event-info';

                    matchingEvents.forEach(event => {
                        // Create a span for each event
                        var eventSpan = document.createElement('span');
                        eventSpan.className = 'event';
                        eventSpan.textContent = event.project_name;

                        eventInfo.appendChild(eventSpan);
                    });

                    dayElement.appendChild(eventInfo);
                }

                daysContainer.appendChild(dayElement);
            }
        })
        .catch(error => {
            console.error('Error fetching events:', error);
        });
}


    // Attach the updateCalendarWithEvents function to the 'updateCalendar' button's click event
    document.getElementById('updateCalendar').addEventListener('click', updateCalendarWithEvents);

    // Function to initialize and display the calendar for the current month
    function initializeCalendar() {
        var today = new Date();
        var currentMonth = today.getMonth() + 1; // Months are zero-indexed
        var currentYear = today.getFullYear();
        var daysContainer = document.querySelector('.days-container');
        var calendarTitle = document.querySelector('.calendar_title_M_Y');
        var formattedDate = new Date(currentYear, currentMonth - 1, 1).toLocaleString('default', { month: 'long', year: 'numeric' });

        // Update the calendar title
        calendarTitle.textContent = formattedDate;

        // Clear the existing content of the days container
        daysContainer.innerHTML = '';

        // Call updateCalendarWithEvents to display events
        updateCalendarWithEvents();
    }

    // Attach the initializeCalendar function to the window's load event
    window.addEventListener('load', initializeCalendar);
</script>
</body>
</html>

## Laravel5 / JQuery Booking

## Official Documentation

### app/Http/Controllers/BookingController.php

a basic CRUD with resource controller. the client can create a new booking, modify an existing one, view a booking and delete a booking.

### database/migrations/2016_05_23_093221_create_bookings_table.php

create a MySQL table with client details, start time, end time and timestamps.

resources/templates/layout.blade.php
resources/templates/event/create.blade.php
resources/templates/event/edit.blade.php
resources/templates/event/view.blade.php

the layout and CRUD views includes bootstrap-sass, master nav and daterangepicker.js for the calendar component. a daterangepicker jquery script is utilised to restrict the time selection between 10am - 10pm.

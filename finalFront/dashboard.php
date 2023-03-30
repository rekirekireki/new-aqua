<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="dashboard.css">
  <meta charset='utf-8' />
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
  <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
  <script>
    $(document).ready(function() {
      // Initialize the calendar
      var calendar = $('#calendar').fullCalendar({
        // Set options and callbacks
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        selectable: true,
        selectHelper: true,
        select: function(start, end) {
          // Show a dialog to enter a note for the selected date
          var note = prompt('Enter a note for the selected date:');
          if (note) {
            // Add an event to the calendar with the note as the title
            calendar.fullCalendar('renderEvent', {
              title: note,
              start: start,
              end: end
            }, true);
            // Flash the events on the selected date
            calendar.fullCalendar('flashEvents', start);
          }
          // Unselect the date range
          calendar.fullCalendar('unselect');
        },
        eventClick: function(calEvent, jsEvent, view) {
          // Show a dialog to confirm if the user wants to remove the event
          if (confirm('Are you sure you want to remove the event?')) {
            // Remove the event from the calendar
            calendar.fullCalendar('removeEvents', calEvent._id);
            // Flash the events on the selected date
            calendar.fullCalendar('flashEvents', calEvent.start);
          }
        },
        droppable: true,
        drop: function(date, jsEvent, ui, resourceId) {
          // Get the "watered" and "sunlight" values from the dropped element
          var value = $(ui.helper).data('value');
          // Add an event to the calendar with the value as the title
          calendar.fullCalendar('renderEvent', {
            title: value,
            start: date,
            end: date
          }, true);
          // Flash the events on the dropped date
          calendar.fullCalendar('flashEvents', date);
        },
        events: [
          // You can load events from a JSON feed or add them manually
          // Example:
          // {
          //   title: 'Event 1',
          //   start: '2023-03-28',
          //   end: '2023-03-28'
          // },
        ]
      });

      // Make the "watered" and "sunlight" elements draggable
      $('.draggable').draggable({
        helper: 'clone',
        revert: 'invalid'
      });
    });

    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
  </script>
</head>
<body>

  <div class="sayd">
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="dashboard.php">Home</a>
    <a href="#">Profile</a>
    <a href="writer.html">For Writers</a>
    <a href="index.html">Signout</a>
    </div>

  <div class="serts">

    <div class="cont11">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; AQUAFLANTS</span>
    </div>

    <div class="cont12">
        <form id="sers" action="search.php" method="post">
            <input type="search" id="search-input" name="search" list="search-suggestions" placeholder="Search..." size="100">
            <datalist id="search-suggestions">
            <option value="Angiosperms">
            <option value="Ferns">
            <option value="Succulents">
            <option value="Epiphytes">
            <option value="Houseplants">
            </datalist>
            <button type="submit">Search</button>
        </form>

      </div>
    </div>
  </div>
  
  <div id='wrap'>

<div id='external-events'>
  <h4>Drag and Drop</h4>

  <div id='external-events-list'>
    <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
      <div class='fc-event-main'>Watered</div>
    </div>
    <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
      <div class='fc-event-main'>Sunlight</div>
    </div>
  </div>

  <p>
    <input type='checkbox' id='drop-remove' />
    <label for='drop-remove'>remove after drop</label>
  </p>
</div>

<div id='calendar-wrap'>
    <div id='calendar'></div>
</div>
</body>

</html>
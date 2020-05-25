<!DOCTYPE html>
<html>

<head>
    <title>Sevenhills Med Attendance Calenndar</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<link rel="stylesheet" href={{asset('public/fullcalendar/bootstrap.min.css')}} />

<script src={{asset('public/fullcalendar/jquery.min.js')}}></script>

<link rel="stylesheet" href={{asset('public/fullcalendar/fullcalendar.css')}} />

<script src={{asset('public/fullcalendar/moment.min.js')}}></script>

<script src={{asset('public/fullcalendar/fullcalendar.js')}}></script>

<body>
    <div class="container">

        <div class="response"></div>

        <div id='calendar'></div>

    </div>
</body>
<script>
    $(document).ready(function () {
          var SITEURL = "{{url('/')}}";
  
          $.ajaxSetup({
  
            headers: {
  
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  
            }
  
          });
          var calendar = $('#calendar').fullCalendar({
              editable: true,
              events: SITEURL + "/fullcalendareventmaster",
              displayEventTime: true,
              editable: true,
              eventRender: function (event, element, view) {
  
                  if (event.allDay === 'true') {
  
                      event.allDay = true;
  
                  } else {
  
                      event.allDay = false;
  
                  }
  
              },
              selectable: true,
              selectHelper: true,
              select: function (start, end, allDay) {
                  var title = prompt('Event Title:');
                  if (title) {
                      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                      $.ajax({
  
                          url: SITEURL + "/fullcalendareventmaster/create",
  
                          data: 'title=' + title + '&start=' + start + '&end=' + end,
  
                          type: "POST",
  
                          success: function (data) {
                              displayMessage("Added Successfully");
  
                          }
  
                      });
  
                      calendar.fullCalendar('renderEvent',
                              {
                                  title: title,
  
                                  start: start,
  
                                  end: end,
  
                                  allDay: allDay
  
                              },
  
                      true
                              );
                  }
  
                  calendar.fullCalendar('unselect');
  
              },
              eventDrop: function (event, delta) {
  
                          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
  
                          var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
  
                          $.ajax({
  
                              url: SITEURL + '/fullcalendareventmaster/update',
  
                              data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
  
                              type: "POST",
  
                              success: function (response) {
  
                                  displayMessage("Updated Successfully");
  
                              }
  
                          });
  
                      },
  
              eventClick: function (event) {
                  var deleteMsg = confirm("Do you really want to delete?");
                  if (deleteMsg) {
                      $.ajax({
                          type: "POST",
  
                          url: SITEURL + '/fullcalendareventmaster/delete',
  
                          data: "&id=" + event.id,
  
                          success: function (response) {
  
                              if(parseInt(response) > 0) {
  
                                  $('#calendar').fullCalendar('removeEvents', event.id);
  
                                  displayMessage("Deleted Successfully");
                              }
                          }
                      });
                  }
              }
          });
    });
    function displayMessage(message) {
  
      $(".response").html(""+message+"");
      setInterval(function() { $(".success").fadeOut(); }, 1000);
  
    }
  
</script>

</html>
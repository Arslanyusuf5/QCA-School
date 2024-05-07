<?php

function counterVariable($startcounter, $endcounter)
{
    $html = ''; // Initialize an empty string to store the generated HTML

    for ($counter = $startcounter; $counter <= $endcounter; $counter += 2) {
        $start_date_first_month = date('Y-' . str_pad($counter, 2, '0', STR_PAD_LEFT) . '-01');
        $end_date_first_month = date('Y-m-t', strtotime($start_date_first_month));

        $start_date_second_month = date('Y-' . str_pad($counter + 1, 2, '0', STR_PAD_LEFT) . '-01');
        $end_date_second_month = date('Y-m-t', strtotime($start_date_second_month));

        // Get the month name for the first and second month
        $month_name_first_month = date('F', strtotime($start_date_first_month));
        $month_name_second_month = date('F', strtotime($start_date_second_month));

        $html .= '<div class="col-12 d-xxl-flex d-block">';
        $html .= '<div class="outer_wrapper_one w-100">';
        $html .= '<div class="month-heading">' . $month_name_first_month . '</div>';
        $shortcode_first_month = '[tribe_events start_date="' . $start_date_first_month . '" end_date="' . $end_date_first_month . '"]';
        $html .= do_shortcode($shortcode_first_month);
        $html .= '</div>';

        $html .= '<div class="outer_wrapper_two w-100">';
        $html .= '<div class="month-heading">' . $month_name_second_month . '</div>';
        $shortcode_second_month = '[tribe_events start_date="' . $start_date_second_month . '" end_date="' . $end_date_second_month . '"]';
        $html .= do_shortcode($shortcode_second_month);
        $html .= '</div>';
        $html .= '</div>';
    }

    return $html; // Return the generated HTML
}

?>

<section class="calender__shortcode">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12 col-lg-6">
                 <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">First Semester</button>
                         <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Second Semester</button>
                     </div>
                 </nav>
             </div>
             <div class="col-12 col-lg-6">
                 <div class="list__items__title d-flex">
                     <div class="title">
                         <h3>Special Dates Events 2023-24</h3>
                     </div>
                     <div class="date">
                         <h4>Dates</h4>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tab-content" id="nav-tabContent">
             <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                 <div class="calender__shortcode__wrapper">
                     <div class="row">
                         <div class="col-12 col-lg-6">
                             <div class="event__month">
                                 <?php echo counterVariable(1, 6);  ?>
                             </div>
                         </div>
                         <div class="col-12 col-lg-6">
                             <div class="events__list">
                                 <?php echo do_shortcode('[tribe_events view="month" start_date="' . date('Y-01-01') . '" end_date="' . date('Y-06-30') . '"]');
                                    ?>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                 <div class="calender__shortcode__wrapper">
                     <div class="row">
                         <div class="col-12 col-lg-6">
                             <div class="event__month">
                                 <?php echo counterVariable(7, 12); ?>
                             </div>
                         </div>
                         <div class="col-12 col-lg-6">
                             <div class="events__list">
                                 <?php echo do_shortcode('[tribe_events view="month" start_date="' . date('Y-07-01') . '" end_date="' . date('Y-12-31') . '"]'); ?>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
 </section>

 
 <script>
     $(".event__month").on("click", ".tribe-events-calendar-month__day-cell", function() {
         var currentBtn = $(this);

         var commonContainer = $('.events__list');
         commonContainer.css('display', 'none');

         $('.paragraph-remover').remove();
         $('.view-all-button').remove();


         var secondSemesterToggler = $('#nav-profile-tab');
         secondSemesterToggler.on('click', function() {
             commonContainer.css('display', 'block');
             $('.paragraph-remover').remove();
             $('.view-all-button').remove();
             $('.tribe-events-calendar-month-mobile-events__mobile-day--show').remove();
         });

         var firstSemesterToggler = $('#nav-home-tab');
         firstSemesterToggler.on('click', function() {
             commonContainer.css('display', 'block');
             $('.paragraph-remover').remove();
             $('.view-all-button').remove();
             $('.tribe-events-calendar-month-mobile-events__mobile-day--show').remove();
         });


         $('.event__month .tribe-events-calendar-month__day-cell--selected').each(function() {
             var currentLoopElement = $(this);
             if (!currentLoopElement.is(currentBtn)) {
                 currentLoopElement.removeClass('tribe-events-calendar-month__day-cell--selected');
             }
         });

         $('.tribe-events-calendar-month-mobile-events__mobile-day--show').each(function() {
             var currentLoopElement = $(this);
             dateTime = formatDate(currentBtn.find('.tribe-events-calendar-month__day-date-daynum').attr('datetime'));
             selector = 'div#tribe-events-calendar-mobile-day-' + dateTime;
             currentElement = $(selector);
             if (!currentLoopElement.is(currentElement)) {
                 currentLoopElement.addClass('tribe-events-calendar-month-mobile-events__mobile-day');
                 currentLoopElement.css('display', 'none');
                 currentLoopElement.removeClass('tribe-events-calendar-month-mobile-events__mobile-day--show');
             } else {
                 currentLoopElement.addClass('tribe-events-calendar-month-mobile-events__mobile-day--show');
                 currentLoopElement.css('display', 'block');
             }
         });

         var emptyDateEvent = $('.tribe-events-calendar-month-mobile-events__mobile-day--show');
         if (emptyDateEvent.length > 0) {
             if (emptyDateEvent.find('article').length > 0) {} else {
                 emptyDateEvent.html('<p class="paragraph-remover">There is no event on this date</p>');
             }
         } else {
             commonContainer.css('display', 'block');
         }

     });

     function formatDate(inputDate) {

         var parts = inputDate.split('-');
         var year = parts[0];
         var month = parts[1];
         var day = parts[2];

         day = parseInt(day, 10).toString();

         var formattedDate = year + '-' + month + '-' + day;

         return formattedDate;
     }
 </script>
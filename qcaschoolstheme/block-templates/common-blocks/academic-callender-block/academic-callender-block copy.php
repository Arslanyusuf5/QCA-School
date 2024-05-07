 <section class="calender__shortcode">
     <div class="container-fluid">
         <div class="row">
             <div class="col-6">
                 <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">First Semester</button>
                         <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Second Semester</button>
                     </div>
                 </nav>
             </div>
             <div class="col-6">
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
                 <div class="row">
                     <div class="col-6">
                         <div class="event__month">
                             <?php echo counterVariable( 1 , 6);  ?>
                         </div>
                     </div>
                     <div class="col-6">
                         <div class="events__list">
                             <?php echo do_shortcode('[tribe_events view="list" start_date="' . date('Y-01-01') . '" end_date="' . date('Y-06-30') . '"]'); ?>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                 <div class="row">
                     <div class="col-6">
                         <div class="event__month">
                            <?php echo counterVariable( 7 , 12); ?>
                         </div>
                     </div>
                     <div class="col-6">
                         <div class="events__list">
                             <?php echo do_shortcode('[tribe_events view="list" start_date="' . date('Y-07-01') . '" end_date="' . date('Y-12-31') . '"]'); ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>

 <?php

    function counterVariable ($startcounter, $endcounter) {

        for ($counter = $startcounter; $counter <= $endcounter; $counter += 2) {
            $start_date_first_month = date('Y-' . str_pad($counter, 2, '0', STR_PAD_LEFT) . '-01');
            $end_date_first_month = date('Y-m-t', strtotime($start_date_first_month));

            $start_date_second_month = date('Y-' . str_pad($counter + 1, 2, '0', STR_PAD_LEFT) . '-01');
            $end_date_second_month = date('Y-m-t', strtotime($start_date_second_month));

            // Get the month name for the first and second month
            $month_name_first_month = date('F', strtotime($start_date_first_month));
            $month_name_second_month = date('F', strtotime($start_date_second_month));

    ?>
         <div class="col-12 d-flex">
             <div class="outer_wrapper_one w-100">
                 <div class="month-heading"><?php echo $month_name_first_month; ?></div>
                 <?php
                    $shortcode_first_month = '[tribe_events start_date="' . $start_date_first_month . '" end_date="' . $end_date_first_month . '"]';
                    echo do_shortcode($shortcode_first_month);
                    ?>
             </div>

             <div class="outer_wrapper_two w-100">
                 <div class="month-heading"><?php echo $month_name_second_month; ?></div>
                 <?php
                    $shortcode_second_month = '[tribe_events start_date="' . $start_date_second_month . '" end_date="' . $end_date_second_month . '"]';
                    echo do_shortcode($shortcode_second_month);
                    ?>
             </div>
         </div>
 <?php
        }
    }

    ?>
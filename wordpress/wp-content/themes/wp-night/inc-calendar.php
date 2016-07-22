<div class="calendar-block">
<?php

  $current_year = date("Y");
  $current_month = date("m");
  $current_date = date("d");

  $years = [2016, 2017, 2018];
  $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  $days = 31;

  foreach ($years as $year) {

    foreach ($months as $month) {

      if ( $month === 'January' ) {
        $month_num = '01';
      } else if ( $month === 'February' ) {
        $month_num = '02';
      } else if ( $month === 'March' ) {
        $month_num = '03';
      } else if ( $month === 'April' ) {
        $month_num = '04';
      } else if ( $month === 'May' ) {
        $month_num = '05';
      } else if ( $month === 'June' ) {
        $month_num = '06';
      } else if ( $month === 'July' ) {
        $month_num = '07';
      } else if ( $month === 'August' ) {
        $month_num = '08';
      } else if ( $month === 'September' ) {
        $month_num = '09';
      } else if ( $month === 'October' ) {
        $month_num = '10';
      } else if ( $month === 'November' ) {
        $month_num = '11';
      } else if ( $month == 'December' ) {
        $month_num = '12';
      }

      if ( $month == 'February' ) {
        $days = 28;
      } else if ( $month == 'June' || $month == 'September' || $month == 'November' ) {
        $days = 30;
      }
      $stringed_cur_month = strval ($month_num);
      $stringed_month_num = strval ($current_month);
      if ( $current_year == $year && $stringed_cur_month  === $stringed_month_num) {
        $calendar_class = ' active-month';
      } else {
        $calendar_class = '';
      }
      echo '<div class="calendar-container'. $calendar_class .'" year-id="' . $year .'" month-id="'. $month_num .'"><h6 class="moth-title">'.$month.'<span>'.$year.'</span></h6>';
      echo '<ul class="booking-calendar">';
      for ($i=1; $i <= $days; $i++) {
          $day = $i;
          if ( $day == 0 || $day == 1 || $day == 2 || $day == 3 || $day == 4 || $day == 5 || $day == 6 || $day == 7 || $day == 8 || $day == 9 ) {
            $day ='0'.$i;
          }
          if ( $year == $current_year && $stringed_cur_month  === $stringed_month_num && $i == $current_date) {
            $day_class = 'class="active-day" ';
          } else {
            $day_class = '';
          }
      ?>

      <li <?php echo $day_class; ?> date-id="<?php echo $year; ?><?php echo $month_num; ?><?php echo $day; ?>" year-id="<?php echo $year; ?>" month-id="<?php echo $month_num; ?>" day-id="<?php echo $i; ?>"><?php echo $i; ?></li>


<?php  }
echo '</ul><!-- /.booking-calendar --></div><!-- /.calendar-container -->';
    }
  } ?>
<div class="calendar-navi"><span class="navi-back"></span><span class="navi-next"></span></div><!-- /.calendar-navi -->
</div><!-- /.calendar-block -->

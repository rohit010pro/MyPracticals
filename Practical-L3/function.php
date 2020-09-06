<?php
      //  Prime Function
      function isPrime($num)
      {
        for ($i = 2; $i < $num; $i++)
          if ($num % $i == 0)
            return false;
        return true;
      }

      date_default_timezone_set("Asia/kolkata");
      // For Leap Years 
      function countLeap($year1, $year2)
      {
          $count = 0;
          for ($i = $year1; $i < $year2; $i++) {
              if (($i % 4 == 0 && $i % 100 != 0) || $i % 400 == 0)
                  $count++;
          }
          return $count;
      }
      
      // For Age
      function findAge($dob)
      {
          $dob = strtotime($dob);
          $currentDate = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
          $leapYrs = countLeap(date("Y", $dob), date("Y"));
          
          $diff = $currentDate - $dob - ($leapYrs*60*60*24);
          $years = floor($diff / (60*60*24*365));  //Years
          $rem = $diff % (60*60*24*365);
  
          $months = floor($rem / (60*60*24*30));   //Months
          $rem = $rem % (60*60*24*30);
          
          $days = floor($rem / (60*60*24));        // Days
  
          $age = array("year" => $years, "month" => $months, "day" => $days);
  
          return $age;
      }
      
      // For Days Remaining
      function findDays($dob)
      {
          $dob = strtotime($dob);
          $currentDate = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
          $currentYrDob = mktime(0, 0, 0, date("m", $dob), date("d", $dob), date("Y"));
          $nextYrDob = mktime(0, 0, 0, date("m", $dob), date("d", $dob), date("Y") + 1);
  
          // For Days Remaining
          if (date("z", $dob) > date("z")) {
              // Birthday Coming              
              $daysRemain = $currentYrDob - $currentDate;
              $days = floor($daysRemain / (60*60*24));  // Days For DOB
              return $days;
          } else {
              // Birthday Gone
              $daysRemain = $nextYrDob - $currentDate;
              $days = floor($daysRemain / (60*60*24))-1;  // Days For Next DOB
              return $days;
          }
      }
  
    //   For Words Count
    function isContainSpace($str)
    {
        $chArr = str_split($str);
        foreach ($chArr as $ch)
            if ($ch == '.') return true;
        return false;
    }

    function countWords($str)
    {
        $strArr = explode(" ", $str);
        $words = array();

        for ($i = 0; $i < count($strArr); $i++) 
        {
            if (isContainSpace($strArr[$i])) {
                $arr = explode(".", $strArr[$i]);
                foreach($arr as $s) 
                $words[] = $s; 
            }
            else
            $words[] = $strArr[$i];
        }
        
        $countWordsArr = array();
        foreach($words as $word)
        {
            // if(strlen($word) == 1){
            //     $countWordsArr[1][] = $word; 
            // }
            // else if(strlen($word) == 2){
            //     $countWordsArr[2][] = $word; 
            // }
            // else if(strlen($word) == 3){
            //     $countWordsArr[3][] = $word; 
            // }
            // else if(strlen($word) == 4){
            //     $countWordsArr[4][] = $word; 
            // }
            // else if(strlen($word) == 5){
            //     $countWordsArr[5][] = $word; 
            // }
            $countWordsArr[strlen($word)][] = $word;
        }
        return $countWordsArr;
    }

?>
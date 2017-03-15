<?php

/**
 * @copyright 2005-2008 OpenPNE Project
 * @license   http://www.php.net/license/3_01.txt PHP License 3.01
 */
// / 2013.12.21 消費税改定対応 begin
function get_pre_id ($pre_id, $db)
{
    $sql = "select * from a_pre_id where pre_id = '$pre_id'";
    $result = db_get_all($sql, $db);
    if ($result) {
        return (1);
    } else {
        return (0);
    }
}

function tmp_room_price_convert (&$tab, $tax)
{
    for ($i = 0; $i < count($tab); $i ++) {
        
        // / 本体価格計算
        if ($tab[$i]["k_lowest_price"])
            $tab[$i]["k_lowest_price"] = round(
                    $tab[$i]["k_lowest_price"] / 1.05);
        if ($tab[$i]["price1"])
            $tab[$i]["price1"] = round($tab[$i]["price1"] / 1.05);
        if ($tab[$i]["price2"])
            $tab[$i]["price2"] = round($tab[$i]["price2"] / 1.05);
        if ($tab[$i]["price3"])
            $tab[$i]["price3"] = round($tab[$i]["price3"] / 1.05);
        if ($tab[$i]["price4"])
            $tab[$i]["price4"] = round($tab[$i]["price4"] / 1.05);
        if ($tab[$i]["price5"])
            $tab[$i]["price5"] = round($tab[$i]["price5"] / 1.05);
        if ($tab[$i]["price6"])
            $tab[$i]["price6"] = round($tab[$i]["price6"] / 1.05);
        if ($tab[$i]["price7"])
            $tab[$i]["price7"] = round($tab[$i]["price7"] / 1.05);
        if ($tab[$i]["k_price2"])
            $tab[$i]["k_price2"] = round($tab[$i]["k_price2"] / 1.05);
        if ($tab[$i]["k_price3"])
            $tab[$i]["k_price3"] = round($tab[$i]["k_price3"] / 1.05);
        if ($tab[$i]["k_highest_price"])
            $tab[$i]["k_highest_price"] = round(
                    $tab[$i]["k_highest_price"] / 1.05);
        if ($tab[$i]["price8"])
            $tab[$i]["price8"] = round($tab[$i]["price8"] / 1.05);
        if ($tab[$i]["price9"])
            $tab[$i]["price9"] = round($tab[$i]["price9"] / 1.05);
        if ($tab[$i]["price12"])
            $tab[$i]["price12"] = round($tab[$i]["price12"] / 1.05);
        if ($tab[$i]["price13"])
            $tab[$i]["price13"] = round($tab[$i]["price13"] / 1.05);
        if ($tab[$i]["price14"])
            $tab[$i]["price14"] = round($tab[$i]["price14"] / 1.05);
        if ($tab[$i]["price15"])
            $tab[$i]["price15"] = round($tab[$i]["price15"] / 1.05);
        if ($tab[$i]["price16"])
            $tab[$i]["price16"] = round($tab[$i]["price16"] / 1.05);
        if ($tab[$i]["price17"])
            $tab[$i]["price17"] = round($tab[$i]["price17"] / 1.05);
        if ($tab[$i]["price18"])
            $tab[$i]["price18"] = round($tab[$i]["price18"] / 1.05);
        if ($tab[$i]["price19"])
            $tab[$i]["price19"] = round($tab[$i]["price19"] / 1.05);
        if ($tab[$i]["price20"])
            $tab[$i]["price20"] = round($tab[$i]["price20"] / 1.05);
        if ($tab[$i]["price21"])
            $tab[$i]["price21"] = round($tab[$i]["price21"] / 1.05);
        if ($tab[$i]["price22"])
            $tab[$i]["price22"] = round($tab[$i]["price22"] / 1.05);
        if ($tab[$i]["price23"])
            $tab[$i]["price23"] = round($tab[$i]["price23"] / 1.05);
        if ($tab[$i]["price24"])
            $tab[$i]["price24"] = round($tab[$i]["price24"] / 1.05);
            
            // / 消費税額計算
        if ($tab[$i]["k_lowest_price"])
            $tab[$i]["k_lowest_price"] = round(
                    $tab[$i]["k_lowest_price"] * $tax);
        if ($tab[$i]["price1"])
            $tab[$i]["price1"] = round($tab[$i]["price1"] * $tax);
        if ($tab[$i]["price2"])
            $tab[$i]["price2"] = round($tab[$i]["price2"] * $tax);
        if ($tab[$i]["price3"])
            $tab[$i]["price3"] = round($tab[$i]["price3"] * $tax);
        if ($tab[$i]["price4"])
            $tab[$i]["price4"] = round($tab[$i]["price4"] * $tax);
        if ($tab[$i]["price5"])
            $tab[$i]["price5"] = round($tab[$i]["price5"] * $tax);
        if ($tab[$i]["price6"])
            $tab[$i]["price6"] = round($tab[$i]["price6"] * $tax);
        if ($tab[$i]["price7"])
            $tab[$i]["price7"] = round($tab[$i]["price7"] * $tax);
        if ($tab[$i]["k_price2"])
            $tab[$i]["k_price2"] = round($tab[$i]["k_price2"] * $tax);
        if ($tab[$i]["k_price3"])
            $tab[$i]["k_price3"] = round($tab[$i]["k_price3"] * $tax);
        if ($tab[$i]["k_highest_price"])
            $tab[$i]["k_highest_price"] = round(
                    $tab[$i]["k_highest_price"] * $tax);
        if ($tab[$i]["price8"])
            $tab[$i]["price8"] = round($tab[$i]["price8"] * $tax);
        if ($tab[$i]["price9"])
            $tab[$i]["price9"] = round($tab[$i]["price9"] * $tax);
        if ($tab[$i]["price10"])
            $tab[$i]["price10"] = round($tab[$i]["price10"] * $tax);
        if ($tab[$i]["price11"])
            $tab[$i]["price11"] = round($tab[$i]["price11"] * $tax);
        if ($tab[$i]["price12"])
            $tab[$i]["price12"] = round($tab[$i]["price12"] * $tax);
        if ($tab[$i]["price13"])
            $tab[$i]["price13"] = round($tab[$i]["price13"] * $tax);
        if ($tab[$i]["price14"])
            $tab[$i]["price14"] = round($tab[$i]["price14"] * $tax);
        if ($tab[$i]["price15"])
            $tab[$i]["price15"] = round($tab[$i]["price15"] * $tax);
        if ($tab[$i]["price16"])
            $tab[$i]["price16"] = round($tab[$i]["price16"] * $tax);
        if ($tab[$i]["price17"])
            $tab[$i]["price17"] = round($tab[$i]["price17"] * $tax);
        if ($tab[$i]["price18"])
            $tab[$i]["price18"] = round($tab[$i]["price18"] * $tax);
        if ($tab[$i]["price19"])
            $tab[$i]["price19"] = round($tab[$i]["price19"] * $tax);
        if ($tab[$i]["price20"])
            $tab[$i]["price20"] = round($tab[$i]["price20"] * $tax);
        if ($tab[$i]["price21"])
            $tab[$i]["price21"] = round($tab[$i]["price21"] * $tax);
        if ($tab[$i]["price22"])
            $tab[$i]["price22"] = round($tab[$i]["price22"] * $tax);
        if ($tab[$i]["price23"])
            $tab[$i]["price23"] = round($tab[$i]["price23"] * $tax);
        if ($tab[$i]["price24"])
            $tab[$i]["price24"] = round($tab[$i]["price24"] * $tax);
    }
}


function tmp_pack_price_convert (&$tab, $tax)
{
    for ($i = 0; $i < count($tab); $i ++) {
        
        if ($tab[$i]["koma2"] == 0) {
            
            // / 本体価格計算
            if ($tab[$i]["price"])
                $tab[$i]["price"] = round($tab[$i]["price"] / 1.05);
                
                // / 消費税額計算
            if ($tab[$i]["price"])
                $tab[$i]["price"] = round($tab[$i]["price"] * $tax);
        }
    }
}
function checkusedate($hall_id, $room_id, $year, $month, $day,$usedate=array())
{
    if(! check_holiday($hall_id, $room_id, $year, $month, 
                        $day))
    {
        // check user in c_holidate
        $sql = "select * from c_holiday where month = $month and day = $day";
        if(db_get_all($sql)){
            if(in_array('4',$usedate) )
            {
                return (1);
            }
            else{
                return (0);
            }
        }else{
            $weekday = date("l",strtotime($year."-".$month."-".$day));
            $weekday = strtolower($weekday);
            if(in_array('1',$usedate) &&  $weekday !=='saturday' &&  $weekday !=='sunday' )
            {
                switch ($weekday) {
                    case 'monday':
                       return(1);
                    break;
                case 'tuesday':
                       return(1);
                    break;
                case 'wednesday':
                       return(1);
                    break;
                case 'thursday':
                       return(1);
                    break;
                case 'friday':
                    return(1);
                    break;
                
                default:
                    return(0);
                    break;
                }
            }
            else if(in_array('2',$usedate) && $weekday=='saturday'){
                return (1);
            }else if(in_array('3',$usedate) && $weekday=='sunday'){
                return (1);
            }
           
            else{
                return 0;
            }
        }
        
    }
    
    else 
    {
        if(in_array('4',$usedate))
        {
            return (1);
        }
        else{
            return (0);
        }

    }
    return (0);
}

/**
 * function checkDayHoliday
 * @author RSDN-hieudt
 * @since 2016-06-29
 * @param unknown $data
 * @param unknown $checks
 * @return multitype:
 */
function checkDayHoliday($year, $month, $day)
{
    $sql = "select * from c_holiday where month = $month and day = $day";
    if(db_get_all($sql)){
        return (4);
    }
    else{
        $date = strtolower(date("l", strtotime($year."-".$month."-".$day)));
        if($date == 'saturday'){
            return (2);
        }
        if($date == 'sunday'){
            return (3);
        }
        else{
            return (1);
        }
    }
}

class admin_page_set_reserve extends OpenPNE_Action
{

    function execute ($requests)
    {
        /*
         * GMO_RUNSYSTEM
         * 201404-18
         */
        $_SESSION['insert_pre_reserve'] = 1;
        $sql = "delete from a_pre_id where limit_datetime < now()";
        db_get_all($sql, $db);
        $sql = "delete from a_pre_reserve where limit_datetime < now()";
        db_get_all($sql, $db);
        $sql = "delete from a_pre_rv where limit_datetime < now()";
        db_get_all($sql, $db);
        $sql = "delete from a_pre_rs where limit_datetime < now()";
        db_get_all($sql, $db);
        // ID発行
        if (! $_REQUEST['pre_id']) {
            $pre_id = rand(10000, 999999999);
            while (get_pre_id($pre_id, $db)) {
                $pre_id = rand(10000, 999999999);
            }
            $sql = "insert into a_pre_id (pre_id, limit_datetime) values ('$pre_id', NOW() + INTERVAL 3 hour)";
            db_get_all($sql, $db);
        } else {
            if (preg_match("/^[0-9]+$/", $_REQUEST['pre_id'])) {
                $pre_id = $_REQUEST['pre_id'];
				if(isset($_REQUEST['reset_preid'])){
					$sql="delete from a_tmp_user where pre_id='$pre_id'";
					db_get_all($sql);
				}
            } else {
                HTTP::redirect("error.php");
            }
        }
        $username = $_SESSION['username'];
        $_SESSION[$username][$pre_id] = $pre_id;
        $sql = "delete from a_rental_stop where limit_datetime < now() and flag = 0";
        db_get_all($sql);
        $sql = "select name, atoffice_auth_type, hall_id from c_admin_user where username = '" .
                 $_SESSION['_authsession']['username'] . "'";
        $result = db_get_all($sql);
        $this->set('name', $result[0]['name']);
        $this->set('atoffice_auth_type', $result[0]['atoffice_auth_type']);
        
        $hall_id = $result[0]['hall_id'];
        // 日付
        if (! is_null($_REQUEST['year']) and ! is_null($_REQUEST['month']) and
                 ! is_null($_REQUEST['day'])) {
            $year = $_REQUEST['year'];
            $month = $_REQUEST['month'];
            $day = $_REQUEST['day'];
            
            if ($day <= 0) {
                $month --;
                if ($month <= 0) {
                    $year --;
                    $month = 12;
                }
                for ($x = 28; checkdate($month, $x, $year); $x ++) {
                    $day = $x;
                }
            } elseif (! checkdate($month, $day, $year)) {
                $day = 1;
                $month ++;
                if (! checkdate($month, $day, $year)) {
                    $year ++;
                    $month = 1;
                }
            }
        } else {
            $year = date("Y");
            $month = date("m");
            $day = date("d");
        }
        $_SESSION['year'] = $year;
        $_SESSION['month'] = $month;
        $_SESSION['day'] = $day;
        $tmp_ymd = sprintf("%04d-%02d-%02d 00:00:00", $year, $month, $day);
        $tmp_sql = "";
        $tmp_sql .= "select rate from a_tax "; // / 消費税率テーブル
        $tmp_sql .= "where stadate <= '$tmp_ymd' "; // / 適用開始日
        $tmp_sql .= "order by stadate desc "; // / 適用開始日の降順
        $tmp_sql .= "limit 0, 1"; // / 先頭１件
        $tmp_tab = db_get_all($tmp_sql, $db);
        $tmp_tax = $tmp_tab[0]['rate'] / 100 + 1; // / 消費税率
        $this->set('week', 
                get_week(
                        $year . sprintf("%02d", $month) . sprintf("%02d", $day)));
        
        $this->set('this_year', date("Y"));
        $month_list = array();
        for ($x = 1; $x <= 12; $x ++) {
            array_push($month_list, $x);
        }
        if ($_REQUEST['old_member']) {
            $old_member = $_REQUEST['old_member'];
        } else {
            $old_member = '';
        }
        if ($_REQUEST['old_hall']) {
            $old_hall = $_REQUEST['old_hall'];
        } else {
            $old_hall = '';
        }
        $this->set('old_hall', $old_hall);
        $this->set('old_member', $old_member);
        $this->set('month_list', $month_list);
        $day_list = array();
        $week_list = array();
        for ($x = 1; $x <= 31; $x ++) {
            array_push($day_list, $x);
            array_push($week_list, 
                    get_week(
                            $year . sprintf("%02d", $month) . sprintf("%02d", 
                                    $x)));
        }
        $this->set('day_list', $day_list);
        $this->set('week_list', $week_list);
        $sql = "select * from a_hall where flag=0";
        $hall_list = db_get_all($sql);
        if ($_REQUEST['hall_list']) {
            $hall_id = $_REQUEST['hall_list'];
        } else {
            $hall_id = $hall_list[0]['hall_id'];
        }
        /*
         * if(strtotime("$year-$month-$day")<strtotime(date("Y-m-d")))
         * {
         * $msg2="ERROR SELECT PAST";
         * $year = date("Y");
         * $month = date("m");
         * $day = date("d");
         * $this->set('year',$year);
         * $this->set('month',$month);
         * $this->set('day',$day);
         * $this->set('hall_id',$hall_id);
         * $this->set('pre_id',$pre_id);
         * $this->set('msg2',$msg2);
         *
         * return 'success';
         * }
         */
        $_SESSION['hall_id'] = $hall_id;
        $this->set('hall_list', $hall_list);
        $sql = "select * from a_hall where hall_id = $hall_id";
        $hall_data = db_get_all($sql);
        $hall_data = $hall_data[0];
        $open_time = array();
        $checkTime = checkDayHoliday($year, $month, $day);
        $beginS = $hall_data['begin'];
        $finS = $hall_data['finish'];
        $usedate = explode(',',$hall_data['usedate']);
        if($checkTime == 1){
        	if($hall_data['begin1'] != '' && $hall_data['finish1'] != '' )
        	{
        		$beginS = $hall_data['begin1'];
        		$finS = $hall_data['finish1'];
            	$hall_data['finish'] = $hall_data['finish1'];
        		$hall_data['begin'] = $hall_data['begin1'];
        	}
            if($hall_data['begin_often1'] !='' &&  $hall_data['finish_often1'] != '' && in_array($checkTime,$usedate))
            {
            	$hall_data['begin_often']= $hall_data['begin_often1'];
            	$hall_data['finish_often'] = $hall_data['finish_often1'];
            	
            }
        	
        }
        else if($checkTime == 2){
            if($hall_data['begin2'] != '' && $hall_data['finish2'] != '' )
        	{
        		$beginS = $hall_data['begin2'];
            	$finS = $hall_data['finish2'];
            	$hall_data['finish'] = $hall_data['finish2'];
        		$hall_data['begin'] = $hall_data['begin2'];
        	}
            if($hall_data['begin_often2'] !='' &&  $hall_data['finish_often2'] != '' && in_array($checkTime,$usedate))
            {
            	$hall_data['begin_often']= $hall_data['begin_often2'];
            	$hall_data['finish_often'] = $hall_data['finish_often2'];
            }
        }
        else if($checkTime == 3){
            if($hall_data['begin3'] != '' && $hall_data['finish3'] != '' )
        	{
        		$beginS = $hall_data['begin3'];
            	$finS = $hall_data['finish3'];
            	$hall_data['finish'] = $hall_data['finish3'];
        		$hall_data['begin'] = $hall_data['begin3'];
        	}
            if($hall_data['begin_often3'] !='' &&  $hall_data['finish_often3'] != '' && in_array($checkTime,$usedate))
            {
            	$hall_data['begin_often']= $hall_data['begin_often3'];
            	$hall_data['finish_often'] = $hall_data['finish_often3'];
            }
        }
        else if($checkTime == 4){
        	if($hall_data['begin4'] != '' && $hall_data['finish4'] != '' )
        	{
        		$beginS = $hall_data['begin4'];
            	$finS = $hall_data['finish4'];
            	$hall_data['finish'] = $hall_data['finish4'];
        		$hall_data['begin'] = $hall_data['begin4'];
        	}
           
     	    if($hall_data['begin_often4'] !='' &&  $hall_data['finish_often4'] != '' && in_array($checkTime,$usedate))
            {
            	$hall_data['begin_often']= $hall_data['begin_often4'];
            	$hall_data['finish_often'] = $hall_data['finish_often4'];
            }
        }
        for ($x = $beginS; $x < $finS; $x ++) {
            array_push($open_time, intval($x));
        }
        $col_num = 1;

        // その日のデータを全て取得する。
        $dayday = $year . "-" . $month . "-" . $day . " ";
        $daystart = $dayday . "00:00:00";
        $dayend = $dayday . "23:59:59";
        
        // ----------------------------------------------
        $periodmode = isset($_REQUEST['periodmode']) ? 1 : 0;
        $period = @$_REQUEST['period'];
        if (! $period)
            $period = 31;
        $this->set('period', $period);
        // get usedate
        $usedate = array();
        if(!empty($hall_data['usedate']))
        {
            $usedate = explode(',', $hall_data['usedate']);
        }
        if (! $periodmode) {
            
            //$sql = "select * from a_room where hall_id = $hall_id and flag=1";
            
            $sql = "SELECT ROOM1.*, ROOM2.re_begin_datetime, ROOM2.re_finish_datetime, ROOM2.re_reserve_id,
                    ROOM3.*, ROOM4.*
                FROM
                (
                    SELECT *
                    FROM a_room
                    WHERE  hall_id = $hall_id
                        AND flag=1
                ) AS ROOM1
                 
                LEFT JOIN
                 
                (
                    SELECT  RO.room_id, CAST( GROUP_CONCAT(RE.begin_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS re_begin_datetime,
                        CAST( GROUP_CONCAT(RE.finish_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS re_finish_datetime,
                        CAST( GROUP_CONCAT(RE.reserve_id) AS CHAR(10000) CHARACTER SET utf8 ) AS re_reserve_id
                    FROM a_room AS RO
                    LEFT JOIN a_reserve_list AS RE ON RO.room_id = RE.room_id
                    WHERE RO.hall_id = $hall_id
                        AND RE.hall_id = $hall_id
                        AND RO.flag=1
                        AND RE.cancel_flag=0
                        AND (RE.begin_datetime >= '$daystart' AND '$dayend' > RE.finish_datetime)
                    GROUP BY RO.room_id
                ) AS ROOM2
                ON ROOM1.room_id = ROOM2.room_id
                 
                LEFT JOIN
                
                (
                    SELECT  RO.room_id AS ren_room_id, CAST( GROUP_CONCAT(REN.begin_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_begin_datetime,
                        CAST( GROUP_CONCAT(REN.finish_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_finish_datetime,
                        CAST( GROUP_CONCAT(REN.flag ) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_flag,
                        CAST( GROUP_CONCAT(REN.limit_datetime ) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_limit_datetime,
                        CAST( GROUP_CONCAT(REN.admin_name ) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_admin_name,
                        CAST( GROUP_CONCAT(REN.memo ) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_memo
                    FROM a_room AS RO
                    LEFT JOIN a_rental_stop AS REN ON RO.room_id = REN.room_id
                    WHERE RO.hall_id = $hall_id
                        AND REN.hall_id = $hall_id
                        AND RO.flag=1
                        AND (REN.begin_datetime >= '$daystart' AND '$dayend' > REN.finish_datetime)
                        AND (REN.limit_datetime > NOW() OR REN.flag=1)
                    GROUP BY RO.room_id
                ) AS ROOM3
                ON ROOM1.room_id = ROOM3.ren_room_id
                
                LEFT JOIN 
                (
                    SELECT RO.room_id AS pre_room_id, 
	                   CAST( GROUP_CONCAT( PRE.begin_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS pre_begin_datetime,
	                   CAST( GROUP_CONCAT( PRE.finish_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS pre_finish_datetime
                    FROM a_room AS RO 
	                LEFT JOIN a_pre_reserve AS PRE ON RO.room_id = PRE.room_id 
                    WHERE RO.hall_id = $hall_id
                       AND PRE.hall_id = $hall_id
                       AND RO.flag=1 
	                   AND ( PRE.begin_datetime >= '$daystart' AND '$dayend' > PRE.finish_datetime) 
		               AND  PRE.limit_datetime > NOW()
	                GROUP BY RO.room_id 
	            ) AS ROOM4 
	            ON ROOM1.room_id = ROOM4.pre_room_id 
	
                ORDER BY ROOM1.room_id";
            $room_data = db_get_all($sql, $db);
            tmp_room_price_convert($room_data, $tmp_tax);
            $room_data = $room_data;
            foreach ($room_data as $k => $v) {
                if (! check_holiday($hall_id, $v['room_id'], $year, $month, 
                        $day)) {
                    $room_data[$k]['usedate'] = checkusedate($hall_id, $v['room_id'], $year, $month, 
                        $day,$usedate);
                   
                    
                    $room_data[$k]['begin_often'] = $hall_data['begin_often'];
                    $room_data[$k]['finish_often'] = $hall_data['begin_often'];
                    $room_data[$k]['holiday'] = 0;
                    $room_data[$k]['opentime'] = $open_time;
                    $room_data[$k]['max'] = max($v['num_school'], 
                            $v['num_mouth'], $v['num_theater']);
                    
                    if ($v['type'] == 2) {
                        if ($v['koma'] > 1) {
                            $hosei = $v['koma'] * $v['lowest_koma'];
                        } else {
                            $hosei = $v['lowest_koma'];
                        }
                        $koma = $v['koma'];
                        $min = array();
                        if ($koma == 0.5) {
                            $room_data[$k]['cs'] = 2;
                            $key = 0;
                            foreach ($open_time as $value) {
                                $min[$key]['time'] = sprintf("%02d", $value) .
                                         ':00';
                                $min[$key]['begin_time'] = $min[$key]['time'];
                                $min[$key]['finish_time'] = sprintf("%02d", 
                                        $value) . ':30';
                                if($value < $hall_data['begin_often'] || $value >= $hall_data['finish_often'] )
                                {
                                    $min[$key]['style'] = 1;
                                }
                                else{
                                     $min[$key]['style'] = 0;
                                }
                                $key ++;
                                $min[$key]['time'] = sprintf("%02d", $value) .
                                         ':30';
                                $min[$key]['begin_time'] = $min[$key]['time'];
                                $min[$key]['finish_time'] = sprintf("%02d", 
                                        $value + 1) . ':00';
                                if($value < $hall_data['begin_often'] || $value>= $hall_data['finish_often'] )
                                {
                                    $min[$key]['style'] = 1;
                                }
                                else{
                                     $min[$key]['style'] = 0;
                                }
                                $key ++;
                                
                            }
                            $room_data[$k]['opentime'] = $min;
                            if ($col_num < 2) {
                                $col_num = 2;
                            }
                        } elseif ($koma == 0.25) {
                        	$room_data[$k]['cs'] = 1;
                            foreach ($open_time as $value) {
                                $min[$key]['time'] = sprintf("%02d", $value) .
                                         ':00';
                                $min[$key]['begin_time'] = $min[$key]['time'];
                                $min[$key]['finish_time'] = sprintf("%02d", 
                                        $value) . ':15';
                                if($value < $hall_data['begin_often'] || $value> $hall_data['finish_often'] )
                                {
                                    $min[$key]['style'] = 1;
                                }
                                else{
                                     $min[$key]['style'] = 0;
                                }
                                $key ++;
                                $min[$key]['time'] = sprintf("%02d", $value) .
                                         ':15';
                                $min[$key]['begin_time'] = $min[$key]['time'];
                                $min[$key]['finish_time'] = sprintf("%02d", 
                                        $value) . ':30';
                                if($value < $hall_data['begin_often'] || $value> $hall_data['finish_often'] )
                                {
                                    $min[$key]['style'] = 1;
                                }
                                else{
                                     $min[$key]['style'] = 0;
                                }
                                $key ++;
                                $min[$key]['time'] = sprintf("%02d", $value) .
                                         ':30';
                                $min[$key]['begin_time'] = $min[$key]['time'];
                                $min[$key]['finish_time'] = sprintf("%02d", 
                                        $value) . ':45';
                                if($value < $hall_data['begin_often'] || $value>= $hall_data['finish_often'] )
                                {
                                    $min[$key]['style'] = 1;
                                }
                                else{
                                     $min[$key]['style'] = 0;
                                }
                                $key ++;
                                $min[$key]['time'] = sprintf("%02d", $value) .
                                         ':45';
                                $min[$key]['begin_time'] = $min[$key]['time'];
                                $min[$key]['finish_time'] = sprintf("%02d", 
                                        $value + 1) . ':00';
                                if($value < $hall_data['begin_often'] || $value>= $hall_data['finish_often'] )
                                {
                                    $min[$key]['style'] = 1;
                                }
                                else{
                                     $min[$key]['style'] = 0;
                                }
                                $key ++;
                            }
                            $room_data[$k]['opentime'] = $min;
                            if ($col_num < 3) {
                                $col_num = 3;
                            }
                        } else {
                        	$room_data[$k]['cs'] = 4 * $v['koma'];
                            $count_koma = 0;
                            foreach ($open_time as $value) {
                                $count_koma --;
                                if ($count_koma <= 0) {
                                    if (($value + $v['koma']) <=
                                             $hall_data['finish']) {
                                        $min[$key]['time'] = sprintf("%02d", 
                                                $value) . ':00';
                                        $min[$key]['begin_time'] = $min[$key]['time'];
                                        $min[$key]['finish_time'] = sprintf(
                                                "%02d", $value + 1) . ':00';
                                        if($value < $hall_data['begin_often'] || $value>= $hall_data['finish_often'] )
                                        {
                                            $min[$key]['style'] = 1;
                                        }
                                        else{
                                             $min[$key]['style'] = 0;
                                        }
                                        $key ++;
                                        $count_koma = $v['koma'];
                                    }
                                }
                            }
                            $room_data[$k]['opentime'] = $min;
                        }
                        
                        // その日のデータを全て取得する。
                        /* $dayday = $year . "-" . $month . "-" . $day . " ";
                        $daystart = $dayday . "00:00:00";
                        $dayend = $dayday . "23:59:59"; */
                        
                        /* $sql = "select * from a_reserve_list where hall_id = $hall_id and room_id = " .
                                 $v['room_id'] .
                                 " and cancel_flag=0 and (begin_datetime >= '$daystart' and '$dayend' > finish_datetime)";
                        $today_reserve_flag = db_get_all($sql, $db);
                        
                        $sql = "select * from a_rental_stop where hall_id = $hall_id and room_id = " .
                                 $v['room_id'] .
                                 " and (begin_datetime >= '$daystart' and '$dayend' > finish_datetime) and (limit_datetime > now() or flag=1)";
                        $today_stop_flag = db_get_all($sql, $db); */
                        /*
                         * TODAY CHECK
                         */
                        /* $sql = "select * from a_pre_reserve where  hall_id = $hall_id and room_id = " .
                                 $v['room_id'] .
                                 " and (begin_datetime >= '$daystart' and '$dayend' > finish_datetime) and limit_datetime > now()";
                        $today_checked_flag = db_get_all($sql, $db); */
                        
                        foreach ($room_data[$k]['opentime'] as $key => $val) {
                            $room_data[$k]['opentime'][$key]['reserved'] = 0;
                            $datetime = $year . "-" . $month . "-" . $day . " " .
                                     $val['time'] . ":00";
                            $strdt = strtotime($datetime);
                            
                            /*
                             * // 重なる予約
                             * $sql = "select reserve_id from a_reserve_list
                             * where hall_id = $hall_id and room_id =
                             * ".$v['room_id']." and cancel_flag=0 and
                             * (begin_datetime <= '$datetime' and '$datetime' <
                             * finish_datetime)";
                             * $reserve_flag = db_get_all($sql);
                             * // 重なる貸し止め
                             * $sql = "select * from a_rental_stop where hall_id
                             * = $hall_id and room_id = ".$v['room_id']." and
                             * (begin_datetime <= '$datetime' and '$datetime' <
                             * finish_datetime)";
                             * $stop_flag = db_get_all($sql);
                             */
                            $room_data[$k]['opentime'][$key]['checked'] = 0;
                            $reserve_flag = $stop_flag = 0;
                            
                            /**
                             * OLD
                             */
                            /* if (isset($today_reserve_flag))
                                foreach ($today_reserve_flag as $kk => $vv) {
                                    if (strtotime($vv['begin_datetime']) <=
                                             $strdt &&
                                             strtotime($vv['finish_datetime']) >
                                             $strdt) {
                                        $reserve_flag = $vv['reserve_id'];
                                        break;
                                    }
                                }
                                if (isset($today_stop_flag))
                                foreach ($today_stop_flag as $kk => $vv) {
                                    if (strtotime($vv['begin_datetime']) <=
                                             $strdt &&
                                             strtotime($vv['finish_datetime']) >
                                             $strdt) {
                                        $stop_flag = $vv;
                                        break;
                                    }
                                }
                                if (isset($today_checked_flag)) {
                                foreach ($today_checked_flag as $kk => $vv) {
                                    if (strtotime($vv['begin_datetime']) <=
                                             $strdt &&
                                             strtotime($vv['finish_datetime']) >
                                             $strdt) {
                                        $room_data[$k]['opentime'][$key]['checked'] = 1;
                                        break;
                                    }
                                }
                            }*/
                            
                            /**
                             * NEW
                             */
                            if (isset($v['re_begin_datetime'])){
                                $today_reserve_begin = explode(",", $v['re_begin_datetime']);
                                $today_reserve_finish = explode(",", $v['re_finish_datetime']);
                                $today_reserve_id = explode(",", $v['re_reserve_id']);
                                for ($i = 0; $i < count($today_reserve_begin); $i++) {
                                    if (strtotime($today_reserve_begin[$i]) <= $strdt &&
                                        strtotime($today_reserve_finish[$i]) > $strdt) {
                                        $reserve_flag = $today_reserve_id[$i];
                                        break;
                                    }
                                }
                            }
                            
                            if (isset($v['ren_begin_datetime'])) {
                                $today_stop_begin = explode(",", $v['ren_begin_datetime']);
                                $today_stop_finish = explode(",", $v['ren_finish_datetime']);
                                $today_stop_flag = explode(",", $v['ren_flag']);
                                $today_stop_limit_datetime = explode(",", $v['ren_limit_datetime']);
                                $today_stop_admin_name = explode(",", $v['ren_admin_name']);
                                $today_stop_memo = explode(",", $v['ren_memo']);
                                for ($i = 0; $i < count($today_stop_begin); $i++) {
                                    if (strtotime($today_stop_begin[$i]) <= $strdt &&
                                            strtotime($today_stop_finish[$i]) > $strdt) {
                                                $ren_values = array();
                                                $ren_values['flag'] = $today_stop_flag[$i];
                                                $ren_values['limit_datetime'] = $today_stop_limit_datetime[$i];
                                                $ren_values['admin_name'] = $today_stop_admin_name[$i];
                                                $ren_values['memo'] = $today_stop_memo[$i];
                                                $stop_flag = $ren_values;
                                            }
                                }
                            }
                            
                            if (isset($v['pre_begin_datetime'])) {
                                $today_checked_begin = explode(",", $v['pre_begin_datetime']);
                                $today_checked_finish = explode(",", $v['pre_finish_datetime']);
                            
                                for ($i = 0; $i < count($today_checked_begin); $i++) {
                                    if (strtotime($today_checked_begin[$i]) <= $strdt &&
                                        strtotime($today_checked_finish[$i]) > $strdt) {
                                        $room_data[$k]['opentime'][$key]['checked'] = 1;
                                        break;
                                    }
                                }
                            }
                            
                            if ($reserve_flag) {
                                $room_data[$k]['opentime'][$key]['reserved'] = $reserve_flag;
                            } elseif ($stop_flag) {
                                if ($stop_flag['flag'] == 1) { // rental_stopとの仕様合わせ:この3行
                                    $stop_flag['limit_datetime'] = "無期限";
                                }
                                $room_data[$k]['opentime'][$key]['stoped'] = $stop_flag;
                            }
                        }
                    } else {
                        // 池袋
                        // コマ割り
                        $room_data[$k]['komawari'] = array();
                        
                        // その日のデータを全て取得する。
                        /* $dayday = $year . "-" . $month . "-" . $day . " ";
                        $daystart = $dayday . "00:00:00";
                        $dayend = $dayday . "23:59:59"; */
                        
                        /* $sql = "select * from a_reserve_list where hall_id = $hall_id and room_id = " .
                                 $v['room_id'] .
                                 " and cancel_flag=0 and (begin_datetime >= '$daystart' and '$dayend' > finish_datetime)";
                        $today_reserve_flag = db_get_all($sql, $db); */
                        
                        // 重なる貸し止め
                        /* $sql = "select * from a_rental_stop where hall_id = $hall_id and room_id = " .
                                 $v['room_id'] .
                                 " and (begin_datetime >= '$daystart' and '$dayend' > finish_datetime) and (limit_datetime > now() or flag=1)";
                        $today_stop_flag = db_get_all($sql, $db); */
                        // 部屋データ取得
                        
                        /* $sql = "select * from a_room where hall_id=$hall_id and room_id=" .
                                 $v['room_id'];
                        $roomstatus = db_get_all($sql, $db);
                        tmp_room_price_convert($roomstatus, $tmp_tax); */
                        
                        // / 2013.12.21 消費税改定対応 begin
                        /*
                         * TODAY CHECK
                         */
                        /* $sql = "select * from a_pre_reserve where  hall_id = $hall_id and room_id = " .
                                 $v['room_id'] .
                                 " and (begin_datetime >= '$daystart' and '$dayend' > finish_datetime) and limit_datetime > now()";
                        $today_checked_flag = db_get_all($sql, $db); */
                        
                        
                        // / 2013.12.21 消費税改定対応 end
                        foreach ($room_data[$k]['opentime'] as $open_k => $open_v) {
                            
                            $datetime = $year . "-" . $month . "-" . $day . " " .
                                     $open_v . ":00:00";
                            $strdt = strtotime($datetime);
                            for ($x = 1; $x <= 23; $x ++) {


                                if (! is_null($v['begin_time' . $x]) and
                                         $open_v == $v['begin_time' . $x]) {
                                    $room_data[$k]['komawari'][$open_k]['cs'] = ($v['finish_time' .
                                     $x] - $v['begin_time' . $x]) * 4;
                            $room_data[$k]['komawari'][$open_k]['begin_time'] = sprintf(
                                    "%02d", $v['begin_time' . $x]) . ":00";
                            $room_data[$k]['komawari'][$open_k]['finish_time'] = sprintf(
                                    "%02d", $v['finish_time' . $x]) . ":00";
                            
                            $room_data[$k]['komawari'][$open_k]['price'] = $v['price' .
                                     $x];
                            $room_data[$k]['komawari'][$open_k]['rest'] = 0;
                            
                            $reserve_flag = $stop_flag = 0;
                            if($v['begin_time' . $x]< $hall_data['begin_often'] || $v['finish_time' .
                                     $x] > $hall_data['finish_often'] )
                                {
                                    $room_data[$k]['komawari'][$open_k]['style'] = 1;
                                }
                                else{
                                     $room_data[$k]['komawari'][$open_k]['style'] = 0;
                                }
                            
                            /**
                             * OLD
                             */
                            /* if (isset($today_reserve_flag))
                                foreach ($today_reserve_flag as $kk => $vv) {
                                    if (strtotime($vv['begin_datetime']) <=
                                             $strdt &&
                                             strtotime($vv['finish_datetime']) >
                                             $strdt) {
                                        $reserve_flag = $vv['reserve_id'];
                                        break;
                                    }
                                }
                            
                            if (isset($today_stop_flag))
                            foreach ($today_stop_flag as $kk => $vv) {
                                if (strtotime($vv['begin_datetime']) <=
                                        $strdt &&
                                        strtotime($vv['finish_datetime']) >
                                        $strdt) {
                                            $stop_flag = $vv;
                                            break;
                                        }
                            }
                            if (isset($today_checked_flag)) {
                                foreach ($today_checked_flag as $kk => $vv) {
                                    if (strtotime($vv['begin_datetime']) <=
                                             $strdt &&
                                             strtotime($vv['finish_datetime']) >
                                             $strdt) {
                                        
                                        $room_data[$k]['komawari'][$open_k]['checked'] = 1;
                                        break;
                                    }
                                }
                            }*/
                            
                            /**
                             * NEW
                             */
                            if (isset($v['re_begin_datetime'])){
                                $today_reserve_begin = explode(",", $v['re_begin_datetime']);
                                $today_reserve_finish = explode(",", $v['re_finish_datetime']);
                                $today_reserve_id = explode(",", $v['re_reserve_id']);
                                for ($i = 0; $i < count($today_reserve_begin); $i++) {
                                    if (strtotime($today_reserve_begin[$i]) <= $strdt &&
                                        strtotime($today_reserve_finish[$i]) > $strdt) {
                                        $reserve_flag = $today_reserve_id[$i];
                                        break;
                                    }
                                }
                            }
                            
                            if (isset($v['ren_begin_datetime'])) {
                                $today_stop_begin = explode(",", $v['ren_begin_datetime']);
                                $today_stop_finish = explode(",", $v['ren_finish_datetime']);
                                $today_stop_flag = explode(",", $v['ren_flag']);
                                $today_stop_limit_datetime = explode(",", $v['ren_limit_datetime']);
                                $today_stop_admin_name = explode(",", $v['ren_admin_name']);
                                $today_stop_memo = explode(",", $v['ren_memo']);
                                for ($i = 0; $i < count($today_stop_begin); $i++) {
                                    if (strtotime($today_stop_begin[$i]) <= $strdt &&
                                        strtotime($today_stop_finish[$i]) > $strdt) {
                                        $ren_values = array();
                                        $ren_values['flag'] = $today_stop_flag[$i];
                                        $ren_values['limit_datetime'] = $today_stop_limit_datetime[$i];
                                        $ren_values['admin_name'] = $today_stop_admin_name[$i];
                                        $ren_values['memo'] = $today_stop_memo[$i];
                                        $stop_flag = $ren_values;
                                        break;
                                    }
                                }
                            }
                            
                            if (isset($v['pre_begin_datetime'])) {
                                $today_checked_begin = explode(",", $v['pre_begin_datetime']);
                                $today_checked_finish = explode(",", $v['pre_finish_datetime']);
                                
                                for ($i = 0; $i < count($today_checked_begin); $i++) {
                                    if (strtotime($today_checked_begin[$i]) <= $strdt &&
                                        strtotime($today_checked_finish[$i]) > $strdt) {
                                        $room_data[$k]['komawari'][$open_k]['checked'] = 1;
                                        break;
                                    }
                                }
                            }
                            
                            if ($reserve_flag) {
                                $room_data[$k]['komawari'][$open_k]['reserved'] = $reserve_flag;
                            } else 
                                if ($stop_flag) {
                                    if ($stop_flag['flag'] == 1) { // rental_stopとの仕様合わせ
                                                                   // この3行
                                        $stop_flag['limit_datetime'] = "無期限";
                                    }
                                    // $room_data[$k]['komawari'][$open_k]['reserved']
                                    // = 1;
                                    $room_data[$k]['komawari'][$open_k]['stoped'] = $stop_flag;
                                }
                            
                            /*
                             * if($reserve_flag[0]['reserve_id']){
                             * $room_data[$k]['komawari'][$open_k]['reserved']=$reserve_flag[0]['reserve_id'];
                             * }elseif($stop_flag[0]['stop_id']){
                             * $room_data[$k]['komawari'][$open_k]['stoped']=$stop_flag[0];
                             * }
                             */
                            break;
                        } else {
                            /*
                             * $sql="select count(*) as flag from a_room where
                             * hall_id=$hall_id and room_id=".$v['room_id']."
                             * and ((begin_time1 < $open_v and $open_v <
                             * finish_time1) or (begin_time2 < $open_v and
                             * $open_v < finish_time2) or (begin_time3 < $open_v
                             * and $open_v < finish_time3) or (begin_time4 <
                             * $open_v and $open_v < finish_time4) or
                             * (begin_time5 < $open_v and $open_v <
                             * finish_time5) or (begin_time6 < $open_v and
                             * $open_v < finish_time6) or (begin_time7 < $open_v
                             * and $open_v < finish_time7) or (begin_time8 <
                             * $open_v and $open_v < finish_time8) or
                             * (begin_time9 < $open_v and $open_v <
                             * finish_time9) or (begin_time10 < $open_v and
                             * $open_v < finish_time10) or (begin_time11 <
                             * $open_v and $open_v < finish_time11) or
                             * (begin_time12 < $open_v and $open_v <
                             * finish_time12) or (begin_time13 < $open_v and
                             * $open_v < finish_time13) or (begin_time14 <
                             * $open_v and $open_v < finish_time14) or
                             * (begin_time15 < $open_v and $open_v <
                             * finish_time15) or (begin_time16 < $open_v and
                             * $open_v < finish_time16) or (begin_time17 <
                             * $open_v and $open_v < finish_time17) or
                             * (begin_time18 < $open_v and $open_v <
                             * finish_time18) or (begin_time19 < $open_v and
                             * $open_v < finish_time19) or (begin_time20 <
                             * $open_v and $open_v < finish_time20) or
                             * (begin_time21 < $open_v and $open_v <
                             * finish_time21) or (begin_time22 < $open_v and
                             * $open_v < finish_time22) or (begin_time23 <
                             * $open_v and $open_v < finish_time23))";
                             * //print $sql."<br>";
                             * $check = db_get_all($sql);
                             * if(!$check[0]['flag']){
                             */
                            $f = 0;
                            for ($i = 1; $i <= 23; $i ++) {
                                if ($v['begin_time' . $i] < $open_v &&
                                         $open_v <
                                         $v['finish_time' . $i]) {
                                    $f = 1;
                                    break;
                                }
                            }
                            if (! $f) {
                                $room_data[$k]['komawari'][$open_k]['cs'] = 4;
                                $room_data[$k]['komawari'][$open_k]['rest'] = 1;
                            }
                        } // if
                    } // for
                }
            } // if type
        } else { // holiday
            $room_data[$k]['holiday'] = 1;
        } // holiday
    } // foreach
      // //////////////予約のコマをくっつける
    
    foreach ($room_data as $key => $value) {
        $opentime2 = array();
        $line = 0;
        if ($value['type'] == 2) {
            $count = 0;
            if ($value['opentime']) {
                foreach ($value['opentime'] as $k => $v) {
                    if ($v['reserved']) {
                        if ($count == 0) {
                            $kk = $k;
                            while ($v['reserved'] ==
                                     $value['opentime'][$kk]['reserved']) {
                                        // print
                                        // $v['reserved']."==".$value['opentime'][$kk]['reserved']."<br>";
                                        $count ++;
                                if ($count > 20) {
                                    break;
                                }
                                $kk ++;
                            }
                            // print $v['time']."<br>";
                            $opentime2[$line] = $v;
                            $opentime2[$line]['cs'] = $value['cs'] * $count;
                            
                            // 予約情報を入れる
                            $sql = "select * from a_reserve_list where reserve_id = " .
                                     $v['reserved'];
                            $reserve_data = db_get_all($sql);
                            $opentime2[$line]['reserve_data'] = $reserve_data[0];
                            
                            $sql = "select * from c_member where c_member_id = " .
                                     $reserve_data[0]['c_member_id'];
                            $c_member = db_get_all($sql);
                            $opentime2[$line]['c_member'] = $c_member[0];
                            
                            $opentime2[$line]['corp'] = get_profile_value(
                                    $reserve_data[0]['c_member_id'], 12);
                            
                            // 備品
                            $sql = "select * from a_reserve_v where reserve_id = " .
                                     $v['reserved'] . " and cancel_flag = 0";
                            $reserve_v_list = db_get_all($sql);
                            if ($reserve_v_list) {
                                foreach ($reserve_v_list as $loop_k => $loop_v) {
                                    $vessel_data = get_vessel_data(
                                            $loop_v['vessel_id']);
                                    $reserve_v_list[$loop_k]['vessel_name'] = $vessel_data['vessel_name'];
                                }
                            } else {
                                $reserve_v_list = 0;
                            }
                            $opentime2[$line]['reserve_v_list'] = $reserve_v_list;
                            
                            // サービス
                            $sql = "select * from a_reserve_s where reserve_id = " .
                                     $v['reserve_id'] . " and cancel_flag = 0";
                            $reserve_s_list = db_get_all($sql);
                            if ($reserve_s_list) {
                                foreach ($reserve_s_list as $loop_k => $loop_v) {
                                    $service_data = get_service_data(
                                            $loop_v['service_id']);
                                    $reserve_s_list[$loop_k]['service_name'] = $service_data['service_name'];
                                }
                            } else {
                                $reserve_s_list = 0;
                            }
                            $opentime2[$line]['reserve_s_list'] = $reserve_s_list;
                            $opentime2[$line]['usedate'] = checkusedate($hall_id, $v['room_id'], $year, $month, 
                        $day,$usedate);

                            $line ++;
                        }
                    } else {
                        // print $v['time']."<br>";
                        $opentime2[$line] = $v;
                        $opentime2[$line]['cs'] = $value['cs'];

                        $line ++;
                    }
                    if ($count) {
                        $count --;
                    }
                }
            }
            $room_data[$key]['opentime'] = $opentime2;
        } else {
            // type=1
            $count = 0;
            if ($value['komawari']) {
                $col = count($value['komawari']);
                foreach ($value['komawari'] as $k => $v) {
                    if ($count == 0) {
                        $opentime2[$line] = $v;
                        $opentime2[$line]['cs'] = $v['cs'];
                        $colspan = 0;
                        if ($v['reserved']) {
                            foreach ($value['komawari'] as $kk => $vv) {
                                if ($v['reserved'] == $vv['reserved']) {
                                    
                                    // ///////////////////////
                                    // $colspan = 1;
                                    $colspan = $kk;
                                    
                                    // //////////////////////
                                }
                            }
                            
                            // 予約情報を入れる
                            $sql = "select * from a_reserve_list where reserve_id = " .
                                     $v['reserved'];
                            $reserve_data = db_get_all($sql);
                            $opentime2[$line]['reserve_data'] = $reserve_data[0];
                            
                            $sql = "select * from c_member where c_member_id = " .
                                     $reserve_data[0]['c_member_id'];
                            $c_member = db_get_all($sql);
                            $opentime2[$line]['c_member'] = $c_member[0];
                            
                            $opentime2[$line]['corp'] = get_profile_value(
                                    $reserve_data[0]['c_member_id'], 12);
                            // 備品
                            
                            $sql = "select * from a_reserve_v where reserve_id = " .
                                     $v['reserved'] . " and cancel_flag = 0";
                            $reserve_v_list = db_get_all($sql);
                            
                            if ($reserve_v_list) {
                                foreach ($reserve_v_list as $loop_k => $loop_v) {
                                    $vessel_data = get_vessel_data(
                                            $loop_v['vessel_id']);
                                    $reserve_v_list[$loop_k]['vessel_name'] = $vessel_data['vessel_name'];
                                }
                            } else {
                                $reserve_v_list = array();
                            }
                            
                            $opentime2[$line]['reserve_v_list'] = $reserve_v_list;
                            
                            // サービス
                            $sql = "select * from a_reserve_s where reserve_id = " .
                                     $v['reserve_id'] . " and cancel_flag = 0";
                            $reserve_s_list = db_get_all($sql);
                            if ($reserve_s_list) {
                                foreach ($reserve_s_list as $loop_k => $loop_v) {
                                    $service_data = get_service_data(
                                            $loop_v['service_id']);
                                    $reserve_s_list[$loop_k]['service_name'] = $service_data['service_name'];
                                }
                            } else {
                                $reserve_s_list = 0;
                            }
                            $opentime2[$line]['reserve_s_list'] = $reserve_s_list;
                        }
                        
                        if ($colspan) {
                            $count ++;
                            
                            foreach ($value['komawari'] as $kk => $vv) {
                                if ($k < $kk and $kk <= $colspan) {
                                    
                                    $opentime2[$line]['cs'] += $vv['cs'];
                                    
                                    $count ++;
                                }
                            }
                        }
                        $line ++;
                    }
                    
                    if ($count) {
                        $count --;
                    }
                }
            }
            $room_data[$key]['komawari'] = $opentime2;
        }
    }
    $this->set('open_time', $open_time);
    $this->set('room_data', $room_data);
    $this->set('hall_data', $hall_data);
    $this->set('hall_id', $hall_id);
    $this->set('year', $year);
    $this->set('month', $month);
    $this->set('day', $day);
    $this->set('pre_id', $pre_id);
    $ct = count($open_time);
    $this->set('ct', $ct);
    
    return 'success';
} else {
   // ------------------------------------------------------ period mode
    $room_id = $_REQUEST['room_id'];
    $this->set('periodmode', 1);
    
    // 会場で有効な部屋データ
    
    $sql = "select * from a_room where hall_id = $hall_id and room_id = $room_id and flag=1";
    $room_data = db_get_all($sql, $db);
    // / 2013.12.21 消費税改定対応 begin
    
    tmp_room_price_convert($room_data, $tmp_tax);
    
    // / 2013.12.21 消費税改定対応 end
    // echo $sql."<br>";
    $room_data = $room_data[0];
    
    $room_data['opentime'] = $open_time;
    $room_data['max'] = max($room_data['num_school'], $room_data['num_mouth'], 
            $room_data['num_theater']);
    
    $v = $room_data;
    // 互換用
    // echo $_REQUEST['hall_list']."<br>";
    // echo $v['room_id']."<br>";
    // echo $v['room_name']."<br>";
    // echo $v['type']."<br>";
    
    $key = 0;
    
    if ($room_data['type'] == 2) {
        if ($room_data['koma'] > 1) {
            $hosei = $room_data['koma'] * $room_data['lowest_koma'];
        } else {
            $hosei = $room_data['lowest_koma'];
        }
        $koma = $room_data['koma'];
        $min = array();
        if ($koma == 0.5) {
            $room_data['cs'] = 2;
            $key = 0;
            foreach ($open_time as $value) {
                $min[$key]['time'] = sprintf("%02d", $value) . ':00';
                $min[$key]['begin_time'] = $min[$key]['time'];
                $min[$key]['finish_time'] = sprintf("%02d", $value) . ':30';
                if($value < $hall_data['begin_often'] || $value >= $hall_data['finish_often'] )
                {
                    $min[$key]['style'] = 1;
                }
                else{
                     $min[$key]['style'] = 0;
                }
                $key ++;
                $min[$key]['time'] = sprintf("%02d", $value) . ':30';
                $min[$key]['begin_time'] = $min[$key]['time'];
                $min[$key]['finish_time'] = sprintf("%02d", $value + 1) . ':00';
                if($value < $hall_data['begin_often'] || $value >= $hall_data['finish_often'] )
                {
                    $min[$key]['style'] = 1;
                }
                else{
                     $min[$key]['style'] = 0;
                }
                $key ++;
            }
            $room_data['opentime'] = $min;
            if ($col_num < 2) {
                $col_num = 2;
            }
        } elseif ($koma == 0.25) {
            $room_data['cs'] = 1;
            foreach ($open_time as $value) {
                $min[$key]['time'] = sprintf("%02d", $value) . ':00';
                $min[$key]['begin_time'] = $min[$key]['time'];
                $min[$key]['finish_time'] = sprintf("%02d", $value) . ':15';
                if($value < $hall_data['begin_often'] || $value > $hall_data['finish_often'] )
                {
                    $min[$key]['style'] = 1;
                }
                else{
                     $min[$key]['style'] = 0;
                }
                $key ++;
                $min[$key]['time'] = sprintf("%02d", $value) . ':15';
                $min[$key]['begin_time'] = $min[$key]['time'];
                $min[$key]['finish_time'] = sprintf("%02d", $value) . ':30';
                if($value < $hall_data['begin_often'] || $value > $hall_data['finish_often'] )
                {
                    $min[$key]['style'] = 1;
                }
                else{
                     $min[$key]['style'] = 0;
                }
                $key ++;
                $min[$key]['time'] = sprintf("%02d", $value) . ':30';
                $min[$key]['begin_time'] = $min[$key]['time'];
                $min[$key]['finish_time'] = sprintf("%02d", $value) . ':45';
                if($value < $hall_data['begin_often'] || $value >= $hall_data['finish_often'] )
                {
                    $min[$key]['style'] = 1;
                }
                else{
                     $min[$key]['style'] = 0;
                }
                $key ++;
                $min[$key]['time'] = sprintf("%02d", $value) . ':45';
                $min[$key]['begin_time'] = $min[$key]['time'];
                $min[$key]['finish_time'] = sprintf("%02d", $value + 1) . ':00';
                if($value < $hall_data['begin_often'] || $value >= $hall_data['finish_often'] )
                {
                    $min[$key]['style'] = 1;
                }
                else{
                     $min[$key]['style'] = 0;
                }
                $key ++;
            }
            $room_data['opentime'] = $min;
            if ($col_num < 3) {
                $col_num = 3;
            }
        } else {
            
            $room_data['cs'] = 4 * $room_data['koma'];
            $count_koma = 0;
            foreach ($open_time as $value) {
                $count_koma --;
                if ($count_koma <= 0) {
                    if (($value + $room_data['koma']) <= $hall_data['finish']) {
                        $min[$key]['time'] = sprintf("%02d", $value) . ':00';
                        $min[$key]['begin_time'] = $min[$key]['time'];
                        $min[$key]['finish_time'] = sprintf("%02d", $value + 1) .
                                 ':00';
                         if($value < $hall_data['begin_often'] || $value >= $hall_data['finish_often'] )
                        {
                            $min[$key]['style'] = 1;
                        }
                        else{
                             $min[$key]['style'] = 0;
                        }
                        $key ++;
                        $count_koma = $room_data['koma'];
                    }
                }
            }
            $room_data['opentime'] = $min;
        }
    }
    

    $this->set('year', $year);
    $this->set('month', $month);
    $this->set('day', $day);
    
    /**
     * Fill data
     */
    // その日のデータを全て取得する。
    $dayday = "$year-".sprintf("%02d", $month)."-".sprintf("%02d", $day)." ";
    $daystart = $dayday . "00:00:00";
    $dayend = $dayday . "23:59:59";
    $sql = "
    	 	SELECT *
            FROM
                (
                SELECT @i_date:=IF( @i_date <= DATE('$daystart') + INTERVAL $period DAY,@i_date + INTERVAL 1 DAY,DATE('$dayday') ) AS no_date_time
                FROM a_reserve_list  RE, 
                    (SELECT @i_date:= DATE('$daystart') - 1 DAY) AS temp_date
                LIMIT $period
                ) AS table_date

            LEFT JOIN

                (
                SELECT CAST( GROUP_CONCAT(RE.begin_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS re_begin_datetime,
	               CAST( GROUP_CONCAT(RE.finish_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS re_finish_datetime,
	               CAST( GROUP_CONCAT(RE.reserve_id) AS CHAR(10000) CHARACTER SET utf8 ) AS re_reserve_id
                FROM a_reserve_list  RE
                WHERE RE.hall_id = $hall_id 
                    AND RE.room_id = $room_id
                    AND RE.cancel_flag=0 
                    AND (   DATE(RE.begin_datetime) >= DATE('$daystart')
                            AND
                            DATE('$dayend')+ INTERVAL $period DAY >= DATE(RE.finish_datetime)
                        )
                GROUP BY DATE (RE.begin_datetime)
                ORDER BY RE.begin_datetime ) AS RE
            ON table_date.no_date_time = DATE(RE.re_begin_datetime)

            LEFT JOIN

                (
                SELECT CAST( GROUP_CONCAT(REN.begin_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_begin_datetime,
	                   CAST( GROUP_CONCAT(REN.finish_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_finish_datetime,
	                   CAST( GROUP_CONCAT(REN.flag ) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_flag, 
	                   CAST( GROUP_CONCAT(REN.limit_datetime ) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_limit_datetime, 
	                   CAST( GROUP_CONCAT(REN.admin_name ) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_admin_name, 
                       CAST( GROUP_CONCAT(REN.memo ) AS CHAR(10000) CHARACTER SET utf8 ) AS ren_memo 
                FROM a_rental_stop REN
                WHERE REN.hall_id = $hall_id 
                    AND REN.room_id = $room_id
                    AND (
                    	DATE(REN.begin_datetime) >= DATE('$daystart') 
                    	AND DATE('$dayend') + INTERVAL $period DAY >= DATE(REN.finish_datetime)
                    )
                    AND (REN.limit_datetime > now() or REN.flag=1)
                GROUP BY DATE (REN.begin_datetime)
                ORDER BY REN.begin_datetime ) AS REN
            ON table_date.no_date_time = DATE(REN.ren_begin_datetime)
            
            LEFT JOIN
            
                (
                SELECT 
            	   CAST( GROUP_CONCAT( PRE.begin_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS pre_begin_datetime,
            	   CAST( GROUP_CONCAT( PRE.finish_datetime) AS CHAR(10000) CHARACTER SET utf8 ) AS pre_finish_datetime
                 FROM a_pre_reserve PRE
                WHERE PRE.hall_id = $hall_id 
                    AND PRE.room_id = $room_id
                    AND ( 
                        DATE(PRE.begin_datetime) >= DATE('$daystart') 
                        AND DATE('$dayend') + INTERVAL $period DAY >=DATE(PRE.finish_datetime)
                    )
                    AND  PRE.limit_datetime > NOW()
                GROUP BY DATE (PRE.begin_datetime)
                ORDER BY PRE.begin_datetime ) AS PRE
            ON table_date.no_date_time = DATE( PRE.pre_begin_datetime)";
         $month_data = db_get_all($sql, $db);
         unset( $month_data[0]);
    /**
     * Check type
     */
    $num_date = 0;
    foreach ($month_data as $day_data) {
        $no_date_time = $day_data['no_date_time'];
        $no_date = strtotime($no_date_time);
        $year = date('Y',$no_date);
        $month = date('m',$no_date);
        $day = date('d',$no_date);
        $holiday = check_holiday($hall_id, $room_id, $year, $month, $day);
        
        $period_data[$num_date]["year"] = $year;
        $period_data[$num_date]["month"] = $month;
        $period_data[$num_date]["day"] = $day;
        $period_data[$num_date]["holiday"] = $holiday;
        $period_data[$num_date]["week"] = get_week(
                $year . sprintf("%02d", $month) . sprintf("%02d", $day));
        $period_data[$num_date]['opentime'] = $room_data['opentime'];
        $period_data[$num_date]['cs'] = $room_data['cs'];
        
        if ($room_data['type'] == 2) {
            foreach ($period_data[$num_date]['opentime'] as $key => $val) {
                // var_dump($period_data[$i]['opentime'][$key]);
                // echo "$key<br>";
                $period_data[$num_date]['opentime'][$key]['reserved'] = 0;
                $period_data[$num_date]['opentime'][$key]['checked'] = 0;
                $datetime = $year . "-" . $month . "-" . $day . " " .
                        $val['time'] . ":00";
                $strdt = strtotime($datetime);
            
                $reserve_flag = $stop_flag = 0;
                if (isset($day_data['re_begin_datetime'])){
                    $today_reserve_begin = explode(",", $day_data['re_begin_datetime']);
                    $today_reserve_finish = explode(",", $day_data['re_finish_datetime']);
                    $today_reserve_id = explode(",", $day_data['re_reserve_id']);
                    for ($i = 0; $i < count($today_reserve_begin); $i++) {
                        if (strtotime($today_reserve_begin[$i]) <= $strdt &&
                            strtotime($today_reserve_finish[$i]) > $strdt) {
                            $reserve_flag = $today_reserve_id[$i];
                            break;
                        }
                    }
                }
                
                if (isset($day_data['ren_begin_datetime'])) {
                    $today_stop_begin = explode(",", $day_data['ren_begin_datetime']);
                    $today_stop_finish = explode(",", $day_data['ren_finish_datetime']);
                    $today_stop_flag = explode(",", $day_data['ren_flag']);
                    $today_stop_limit_datetime = explode(",", $day_data['ren_limit_datetime']);
                    $today_stop_admin_name = explode(",", $day_data['ren_admin_name']);
                    $today_stop_memo = explode(",", $day_data['ren_memo']);
                    for ($i = 0; $i < count($today_stop_begin); $i++) {
                        if (strtotime($today_stop_begin[$i]) <= $strdt &&
                            strtotime($today_stop_finish[$i]) > $strdt) {
                            $ren_values = array();
                            $ren_values['flag'] = $today_stop_flag[$i];
                            $ren_values['limit_datetime'] = $today_stop_limit_datetime[$i];
                            $ren_values['admin_name'] = $today_stop_admin_name[$i];
                            $ren_values['memo'] = $today_stop_memo[$i];
                            $stop_flag = $ren_values;
                            break;
                        }
                    }
                }
                
                if (isset($day_data['pre_begin_datetime'])) {
                    $today_checked_begin = explode(",", $day_data['pre_begin_datetime']);
                    $today_checked_finish = explode(",", $day_data['pre_finish_datetime']);
                
                    for ($i = 0; $i < count($today_checked_begin); $i++) {
                        if (strtotime($today_checked_begin[$i]) <= $strdt &&
                            strtotime($today_checked_finish[$i]) > $strdt) {
                            $period_data[$num_date]['opentime'][$key]['checked'] = 1;
                            break;
                        }
                    }
                }
                
                if ($reserve_flag) {
                    $period_data[$num_date]['opentime'][$key]['reserved'] = $reserve_flag;
                } elseif ($stop_flag) {
                    if ($stop_flag['flag'] == 1) { // rental_stopとの仕様合わせ:この3行
                        $stop_flag['limit_datetime'] = "無期限";
                    }
                    $period_data[$num_date]['opentime'][$key]['stoped'] = $stop_flag;
                }
            }
            
        } else {
            foreach ($room_data['opentime'] as $open_k => $open_v) {
                
                $datetime = "$year-".sprintf("%02d", $month)."-".sprintf("%02d", $day)." " . $open_v .
                         ":00:00";
                $strdt = strtotime($datetime);
                
                for ($x = 1; $x <= 23; $x ++) {
                    if (! is_null($room_data['begin_time' . $x]) and
                             $open_v == $room_data['begin_time' . $x]) {
                        $period_data[$num_date]['komawari'][$open_k]['cs'] = ($room_data['finish_time' .
                         $x] - $room_data['begin_time' . $x]) * 4;
                    $period_data[$num_date]['komawari'][$open_k]['begin_time'] = sprintf(
                            "%02d", $room_data['begin_time' . $x]) . ":00";
                    $period_data[$num_date]['komawari'][$open_k]['finish_time'] = sprintf(
                            "%02d", $room_data['finish_time' . $x]) . ":00";
                    
                    $period_data[$num_date]['komawari'][$open_k]['price'] = $room_data['price' . $x];
                    $period_data[$num_date]['komawari'][$open_k]['rest'] = 0;
                    
                    $reserve_flag = $stop_flag = 0;
                    
                    if (isset($day_data['re_begin_datetime'])){
                        $today_reserve_begin = explode(",", $day_data['re_begin_datetime']);
                        $today_reserve_finish = explode(",", $day_data['re_finish_datetime']);
                        $today_reserve_id = explode(",", $day_data['re_reserve_id']);
                        for ($i = 0; $i < count($today_reserve_begin); $i++) {
                            if (strtotime($today_reserve_begin[$i]) <= $strdt &&
                                strtotime($today_reserve_finish[$i]) > $strdt) {
                                $reserve_flag = $today_reserve_id[$i];
                                break;
                            }
                        }
                    }
                    
                    if (isset($day_data['ren_begin_datetime'])) {
                        $today_stop_begin = explode(",", $day_data['ren_begin_datetime']);
                        $today_stop_finish = explode(",", $day_data['ren_finish_datetime']);
                        $today_stop_flag = explode(",", $day_data['ren_flag']);
                        $today_stop_limit_datetime = explode(",", $day_data['ren_limit_datetime']);
                        $today_stop_admin_name = explode(",", $day_data['ren_admin_name']);
                        $today_stop_memo = explode(",", $day_data['ren_memo']);
                        for ($i = 0; $i < count($today_stop_begin); $i++) {
                            if (strtotime($today_stop_begin[$i]) <= $strdt &&
                                strtotime($today_stop_finish[$i]) > $strdt) {
                                $ren_values = array();
                                $ren_values['flag'] = $today_stop_flag[$i];
                                $ren_values['limit_datetime'] = $today_stop_limit_datetime[$i];
                                $ren_values['admin_name'] = $today_stop_admin_name[$i];
                                $ren_values['memo'] = $today_stop_memo[$i];
                                $stop_flag = $ren_values;
                                break;
                            }
                        }
                    }
                    
                    if (isset($day_data['pre_begin_datetime'])) {
                        $today_checked_begin = explode(",", $day_data['pre_begin_datetime']);
                        $today_checked_finish = explode(",", $day_data['pre_finish_datetime']);
                    
                        for ($i = 0; $i < count($today_checked_begin); $i++) {
                            if (strtotime($today_checked_begin[$i]) <= $strdt &&
                                strtotime($today_checked_finish[$i]) > $strdt) {
                                $period_data[$num_date]['komawari'][$open_k]['checked'] = 1;
                                break;
                            }
                        }
                    }
                    
                    if ($reserve_flag) {
                        $period_data[$num_date]['komawari'][$open_k]['reserved'] = $reserve_flag;
                    } else 
                        if ($stop_flag) {
                            if ($stop_flag['flag'] == 1) { // rental_stopとの仕様合わせ
                                                           // この3行
                                $stop_flag['limit_datetime'] = "無期限";
                            }
                            $period_data[$num_date]['komawari'][$open_k]['stoped'] = $stop_flag;
                        }
                        break;
                    } else {
                        $f = 0;
                        for ($j = 1; $j <= 23; $j ++) {
                            if ($room_data['begin_time' . $j] < $open_v &&
                                     $open_v < $room_data['finish_time' . $j]) {
                                $f = 1;
                                break;
                            }
                        }
                        if (! $f) {
                            $period_data[$num_date]['komawari'][$open_k]['cs'] = 4;
                            $period_data[$num_date]['komawari'][$open_k]['rest'] = 1;
                        }
                    } // if
                } // for
            } // foreach
        }
        
    $num_date++;
    }
foreach ($period_data as $key => $value) {
$opentime2 = array();
$line = 0;
$period_data[$key]['usedate'] = checkusedate($hall_id, $v['room_id'], $value['year'], $value['month'], 
                        $value['day'],$usedate);

if ($room_data['type'] == 2) {
    $count = 0;
    if ($value['opentime']) {
        foreach ($value['opentime'] as $k => $v) {
            if ($v['reserved']) {
                if ($count == 0) {
                    $kk = $k;
                    while ($v['reserved'] == $value['opentime'][$kk]['reserved']) {
                        // print
                        // $v['reserved']."==".$value['opentime'][$kk]['reserved']."<br>";
                        $count ++;
                        if ($count > 20) {
                            break;
                        }
                        $kk ++;
                    }
                    // print $v['time']."<br>";
                    $opentime2[$line] = $v;
                    $opentime2[$line]['cs'] = $value['cs'] * $count;
                    
                    $sql = "select * from a_reserve_list where reserve_id = " .
                             $v['reserved'];
                    $reserve_data = db_get_all($sql);
                    $opentime2[$line]['reserve_data'] = $reserve_data[0];
                    
                    $sql = "select * from c_member where c_member_id = " .
                             $reserve_data[0]['c_member_id'];
                    $c_member = db_get_all($sql);
                    $opentime2[$line]['c_member'] = $c_member[0];
                    
                    $opentime2[$line]['corp'] = get_profile_value(
                            $reserve_data[0]['c_member_id'], 12);
                    
                    $sql = "select * from a_reserve_v where reserve_id = " .
                             $v['reserved'] . " and cancel_flag = 0";
                    $reserve_v_list = db_get_all($sql);
                    if ($reserve_v_list) {
                        foreach ($reserve_v_list as $loop_k => $loop_v) {
                            $vessel_data = get_vessel_data($loop_v['vessel_id']);
                            $reserve_v_list[$loop_k]['vessel_name'] = $vessel_data['vessel_name'];
                        }
                    } else {
                        $reserve_v_list = 0;
                    }
                    $opentime2[$line]['reserve_v_list'] = $reserve_v_list;
                    
                    $sql = "select * from a_reserve_s where reserve_id = " .
                             $v['reserve_id'] . " and cancel_flag = 0";
                    $reserve_s_list = db_get_all($sql);
                    if ($reserve_s_list) {
                        foreach ($reserve_s_list as $loop_k => $loop_v) {
                            $service_data = get_service_data(
                                    $loop_v['service_id']);
                            $reserve_s_list[$loop_k]['service_name'] = $service_data['service_name'];
                        }
                    } else {
                        $reserve_s_list = 0;
                    }
                    $opentime2[$line]['reserve_s_list'] = $reserve_s_list;
                    
                    $line ++;
                }
            } else {
                // print $v['time']."<br>";
                $opentime2[$line] = $v;
                $opentime2[$line]['cs'] = $value['cs'];
                $line ++;
            }
            if ($count) {
                $count --;
            }
        }
    }
    $period_data[$key]['opentime'] = $opentime2;
} else {
    // type=1
    $count = 0;
    if ($value['komawari']) {
        $col = count($value['komawari']);
        foreach ($value['komawari'] as $k => $v) {
            if ($count == 0) {
                $opentime2[$line] = $v;
                $opentime2[$line]['cs'] = $v['cs'];
                $colspan = 0;
                if ($v['reserved']) {
                    foreach ($value['komawari'] as $kk => $vv) {
                        if ($v['reserved'] == $vv['reserved']) {
                            
                            // $colspan = 1;
                            $colspan = $kk;
                        }
                    }
                    
                    $sql = "select * from a_reserve_list where reserve_id = " .
                             $v['reserved'];
                    $reserve_data = db_get_all($sql);
                    $opentime2[$line]['reserve_data'] = $reserve_data[0];
                    
                    $sql = "select * from c_member where c_member_id = " .
                             $reserve_data[0]['c_member_id'];
                    $c_member = db_get_all($sql);
                    $opentime2[$line]['c_member'] = $c_member[0];
                    
                    $opentime2[$line]['corp'] = get_profile_value(
                            $reserve_data[0]['c_member_id'], 12);
                    
                    $sql = "select * from a_reserve_v where reserve_id = " .
                             $v['reserved'] . " and cancel_flag = 0";
                    $reserve_v_list = db_get_all($sql);
                    
                    if ($reserve_v_list) {
                        foreach ($reserve_v_list as $loop_k => $loop_v) {
                            $vessel_data = get_vessel_data($loop_v['vessel_id']);
                            $reserve_v_list[$loop_k]['vessel_name'] = $vessel_data['vessel_name'];
                        }
                    } else {
                        $reserve_v_list = array();
                    }
                    
                    $opentime2[$line]['reserve_v_list'] = $reserve_v_list;
                    
                    $sql = "select * from a_reserve_s where reserve_id = " .
                             $v['reserve_id'] . " and cancel_flag = 0";
                    $reserve_s_list = db_get_all($sql);
                    if ($reserve_s_list) {
                        foreach ($reserve_s_list as $loop_k => $loop_v) {
                            $service_data = get_service_data(
                                    $loop_v['service_id']);
                            $reserve_s_list[$loop_k]['service_name'] = $service_data['service_name'];
                        }
                    } else {
                        $reserve_s_list = 0;
                    }
                    $opentime2[$line]['reserve_s_list'] = $reserve_s_list;
                }
                
                if ($colspan) {
                    $count ++;
                    
                    foreach ($value['komawari'] as $kk => $vv) {
                        if ($k < $kk and $kk <= $colspan) {
                            
                            $opentime2[$line]['cs'] += $vv['cs'];
                            
                            $count ++;
                        }
                    }
                }
                $line ++;
            }
            
            if ($count) {
                $count --;
            }
        }
    }
    $period_data[$key]['komawari'] = $opentime2;
}
} // foreach
$this->set('open_time', $open_time);
$this->set('room_data', $room_data);
$this->set('period_data', $period_data);
$this->set('hall_data', $hall_data);
$this->set('hall_id', $hall_id);
$this->set('room_id', $room_id);
$this->set('pre_id', $pre_id);
$ct = count($open_time);
$this->set('ct', $ct);
return 'success';
} // if periodmode
}
}

?>

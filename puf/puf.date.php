<?php 
/**
 * PUF
 *
 * PHP Utility Framework.
 *
 * @package		PUF
 * @version		1.0
 * @author		Gilbert Pellegrom
 * @license		GPL v2
 * @link		http://puf.dev7studios.com
 */
 
namespace PUF;

class Date {
    
    /**
     * Get "now" time
     *
     * Returns time() or its GMT equivalent.
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	boolean
     * @return	integer
     */	
    public function now($gmt = false)
    {
        if ($gmt)
		{
			$now = time();
			$gmt_time = gmmktime(gmdate("H", $now), gmdate("i", $now), gmdate("s", $now), gmdate("n", $now), gmdate("j", $now), gmdate("Y", $now));	
			
            return $gmt_time;
		}
		else
		{
			return time();
		}
    }
    
    /**
     * Convert MySQL Style Datecodes
     *
     * This function is identical to PHPs date() function,
     * except that it allows date codes to be formatted using
     * the MySQL style, where each code letter is preceded
     * with a percent sign:  %Y %m %d etc...
     *
     * The benefit of doing dates this way is that you don't
     * have to worry about escaping your text letters that
     * match the date codes.
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	string
     * @param	integer
     * @return	integer
     */	
    public function mdate($datestr = '', $time = '')
	{
		if ($datestr == '') return '';
	
		if ($time == '') $time = now();
		
		$datestr = str_replace('%\\', '', preg_replace("/([a-z]+?){1}/i", "\\\\\\1", $datestr));
		return date($datestr, $time);
	}
    
    /**
     * Standard Date
     *
     * Returns a date formatted according to the submitted standard.
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	string
     * @param	integer
     * @return	string
     */	
    public function standard_date($format = 'RFC822', $time = '')
	{
		$formats = array(
						'ATOM'		=>	'%Y-%m-%dT%H:%i:%s%Q',
						'COOKIE'	=>	'%l, %d-%M-%y %H:%i:%s UTC',
						'ISO8601'	=>	'%Y-%m-%dT%H:%i:%s%O',
						'RFC822'	=>	'%D, %d %M %y %H:%i:%s %O',
						'RFC850'	=>	'%l, %d-%M-%y %H:%m:%i UTC',
						'RFC1036'	=>	'%D, %d %M %y %H:%i:%s %O',
						'RFC1123'	=>	'%D, %d %M %Y %H:%i:%s %O',
						'RSS'		=>	'%D, %d %M %Y %H:%i:%s %O',
						'W3C'		=>	'%Y-%m-%dT%H:%i:%s%Q'
						);

		if (!isset($formats[$format])) return false;
        
        if (!$time) $time = time();
	
		return $this->mdate($formats[$format], $time);
	}
    
    /**
     * Number of days in a month
     *
     * Takes a month/year as input and returns the number of days
     * for the given month/year. Takes leap years into consideration.
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	integer
     * @param	integer
     * @return	integer
     */	
	public function days_in_month($month = 0, $year = '')
	{
		if ($month < 1 OR $month > 12)
		{
			return 0;
		}
	
		if (!is_numeric($year) OR strlen($year) != 4)
		{
			$year = date('Y');
		}
	
		if ($month == 2)
		{
			if ($year % 400 == 0 OR ($year % 4 == 0 AND $year % 100 != 0))
			{
				return 29;
			}
		}

		$days_in_month	= array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		return $days_in_month[$month - 1];
	}
    
    /**
     * Converts a local Unix timestamp to GMT
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	integer Unix timestamp
     * @return	integer
     */	
	public function local_to_gmt($time = '')
	{
		if ($time == '') $time = time();
	
		return gmmktime( gmdate("H", $time), gmdate("i", $time), gmdate("s", $time), gmdate("m", $time), gmdate("d", $time), gmdate("Y", $time));
	}

    /**
     * Converts GMT time to a localized value
     *
     * Takes a Unix timestamp (in GMT) as input, and returns
     * at the local value based on the timezone and DST setting
     * submitted
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	integer Unix timestamp
     * @param	string	timezone
     * @param	bool	whether DST is active
     * @return	integer
     */	
	public function gmt_to_local($time = '', $timezone = 'UTC', $dst = false)
	{			
		if ($time == '') return now();
	
		$time += timezones($timezone) * 3600;

		if ($dst) $time += 3600;
	
		return $time;
	}

    /**
     * Converts a MySQL Timestamp to Unix
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	integer Unix timestamp
     * @return	integer
     */	
	public function mysql_to_unix($time = '')
	{
		// We'll remove certain characters for backward compatibility
		// since the formatting changed with MySQL 4.1
		// YYYY-MM-DD HH:MM:SS
	
		$time = str_replace('-', '', $time);
		$time = str_replace(':', '', $time);
		$time = str_replace(' ', '', $time);
	
		// YYYYMMDDHHMMSS
		return  mktime(
						substr($time, 8, 2),
						substr($time, 10, 2),
						substr($time, 12, 2),
						substr($time, 4, 2),
						substr($time, 6, 2),
						substr($time, 0, 4)
						);
	}

    /**
     * Unix to "Human"
     *
     * Formats Unix timestamp to the following prototype: 2006-08-21 11:35 PM
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	integer Unix timestamp
     * @param	bool	whether to show seconds
     * @param	string	format: us or euro
     * @return	string
     */	
	public function unix_to_human($time = '', $seconds = false, $fmt = 'us')
	{
		$r  = date('Y', $time).'-'.date('m', $time).'-'.date('d', $time).' ';
		
		if ($fmt == 'us')
		{
			$r .= date('h', $time).':'.date('i', $time);
		}
		else
		{
			$r .= date('H', $time).':'.date('i', $time);
		}
	
		if ($seconds) $r .= ':'.date('s', $time);
	
		if ($fmt == 'us') $r .= ' '.date('A', $time);
		
		return $r;
	}

    /**
     * Convert "human" date to GMT
     *
     * Reverses the above process
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	string	format: us or euro
     * @return	integer
     */	
	public function human_to_unix($datestr = '')
	{
		if ($datestr == '') return false;
	
		$datestr = trim($datestr);
		$datestr = preg_replace("/\040+/", "\040", $datestr);

		if (!preg_match('/^[0-9]{2,4}\-[0-9]{1,2}\-[0-9]{1,2}\s[0-9]{1,2}:[0-9]{1,2}(?::[0-9]{1,2})?(?:\s[AP]M)?$/i', $datestr))
            return false;

		$split = preg_split("/\040/", $datestr);

		$ex = explode("-", $split['0']);
	
		$year  = (strlen($ex['0']) == 2) ? '20'.$ex['0'] : $ex['0'];
		$month = (strlen($ex['1']) == 1) ? '0'.$ex['1']  : $ex['1'];
		$day   = (strlen($ex['2']) == 1) ? '0'.$ex['2']  : $ex['2'];

		$ex = explode(":", $split['1']);
	
		$hour = (strlen($ex['0']) == 1) ? '0'.$ex['0'] : $ex['0'];
		$min  = (strlen($ex['1']) == 1) ? '0'.$ex['1'] : $ex['1'];

		if (isset($ex['2']) && preg_match('/[0-9]{1,2}/', $ex['2']))
		{
			$sec  = (strlen($ex['2']) == 1) ? '0'.$ex['2'] : $ex['2'];
		}
		else
		{
			// Unless specified, seconds get set to zero.
			$sec = '00';
		}
	
		if (isset($split['2']))
		{
			$ampm = strtolower($split['2']);
		
			if (substr($ampm, 0, 1) == 'p' AND $hour < 12)
				$hour = $hour + 12;
			
			if (substr($ampm, 0, 1) == 'a' AND $hour == 12)
				$hour =  '00';
			
			if (strlen($hour) == 1)
				$hour = '0'.$hour;
		}
			
		return mktime($hour, $min, $sec, $month, $day, $year);
	}
    
    /**
     * Timezones
     *
     * Returns an array of timezones or if a timezone is set 
     * will return the number of hours offset from UTC.
     *
     * Credit: http://codeigniter.com/user_guide/helpers/date_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	string	timezone
     * @return	string
     */	
	public function timezones($tz = '')
	{
		// Note: Don't change the order of these even though
		// some items appear to be in the wrong order
		$zones = array( 
						'UM12'		=> -12,
						'UM11'		=> -11,
						'UM10'		=> -10,
						'UM95'		=> -9.5,
						'UM9'		=> -9,
						'UM8'		=> -8,
						'UM7'		=> -7,
						'UM6'		=> -6,
						'UM5'		=> -5,
						'UM45'		=> -4.5,
						'UM4'		=> -4,
						'UM35'		=> -3.5,
						'UM3'		=> -3,
						'UM2'		=> -2,
						'UM1'		=> -1,
						'UTC'		=> 0,
						'UP1'		=> +1,
						'UP2'		=> +2,
						'UP3'		=> +3,
						'UP35'		=> +3.5,
						'UP4'		=> +4,
						'UP45'		=> +4.5,
						'UP5'		=> +5,
						'UP55'		=> +5.5,
						'UP575'		=> +5.75,
						'UP6'		=> +6,
						'UP65'		=> +6.5,
						'UP7'		=> +7,
						'UP8'		=> +8,
						'UP875'		=> +8.75,
						'UP9'		=> +9,
						'UP95'		=> +9.5,
						'UP10'		=> +10,
						'UP105'		=> +10.5,
						'UP11'		=> +11,
						'UP115'		=> +11.5,
						'UP12'		=> +12,
						'UP1275'	=> +12.75,
						'UP13'		=> +13,
						'UP14'		=> +14
					);
				
		if ($tz == '') return $zones;
	
		if ($tz == 'GMT') $tz = 'UTC';
	
		return (!isset($zones[$tz])) ? 0 : $zones[$tz];
	}
    
    /**
     * Convert a month number to a month name.
     *
     * @access  public
     * @param   integer
     * @return  integer
     */
    public function month_name($number) 
    {
        $month_name = date("F", mktime(0, 0, 0, $number, 10));
        return $month_name;
    }
    
}

?>
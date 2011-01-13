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

class Format {

    /**
     * Return a string list of the items in an array, using
     * a specified last word to substitute the last comma.
     *
     * eg. a, b, c, d and e
     *     1, 2, 3, 4 or 5
     *
     * @author: Andy Thomas (forrst@antom.co.uk)
     * @access	public
     * @param	array
     * @param	string
     * @return	string
     */
    public function comma_list_ended($arr, $last = 'and') 
    {
        return preg_replace("/,([^,]*)$/", " {$last} $1", join($arr,', '));
    }
    
    /**
     * Limit text to a given number of sentences.
     *
     * @access	public
     * @param	string
     * @param	integer
     * @return	string
     */
    public function limit_text_sentences($text, $count) 
    {
        preg_match('/^([^.!?]*[\.!?]+){0,'. $count .'}/', strip_tags($text), $excerpt);
        return $excerpt[0];
    }
    
    /**
     * Limit text to a given number of words.
     *
     * @access	public
     * @param	string
     * @param	integer
     * @return	string
     */
    public function limit_text_words($text, $count) 
    {
        preg_match('/^([^.!?\s]*[\.!?\s]+){0,'. $count .'}/', strip_tags($text), $excerpt);
        return $excerpt[0];
    }
    
    /**
     * Add leading zeros to a number.
     *
     * Credit: http://core.svn.wordpress.org/trunk/wp-includes/formatting.php
     *
     * @access  public
     * @param   integer
     * @param   integer
     * @return  string
     */
    public function zeroise($number, $threshold) 
    {
        return sprintf('%0'.$threshold.'s', $number);
    }
    
    /**
     * Determines the difference between two timestamps.
     *
     * The difference is returned in a human readable format such as "1 hour",
     * "5 mins", "2 days".
     *
     * Credit: http://core.svn.wordpress.org/trunk/wp-includes/formatting.php
     *
     * @access  public
     * @param   int
     * @param   int
     * @return  string
     */
    public function human_time_diff($from, $to = '') 
    {
        if ( empty($to) )
            $to = time();
        $diff = (int) abs($to - $from);
        if ($diff <= 3600) {
            $mins = round($diff / 60);
            if ($mins <= 1) {
                $mins = 1;
            }

            if($mins == 1)
                $since = sprintf('%s min', $mins);
            else
                $since = sprintf('%s mins', $mins);
        } else if (($diff <= 86400) && ($diff > 3600)) {
            $hours = round($diff / 3600);
            if ($hours <= 1) {
                $hours = 1;
            }
            if($hours == 1)
                $since = sprintf('%s hour', $hours);
            else
                $since = sprintf('%s hours', $hours);
        } elseif ($diff >= 86400) {
            $days = round($diff / 86400);
            if ($days <= 1) {
                $days = 1;
            }
            if($days == 1)
                $since = sprintf('%s day', $days);
            else
                $since = sprintf('%s days', $days);
        }
        return $since;
    }
    
    /**
     * Properly strip all HTML tags including script and style.
     *
     * Credit: http://core.svn.wordpress.org/trunk/wp-includes/formatting.php
     *
     * @access  public
     * @param   string
     * @param   bool
     * @return  string
     */
    public function strip_all_tags($string, $remove_breaks = false) 
    {
        $string = preg_replace('@<(script|style)[^>]*?>.*?</\\1>@si', '', $string);
        $string = strip_tags($string);

        if ( $remove_breaks )
            $string = preg_replace('/[\r\n\t ]+/', ' ', $string);

        return trim($string);
    }
    
    /**
     * Check if an email address is valid.
     *
     * Credit: http://codeigniter.com/user_guide/helpers/email_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access  public
     * @param   string
     * @return  bool
     */
    public function is_valid_email($address)
	{
		return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $address)) ? false : true;
	}
    
    /**
     * Converts number of bytes to human readable number by taking the number of that unit
     * that the bytes will go into it. Supports TB value.
     *
     * Please note that integers in PHP are limited to 32 bits, unless they are on
     * 64 bit architecture, then they have 64 bit size. If you need to place the
     * larger size then what PHP integer type will hold, then use a string. It will
     * be converted to a double, which should always have 64 bit length.
     *
     * Credit: http://core.svn.wordpress.org/trunk/wp-includes/functions.php
     *
     * @access  public
     * @param   int
     * @param   int
     * @return  bool|string
     */
    public function size_format($bytes, $decimals = 0) {
        $quant = array(
            // ========================= Origin ====
            'TB' => 1099511627776,  // pow( 1024, 4)
            'GB' => 1073741824,     // pow( 1024, 3)
            'MB' => 1048576,        // pow( 1024, 2)
            'kB' => 1024,           // pow( 1024, 1)
            'B ' => 1,              // pow( 1024, 0)
        );
        foreach ( $quant as $unit => $mag )
            if ( doubleval($bytes) >= $mag )
                return number_format( $bytes / $mag, $decimals ) . ' ' . $unit;

        return false;
    }
    
    /**
     * Takes a plural word and makes it singular.
     *
     * Credit: http://codeigniter.com/user_guide/helpers/inflector_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	string
     * @return	string
     */	
	public function singular($str)
	{
		$str = strtolower(trim($str));
		$end = substr($str, -3);
	
		if ($end == 'ies')
		{
			$str = substr($str, 0, strlen($str)-3).'y';
		}
		elseif ($end == 'ses')
		{
			$str = substr($str, 0, strlen($str)-2);
		}
		else
		{
			$end = substr($str, -1);
		
			if ($end == 's')
			{
				$str = substr($str, 0, strlen($str)-1);
			}
		}
	
		return $str;
	}
    
    /**
     * Takes a singular word and makes it plural
     *
     * Credit: http://codeigniter.com/user_guide/helpers/inflector_helper.html
     * License: http://codeigniter.com/user_guide/license.html
     *
     * @access	public
     * @param	string
     * @param	bool
     * @return	string
     */	
	public function plural($str, $force = false)
	{
		$str = strtolower(trim($str));
		$end = substr($str, -1);

		if ($end == 'y')
		{
			// Y preceded by vowel => regular plural
			$vowels = array('a', 'e', 'i', 'o', 'u');
			$str = in_array(substr($str, -2, 1), $vowels) ? $str.'s' : substr($str, 0, -1).'ies';
		}
		elseif ($end == 's')
		{
			if ($force == TRUE)
			{
				$str .= 'es';
			}
		}
		else
		{
			$str .= 's';
		}

		return $str;
	}
    
    /**
     * Format an amount of money with HTML currency symbols.
     *
     * Use a 2 digit upper case ISO code to specify a country.
     *
     * @access	public
     * @param	float
     * @param	string
     * @return	string
     */	
    public function format_country_currency( $amount, $country = '' ) {
        $currency_before = '';
        $currency_after = '';
        
        if( $country == 'GB' || $country == 'IE' || $country == 'CY' ) $currency_before = '&pound;';
        if( $country == 'AT' || $country == 'BE' || $country == 'FI' || $country == 'FR' || 
            $country == 'DE' || $country == 'GR' || $country == 'GP' || $country == 'IT' ||
            $country == 'LU' || $country == 'NL' || $country == 'PT' || $country == 'SI' ||
            $country == 'ES') $currency_before = '&euro;';
        if( $country == 'BR' ) $currency_before = 'R$';
        if( $country == 'CN' || $country == 'JP' ) $currency_before = '&yen;';
        if( $country == 'CR' ) $currency_before = '&cent;';
        if( $country == 'HR' ) $currency_after = ' kn';
        if( $country == 'CZ' ) $currency_after = ' kc';
        if( $country == 'DK' ) $currency_before = 'DKK ';
        if( $country == 'EE' ) $currency_after = ' EEK';
        if( $country == 'HK' ) $currency_before = 'HK$';
        if( $country == 'HU' ) $currency_after = ' Ft';
        if( $country == 'IS' || $country == 'SE' ) $currency_after = ' kr';
        if( $country == 'IN' ) $currency_before = 'Rs. ';
        if( $country == 'ID' ) $currency_before = 'Rp. ';
        if( $country == 'IL' ) $currency_after = ' NIS';
        if( $country == 'LV' ) $currency_before = 'Ls ';
        if( $country == 'LT' ) $currency_after = ' Lt';
        if( $country == 'MY' ) $currency_before = 'RM';
        if( $country == 'MT' ) $currency_before = 'Lm';
        if( $country == 'NO' ) $currency_before = 'kr ';
        if( $country == 'PH' ) $currency_before = 'PHP';
        if( $country == 'PL' ) $currency_after = ' z';
        if( $country == 'RO' ) $currency_after = ' lei';
        if( $country == 'RU' ) $currency_before = 'RUB';
        if( $country == 'SK' ) $currency_after = ' Sk';
        if( $country == 'ZA' ) $currency_before = 'R ';
        if( $country == 'KR' ) $currency_before = 'W';
        if( $country == 'CH' ) $currency_before = 'SFr. ';
        if( $country == 'SY' ) $currency_after = ' SYP';
        if( $country == 'TH' ) $currency_after = ' Bt';
        if( $country == 'TT' ) $currency_before = 'TT$';
        if( $country == 'TR' ) $currency_after = ' TL';
        if( $country == 'AE' ) $currency_before = 'Dhs. ';
        if( $country == 'VE' ) $currency_before = 'Bs. ';
        
        if( $currency_before == '' && $currency_after == '' ) $currency_before = '$';
        
        return $currency_before . number_format( $amount, 2 ) . $currency_after;
    }

}

?>
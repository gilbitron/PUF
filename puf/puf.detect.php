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

class Detect {

    /**
     * Check to see if the Http User Agent is an iPhone.
     *
     * @access  public
     * @return  bool
     */
    public function is_iphone()
    {
        return (bool) strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
    }
    
    /**
     * Check to see if the Http User Agent is an iPod.
     *
     * @access  public
     * @return  bool
     */
    public function is_ipod()
    {
        return (bool) strpos($_SERVER['HTTP_USER_AGENT'], 'iPod');
    }
    
    /**
     * Check to see if the Http User Agent is an iPad.
     *
     * @access  public
     * @return  bool
     */
    public function is_ipad()
    {
        return (bool) strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
    }
    
    /**
     * Check to see if the Http User Agent is an Android.
     *
     * @access  public
     * @return  bool
     */
    public function is_android()
    {
        return (bool) strpos($_SERVER['HTTP_USER_AGENT'], 'Android');
    }
    
    /**
     * Check to see if the Http User Agent is an Palm Pre.
     *
     * @access  public
     * @return  bool
     */
    public function is_palmpre()
    {
        return (bool) strpos($_SERVER['HTTP_USER_AGENT'], 'webOS');
    }
    
    /**
     * Check to see if the Http User Agent is an BlackBerry.
     *
     * @access  public
     * @return  bool
     */
    public function is_blackberry()
    {
        return (bool) strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry');
    }
    
    /**
     * Check to see if SSL is used.
     *
     * Credit: http://core.svn.wordpress.org/trunk/wp-includes/functions.php
     *
     * @access  public
     * @return  bool
     */
    public function is_ssl() 
    {
        if ( isset($_SERVER['HTTPS']) ) {
            if ( 'on' == strtolower($_SERVER['HTTPS']) )
                return true;
            if ( '1' == $_SERVER['HTTPS'] )
                return true;
        } elseif ( isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
            return true;
        }
        return false;
    }
    
    /**
	 * Check to see if this is this a referral.
     *
     * Credit: http://codeigniter.com/user_guide/libraries/user_agent.html
     * License: http://codeigniter.com/user_guide/license.html
	 *
	 * @access	public
	 * @return	bool
	 */			
	public function is_referral()
	{
		return (!isset($_SERVER['HTTP_REFERER']) OR $_SERVER['HTTP_REFERER'] == '') ? false : true;
	}
    
}

?>
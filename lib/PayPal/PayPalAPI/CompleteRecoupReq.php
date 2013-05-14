<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\;
/**
 * 
 */
class CompleteRecoupReq  
   extends PPXmlMessage{

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var PayPal\\CompleteRecoupRequestType	 
	 */ 
	public $CompleteRecoupRequest;


	public function toXMLString()
	{
		    $str = '';
			$str .= '<ns:CompleteRecoupReq>';
			if($this->CompleteRecoupRequest != NULL)
			{
		   		$str .= '<ns:CompleteRecoupRequest>';
				$str .= $this->CompleteRecoupRequest->toXMLString();
				$str .= '</ns:CompleteRecoupRequest>';
			}
			$str .= '</ns:CompleteRecoupReq>';
			return $str;
	}
   
}
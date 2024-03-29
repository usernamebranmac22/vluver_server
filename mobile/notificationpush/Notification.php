<?php
class Notification{
	private $typenotification;
	private $title;
	private $message;
	private $image_url;
	private $action;
	private $action_destination;
	private $data;
	
	function __construct(){
         
	}

    /**
     * @param mixed $typenotification
     */
    public function setTypenotification($typenotification)
    {
        $this->typenotification = $typenotification;
    }

    public function getTypenotification()
    {
        return $this->typenotification;
    }
	public function setTitle($title){
		$this->title = $title;
	}
 
	public function setMessage($message){
		$this->message = $message;
	}
 
	public function setImage($imageUrl){
		$this->image_url = $imageUrl;
	}

	public function setAction($action){
		$this->action = $action;
	}
 
	public function setActionDestination($actionDestination){
		$this->action_destination = $actionDestination;
	}
 
	public function setPayload($data){
		$this->data = $data;
	}
	
	public function getNotificatin(){
		$notification = array();
		$notification['type'] = $this->typenotification;
		$notification['title'] = $this->title;
		$notification['message'] = $this->message;
		$notification['image'] = $this->image_url;
		$notification['action'] = $this->action;
		$notification['action_destination'] = $this->action_destination;
		return $notification;
	}
}
?>

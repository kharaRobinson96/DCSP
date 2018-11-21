<?php
include("db_functions.php");
class Poll {
    private $pollID="";
    private $groupID="";
    
    //if this were a class for a ball, name this function createNewBall
		public static function createNewObject() {
			//note: do NOT pass the classID as an argument
			//to make a new object of this class, call this in your code (this is for frontend):
			// $object = ClassName::createNewObject();
			// make an empty object
			$newObject = new Poll();
			
			// there should be a database function similarly named
			$newObject-> pollID = create_object()
			return $newObject;
		}
		public static function retrieveObject($objectID) {
			//note: you MUST pass the classID as THE ONLY argument
			//to make a new object of this class, call this in your code (this is for frontend):
			// $object = ClassName::retrieveObject();
			// make an empty object
			$Object = new Poll();
			$newObject->pollID = $pollID;
			
			// there should be a database function similarly named
			$details = get_object_details_from_id($pollID);
			$newObject->groupID = $details["groupID"];
			return $newObject;
		}

    public function isOpen()
    {
        //Returns true if the poll is open, false if it is closed.
        if($this->poll()==0 ){
            return false;
        }
        if($this->poll()==1){
            return true;
        }

    }
    public function setOpen()
    {
        //Sets poll to open, stores in database.
        set_poll_open($this->groupID);
    }
    public function setClosed()
    {
        //Sets poll to closed, stores in database.
        set_poll_closed($this->groupID);
    }
    public function getResults()
    {
    //Gets results of poll.
    get_votes_for_option($this->pollOptionID);
    }
    public function vote($userID, $pollOptionID)
    {
        //Creates a vote for a poll option by specified user and stores in database. 
        cast_vote($this->pollOptionID, $userID);
    }
    public function usersVotedList() 
    {
        //Retrieves which users have voted.
        get_votes_for_option($this->pollOptionID);
        return get_array("SELECT  * 
                        FROM Votes 
                        WHERE useerID = $userID");
    }
    
}
?>

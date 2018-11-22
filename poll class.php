<?php
include("db_functions.php");
class Poll {
    private $pollID="";
    private $groupID="";
    
		public static function createNewPoll($pollID,$groupID) {
			
            $newPoll = new Poll();
            $newPoll->pollID=$pollID;
            $newPoll->groupID=$groupID;
			
			$newPoll-> pollID = create_poll($pollID,$groupID);
			return $newPoll;
		}
		public static function retrievePoll($pollID) {
			
			$Poll = new Poll();
			$newPoll->pollID = $pollID;
			
			$details = get_poll_details_from_id($pollID);
            $newPoll->groupID = $details["groupID"];
            $newPoll->pollID = $details["pollID"];

			return $newPoll;
		}

    public function isOpen()
    {
        //Returns true if the poll is open, false if it is closed.
        if($this->is_poll_open($pollID)==false ){
            return false;
        }
        if($this->is_poll_open($pollID)==true){
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
        users_who_voted($this->pollID);
    }
    
}
?>

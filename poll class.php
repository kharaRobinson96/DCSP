<?php
include("db_functions.php");
class Poll {
    private $pollID= -16;
    private $groupID= -16;
    
		public static function createNewPoll($pollID,$groupID) {
			
            $newPoll = new Poll();
            $newPoll->groupID=$groupID;
			
			$newPoll-> pollID = create_poll($pollID,$groupID);
			return $newPoll;
		}
		public static function retrievePoll($pollID) {
			
			$Poll = new Poll();
			$newPoll->pollID = $pollID;
			
			$details = get_poll_details_from_id($pollID);
            $newPoll->groupID = $details["groupID"];

            return $newPoll;
        }
    }
     //  Returns true if poll is open, false if it is closed
    public function isOpen()
    {
        //Returns true if the poll is open, false if it is closed.
         return is_open($this->pollID);
    }
     //  Sets poll to open
    public function setOpen()
    {
        //Sets poll to open, stores in database
        set_poll_open($this->groupID);
    }
    
    //  Sets poll to closed
    public function setClosed()
    {
        //Sets poll to closed, stores in database.
        set_poll_closed($this->groupID);
    }
     //  Gets results of poll. returns an associative array, with the structure of
    //  result["restaurantID"] = 32, result["voteCount"] = 2
    public function getResults()
    {
    //Gets results of poll.
        return get_poll_results($this->pollID);
    }
     //  Creates a vote for a poll option by specified user and stores in database. 
    public function vote($userID, $pollOptionID)
    {
        //Creates a vote for a poll option by specified user and stores in database. 
        cast_vote($this->pollOptionID, $userID);
    }
    
    //  Retrieves which users have voted.
    public function usersVotedList() 
    {
        get_users_voted($this->pollID);
    }
    
}

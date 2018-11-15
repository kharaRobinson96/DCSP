<?php
include("db_functions.php");
class Poll {
    private $pollID="";
    private $groupID="";

    function __construct($pollID)
    {
        //Constructor. Retrieve existing poll from database.
        $this->pollID=$pollID;

    }
    function __construct($groupID)
    {
       //Constructor. Create new poll and store in database.
       $newPoll->groupID=$groupID;

    }
    public function isOpen()
    {
        //Returns true if the poll is open, false if it is closed.
        if($this->pollID == false){
            $this->pollID= set_poll_closed($groupID);
        }
        return $this->pollID;

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
    get_details_for_option($this->pollOptionID);
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
    }
    
}



?>
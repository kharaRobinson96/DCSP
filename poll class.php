<?php
class Poll{
    public $userID, $pollID, $groupID, $pollOptionID, $count, $voteCount;
    function __construct($pollID)
    {
        $this->db = $dbConnection;
        
        //Constructor. Retrieve existing poll from database.
      /* $this->$userID = $userID;
       $this->$pollID = $pollID;
       $this->$groupID = $groupID;
       $this->$pollOptionID = $pollOptionID;
*/
        $result = mysqli_query($this->dbConnect, $sqlQuery);
        if(!$result){
            die('Error in query: '. mysqli_error());
        }
        $data= array();
        while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
            $data[]=$row;
        }
        return $data;
        }
    }
    function __construct($groupID)
    {
        if(!$this->db){ 
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPwd, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    public function isOpen()
    {
        //Returns true if the poll is open, false if it is closed.
        if(isOpen()= 1)
        {
            return true;
        }
        if(isOpen()= 0)
        {
            return false;
        }

    }
    public function setOpen()
    {
        //Sets poll to open, stores in database.
        $this->$poll(true);

    }
    public function setClosed()
    {
        //Sets poll to closed, stores in database.
        $this->$poll(false);
    }
    public function getResults()
    {
    
    }
    public function vote($userID, $pollOptionID)
    {
        //Creates a vote for a poll option by specified user and stores in database. 
        {
            if(!isset($data['pollId']) || !isset($data['pollOptionId']) || isset($_COOKIE[$data['pollId']])) {
                return false;
            }else{
                $sql = "SELECT * FROM ".$this->Restaurant." WHERE pollId = ".$data['pollId']." AND pollOptionId = ".$data['pollOptionId'];
                $preVote = $this->getQuery($sql, 'count');
                if($preVote > 0){
                    $query = "UPDATE ".$this->Restaurant." SET voteCount = voteCount+1 WHERE pollId = ".$data['pollId']." AND pollOptionId = ".$data['pollOptionId'];
                    $update = $this->db->query($query);
                }else{
                    $query = "INSERT INTO ".$this->Restaurant." (pollId,pollOptionId,voteCount) VALUES (".$data['pollId'].",".$data['pollOptionId'].",1)";
                    $insert = $this->db->query($query);
                }
                return true;
            }
    }
    public function usersVotedList() 
    {
        //Retrieves which users have voted.
        "SELECT * FROM Restaurant WHERE $userID AND $pollOptionID";


    }
}



?>
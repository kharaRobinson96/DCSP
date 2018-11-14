<?php
class Group{
    public $groupID, $groupName;
    function __construct($groupID)
    {
        //Constructor. Set groupID. Retrieve groupName from database and store.
        $this->groupID=$groupID;


    }

    function __construct($groupName)
    {
        //Constructor. Set groupName, create new group and store in database.

        $this->groupName=$groupName;

    }

    public function getUsers()
    {
        //Returns a list of userIDs for users in the group.
        return array("SELECT *
                      FROM Users
                      WHERE userID= $userID");
        

        
    }

}
?>
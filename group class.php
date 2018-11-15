<?php
include("db_functions.php");
class Group{
    private $groupID ="" ;
    private $groupName= "";
    public function Group(int $groupID)
    {
    //Constructor. Set groupID. Retrieve groupName from database and store.
    $setGroupID= new Group();

    $setGroupID->groupID=$groupID;
    }
    public function Group(string $groupName)
    {
    //Constructor. Set groupName, create new group and store in database.
    $newGroupName= new Group();
    $newGroupName->groupName=$groupName;
    }
    public function getUsers()
    {
    //Returns a list of userIDs for users in the group.
    return get_users_from_group($this->$groupID);
    }
}
?>`
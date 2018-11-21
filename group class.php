<?php
include("db_functions.php");
class Group{
    private $grouptID = 0; //any negative number will work
	private $groupName = "";
		
	
		//if this were a class for a ball, name this function createNewBall
		public static function createNewObject() {
			//note: do NOT pass the classID as an argument
			//to make a new object of this class, call this in your code (this is for frontend):
			// $object = ClassName::createNewObject();
			// make an empty object
			$newObject = new Group();
			$newObject->groupName = groupName;
			
			// there should be a database function similarly named
			$newObject-> groupID = create_object()
			return $newObject;
		}
		public static function retrieveGroup($groupID) {
			//note: you MUST pass the classID as THE ONLY argument
			//to make a new object of this class, call this in your code (this is for frontend):
			// $object = ClassName::retrieveObject();
			// make an empty object
			$Object = new Group();
			$newObject->groupID = $groupID;
			
			// there should be a database function similarly named
			$details = get_object_details_from_id($groupID);
			$newObject->groupName = $details["groupName"];
			
			return $newObject;
		}
    
    public function getUsers()
    {
    //Returns a list of userIDs for users in the group.
    return get_users_from_group($this->groupID);
    }
}
?>`

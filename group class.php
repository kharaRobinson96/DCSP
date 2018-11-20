<?php
include("db_functions.php");
class Group{
    private $objectID = 0; //any negative number will work
	private $objectName = "";
	private $attribute1 ="";
		
	
		//if this were a class for a ball, name this function createNewBall
		public static function createNewObject($arg1) {
			//note: do NOT pass the classID as an argument
			//to make a new object of this class, call this in your code (this is for frontend):
			// $object = ClassName::createNewObject();

			// make an empty object
			$newObject = new ClassName();

			$newObject->attribute1 = arg1;
			

			// there should be a database function similarly named
			$newObject-> classID = create_object(ATTRIBUTES)

			return $newObject;
		}

		public static function retrieveGroup($groupID) {
			//note: you MUST pass the classID as THE ONLY argument
			//to make a new object of this class, call this in your code (this is for frontend):
			// $object = ClassName::retrieveObject();

			// make an empty object
			$Object = new ClassName();

			$newObject->objectID = $objectID;
			
			// there should be a database function similarly named
			$details = get_object_details_from_id($groupID);

			$newObject->attribute1 = $details["attribute1"];
			

			return $newObject;
		}
    
    public function getUsers()
    {
    //Returns a list of userIDs for users in the group.
    return get_users_from_group($this->groupID);
    }
}
?>`

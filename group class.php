<?php
include("db_functions.php");
class Group{
    private $grouptID = 0; //any negative number will work
	private $groupName = "";
		
			public static function createNewGroup($groupID, $groupName) {
			
			$newGroup = new Group();
			$newGroup->groupName = groupName;
			$newGroup->groupID = groupID;
			
			$newGroup-> groupID = create_group($groupID, $groupName);

			return $newGroup;
		}
		public static function retrieveGroup($groupID) {
			
			$Group = new Group();

			$newGroup->groupID = $groupID;
			$newGroup->groupName=$groupName;
			
			$details = get_group_details_from_id($groupID);
			$newGroup->groupName = $details["groupName"];
			$newGroup->groupID = $details["groupID"];

			return $newGroup;
		}
    
    public function getUsers()
    {
    //Returns a list of userIDs for users in the group.
    return get_users_from_group($this->groupID);
	}

	public function joinGroup($groupID){
		add_user_to_group($this->userID,$groupID);
	}
	public function leaveGroup($groupID){
		remove_user_from_group($this->userID,$groupID);

	}
}
?>`

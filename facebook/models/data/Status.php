<?php
	class StatusModel extends Model{
		protected $table = 'status';

		public function findByUser($id){
			$request = $this->db->prepare("SELECT * FROM $this->table WHERE $this->table.user_id = :id");
			$request->execute([
					":id" => $id
				]);
			return $request->fetch();
		}
	}
?>
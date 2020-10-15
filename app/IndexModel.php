<?php
class IndexModel extends Observable_Model {
	public function getAll():array{
		$courses=json_decode($this->loadData('courses'),true);

		$popular_column = array_column($courses["courses"],3);
		$recommended_colum = array_column($courses["courses"],2);


		array_multisort($recommended_colum,SORT_DESC,$courses["courses"]);
		$recommended = array_slice($courses["courses"],0,8);
		array_multisort($popular_column,SORT_DESC,$courses["courses"]);
		$popular = array_slice($courses["courses"],0,8);

		return ['popular'=>$popular,'recommended'=>$recommended];
		

	}
	public function getRecord(String $id):array{
		return [];
	}
}
?>
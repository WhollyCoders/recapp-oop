<?php
class WeighIn{
  public $connection;
  public $id;
  public $competitor_ID;
  public $firstname;
  public $lastname;
  public $weight;
  public $competition_ID;
  public $week_ID;
  public $team_ID;
  public $notes;

  public function __construct($connection){
    $this->connection = $connection;
    $this->create_weigh_in_table();
  }

  public function create_weigh_ins_table(){
    $sql = "";
    $result = mysqli_query($this->connection, $sql);
    if(!$result){$message = '*** ERROR *** | Unable to CREATE WEIGH-INS Table<br>';}
  }
}

 ?>

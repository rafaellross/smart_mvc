<?php
  class TimeSheet {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public function __construct($timesheet) {
        foreach ($timesheet as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query("SELECT id, type, DATE_FORMAT(date_created,'%d/%m/%Y') date_created, username, content, ts_status as status FROM fillable");

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $timesheet) {
        $list[] = new TimeSheet($timesheet);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM employees WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $employee = $req->fetch();

      return new Employee($employee);
    }
    public static function Days(){
        $Days = array();
        $Monday = new stdClass();
        $Monday->description = "Monday";
        $Monday->short = "mon";
        $Monday->number = 1;
        array_push($Days, $Monday);

        $Tuesday = new stdClass();
        $Tuesday->description = "Tuesday";
        $Tuesday->short = "tue";
        $Tuesday->number = 2;
        array_push($Days, $Tuesday);

        $Wednesday = new stdClass();
        $Wednesday->description = "Wednesday";
        $Wednesday->short = "wed";
        $Wednesday->number = 3;
        array_push($Days, $Wednesday);

        $Thursday = new stdClass();
        $Thursday->description = "Thursday";
        $Thursday->short = "thu";
        $Thursday->number = 4;
        array_push($Days, $Thursday);

        $Friday = new stdClass();
        $Friday->description = "Friday";
        $Friday->short = "fri";
        $Friday->number = 5;
        array_push($Days, $Friday);

        $Saturday = new stdClass();
        $Saturday->description = "Saturday";
        $Saturday->short = "sat";
        $Saturday->number = 6;
        array_push($Days, $Saturday);
        return $Days;
      }    
    
    public static function Jobs(){
        $list_jobs = [
          '' => 'Select Job',
          'rdo' => 'RDO',
          'pld' => 'PLD',
          'anl' => 'Annual Leave',
          'sick' => 'Sick Leave',
          'tafe' => 'TAFE',        
          '001' => '001 - Office',
          '002' => '002 - Belfield',		
                '099' => '099 - Office',		
                '270' => '270 - 253-255 Oxford St - Bondi',			
          '314' => '314 - Warriewood',		
          '381' => '381 - Warriewood - Stage 2',				
          '372' => '372 - Harbord Diggers',
          '401' => '401 - Airport',
          '417' => '417 - Clovelly Rd Clovelly',
          '427' => '427 - Elger St Glebe',
          '429' => '429 - 105 Phillip St Parramatta',
          '445' => '445 - Anzac Memorial',        		
          '446' => '446 - Woollahra Retirement (ARU)',
          '458' => '458 - Peppers Pokolbin/Spices',
          '463' => '463 - UBS Chifley',
          '476' => '476 - 117 Kurraba Rd Neutral Bay',
          '481' => '481 - 76 Edinburgh Rd Marrickville',
          '500' => '500 - Telstra Manly Belgrave St',
          '506' => '506 - 175 Pitt St',		
          '507' => '507 - Dean Revesby',
          '511' => '511 - 12 Philip St Parra (Church St)',
          '514' => '514 - Carr St Coogee',
          '517' => '517 - Kogarah RSL',
          '518' => '518 - Syd Olympic Park, Homebush',
                '520' => '520 - The Crescent Vaucluse',		
          '525' => '525 - Page St Banksmeadow',
          '528' => '528 - AMP 7 Macquarie Place',		
          '535' => '535 - Randwick',		
          '538' => '538 - 80 Pitt Street',
          '540' => '540 - ASQ Aust Square',
          '544' => '544 - Ben Pritchard Bronte',
          '545' => '545 - Barker College',
          '547' => '547 - 10 Vernon St Lewisham',
          '548' => '548 - 201 Kent Street',
          '549' => '549 - Olphest St Vaucluse',
          '550' => '550 - Marcos Gym',
          '551' => '551 - Mirvac - Marrickville',
        '554' => '554 - Point Piper',				
          '555' => '555 - TBS Hurstville Stage 2',		
      ];
      return $list_jobs;
    }
  }

  
  
<?php

class job {
    private $title;
    public $description;
    public $visible;
    public $months;

    
    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
    }


    public function setTitle($t){
        if($t == '') {
            $this->title = 'N/A';
        } else {
            $this->title = $t;
        }
    }

    public function getTitle(){
        return $this->title;
    }


    function getDurationAsString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "$years years $extraMonths months";
    }

}



$job1 = new job();
$job1->setTitle('PHP Developer');
$job1->description = 'This is an awesome job!!';
$job1->visible = true;
$job1->months = 16;

$job2 = new job();
$job2->setTitle('Pyton Developer');
$job2->description = 'This is an awesome job!!';
$job2->visible = true;
$job2->months = 24;

$job3 = new job();
$job3->setTitle('');
$job3->description = 'This is an awesome job!!';
$job3->visible = true;
$job3->months = 32;


$jobs = [
    $job1,
    $job2,
    $job3
    // [
    //   'title' => 'PHP Developer',
    //   'description' => 'This is an awesome job!!!',
    //   'visible' => true,
    //   'months' => 16,
    // ],
    // [
    //   'title' => 'Python Dev',
    //   'description' => 'Esta es la descripción de Python Dev',
    //   'visible' => false,
    //   'months' => 14,
    // ],
    // [
    //   'title' => 'Devops',
    //   'description' => '',
    //   'visible' => false,
    //   'months' => 5,
    // ],
    // [
    //   'title' => 'Node dev',
    //   'description' => '',
    //   'visible' => true,
    //   'months' => 24,
    // ],
    // [
    //   'title' => 'Frontend dev',
    //   'description' => '',
    //   'visible' => true,
    //   'months' => 3,
    // ],
  ];


  
  function printJob($job) {
  
    if($job->visible != true){
      return;
    }
  
    echo '<li class="work-position">';
    echo  '<h5>' . $job->getTitle() . '</h5>';
    echo  '<p>' . $job->description . '</p>';
    echo  '<p>' . $job->getDurationAsString() . '</p>';
  
    echo  '<strong>Achievements:</strong>';
    echo  '<ul>';
    echo  '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '</ul>';
    echo	'</li>';
  }
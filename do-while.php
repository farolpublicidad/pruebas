<?php
// $var1 = 1;
$name = 'Farol Publicidad';
// $name = 'Farol';
// $name = 123;

// Para depurar o “debuggear” una variable, se usa la función var_dump(). Pasándole como parámetro la variable que queremos depurar. Ejemplo:
// var_dump($name);

// Las comillas simples crean cadenas de texto normales. Mientras que las comillas dobles intentan interpretar código php dentro de la cadena. Como por ejemplo cambiar una variable por su valor.

// $jobs = [
//   'PHP Developer',
//   'Pyton dev',
//   'Devops'
// ];


// var_dump($jobs[0]);
// var_dump($jobs);

// Php usa la estrategia mapa en los arreglos, lo que quiere decir es que sus arreglos se indexan empezado desde el cero hacia los positivos de los números enteros, pero esta indexación se puede cambiar ademas de que se puede usar arreglos en vez de valores, y lo que tendríamos es un arreglos de arreglos.

$jobs = [
  [
    'title' => 'PHP Developer',
    'description' => 'I have taken the php course on platzi.com and with that knowledge I have made this web page.',
  ],
  [
    'title' => 'Pyton dev',
    'description' => 'It\'s a technology that I\'m still learning. I know of her that an interpreted programming language, typed dynamically. The way to program is easy, since that is what your programmer focused on to develop it. Besides that his most reliable word is Django.',
  ],
  [
    'title' => 'Devops',
    'description' => 'It is another technology that I am still in the process of learning. In reality, it is not a technology, but also a set of processes that must be carried out so that the application works in production and does not break.',
  ],
];

$skills = [
  [
    'Skills & Tools',
  ],
  [
    'Backend',
    'PHP',
  ],
  [
    'Frontend',
    'HTML',
    'CSS',
  ],
  [
    'Frameworks',
    'Laravel',
    'Bootstrap',
  ],
  [
    'Languages',
    'Spanish',
    'English',
    'Designed by @hectorbenitez',
  ],
  'data' => [
    'mail' => 'Mail: farolpublicidad@gmail.com',
    'phone' => 'Phone: 123456789',
    'linkeding' => 'http://linkedin.com',
    'twitter' => 'Twitter: @farolpublicidad',
  ],
  'summary' => 'I\'m dedicated to graphic design and web programming. I have personal proyentos as a brief comic in my Instagram account. I have done this web page using bootstrap, and php. I like to learn continuously. My short-term mission is to learn php, javascript and the development of mobile applications with navite reac.'
];

$project = [
  0 => 'Project of graphic design and illustration in illustrator.',

  'projectx' => 'The project that I want to present to you is the one mentioned above, the crow, a comic that has the purpose of explaining how a bird, which was happy and had a quiet life, was destroyed. And he, full of bewilderment and rejection of injustice, followed those who caused it. And see how these too are destroyed, and without their intervention. Then he leaves, satisfied, believing that at least there was justice. Maybe someone who sees it after a misfortune, think it\'s a bird of bad luck.',

  1 => 'Project to make a web page with php.',

  'projecty' => 'In this project is the one that you are seeing right now, it is a project where I show my portfolio of the projects that I am doing. And as I know at least basically, technologies such as html, css, javascript and php. In addition to that, the terminal and command line and git and github.',
];

// $holamundo = -2;

// if($holamundo < 2){
//   echo 'es menor que dos';
// }
// else if($holamundo < 4){
//   echo 'es menor que 4';
// }
// else {
//   echo 'es mayor que 4';
// };

// do while = 'haslo mientras'



?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
      </div>
      <div class="col">
        <h1> <h1><?php echo $name; ?></h1>
        <h2><?php echo $jobs[0]['title'] ?></h2>
        <ul>
          <li><?php echo $skills['data']['mail'] ?></li>
          <li><?php echo $skills['data']['phone'] ?></li>
          <li><?php echo $skills['data']['linkeding'] ?></li>
          <li><?php echo $skills['data']['twitter'] ?></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p><?php echo $skills['summary'] ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>
            <li class="work-position">
              <h5><?php echo $jobs[0]['title']; ?></h5>
              <p><?php echo $jobs[0]['description']; ?></p>
              <strong>Achievements:</strong>
              <ul>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
              </ul>
            </li>
            <li class="work-position">
                <h5><?php echo $jobs[1]['title']; ?></h5>
                <p><?php echo $jobs[1]['description']; ?></p>
                <strong>Achievements:</strong>
                <ul>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                </ul>
              </li>
              <li class="work-position">
                  <h5><?php echo $jobs[2]['title']; ?></h5>
                  <p><?php echo $jobs[2]['description']; ?></p>
                  <strong>Achievements:</strong>
                  <ul>
                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                    <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                  </ul>
                </li>
          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <div class="project">
                <h5><?php echo $project[0]; ?></h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p><?php echo $project['projectx'] ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">ILUSTRATOR</span>
                        <span class="badge badge-secondary">PINCELES</span>
                        <span class="badge badge-secondary">SIMBOLOS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5><?php echo $project[1]; ?></h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p><?php echo $project['projecty']; ?></p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" ><?php echo $skills[0][0] ?></h3>
        <h4><?php echo $skills[1][0] ?></h4>
        <ul>
          <li><?php echo $skills[1][1] ?></li>
        </ul>
        <h4><?php echo $skills[2][0] ?></h4>
        <ul>
            <li><?php echo $skills[2][1] ?></li>
            <li><?php echo $skills[2][2] ?></li>
        </ul>
        <h4><?php echo $skills[3][0] ?></h4>
        <ul>
          <li><?php echo $skills[3][1] ?></li>
          <li><?php echo $skills[3][2] ?></li>
        </ul>
        <h3 class="border-bottom-gray" ><?php echo $skills[4][0] ?></h3>
        <ul>
          <li><?php echo $skills[4][1] ?></li>
          <li><?php echo $skills[4][2] ?></li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
        <?php echo $skills[4][3] ?>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>
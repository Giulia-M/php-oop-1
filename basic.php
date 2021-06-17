<?php
include ("./movieArray.php");


class Movie {
  public $title;
  public $year;
  public $description;
  public $vote;
  public $cover;

  public $cast;
  public $language;




  function __construct($sMovie)
  {
    $this->title = $sMovie["title"];
    $this->year = $sMovie["year"];
    $this->description = $sMovie["description"];
    $this->vote = $sMovie["vote"];
    $this->cast = $sMovie["cast"];
    $this->cover = $sMovie["cover"];

    $this->language = $sMovie["language"];


  }


  /*
  function __construct($movieTitle, $movieYear, $movieDescription, $movieVote, $movieCast, $movieLanguage ) {
    $this->title = $movieTitle;
    $this->description = $movieDescription;
    $this->vote = $movieVote;
    $this->cast = $movieCast;
    $this->language = $movieLanguage;
  } 
  */


  public function format() {
      
    $result = 
     "<h1>" . $this->title . "</h1>" .
     "<p>" . $this->year . "</p>" .
     "<p>" . $this->description . "</p>" .
     "<img src=" .  $this->cover . ">" .
     "<p>" . $this->vote . "</p>" .
     "<p>" . $this->cast . "</p>" ;

     if(!$this->getFlagsImg() == NULL) {

      $result .= "<img style='width:50px' src='" .  $this->getFlagsImg()  . "'>" ;
     }
     $result .="<p>" . $this->language . "</p>";

   return $result;
  }
  
  
  public function getFlagsImg() {
    
        if ($this->language == "en") {
        return 'img/en.jpg';
        } else if ($this->language == "it") {
          return 'img/it.png';
        } else {
          return NULL;
        }

        
  }
  
  
}


// $movie1 = new Movie("Mangia prega ama", "2010", "Liz Gilbert è una donna che si è convinta che la piena realizzazione della vita non risieda solamente nell'avere un buon lavoro, una bella casa e un marito dolce e affettuoso. Decisa a scoprire il vero significato dell'esistenza, lascia New York per percorrere un viaggio della durata di un anno attraverso l'Italia, l'India e Bali meditando, mangiando e con l'intenzione di scoprire l'amore autentico.", 5, "Julia Roberts, James Franco, Billy Crudup, Javier Bardem, Richard Jenkins, Viola Davis, Luca Argentero, Arlene Tur, Tuva Novotny, Stephanie Danielson, James Schram",  "en");
// $movie2 = new Movie("Alice in Wonderland", "2010", "Alice in Wonderland è un film del 2010 diretto da Tim Burton. Il film narra di eventi seguenti alle avventure vissute dalla ragazzina narrate nel romanzo Le ..", 5, "Mia Wasikowska, Johnny Depp, Helena Bonham Carter",  "en");
// $movie1->format();
// $movie2->format();

$movieListFull = [];

foreach ($movieList as $singleMovie){
  $currentMovie = new Movie($singleMovie);

  $movieListFull[] = $currentMovie;

  $movieString = $currentMovie->format();
  echo $movieString;
}




// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili 
//    d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati 
// a schermo i valori delle relative proprietà
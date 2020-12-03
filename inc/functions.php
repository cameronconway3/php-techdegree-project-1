<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = array(
    array(
        "quote" => "You know you’re in love when you can’t fall asleep because reality is finally better than your dreams.",
        "source" => "Dr. Suess", 
    ),
    array(
        "quote" => "A house divided against itself cannot stand.",
        "source" => "Abraham Lincoln",
        "year" => 1858
    ),
    array(
        "quote" => "It is our choices, that show what we truly are, far more than our abilities.",
        "source" => "J.K. Rowling",
    ),
    array(
        "quote" => "If music be the food of love, play on.",
        "source" => "William Shakespeare",
        "citation" => "Twelfth Night, Act 1 Scene 1, Line 1; Duke Orsino",
        "year" => 1623,
    ),
    array(
        "quote" => "There is some good in this world, and it’s worth fighting for.",
        "source" => "J.R.R. Tolkien",
        "citation" => "The Two Towers",
        "year" => 1954,
    ),
    array(
        "quote" => "To define is to limit.",
        "source" => "Oscar Wilde",
        "citation" => "The Picture of Dorian Gray",
        "year" => 1890,
    ),
);

// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($array) {
    // $randomInt is equal to a  random number in the range from 0 to the amount of items in array-1 (array index starts at 0)
    $randomInt = rand(0, count($array)-1);
    // Return the $array item at the index $randomInt
    return $array[$randomInt];
}

// Create the printQuote funtion and name it printQuote
function printQuote($array) {

    // Call the 'getRandomQuote' function on $array. Set this to the variable $randomQuote
    $randomQuote = getRandomQuote($array);

    // Empty string to start of the HTML template for the quote
    $quoteTemplate = "";

    // Build body of HTML random quote template
    $quoteTemplate .= "<p class='quote'>" . $randomQuote["quote"] .  "</p>";
    $quoteTemplate .= "<p class='source'>" . $randomQuote["source"];
    // If 'citation' is set, add it to the template
    if(isset($randomQuote["citation"])) {
        $quoteTemplate .= "<span class='citation'>" . $randomQuote["citation"] . "</span>";
    }
    // If 'year' is set, add it to the template.
    if(isset($randomQuote["year"])) {
        $quoteTemplate .= "<span class='year'>" . $randomQuote["year"] . "</span>";
    }
    $quoteTemplate .=  "</p>";

    echo $quoteTemplate;
}
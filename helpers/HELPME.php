<?php

class HELPME
{

    /**
     * Stores the given text to logs/CURRENT_DATE.txt
     *
     * @param $text
     */
    public static function addToLog($text)
    {
        $time = date("Y-m-d H:i:s");
        $date = date("Y-m-d");
        $text = "$time - $text \n";
        $logFile = dirname(__FILE__) . "/../logs/$date.txt";
        $currentText = file_get_contents($logFile);
        $currentText = $currentText ? $currentText : "";
        file_put_contents($logFile, $currentText . $text);
    }

    public static function getRandomSentence()
    {
        $quote = array(
            "I wish I had",
            "Why Can't I have",
            "Can I have",
            "Did you have",
            "Will you get",
            "When will I get"
        );
        $rand_quote = array_rand($quote, 1);
        $items = array(
            "Money",
            "Time",
            "Coffee",
            "A Better Job",
            "A Life",
            "Better Programming Skills",
            "Internet that was mine",
            "More Beer",
            "More Donuts",
            "Candy",
            "My Daughter",
            "Cable",
            "A Dining Room Table",
            "Better Couches",
            "A PS4",
            "A New Laptop",
            "A New Phone",
            "Water",
            "Rum",
            "Movies",
            "A Desktop Computer",
            "A Fish Tank",
            "My Socks",
            "My Jacket",
            "More Coffee",
            "More Koolaid",
            "More Power",
            "A Truck",
            "Toolbox",
            "More fish for Fish Tank",
            "A Screwdriver",
            "A Projector",
            "More Pants"
        );
        $rand_keys = array_rand($items, 1);
        $stmt = $quote[$rand_quote] . " " . $items[$rand_keys];
        return $stmt;
    }

    public static function getRandomHtml()
    {
        return
            "
            <h1>Lorem ipsum dolor sit amet.</h1>
            <div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam earum, fuga minima quae sunt voluptatum. Deleniti distinctio doloremque ea, esse est ipsam molestias natus nostrum rem unde vitae voluptatem!</div><div>Cupiditate, dolore, neque. Adipisci at blanditiis explicabo ipsum iusto minus optio provident, quam quibusdam, sunt unde ut. Corporis dicta doloremque ea eveniet modi nam nostrum provident recusandae, temporibus? Enim, rem?</div><div>Aperiam eum explicabo iusto omnis repellendus! Alias amet aspernatur assumenda delectus doloribus, dolorum earum eos eum fugit, impedit labore, libero praesentium qui quo similique totam ut voluptates. Eum expedita, quas!</div><div>Adipisci asperiores consequuntur cum deserunt doloribus eos error esse et facere harum impedit ipsum, libero modi nisi perspiciatis quae quasi repudiandae tempore, ut veritatis! Accusantium eligendi hic nulla tenetur voluptates.</div><div>Commodi corporis cum esse in nemo, nesciunt vitae. Blanditiis consequatur consequuntur deleniti est fuga neque odio quis quod tenetur, voluptatum? Cupiditate mollitia neque quasi qui quisquam quod quos sit vel?</div>
            </div>
            ";
    }

}
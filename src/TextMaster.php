<?php

namespace App;

class TextMaster
{
    /**
     * @param int $length
     * @param string $text
     * @return array
     */
    public static function findUniqueWordsOfLength(int $length = 3, string $text)
    {
        $wordsOfText = preg_split('/\s+/', $text); // or another regular expression

        print_r('Unique words of length more than ' . (string) $length . ' are:');

        $entries = [];
        foreach ($wordsOfText as $key => $value) {
            if (strlen($wordsOfText[$key]) <= $length) {
                unset($wordsOfText[$key]);
            } elseif (in_array($value, $entries)) {
                unset($wordsOfText[$key]);
            } else {
                $entries[] = $value;
                print_r(' ' . $value);
            }
        }
        print_r('. Number of unique words: ' . (string) count($wordsOfText) . '.');

        return $wordsOfText;
    }
}

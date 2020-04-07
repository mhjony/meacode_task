#!/usr/bin/php
<?php

class LanguageStudent
{
    public $array = array();

    public function getLanguages()
    {
        #returns all languages, as an array, that the student knows.
        return $this->array;
    }
    public function addLanguage($language)
    {
        #adds a new language to the list of languages
        array_push($this->array, $language);
    }
}

class LanguageTeacher extends LanguageStudent
{
    public function teach(LanguageStudent $student, $language)
    {
        #if LanguageTeacher knows the required language, 
        #it teaches LanguageStudent and returns true; otherwise it returns false.
        if (in_array($language, $student->array))
            echo "TRUE\n";
        else
            echo "FALSE\n";
    }
}

$teacher = new LanguageTeacher();
$teacher->addLanguage('Bangla');
$student = new LanguageStudent();
$student->addLanguage('Finish');
$student->addLanguage('English');
$teacher->teach($student, 'Finish');
#print_r($student->getLanguages());

?>
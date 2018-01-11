<?php

/*
 * COMP4711 lab 1
 */

/**
 * Basic Student class. Allows setting emails and grades for each student.
 *
 * @author Alex Xia
 */
class Student {
    /**
     * Constructor.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    /**
     * Adds an email at a key $which.
     * Allows overwriting emails by using the same
     * key twice.
     * @param type $which index to add an email
     * @param type $address the email string
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Adds a grade to the student instance.
     * Because grades array auto-increment, once added
     * cannot be changed or removed.
     * @param type $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Gets the average grade of the student instance.
     * If student has no grades, returns 0;
     * @return double average grade
     */
    function average() {
        $total = 0;
        foreach($this->grades as $value) {
            $total += $value;
        }
        if (count($this->grades) == 0) {
            return 0;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Gets a student's first and last name, average grade,
     * and email as a pre-formated html tag.
     * @return string pre tag
     */
    function to_string() {
        $result = $this->first_name . " " . $this->surname;
        $result .= " (" . $this->average() . ")\n";
        foreach ($this->emails as $index=>$email) {
            $result .= $index . ": " . $email . "\n";
        }
//        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}

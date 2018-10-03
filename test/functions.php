<?php

use PHPUnit\Framework\TestCase;

require ('../php/functions.php');

class StackTest extends TestCase
{

    /*
     * This success test checks whether the function returns the string assigned
     * the key: bio from the array represented by the variable passed into it
     */
    public function testSelectBioFromResultsSuccess()
    {
        $expected = "Some words in a string";
        $example = ["bio" => "Some words in a string"];
        $case = selectBioFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This failure test checks whether the function returns the string assigned the key: 'bio' if a
     * string in the array represented in the variable passed into it is assigned a related key
     */
    public function testSelectBioFromResultsFailureRelatedKey()
    {
        $expected = "error";
        $example = ["interests" => "So to start with the usual, I'm a keen runner, I love historical fiction novels, 
        have an eclectic music taste, my preferred sports are pool, golf and tennis with a little cricket thrown in when
         the opportunity pops up. A major hobby (if you can call it that) is puzzling. Be it crosswords, logic or 
         mathematics, there is generally one next to me wherever I am... Hopefully this will lend itself well to my 
         desired future in software development."];
        $case = selectBioFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This failure test checks whether the function returns the string 'error' if no string in the array
     * represented by the variable passed into it has a related key
     */
    public function testSelectBioFromResultsFailureUnrelatedKey()
    {
        $expected = "error";
        $example = ["foo"=>"bar"];
        $case = selectBioFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This success test checks whether the function returns the string assigned
     * the key: interests from the array represented by the variable passed into it
     */
    public function testSelectInterestsFromResultsSuccess()
    {
        $expected = "Some words in a string";
        $example = ["interests" => "Some words in a string"];
        $case = selectInterestsFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This failure test checks whether the function returns the string assigned the key: 'interests' if a
     * string in the array represented in the variable passed into it is assigned a related key
     */
    public function testSelectInterestsFromResultsFailureRelatedKey()
    {
        $expected = "error";
        $example = ["qualifications" => "Having left school part-way through my AS levels due to thinking £300 a week as
         a chef was a damn fine wage, my academic achievements are limited to an average spread of GCSEs. However, I 
         have passed the WSET (Wine & Spirit Education Trust) lvl 2 course and have a personal license (retail of 
         alcohol). A more pertinent qualification currently would be my Scrum Master Certification."];
        $case = selectInterestsFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This failure test checks whether the function returns the string 'error' if no string in the array
     * represented by the variable passed into it has a related key
     */
    public function testSelectInterestsFromResultsFailureUnrelatedKey()
    {
        $expected = "error";
        $example = ["foo"=>"bar"];
        $case = selectBioFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This success test checks whether the function returns the string assigned
     * the key: qualifications from the array represented by the variable passed into it
     */
    public function testSelectQualificationsFromResultsSuccess()
    {
        $expected = "Some words in a string";
        $example = ["qualifications" => "Some words in a string"];
        $case = selectQualificationsFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This failure test checks whether the function returns the string assigned the key: 'qualifications' if a
     * string in the array represented in the variable passed into it is assigned a related key
     */
    public function testSelectQualificationsFromResultsFailureRelatedKey()
    {
        $expected = "error";
        $example = ["bio" => "Having worked at the height of the hospitality industry for a good portion of my career, 
        I took the life changing decision to step out of the ever fast-paced, often chaotic world of catering, and into 
        the alien world of software/web development. The idea is to incorporate my vast knowledge of people and their 
        needs with the functional possibilities of software development to create tools, innovated & designed by 
        people's needs and everyday obstacles."];
        $case = selectQualificationsFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This failure test checks whether the function returns the string 'error' if no string in the array
     * represented by the variable passed into it has a related key
     */
    public function testSelectQualificationsFromResultsFailureUnrelatedKey()
    {
        $expected = "error";
        $example = ["foo"=>"bar"];
        $case = selectBioFromResults($example);
        $this->assertEquals($case, $expected);
    }

    /*
     * This success test checks whether the function returns an associative array
     */
    public function testDisplayProjectsSuccess()
    {
        $expected = "../PilotShop/pilotshop.html";
        $example = ['url' => "../PilotShop/pilotshop.html"];
        $case = displayProjects($example);
        $this->assertEquals($case, $expected);
    }
}

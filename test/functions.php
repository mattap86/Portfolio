<?php

use PHPUnit\Framework\TestCase;

require ('../php/functions.php');

class StackTest extends TestCase
{
    //success
    public function testSelectBioFromResultsSuccess1()
    {
        $expected = "Having worked at the height of the hospitality industry for a good portion of my career, I took the life changing decision to step out of the ever fast-paced, often chaotic world of catering, and into the alien world of software/web development. The idea is to incorporate my vast knowledge of people and their needs with the functional possibilities of software development to create tools, innovated & designed by people's needs and everyday obstacles.";
        $example = ["bio" => "Having worked at the height of the hospitality industry for a good portion of my career, I took the life changing decision to step out of the ever fast-paced, often chaotic world of catering, and into the alien world of software/web development. The idea is to incorporate my vast knowledge of people and their needs with the functional possibilities of software development to create tools, innovated & designed by people's needs and everyday obstacles."];
        $case = selectBioFromResults($example);
        $this->assertEquals($case, $expected);
    }

    public function testSelectBioFromResultsFailure1()
    {
        $expected = "error";
        $example = ["interests"=>"So to start with the usual, I'm a keen runner, I love historical fiction novels, have an eclectic music taste, my preferred sports are pool, golf and tennis with a little cricket thrown in when the opportunity pops up. A major hobby (if you can call it that) is puzzling. Be it crosswords, logic or mathematics, there is generally one next to me wherever I am... Hopefully this will lend itself well to my desired future in software develpment."];
        $case = selectBioFromResults($example);
        $this->assertEquals($case, $expected);
    }

    public function testTest()
    {
        $this->assertEquals(1,1);

    }

//    //failure
//    public function testSelectBioFromResultFailure1 ()
//    {
//
//    }

}
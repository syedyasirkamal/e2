<?php

class NewGamePageCest
{ 

    // tests
    public function pageLoads(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/');

        # Assert the correct title is set on the page
        $I->seeInTitle('P3');

        # Assert the existence of certain text on the page
        $I->see('History');

        # Assert the existence of a certain element on the page
        $I->seeElement('.container');

        # Assert the existence of text within a specific element on the page
        $I->see('attempts', '.container');
    }

    public function firstAttemptTest(AcceptanceTester $I)
{
    $I->amOnPage('/');
$guess=rand(1,10);
    $I->fillField('[test=guess]', $guess);
     $roundnum=$I->grabValueFrom('input[name=round]');

dump($guess); 
    $number=$I->grabValueFrom('input[name=number]');dump($number);
    $counter=$I->grabValueFrom('input[name=counter]');
    dump($counter);

    $I->click('[test=submit]');
    
    if($number==$guess or $counter<1) {
           $I->seeElement('[test=play-again]');
    } elseif ($counter>0 and $number!=$guess){
        $I->seeElement('[test=submit]'); 
    }
 

}
 
public function showAllHistoryandGameDetails(AcceptanceTester $I)
{
    $I->amOnPage('/historyshow');

    $gameCount = count($I->grabMultiple('[test=game-count]'));
 
        $I->assertGreaterThanOrEqual(10, $gameCount);

$roundNum= $I->grabTextFrom('[test=game-count]');
$I->click($roundNum);
$I->see($roundNum);
    
 
}

public function gameValidationTest(AcceptanceTester $I)
{
    # Act
    $I->amOnPage('/');
    
    $I->click('[test=submit]');
 
    $I->seeElement('[test=validation-output]');
}


}

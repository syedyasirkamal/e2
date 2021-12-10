# Project 3

- By: Syed Kamal
- URL: <http://e2p3.kamalzadeh.me/>

## Graduate requirement

_x one of the following:_

- [x] I have integrated testing into my application
- [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources

- For using condition statements in blade: <https://laravel.com/docs/8.x/blade#if-statements>

## Notes for instructor

## Codeception testing output

```

Codeception PHP Testing Framework v4.1.22
Powered by PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Acceptance Tests (4) --------------------------------------------------------------------------------------------------------------------------------------------------------
NewGamePageCest: Page loads
Signature: NewGamePageCest:pageLoads
Test: tests/acceptance/NewGamePageCest.php:pageLoads
Scenario --
 I am on page "/"
 I see in title "P3"
 I see "History"
 I see element ".container"
 I see "attempts",".container"
 PASSED

NewGamePageCest: First attempt test
Signature: NewGamePageCest:firstAttemptTest
Test: tests/acceptance/NewGamePageCest.php:firstAttemptTest
Scenario --
 I am on page "/"
 I fill field "[test=guess]",7
 I grab value from "input[name=round]"
^ 7
 I grab value from "input[name=number]"
^ "2"
 I grab value from "input[name=counter]"
^ "4"
 I click "[test=submit]"
 I see element "[test=submit]"
 PASSED

NewGamePageCest: Show all historyand game details
Signature: NewGamePageCest:showAllHistoryandGameDetails
Test: tests/acceptance/NewGamePageCest.php:showAllHistoryandGameDetails
Scenario --
 I am on page "/historyshow"
 I grab multiple "[test=game-count]"
 I assert greater than or equal 10,20
 I grab text from "[test=game-count]"
 I click "Game #20"
 I see "Game #20"
 PASSED

NewGamePageCest: Game validation test
Signature: NewGamePageCest:gameValidationTest
Test: tests/acceptance/NewGamePageCest.php:gameValidationTest
Scenario --
 I am on page "/"
 I click "[test=submit]"
 I see element "[test=validation-output]"
 PASSED

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.467, Memory: 12.00 MB

OK (4 tests, 9 assertions)

```

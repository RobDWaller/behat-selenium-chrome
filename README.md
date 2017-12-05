# Behat Selenium and Chrome Setup Library
[![Build Status](https://travis-ci.org/RobDWaller/behat-selenium-chrome.svg?branch=master)](https://travis-ci.org/RobDWaller/behat-selenium-chrome)

This is a simple Library that shows you how to setup Behat, Selenium and Chrome on a Ubuntu environment. This setup allows you to run Automated BDD tests on the UI of your web application.

You can probably get Behat and Selenium working with Chrome based simply on the `.travis.yml` file within this project. However I advise for a clearer description of the setup please refer to my blog post on the subject.

[How to Set Up Testing With Behat, Selenium and Chrome](http://rbrt.wllr.info/2017/11/22/how-setup-testing-behat-selenium-chrome.html)

The reason I created this library and wrote the blog post is twofold; first, I could not find any comprehensive documentation on the subject, secondly I wanted the team I lead to begin running automated tests and thinking about BDD principles. I hope these resources can also help you and your team.

Behat is a Cucumber based BDD testing framework for PHP. For more information on Behat and BDD itself please refer to my blog post on the subject and or watch Ciaran McNulty's talk on the subject.

- [An Introduction to Automated Tests With Behat PHP](http://rbrt.wllr.info/2017/11/22/introduction-bdd-testing-with-behat.html)
- [PHP UK Conference 2017 - Ciaran McNulty - Driving Design through Examples](https://www.youtube.com/watch?v=83GbyDpJDI4)

## How Does This Library Work?

This library provides a very simple example of how to get Behat and Selenium up and running. Essentially it spins up an environment in Travis, installs Selenium and runs Behat.

The Chrome headless browser which Selenium interacts with then tests a simple form submission hosted on `public/index.php` and the relevant outputted message hosted on `public/result.php`.

## The Tests

The Behat tests can be found in `features/form.feature`.

```yaml
Feature: Form Submission
    In order to see a fun Hello 'Name' message
    As a website user
    I need to be able to visit the index page and submit the form with my name

    Scenario: Submit Form
        Given I am on "/index.php"
        When I fill in "name" with "John Smith"
        And I press "submit"
        Then I should see "Hello John Smith"

    Scenario: Subimt Form Error Message
        Given I am on "/index.php"
        When I press "submit"
        Then I should see "Hello you didn't submit your name..."
```

## Author
Rob Waller <rdwaller1984@googlemail.com>
[@RobDWaller](https://twitter.com/RobDWaller)

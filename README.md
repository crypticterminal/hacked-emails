# Hacked Emails Scanner

A simple and updated Hacked Emails Api wrapper for Laravel 5.5+


## Info

This package is designed to be used with Laravel 5.5, but you can use it as a standalone package too.
**Hacked Emails Scanner** provides a service provider and a facade, but thanks to Laravel's package auto-discovery, you DON'T need to edit `app.php`. :)



# Laravel Virus Scanner
A simple and updated Virus Total wrapper for Laravel 5.5+


## Info

 This package is designed to be used with Laravel 5.5, but you can use it as a standalone package too.

**Laravel Virus Scanner** provides a service provider and a facade, but thanks to Laravel's package auto-discovery, you DON'T need to edit `app.php`. :)


## Instalation

Get starting in 1 easy step:

1. Install package: `composer require daniesy/hacked-emails`


## Usage

**Hacked Emails Scanner** implements all the features offered by the [Hacked Emails Api](https://hacked-emails.com) used to check if your accounts have been hacked.

    use HackedEmails;

    $report = HackedEmails::check('info@example.com');

    echo $report->isSafe();             // Returns a bool based on whether the email has been hacked or not    
    echo $report->getResults();         // The number of leaks
    var_dump($report->getHackData());   // Returns an array of leaks

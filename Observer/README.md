# Observer

## Purpose

To implement a publish/subscribe behaviour to an object, whenever a "Subject" object changes it's state, the attached
"Observers" will be notified. It is used to shorten the amount of coupled objects and uses loose coupling instead.

## Examples

* a message queue system is observed to show the progress of a job in a GUI

## Note

PHP already defines two interfaces that can help to implement this pattern: SplObserver and SplSubject.

## Example

<?php

    namespace DesignPatterns\Observer;


    require('../Tests/bootstrap.php');


    // Create a new User and set's its name
    $user = new User;

    // change the name of the User (no observers registered yet)
    $user->name = 'Foo';



    // create new observers
    $observer_1 =  new UserObserver();
    $observer_2 =  new UserObserver();

    // register the first observer to the User
    $user->attach(
       $observer_1
    );

    // register the second observer to the User
    $user->attach(
        $observer_2
    );

    // change the name of the user
    // changing the User object results in in the attached UserObservers getting notified about the change of the User object
    $user->name = 'Bar';


    // OUTPUT:
    // 'User has been updated'
    // 'User has been updated'


    echo '---------------<br />';

    // unregister the first observer
    $user->detach($observer_1);


    // change the name of the user
    // changing the User object results in in the attached UserObservers getting notified about the change of the User object
    $user->name = 'BarBar';

    // OUTPUT:
    // 'User has been updated'

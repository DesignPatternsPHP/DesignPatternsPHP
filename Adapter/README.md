# Adapter / Wrapper

## Purpose

To translate one interface for a class into a compatible interface. An adapter allows classes to work together that normally could not because of incompatible interfaces by providing it's interface to clients while using the original interface.

## Examples

* DB Client libraries adapter
* using multiple different webservices and adapters normalize data so that the outcome is the same for all

## Example

    <?php

    namespace DesignPatterns\Adapter;


    // @note
    //
    // Both the Book and The EbookAdapter implements the PaperBookInterface
    // so the runtime code for the PaperBook and Kindle is are same through
    // the EBookAdapter. This means the new Kindle can be used in an existing sytem
    // wich depends on the PaperBookInterface


    // lets read a PaperBook
    $book = new Book;
    $book->open();
    $book->turnPage();


    // Lets read a Kindle
    $eBook = new EBookAdapter(
        New Kindle()
    );
    $eBook->open();
    $eBook->turnPage();

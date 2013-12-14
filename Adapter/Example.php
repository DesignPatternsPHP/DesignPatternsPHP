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

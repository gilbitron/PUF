### This repo is no longer maintained. If you would like to take over ownership please [get in touch](mailto:gilbert@pellegrom.me).

#PUF

PUF (PHP Utility Framework) provides PHP developers with an assortment of utility functions that are commonly used in web applications. 
Written in PHP 5, PUF aims to become the "go to" framework for all of those functions that you commonly use in apps but can never find
because you've forgotten to add it to your snippet collection.

##Requirements

To use PUF you will need the following:

* PHP 5.3 or greater

Yes that's all!

##Please Contribute

The only way this project will become successful and useful is if all of you PHP developers contribute to PUF. Got any favorite snippets
that aren't in PUF already? Then throw them in and include your name and website in the @author tag in the documentation. The more you contribute
to PUF the more everyone will benefit.

So don't be afraid to give PUF a fork and contribute your own functions!

##Licensing
PUF is released under the [GPL v2](http://www.gnu.org/licenses/gpl-2.0.html).

Some of the functions that will appear in PUF will be written by other developers or found in other applications (e.g. WordPress, CodeIgniter etc).
This is cool. Just make sure the license that their code is released under is compatible with GPL v2, and make sure to give credit where credit is due
in the function documentation.

##Example Usage

    <?php

    require_once 'puf/puf.include_all.php';

    $puf_format = new PUF\Format();

    echo $puf_format->size_format(1024);
    // Output: 1kB

    ?>

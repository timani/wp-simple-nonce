[![Build Status](https://travis-ci.org/calevans/wp-simple-nonce.svg?branch=master)](https://travis-ci.org/calevans/wp-simple-nonce)

wp-simple-nonce
===============

A very simple NONCE for WordPress developers.

Author
------
Cal Evans ([calevans](http://github.com/calevans))


Description
-----------
A NONCE is a Number Used Once. They are very useful for preventing CSRF. They are also useful in preventing users from doing stupid things like submitting a form more than once. (Whether maliciously or accidentally.)


WordPress has a NONCE system built in but it is not a true NONCE. This is a true NONCE. You can create easily create one. Then you add it to a form or URL. When you get it back, you check it. NONCEs can only be checked once. Once you've tested it, the NONCE is destroyed so that it can't ever be used again.


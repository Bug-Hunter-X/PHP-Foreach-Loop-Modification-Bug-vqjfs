# PHP Foreach Loop Modification Bug
This repository demonstrates a common issue in PHP when modifying an array while iterating over it using a `foreach` loop.  The `unset()` function within the loop causes unexpected behavior by skipping elements.

## Bug Description
The provided `bug.php` file contains a function `foo()` that attempts to remove elements with the value 'a' from an array.  However, due to the way foreach works in PHP, it does not properly remove all occurrences of 'a'.

## Solution
The `bugSolution.php` file shows how to correctly remove elements from an array during iteration using a `for` loop and array indexing, avoiding the issues present in `bug.php`.
# PHP Loose Typing Bug

This repository demonstrates a common, yet subtle, bug in PHP related to its loose typing system and implicit type conversions.  The bug arises from the unexpected behavior of PHP when performing operations on variables of mixed types, particularly when strings are implicitly converted to numbers.

The `bug.php` file contains code illustrating the issue.  The `bugSolution.php` file provides a corrected version demonstrating best practices for preventing this type of error.  Strict type checking is recommended for avoiding these kinds of errors in your own code.

## How to Reproduce

1. Clone this repository.
2. Run the `bug.php` file using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the corrected output and better approach.
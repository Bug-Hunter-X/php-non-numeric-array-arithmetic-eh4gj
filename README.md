# PHP: Unexpected Behavior with Non-Numeric Array Values in Arithmetic Operations

This repository demonstrates a common error in PHP related to its loose typing system. When working with arrays containing mixed data types (e.g., numbers and strings), arithmetic operations can produce unexpected results or warnings if not properly handled.

The `bug.php` file contains a function `calculateSum` that attempts to sum up the values in an array. While it works correctly with purely numeric arrays, it issues a warning and returns an incorrect result when encountering non-numeric values. The `bugSolution.php` file offers a solution that addresses this issue using type checking.

This example highlights the importance of careful type handling in PHP to prevent unexpected behavior and maintain code robustness.
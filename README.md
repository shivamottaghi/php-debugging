# php-debugging

## ex 1:
Passing parameters to new_exercise() but it's not received.

## ex 2:
Wrong index is echoed! monday is indexed 0.

## ex 3:
Wrong quotation marks !

## ex 4:
We need to reference the array's elements using &.<br>
[Check this link for foreach() documentation](https://www.php.net/manual/en/control-structures.foreach.php)

## ex 5:
Changed it to $letter != 'aa'.

## ex 6:
combine name should return parameters. <br>
```$heroes[rand(0,count($heroes))] ```to ```$heroes[rand(0,count($heroes)-1)]```

## ex 7:
copyright() receives an int , while date('Y') returns a string!<br>
[Check this link for date() documentation](https://www.php.net/manual/en/function.date.php)

## ex 8:
if statement's condition has to be with && and not || . <br>
We can't return twice in php functions. The second one won't run. That's why we are unable to see the last name of 
our user on screen.

## ex 9:
strpos() return the position of the found string. If the position = 0 then 0 == false and it is considered as not found.
So the if condition should use === instead of ==. Also since if the string is found it returns the position and not true
we should correct it like this : ```if (strpos($link, $unacceptable) !== false)```

## ex 10:
With each fruit that gets removed, ```count($areTheseFruits)``` changes(array length gets smaller) but the indexes won't!
So the last element is indexed 7 while the loop stops at 5.
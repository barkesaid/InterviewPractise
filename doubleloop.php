<?php
    for($a = 0; $a <= 5; $a++) {
        for($b = 1; $b <= $a; $b++) {
            echo "*";
            // if($b < $a) {
            //    echo " ";
            // }
        }
        echo "<br />";
    }

/*
first round
a= 0, 0 <=5,
b = 1, 1<0 (false) 
no star printed
b ++

Output:
(space with no star)


second round
a=1 , 1<=5 , 
b=1, 1<=1,
print star 
increment b 
b=2 , 2<=1, false 
no star printing 

output 
(space with no star)
*



third round
a= 2 , a<=5
b=1, 1<=2,
print star
increment b
b=2, 2<=2
print another star 
increment b
b=3, b<=2 (false) - break

Output
(space with no star)
*
**


fourth round
a = 3 , a<=5
b=1, 1 <=3
print star
increment b 
b=2, 2<=3
print star
increment b 
b=3, 3<=3
print star
increment b 
b=4, 4<=3 (false), break 

Output
(space with no star)
*
**
***




*/

?>
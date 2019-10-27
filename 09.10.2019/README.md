#Päeva Teemad
##Operaatorid
###Aritmeetilised operaatorid
* Liitmine
```
<?php
$x = 2;
$y = 3;
$summa = $x + $y;
?>
```
* Lahutamine
```
<?php
$x = 2;
$y = 3;
$vahe = $x - $y;
?>
```
* Korrutamine
```
<?php
$x = 2;
$y = 3;
$korrutis = $x * $y;
?>
```
* Jagamine
```
<?php
$x = 2;
$y = 3;
$jagatis = $x / $y;
?>
```
* Jäägi Leidmine
```
<?php
$x = 2;
$y = 3;
$jaak = $x % $y;
?>
```
###Suurendamine ++ / Vähendamine --(1 võrra)
* Pärast
```
<?php
$x = 2;
$x++;
echo $x;
?>
```
* Enne
```
<?php
$x = 2;
--$x;
echo $x;
?>
```
###Suurendamine / Vähendamine 2 jne võrra (lahutamine, korrutamine jne)
* Suurendamine
```
<?php
$x = 2;
$x += 2; // $x = $x + 2;
echo $x;
?>
```
* Vähendamine
```
<?php
$x = 2;
$x -= 2; // $x = $x - 2;
echo $x;
?>
```
* Korrutamine
```
<?php
$x = 2;
$x *= 2; // $x = $x * 2;
echo $x;
?>
```
* Jagamine
```
<?php
$x = 2;
$x /= 2; // $x = $x / 2;
echo $x;
?>
```
* Jäägi Leidmine
```
<?php
$x = 2;
$x %= 2; // $x = $x % 2;
echo $x;
?>
```
###Vormindatud väljund
* Printf funktsiooni abil:
```
<?php
printf('formaadisõne',$muutuja1, $muutuja2, jne);
?>
```
* Võimalikud formaadid
```
%s    - string - sõne
%d    - decimal - täisarv
%f    - float - komaga arv
%c    - char - sümbol
%3.2f - komaga arv, kus on 3 täiskohta ja 2 komakohtas
```
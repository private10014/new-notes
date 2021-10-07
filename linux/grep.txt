Imrans-Air:temp imranparray$ cat file.txt 
Hello world
i am line 1
i am line 2
44444
55555

**Case insenstivity**

Imrans-Air:temp imranparray$ cat file.txt | grep 'h'
Imrans-Air:temp imranparray$ cat file.txt | grep -i 'h'
Hello world

**Reverse Match**

Imrans-Air:temp imranparray$ cat file.txt | grep 'am'
i am line 1
i am line 2
Imrans-Air:temp imranparray$ cat file.txt | grep -v 'am' 
Hello world
44444
55555

**No of Matches**

Imrans-Air:temp imranparray$ cat file.txt | grep -c 'am' 
2

**Searching Regular Expressions**

Imrans-Air:temp imranparray$ cat file.txt | grep -E '\d{5}' 
44444
55555

**Get the Search pattern from the file**

Imrans-Air:temp imranparray$ echo '\d{5}' > pattern
Imrans-Air:temp imranparray$ cat file.txt | grep -Ef pattern 
44444
55555

**Print the source of input**

Imrans-Air:temp imranparray$ cat file.txt | grep -H 'am'
(standard input):i am line 1
(standard input):i am line 2
Imrans-Air:temp imranparray$ grep -H 'am' file.txt 
file.txt:i am line 1
file.txt:i am line 2

**Print Line number where the match is found**

Imrans-Air:temp imranparray$ cat file.txt | grep -n 'am'
2:i am line 1
3:i am line 2

**print n number of line after last match**

Imrans-Air:temp imranparray$ cat file.txt | grep -A 1 -n 'am'
2:i am line 1
3:i am line 2
4-44444

**print n number of line before first match**

Imrans-Air:temp imranparray$ cat file.txt | grep -B 1 -n 'am'
1-Hello world
2:i am line 1
3:i am line 2

**print only matching part**

Imrans-Air:temp imranparray$ cat file.txt | grep -o 'am'
am
am

**Add color to mached patterns**

Imrans-Air:temp imranparray$ cat file.txt | grep 'am' --color
i am line 1
i am line 2
##  grep:-
```
grep command is used to search pattern into any file or from any command.
```
### syntax:- grep <options <filename,
### cmd:- grep -n 'root' /etc/passwd
```
it will only print those lines where root is present and it will also print line number with -n flag.
```
### cmd:- grep -c 'root' /etc/passwd
```
it will count number of lines
```
### cmd:- grep -i dns /etc/passwd
```
it will print both capital and small characters in a file. -i flag is ignore case sensitive operations.
```
### cmd:- grep -o root /etc/passwd
```
it will print only pattern excluding the lines. -o flag means only pattern. And it will remove all the contents of the lines.
```
### cmd:- grep -v root /etc/passwd
```
 it will print all  the lines but without the root. -v flag means inverse.
 ```
 ### cmd:- grep -w manish /etc/passwd
 ``` 
 it will print exact word manish. -w flag means exact word.
 ```
### cmd:- grep -n  -A2 root /etc/passwd
```
it will print after 2 lines 
```
### cmd:- grep -n  -B2 root /etc/passwd
```
it will print before 2 lines
```
### cmd:- grep -n  -C2 root /etc/passwd
```
it will print before 2 lines and after 2 lines also

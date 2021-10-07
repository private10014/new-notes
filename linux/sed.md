


## Sed

Learn ed in Linux to get started in sed. Understanding how ed works will improve your understanding about sed.

**Cheat Sheet**

```
:  # label
=  # line_number
a  # append_text_to_stdout_after_flush
b  # branch_unconditional             
c  # range_change                     
d  # pattern_delete_top/cycle          
D  # pattern_ltrunc(line+nl)_top/cycle 
g  # pattern=hold                      
G  # pattern+=nl+hold                  
h  # hold=pattern                      
H  # hold+=nl+pattern                  
i  # insert_text_to_stdout_now         
l  # pattern_list                       
n  # pattern_flush=nextline_continue   
N  # pattern+=nl+nextline              
p  # pattern_print                     
P  # pattern_first_line_print          
q  # flush_quit                        
r  # append_file_to_stdout_after_flush 
s  # substitute                                          
t  # branch_on_substitute              
w  # append_pattern_to_file_now         
x  # swap_pattern_and_hold             
y  # transform_chars    

```

**Symbols:**

```
^	---		Beginning of The Line
$	---		Termination of the line
[ ]	---		Range
&	---		Matched String
\*      ---		OR Eg: th  t or th
\	---		Escape Character

```

**Options:**

```
p	---	print
d	---	delete
q	---	Quit
g	---	globally
I 	---	ignore case sensivity
-n 	---	silent mode
-i 	---	Make changes in file

```

**Substituing the text**

```
sed 's/t/T/' file.txt			---	Substitute t with T in file.txt [ It only replaces the 1st t not all]
sed 's/t/T/g' file.txt			---	Substitute t with T in globally in file.txt
sed -i 's/t/T/g' file.txt		---	Modify the original file

```

**Delete the text**

```
echo "
imran
nazir
parray" | sed '/imran/d'

nazir
parray

```

**Transform text**

```
replace 
a->x
b->y
c->z

root@root:~/Desktop# echo '
abc
bca ' | sed 'y/abc/xyz/'

xyz
yzx 

```

**The script file**

```
$cat sedscr
s/ MA/, Massachusetts/ 
s/ PA/, Pennsylvania/ 
s/ CA/, California/
s/ VA/, Virginia/
s/ OK/, Oklahoma/

 sed -f sedsec filename

```

**Replacing nth Occurance**

```
echo "imranimranimra" | sed 's/imran/nazir/2'

imrannazirimran

```

**Substituing at the beginning of the line:**

```
sed 's/^t/ooo/' test.txt		---	replacing  t if they are at the beginning of the line
sed 's/d$/ooo/' test.txt		---	replacing  d if they are at the beginning of the line

```

**using Apersand and wildcards**

```
sed 's/[0-5]/1/' test.txt			---	replacing anything from 0-5 and replace it with 1
sed 's/[A-Z]m/1/' test.txt			---	replacing anything starts A-Z fallowed by m [eg: Am Bm Cm ]
sed 's/[0-9]/(&)/' test.txt			---	replacing all mached with string inside ( ) 
sed 's/[0-9]/(&&)/' test.txt		---	replacing all mached with string+string  inside [10 to (101)]
sed 's/[0-9][0-9]/(&)/' test.txt		---	repcing all two digit numbers 

```

**Using Astrick:**

```
sed 's/Th*/00/' test.txt			---	replacing all T and Th with 00
sed 's/Thr*/00/' test.txt			---	replacing all Th and Thr with 00
sed 's/There*/00/' test.txt		---	replacing all Ther and There with 00
sed 's/[0-9][0-9]*/00/' test.txt	---	replacing all one digit and two digit numbers with 00

sed 's/[a-z]/00/' test.txt			---	replacing all small alphabits with 00
sed 's/[a-z][A-Z]/00/' test.txt		---	replacing all small alphabits with 00 [Eg: t -> 00 and tH->00 ]
sed 's/[A-Z]/00/' test.txt			---	replacing all A-Z  with 00
sed 's/[a-zA-Z]/00/' test.txt		---	replacing all a-zA-Z  with 00
OR
sed 's/[A-z]/00/' test.txt			---	replacing all a-z A-Z  with 00
sed 's/[0-z]/00/' test.txt			---	replacing all numbers and alphbits  with 00

```

**Using Delimiters:**

```
We can use anything as delimiter in SED
	Eg: sed 's/A/a/g' file.txt 			---	Here the / is the delimiter
	Eg: sed 's_A_a_g' file.txt 		---	Here the _ is the delimiter
	Eg: sed 's:A:a:g' file.txt 			---	Here the / is the delimiter
All of them will perfrom the same function.

```

**Using Proper Delimiters:**

```
Using proper delimiter will always keep you away from the mess.

	Eg: sed 's/\/etc\/passwd\//000/' file.txt			---	Replacing /etc/passwd/ with 000  [ Full of mess]
	Eg: sed 's_/etc/passwd_000_' file.txt 			---	Replacing /etc/passwd/ with 000  [ Less Mess ] 

```

**Using Not ^**

```
sed 's/[^0-9]/*/' file.txt			---	Replace Everything which is not a number with *
sed 's/[^0-z ]/*/g' file.txt			---	Replace Everything which is not a [0-z] means 
							Alphanumric Which means all special chars
```
## sed:-
```
with the helo of sed command we can perform these types of operations
--> print
--> find and replace
--> delete
--> before the line number we can insert any thing.
--> after the line we can append any thing.
```
## cmd:- sed -n '1p' /etc/passwd
```
it will print only one line.
```
## sed -n '1p;5p' /etc/passwd
```
it will print only line number 1 and line number 5.
```
## cmd:- sed -n '1,5p' /etc/passwd
```
it will print from line 1 to line 5.
```
## cmd:- sed -n '$p' /etc/passwd
```
it will print last line of a file
```
## cmd:- sed -n '1p;$p' /etc/passwd
```
it will print only first and last line
```
## cmd:- sed -n '21,25p' /etc/passwd
```
it will print from from line 21 to line 25.
```
## cmd:- sed -n '1,5p;11,12p;20,25p' /etc/passwd
```
it will print in between those range
```
##  find and replace:-
### cmd:- cat new.txt | sed 's/root/desktop/g'
```
it will match root and replace with desktop but globally.
```
## cmd:- cat new.txt | sed 's/ROOT/desktop/gi'
```
it will igore case sensitive also i,e -i flag.
```
## cmd:- cat new.txt | sed 's/root/desktop/2'
```
it will change root only on 2nd position of a line 
```
## cmd:- cat new.txt | grep 'root' | sed 's/root/networkg/'
```
it will grep root only and replace it with network globally.
```
## cmd:- cat new.txt | sed 's/root/suit/g;s/nologin/lemon/g'
```
it will replace root with suit and nologin with lemon at a time but 
globally.
```
## cmd:- cat new.txt | sed -n 2p | sed 's/usr/danish/2'
```
it will print only 2nd line and replace usr on 2nd postion with danish.
```
## cmd:- cat new.txt | sed  's/^https:\/\///g'
````
it will remove https:// on all lines.
```
## cmd:- at new.txt | sed '1,2s/^/#/'
```
it will comment only first 2 lines.
```
## Delete:-
###  cmd:- cat new.txt | sed '5d
```
it will delete line number 5.
```
## cmd:- cat new.txt | sed '5,7d'
```
it will delete from line number 5 to 7
```
## cmd:- cat new.txt | sed '5,7d!'
```
it will delete all lines without these range of lines
```
## cmd:- cat new.txt | sed '5,7d!'
```
it will print hello before the line
``
## cmd:- cat new.txt | sed '5a hello'
```
it will print hello after the line.
```



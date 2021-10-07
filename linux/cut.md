## cut

**Lets Say we have a input file**

root@root:~/Desktop/temp# cat file.txt 
name:age:color
one:1:111
two:2:222
three:3:333

**Reading Byte 1**

root@root:~/Desktop/temp# cat file.txt | cut -b 1
n
o
t
t

**Reading Byte 1,2 and 3**

root@root:~/Desktop/temp# cat file.txt | cut -b 1,2,3
nam
one
two
thr

**Reading Byte Range from 1-3**

root@root:~/Desktop/temp# cat file.txt | cut -b 1-3
nam
one
two
thr

**Reading Byte range from 1-4**

root@root:~/Desktop/temp# cat file.txt | cut -b -4     [Starting to 4]
name
one:
two:
thre

**Reading Byte 2-end**

root@root:~/Desktop/temp# cat file.txt | cut -b 2-     [start from 2 to end]
ame:age:color
ne:1:111
wo:2:222
hree:3:333

**Reading 1 character**

root@root:~/Desktop/temp# cat file.txt | cut -c 1
n
o
t
t

**Reading 1-3 characters**

root@root:~/Desktop/temp# cat file.txt | cut -c 1-3
nam
one
two
thr

**Reading starting-3 characters**

root@root:~/Desktop/temp# cat file.txt | cut -c -3
nam
one
two
thr

**Reading characters from 3 to end**

root@root:~/Desktop/temp# cat file.txt | cut -c 3-
me:age:color
e:1:111
o:2:222
ree:3:333

**Using Delimiter to extract 1st field**

root@root:~/Desktop/temp# cat file.txt | cut -d":" -f1
name
one
two
three

**Using Delimiter to extract 1st and 2nd field**

```
root@root:~/Desktop/temp# cat file.txt | cut -d":" -f1,2
name:age
echo one:1
two:2
three:3

```

**Using reverse Match (Not gate)**

root@root:~/Desktop/temp# cat file.txt | cut -d":" -f1,2
name:age
one:1
two:2
three:3

root@root:~/Desktop/temp# cat file.txt | cut -d":" -f1,2 --complement
color
111
222
333

**Using Output Delimiters**

root@root:~/Desktop/temp# cat file.txt | cut -d":" -f1,2 --output-delimiter=~
name~age
one~1
two~2
three~3

root@root:~/Desktop/temp# cat file.txt | cut -d":" -f1,2,3 --output-delimiter=~
name~age~color
one~1~111
two~2~222
three~3~333

**Example 1: Removing protocols from Urls**

root@root:~/Desktop/temp# cat file.txt 
https://google.com
https://facebook.com
https://imran.com
http://example.com

root@root:~/Desktop/temp# cat file.txt | cut -d"/" -f3
google.com
facebook.com
imran.com
example.com

**Example 2: Extracting Domains from URLS**

root@root:~/Desktop/temp# cat file.txt 
https://google.com?name=imran&age=xxx&age=xxx
https://facebook.com?name=imran&age=xxx&age=xxx&age=xxx
https://imran.com?name=imran&age=xxx&age=xxx&age=xxx
http://example.com?name=imran&age=xxx&age=xxx

root@root:~/Desktop/temp# cat file.txt | cut -d"?" -f1
https://google.com
https://facebook.com
https://imran.com
http://example.com

**Example 3 : Extracting Keys/Values from JSON Object**

root@root:~/Desktop/temp# cat file.txt 
{
"a":"1",
"b":"2",
"c":"3",
}

root@root:~/Desktop/temp# cat file.txt | grep ':'
"a":"1",
"b":"2",
"c":"3",

root@root:~/Desktop/temp# cat file.txt | grep ':' | cut -d':' -f1
"a"
"b"
"c"

root@root:~/Desktop/temp# cat file.txt | grep ':' | cut -d':' -f2
"1",
"2",
"3",
root@root:~/Desktop/temp#

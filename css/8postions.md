
## Positioning in css:
- A relative positioned  element is positioned relative to its normal  position.
- An absolute position is positioned relative to the first parent element that has a position other than static.
#### Example:
```
*{
    margin: 0;
    padding: 0;
}
.father{
    width: 400px;
    height: 400px;
    background-color: red;
    position: relative;

}
.child1{
    width: 100px;
    height: 60px;
    background-color: green;
    position: absolute;
    left: 0;
}
.child2{
    width: 100px;
    height: 60px;
    background-color: orange;
    position: absolute;
    right: 0;
}
.child3{
    width: 100px;
    height: 60px;
    background-color: black;
    position: absolute;
    bottom: 0;
    right: 0;
}
.child4{
    width: 100px;
    height: 60px;
    background-color: pink;
    position: absolute;
    bottom: 0;
}
```

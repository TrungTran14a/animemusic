var a = document.body.getElementsByClassName('theme-songs')[0].textContent;
var b = document.body.getElementsByClassName('theme-songs')[1].textContent;
var name= document.body.getElementsByClassName('spaceit_pad')[0].textContent;
var name2= document.body.getElementsByClassName('spaceit_pad')[1].textContent;
var name3= document.body.getElementsByClassName('spaceit_pad')[2].textContent;


console.log(a);
console.log(b);
console.log(name);
console.log(name2);
console.log(name3);


console.save = function(data, filename){

    if(!data) {
        console.error('Console.save: No data')
        return;
    }

    if(!filename) filename = name+'.txt'

    if(typeof data === "object"){
        data = JSON.stringify(data, undefined, 4)
    }

    var blob = new Blob([data], {type: 'text/json'}),
        e    = document.createEvent('MouseEvents'),
        a    = document.createElement('a')

    a.download = filename
    a.href = window.URL.createObjectURL(blob)
    a.dataset.downloadurl =  ['text/json', a.download, a.href].join(':')
    e.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null)
    a.dispatchEvent(e)
 }
(a+b+name+name2+name3)

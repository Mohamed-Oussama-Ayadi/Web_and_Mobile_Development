/*alert("ici JS");
confirm("veuillez confirmer votre choix");
prompt("saisir votre nom");
if (true)
{
    var z=2020;
}
console.log(z);
if (true)
{
    let y='hello!!';
    console.log(y);
}
var x, nom= prompt("veuillez saisir votre nom:", "votre nom");
console.log(typeof x);
x=2020;
console.log(typeof x);
console.log(typeof nom);
console.log(typeof true);
console.log(typeof Symbol('test'));
console.log(typeof null);
let x='WEB'
if(x==='web'){
    alert('Web Developpement');
}
else
{
    alert('others');
}*/
/*var arr1 = [5];
var arr2 =Array (5);
var arr3 =Array (5*2); //var arr3 =array (5.2); erreur
var arr4 =Array.of(5);
console.log(arr1);
console.log(arr2);
console.log(arr3);
console.log(arr4);*/
/*var arr =[];
arr[0] ="un";
arr[1] =2;
arr[2]= 3.14;
console.log(arr);
console.log(arr[0]);
console.log(arr["length"]);
arr.length = 0;
console.log(arr);
arr.length=3;
console.log(arr);*/
var arr=[];
arr[0]="un";
arr[1]=2;
arr[2]=3.14;
for(var i=0;i<arr.length;i++){
    console.log(arr[i]); }
    arr.forEach(function(nb){
        console.log('nb:',nb);
});

    arr.forEach(nb =>console.log('nb:',nb));
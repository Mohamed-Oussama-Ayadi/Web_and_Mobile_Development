/*ex1 : undefined
         4
function test() {
        console.log(a);
        console.log(four());
        var a = 1;
        function four() {
        return 4;
        }
        }
        test(); */
//ex2
/*function closesTo100(a,b)
{
    if(Math.abs(100-a)===Math.abs(100-b))
    {
        console.log('égalité');
    }
    else if(Math.abs(100-a)<Math.abs(100-b))
    {
        console.log(a);
    }
    else
    {
        console.log(b);
    }
}
closesTo100(99,100);*/
/*function addition(){
        var a= Number(prompt("Entrer un premier nombre entier"));
        var b= Number(prompt("Entrer un deuxième et dernier nombre entier"));
        var somme = (nb1 +nb2);
        console.log(" ("+ a + ") +(" + b + ")=("+ somme+ ")");
}addition();*/
 /*function hailStoneSeq(n){
        
      while(n != 1)
        {
            if(n % 2 == 0)
            {
               n = n / 2
               console.log(n)
            }    
            else
            {    
               n = ((n * 3) + 1)
               console.log(n)
              
             }
     
        }
}hailStoneSeq(5);*/
//exercice 3
/*function makeNewString(){
       var  ch=prompt("Entrer une chaine:");
                 console.log(ch.length);
                 if(ch.length<3)
                 {
                    console.log(ch);
                 }
                 else
                 {
                   var  res = "";
                   res = ch.substring(0, 3);
                   console.log("les 3 premieres lettres:",res);
                   
                   var  res1 = "";
                   res1 = ch.substring(ch.length-3);
                   console.log("les 3 dernieres lettres:",res1);
                   res=res+res1;
                   console.log("la nouvelle chaine :",res);
                 }

    }makeNewString();*/
      /*function firstHalf(){
        var  ch=prompt("Entrer une chaine:");
        console.log(ch.length);
        if(ch.length%2==0)
        {
           var  res = "";
                   res = ch.substring(0,ch.length/2);
                   console.log(res);
        } 
        else{
            console.log("la chaine n'est pas pair");
        }
        }firstHalf();*/
        /*function concatinate (){
                var  ch1=prompt("Entrer une chaine1:");
                    console.log(ch1.length);
                    var  ch2=prompt("Entrer une chaine2:");
                    console.log(ch2.length);
                    var res1="";
                    res1 = ch1.substring(1,ch1.length);
                    console.log(res1);
                    var res2="";
                    res2= ch2.substring(1,ch2.length);
                    console.log(res2);
                    console.log(res1+res2);
        }concatinate();*/
        //ex4
        function evenNumbers(n)
        {    if(n % 2 == 0)
        
               {console.log("le nombre est pair");}
               else {console.log("le nombre est impair");}
                
        }evenNumbers(2);
        

     
         

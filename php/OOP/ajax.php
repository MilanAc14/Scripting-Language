<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script>
//     var request = new XMLHttpRequest();
// request.open('GET', "http://localhost/scripting/php/oop/exception.php");
// request.send();
// request.onreadystatechange=function(){
//     if(request.readyState==4 ){

//     if( request.status==200){
//         alert(request.responseText);
//         }
//         else{
//             alert("Error al cargar la pagina" + request.statusText);
//         }
//     }
// }
let array=[3,6,1,9,11,2,5,8,12,14];
let new_array =array.sort((a,b)=> a - b)
console.log(new_array); 
const first=new_array[0]; 
const last=new_array[new_array.length-1];
console.log("smallest element is :"+first);
console.log("largest element is: "+last);



// // console.log("smallest number is ".newarray[0]);
// console.log("largest number is".new_array[new_array.length-1]);

</script>
</body>
</html>




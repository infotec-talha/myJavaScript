function getcube(){  
    var number=document.getElementById("number").value;  
    console.log(number*number*number);  
    } 
    <form>  
    Enter No:<input type="text" id="number" name="number"/><br/>  
    <input type="button" value="cube" onclick="getcube()"/>  
    </form>
    /////////
  

function add()
{
    var prn;
    var name;
    var percentage;

    
    
    
    
    var prn1=document.getElementById("p");
    var pr=prn1.value;
    //prn.push(pr);
    
    var nm1=document.getElementById("n");
    var nam=nm1.value;
    //name.push(nam);
    
    
    var per1=document.getElementById("m");
    var per=per1.value;
   // percentage.push(per);
    

    
    var table=document.getElementById("myTable");
    var flag=true;
    var n=1;
    do
    {
       
    var trow=table.insertRow(n);
    var col1=trow.insertCell(0);
    var col2=trow.insertCell(1);
    var col3=trow.insertCell(2);
        n++;
        flag=false;
    }while(flag)
    
    col1.innerHTML=pr;
    col2.innerHTML=nam;
    col3.innerHTML=per;
}
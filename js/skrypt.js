window.onload=init();

var XMLMainElemnt=null;
var licznik=0;
var wybrany=0;
var tmpCode;

function init() {

    document.getElementById("suggestBoxField").style.left=document.getElementById("woj").offsetLeft+"px";
    document.getElementById("suggestBoxField").style.top=document.getElementById("woj").offsetTop+"px" +
       document.getElementById("woj").offsetHeight+"px";
    document.getElementById("woj").onkeyup=function (evt) {

        showBox(evt);
        checkKey(evt);
    }
    suggestBox();
}

function ajaxInit(){
       var HXR =null;
       try {
            HXR=new XMLHttpRequest;
       }
       catch (e) {
            alert (e.description);
       }
       //alert ("Init");
       return HXR;
}
function suggestBox(){

    var XHR=ajaxInit();
    if (XHR !=null){
        //alert ("Przed GET");
        XHR.open("GET","wojewodztwa.xml"+"?random"+Math.random(),true);
        XHR.onreadystatechange=function(){

            if ((XHR.readyState==1) || (XHR.readyState==2) || (XHR.readyState==3) ){
                //document.getElementById('tekst').innerHTML= "<img src='images/ajax-loader.gif' alt='GIF' />";
            }
            else if (XHR.readyState==4){
                if (XHR.status==200) {
                    //alert("aaa");
                    XMLMainElemnt=XHR.responseXML.documentElement;
                }
                else {
                   alert ("Wystąpił błąd: " + XHR.status) ;
                }
            }
        }
        XHR.send(null);
    }
}
function showBox(evt){

    var evt=(evt) ? evt:window.event;
    if (evt.keyCode !=8 && evt.keyCode !=13 && evt.keyCode !=40 && evt.keyCode !=38)
    {
        licznik=0;
    }
    if (XMLMainElemnt!=null){

        var suggestBoxField=document.getElementById("suggestBoxField");
        suggestBoxField.style.visibility='hidden';
        document.getElementById("woj").className='';
        suggestBoxField.innerHTML='';

        var wojewodztwa=XMLMainElemnt.getElementsByTagName("Województwo");
        if (document.getElementById("woj").value!=''){
            for (var i=0;i<wojewodztwa.length;i++){
                if (wojewodztwa[i].getElementsByTagName("Nazwa")[0].firstChild.nodeValue.toLowerCase().
                          indexOf(document.getElementById("woj").value.toLowerCase())==0) {

                        suggestBoxField.style.visibility='visible';
                        var tmpDiv=document.createElement("div");
                        tmpDiv.className='podpowiedzi';
                        tmpDiv.onmouseover=function(){
                            this.className='podpowiedzihover';
                        }
                        tmpDiv.onmouseout=function(){
                            this.className='podpowiedzi';
                        }
                        tmpDiv.onclick=function(){
                            document.getElementById("woj").value=this.innerHTML;
                            wybraniePodpowiedz(this.innerHTML);
                            suggestBoxField.style.visibility='hidden';
                        }
                        tmpDiv.innerHTML=wojewodztwa[i].getElementsByTagName("Nazwa")[0].firstChild.nodeValue;
                        suggestBoxField.appendChild(tmpDiv);
                }
            }
            if (document.getElementById("suggestBoxField").childNodes.length==0)
                    document.getElementById("woj").className='error';

        }
    }
}
function checkKey(evt) {

    var evt=(evt) ? evt:window.event;

    var iloscPodpowiedzi=document.getElementById("suggestBoxField").childNodes.length;
    if (licznik==0) {
        licznik=iloscPodpowiedzi;
        wybrany=0;
    }
    if (evt.keyCode==40)//strzałka w dół
    {
        if (tmpCode=='gora')
            licznik++;
        document.getElementById("suggestBoxField").childNodes[licznik%iloscPodpowiedzi].className="podpowiedzihover";
        wybrany=licznik%iloscPodpowiedzi;
        licznik++;
        tmpCode='dol';
    }
    else if (evt.keyCode==38)//strzałka w góre
    {
        if (tmpCode=='dol')
            licznik--;

        licznik--;
        wybrany=licznik%iloscPodpowiedzi;
        document.getElementById("suggestBoxField").childNodes[licznik%iloscPodpowiedzi].className="podpowiedzihover";
        tmpCode='gora';
    }

    else if (evt.keyCode==13){
        document.getElementById("woj").value=document.getElementById("suggestBoxField").childNodes[wybrany].firstChild.nodeValue;
        wybraniePodpowiedz(document.getElementById("suggestBoxField").childNodes[wybrany].firstChild.nodeValue);
        licznik=0;
        wybrany=0;

        tmpCode='enter';
    }
    else if (evt.keyCode==8)//backspace
    {

        licznik=0;
        wybrany=0;

        tmpCode='backspace';
    }
}
function wybraniePodpowiedz(wybranyRekord){
    suggestBoxField.style.visibility='hidden';
    var wybraneWoj=null;


    for(var i=0;i<XMLMainElemnt.getElementsByTagName("Województwo").length;i++) {
        if (XMLMainElemnt.getElementsByTagName("Nazwa")[i].firstChild.nodeValue==wybranyRekord) {

            wybraneWoj=XMLMainElemnt.getElementsByTagName("Nazwa")[i].parentNode;
            break;
        }
    }
    if (wybraneWoj !=null) {
        var table=document.createElement("table");
        table.className="daneWoj";
        var tableBody=document.createElement("tbody");
        for (var i=0;i<wybraneWoj.childNodes.length;i++) {

            if (wybraneWoj.childNodes[i].nodeType==1)
            {
                var row=document.createElement("tr");
                var cell=document.createElement("td");
                var header=document.createTextNode(wybraneWoj.childNodes[i].nodeName+":");
                className="cellHeader";
                cell.appendChild(header);
                row.appendChild(cell);

                cell=document.createElement("td");
                var content=document.createTextNode(wybraneWoj.childNodes[i].firstChild.nodeValue);
                cell.appendChild(content);
                row.appendChild(cell);

                tableBody.appendChild(row);
            }
        }
        table.appendChild(tableBody);

        document.getElementById("tekst").appendChild(table);
    }
    /*
     <table>
        <tbody>
            <tr><td>Nazwa:</td> <td>22323 </td></tr>
            <tr><td>Powierzchnia: </td>2323 <td> </td></tr>
            <tr><td> Ludność:</td> <td> 2323</td></tr>
        </tbody>
     </table>

     */
}
//function pokazDiv(id,URL) {
//    var XHR=ajaxInit();
//    if (XHR !=null){
//        //alert ("Przed GET");
//        XHR.open("GET",URL+"?random="+Math.random(),true);
//        XHR.onreadystatechange=function(){
//
//            if ((XHR.readyState==1) || (XHR.readyState==2) || (XHR.readyState==3) ){
//                document.getElementById('tekst').innerHTML= "<img src='images/ajax-loader.gif' alt='GIF' />";
//            }
//            else if (XHR.readyState==4){
//                if (XHR.status==200) {
//                    document.getElementById('tekst').innerHTML=XHR.responseText;
//                }
//                else {
//                   alert ("Wystąpił błąd: " + XHR.status) ;
//                }
//            }
//        }
//        XHR.send(null);
//    }
//
//}
//$(document).ready(function() {
//
//    $("#tło").click(function(){
//
//        //if ($("body").css("background-color")=="black") {
//        //    $("body").css("background-color", "white");
//        //}
//        //else {
//        //    $("body").css("background-color", "black")
//        //}
//        //$('#tło,.panel-body.youtube').css('border','2px dotted red');
//        //$("div").filter(".col-sm-12 col-md-3").css('border','2px dotted red');
//        //$('#tło,.panel-body.youtube').css('border','2px dotted red');
//        //$("body").css("background-color", "white")
//        //$("div[class='col-sm-12 col-md-3']").css('border','2px dotted red');
//        //var kolor_tla=$("body").css("background-color");
//        //console.log(kolor_tla);
//        //$("body").wrap('<div class="wrap_all">');
//        //$("[class *='navbar-fixed-top']").attr("class","navbar navbar-default");
//    });
//    $(".maly").click(function(){
//        $("[class *='col-sm']").attr("class","col-sm-12 col-md-2");
//        $(".thumbnail img").height("auto");
//    });
//    $(".duzy").click(function(){
//        $("[class *='col-sm']").attr("class","col-sm-12 col-md-3");
//        $(".thumbnail img").height("auto");
//    });
//    $(".lista").click(function(){
//        $("[class *='col-sm']").attr("class","col-sm-12 col-md-12");
//        $(".thumbnail img").height("500px");
//
//    });
//    $(".klucz").click(function(){
//        $(".navbar").toggle("slow");
//        $(".panel").toggle("slow");
//    });
//    $(".klucz").mouseover(function(){
//        $(".navbar").toggle("slow");
//        $(".panel").fadeIn("slow",0.5);
//    });
//
//     $(".thumbnail img").mouseover (function (){
//        var maly=$(this).attr('src');
//        var duzy=maly.replace ('small','big');
//        $('#popup img').attr ('src',duzy);
//        $('#popup').show();
//        console.log(duzy);
//     }).mousemove (function(e){
//        if (e.pageX<1100) {
//          $('#popup').css ('left',e.pageX+10);
//        } else {
//          $('#popup').css ('left',e.pageX-50);
//        }
//
//        $('#popup').css ('top',e.pageY+10);
//
//     }).mouseout (function(){
//         $('#popup').hide();
//     })
//
//
//
//});

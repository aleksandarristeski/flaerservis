jQuery(document).ready(function() {
  //---------Create-Element-für-error-------------
  function createElement(msg, element) {
    let error = msg
    $(element).before("<strong class='error'>" + error + "</strong>")
    $(element).focus()
    
    if($("strong").hasClass("error")) {
      $(element).addClass("border")
    }
  }
  //--------Kontrol/Check---Kariera-------------------
  function formKariera(e) {
    $(".error").hide()
    $(".error").remove()
    $('input').removeClass("border")
    $('textarea').removeClass("border")
    document.querySelector("#ergebnis").innerHTML = ""  
    let nn = $("#name").val()
    let mail = $("#mail").val()
    let tel = $("#tel").val()
    let ad = $("#address").val()
    let msg = $("#messаge").val()
    let check = true
    //---------------Muster---------------------
    let nameRegExp = /^[a-zA-zа-шА-Ш\s\-\.]{1,}$/i
    let mailRegExp = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i
    let telRegExp = /^[0-9\+\s\\\-]{1,}$/
  
    if(nn === "") {
      createElement("Полето е задолжително","#name")
      check = false
      // e.preventDefault()  
    } 
    else if(!nameRegExp.test(nn)) {
      createElement("Името кое го внесовте не е валидно","#name")
      check = false
      // e.preventDefault()  
    } 
    if(mail === "") {
      createElement("Полето е задолжително","#mail")
      check = false
      // e.preventDefault()  
    } 
    else if(!mailRegExp.test(mail)) {
      createElement("Внесете валидна Е-маил адреса","#mail")
      check = false
      // e.preventDefault()  
    }
    if(tel === "") {
      createElement("Полето е задолжително","#tel")
      check = false
      // e.preventDefault()  
    } 
    else if(!telRegExp.test(tel)) {
      createElement("Внесете валиден телефонски број","#tel")
      check = false
      // e.preventDefault()  
    } 
    if(ad === "") {
      createElement("Полето е задолжително","#address")
      check = false
      // e.preventDefault()  
    } 
    if(msg === "") {
      createElement("Полето е задолжително","#messаge")
      check = false
      // e.preventDefault()  
    } 
    console.log(check)
    if(check) {
       $.ajax({
        type: "POST",
        url: '../php/sendaplication.php',
        data:{name:nn,email:mail,telefon:tel,adresa:ad,poraka:msg},
        dataType: 'json'
      })
      document.querySelector("#ergebnis").innerHTML = "<p>Пораката е успешно испратена.</p>"
      ClearKariera()
    }
  } 
  //-------Check-Form---------------------
  $("#kariera").click(function(event) {
    event.preventDefault()
    formKariera() 
  })
  function ClearKariera() {
    document.getElementById("name").value = "";
    document.getElementById("mail").value = "";
    document.getElementById("tel").value = "";
    document.getElementById("address").value = "";
    document.getElementById("messаge").value = "";
    //document.querySelector("#ergebnis").innerHTML = ""
  }
    //--------Kontrol/Check---Kontakt-------------------
    function formKontakt(e) {
      $(".error").hide()
      $(".error").remove()
      $('input').removeClass("border")
      $('textarea').removeClass("border")
      $('select').removeClass("border")
      document.querySelector("#ergebnisKontakt").innerHTML = ""
      
      let kompany = $("#kompanyname").val()
      let name = $("#name").val()
      let email = $("#email").val()
      let telefon = $("#telefon").val()
      let usluga = printChecked("service")
      let datum = $("#date").val()
      let kolicina = $("#kolicina").val()
      let lokacija = $("#location").val()
      let oblast = $("#oblast").val()
      let msg = $("#messаge").val()
      let check = true
      //---------------Muster---------------------
      let nameRegExp = /^[a-zA-zа-шА-Ш\s\-\.\&\!\?\,]{1,}$/i
      let tekstRegExp = /^[a-zA-zа-шА-Ш\s\-\.\&\!\?\,\(\)]{1,1000}$/i
      let mailRegExp = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i
      let telRegExp = /^[0-9\+\s\\\-]{1,}$/
      let kolicinaRegExp = /^[0-9]{1,15}$/
      if(kompany === "") {
        createElement("Полето е задолжително","#kompanyname")
        check = false   
      } 
      else if(!nameRegExp.test(kompany)) {
        createElement("Името кое го внесовте не е валидно","#kompanyname")
        check = false
      } 
      if(name === "") {
        createElement("Полето е задолжително","#name")
        check = false
      }
      else if(!nameRegExp.test(name)) {
        createElement("Името кое го внесовте не е валидно","#name")
        check = false
      } 
      if(email === "") {
        createElement("Полето е задолжително","#email")
        check = false        
      }
      else if(!mailRegExp.test(email)) {
        createElement("Внесете валидна емаил адреса","#email")
        check = false
      } 
      if(telefon === "") {
        createElement("Полето е задолжително","#telefon")
        check = false  
      }
      else if(!telRegExp.test(telefon)) {
        createElement("Внесете валиден телефонски број","#telefon")
        check = false
      } 
      if(usluga === "") {
        createElement("Полето е задолжително","#box")
        check = false   
      }
      if(datum === "") {
        createElement("Полето е задолжително","#date")
        check = false
      } 
      else if (!checkDate(new Date(datum))) {
        createElement("Датумот кој го избравте не е валиден","#date")
        check = false
      }
      if(kolicina === "") {
        createElement("Полето е задолжително","#kolicina")
        check = false          
      }
      else if(!kolicinaRegExp.test(kolicina)) {
        createElement("Внесете валидна вредност (цел број)","#kolicina")
        check = false
      } 
      if(lokacija === "") {
        createElement("Полето е задолжително","#location")
        check = false  
      }
      if(oblast === "") {
        createElement("Полето е задолжително","#oblast")
        check = false
      }
      else if(!nameRegExp.test(oblast)) {
        createElement("Името кое го внесовте не е валидно","#oblast")
        check = false
      } 
      if(msg === "") {
        createElement("Полето е задолжително","#messаge")
        check = false  
      }
      else if(!tekstRegExp.test(msg)) {
        createElement("Содржината може да содржи до 1000 карактери вклучително(!?,.-)","#messаge")
        check = false
      } 
      if(check) {
         $.ajax({
          type: "POST",
          url: '../php/sendkontakt.php',
          data:{kompany:kompany,name:name,email:email,telefon:telefon,telefon:telefon,usluga:usluga,datum:datum,kolicina:kolicina,lokacija:lokacija,oblast:oblast,poraka:msg},
          dataType: 'json'
        })
        document.querySelector("#ergebnisKontakt").innerHTML = "<p>Пораката е успешно испратена.</p>"
        ClearKontakt()
      }
      function checkDate(date) {
        const checkDate = new Date();
        if (((checkDate.getFullYear() <= date.getFullYear()) &&
        (checkDate.getMonth() <= date.getMonth()) &&
        (checkDate.getDate() < date.getDate()) )|| 
        ((checkDate.getFullYear() <= date.getFullYear()) &&
        (checkDate.getMonth() < date.getMonth())) ||
        (checkDate.getFullYear() < date.getFullYear())) 
        {
          return true;
        }
        return false;
      }
      //console.log(checkDate(new Date(datum)));
    } 
    //-------Check-Form---------------------
    $("#kontakt").click(function(event) {
      //$form = $(this)
      //alert("test button ok")
      event.preventDefault()
      formKontakt()
    })
    function ClearKontakt() {
      document.getElementById("kompanyname").value = ""
      document.getElementById("name").value = ""
      document.getElementById("email").value = ""
      document.getElementById("telefon").value = ""
      document.getElementById("box").value = ""
      document.getElementById("date").value = ""
      document.getElementById("kolicina").value = ""
      document.getElementById("location").value = ""
      document.getElementById("oblast").value = ""
      document.getElementById("messаge").value = ""
      //document.querySelector("#ergebnis").innerHTML = ""
    }
    //TEST welsche radio button is checked
    function printChecked(wert) {
      let items = document.getElementsByName(wert);
      let selectedItem = "";
      for (let i = 0; i < items.length; i++) {
          if (items[i].type == "checkbox" && items[i].checked == true) selectedItem += items[i].value + ', ';
      }
      return selectedItem
      // alert(selectedItem);
    }

    $("#tabs").tabs();

});//end jQuery ready 
<div id="contact">
<?php  // contactForm ?>
  <div id="banner">
    <h1>ПОБАРАЈ ПОНУДА</h1>
    <p>Доколку сакате да добиете бесплатна понуда за некоја од нашите услуги, ве молиме пополнете го формуларот со колку што е можно повеќе детали и испратете го.</p>
    <p>Откако ќе го добиеме, ќе ве контактираме во најкус можен рок со конкретна понуда и вклучени трошоци.</p>
  </div>
  <div id="cinfo">
    <p><span class="sky">ШТО ДОБИВАТЕ:</span></p>
    <ul>
      <li><i class="fa-regular fa-circle-check"></i>БРЗА И КВАЛИТЕТНА УСЛУГА</li>
      <li><i class="fa-regular fa-circle-check"></i>ГАРАНТИРАНА ДИСТРИБУЦИЈА</li>
      <li><i class="fa-regular fa-circle-check"></i>НИСКИ ЦЕНИ</li>
      <li><i class="fa-regular fa-circle-check"></i>GPS СЛЕДЕЊЕ И АНАЛИТИКА</li>
    </ul>
    <p class="cinfo">За секое делење флаери од страна на нашата агенција добивате детална GPS мапа каде, кога и колку флаери се поделени. Мапата е правена во реално време согласно движењето на вработените и ги покажува местата каде се делеле флаерите и времето поминато во делењето на истите.</p>
  </div>
  <div>
    <form method="post">
      <label for="kompanyname">ИМЕ НА КОМПАНИЈА / ОРГАНИЗАЦИЈА</label>
      <input type="text" id="kompanyname" name="kompanyname" placeholder="Внесете го името на вашата компанија или организација">

      <label for="name">ВАШЕТО ИМЕ И ПРЕЗИМЕ</label>
      <input type="text" id="name" name="name" placeholder="Име и презиме">

      <label for="email">ВАШАТА ЕМАИЛ АДРЕСА</label>
      <input type="text" id="email" name="email" placeholder="Емаил адреса">

      <label for="telefon">ТЕЛЕФОНСКИ БРОЈ ЗА КОНТАКТ</label>
      <input type="text" id="telefon" name="telefon" placeholder="Телефонски број">

      <p><span class="extrasky">ОДБЕРЕТЕ УСЛУГА</span></p>
      <div id="check">
        <div id="box">  
          <input type="checkbox" id="design" name="service" value="Dizajn ">
          <label for="service">ДИЗАЈН</label>
        </div>
        <div id="box">
          <input type="checkbox" id="print" name="service" value="Pecatenje ">
          <label for="service"> ПЕЧАТЕЊЕ</label>
        </div>
        <div id="box">
          <input type="checkbox" id="distribution" name="service" value="Distribucija ">
          <label for="service">ДИСТРИБУЦИЈА</label>
        </div>
      </div>

      <p><span class="sky">ИНФОРМАЦИИ ЗА КАМПАЊАТА</span></p>
      <label for="date">ДАТУМ НА ЗАПОЧНУВАЊЕ НА КАМПАЊАТА</label>
      <input type="date" id="date" name="date" placeholder="dd-mm-yyyy">

      <label for="kolicina">КОЛИЧИНА ШТО БАРАТЕ ДА ЈА ИСПОРАЧАМЕ ЗА ВАС</label>
      <input type="text" id="kolicina" name="kolicina" placeholder="Внесете количина">

      <label for="location">ОДБЕРЕТЕ ЛОКАЦИЈА</label>
      <select name="location" id="location">
        <option value="">- Одбери општина</option>
        <option value="ohrid">Охрид</option>
        <option value="struga">Струга</option>
        <option value="bitola">Битола</option>
        <option value="skopje">Скопје</option>
      </select>

      <label for="oblast">ПОТРЕБНИ ОБЛАСТИ</label>
      <input type="text" id="oblast" name="oblast" placeholder="Внесете реон, област, улица…">

      <label for="messаge">ПОРАКА</label>
      <textarea id="messаge" name="messаge" rows="4" cols="50" placeholder="Внесете ја секоја дополнителна информација што треба да ја знаеме"></textarea>
      
      <button id="kontakt" type="submit">ИСПРАТИ</button>
      <div id="ergebnisKontakt"></div>
    </form>

  </div>
</div> 
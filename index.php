<html>
  <head>
    <title>CFA Appreciation Wall</title>
    <link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Sue+Ellen+Francisco|Neucha|Coming+Soon|Annie+Use+Your+Telescope|Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
    <script type="text/javascript" src="scripts.js"></script>
  </head>
  <body>
    <div id="cfa-appreciation-wall">
      <h1><abbr>CFA</abbr> Appreciation Wall</h1>
        <form class="h-entry note note-background-yellow font-1">
          <textarea placeholder="">What do you appreciate?</textarea>
          <fieldset>
            <legend>Personalize it!</legend>
            <div class="field">
              <label>Font</label>
              <select>
                <option>Patrick Hand</option>
                <option>Sue Ellen Francisco</option>
                <option>Neucha</option>
                <option>Coming Soon</option>
                <option>Annie Use Your Telescope</option>
                <option>Nothing You Could Do</option>
              </select>
            </div>
            <div class="field">
              <label>Color</label>
              <select>
                <option>Yellow</option>
                <option>Chartreuse</option>
                <option>Blue</option>
                <option>Salmon</option>
                <option>Hot Pink</option>
              </select>
            </div>

          </fieldset>
          <button type="submit">Submit</button>  
        </form>

      <?php for ($i=0; $i < 2; $i++) : ?> 
        <article class="h-entry note note-background-yellow font-1">
          <p>I appreciate the communities team. Ya&rsquo;ll are so talented. I&rsquo;m soooo happy I work w/ you.</p>
         <span class="p-author note-signature"> &lt;3 Hannah</span>
        </article>
        <article class="note note-background-green font-2">
          <p>Thanks to everyone who brought veggies for the 2014 launch of FFCFA</p>
                 <span class="p-author note-signature">Dharmishta</span>
        </article>
        <article class="note note-background-yellow font-3">
          <p>
            ERICA - <br />
            Thanks for always helping when I break GitHub, for silently rewriting apps &amp; for keeping it real.
          </p>
          <span class="p-author note-signature note-signature-anonymous">Anonymous</span>

        </article>
        <article class="note note-background-blue font-4">
          <p>Thanks Dana for the yummy lunch!</p>
          <span class="p-author note-signature">Matt</span>
        </article>
        <article class="note note-background-salmon font-5">
          <p>
            Erik &amp; Livien - <br />
            I &lt;3 y&rsquo;all. <br />
            I &lt;3 our team. Thanks for being really really real.
          </p>
         <span class="p-author note-signature">Lyzi</span>
        </article>
        <article class="note note-background-pink font-5">
          <p>&lt;3 to @jden for being an active feminist on twitter.</p>
          <span class="p-author note-signature note-signature-anonymous">Anonymous</span>
        </article>
      <? endfor; ?>
    </div>
  </body>
</html>
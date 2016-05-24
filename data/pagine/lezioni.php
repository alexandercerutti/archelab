<?php
/*	ISTRUZIONI PER LA MODIFICA:
 *		• Usare <h3></h3> per i titoli e <h4></h4> per i sottotitoli
 *		• Mantenere il resto del testo in tag <p></p> (paragrafo)
 *		• Non rimuovere funzioni php già impostate:
 *			indexLesson, ad esempio, legge il file (come lezioni.json o tutorato.json) posizionato in data/lezioni/.
 *			Per modificare le informazioni sulle lezioni accedere da lì.
 *		• Non modificare l'estensione dei file in data/pagine (come questo).
 */?>
<h3>Lezioni a.a. 2015-2016</h3>
<?php $filename = "lezioni.json"; ?>
<p id="pgdesc">Sono disponibili qui le slides (in pdf) mostrate durante le lezioni, anche quelle stampabili.</p>
<h4>Modulo 1 (primo semestre)</h4>
<ul>
	<?php indexLesson('mod1', $filename); /* richiama lista lezioni */ ?>
</ul>

<h4>Modulo 2 (secondo semestre)</h4>
<ul>
	<?php indexLesson('mod2', $filename); /* richiama lista lezioni */ ?>
</ul>

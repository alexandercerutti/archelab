<?php
/*	ISTRUZIONI PER LA MODIFICA:
 *		• Usare <h3></h3> per i titoli e <h4></h4> per i sottotitoli
 *		• Mantenere il resto del testo in tag <p></p> (paragrafo)
 *		• Non rimuovere funzioni php già impostate:
 *			indexLesson, ad esempio, legge il file (come lezioni.json o tutorato.json) posizionato in data/lezioni/.
 *			Per modificare le informazioni sulle lezioni accedere da lì.
 *		• Non modificare l'estensione dei file in data/pagine (come questo).
 */?>

<h3>Attività di tutoraggio a.a. 2015-2016</h3>
<h4 style="font-weight: 400">A cura dell'<a class="mail" target="_blank" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=marcolaser@gmail.com&tf=1">Ing. Marco Lavazza Seranto</a></h4>

<p>Viene reso qui sotto disponibile il materiale usato durante le attività di tutoraggio.</p>

<h4>Lezioni:</h4>
<ul>
	<?php indexLesson('tutorato', "tutorato.json"); ?>
</ul>
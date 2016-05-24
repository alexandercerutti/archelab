<?php
/*	ISTRUZIONI PER LA MODIFICA:
 *		• Usare <h3></h3> per i titoli e <h4></h4> per i sottotitoli
 *		• Mantenere il resto del testo in tag <p></p> (paragrafo)
 *		• Non rimuovere funzioni php già impostate:
 *			indexLesson, ad esempio, legge il file (come lezioni.json o tutorato.json) posizionato in data/lezioni/.
 *			Per modificare le informazioni sulle lezioni accedere da lì.
 *		• Non modificare l'estensione dei file in data/pagine (come questo).
 */?>

<h3>Introduzione al corso</h3><br>
<h4>Prerequisiti</h4>

<p>Conoscenze di base di matematica, normalmente acquisite durante gli studi superiori. 
Essendo un corso che si protrae per entrambi i semestri, si richiede un'infarinatura di programmazione (C) per gli argomenti trattati durante il secondo semestre.</p>

<h4>Obiettivi formativi</h4>

<p>Acquisire conoscenze su rappresentazione digitale dell'informazione, sul livello della logica digitale nei calcolatori elettronici, sulla realizzazione tramite circuiti delle operazioni aritmetiche principali e sul livello linguaggio macchina di un calcolatore convenzionale. Acquisire inoltre i fondamenti teorici e le tecniche per la progettazione dell'architettura convenzionale di un elaboratore nelle sue componenti principali, ovvero Processore - Input/Output - Memoria. 
Approfondire la conoscenza sul livello macchina di un processore convenzionale. Acquisire i rudimenti della programmazione assembler, e le sue relazioni con un linguaggio ad alto livello ( in particolare, le strutture di controllo e i tipi di dati) nel linguaggio assembler di un semplice processore RISC. 
Il corso enfatizza le tecniche per la valutazione delle prestazioni di un calcolatore, e l'interfaccia tra l'hardware e il software di un elaboratore.</p>

<h4>Programma</h4>

<h5>Primo Semestre</h5>

<ul class="unstyled">
	<li>Organizzazione di base di un calcolatore (CPU, memoria, I/O) e livelli di astrazione.</li>
	<li>Rappresentazione informazione, e arimetica dei calcolatori.</li>
	<li>Algebra booleana (Tabelle di verità, Forme canoniche di espr. booleane), Circuiti combinatori (multiplexer, decoder, PLA), ALU.</li>
	<li>Memoria: Latch, Clock, Flip-flop, Registri, RAM.</li>
	<li>Circuiti sequenziali sincroni.</li>
	<li>Principali istruzioni MIPS (aritmetico-logico, di controllo)</li>
	<li>Progetto della CPU:
		<ul>
			<li>Progettazione ALU e Register File</li>
			<li>Parte controllo e parte operativa.</li>
			<li>Organizzazione a singolo e multiplo ciclo.</li>
			<li>Progetto del controllo.</li>
		</ul>
	</li>	
	<li>Valutazione delle prestazioni: Tempo di CPU. Throughput. CPI. Misure di prestazioni e benchmarks.
</ul>

<h5>Secondo Semestre</h5>

<ul class="unstyled">
	<li>Gerarchie di memoria</li>
	<li>Principio di località</li>
	<li>Memoria cache (Organizzazioni della cache - Mapping degli indirizzi).</li>
	<li>Memoria virtuale (Indirizzo virtuale e fisico - Memoria paginata e meccanismi di traduzione).</li>
	<li>Input/Output:
		<ul>
			<li>Esempi di dispositivi.
			<li>Organizzazione sottosistema di I/O (bus, controllori, dispositivi) e casi di studi.</li>
			<li>Misure di prestazioni. Cooperazione tra controllori dei dispositivi, CPU e memoria. Tipi di bus e arbitraggio.</li>
			<li>Programmazione dell'I/O. Interruzioni, polling, DMA. Driver dei dispositivi.</li>
		</ul>
	</li>
	<li>Progetto della CPU avanzato:
		<ul>
			<li>Parallelismo a livello di istruzioni</li>
			<li>Organizzazione della CPU con pipeline.</li>
			<li>Dipendenze sui dati e problemi dovuti a salti e eccezioni.</li>
		</ul>
	</li>
	<li>Esecuzione dei programmi: compilatore, assemblatore, linker, loader</li>
	<li>Il processo di compilazione:
		<ul>
			<li>Traduzione assembler delle principali strutture di controllo di un linguaggio ad alto livello</li>
			<li>Funzioni e allocazione della memoria (text, data e stack)</li>
			<li>Strutture dati (array unidimensionale)</li>
		</ul>
	</li>
	<li>Uso del simulatore SPIM.
</ul>

<h4>Testi di riferimento</h4>
<ul>
	<li>Note dei docenti</li>
	<li>David A. Patterson, John L. Hennessy. Computer Organization and Design: The Hardware/Software Interface - Forth edition. Morgan Kaufmann Publisher, 2008.</li>
	<li>David A. Patterson, John L. Hennessy. Struttura e Progetto dei Calcolatori: l'interfaccia hardware-software - Terza Edizione. Zanichelli, 2010.</li>
</ul>

<h4>Informazioni e spiegazioni</h4>

<p>Se non ti fosse possibile chiedere informazioni o spiegazioni durante le lezioni o durante l'orario di ricevimento, scrivi a <a  class="mail" href="mail:architettura@dsi.unive.it">architettura@dsi.unive.it</a>.</p>
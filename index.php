<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<?php
$faqs = [
    'Come state implementando la recente decisione della Corte di giustizia 
        dell\'Unione europea (CGUE) relativa al diritto all\'oblio?' => [
        '<p>La recente decisione della Corte di giustizia dell\'Unione europea 
            ha profonde conseguenze per i motori di ricerca in Europa. La Corte 
            ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori 
            di ricerca come Google di rimuovere risultati relativi a chiavi di 
            ricerca che includono il proprio nome. Per poter essere rimossi, i 
            risultati visualizzati devono essere inadeguati, irrilevanti o non 
            più rilevanti, o eccessivi.</p>',
        '<p>Da quando questa decisione è stata pubblicata il 13 maggio 2014, 
            abbiamo lavorato incessantemente per uniformarci a essa. Si tratta 
            di una procedura complessa perché dobbiamo valutare ogni singola 
            richiesta e effettuare un bilanciamento tra il diritto 
            dell\'individuo a controllare i suoi dati personali ed il diritto 
            di tutti di conoscere e distribuire le informazioni.</p>',
        '<p>Per presentare una richiesta di rimozione, compila questo modulo 
            web. Riceverai una risposta automatica che conferma la ricezione 
            della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente
            che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto 
            tante richieste simili). Nel valutare la richiesta, considereremo 
            se i risultati includono informazioni obsolete relative alla tua 
            vita privata. Considereremo inoltre se vi è un interesse pubblico 
            a che le informazioni rimangano nei nostri risultati delle ricerche,
            ad esempio se riguardano frodi finanziarie, negligenza 
            professionale, condanne penali o la tua condotta pubblica in 
            relazione a un pubblico ufficio (eletto o non eletto). Queste 
            valutazioni sono complesse e, in quanto organizzazione privata, 
            potremmo non essere nella posizione giusta per prendere decisioni 
            in merito al tuo caso. Se non sei d\'accordo con la nostra 
            valutazione, puoi rivolgerti all\'Autorità garante per la protezione
            dei dati personali nel tuo paese.</p>',
        '<p>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per 
            la protezione dei dati e con altre autorità per perfezionare il 
            nostro approccio. La decisione della CGUE rappresenta un cambiamento 
            significativo per i motori di ricerca. Siamo preoccupati per le sue 
            conseguenze, ma riteniamo anche che sia importante rispettare la 
            decisione della Corte e ci stiamo adoperando per predisporre una 
            procedura conforme alla legge.</p>',
        '<p>Quando cerchi un nome, potresti trovare una notifica in cui viene 
            spiegato che i risultati potrebbero essere stati modificati nel 
            rispetto delle leggi europee per la protezione dei dati. Mostriamo 
            questa notifica agli utenti europei quando cercano la maggior parte 
            dei nomi, non soltanto le pagine che sono state soggette a una 
            rimozione.</p>'
    ],
    'Come fa Google a proteggere la mia privacy e a tenere le mie 
        informazioni al sicuro?' => [
        '<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo 
            sono anche per noi. Per noi è imperativo offrire un\'elevata 
            sicurezza e assicurarti che le tue informazioni sono al sicuro e 
            accessibili quando ne hai bisogno.</p>',
        '<p>Siamo costantemente al lavoro per garantire un\'elevata sicurezza, 
            proteggere la tua privacy e rendere Google ancora più efficace ed 
            efficiente per te. Spendiamo centinaia di milioni di dollari ogni 
            anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in 
            materia di sicurezza dei dati per mantenere le tue informazioni al 
            sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la 
            privacy di facile utilizzo come Google Dashboard, la verifica in due 
            passaggi e Impostazioni annunci. Così, per quanto riguarda le 
            informazioni che condividi con Google, hai il massimo controllo.</p>',
        '<p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso
             come proteggere te e la tua famiglia online, nel Centro Google per 
             la sicurezza online.</p>',
        '<p>Scopri quali misure adottiamo per garantire protezione e sicurezza 
             alle tue informazioni personali, lasciando a te il controllo.</p>'
    ],
    'Perché il mio account è associato a un paese?' => [
        '<p>Il tuo account è associato a un paese (o territorio) nei Termini di 
        servizio per poter stabilire due cose:</p>',
        '<ol><li>La società consociata Google che offre i servizi, tratta le tue
         informazioni ed è responsabile del rispetto delle leggi sulla privacy 
         vigenti. Generalmente Google offre i propri servizi per i consumatori 
         tramite una delle due società seguenti:',
        '<ol><li>Google Ireland Limited, se gli utenti sono residenti nello 
         Spazio economico europeo (paesi dell\'Unione europea, oltre a Islanda, 
         Liechtenstein e Norvegia) o in Svizzera.</li>',
        '<li>Google LLC, con sede negli Stati Uniti, per il resto del 
         mondo.</li></ol></li>',
        '<li>La versione dei termini che regola il nostro rapporto, che può 
         variare in base alle leggi locali.</li></ol>'
    ],
];
?>

<body>
    <section class="header">
        <header class="flex-container">
            <div class="left-header flex-container">
                <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="logo">
                <h1>Privacy e termini</h1>
            </div>

            <div class="right-header flex-container">
                <i class="fa-solid fa-grid fa-3x"></i>
                <span>A</span>
            </div>
        </header>

        <nav>
            <span>Introduzione</span>
            <span>Norme sulla privacy</span>
            <span>Termini di servizio</span>
            <span>Tecnologie</span>
            <span class="faqs">Domande frequenti</span>
        </nav>
    </section>

    <main>
        <?php
        foreach ($faqs as $key => $faq) {
            echo '<h1>' . $key . '</h1>';
            foreach ($faq as $paragraph) {
                echo $paragraph;
            }
        }
        ?>
    </main>
</body>

</html>
<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress0' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pD.ZdSBjtN0u:1p.;*om*NqeftOd<lnS-rhCTasRHTZTEY5dZ;5wR4L1sTP&V*K1' );
define( 'SECURE_AUTH_KEY',  'Ek.`Hi_dNu+>L,B!~wi#](L~kh;gS-XmOsG@k|5X~!hr xjbG ?I&b3N=zY%Af=@' );
define( 'LOGGED_IN_KEY',    '@RaN*RPIA}]&Nlqq`8PSaW )AKCQ>40;#2iN*T47=i[?Qa2bl;iqQ>Gatvx3z.${' );
define( 'NONCE_KEY',        'Q3FSMu2c h]YMwBa7i7nRf$g*hDNUltJzw}Fe+S@3fBSi9,roc0tliH8!$aZOw:=' );
define( 'AUTH_SALT',        '=WLgX7D/)Ls! CkT<l)Xz^G/>O=*Z2nt!iVNW^qniu>rL8wVn;rr_FsyR0lUNP;b' );
define( 'SECURE_AUTH_SALT', '|N_;|Z>l=^Z{=X-rJ*cW-HEzr@qeIY|x2?TiSy72..IBbwx+y^e[TK9oqOXN[Q<.' );
define( 'LOGGED_IN_SALT',   ',1kfmJ>!o*LlkX:`xaDaJA3%Io.))E9%GNd5M#&RE66H|]4HmY#G~mAHsph,ZOW!' );
define( 'NONCE_SALT',       '=!y`XH}N~l6oNrR6vn8j&O9pyrb|hJo0o<F+Rk)~<Q@(Otwb99fuXq2](.Ve3vg-' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';

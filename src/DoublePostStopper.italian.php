<?php

/**
 * @package   Double Post Stopper
 * @version   1.0
 * @author    John Rayes <live627@gmail.com>
 * @copyright Copyright (c) 2017, John Rayes
 * @license   http://opensource.org/licenses/MIT MIT
 */

global $helptxt;

$txt['double_post_attempt'] = 'Spiacenti, non è possibile pubblicare messaggi consecutivi. Torna indietro e modifica il messaggio precedente.';
$txt['doublePostThresholds'] = 'Intervallo entro cui l\'utente non è autorizzato a creare doppi post';
$txt['doublePostThresholds_desc'] = 'A user is not allowed to make two or more consecutive posts within a given time period. The applicable group threshold is the lowest in the user\'s groups.<br><br>Example: Global moderators get 1 hour while newbies have 3 days to wait. If a newbie is also a global moderator, then their wait time is 1 hour.';

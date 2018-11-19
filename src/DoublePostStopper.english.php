<?php

/**
 * @package   Double Post Stopper
 * @version   1.1
 * @author    John Rayes <live627@gmail.com>
 * @copyright Copyright (c) 2017, John Rayes
 * @license   http://opensource.org/licenses/MIT MIT
 */

global $helptxt;

$txt['double_post_attempt'] =
    'Sorry, but you are not allowed to double post. Please go back and edit your previous post.';
$txt['doublePostThresholds'] = 'Time interval during which the user is not allowed to double post';
$txt['doublePostThresholds_desc'] =
    'A user is not allowed to make two or more consecutive posts within a given time period. The applicable group threshold is the lowest in the user\'s groups.<br><br>Example: Global moderators get 1 hour while newbies have 3 days to wait. If a newbie is also a global moderator, then their wait time is 1 hour.';
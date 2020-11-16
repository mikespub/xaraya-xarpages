<?php

/**
 * File: $Id$
 *
 * Create a new page type.
 *
 * @package Xaraya
 * @copyright (C) 2004 by Jason Judge
 * @license GPL <http://www.gnu.org/licenses/gpl.html>
 * @link http://www.academe.co.uk/
 * @author Jason Judge
 * @subpackage xarpages
 */

function xarpages_admin_newtype($args)
{
    return(xarMod::guiFunc('xarpages', 'admin', 'modifytype', $args));
}

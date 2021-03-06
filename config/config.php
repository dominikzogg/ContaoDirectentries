<?php if(!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Dominik Zogg 2012
 * @author     Dominik Zogg <dominik.zogg@gmail.com>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

 if(TL_MODE == 'BE')
{
    $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('DirectEntryArticle','prepare');
    $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('DirectEntryCalendar','prepare');
    $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('DirectEntryFaq','prepare');
    $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('DirectEntryForm','prepare');
    $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('DirectEntryNews','prepare');
    $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('DirectEntryNewsletter','prepare');
    $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('DirectEntryThemes','prepare');
    $GLOBALS['TL_HOOKS']['loadLanguageFile'][] = array('DirectEntryPage','prepare');
    $GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('DirectEntries','inject');
}
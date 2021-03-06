<?php

/**
 * fineuploader extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2008-2015, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       http://github.com/terminal42/contao-fineuploader
 */

/**
 * Add palettes to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['fineUploader'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,maxConnections,extensions,minlength,maxlength,isGallery,maxWidth,maxHeight,uploadButtonLabel,chunking,multiple;{store_legend:hide},storeFile,addToDbafs;{expert_legend:hide},class,fSize';
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'chunking';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['chunking'] = 'chunkSize,concurrent';

/**
 * Add fields to tl_form_field
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['isGallery'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['isGallery'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['maxConnections'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['maxConnections'],
    'default'                 => 3,
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'natural', 'tl_class'=>'w50'),
    'sql'                     => "int(10) NOT NULL default '3'"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['chunking'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['chunking'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'clr m12', 'submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['chunkSize'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['chunkSize'],
    'default'                 => 2000000,
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50'),
    'sql'                     => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['concurrent'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['concurrent'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50 m12'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['addToDbafs'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['addToDbafs'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'clr'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['uploadButtonLabel'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['uploadButtonLabel'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('maxlength' => 64, 'tl_class'=>'clr'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['maxWidth'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['maxWidth'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp' => 'digit', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['maxHeight'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['maxHeight'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('rgxp' => 'digit', 'tl_class'=>'w50'),
    'sql'                     => "smallint(5) unsigned NOT NULL default '0'"
);
<?php

use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addField('aria_labeledby_text', 'titleText')

    // now the field is registered in the PaletteManipulator
    // but it still has to be registered in the globals array:
    ->applyToPalette('hyperlink', 'tl_content')
;

// '{type_legend},type,headline;{link_legend},url,target,linkTitle,embed,titleText,rel;{imglink_legend:hide},useImage;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop',

$GLOBALS['TL_DCA']['tl_content']['fields']['aria_labeledby_text'] = [
    'inputType' => 'text',
    'eval' =>['maxlength'=>255, 'tl_class'=>'w50'],
    'sql' => ['type' => 'string', 'length' => 255, 'default' => ''],
];

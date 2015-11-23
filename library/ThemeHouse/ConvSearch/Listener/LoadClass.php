<?php

class ThemeHouse_ConvSearch_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_ConvSearch' => array(
                'model' => array(
                    'XenForo_Model_Conversation',
                ), /* END 'model' */
                'datawriter' => array(
                    'XenForo_DataWriter_ConversationMaster',
                    'XenForo_DataWriter_ConversationMessage',
                ), /* END 'datawriter' */
            ), /* END 'ThemeHouse_ConvSearch' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassModel($class, array &$extend)
    {
        $loadClassModel = new ThemeHouse_ConvSearch_Listener_LoadClass($class, $extend, 'model');
        $extend = $loadClassModel->run();
    } /* END loadClassModel */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new ThemeHouse_ConvSearch_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    } /* END loadClassDataWriter */
}
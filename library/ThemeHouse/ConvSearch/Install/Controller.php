<?php

class ThemeHouse_ConvSearch_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/conversation-search.1721/';

    protected function _preInstall()
    {
        $this->_db->query(
            '
                UPDATE xf_content_type
                SET addon_id = \'XenForo\'
                WHERE addon_id = \'ThemeHouse_ConvSearch\'
                    AND content_type IN (\'conversation\', \'conversation_message\')
        ');
    } /* END _preInstall */

    protected function _getContentTypeFields()
    {
        return array(
            'conversation' => array(
                'search_handler_class' => 'ThemeHouse_ConvSearch_Search_DataHandler_Conversation', /* END 'search_handler_class' */
            ), /* END 'conversation' */
            'conversation_message' => array(
                'search_handler_class' => 'ThemeHouse_ConvSearch_Search_DataHandler_ConversationMessage', /* END 'search_handler_class' */
            ), /* END 'conversation_message' */
        );
    } /* END _getContentTypeFields */
}
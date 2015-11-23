<?php

class ThemeHouse_ConvSearch_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/ConvSearch/Extend/XenForo/DataWriter/ConversationMaster.php' => 'a56086ddc34784b0dabb4db873acfe74',
                'library/ThemeHouse/ConvSearch/Extend/XenForo/DataWriter/ConversationMessage.php' => '779d163a61af03275935f5f885d4f3d3',
                'library/ThemeHouse/ConvSearch/Extend/XenForo/Model/Conversation.php' => 'a6fbf5a95baeae28a956204948292829',
                'library/ThemeHouse/ConvSearch/Install/Controller.php' => '2430235e4bf795b0be92a5a91e3a31aa',
                'library/ThemeHouse/ConvSearch/Listener/LoadClass.php' => '54c928c72b78ebf40c2b8f5e9442532a',
                'library/ThemeHouse/ConvSearch/Listener/TemplateHook.php' => '00f84074c02648b8153382b3472f1d22',
                'library/ThemeHouse/ConvSearch/Search/DataHandler/Conversation.php' => 'd135017a765dc4d3601d1395d6575c74',
                'library/ThemeHouse/ConvSearch/Search/DataHandler/ConversationMessage.php' => '62e2467e6dc8aa3b569a9cf64b5663b5',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
                'library/ThemeHouse/Listener/Template.php' => '0aa5e8aabb255d39cf01d671f9df0091',
                'library/ThemeHouse/Listener/Template/20150106.php' => '8d42b3b2d856af9e33b69a2ce1034442',
                'library/ThemeHouse/Listener/TemplateHook.php' => 'a767a03baad0ca958d19577200262d50',
                'library/ThemeHouse/Listener/TemplateHook/20150106.php' => '71c539920a651eef3106e19504048756',
            ));
    }
}
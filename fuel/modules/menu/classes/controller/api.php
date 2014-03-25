<?php 

namespace Menu;
class Controller_Api extends \Controller_Rest
{


    public function get_show()
    {
        $json = \Menu\Helper_Menu::getMenuTree(\Input::get('idSelect'), \Input::get('show_none'), \Input::get('idMenu'));
        return $this->response($json);
    }

    public function get_lang() 
    {
        $idMenu = \Input::get('id');

        $menu = \LbMenu\Model_Menu::find($idMenu);
        $menu or $menu = new \LbMenu\Model_Menu();
        
        $lang = \Input::get('lang');

        $menuLang = \LbMenu\Helper_Menu::getLang($menu, $lang);
        return $this->response(array('data' => $menuLang->to_array(), 'success' => true));
    }

    public function get_move()
    {
        $menuCurrent = \LbMenu\Model_Menu::find(\Input::get('idCurrent'));
                
        if (\Input::get('idPrev') !== null)
        {
            $menuPrev = \LbMenu\Model_Menu::find(\Input::get('idPrev'));
            $menuCurrent->sibling($menuPrev)->save();
        }
        else if (\Input::get('idNext') !== null)
        {
            $menuNext = \LbMenu\Model_Menu::find(\Input::get('idNext'));
            $menuCurrent->previous_sibling($menuNext)->save();
        }
        
        $json = array('message' => 'success');
        return $this->response($json);
    }

    public function get_eav()  
    {
        $theme = \Input::get('theme');
        $isUpdate = \Input::get('isUpdate');
        $idMenu = \Input::get('idMenu');
        $idRoot = \Input::get('idRoot');

        $eav = \Menu\Helper_Menu::getEav($idMenu, $theme, $isUpdate, false, $idRoot);

        return $this->response(array('data' => $eav['eav'], 'theme_name' => $eav['theme_name'], 'success' => true));
    }

}
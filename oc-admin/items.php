<?php
/**
 * OSClass – software for creating and publishing online classified advertising platforms
 *
 * Copyright (C) 2010 OSCLASS
 *
 * This program is free software: you can redistribute it and/or modify it under the terms
 * of the GNU Affero General Public License as published by the Free Software Foundation,
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

class CAdminItems extends AdminSecBaseModel
{
    //specific for this class
    private $itemManager ;
    
    function __construct() {
        parent::__construct() ;

        //specific things for this class
        $this->itemManager = Item::newInstance() ;
    }

    //Business Layer...
    function doModel() {
        parent::doModel() ;

        //specific things for this class
        switch ($this->action)
        {
            case 'bulk_actions':    echo "BULK ACTIONS (to change): " . Params::getParam('bulk_actions') ;
                                    switch ( Params::getParam('bulk_actions') )
                                    {
                                        case 'activate_all':
                                            $id = Params::getParam('id') ;
                                            $value = 'ACTIVE' ;
                                            try {
                                                if ($id) {
                                                    foreach ($id as $_id) {
                                                        $this->itemManager->update(
                                                                array('e_status' => $value)
                                                                ,array('pk_i_id' => $_id)
                                                        ) ;
                                                        $item = $this->itemManager->findByPrimaryKey($_id) ;
                                                        CategoryStats::newInstance()->increaseNumItems($item['fk_i_category_id']) ;
                                                    }
                                                }
                                                osc_add_flash_message(__('The items have been activated')) ;
                                            } catch (Exception $e) {
                                                osc_add_flash_message(__('Error: ') . $e->getMessage()) ;
                                            }
                                        break;
                                        case 'deactivate_all':
                                            $id = Params::getParam('id') ;
                                            $value = 'INACTIVE';
                                            try {
                                                if ($id) {
                                                    foreach ($id as $_id) {
                                                        $this->itemManager->update(
                                                                array('e_status' => $value)
                                                                ,array('pk_i_id' => $_id)
                                                        ) ;
                                                        $item = $this->itemManager->findByPrimaryKey($_id) ;
                                                        CategoryStats::newInstance()->decreaseNumItems($item['fk_i_category_id']) ;
                                                    }
                                                }
                                                osc_add_flash_message(__('The items have been deactivated')) ;
                                            } catch (Exception $e) {
                                                osc_add_flash_message(__('Error: ') . $e->getMessage()) ;
                                            }
                                        break;
                                        case 'premium_all':
                                            $id = Params::getParam('id') ;
                                            $value = 1 ;
                                            try {
                                                if ($id) {
                                                    foreach ($id as $_id) {
                                                        $this->itemManager->update(
                                                                array('b_premium' => $value)
                                                                ,array('pk_i_id' => $_id)
                                                        ) ;
                                                    }
                                                }
                                                osc_add_flash_message(__('The items have been made premium')) ;
                                            } catch (Exception $e) {
                                                osc_add_flash_message(__('Error: ') . $e->getMessage()) ;
                                            }
                                        break;
                                        case 'depremium_all':
                                            $id = Params::getParam('id') ;
                                            $value = 0 ;
                                            try {
                                                if ($id) {
                                                    foreach ($id as $_id) {
                                                        $this->itemManager->update(
                                                                array('b_premium' => $value)
                                                                ,array('pk_i_id' => $_id)
                                                        ) ;
                                                    }
                                                }
                                                osc_add_flash_message(__('The changes have been made')) ;
                                            } catch (Exception $e) {
                                                osc_add_flash_message(__('Error: ') . $e->getMessage()) ;
                                            }
                                        break;
                                        case 'delete_all':
                                            $id = Params::getParam('id') ;
                                            try {
                                                foreach($id as $i) {
                                                    if ($i) {
                                                        $item = $this->itemManager->findByPrimaryKey($i) ;
                                                        if( $item['e_status'] == 'ACTIVE' ) {
                                                            CategoryStats::newInstance()->decreaseNumItems($item['fk_i_category_id']);
                                                        }
                                                        $this->itemManager->deleteByID($i);
                                                    }
                                                }
                                                osc_add_flash_message(__('The items have been deleted')) ;
                                            } catch (Exception $e) {
                                                osc_add_flash_message(__('Error: ') . $e->getMessage()) ;
                                            }
                                            $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
                                        break;
                                    }
                                    $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
            break;
            case 'delete':          //delete
                                    $id = Params::getParam('id') ;
                                    try {
                                        foreach($id as $i) {
                                            if ($i) {
                                                $item = $this->itemManager->findByPrimaryKey($i) ;
                                                if( $item['e_status'] == 'ACTIVE' ) {
                                                    CategoryStats::newInstance()->decreaseNumItems($item['fk_i_category_id']);
                                                }
                                                $this->itemManager->deleteByID($i) ;
                                            }
                                        }
                                        osc_add_flash_message(__('The items have been deleted.')) ;
                                    } catch (Exception $e) {
                                        osc_add_flash_message(__('Error: ') . $e->getMessage()) ;
                                    }
                                    $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
            break;
            case 'status':          //status
                                    $id = Params::getParam('id') ;
                                    $value = Params::getParam('value') ;

                                    if (!$id)
                                        return false;

                                    $id = (int) $id;

                                    if (!is_numeric($id))
                                        return false;

                                    if (!in_array($value, array('ACTIVE', 'INACTIVE')))
                                        return false;

                                    try {
                                        $this->itemManager->update(
                                                array('e_status' => $value),
                                                array('pk_i_id' => $id)
                                        );

                                        $item = $this->itemManager->findByPrimaryKey($id);
                                        switch ($value) {
                                            case 'ACTIVE':
                                                CategoryStats::newInstance()->increaseNumItems($item['fk_i_category_id']);
                                                break;
                                            case 'INACTIVE':
                                                CategoryStats::newInstance()->decreaseNumItems($item['fk_i_category_id']);
                                                break;
                                        }

                                        osc_add_flash_message(__('The item has been activate.'));
                                    } catch (Exception $e) {
                                        osc_add_flash_message(__('Error: ') . $e->getMessage());
                                    }
                                    $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
            break;
            case 'status_premium':  //status premium
                                    $id = osc_paramRequest('id', false);
                                    $value = osc_paramRequest('value', false);

                                    if (!$id)
                                        return false;

                                    $id = (int) $id;

                                    if (!is_numeric($id))
                                        return false;

                                    if (!in_array($value, array(0, 1)))
                                        return false;

                                    try {
                                        $this->itemManager->update(
                                                array('b_premium' => $value),
                                                array('pk_i_id' => $id)
                                        );
                                        osc_add_flash_message(__('Changes have been made.'));
                                    } catch (Exception $e) {
                                        osc_add_flash_message(__('Error: ') . $e->getMessage());
                                    }
                                    $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
            break;
            case 'item_edit':
            case 'editItem':        //item edit
                                    require_once LIB_PATH . 'osclass/items.php';
                                    $id = osc_paramGet('id', -1);

                                    $item = Item::newInstance()->findByPrimaryKey($id);

                                    $users = User::newInstance()->listAll();

                                    $categories = Category::newInstance()->toTree();
                                    $countries = Country::newInstance()->listAll();
                                    $regions = array();
                                    if( count($countries) > 0 ) {
                                        $regions = Region::newInstance()->getByCountry($item['fk_c_country_code']);
                                    }
                                    $cities = array();
                                    if( count($regions) > 0 ) {
                                        $cities = City::newInstance()->listWhere("fk_i_region_id = %d" ,$item['fk_i_region_id']) ;
                                    }
                                    $currencies = Currency::newInstance()->listAll();

                                    $locales = Locale::newInstance()->listAllEnabled();

                                    if (count($item) > 0) {
                                        $resources = Item::newInstance()->findResourcesByID($id);
                                        $this->doView('items/frm.php') ;
                                    } else {
                                        $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
                                    }
            break;
            case 'item_edit_post':
            case 'editItemPost':    //item edit (post)
                                    require_once LIB_PATH . 'osclass/items.php';

                                    if(isset($_REQUEST['userId'])) {
                                        if($_REQUEST['userId']!='') {
                                            $user = User::newInstance()->findByPrimaryKey($_REQUEST['userId']);
                                            Item::newInstance()->update(array(
                                                'fk_i_user_id' => $_REQUEST['userId'],
                                                's_contact_name' => $user['s_name'],
                                                's_contact_email' => $user['s_email']
                                            ), array('pk_i_id' => $Pid, 's_secret' => $Psecret));
                                        } else {
                                            Item::newInstance()->update(array(
                                                'fk_i_user_id' => NULL,
                                                's_contact_name' => $_REQUEST['contactName'],
                                                's_contact_email' => $_REQUEST['contactEmail']
                                            ), array('pk_i_id' => $Pid, 's_secret' => $Psecret));
                                        }
                                    }

                                    $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
            break;
            case 'deleteResource':  //delete resource
                                    $id = osc_paramGet('id', -1);
                                    $name = osc_paramGet('name', '');
                                    $fkid = osc_paramGet('fkid', -1);

                                    ItemResource::newInstance()->delete(array('pk_i_id' => $id, 'fk_i_item_id' => $fkid, 's_name' => $name));
                                    $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
            break;
            case 'post':            //post
                                    $users = User::newInstance()->listAll();
                                    $categories = Category::newInstance()->toTree();
                                    $countries = Country::newInstance()->listAll();
                                    $regions = array();
                                    if( count($countries) > 0 ) {
                                        $regions = Region::newInstance()->getByCountry($countries[0]['pk_c_code']);
                                    }
                                    $cities = array();
                                    if( count($regions) > 0 ) {
                                        $cities = City::newInstance()->listWhere("fk_i_region_id = %d" ,$regions[0]['pk_i_id']) ;
                                    }
                                    $currencies = Currency::newInstance()->listAll();

                                    $locales = Locale::newInstance()->listAllEnabled();
                                    $item = array() ;
                                    $resources = array() ;

                                    $new_item = TRUE ;
                                    
                                    $this->add_css('demo_table.css') ;
                                    $this->add_global_js('jquery.dataTables.min.js') ;
                                    $this->add_css('new_item_layout.css') ;
                                    $this->doView('items/frm.php') ;
            break;
            case 'post_item':       //post item
                                    $admin = TRUE;
                                    $manager = Item::newInstance();

                                    require_once LIB_PATH . 'osclass/items.php';

                                    $this->redirectTo( osc_admin_base_url(true) . "?page=items" ) ;
            break;
            default:                //default
                                    $this->add_global_js('jquery.dataTables.min.js') ;
                                    $this->add_css('item_list_layout.css') ;
                                    $this->add_css('tabs.css') ;
                                    $this->add_global_js('tabber-minimized.js') ;
                                    $this->add_css('demo_table.css') ;

                                    $catId = Params::getParam('catId') ;

                                    //preparing variables for the view
                                    $this->_exportVariableToView("items", ( ($catId) ? $this->itemManager->findByCategoryID($catId) : $this->itemManager->listAllWithCategories() ) ) ;
                                    $this->_exportVariableToView("catId", $catId) ;
                                    $this->_exportVariableToView("stat", Params::getParam('stat')) ;

                                    //calling the view...
                                    $this->doView('items/index.php') ;
        }
    }

    //hopefully generic...
    function doView($file) {
        $this->osc_print_html($file) ;
    }
}

?>

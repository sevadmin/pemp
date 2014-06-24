<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Продукты
 */
class Controller_Admin_Abonents extends Controller_Admin {

    public function before() {
        parent::before();

        // Вывод в шаблон
        $this->template->submenu = Widget::load('menuproducts');
    }

    public function action_index() {
        // Вызов объекта таблици БД ('модель') и получение массива значений
    $abonents = ORM::factory('abonent')->find_all();
        
        $content = View::factory('admin/abonents/v_abonents_index', array(
            'abonents' => $abonents,
        ));

        // Вывод в шаблон
        $this->template->page_title = 'Абоненты';
        $this->template->block_center = array($content);
    }
    
    
    public function action_add($dogovor, $login, $pass, $fio, $ip, $mac, $balans, $status) {
        // Вызов объекта таблици БД ('модель')
        $abonents = ORM::factory('abonent');
        // Зполнение даннми
        $abonents->dogovor = $dogovor;
        $abonents->login = $login;
        $abonents->pass = $pass;
        $abonents->fio = $fio;
        $abonents->ip = $ip;
        $abonents->mac = $mac;
        $abonents->balans = $balans;
        $abonents->status = $status;
        $abonents->save();
        
        $content = View::factory('admin/abonents/v_abonents_index', array(
            'abonents' => $abonents,
        ));

        // Вывод в шаблон
        $this->template->page_title = 'Абоненты';
        $this->template->block_center = array($content);
    }

    public function action_update($id) {
        // Вызов объекта таблици БД ('модель')
        $abonents = ORM::factory('abonent', $id);
        // Зполнение даннми
        $abonents->dogovor = $dogovor;
        $abonents->login = $login;
        $abonents->pass = $pass;
        $abonents->fio = $fio;
        $abonents->ip = $ip;
        $abonents->mac = $mac;
        $abonents->balans = $balans;
        $abonents->status = $status;
        $abonents->save();
        $abonents->balans = 100;
        $abonents->status = 1;
        $abonents->save();
        
        $content = View::factory('admin/abonents/v_abonents_index', array(
            'abonents' => $abonents,
        ));

        // Вывод в шаблон
        $this->template->page_title = 'Абоненты';
        $this->template->block_center = array($content);
    }
// Удаление записи из БД    
    public function action_delete($id) {
        // Вызов объекта таблици БД ('модель')
        $abonents = ORM::factory('abonent', $id);
            if ($abonents->loaded()){
                $abonents->delite();
            }
        
        $content = View::factory('admin/abonents/v_abonents_index', array(
            'abonents' => $abonents,
        ));

        // Вывод в шаблон
        $this->template->page_title = 'Абоненты';
        $this->template->block_center = array($content);
    }

}
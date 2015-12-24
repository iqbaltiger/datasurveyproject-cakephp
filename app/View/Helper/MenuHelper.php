<?php
App::uses('AppHelper', 'View/Helper');
class MenuHelper extends AppHelper {

	public $helpers = array('Html', 'Form');

	public function generateMenu($threaded, $navbarbar_class = 'navbar-default', $dropdown_class = 'nav navbar-nav', $enable_navbar = 1, $search = 1,$active_menu = '', $home_menu=1, $ajax_menu_class = 'ajax_page') {
		if (sizeof($threaded) > 0) {			
			$html = '';
			if ($enable_navbar == 1) {
				$html .= "<nav class='navbar {$navbarbar_class}' role='navigation'>";
				$html .= '<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>';
				$html .= '</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">';
			}
			$homeActive = '';
			if($active_menu ==''){
				$homeActive = 'active';
			}

			$html .= "<ul class='{$dropdown_class}'>";

			if($home_menu){
				$html .= '<li class="'.$homeActive.'">';
				$html .= $this->Html->link('Home',array('controller'=>'pages', 'action'=>'index', 'admin'=>false),array('class'=>' '.$ajax_menu_class));
				$html .= '</li>';
			}

			foreach ($threaded as $key => $node) {
				if (isset($node['children'][0])) {
					$html .= '<li class="dropdown">';
					$is_parent_menu = 1;
				} else {
					$html .= '<li>';
					$is_parent_menu = 0;
				}

				foreach ($node as $type => $threaded) {
					if ($type !== 'children') {
						if(!empty($active_menu) and ($threaded['slug'] == $active_menu)){
							$active_class = 'active';
						}else {
							$active_class = '';
						}
						$ajax_class = $ajax_menu_class;
						if($threaded['is_ajax_page'] == '0'){
							$ajax_class = '';
						}

						if ($is_parent_menu == 0) {
							if ($threaded['type'] != 'external_link') {
								$html .= $this -> Html -> link("{$threaded['title']}", "/details/{$threaded['slug']}", array("class" => " trigger {$active_class} {$ajax_class}"));
							} else {
								$html .= $this -> Html -> link("{$threaded['title']}", "http://{$threaded['url']}", array("class" => " trigger {$active_class} {$ajax_class}"));								
							}

						} else {
							$html .= $this -> Html -> link("{$threaded['title']}<b class='caret'></b>", "/details/{$threaded['id']}", array("class" => "dropdown-toggle", "data-toggle" => "dropdown", "data-hover" => "dropdown", 'escape' => false));
						}
					} else {
						if (!empty($threaded)) {
							$html .= $this -> generateMenu($threaded, '', 'dropdown-menu', 0, 0,$active_menu,$home_menu=0);
						}
					}
				}
				$html .= '</li>';
			}
			$html .= '</ul>';
			if ($search == 1) {
				$html .= '<div class="search-widget hidden-xs hidden-sm">
				<div class="search">' . $this -> Form -> create('Search', array('id' => 'SearchContentDetailsForm', 'url' => array('controller' => 'pages', 'action' => 'search'))) . $this -> Form -> input('keyword', array('type' => 'text', 'div' => false, 'label' => false, 'placeholder' => 'Search', 'class' => 'search-query')) . $this -> Form -> end();

				$html .= '</div><a href="javascript:void(0)" onclick="submit_search_form()"><div class="social-box"><i class="mukam-search"></i></div></a>
				</div>';
			}
			if ($enable_navbar == 1) {
				$html .= '</div></div>';
			}
			return $html;
		} else {
			return FALSE;
		}
	}

	public function generateSortableMenu($threaded) {
		if (sizeof($threaded) > 0) {
			$html = '';

			$html .= '<ul class="custom-list-unstyled sortable">';
			foreach ($threaded as $key => $node) {
				$html .= '<li class="ui-state-default ">';
				$html .= "<input type='hidden' value='{$node['Menu']['id']}' name='order[]'>";
				foreach ($node as $type => $threaded) {
					if ($type !== 'children') {

						$html .= $threaded['title'];
					} else {
						if (!empty($threaded)) {
							$html .= $this -> generateSortableMenu($threaded);
						}
					}
				}
				$html .= '</li>';
			}
			$html .= '</ul>';
			return $html;
		} else {
			return 'No menu is found.';
		}
	}


	public function generateSidebarMenu($threaded, $navbarbar_class = 'navbar-default', $dropdown_class = 'nav navbar-nav', $enable_navbar = 1, $search = 1,$active_menu = '', $home_menu=1, $ajax_menu_class = 'ajax_page') {
		
		if (sizeof($threaded) > 0) {			
			$html = '';
			if ($enable_navbar == 1) {
				$html .= "<nav class='navbar {$navbarbar_class}' role='navigation'>";
				$html .= '<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>';
				$html .= '</div><div class="collapse navbar-collapse navbar-ex1-collapse">';
			}
			$homeActive = '';
			if($active_menu ==''){
				$homeActive = 'active';					
			}
			$html .= '<div class="widget side-menu-bar">';
			$html .= '<div class="widget-header "><h3> Sidebar</h3></div>';
			$html .= '<div class="widget-content">';
			$html .= "<ul class='{$dropdown_class}'>";

			if($home_menu){
				$html .= '<li class="'.$homeActive.'">';
				$html .= $this->Html->link('Home',array('controller'=>'pages', 'action'=>'index'),array('class'=>' '.$ajax_menu_class));
				$html .= '</li>';
			}

			foreach ($threaded as $key => $node) {
				if (isset($node['children'][0])) {
					$html .= '<li class="dropdown">';
					$is_parent_menu = 1;
				} else {
					$html .= '<li>';
					$is_parent_menu = 0;
				}

				foreach ($node as $type => $threaded) {
					if ($type !== 'children') {						
						if(!empty($active_menu) and ($threaded['slug'] == $active_menu)){
							$active_class = 'active';
						}else {
							$active_class = '';
						}
						$ajax_class = $ajax_menu_class;
						if($threaded['is_ajax_page'] == '0'){
							$ajax_class = '';
						}

						if ($is_parent_menu == 0) {
							if ($threaded['type'] != 'external_link') {
								$html .= $this -> Html -> link("{$threaded['title']}", "/details/{$threaded['slug']}", array("class" => " trigger {$active_class} {$ajax_class}"));
							} else {
								$html .= $this -> Html -> link("{$threaded['title']}", "http://{$threaded['url']}", array("class" => " trigger {$active_class} {$ajax_class}"));								
							}

						} else {
							$html .= $this -> Html -> link("{$threaded['title']}<b class='caret'></b>", "/details/{$threaded['id']}", array("class" => "dropdown-toggle", "data-toggle" => "dropdown", "data-hover" => "dropdown", 'escape' => false));
						}
					} else {
						if (!empty($threaded)) {
							$html .= $this -> generateMenu($threaded, '', 'dropdown-menu', 0, 0,$active_menu,$home_menu=0);
						}
					}
				}
				$html .= '</li>';
			}
			$html .= '</ul>';
			$html .= '</div>';
			$html .= '<div class="shadow-right-side-menu"></div>';
			$html .= '</div>';
			
			if ($search == 1) {
				$html .= '<div class="search-widget hidden-xs hidden-sm">
				<div class="search">' . $this -> Form -> create('Search', array('id' => 'SearchContentDetailsForm', 'url' => array('controller' => 'pages', 'action' => 'search'))) . $this -> Form -> input('keyword', array('type' => 'text', 'div' => false, 'label' => false, 'placeholder' => 'Search', 'class' => 'search-query')) . $this -> Form -> end();

				$html .= '</div><a href="javascript:void(0)" onclick="submit_search_form()"><div class="social-box"><i class="mukam-search"></i></div></a>
				</div>';
			}
			if ($enable_navbar == 1) {
				$html .= '</div></div>';
			}
			return $html;
		} else {
			return FALSE;
		}
	}
}

<?php
class ControllerAnalyticsYandexMetrika extends Controller {
    public function index() {
		return html_entity_decode($this->config->get('yandex_metrika_code'), ENT_QUOTES, 'UTF-8');
	}
}
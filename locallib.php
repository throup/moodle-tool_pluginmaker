<?php
class PluginMaker {
	private $selectorview;
	
	public function __construct() {
		$this->selectorview = new PluginSelector();
	}

	public function viewselector() {
		$OUTPUT = $this->get_output();
		echo $OUTPUT->container(get_string('introduction', 'tool_pluginmaker'));
		echo $OUTPUT->container(get_string('selectplugintype', 'tool_pluginmaker'));
		$this->selectorview->view();
	}

	public function get_output() {
		global $OUTPUT;
		return $OUTPUT;
	}
}

class PluginSelector {
	private $loadedplugins = array();

	public function __construct() {
		$this->loadplugins();
	}

	private function loadplugins() {
		$this->loadedplugins[] = new BlockPlugin();
	}

	private function plugins() {
		return $this->loadedplugins;
	}

	public function view() {
		foreach ($this->plugins() as $plugin) {
			$plugin->view();
		}
	}
}

class BlockPlugin {
	public function view() {

	}
}

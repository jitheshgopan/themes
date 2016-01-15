<?php
namespace Caffeinated\Themes;

use Illuminate\View\FileViewFinder;

class ThemeViewFinder extends FileViewFinder {

	public function setPaths($paths){
		$this->paths = $paths;
	}

	public function test(){
		dd($this->paths);
	}

}